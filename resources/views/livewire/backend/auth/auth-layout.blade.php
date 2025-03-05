<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ Vite::imageRoot('favicon.png') }}" type="image/png" /> --}}
    <title>{{ $title ?? 'Login' }} | {{ config('app.name') }}</title>

    <!-- Google fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    {{ Vite::useHotFile('back.hot')->useBuildDirectory('buildBack')->withEntryPoints(['resources/assets/backend/backend-js.js']) }}

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
