<!DOCTYPE html>
<html lang="{{ $page->locale ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php($title ??= $page->title)
        @php($title = ($title ? trim($title) . ' - ' : '') . $page->siteName)
        @php($description ??= $page->content ? \Illuminate\Support\Str::limit(strip_tags($page->content), 300) : $page->siteDescription)

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $description }}">

        <meta property="og:title" content="{{ $title }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $description }}" />

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @if(!$page->production)
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {!! \Illuminate\Support\Str::of(file_get_contents(__DIR__ . '/../tailwind.config.js'))->after('theme:')->before('plugins:') !!}
                }
            </script>
        @endif
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div class="flex flex-col min-h-screen">
            <x-header />
            <div class="flex-grow">
                <x-container>
                    {{ $slot }}
                </x-container>
            </div>
            <x-footer />
        </div>
    </body>
</html>
