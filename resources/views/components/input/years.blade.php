<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <input type="number" min="1900" max="{{ date('Y') }}" class="form-control @error($name) is-invalid @enderror" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $otherattr ?? '' }} value="{{ old($name, $value ?? '') }}">

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
