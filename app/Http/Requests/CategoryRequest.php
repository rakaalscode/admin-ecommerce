<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:25|unique:categories',
            'feature_image' => 'required|image|mimes:jpg,png,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kolom nama kategori harus diisi',
            'name.unique:categories' => 'Kolom nama kategori sudah dipakai',
            'feature_image.required' => 'Kolom gambar kategori harus diisi',
            'feature_image.mimes:jpg,png,jpeg' => 'Format gambar harus JPEG, JPG, PNG',
        ];
    }
}
