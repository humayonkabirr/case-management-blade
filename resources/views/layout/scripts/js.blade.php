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


            // Display success message
            @if (session('success'))
                // Swal.fire({
                //     icon: 'success',
                //     title: 'Success',
                //     text: "{{ session('success') }}",
                //     timer: 5000, // Auto close after 5 seconds
                //     showConfirmButton: false, // No need for confirm button
                // });

                Toast.fire({
                    icon: "success",
                    title: "{{ session('success') }}"
                });

            @endif

            // Display error message with no auto close
            @if (session('error')) 
                Toast.fire({
                    icon: "error",
                    title: "{{ session('error') }}"
                });
            @endif

            // Display error message with no auto close
            @if (session('errors'))
                Toast.fire({
                    icon: "warning",
                    title: "Validation warning! please try again."
                });
            @endif
        });
    </script>



    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @stack('js')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
