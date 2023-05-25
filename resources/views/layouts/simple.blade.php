<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta property="og:title" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta property="og:description" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    <title>{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{ asset('./vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
</head>

@yield('content')

<script src="{{ asset('./vendor/global/global.min.js') }}"></script>
<script src="{{ asset('./vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('./js/custom.js') }}"></script>
<script src="{{ asset('./js/deznav-init.js') }}"></script>
</html>
