<!-- Sidebar -->

<style>
    .collapse {
    visibility: visible;
    }
</style>
<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard.redirect') }}">
                <img src="{{ asset('theme') }}/static/logo-white.svg" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.redirect') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-chart-histogram"></i>
                        </span>
                        <span class="nav-link-title">
                            Home
                        </span>
                    </a>
                </li>

                @if (Auth::user()->roles->value('name') == 'teacher')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('update.attendance') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-clipboard-text"></i>
                            </span>
                            <span class="nav-link-title">
                                Student Attendance
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher.remark') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-messages"></i>
                            </span>
                            <span class="nav-link-title">
                                Student Remarks
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher.student.result') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-report-search"></i>
                            </span>
                            <span class="nav-link-title">
                                Student Results
                            </span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->roles->value('name') == 'student')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.feedback') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-messages"></i>
                            </span>
                            <span class="nav-link-title">
                                My Remarks
                            </span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</aside>
