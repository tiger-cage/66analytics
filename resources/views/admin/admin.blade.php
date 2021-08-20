<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Admin Dashboard - 66Analytics Demo</title>
    <base href="https://66analytics.com/demo/">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />

    <link rel="alternate" href="https://66analytics.com/demo/admin" hreflang="x-default" />

    <link href="{https://66analytics.com/demo/uploads/favicon/favicon.png}" rel="shortcut icon" />

    <link href="{{ asset('admin/css/admin-bootstrap.min.css?v=710') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('admin/css/admin-custom.css?v=710') }}" rel="stylesheet" media="screen">

</head>

<body class="" data-theme-style="light">
    <div id="admin_overlay" class="admin-overlay" style="display: none"></div>

    <div class="admin-container">

        @include('admin.partials.aside')

        <section class="admin-content altum-animate altum-animate-fill-none altum-animate-fade-in">

            <nav class="navbar navbar-expand-lg navbar-light admin-navbar-top">
                <a class="navbar-brand" href="https://66analytics.com/demo/">
                    <img src="https://66analytics.com/demo/uploads/logo/logo.png"
                        class="img-fluid admin-navbar-logo-top" alt="Website Logo" />
                </a>

                <ul class="navbar-nav ml-auto">
                    <button class="btn navbar-custom-toggler" type="button" id="admin_menu_toggler"
                        aria-controls="main_navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </ul>
            </nav>
            <div class="p-3 p-lg-5">
                @yield('content')
                @include('admin.partials.footer')

            </div>
        </section>
    </div>



    <input type="hidden" name="global_url" value="https://66analytics.com/demo/" />
    <input type="hidden" name="global_token" value="41365de7551b2e61c6f0eca40d095c70" />
    <input type="hidden" name="global_number_decimal_point" value="." />
    <input type="hidden" name="global_number_thousands_separator" value="," />

    <script>
        /* Some global variables */
        window.altum = {};
        let global_token = document.querySelector('input[name="global_token"]').value;
        let url = document.querySelector('input[name="global_url"]').value;
        let decimal_point = document.querySelector('[name="global_number_decimal_point"]').value;
        let thousands_separator = document.querySelector('[name="global_number_thousands_separator"]').value;
    </script>

    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/jquery.slim.min.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/popper.min.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/bootstrap.min.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/main.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/functions.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/fontawesome.min.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/fontawesome-solid.min.js?v=710"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/fontawesome-brands.modified.js?v=710">
    </script>


    <script>
        let toggle_admin_sidebar = () => {
            /* Open sidebar menu */
            let body = document.querySelector('body');
            body.classList.toggle('admin-sidebar-opened');

            /* Toggle overlay */
            let admin_overlay = document.querySelector('#admin_overlay');
            admin_overlay.style.display == 'none' ? admin_overlay.style.display = 'block' : admin_overlay.style
                .display = 'none';

            /* Change toggle button content */
            let button = document.querySelector('#admin_menu_toggler');

            if (body.classList.contains('admin-sidebar-opened')) {
                button.innerHTML = `<i class="fa fa-fw fa-times"></i>`;
            } else {
                button.innerHTML = `<i class="fa fa-fw fa-bars"></i>`;
            }
        };

        /* Toggler for the sidebar */
        document.querySelector('#admin_menu_toggler').addEventListener('click', event => {
            event.preventDefault();

            toggle_admin_sidebar();

            let admin_sidebar_is_opened = document.querySelector('body').classList.contains('admin-sidebar-opened');

            if (admin_sidebar_is_opened) {
                document.querySelector('#admin_overlay').removeEventListener('click', toggle_admin_sidebar);
                document.querySelector('#admin_overlay').addEventListener('click', toggle_admin_sidebar);
            } else {
                document.querySelector('#admin_overlay').removeEventListener('click', toggle_admin_sidebar);
            }
        });
    </script>
</body>

</html>
