<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'image' => 'nullable|url',
            'cv' => 'nullable|string',
            'phone' => 'nullable|numeric',
            'address' => 'nullable|string|max:150',
            'services' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.max' => 'Il campo nome non può superare un massimo 50 caratteri.',
            'surname.required' => 'Il campo cognome è obbligatorio.',
            'surname.max' => 'Il campo cognome non può superare un massimo 50 caratteri.',
            'image.url' => 'Il campo immagine deve essere un URL valido.',
            'cv.string' => 'Il campo curriculum deve essere una stringa.',
            'phone.numeric' => 'Il campo telefono deve essere un numero.',
            'address.string' => 'Il campo indirizzo deve essere una stringa.',
            'address.max' => 'Il campo indirizzo non può superare un massimo 150 caratteri.',
            'services.string' => 'Il campo servizi deve essere una stringa.',
        ];
    }
    
}
