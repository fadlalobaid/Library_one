@props([
    'name',
    'type',
    'placeholder',
    'value'

])
<input class="form-control
@error($name)
 is-invalid
  @enderror "
     name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ $value ??old($name) }}">
 @error($name)
     <div class="invalid-feedback">
         {{ $message }}
     </div>
 @enderror
