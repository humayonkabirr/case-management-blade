<div class="mb-4 {{ $class ?? '' }}">
    <input type="checkbox" class="form-check-input @error($name) is-invalid @enderror" for="{{ $id ?? '' }}" {{ $otherattr ?? '' }}
        value="{{ old($name, $value ?? '') }}">
    <label id="{{ $id ?? '' }}">
        <h6> <strong>{{ $label }}</strong> </h5>
    </label>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
