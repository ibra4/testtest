<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLeiterRecordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $table_types = implode(',', array_keys(config('enums.leiter_tables_types')));

        return [
            'min_age' => 'required|numeric|integer|min:0',
            'max_age' => 'required|numeric|integer|min:0|gt:min_age',
            'value' => 'required|numeric|integer',
            'scaled_score' => 'required|numeric|integer',
            'type' => "required|in:$table_types"
        ];
    }
}
