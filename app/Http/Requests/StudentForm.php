<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StudentForm extends FormRequest
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
        $user = Auth::user();

        if ('POST' == Request::method()) {
            return [
                'name' => ['required', 'string', 'max:255'],
                'age' => ['required', 'integer', 'numeric'],
                'gender' => ['required', 'string', 'max:255'],
                'teacher_id' =>['required','exists:teachers,id']

            ];
        }

        if ('PUT' == Request::method()) {
            return [
                'name' => ['required', 'string', 'max:255'],
                'age' => ['required', 'integer', 'numeric'],
                'gender' => ['required', 'string', 'max:255'],
                'teacher_id'=>['required','exists:teachers,id']
            ];
        }
    }
}
