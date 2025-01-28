    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('backend/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize SweetAlert2 Toast
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        // Preload sound files
        const sounds = {
            success: new Audio('/sounds/success.mp3'),
            error: new Audio('/sounds/error.mp3'),
            warning: new Audio(`/sounds/warning-${Math.floor(Math.random() * 5) + 1}.mp3`) // Random warning sound
        };

        // Helper function to display toast and play sound
        function showToast(type, message) {
            Toast.fire({
                icon: type,
                title: message
            });
            if (sounds[type]) sounds[type].play(); // Play corresponding sound
        }

        // Handle session messages
        @if (session('success'))
            showToast('success', "{{ session('success') }}");
        @endif

        @if (session('error'))
            showToast('error', "{{ session('error') }}");
        @endif

        @if (session('errors'))
            showToast('warning', "Validation warning! Please try again.");
        @endif
    });
</script>
 
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @stack('js')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
