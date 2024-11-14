<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillsRequest extends FormRequest
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
            'skill_name' => 'required|string|max:30',
            'percent' => 'required',
        ];
    }

    public function messages(): array
    {

        return [
            'skill_name.required' => 'Yetenek adı zorunludur',
            'percent.required' => 'Yüzde alanı zorunludur'
        ];
    }
}
