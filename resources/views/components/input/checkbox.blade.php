<div class="mb-4 {{ $class ?? '' }}">
    <input type="checkbox" class="form-check-input" for="{{ $id ?? '' }}" {{ $otherattr ?? '' }}
        value="{{ old($name, $value ?? '') }}">
    <label id="{{ $id ?? '' }}">
        <h6> <strong>{{ $label }}</strong> </h5>
    </label>

    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
