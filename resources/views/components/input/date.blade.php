<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <input type="date" class="form-control" id="{{ $id ?? '' }}" name="{{ old($name, $value ?? '') }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $otherattr ?? '' }} value="{{ $value ?? '' }}">

    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
