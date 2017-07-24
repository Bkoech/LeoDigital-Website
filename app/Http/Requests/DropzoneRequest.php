<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class DropzoneRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'file' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'No file specified.',
            'file.image' => 'Not a valid image.',
        ];
    }
}