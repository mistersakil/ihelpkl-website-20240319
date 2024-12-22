<!-- Required Meta Tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $metaTitle ?? __('meta title')  }} | {{ env('APP_NAME') }}</title>

<!-- Dynamic Meta Tags -->
<meta name="keywords" content="{{ $metaKeywords ?? __('meta keywords') }}">
<meta name="description" content="{{ $metaDescription ?? __('meta description')  }}">
<meta name="author" content="{{ $metaAuthor ?? __('meta author') }}">

<!-- Canonical Tag -->
<link rel="canonical" href="{{ $metaCanonical ?? url()->current() }}">

<!-- Robots Meta Tag -->
<meta name="robots" content="{{ $metaRobots ?? 'index, follow' }}">

<!-- Meta Icons -->
<link rel="icon" type="image/png" href="{{ _getFaviconPath() }}">
<link rel="apple-touch-icon" href="{{ _getFaviconPath() }}">


<!-- Open Graph Meta Tags -->
<meta property="og:title" content="{{ $ogTitle ?? ($metaTitle ?? __('meta title')) }}">
<meta property="og:description" content="{{ $ogDescription ?? ($metaDescription ?? __('meta description')) }}">
<meta property="og:image" content="{{ $ogImage ?? _getFaviconPath() }}">
<meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
<meta property="og:type" content="{{ $ogType ?? 'website' }}">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $twitterTitle ?? ($metaTitle ?? __('meta title')) }}">
<meta name="twitter:description" content="{{ $twitterDescription ?? ($metaDescription ?? __('meta description')) }}">
<meta name="twitter:image" content="{{ $twitterImage ?? _getFaviconPath() }}">
<meta name="twitter:site" content="{{ $twitterSite ?? '@defaultTwitterHandle' }}">
