<!doctype html>
<html lang="en" data-sidenav-view="hidden">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FWTNFD3');
    </script>
    <!-- End Google Tag Manager -->

    @includeIf('components.frontend.layout.meta')

    {{ Vite::useHotFile('web.hot')
    ->useBuildDirectory('buildWeb')
    ->withEntryPoints(['resources/assets/web/web-js.js'])}}

    @livewireStyles
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FWTNFD3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- <x-frontend.layout.topbar></x-frontend.layout.topbar> --}}
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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FWTNFD3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
