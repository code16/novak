@php
/**
 * @var \Code16\JockoClient\Page $page
 */
@endphp

<x-layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold">{{ $page->title }}</h1>

        @if($page->cover)
            <img src="{{ $page->cover->thumbnail(500, 500) }}" alt="{{ $page->title }}">
        @endif

        <x-content
            :image-thumbnail-width="1024"
        >
            {!! $page->getContent() !!}
        </x-content>
    </div>
</x-layout>


