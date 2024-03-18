<?php

namespace App\Http\Requests\Admin;

use App\Models\Branch;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BranchRequest extends FormRequest
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
            'address' => 'required',
            'phone' => 'required',
            'image' => $this->routeIs('admin.branches') ? 'required|image|max:2048' : 'image|max:2048',
            'map' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter branch name',
            'address.required' => 'Please enter branch address',
            'phone.required' => 'Please enter branch phone number',
            'image.required' => $this->routeIs('admin.branches') ? 'Please enter branch image' : '',
            'image.image' => 'Please choose image not file',
            'image.max' => 'Maximum size allowed for image is 2MB',
            'map.required' => 'Please enter branch map link'
        ];
    }

    public function store()
    {
        $branch = new Branch();

        $branch->name = $this->name;
        $branch->address = $this->address;
        $branch->phone = $this->phone;
        $branch->map = $this->map;
        $branch->image = image_store($this->image, 'branches');

        if ($branch->save()) {
            image_edit($this->image->hashName(), 'branches', 140, 140);
        }
    }

    public function edit($id)
    {
        $branch = Branch::find($id);

        $branch->name = $this->name;
        $branch->address = $this->address;
        $branch->phone = $this->phone;
        $branch->map = $this->map;

        if ($this->image) {
            @unlink(storage_path('app/public/branches/' . $branch->image));
            $branch->image = image_store($this->image, 'branches');
            image_edit($this->image->hashName(), 'branches', 140, 140);
        }

        $branch->save();
    }
}
