<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommandeUpdateRequest extends FormRequest
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
            'mode_paiement' => ['required', 'max:255', 'string'],
            'date_reglement' => ['required', 'date'],
            'produit_id' => ['required', 'exists:produits,id'],
        ];
    }
}
