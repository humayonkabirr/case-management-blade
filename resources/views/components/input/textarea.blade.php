<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <textarea type="text" class="form-control" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $otherattr ?? '' }} value="{{ $value ?? '' }}">
    </textarea>
    
    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
