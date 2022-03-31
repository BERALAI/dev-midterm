@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.products.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="invoice">{{ trans('cruds.product.fields.invoice') }}</label>
                <input class="form-control {{ $errors->has('invoice') ? 'is-invalid' : '' }}" type="text" name="invoice" id="invoice" value="{{ old('invoice', '') }}" required>
                @if($errors->has('invoice'))
                    <span class="text-danger">{{ $errors->first('invoice') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.invoice_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.product.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.product.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01" required>
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="manufacturers">{{ trans('cruds.product.fields.manufacturer') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('manufacturers') ? 'is-invalid' : '' }}" name="manufacturers[]" id="manufacturers" multiple>
                    @foreach($manufacturers as $id => $manufacturer)
                        <option value="{{ $id }}" {{ in_array($id, old('manufacturers', [])) ? 'selected' : '' }}>{{ $manufacturer }}</option>
                    @endforeach
                </select>
                @if($errors->has('manufacturers'))
                    <span class="text-danger">{{ $errors->first('manufacturers') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.manufacturer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_type_id">{{ trans('cruds.product.fields.product_type') }}</label>
                <select class="form-control select2 {{ $errors->has('product_type') ? 'is-invalid' : '' }}" name="product_type_id" id="product_type_id">
                    @foreach($product_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('product_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('product_type'))
                    <span class="text-danger">{{ $errors->first('product_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.product_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_purchased">{{ trans('cruds.product.fields.date_purchased') }}</label>
                <input class="form-control datetime {{ $errors->has('date_purchased') ? 'is-invalid' : '' }}" type="text" name="date_purchased" id="date_purchased" value="{{ old('date_purchased') }}">
                @if($errors->has('date_purchased'))
                    <span class="text-danger">{{ $errors->first('date_purchased') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.date_purchased_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes_history">{{ trans('cruds.product.fields.notes_history') }}</label>
                <textarea class="form-control {{ $errors->has('notes_history') ? 'is-invalid' : '' }}" name="notes_history" id="notes_history">{{ old('notes_history') }}</textarea>
                @if($errors->has('notes_history'))
                    <span class="text-danger">{{ $errors->first('notes_history') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.notes_history_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.product.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.user_helper') }}</span>
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