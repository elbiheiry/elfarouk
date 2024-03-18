<?php

namespace App\Http\Requests\Admin;

use App\Models\Member;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MemberRequest extends FormRequest
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
            'name' => 'required',
            'position' => 'required',
            'image' => $this->routeIs('admin.members') ? 'required|image|max:2048' : 'image|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter member name',
            'position.required' => 'Please enter member position',
            'image.required' => $this->routeIs('admin.members') ? 'Please upload member image' : '',
            'image.image' => 'Please choose an image not file',
            'image.max' => 'Maximum size allowed for image is 2 MB'
        ];
    }

    public function store()
    {
        $member = new Member();

        $member->name = $this->name;
        $member->position = $this->position;
        $member->image = image_store($this->image, 'members');

        if ($member->save()) {
            image_edit($this->image->hashName(), 'members', 170, 170);
        }
    }

    public function edit($id)
    {
        $member = Member::find($id);

        $member->name = $this->name;
        $member->position = $this->position;

        if ($this->image) {
            @unlink(storage_path('app/public/members/' . $member->image));
            $member->image = image_store($this->image, 'members');
            image_edit($this->image->hashName(), 'members', 170, 170);
        }

        $member->save();

    }
}
