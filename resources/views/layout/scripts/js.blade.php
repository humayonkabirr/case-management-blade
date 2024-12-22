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
        document.addEventListener('DOMContentLoaded', function() {

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

            // Prepare sound files
            const successSound = new Audio('/sounds/success.mp3');
            const errorSound = new Audio('/sounds/error.mp3');
            // const warningSound = new Audio('/sounds/warning.mp3');
            // Generate a random number between 1 and 5 for warning sound
            const randomWarningIndex = Math.floor(Math.random() * 5) + 1; // Random number between 1 and 5
            const warningSound = new Audio(`/sounds/warning-${randomWarningIndex}.mp3`);

            // Display success message with sound
            @if (session('success'))
                Toast.fire({
                    icon: "success",
                    title: "{{ session('success') }}"
                });
                successSound.play(); // Play success sound
            @endif

            // Display error message with sound
            @if (session('error'))
                Toast.fire({
                    icon: "error",
                    title: "{{ session('error') }}"
                });
                errorSound.play(); // Play error sound
            @endif

            // Display validation warning message with sound
            @if (session('errors'))
                Toast.fire({
                    icon: "warning",
                    title: "Validation warning! Please try again."
                });
                warningSound.play(); // Play warning sound
            @endif
        });
    </script>
 
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @stack('js')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
