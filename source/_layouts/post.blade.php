
<x-layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold">{{ $page->title }}</h1>
        {!! $page->getContent() !!}
    </div>
</x-layout>


