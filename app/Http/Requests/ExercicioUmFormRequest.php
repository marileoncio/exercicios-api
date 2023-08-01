<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioUmFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeiro_numero' => 'required|numeric', 
            'segundo_numero' => 'required|numeric',
        ];
    }
    public function failedValidation(ValidationValidator $validator){
     throw new HttpResponseException(
        response()->json([
        'success' => false,
        'error' =>$validator->errors()     
        ]));   
    }
    public function messages()
    {
        return[
         'primeiro_numero.required' =>'Preencha o campo primeiro número',
         'primeiro_numero.numeric' =>'O campo é somente números',
         'segundo_numero.required' =>'Preencha o campo "segundo número"',
         'segundo_numero.numeric' =>'O campo é somente números',
        ];
    }
}
