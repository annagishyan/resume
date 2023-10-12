<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumePageRequest extends FormRequest
{
  const FIRST_NAME = 'first_name';
  const LAST_NAME = 'last_name';
  const EMAIL = 'email';
  const POSITION = 'position';
  const EDUCATION = 'education';
  const IMAGE = 'image';

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            self::FIRST_NAME => [
                'required',
                'string',
            ],
            self::LAST_NAME => [
                'required',
                'string',
            ],
            self::EMAIL => [
                'required',
                'email',
            ],
            self::POSITION => [
                'nullable',
                'string',
            ],
            self::EDUCATION => [
                'nullable',
                'string',
            ],
            self::IMAGE => [
                'nullable',
//                'required'
//                'image',
//                'mimes:jpeg,png,jpg',  TODO 'image' function doesn't work properly!!  sorry((
            ]
        ];
    }
}


