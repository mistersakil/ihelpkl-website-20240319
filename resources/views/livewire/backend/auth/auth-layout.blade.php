<!doctype html>
<html lang="en" class="light-theme">

<head>
    @includeIf('components.backend.layout.backend-meta')

    @livewireStyles
</head>

<body>

    {{ $slot }}
    <script type="module">
        $(document).ready(function() {

            /* Password field value show/hidden feature  */

            $("#show_hide_password .toggle").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });

            /* Toast notification for invalid request */

            window.addEventListener('invalid', event => {

                event.preventDefault();
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    showCloseButton: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });

                Toast.fire({
                    icon: "error",
                    title: event.detail.message,
                });
            });

            /* End: Toast notification for invalid request */


        });
    </script>

    @livewireScripts

</body>

</html>
