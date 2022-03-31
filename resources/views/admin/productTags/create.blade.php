@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.productTag.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-tags.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type">{{ trans('cruds.productTag.fields.type') }}</label>
                <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', '') }}">
                @if($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="spec">{{ trans('cruds.productTag.fields.spec') }}</label>
                <input class="form-control {{ $errors->has('spec') ? 'is-invalid' : '' }}" type="text" name="spec" id="spec" value="{{ old('spec', '') }}">
                @if($errors->has('spec'))
                    <span class="text-danger">{{ $errors->first('spec') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.spec_helper') }}</span>
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