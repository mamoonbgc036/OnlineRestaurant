<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
     *first_name,	last_name,	tel_number,	email,	res_date,	table_id,	guest_number	
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=>['required'],
            'last_name'=>['required'],
            'tel_number'=>['required'],
            'email'=>['required'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'table_id'=>['required'],
            'guest_number'=>['required'],
        ];
    }
}