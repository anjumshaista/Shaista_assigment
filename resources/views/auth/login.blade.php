<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in | {{ env('APP_NAME') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('theme') }}/dist/css/tabler.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-flags.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-payments.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/demo.min.css?1674944402" rel="stylesheet" />
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

<body class=" d-flex flex-column bg-white">
    <script src="{{ asset('theme') }}/dist/js/demo-theme.min.js?1674944402"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img
                            src="{{ asset('theme') }}/static/logo.svg" height="36" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login to your account
                </h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email / Phone</label>
                        <input type="text" class="form-control" name="username" placeholder="your@email.com / 1234567890"
                            autocomplete="off" value="teacher@test.com">
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="{{ route('password.request') }}">I forgot password</a>
                            </span>
                        </label>
                        <input type="password" class="form-control" name="password" placeholder="Your password"
                            autocomplete="off" value="welcome123">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Remember me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </form>
                <div class="text-center text-muted mt-3">
                    Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100"
                style="background-image: url({{ asset('theme') }}/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)">
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('theme') }}/dist/js/tabler.min.js?1674944402" defer></script>
    <script src="{{ asset('theme') }}/dist/js/demo.min.js?1674944402" defer></script>
</body>

</html>
