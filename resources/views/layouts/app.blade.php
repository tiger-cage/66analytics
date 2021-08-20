<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> @livewireStyles {{-- client cite css --}}
    <link href="{{ asset('images/default/favicon.png') }}" rel="shortcut icon" />
    <link href="{{ asset('ui/css/bootstrap.min.css?v=710') }}" id="css_theme_style" rel="stylesheet"
        media="screen,print">
    <link href="{{ asset('ui/css/custom.css?v=710') }}" rel="stylesheet" media="screen,print">
    <link href="{{ asset('ui/css/animate.min.css?v=710') }}" rel="stylesheet" media="screen,print">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased" data-theme-style="light">
    <div class="min-h-screen bg-gray-100">
        <main>
            <div class="app-container">
                <section class="app-sidebar d-print-none">
                    <div class="app-sidebar-title">
                        <a href="">H</a>
                    </div>
                    <ul class="app-sidebar-links">
                        <li class="">
                            <a href="dashboard" data-toggle="tooltip" data-placement="right" title="Dashboard"><i
                                    class="fa fa-fw fa-th"></i></a>
                        </li>
                        <li class="">
                            <a href="dashboard/goals" data-toggle="tooltip" data-placement="right" title="Goals"><i
                                    class="fa fa-fw fa-bullseye"></i></a>
                        </li>
                        <li class="">
                            <a href="realtime" data-toggle="tooltip" data-placement="right" title="Realtime"><i
                                    class="fa fa-fw fa-clock"></i></a>
                        </li>
                        <li class="">
                            <a href="visitors" data-toggle="tooltip" data-placement="right" title="Visitors"><i
                                    class="fa fa-fw fa-user-friends"></i></a>
                        </li>
                        <li class="">
                            <a href="heatmaps" data-toggle="tooltip" data-placement="right" title="Heatmaps"><i
                                    class="fa fa-fw fa-fire"></i></a>
                        </li>
                        <li class="">
                            <a href="replays" data-toggle="tooltip" data-placement="right" title="Replays"><i
                                    class="fa fa-fw fa-video"></i></a>
                        </li>
                        <li class="">
                            <a href="websites" data-toggle="tooltip" data-placement="right" title="Websites"><i
                                    class="fa fa-fw fa-server"></i></a>
                        </li>
                        <li class="">
                            <a href="teams" data-toggle="tooltip" data-placement="right" title="Teams"><i
                                    class="fa fa-fw fa-user-shield"></i></a>
                        </li>
                        <li>
                            <a href="help" target="_blank" data-toggle="tooltip" data-placement="right" title="Help"><i
                                    class="fa fa-fw fa-question"></i></a>
                        </li>
                    </ul>
                </section>
                <section class="app-content">
                    @include('layouts.partials.nav')
                    {{ $slot }}
                    @include('layouts.partials.footer')
                </section>
            </div>
            <div id="loading" style="display: none;">
                <div class="text-center">
                    <div class="spinner-grow text-primary" role="status">
                        <span class="sr-only">Loading..</span>
                    </div>
                </div>
            </div>
        </main>
    </div> @livewireScripts <input type="hidden" name="global_url" value="" />
    <input type="hidden" name="global_token" value="b6bae654a8328c6c315aafb66eea8a59" />
    <input type="hidden" name="global_number_decimal_point" value="." />
    <input type="hidden" name="global_number_thousands_separator" value="," />
    <script>
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

        let billing_type = () => {
            let type = document.querySelector('select[name="billing_type"]').value;

            if (type == 'personal') {
                document.querySelector('#billing_tax_id_container').style.display = 'none';
            } else {
                document.querySelector('#billing_tax_id_container').style.display = '';
            }
        };

        billing_type();

        document.querySelector('select[name="billing_type"]').addEventListener('change', billing_type);
    </script>








    <script>
        /* On modal show load new data */
        $('#referrer_paths_modal').on('show.bs.modal', event => {
            let loading_html = $('#loading').html();

            /* Basic data to use for fetching extra data */
            let website_id = $('input[name="website_id"]').val();
            let tracking_type = "normal";
            let start_date = $('input[name="start_date"]').val();
            let end_date = $('input[name="end_date"]').val();
            let referrer_host = $(event.relatedTarget).data('referrer-host');

            /* Place the loading html */
            $('#referrer_paths_result').html(loading_html);

            /* Build the query */
            let url_query = build_url_query({
                website_id,
                start_date,
                end_date,
                global_token,
                request_type: 'referrer_paths',
                limit: -1,
                bounce_rate: true,
                referrer_host
            });

            $.ajax({
                type: 'GET',
                url: `${url}dashboard-ajax-${tracking_type}?${url_query}`,
                success: (data) => {
                    if (data.status == 'error') {
                        let notification_container = $(event.currentTarget).find(
                            '.notification-container');

                        notification_container.html('');

                        display_notifications(data.message, 'error', notification_container);
                    } else if (data.status == 'success') {

                        $('#referrer_paths_result').html(data.details.html);

                    }
                },
                dataType: 'json'
            });

        });
    </script>
    <script>
        /* On modal show load new data */
        $('#utms_medium_campaign_modal').on('show.bs.modal', event => {
            let loading_html = $('#loading').html();

            /* Basic data to use for fetching extra data */
            let website_id = $('input[name="website_id"]').val();
            let tracking_type = "normal";
            let start_date = $('input[name="start_date"]').val();
            let end_date = $('input[name="end_date"]').val();
            let utm_source = $(event.relatedTarget).data('utm-source');

            /* Place the loading html */
            $('#utms_medium_campaign_result').html(loading_html);

            /* Build the query */
            let url_query = build_url_query({
                website_id,
                start_date,
                end_date,
                global_token,
                request_type: 'utms_medium_campaign',
                limit: -1,
                bounce_rate: true,
                utm_source
            });

            $.ajax({
                type: 'GET',
                url: `${url}dashboard-ajax-${tracking_type}?${url_query}`,
                success: (data) => {
                    if (data.status == 'error') {
                        let notification_container = $(event.currentTarget).find(
                            '.notification-container');

                        notification_container.html('');

                        display_notifications(data.message, 'error', notification_container);
                    } else if (data.status == 'success') {

                        $('#utms_medium_campaign_result').html(data.details.html);

                    }
                },
                dataType: 'json'
            });

        });
    </script>
    <script>
        /* On modal show load new data */
        $('#cities_modal').on('show.bs.modal', event => {
            let loading_html = $('#loading').html();

            /* Basic data to use for fetching extra data */
            let website_id = $('input[name="website_id"]').val();
            let tracking_type = "normal";
            let start_date = $('input[name="start_date"]').val();
            let end_date = $('input[name="end_date"]').val();
            let country_code = $(event.relatedTarget).data('country-code');

            /* Place the loading html */
            $('#cities_result').html(loading_html);

            /* Build the query */
            let url_query = build_url_query({
                website_id,
                start_date,
                end_date,
                global_token,
                request_type: 'cities',
                limit: -1,
                bounce_rate: true,
                country_code
            });

            $.ajax({
                type: 'GET',
                url: `${url}dashboard-ajax-${tracking_type}?${url_query}`,
                success: (data) => {
                    if (data.status == 'error') {
                        let notification_container = $(event.currentTarget).find(
                            '.notification-container');

                        notification_container.html('');

                        display_notifications(data.message, 'error', notification_container);
                    } else if (data.status == 'success') {

                        $('#cities_result').html(data.details.html);

                    }
                },
                dataType: 'json'
            });

        });
    </script>
    <script>
        /* Tab switcher */
        let goal_create_input_type_handler = () => {
            let type = document.querySelector('#goal_create_modal select[name="type"]').value;

            switch (type) {
                case 'pageview':

                    document.querySelector('#goal_create_type_pageview').classList.remove('d-none');
                    document.querySelector('#goal_create_type_custom').classList.add('d-none');

                    break;

                case 'custom':

                    document.querySelector('#goal_create_type_pageview').classList.add('d-none');
                    document.querySelector('#goal_create_type_custom').classList.remove('d-none');

                    break;
            }

        }

        document.querySelector('#goal_create_modal select[name="type"]').addEventListener('change',
            goal_create_input_type_handler);

        goal_create_input_type_handler();


        let goal_create_update_code = () => {

            let key = $('#goal_create_modal input[name="key"]').val();

            let code = `66analytics.goal('${key}')`;

            $('#goal_create_modal input[name="code"]').val(code);

        };

        $('#goal_create_modal input[name="key"]').on('change paste keyup', goal_create_update_code);

        goal_create_update_code();


        $('form[name="goal_create"]').on('submit', event => {

            $.ajax({
                type: 'POST',
                url: 'goals-ajax/create',
                data: $(event.currentTarget).serialize(),
                success: (data) => {
                    let notification_container = $(event.currentTarget).find('.notification-container');

                    if (data.status == 'error') {
                        notification_container.html('');

                        display_notifications(data.message, 'error', notification_container);
                    } else if (data.status == 'success') {

                        display_notifications(data.message, 'success', notification_container);

                        setTimeout(() => {

                            /* Hide modal */
                            $('#goal_create').modal('hide');

                            /* Clear input values */
                            $('form[name="goal_create"] input').val('');

                            /* Refresh */
                            redirect('dashboard/goals');

                            /* Remove the notification */
                            notification_container.html('');

                        }, 1000);

                    }
                },
                dataType: 'json'
            });

            event.preventDefault();

        });
    </script>
    <script>
        let goal_update_update_code = () => {

            let key = $('#goal_update_modal input[name="key"]').val();

            let code = `66analytics.goal('${key}')`;

            $('#goal_update_modal input[name="code"]').val(code);

        };

        $('#goal_update_modal input[name="key"]').on('change paste keyup', goal_update_update_code);

        goal_update_update_code();

        /* On modal show load new data */
        $('#goal_update_modal').on('show.bs.modal', event => {
            let goal_id = $(event.relatedTarget).data('goal-id');
            let key = $(event.relatedTarget).data('key');
            let type = $(event.relatedTarget).data('type');
            let path = $(event.relatedTarget).data('path');
            let name = $(event.relatedTarget).data('name');

            $(event.currentTarget).find('input[name="goal_id"]').val(goal_id);
            $(event.currentTarget).find('input[name="type"]').val(type);
            $(event.currentTarget).find('input[name="key"]').val(key);
            $(event.currentTarget).find('input[name="path"]').val(path);
            $(event.currentTarget).find('input[name="name"]').val(name);

            switch (type) {
                case 'pageview':

                    document.querySelector('#goal_update_type_pageview').classList.remove('d-none');
                    document.querySelector('#goal_update_type_custom').classList.add('d-none');

                    break;

                case 'custom':

                    document.querySelector('#goal_update_type_pageview').classList.add('d-none');
                    document.querySelector('#goal_update_type_custom').classList.remove('d-none');

                    break;
            }

            goal_update_update_code();

        });

        $('form[name="goal_update"],form[name="goal_delete"]').on('submit', event => {

            let type = $(event.currentTarget).attr('name').substring('goal_'.length);

            $.ajax({
                type: 'POST',
                url: `goals-ajax/${type}`,
                data: $(event.currentTarget).serialize(),
                success: (data) => {
                    let notification_container = $('form[name="goal_update"]').find(
                        '.notification-container');

                    if (data.status == 'error') {
                        notification_container.html('');

                        display_notifications(data.message, 'error', notification_container);
                    } else if (data.status == 'success') {

                        display_notifications(data.message, 'success', notification_container);

                        setTimeout(() => {

                            /* Hide modal */
                            $('#goal_update_modal').modal('hide');

                            /* Clear input values */
                            $('form[name="goal_update"] input').val('');

                            /* Refresh */
                            redirect('dashboard/goals');

                            /* Remove the notification */
                            notification_container.html('');

                        }, 1000);

                    }
                },
                dataType: 'json'
            });

            event.preventDefault();

        });
    </script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/Chart.bundle.min.js"></script>

    <script>
        /* Charts */
        Chart.defaults.global.elements.line.borderWidth = 4;
        Chart.defaults.global.elements.point.radius = 3;
        Chart.defaults.global.elements.point.borderWidth = 4;

        let chart_css = window.getComputedStyle(document.body);

        let impressions_chart = document.getElementById('logs_chart').getContext('2d');

        let gradient = impressions_chart.createLinearGradient(0, 0, 0, 250);
        gradient.addColorStop(0, 'rgba(17, 85, 212, .65)');
        gradient.addColorStop(1, 'rgba(17, 85, 212, 0.025)');

        let labels_alt = ["30 July, 2021", "31 July, 2021", "1 August, 2021", "2 August, 2021", "3 August, 2021",
            "4 August, 2021", "5 August, 2021", "6 August, 2021", "7 August, 2021", "8 August, 2021", "9 August, 2021",
            "10 August, 2021", "11 August, 2021", "12 August, 2021", "13 August, 2021", "14 August, 2021",
            "15 August, 2021", "16 August, 2021", "17 August, 2021", "18 August, 2021", "19 August, 2021",
            "20 August, 2021"
        ];

        new Chart(impressions_chart, {
            type: 'line',
            data: {
                labels: ["30 July, 2021", "31 July, 2021", "1 August, 2021", "2 August, 2021", "3 August, 2021",
                    "4 August, 2021", "5 August, 2021", "6 August, 2021", "7 August, 2021", "8 August, 2021",
                    "9 August, 2021", "10 August, 2021", "11 August, 2021", "12 August, 2021",
                    "13 August, 2021", "14 August, 2021", "15 August, 2021", "16 August, 2021",
                    "17 August, 2021", "18 August, 2021", "19 August, 2021", "20 August, 2021"
                ],
                datasets: [{
                        data: ["126", "173", "193", "340", "260", "250", "276", "449", "167", "560", "806",
                            "606", "458", "595", "486", "442", "607", "597", "905", "484", "402", "101"
                        ],
                        backgroundColor: gradient,
                        borderColor: '#1155D4',
                        fill: true,
                        label: "Pageviews"
                    },
                    {
                        data: ["36", "41", "41", "54", "48", "69", "57", "82", "47", "119", "182", "115", "100",
                            "77", "78", "106", "110", "101", "103", "93", "63", "22"
                        ],
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderColor: 'rgba(0,0,0,0)',
                        fill: false,
                        showLine: false,
                        borderWidth: 0,
                        pointBorderWidth: 0,
                        pointBorderRadius: 0,
                        label: "Sessions"
                    },
                    {
                        data: ["31", "36", "34", "41", "44", "59", "51", "75", "46", "116", "177", "105", "94",
                            "64", "69", "99", "106", "88", "90", "79", "57", "19"
                        ],
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderColor: 'rgba(0,0,0,0)',
                        fill: false,
                        showLine: false,
                        borderWidth: 0,
                        pointBorderWidth: 0,
                        pointBorderRadius: 0,
                        label: "Visitors"
                    }
                ]
            },
            options: {
                elements: {
                    line: {
                        tension: 0
                    }
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        title: (tooltipItem, data) => {
                            return labels_alt[tooltipItem[0].index];
                        },
                        label: (tooltipItem, data) => {
                            let value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];

                            return `${nr(value)} - ${data.datasets[tooltipItem.datasetIndex].label}`;
                        }
                    },
                    xPadding: 12,
                    yPadding: 12,
                    titleFontColor: chart_css.getPropertyValue('--white'),
                    titleSpacing: 30,
                    titleFontSize: 16,
                    titleFontStyle: 'bold',
                    titleMarginBottom: 10,
                    bodyFontColor: chart_css.getPropertyValue('--gray-50'),
                    bodyFontSize: 14,
                    bodySpacing: 10,
                    backgroundColor: chart_css.getPropertyValue('--gray-900'),
                    footerMarginTop: 10,
                    footerFontStyle: 'normal',
                    footerFontSize: 12,
                    cornerRadius: 4,
                    caretSize: 6,
                },
                title: {
                    display: false
                },
                legend: {
                    display: false
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            userCallback: (value, index, values) => {
                                if (Math.floor(value) === value) {
                                    return nr(value);
                                }
                            },
                            beginAtZero: true
                        },
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        /* Populate with already existing filters */
        let filters_cookie = get_cookie('filters');
        let template = document.querySelector('#template_filter');

        if (filters_cookie) {
            let filters = JSON.parse(filters_cookie);

            let filters_to_show = 0;

            for (let filter of filters) {
                /* Prepare template */
                let clone = template.content.cloneNode(true);

                let filter_origin = $(`button[data-filter-by="${filter.by}"]`);


                /* Add the data in the template */
                $(clone).find('#template_filter_by_display').html(filter_origin.html());
                $(clone).find('[name="filter_by\[\]"]').val(filter.by);
                $(clone).find(`[name="filter_rule\[\]"] option[value="${filter.rule}"]`).attr('selected', 'selected');
                $(clone).find('[name="filter_value\[\]"]').val(filter.value);

                /* Hide the filter if it shouldn't show */
                if (!filter_origin.length) {
                    $(clone).find('.filter').hide();
                } else {
                    filters_to_show++;
                }

                $('#filters_list').append(clone);
            }

            if (filters_to_show) {
                $('#filters').show();
            }
        }

        /* Create new filter handler */
        $('#create_filters_list > button').on('click', event => {

            let template = document.querySelector('#template_filter');

            /* Prepare template */
            let clone = template.content.cloneNode(true);

            $(clone).find('#template_filter_by_display').html($(event.currentTarget).html());
            $(clone).find('[name="filter_by\[\]"]').val($(event.currentTarget).data('filter-by'));

            /* Add */
            $('#filters_list').append(clone);

            /* Initiate handlers */
            initiate_delete_handler();

            /* Refresh tooltips */
            $('[data-toggle="tooltip"]').tooltip();
        });

        /* Delete handler */
        let initiate_delete_handler = () => {
            $('.filter_delete').off().on('click', event => {
                $(event.currentTarget).tooltip('hide');

                $(event.currentTarget).closest('.filter').remove();

                event.preventDefault();
            });
        };

        /* Initiate handlers */
        initiate_delete_handler();

        /* Handling the form submission */
        $('#filters_form').on('submit', event => {

            let form = $(event.currentTarget).serializeArray();
            let filters = [];

            for (let i = 0; i <= form.length - 1; i += 3) {

                filters.push({
                    by: form[i].value,
                    rule: form[i + 1].value,
                    value: form[i + 2].value
                })

            }

            /* Set the cookie */
            set_cookie('filters', JSON.stringify(filters), 30, "\/demo\/");

            redirect("dashboard");

            event.preventDefault();
        });
    </script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/moment.min.js"></script>
    <script src="https://66analytics.com/demo/themes/altum/assets/js/libraries/daterangepicker.min.js"></script>
    <script
        src="https://66analytics.com/demo/themes/altum/assets/js/libraries/moment-timezone-with-data-10-year-range.min.js">
    </script>

    <script>
        'use strict';

        let twofa = () => {
            let is_enabled = parseInt(document.querySelector('select[name="twofa_is_enabled"]').value);

            if (is_enabled) {
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

                set_cookie('theme_style', chosen_theme_style, 30, "");

                let css = document.querySelector(`#css_theme_style`);

                document.querySelector(`[data-theme-style]`).setAttribute('data-theme-style',
                    chosen_theme_style);

                switch (chosen_theme_style) {
                    case 'dark':
                        css.setAttribute('href',
                            "themes\/altum\/assets\/css\/bootstrap-dark.min.css?v=630");
                        document.querySelector(`[data-choose-theme-style="dark"]`).classList.add('d-none');
                        document.querySelector(`[data-choose-theme-style="light"]`).classList.remove(
                            'd-none');
                        break;

                    case 'light':
                        css.setAttribute('href', "themes\/altum\/assets\/css\/bootstrap.min.css?v=630");
                        document.querySelector(`[data-choose-theme-style="dark"]`).classList.remove(
                            'd-none');
                        document.querySelector(`[data-choose-theme-style="light"]`).classList.add('d-none');
                        break;
                }

                event.preventDefault();
            });

        })
    </script>

</body>

</html>
