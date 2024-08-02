<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nome" => ["required", "string", "min:4"],
            "descrizione" => ["required", "string", "min:20"],
            "completato" => ["required"],
            "data_fine" => ["required"],
            "type_id" => ["required", "exists:types,id"],
        ];
    }


    public function messages(): array
    {
        return [
            "nome.required" => "Per creare il progetto è necessario un nome",
            "nome.min" => "Inserire almeno 4 caratteri",
            "descrizione.required" => "Per creare il progetto è necessario inserire una descrizione",
            "descrizione.min" => "Inserire almeno 20 caratteri",
            "completato.required" => "Scegliere almeno un opzione per segnare se il progetto è completato",
            "data_fine.required" => "Per creare il progetto è necessaria la data di fine progetto"
        ];
    }
}
