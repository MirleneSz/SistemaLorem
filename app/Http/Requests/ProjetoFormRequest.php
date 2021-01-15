<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;


class ProjetoFormRequest extends FormRequest
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
        'nome'=>'required|max:255',
        'inicio'=>'required',
        'termino'=>'required',
        'valor'=>'required|numeric',
        'risco'=>'required|numeric',
        'participantes'=>'required|max:512',
        'idprojeto'=>'required',

        
        ];
    }
}
