<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecomicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // ablilitiomo la validazione
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' =>'required|max:80',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price'=> 'required|max:8',
            'series'=> 'required|max:60',
            'sale_date'=> 'required|date',
            'type'=> 'required|max:30',
            'artists'=> 'required|max:255',
            'writers'=> 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Necessito del titolo per continuare',
            'price.required' => 'Necessito del prezzo per continuare',
            'series.required' => 'Necessito della serie per continuare',
            'sale_date.required' => 'Necessito del data di vendità per continuare',
            'type.required' => 'Necessito del tipo per continuare',
            'artists.required' => 'Necessito del/degli artista/i per continuare',
            'writers.required' => 'Necessito dello/degli scrittore/i  per continuare',
            //sezione per gestire le lunghezze
            'title.max' => 'massimi caratteri consentiti sono :max',
            'price.max' => 'massimi caratteri consentiti sono :max',
            'series.max' => 'massimi caratteri consentiti sono :max',
            'sale_date.max' => 'massimi caratteri consentiti sono :max',
            'type.max' => 'massimi caratteri consentiti sono :max',
            'artists.max' => 'massimi caratteri consentiti sono :max',
            'writers.max' => 'massimi caratteri consentiti sono :max',

        ];

        
    }
}
