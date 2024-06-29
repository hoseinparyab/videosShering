<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class UpdateVideoRequest extends StoreVideoRequest
{

    public function rules()
    {
        return array_merge(parent::rules(), [
            'slug' => ['required', Rule::unique('videos')->ignore($this->video), 'alpha_dash'],
        ]);
    }
}