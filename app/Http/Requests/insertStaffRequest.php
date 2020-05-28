<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class insertStaffRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'max:30',
            'surname' => 'max:30',
            'email' => 'required|max:35',
            'username'=>'required|max:20',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role'=>'required|max:10',
            'residence' => 'required|max:20',
            'birthday' => ['required', 'date'],
            'job' => ''
        ];
    }

}