<x-app-layout>

    <main>

        <header class="header">
            <div class="container">

                <div class="d-flex flex-column flex-xl-row justify-content-between mb-3">
                    <div>
                        <div class="d-flex flex-column flex-md-row align-items-md-center">
                            <span class="badge badge-primary mr-1">BETA</span>
                            <h1 class="h3 text-break">Replays of socialproofo.com/demo</h1>
                        </div>
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3 mb-md-0">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-column">
                                        <small class="text-muted text-uppercase font-weight-bold">Replays</small>
                                        <span class="h4 font-weight-bolder">0</span>
                                    </div>

                                    <span class="round-circle-md bg-gray-200 text-primary-700 p-3">
                                        <i class="fa fa-fw fa-lg fa-video"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
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



            <div class="d-flex flex-column align-items-center justify-content-center">
                <img src="https://66analytics.com/demo/themes/altum/assets/images/no_rows.svg"
                    class="col-10 col-md-6 col-lg-4 mb-3" alt="No data available.." />
                <h2 class="h4 text-muted">No data available..</h2>
                <p></a></p>
            </div>


        </section>

        <input type="hidden" name="start_date" value="2021-07-21 00:00:00" />
        <input type="hidden" name="end_date" value="2021-08-20 00:00:00" />
        <input type="hidden" name="website_id" value="895" />


    </main>



    <div id="loading" style="display: none;">
        <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading..</span>
            </div>
        </div>
    </div>


    <div class="modal fade" id="replay_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-gray-700"></i>
                        Delete Replay
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="replay_delete" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="session_id" value="" />

                        <div class="notification-container"></div>

                        <p class="text-muted">By deleting the replay, all the all the events of this session replay will
                            be deleted. This action cannot be undone.</p>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="replays_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-gray-700"></i>
                        Delete selected replays
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="replays_delete" method="post" role="form">
                        <div class="notification-container"></div>

                        <p class="text-muted">All the replays from the selected date range and filters will be deleted.
                            This action cannot be undone.</p>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
