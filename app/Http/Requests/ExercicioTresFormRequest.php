<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioTresFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'n1' => 'required|numeric', 
            'n2' => 'required|numeric',
            'n3' => 'required|numeric',
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
           response()->json([
           'success' => false,
           'error' =>$validator->errors()     
           ]));   
       }
       public function messages()
       {
           return[
            'n1.required' =>'Preencha o campo primeiro número',
            'n1.numeric' =>'O campo é somente números',
            'n2.required' =>'Preencha o campo "segundo número"',
            'n2.numeric' =>'O campo é somente números',
            'n3.required' =>'Preencha o campo "segundo número"',
            'n3.numeric' =>'O campo é somente números',
           ];
       }
}
