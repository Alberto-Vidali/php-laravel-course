<script>
    const hobbies = {{ Js::from($hobbies) }}
</script>

<p>My Name is {{ $name }} {{ $surname }}</p>
<p>The year is {{ $year }}</p>
<p>{{ strtoupper("$name $surname") }}</p>
<p>{!! $job !!}</p>


@{{ name }}
@@for

@verbatim
    <div>
        Name: {{ name }}
        Age: {{ age }}
        @if
    </div>
@endverbatim