<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
        // nanti buat atentikasi harus di true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'note' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul Harus Diisi',
            'note.required' => 'Catatan Harus Diisi'
        ];
    }
}
