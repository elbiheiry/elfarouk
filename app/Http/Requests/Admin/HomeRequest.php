<?php

namespace App\Http\Requests\Admin;

use App\Models\Home;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class HomeRequest extends FormRequest
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
            'title1' => 'required',
            'description1' => 'required',
            'image1' => 'image|max:2024',
            'image2' => 'image|max:2024',
            'title2' => 'required',
            'description2' => 'required',
            'title3' => 'required',
            'description3' => 'required',
            'title4' => 'required',
            'description4' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title1.required' => 'Please enter first section title',
            'description1.required' => 'Please enter first section description',
            'image1.image' => 'Please select image not file',
            'image1.max' => 'Maximum size allowed for image is 2MB',
            'image2.image' => 'Please select image not file',
            'image2.max' => 'Maximum size allowed for image is 2MB',
            'title2.required' => 'Please enter branches section title',
            'description2.required' => 'Please enter branches section description',
            'title3.required' => 'Please enter members section title',
            'description3.required' => 'Please enter members section description',
            'title4.required' => 'Please enter media section title',
            'description4.required' => 'Please enter media section description'
        ];
    }

    public function edit()
    {
        $home = Home::first();

        $home->title1 = $this->title1;
        $home->title2 = $this->title2;
        $home->title3 = $this->title3;
        $home->title4 = $this->title4;
        $home->description1 = $this->description1;
        $home->description2 = $this->description2;
        $home->description3 = $this->description3;
        $home->description4 = $this->description4;

        if ($this->image1) {
            @unlink(storage_path('app/public/home/' . $home->image1));
            $home->image1 = image_store($this->image1 , 'home');
            image_edit($this->image1->hashName() , 'home' , 470 , 615);
        }

        if ($this->image2) {
            @unlink(storage_path('app/public/home/' . $home->image2));
            $home->image2 = image_store($this->image2 , 'home');
            image_edit($this->image2->hashName() , 'home' , 445 , 590);
        }

        $home->save();
    }
}
