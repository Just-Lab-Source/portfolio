<!DOCTYPE html>
<html lang="de">

<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noai, noimageai">

    <!-- Stylesheets & Icons -->
    <link href="{{ asset('/libraries/boxicons/css/boxicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/globals.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/profile.png') }}">

    <!-- Open Graph Meta-Tags -->
    <meta property="og:type" content="{{ $seo['imprint']['og']['type'] }}">
    <meta property="og:title" content="{{ $seo['imprint']['title'] }}">
    <meta property="og:url" content="{{ $seo['imprint']['og']['url'] }}">
    <meta property="og:image" content="{{ asset($seo['imprint']['og']['image']) }}">
    <meta property="og:description" content="{{ $seo['imprint']['og']['description'] }}">

    <!-- SEO Meta-Tags -->
    <meta name="keywords" content="{{ $seo['imprint']['keywords'] }}">
    <meta name="description" content="{{ $seo['imprint']['description'] }}">

    <!-- Title -->
    <title>{{ $seo['imprint']['title'] }}</title>
</head>

<body>

    <x-layout.legal-section-nav />

    <div class="itrk-legaltext" data-itrk-legaltext-url="https://itrk.legal/1sHh.0.11FT-de-iframe.html"></div>
    <script src="https://www.it-recht-kanzlei.de/js/itrk-legaltext.js"></script>

    <x-layout.footer />
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>
