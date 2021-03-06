<?php

namespace App\Http\Requests\Prof;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Prof\Prof;

class UpdateProfRequest extends FormRequest
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
        $rules = Prof::$rules;
        
        return $rules;
    }
}
