<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightCreateRequest extends FormRequest
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
            'flight_no'   => 'required',
            'source'   => 'required',
            'destination'   => 'required'
        ];
    }

    public function flight_fill()
    {   
        $inputs = [
            'flight_no'    => $this->flight_no,
            'source_id'   =>  $this->source,
            'destination_id' => $this->destination
        ];
        return $inputs;
    }
}
