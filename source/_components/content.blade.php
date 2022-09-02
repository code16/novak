@props([
    'imageThumbnailWidth',
    'imageThumbnailHeight',
])

<div {{ $attributes }}>
    {!! $transform($slot) !!}
</div>
