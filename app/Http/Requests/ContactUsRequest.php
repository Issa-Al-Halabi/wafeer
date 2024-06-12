<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|max:255|min:3",
            "phone" => "required|digits_between:8,13",
            "email" => "required|max:255|min:3|email",
            "subject" => "required|max:255|min:3",
            "message" => "required|min:3",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "الاسم مطلوب",
            "name.max" => "الاسم يجب ان يكون اقل من 255",
            "name.min" => "الاسم يجب ان يكون اكثر من 3",

            "phone.required" => "الرقم مطلوب",
            "phone.digits_between" => "الرقم يجب ان يكون بين 8 و 13",

            "email.required" => "البريد الالكتروني مطلوب",
            "email.email" => "يحب ان يكون بريد الكتروني صالح",
            "email.max" => "البريد الالكتروني يجب ان يكون اقل من 255",
            "email.min" => "البريد الالكتروني يجب ان يكون اكثر من 3",

            "subject.required" => "الموضوع مطلوب",
            "subject.max" => "الموضوع يجب ان يكون اقل من 255",
            "subject.min" => "الموضوع يجب ان يكون اكثر من 3",

            "message.required" => "الرسالة مطلوب",
            "subject.min" => "الرسالة يجب ان تكون اكثر من 3",
        ];
    }
}
