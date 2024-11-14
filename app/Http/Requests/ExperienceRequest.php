<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'job_start' => 'required|date',
            'job_end' => 'required|date',
            'company' => 'required|string|max:255',
            'description' => 'required|string|max:255'

        ];
    }
    public function messages(): array
    {
        return [
            'job_start.required' => 'İş başlangıç alanı zorunludur.',
            'job_end.required' => 'İş bitişi zorunludur.',
            'company.required' => 'Şirket adı zorunludur.',
            'description.required' => 'Açıklama giriniz.',

        ];
    }
}
