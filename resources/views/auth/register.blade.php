<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign up | {{ env('APP_NAME') }}</title>
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

<body class=" d-flex flex-column">
    <script src="{{ asset('theme') }}/dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page page-center">
        <div class="container container-tight py-4 ">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('theme') }}/static/logo.svg" height="36" alt=""></a>
            </div>
            <form class="card card-md" method="POST" action="{{ route('register') }}" autocomplete="off"  style="padding-top: 40%;">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name"
                            value="{{ old('name') }}">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone no. <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter phone" name="phone">
                        <span class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teacher / Student <span class="text-danger">*</span></label>
                        <select name="user_role" id="user_role" class="form-control">
                            <option value="">Select</option>
                            <option value="teacher" {{ old('user_role') == 'teacher' ? 'selected' : '' }}>Teacher
                            </option>
                            <option value="student" {{ old('user_role') == 'student' ? 'selected' : '' }}>Student
                            </option>
                        </select>
                        <span class="text-danger">
                            @error('user_role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">School <span class="text-danger">*</span></label>
                        <select name="school_id" id="school_id" class="form-control">
                            <option value="">Select</option>
                            @foreach (\App\Models\School::orderBy('school_name')->get() as $school)
                                <option value="{{ $school->id }}">
                                    {{ $school->school_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('school_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <span id="showHideClass">
                        <div class="mb-3">
                            <label class="form-label">Class <span class="text-danger">*</span></label>
                            <select name="school_class" id="school_class" class="form-control">
                                <option value="">Select</option>
                            </select>
                            <span class="text-danger">
                                @error('school_class')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </span>
                    <div class="mb-3">
                        <label class="form-label">Gender <span class="text-danger">*</span></label>
                        <select name="gender" class="form-control">
                            <option value="">Select</option>
                            @foreach (\App\Models\TypeMaster::where(['parent_id' => 1, 'active' => true])->get() as $gender)
                                <option value="{{ $gender->id }}" @selected(old('gender'))>{{ $gender->name }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            autocomplete="off">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" placeholder="Password"
                            name="password_confirmation" autocomplete="off">
                        <span class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="terms" />
                            <span class="form-check-label">Agree the <a href="javascript:void(0)"
                                    tabindex="-1">terms and policy</a>.</span>
                        </label>
                    </div> --}}
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Already have account? <a href="{{ route('user.login') }}" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('theme') }}/dist/js/tabler.min.js?1674944402" defer></script>
    <script src="{{ asset('theme') }}/dist/js/demo.min.js?1674944402" defer></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#user_role').change(function() {
            if (this.value) {
                if (this.value == 'teacher') {
                    $('#showHideClass').hide();
                } else {
                    $('#showHideClass').show();
                }
            } else {
                $('#showHideClass').show();
            }
        });

        $('#school_id').change(function() {
            if (this.value) {
                var school_id = this.value;
                $.ajax({
                    type: 'get',
                    url: '{{ route('get.class.list') }}?school_id=' + school_id,
                    success: function(response) {
                        $.each(response.schoolClasses, function(key, value) {
                            $('#school_class').append('<option value="' + value.id +
                                '" @selected(old('+ value.id +'))>' + value
                                .school_class + ' (Section ' + value
                                .class_section +
                                ') </option>');
                        });
                    }
                });
            }
        });
    })
</script>
