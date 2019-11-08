<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificadoRequest extends FormRequest
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
            'user_id' => '',
            'numCertificado' => 'required',
            'nombreComercial' => 'required',
            'ubicacion' => 'required',
            'propietario' => 'required',
            'capacidadNum'=> 'required',
            'capacidadLetra' => 'required',
            'actividad' => 'required',
            'numExpediente' => 'required',
            'numResolucion' => 'required',
            'riesgo_id' => 'required',
            'fechaExpedicion' => 'required',
            'fechaExpediente' => 'required',
            'fechaCaducidad' => 'required',
        ];
    }
}
