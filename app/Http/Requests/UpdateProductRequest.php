<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'invoice' => [
                'string',
                'required',
                'unique:products,invoice,' . request()->route('product')->id,
            ],
            'name' => [
                'string',
                'required',
            ],
            'price' => [
                'required',
            ],
            'manufacturers.*' => [
                'integer',
            ],
            'manufacturers' => [
                'array',
            ],
            'date_purchased' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
