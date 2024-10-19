<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <input type="email" class="form-control" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $otherattr ?? '' }} value="{{ $value ?? '' }}">

    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
