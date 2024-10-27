<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <input type="number" min="1900" max="{{ date('Y') }}" class="form-control" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $otherattr ?? '' }} value="{{ old($name, $value ?? '') }}">

    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
