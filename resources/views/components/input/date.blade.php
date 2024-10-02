<div class="mb-4 {{$class ?? ''}}">
    <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
    <input type="date" class="form-control" id="{{$id ?? ''}}"  name="{{$id ?? ''}}" placeholder="{{$placeholder ?? ''}}"  {{$otherattr ?? ''}} value="{{$value ?? ''}}">

    <div class="valid-feedback">
        Looks good!
    </div>

    <div class="invalid-feedback">
        Please fill the {{$label ?? ''}}
    </div>
</div>
