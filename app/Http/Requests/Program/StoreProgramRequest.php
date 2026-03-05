<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProgramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4|max:255',
            'category_id' => 'required',
            'description' => 'required|min:20',
            'photo' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Bagian :attribute harus diisi',
            'title.min' => 'Bagian :attribute harus terdiri dari :min karakter',
            'title.max' => 'Bagian :attribute tidak boleh lebih dari :max karakter',
            'category_id.required' => 'Bagian :attribute harus dipilih',
            'description.required' => 'Bagian :attribute harus diisi',
            'description.min' => 'Bagian :attribute harus terdiri dari :min karakter',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'Judul',
            'category_id' => 'Kategori',
            'description' => 'Deskripsi',
        ];
    }
}
