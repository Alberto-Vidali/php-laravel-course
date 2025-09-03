@props(["color", "bgColor" => "white"])

<div {{ $attributes
        ->class("card card-text-$color card-bg-$bgColor")
        ->merge(["lang" => "en", "aaa" => "bb"]) }}>
    <div class="card-header">{{ $title }}</div>
    @if($slot->isEmpty())
        <p>Please provide some content</p>
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>