<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            'name'=>[
                'require',
                'string'
            ],
            'slug'=>[
                'string'
            ],
            'description'=>[
                'text'
            ],
            'image'=>[
                'text',
                'mimes: png,jpeg,jpg'
            ],
            'meta_title'=>[
                'string'
            ],
            'meta_description'=>[
                'text'
            ],
            'meta_keyword'=>[
                'string'
            ],
            'nav_status'=>[
                'integer'
            ],
            'status'=>[
                'integer'
            ],
            'created_by'=>[
                'integer'
            ]

        ];
    }
}
