    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ Vite::imageRoot('favicon.png') }}" type="image/png" /> --}}

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png" />


    {{-- <title>{{ $title ?? 'Dashboard' }} | {{ config('app.name') }}</title> --}}
    <title>
        {{ $metaTitle ?? __('meta title')  }} | {{ env('APP_NAME') }}
    </title>

    <!-- Google fonts -->
    {{ Vite::useHotFile('back.hot')->useBuildDirectory('buildBack')->withEntryPoints(['resources/assets/backend/backend-js.js']) }}
