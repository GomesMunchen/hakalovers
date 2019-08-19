<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class TorcedorRequest extends FormRequest
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
        switch($this->method()) {
            case "POST": // CRIAÇÃO DE UM NOVO REGISTRO TORCEDOR
                return [
                    'nome' => 'required|max:100',
                    'documento' => 'required|max:14',
                    'cep' => 'required|max:10',
                    'endereco' => 'required|max:25',
                    'bairro' => 'required|max:20',
                    'cidade' => 'required|max:20',
                    'uf' => 'required|max:2',
                    'telefone' => 'required|max:15',
                    'email' => 'email|max:200|unique:torcedor',
                ];
                break;

            case "PUT": // ATUALIZAÇÃO DE UM REGISTRO EXISTENTE
                return [
                    'nome' => 'required|max:100',
                    'telefone' => 'required|max:15',
                    'email' => 'email|max:200|unique:torcedor,email,'.$this->id,
                ];
                break;
            default:break;
        }
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'email.email' => 'Informe um e-mail válido',
            'telefone.telefone' => 'Informe um numero válido'

        ];
    }
}
