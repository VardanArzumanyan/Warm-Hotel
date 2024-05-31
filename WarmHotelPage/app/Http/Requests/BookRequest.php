<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dateFrom' => 'required|date_format:d/m/Y',
            'dateTo' => 'required|date_format:d/m/Y|after:dateFrom',
            'adultsCount' => 'required|integer',
            'childrenCount' => 'required|integer',
            'room' => 'required|in:Deluxe Room,Deluxe Twin Room,Luxe Room,Family Room,Suite Room,Presidential Room'
        ];
    }
}
