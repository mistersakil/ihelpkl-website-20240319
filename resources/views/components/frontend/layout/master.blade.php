<!doctype html>
<html lang="en" data-sidenav-view="hidden">

<head>

    @includeIf('components.frontend.layout.meta')

    @vite(['resources/assets/web/web-js.js'])

    @livewireStyles
</head>

<body>
    <x-frontend.layout.topbar></x-frontend.layout.topbar>
    <x-frontend.layout.navbar></x-frontend.layout.navbar>

    @if (!request()->routeIs('web.home'))
        @isset($innerBanner)
            {{ $innerBanner }}
        @else
            <x-frontend.layout.inner-banner />
        @endisset
    @endif

    {{ $slot }}

    <x-frontend.layout.footer />
    @livewireScripts

    @includeIf('components.frontend.layout.master-script')
</body>

</html>
