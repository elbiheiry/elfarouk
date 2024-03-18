<?php

namespace App\Http\Requests\Admin;

use App\Models\Product;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
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
            'image' => $this->routeIs('admin.products') ? 'required|image|max:2048' : 'image|max:2048',
            'name' => 'required',
            'slug' => 'required',
            'color' => 'required',
            'description' => 'required'
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
            'image.required' => $this->routeIs('admin.products') ? 'Please upload product image' : '',
            'image.image' => 'Please upload an image not file',
            'image.max' => 'Maximum size allowed for image is 2MB',
            'name.required' => 'Please enter product name',
            'slug.required' => 'Please enter product slug',
            'color.required' => 'Please choose background color',
            'description,required' => 'Please enter product description'
        ];
    }

    public function store()
    {
        $product = new Product();

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->color = $this->color;
        $product->description = $this->description;

        $product->image = image_store($this->image , 'products');

        if ($product->save()){
            image_edit($this->image->hashName() , 'products' , 350 , 460);
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->color = $this->color;
        $product->description = $this->description;

        if ($this->image){
            @unlink(storage_path('app/public/products/'.$product->image));
            $product->image = image_store($this->image , 'products');
            image_edit($this->image->hashName() , 'products' , 350 , 460);
        }

        $product->save();
    }
}
