<div class="mb-4 {{ $class ?? '' }}">
    <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
    <select class="form-control" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" {{ $otherattr ?? '' }}
        value="{{ old($name, $value ?? '') }}">
        <option value="" selected>{{ $placeholder ?? '-- Select One --' }}</option>
        {{ $slot ?? '' }}
    </select>

    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
