@aware([
    'imageThumbnailWidth',
    'imageThumbnailHeight',
])
@props([
    'width' => $imageThumbnailWidth ?? 1024,
    'height' => $imageThumbnailHeight,
])

@php
/**
 * @var \Code16\Jigsaw\Image $image
 */
@endphp

<p>
    <img src="{{ $image->thumbnail($width, $height) }}"
        srcset="{{ $image->thumbnail($width, $height) }} 1x, {{ $image->thumbnail($width, $height, 1.5) }} 1.5x"
        alt="{{ $alt }}"
        width="{{ $width }}"
    >
</p>
