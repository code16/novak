

<x-layout :page="$page = $pages->firstWhere('key', 'contact')">
    <div class="p-8">
        <h1 class="text-3xl font-bold">{{ $page->title }}</h1>

        <div class="mt-4">
            {!! $page->getContent() !!}
        </div>
    </div>
</x-layout>
