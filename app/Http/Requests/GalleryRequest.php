<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'no_kk' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => '',
            'status' => 'required',
            'pendidikan' => 'required',
            'foto' => 'file|image|max:1024'
        ];
    }
}
