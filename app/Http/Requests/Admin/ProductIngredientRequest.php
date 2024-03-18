<?php

namespace App\Http\Requests\Admin;

use App\Models\ProductIngredient;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductIngredientRequest extends FormRequest
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
            'image' => $this->routeIs('admin.products.ingredients') ? 'required|image|max:2048' : 'image|max:2048',
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
            'image.required' => $this->routeIs('admin.products.ingredients') ? 'Please upload product ingredient image' : '',
            'image.image' => 'Please upload an image not file',
            'image.max' => 'Maximum size allowed for image is 2MB',
            'name.required' => 'Please enter product ingredient name'
        ];
    }

    public function store($id)
    {
        $ingredient = new ProductIngredient();

        $ingredient->product_id = $id;
        $ingredient->name = $this->name;
        $ingredient->image = image_store($this->image , 'products');

        if ($ingredient->save()){
            image_edit($this->image->hashName() , 'products' , 148 , 148);
        }
    }

    public function edit($id)
    {
        $ingredient = ProductIngredient::find($id);

        $ingredient->name = $this->name;
        if ($this->image){
            @unlink(storage_path('app/public/products/'.$ingredient->image));
            $ingredient->image = image_store($this->image , 'products');
            image_edit($this->image->hashName() , 'products' , 148 , 148);
        }

        $ingredient->save();
    }
}
