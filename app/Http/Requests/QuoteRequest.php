<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'what_project' => 'required',
            'website' => 'required',
            'pages' => 'required|integer',
            'your_budget' => 'required',
            'description' => 'required',
            'functionality' => 'required',
            'website_list' => 'required'

        ];
    }
}
