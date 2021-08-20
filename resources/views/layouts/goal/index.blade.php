<x-app-layout>

    <main>

        <header class="header">
            <div class="container">

                <nav aria-label="breadcrumb">
                    <small>
                        <ol class="custom-breadcrumbs">
                            <li><a href="https://66analytics.com/demo/dashboard">Dashboard</a> <i
                                    class="fa fa-fw fa-angle-right"></i></li>
                            <li class="active" aria-current="page">Goals</li>
                        </ol>
                    </small>
                </nav>

                <div class="d-flex flex-column flex-xl-row justify-content-between mb-3">
                    <div>
                        <h1 class="h3 text-break">socialproofo.com/demo</h1>
                    </div>

                    <div>
                        <button id="daterangepicker" type="button" class="btn btn-sm btn-outline-primary my-1"
                            data-min-date="2021-07-30" data-max-date="2021-08-20">
                            <i class="fa fa-fw fa-calendar mr-1"></i>
                            <span>
                                21 July, 2021 - 20 August, 2021 </span>
                            <i class="fa fa-fw fa-caret-down ml-1"></i>
                        </button>

                        <button type="button" class="btn btn-sm btn-outline-secondary d-print-none my-1"
                            onclick="$('#filters').toggle();" data-toggle="tooltip" title="Filter">
                            <i class="fa fa-fw fa-filter"></i>
                        </button>

                        <button type="button" class="btn btn-sm btn-outline-secondary d-print-none my-1"
                            onclick="window.open('https://66analytics.com/demo/dashboard/csv_normal')"
                            data-toggle="tooltip" title="Export to CSV">
                            <i class="fa fa-fw fa-file-csv"></i>
                        </button>


                        <button type="button" class="btn btn-sm btn-outline-secondary d-print-none my-1"
                            onclick="window.print()" data-toggle="tooltip" title="Export to PDF">
                            <i class="fa fa-fw fa-file-pdf"></i>
                        </button>
                    </div>
                </div>



                <div id="filters" class="card border-0 my-4" style="display: none;">
                    <div class="card-body">

                        <div class="row justify-content-between">
                            <div class="col-12 col-md-auto">
                                <h2 class="h4">Active filters</h2>
                            </div>

                            <div class="col-12 col-md-auto dropdown">
                                <button type="button" class="btn btn-sm btn-primary rounded-pill dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-fw fa-plus-circle"></i> Add filter </button>
                                <div id="create_filters_list" class="dropdown-menu dropdown-menu-right">
                                    <h6 class="dropdown-header">Visitors</h6>
                                    <button type="button" class="dropdown-item" data-filter-by="country_code"><i
                                            class="fa fa-fw fa-sm fa-globe text-muted"></i> Country
                                        Code</button>
                                    <button type="button" class="dropdown-item" data-filter-by="screen_resolution"><i
                                            class="fa fa-fw fa-sm fa-desktop text-muted"></i> Screen
                                        Resolution</button>
                                    <button type="button" class="dropdown-item" data-filter-by="browser_language"><i
                                            class="fa fa-fw fa-sm fa-language text-muted"></i> Browser
                                        Language</button>
                                    <button type="button" class="dropdown-item" data-filter-by="os_name"><i
                                            class="fa fa-fw fa-sm fa-server text-muted"></i> Operating
                                        System</button>
                                    <button type="button" class="dropdown-item" data-filter-by="device_type"><i
                                            class="fa fa-fw fa-sm fa-laptop text-muted"></i> Device</button>
                                    <button type="button" class="dropdown-item" data-filter-by="browser_name"><i
                                            class="fa fa-fw fa-sm fa-window-restore text-muted"></i>
                                        Browser</button>

                                    <h6 class="dropdown-header">Pageviews</h6>
                                    <button type="button" class="dropdown-item" data-filter-by="path"><i
                                            class="fa fa-fw fa-sm fa-copy text-muted"></i> Path</button>
                                    <button type="button" class="dropdown-item" data-filter-by="title"><i
                                            class="fa fa-fw fa-sm fa-heading text-muted"></i> Page
                                        Title</button>
                                    <button type="button" class="dropdown-item" data-filter-by="referrer_host"><i
                                            class="fa fa-fw fa-sm fa-random text-muted"></i> Referrer
                                        Host</button>
                                    <button type="button" class="dropdown-item" data-filter-by="utm_source"><i
                                            class="fa fa-fw fa-sm fa-link text-muted"></i> UTM
                                        Source</button>
                                    <button type="button" class="dropdown-item" data-filter-by="utm_medium"><i
                                            class="fa fa-fw fa-sm fa-link text-muted"></i> UTM
                                        Medium</button>
                                    <button type="button" class="dropdown-item" data-filter-by="utm_campaign"><i
                                            class="fa fa-fw fa-sm fa-link text-muted"></i> UTM
                                        Campaign</button>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">Create and modify filters to segmentize and check only the
                            data that you need.</p>

                        <form id="filters_form" action="" method="post" role="form">
                            <div id="filters_list"></div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>

                <template id="template_filter">
                    <div class="filter">
                        <input type="hidden" name="filter_by[]" value="" />

                        <div class="row mb-4 mb-md-3">
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <span id="template_filter_by_display" class="font-weight-bold"></span>
                            </div>

                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <select name="filter_rule[]" class="form-control form-control-lg ml-md-3">
                                    <option value="is">Is</option>
                                    <option value="is_not">Is not</option>
                                    <option value="contains">Contains</option>
                                    <option value="starts_with">Starts with</option>
                                    <option value="ends_with">Ends with</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-5 mb-3 mb-md-0">
                                <input type="text" name="filter_value[]" class="form-control form-control-lg ml-md-3" />
                            </div>

                            <div class="col-1 d-flex">
                                <button type="button"
                                    class="btn btn-outline-gray-400 ml-md-3 text-muted align-self-center filter_delete"
                                    data-toggle="tooltip" title="Delete"><i
                                        class="fa fa-fw fa-times fa-sm"></i></button>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
        </header>


        <section class="container">




            <div class="row mt-5">

                <div class="col-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="h5 m-0">Goals</h2>
                                </div>
                                <span class="round-circle-sm bg-gray-200 text-primary-700 p-3">
                                    <i class="fa fa-fw fa-sm fa-bullseye"></i>
                                </span>
                            </div>

                            <div class="mt-4" id="goals_result" data-limit="-1"></div>
                        </div>
                    </div>
                </div>

            </div>



        </section>

        <input type="hidden" name="start_date" value="2021-07-21" />
        <input type="hidden" name="end_date" value="2021-08-20" />
        <input type="hidden" name="website_id" value="895" />


    </main>


    <div class="modal fade" id="referrer_paths_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Referrer Paths</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">Here are all the paths under this referrer host.</p>
                </div>

                <div class="modal-body">
                    <div class="notification-container"></div>

                    <div id="referrer_paths_result"></div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="utms_medium_campaign_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">UTMs</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">Here are all the medium & campaign UTMs under this UTM source.</p>
                </div>

                <div class="modal-body">
                    <div class="notification-container"></div>

                    <div id="utms_medium_campaign_result"></div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="cities_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Cities</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">Here are all the cities under this country.</p>
                </div>

                <div class="modal-body">
                    <div class="notification-container"></div>

                    <div id="cities_result"></div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="goal_create_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Create a goal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="text-muted">A goal can help you track conversions or custom events, like a button click,
                        form submission...etc.</p>

                    <form name="goal_create" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />

                        <div class="notification-container"></div>

                        <div class="form-group">
                            <select name="type" class="form-control form-control-lg">
                                <option value="pageview">Pageview</option>
                                <option value="custom">Custom event</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-signature text-gray-700 mr-1"></i> Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required="required" />
                        </div>

                        <div class="d-none" id="goal_create_type_pageview">

                            <div class="form-group">
                                <label><i class="fa fa-fw fa-sm fa-link text-gray-700 mr-1"></i> Page path</label>
                                <div class="input-group">
                                    <div id="path_prepend" class="input-group-prepend">
                                        <span class="input-group-text">socialproofo.com/demo/</span>
                                    </div>

                                    <input type="text" name="path" class="form-control form-control-lg"
                                        placeholder="thank-you" />
                                </div>
                            </div>

                        </div>

                        <div class="d-none" id="goal_create_type_custom">

                            <div class="form-group">
                                <label><i class="fa fa-fw fa-sm fa-fingerprint text-gray-700 mr-1"></i> Key</label>
                                <input type="text" class="form-control form-control-lg" name="key"
                                    value="HwumL8ORNiPX4P6J" placeholder="custom-identifier" />
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-fw fa-sm fa-code text-gray-700 mr-1"></i> Javascript code</label>
                                <input type="text" class="form-control form-control-lg" name="code" value=""
                                    readonly="readonly" />
                                <small class="form-text text-muted">With this javascript snippet you can trigger your
                                    custom events inside of your web app.</small>
                            </div>

                        </div>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Create</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="goal_update_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Update goal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="text-muted">A goal can help you track conversions or custom events, like a button click,
                        form submission...etc.</p>

                    <form name="goal_update" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="goal_id" value="" />
                        <input type="hidden" name="type" value="" />

                        <div class="notification-container"></div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-signature text-gray-700 mr-1"></i> Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required="required" />
                        </div>

                        <div class="d-none" id="goal_update_type_pageview">

                            <div class="form-group">
                                <label><i class="fa fa-fw fa-sm fa-link text-gray-700 mr-1"></i> Page path</label>
                                <div class="input-group">
                                    <div id="path_prepend" class="input-group-prepend">
                                        <span class="input-group-text">socialproofo.com/demo/</span>
                                    </div>

                                    <input type="text" name="path" class="form-control form-control-lg"
                                        placeholder="thank-you" />
                                </div>
                            </div>

                        </div>

                        <div class="d-none" id="goal_update_type_custom">

                            <div class="form-group">
                                <label><i class="fa fa-fw fa-sm fa-fingerprint text-gray-700 mr-1"></i> Key</label>
                                <input type="text" class="form-control form-control-lg" name="key"
                                    value="BdjVk8HodqypnCKP" placeholder="custom-identifier" />
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-fw fa-sm fa-code text-gray-700 mr-1"></i> Javascript code</label>
                                <input type="text" class="form-control form-control-lg" name="code" value=""
                                    readonly="readonly" />
                                <small class="form-text text-muted">With this javascript snippet you can trigger your
                                    custom events inside of your web app.</small>
                            </div>

                        </div>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Update</button>
                        </div>
                    </form>

                    <form name="goal_delete" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="goal_id" value="" />

                        <div class="mt-4">
                            <button type="submit" name="submit"
                                class="btn btn-lg btn-block btn-outline-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
