<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta property="og:title" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta property="og:description" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta property="og:image" content="{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}" />
    <meta name="format-detection" content="telephone=no">
    <title>{{ Set::get(\App\Enums\Settings\SettingTypes::SITE_TILE) }}</title>
    <!-- Favicon icon -->

    <link rel="stylesheet" href="{{ asset('./vendor/toastr/css/toastr.min.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('./images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('./vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('./vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">

</head>
