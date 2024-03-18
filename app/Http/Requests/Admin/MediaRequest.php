<?php

namespace App\Http\Requests\Admin;

use App\Models\Media;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MediaRequest extends FormRequest
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
            'image' => $this->routeIs('admin.media') ? 'required|image|max:2048' : 'image|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => $this->routeIs('admin.media') ? 'Please upload an image' : '',
            'image.image' => 'Please select an image not file',
            'image.max' => 'Maximum size allowed for image is 2MB'
        ];
    }

    public function store()
    {
        $media = new Media();

        $media->video = $this->video;

        $media->image = image_store($this->image, 'media');

        if ($media->save()) {
            image_edit($this->image->hashName(), 'media', 750, 750);
        }
    }

    public function edit($id)
    {
        $media = Media::find($id);

        $media->video = $this->video;
        if ($this->image) {
            @unlink(storage_path('app/public/media/' . $media->image));
            $media->image = image_store($this->image, 'media');
            image_edit($this->image->hashName(), 'media', 750, 750);
        }

        $media->save();
    }

}
