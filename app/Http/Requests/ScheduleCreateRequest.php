<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleCreateRequest extends FormRequest
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
            'flight'     => 'required',
            'depart_time'   => 'required',
            'arrive_time'   => 'required'
        ];
    }

    public function schedule_fill()
    {   
        $inputs = [
            'flight_id'    => $this->flight,
            'depart_time'   =>  $this->depart_time,
            'arrive_time' => $this->arrive_time
        ];
        return $inputs;
    }

    public function getDay(){
        return $this->day;
    }
}