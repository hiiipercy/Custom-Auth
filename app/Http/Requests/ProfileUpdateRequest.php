<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateRequest extends FormRequest
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
        $rules = [
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:users,' . Auth::id()
        ];
        if(request()->current_password){
            $rules = [
                'password' => 'min:6|required_with:confirm|same:confirm',
                'confirm' => 'min:6'
            ];
        }
        return $rules;
    }
}

