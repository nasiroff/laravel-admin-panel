<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{


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
        $before = date('Y-m-d', strtotime(date('Y-m-d') . ' -18 year'));
        switch ($this->method()) {
            case "GET":
            case "HEAD":
            case "DELETE":
                {
                    return [];
                }
            case "POST":
                {
                    return [
                        'name' => 'required|min:3|max:15|alpha',
                        'last_name' => 'required|min:3|max:15|alpha',
                        'email' => 'required|email|unique:employee,email',
                        'department' => 'required|integer|digits_between:1,2|gt:0',
                        'date_of_birth' => "required|date|date_format:Y-m-d|before:{$before}",
                        'phone' => "required|min:9|max:15",
                        'photo' => "image|max:2048|mimes:jpeg,png,jpg"
                    ];
                }
            case "PUT":
            case "PATCH":
                {
                    return [
                        'name' => 'required|min:3|max:15|alpha',
                        'last_name' => 'required|min:3|max:15|alpha',
                        'email' => 'required|email|unique:employee,email,'.$this->route()->parameters()['id'],
                        'department' => 'required|integer|digits_between:1,2|gt:0',
                        'date_of_birth' => "required|date|date_format:Y-m-d|before:{$before}",
                        'phone' => "required|min:9|max:15",
                        'photo' => "image|max:2048|mimes:jpeg,png,jpg"
                    ];
                }
            default:break;

        }

    }

    public function messages()
    {
        return parent::messages();
    }

}
