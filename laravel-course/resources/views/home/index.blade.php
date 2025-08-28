<h1>Hello from Laravel!</h1>

<!--
    Text
-->

{{-- Single line comment --}}

{{-- 
    Multi line
    comment
--}}

@if (true)
    This will be displayed
@endif

@foreach ($hobbies as $h)
    {{ dd($loop) }}
    {{ $h }}
@endforeach