@switch($status)
    @case(0)
        <span class="badge badge-danger">Inactive</span>
        @break

    @case(1)
        <span class="badge badge-success">Active</span>
        @break

    @default
        <span class="badge badge-secondary">Unknown</span> 
@endswitch
