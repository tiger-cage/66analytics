<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Account - Hotfunnel</title>
    <base href="">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <link rel="alternate" href="account" hreflang="x-default" />
    <link href="{{ asset('images/default/favicon.png') }}" rel="shortcut icon" />
    <link href="{{ asset('ui/css/bootstrap.min.css?v=710') }}" id="css_theme_style" rel="stylesheet"
        media="screen,print">
    <link href="{{ asset('ui/css/custom.css?v=710') }}" rel="stylesheet" media="screen,print">
    <link href="{{ asset('ui/css/animate.min.css?v=710') }}" rel="stylesheet" media="screen,print">
</head>

<body class="" data-theme-style="light">


@yield('content')
    <input type="hidden" name="global_url" value="" />
    <input type="hidden" name="global_token" value="b6bae654a8328c6c315aafb66eea8a59" />
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

    <script src="{{ asset('ui/js/jquery.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/popper.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/bootstrap.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/main.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/functions.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/fontawesome.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/fontawesome-solid.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/fontawesome-brands.modified.js?v=710') }}"></script>
    <script>
        'use strict';

                    /* Billing type handler */
                    let billing_type = () => {
                        let type = document.querySelector('select[name="billing_type"]').value;

                        if(type == 'personal') {
                            document.querySelector('#billing_tax_id_container').style.display = 'none';
                        } else {
                            document.querySelector('#billing_tax_id_container').style.display = '';
                        }
                    };

                    billing_type();

                    document.querySelector('select[name="billing_type"]').addEventListener('change', billing_type);


    </script>
    <script>
        'use strict';

        let twofa = () => {
            let is_enabled = parseInt(document.querySelector('select[name="twofa_is_enabled"]').value);

            if(is_enabled) {
                document.querySelector('#twofa_container').style.display = '';
            } else {
                document.querySelector('#twofa_container').style.display = 'none';
            }
        };

        twofa();

        document.querySelector('select[name="twofa_is_enabled"]').addEventListener('change', twofa);
    </script>
    <script>
        document.querySelectorAll('[data-choose-theme-style]').forEach(theme => {

                        theme.addEventListener('click', event => {

                            let chosen_theme_style = event.currentTarget.getAttribute('data-choose-theme-style');

                            /* Set a cookie with the new theme style */
                            set_cookie('theme_style', chosen_theme_style, 30, "");

                            /* Change the css and button on the page */
                            let css = document.querySelector(`#css_theme_style`);

                            document.querySelector(`[data-theme-style]`).setAttribute('data-theme-style', chosen_theme_style);

                            switch(chosen_theme_style) {
                                case 'dark':
                                    css.setAttribute('href', "themes\/altum\/assets\/css\/bootstrap-dark.min.css?v=630");
                                    document.querySelector(`[data-choose-theme-style="dark"]`).classList.add('d-none');
                                    document.querySelector(`[data-choose-theme-style="light"]`).classList.remove('d-none');
                                    break;

                                case 'light':
                                    css.setAttribute('href', "themes\/altum\/assets\/css\/bootstrap.min.css?v=630");
                                    document.querySelector(`[data-choose-theme-style="dark"]`).classList.remove('d-none');
                                    document.querySelector(`[data-choose-theme-style="light"]`).classList.add('d-none');
                                    break;
                            }

                            event.preventDefault();
                        });

                    })
    </script>
</body>

</html>
