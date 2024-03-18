<?php

namespace App\Http\Requests\Admin;

use App\Models\About;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AboutRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:2048',
            'video' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter section title',
            'description.required' => 'Please enter section description',
            'image.image' => 'Please select image not file',
            'image.max' => 'Maximum size allowed for image is 2MB',
            'video.required' => 'Please enter youtube video id'
        ];
    }

    public function edit()
    {
        $about = About::first();

        $about->title = $this->title;
        $about->description = $this->description;
        $about->video = $this->video;

        if ($this->image) {
            @unlink(storage_path('app/public/about/' . $about->image));
            $about->image = image_store($this->image , 'about');
            image_edit($this->image->hashName() ,'about' ,420 , 420);
        }

        $about->save();
    }
}
