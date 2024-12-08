@php
    $url = $action . ($data !='' ? '.update' : '.store'); 
@endphp


<form action="{{ route($url,$data) }}" class="{{ $class ?? '' }}" id="{{ $id ?? '' }}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    @if ($data)
        @method('PUT')
    @endif

    {{ $slot ?? '' }}
</form>
