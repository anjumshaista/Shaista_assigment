<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title',  config('app.name'))</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles

    <!-- CSS files -->
    <link href="{{ asset('theme') }}/dist/css/tabler.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-flags.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-payments.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/demo.min.css?1674944402" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>