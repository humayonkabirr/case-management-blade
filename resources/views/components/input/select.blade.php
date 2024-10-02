<div class="mb-4 {{$class ?? ''}}">
    <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
    <select class="form-control" id="{{$id ?? ''}}"  name="{{$id ?? ''}}"  {{$otherattr ?? ''}} value="{{$value ?? ''}}">
        <option value="" selected>{{$placeholder ?? '-- Select One --'}}</option>
        {{ $slot ?? '' }}
    </select>

    <div class="valid-feedback">
        Looks good!
    </div>

    <div class="invalid-feedback">
        Please fill the {{$label ?? ''}}
    </div>
</div>

