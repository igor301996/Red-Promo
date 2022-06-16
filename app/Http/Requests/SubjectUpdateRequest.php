<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectUpdateRequest extends FormRequest
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
            'teacher_id' => 'required',
            'information_about_discipline' => 'required',
            'summary_topic' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'teacher_id.required' => 'A teacher_id is required',
            'information_about_discipline.required' => 'A information_about_discipline is required',
            'summary_topic.required' => 'A summary_topic is required',
        ];
    }
}
