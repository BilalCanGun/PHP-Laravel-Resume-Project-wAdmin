<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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

            'edu_start' => 'required|date',
            'edu_end' => 'required|date',
            'school_name' => 'required|string|max:250',
            'school_description' => 'required|string|max:250',

        ];
    }
    public function messages(): array
    {
        return [
            'edu_start.required' => 'Eğitim başlangıç alanı zorunludur.',
            'edu_end.required' => 'Eğitim bitişi zorunludur.',
            'school_name.required' => 'Okul adı zorunludur.',
            'school_description.required' => 'Açıklama giriniz.',

        ];
    }
}
