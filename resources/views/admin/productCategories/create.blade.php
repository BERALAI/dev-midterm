@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.productCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-categories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.productCategory.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productCategory.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sales_email">{{ trans('cruds.productCategory.fields.sales_email') }}</label>
                <input class="form-control {{ $errors->has('sales_email') ? 'is-invalid' : '' }}" type="email" name="sales_email" id="sales_email" value="{{ old('sales_email') }}">
                @if($errors->has('sales_email'))
                    <span class="text-danger">{{ $errors->first('sales_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productCategory.fields.sales_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sales_phone_number">{{ trans('cruds.productCategory.fields.sales_phone_number') }}</label>
                <input class="form-control {{ $errors->has('sales_phone_number') ? 'is-invalid' : '' }}" type="text" name="sales_phone_number" id="sales_phone_number" value="{{ old('sales_phone_number', '') }}">
                @if($errors->has('sales_phone_number'))
                    <span class="text-danger">{{ $errors->first('sales_phone_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productCategory.fields.sales_phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tech_support_email">{{ trans('cruds.productCategory.fields.tech_support_email') }}</label>
                <input class="form-control {{ $errors->has('tech_support_email') ? 'is-invalid' : '' }}" type="email" name="tech_support_email" id="tech_support_email" value="{{ old('tech_support_email') }}">
                @if($errors->has('tech_support_email'))
                    <span class="text-danger">{{ $errors->first('tech_support_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productCategory.fields.tech_support_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tech_support_number">{{ trans('cruds.productCategory.fields.tech_support_number') }}</label>
                <input class="form-control {{ $errors->has('tech_support_number') ? 'is-invalid' : '' }}" type="text" name="tech_support_number" id="tech_support_number" value="{{ old('tech_support_number', '') }}">
                @if($errors->has('tech_support_number'))
                    <span class="text-danger">{{ $errors->first('tech_support_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productCategory.fields.tech_support_number_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection