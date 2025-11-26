<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required',
            'location' => 'required',
            'completion_date' => 'nullable|date',
            'services_provided' => 'nullable',
            'attachment_url' => 'nullable|mimes:jpg,jpeg,png|max:3072|dimensions:width:370px,height:275px',
        ];
    }
}
