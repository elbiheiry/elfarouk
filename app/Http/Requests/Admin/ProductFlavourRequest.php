<?php

namespace App\Http\Requests\Admin;

use App\Models\ProductFlavour;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductFlavourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->first(), 500));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => $this->routeIs('admin.products.flavours') ? 'required|image|max:2048' : 'image|max:2048',
            'name' => 'required'
        ];
    }

    /*
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'image.required' => $this->routeIs('admin.products.flavours') ? 'Please upload product flavour image' : '',
            'image.image' => 'Please upload an image not file',
            'image.max' => 'Maximum size allowed for image is 2MB',
            'name.required' => 'Please enter product flavour name'
        ];
    }

    public function store($id)
    {
        $flavour = new ProductFlavour();

        $flavour->product_id = $id;
        $flavour->name = $this->name;
        $flavour->image = image_store($this->image , 'products');

        if ($flavour->save()){
            image_edit($this->image->hashName() , 'products' , 350 , 460);
        }
    }

    public function edit($id)
    {
        $flavour = ProductFlavour::find($id);

        $flavour->name = $this->name;
        if ($this->image){
            @unlink(storage_path('app/public/products/'.$flavour->image));
            $flavour->image = image_store($this->image , 'products');
            image_edit($this->image->hashName() , 'products' , 350 , 460);
        }

        $flavour->save();
    }
}
