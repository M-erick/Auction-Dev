<?php

namespace App\Http\Requests;

use App\Models\Form;
use Illuminate\Support\Str;
use App\Rules\MinBiddingAmount;
use App\Rules\BiddingDaysAllowed;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
       //array of validations
        return [
            'days'=>['required',
                new BiddingDaysAllowed
        ],
            'amount'=>[
                'required',
                new MinBiddingAmount
                ]
        ];
    }

    public function messages()
    {
        return [
            'days.required' =>'Number Of days is required',
            'amount.required' =>'Amount required'
        ];
    }
     protected function prepareForValidation() {
         $this->merge([
            'slug' => Str::slug($this->slug),
         ]);
     }
}
