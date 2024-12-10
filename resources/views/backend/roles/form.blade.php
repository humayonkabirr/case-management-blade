@extends('layout.master')

@section('content')
    <div class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Role Edit</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <x-form class="row" action="admin.role" data="{{ $role->id ?? '' }}">
                    <x-input.text class="col-md-12" label="Name" name="name" value="{{ $role->name }}" id="name"
                        placeholder="Enter Role Name" required />

                    <div class="mt-4 col-md-12">
                        <ul style="list-style: none">
                            @foreach ($modules as $key => $module)
                                <li class="mb-4">
                                    <input type="checkbox" class="form-check-input" value="{{ $module->id }}"
                                        id="module_{{ $module->id }}">
                                    <label class=""
                                        for="module_{{ $module->id }}"><strong>{{ $module->name }}</strong> </label>

                                    <ul style="list-style: none" class="row">
                                        @foreach ($module->permissionList as $key => $permission)
                                            <li class="col-md-4">
                                                <input type="checkbox" class="form-check-input"
                                                    id="permission_{{ $permission->id }}" name="permissions[]"
                                                    value="{{ $permission->id }}"
                                                    @if (isset($role) &&
                                                            $role->rolePermissions()->where('permission_id', $permission->id)->exists()) checked @endif>
                                                <label for="permission_{{ $permission->id }}">
                                                    {{ $permission->name }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="submit" class="float-right btn btn-secondary">Submit</button>
                </x-form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('input[type="checkbox"]').change(function(e) {

            var checked = $(this).prop("checked"),
                container = $(this).parent(),
                siblings = container.siblings();

            container.find('input[type="checkbox"]').prop({
                indeterminate: false,
                checked: checked
            });

            function checkSiblings(el) {

                var parent = el.parent().parent(),
                    all = true;

                el.siblings().each(function() {
                    let returnValue = all = ($(this).children('input[type="checkbox"]').prop("checked") ===
                        checked);
                    return returnValue;
                });

                if (all && checked) {

                    parent.children('input[type="checkbox"]').prop({
                        indeterminate: false,
                        checked: checked
                    });

                    checkSiblings(parent);

                } else if (all && !checked) {

                    parent.children('input[type="checkbox"]').prop("checked", checked);
                    parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find(
                        'input[type="checkbox"]:checked').length > 0));
                    checkSiblings(parent);

                } else {
                    el.parents("li").children('input[type="checkbox"]').prop({
                        indeterminate: true,
                        checked: false
                    });
                }

            }

            checkSiblings(container);
        });
    </script>
@endpush
