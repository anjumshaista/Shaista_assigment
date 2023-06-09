@include('layouts.header-links')

<body>
    <script src="{{ asset('theme') }}/dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page">
        @include('layouts.sidebar')

        @include('layouts.topnav')

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">
                                {{ $title ?? '' }}
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none"></div>
                    </div>
                </div>
            </div>

            @yield('content')

            @include('layouts.footer')

            @stack('modals')
        </div>
    </div>

    @livewireScripts

    <!-- Tabler Core -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('theme') }}/dist/js/tabler.min.js?1674944402" defer></script>
    <script src="{{ asset('theme') }}/dist/js/demo.min.js?1674944402" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('js')
</body>

</html>

<script>
    window.addEventListener('swal:confirm', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: event.detail.btnText,
        }).then((result) => {
            if (result.isConfirmed) {
                if (event.detail.eventType == 'delete') {
                    livewire.emit('deleteConfirmed', event.detail.id);
                } else if (event.detail.eventType == 'undo') {
                    livewire.emit('undoConfirmed', event.detail.id);
                } else if (event.detail.eventType == 'save') {
                    livewire.emit('saveConfirmed', event.detail.id);
                } else if (event.detail.eventType == 'edit') {
                    livewire.emit('editConfirmed', event.detail.id);
                }
            }
        });
    });
    window.addEventListener('swal:success', event => {
        Swal.fire({
            icon: event.detail.type,
            title: event.detail.title,
            text: event.detail.text,
            showConfirmButton: event.detail.showBtn,
            timer: event.detail.timer,
        })
    });
    window.addEventListener('swal:error', event => {
        Swal.fire({
            icon: event.detail.type,
            title: event.detail.title,
            text: event.detail.text,
            showConfirmButton: event.detail.showBtn,
            timer: event.detail.timer,
        })
    });

    window.addEventListener('openAddModal', event => {
        $('#' + event.detail.modal_name).modal('show');
        // $('#addProjectModal').modal('show');
    });
</script>
