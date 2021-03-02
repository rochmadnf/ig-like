<div class="form-group row">
    <label for="{{ $name }}" class="col-md-4 col-form-label text-md-right">{{ $label }}</label>

    <div class="col-md-6">
        <input id="{{ $name }}" type="{{$type ?? 'text'}}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ old($name) }}" {{ $otherAttr ?? '' }}>

        @if ($errors->has($name))
        <span class="invalid-feedback" role="alert">
            {{ $errors->first($name) }}
        </span>
        @endif
    </div>
</div>
