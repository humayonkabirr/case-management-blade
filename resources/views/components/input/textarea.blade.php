<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <textarea type="text" class="form-control @error($name) is-invalid @enderror" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $otherattr ?? '' }} value="{{ old($name, $value ?? '') }}">
    </textarea>
    
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
