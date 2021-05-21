<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StudentMarkForm extends FormRequest
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
                'maths' => ['required', 'integer', 'numeric'],
                'science' => ['required', 'integer', 'numeric'],
                'history' => ['required', 'integer', 'numeric'],
                'term' => ['required', 'in:one,two'],
                'student_id' =>['required','exists:students,id']

            ];
        }

        if ('PUT' == Request::method()) {
            return [
                'maths' => ['required', 'integer', 'numeric'],
                'science' => ['required', 'integer', 'numeric'],
                'history' => ['required', 'integer', 'numeric'],
                'term' => ['required', 'in:one,two'],
                'student_id' =>['required','exists:students,id']
            ];
        }
    }
}
