 <div class="form-group">
     <div class="form-check pl-0">
         <div class="custom-control custom-checkbox checkbox-info">
             <input type="checkbox" name="{{ $id ?? '' }}" value="{{ $value ?? '' }}" style="{{ $style ?? '' }}" {{ $otherattr ?? '' }} class="custom-control-input {{ $class ?? '' }}" id="{{ $id ?? '' }}">
             <label class="custom-control-label" for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
         </div>
         <div class="invalid-feedback">Please fill out this field.</div>
     </div>
 </div>
