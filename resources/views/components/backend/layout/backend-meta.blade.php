    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="{{ _getFaviconPath() }}" type="image/png" />
    <title>
        {{ $metaTitle ?? __('meta title')  }} | {{ env('APP_NAME') }}
    </title>

    <!-- Vite asset -->
    {{ Vite::useHotFile('back.hot')->useBuildDirectory('buildBack')->withEntryPoints(['resources/assets/backend/backend-js.js']) }}
