<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'document_type' => ['required', 'string', 'max:255'],
            'source_language' => ['required', 'string', 'max:50'],
            'target_language' => ['required', 'string', 'max:50'],
            'document' => ['nullable', 'file', 'max:10240', 'mimes:pdf,doc,docx,txt,rtf'],
            'message' => ['nullable', 'string', 'max:1000'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'document.max' => 'The document must not be larger than 10MB.',
            'document.mimes' => 'The document must be a file of type: PDF, DOC, DOCX, TXT, or RTF.',
        ];
    }
}