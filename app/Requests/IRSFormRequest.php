<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IRSFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $uniqueSemesters = implode(',', $this->uniqueSemesters); // Fetch unique semester values from the controller

        return [
            'semester' => 'required|in:' . $uniqueSemesters,
            'IP' => 'required',
            'SKS' => 'required',
        ];
    }
}
