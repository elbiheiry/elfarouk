<?php

namespace App\Http\Requests\Admin;

use App\Models\Setting;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SettingsRequest extends FormRequest
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
            'address' => 'required',
            'sales' => 'required',
            'complaints' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'map' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'instagram' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'Please enter your address',
            'sales.required' => 'Please enter your sales number',
            'complaints.required' => 'Please enter a phone number for complaints and suggestions',
            'email.required' => 'Please enter an email address for contact',
            'email.email' => 'Please enter a valid email',
            'phone.required' => 'Please enter your phone number',
            'map.required' => 'Please enter your map address',
            'facebook.required' => 'Please enter your facebook page link',
            'youtube.required' => 'Please enter your youtube channel link',
            'instagram.required' => 'Please enter your instagram account link'
        ];
    }

    public function edit()
    {
        $settings = Setting::first();

        $settings->address = $this->address;
        $settings->sales = $this->sales;
        $settings->complaints = $this->complaints;
        $settings->email = $this->email;
        $settings->phone = $this->phone;
        $settings->map = $this->map;
        $settings->facebook = $this->facebook;
        $settings->youtube = $this->youtube;
        $settings->instagram = $this->instagram;

        $settings->save();
    }
}
