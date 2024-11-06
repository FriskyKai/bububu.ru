<?php

namespace App\Http\Requests\Api;

use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    // Вызов исключения при провале авторизации
    protected function failedAuthorization()
    {
        throw new ApiException('Forbidden', 403);
    }

    // Вызов исключения при провале валидации
    protected function failedValidation(Validator $validator)
    {
        throw new ApiException('Unprocessable Content', 422, $validator->errors());
    }
}
