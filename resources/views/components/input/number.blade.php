<div class="mb-4 {{$class ?? ''}}">
    <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
    <input type="number" class="form-control" id="{{$id ?? ''}}"  name="{{$name ?? ''}}" placeholder="{{$placeholder ?? ''}}"  {{$otherattr ?? ''}} value="{{$value ?? ''}}">

    <div class="valid-feedback">
        Looks good!
    </div>

    <div class="invalid-feedback">
        Please fill the {{$label ?? ''}}
    </div>
</div>
