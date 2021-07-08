<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class ProviderStore extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $regex = '/^(http?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        return [
      		'provider'  => 'required|url:'.$regex,
        ];
    }

}
