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
    <meta property="og:type" content="{{ $seo['privacy']['og']['type'] }}">
    <meta property="og:title" content="{{ $seo['privacy']['title'] }}">
    <meta property="og:url" content="{{ $seo['privacy']['og']['url'] }}">
    <meta property="og:image" content="{{ asset($seo['privacy']['og']['image']) }}">
    <meta property="og:description" content="{{ $seo['privacy']['og']['description'] }}">

    <!-- SEO Meta-Tags -->
    <meta name="keywords" content="{{ $seo['privacy']['keywords'] }}">
    <meta name="description" content="{{ $seo['privacy']['description'] }}">

    <!-- Title -->
    <title>{{ $seo['privacy']['title'] }}</title>
</head>

<body>

    <x-layout.legal-section-nav />

    <div class="itrk-legaltext" data-itrk-legaltext-url="https://itrk.legal/1sHh.8V.11FT-iframe.html"></div>
    <script src="https://www.it-recht-kanzlei.de/js/itrk-legaltext.js"></script>

    <x-layout.footer />
</body>

</html>
