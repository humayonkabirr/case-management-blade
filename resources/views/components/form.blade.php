<form action="{{ $action ?? '' }}" class="needs-validation {{ $class ?? '' }}" id="{{ $id ?? '' }}" method="{{ $method ?? '' }}" enctype="multipart/form-data" novalidate>
    @csrf
    {{ $slot ?? '' }}
</form>
