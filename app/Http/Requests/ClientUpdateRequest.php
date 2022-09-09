<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
            'prenom' => ['required', 'max:255', 'string'],
            'nom' => ['required', 'max:255', 'string'],
            'mail' => ['required', 'max:255', 'string'],
            'address' => ['required', 'max:255', 'string'],
            'telephone' => ['required', 'max:255', 'string'],
            'commande_id' => ['required', 'exists:commandes,id'],
        ];
    }
}
