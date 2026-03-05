<?php

namespace App\Http\Requests\Donation;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonationRequest extends FormRequest
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
            'bank_id' => 'required|exists:banks,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1000',
            'proof' => 'required|string',
            'message' => 'nullable|string|max:1000',
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
            'name.required' => 'Nama wajib diisi',
            'name.max' => ':attribute tidak boleh lebih dari :max karakter',
            'phone.required' => 'Nomor HP wajib diisi',
            'phone.max' => 'Nomor HP tidak boleh lebih dari :max karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.max' => 'Email tidak boleh lebih dari :max karakter',
            'amount.required' => 'Jumlah donasi wajib diisi',
            'amount.min' => 'Minimal donasi Rp 1.000',
            'proof.required' => 'Bukti donasi wajib diunggah',
            'message.max' => ':attribute tidak boleh lebih dari :max karakter',
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
            'name' => 'Nama',
            'phone' => 'Nomor HP',
            'email' => 'Alamat Email',
            'amount' => 'jumlah',
            'proof' => 'Bukti',
            'message' => 'Pesan',
        ];
    }
}
