<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <select class="form-control @error($name) is-invalid @enderror" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" {{ $otherattr ?? '' }}
        value="{{ old($name, $value ?? '') }}">
        <option value="" selected>{{ $placeholder ?? '-- Select One --' }}</option>
        {{ $slot ?? '' }}
    </select>

    @error($name)
        <div class="error invalid-feedback">{{ $message }}</div>
    @enderror
</div>
