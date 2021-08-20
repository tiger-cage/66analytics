<x-app-layout>




    <main>

        <header class="header">
            <div class="container">

                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div>
                        <h1 class="h3"><i class="fa fa-fw fa-xs fa-server text-gray-700"></i> Websites</h1>
                        <p class="text-muted">View and manage all your added websites.</p>
                    </div>

                    <div class="col-auto p-0 d-flex">
                        <div>
                            <button type="button" class="btn btn-primary rounded-pill disabled" data-toggle="tooltip"
                                title="Your plan does not allow you to connect any more websites.">
                                <i class="fa fa-fw fa-sm fa-plus-circle"></i> Add Website </button>
                        </div>

                        <div class="ml-3">
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-outline-secondary rounded-pill filters-button dropdown-toggle-simple"
                                    data-toggle="dropdown"><i class="fa fa-fw fa-sm fa-filter"></i></button>

                                <div class="dropdown-menu dropdown-menu-right filters-dropdown">
                                    <div class="dropdown-header d-flex justify-content-between">
                                        <span class="h6 m-0">Filters</span>

                                    </div>

                                    <div class="dropdown-divider"></div>

                                    <form action="" method="get" role="form">
                                        <div class="form-group px-4">
                                            <label for="search" class="small">Search</label>
                                            <input type="search" name="search" id="search"
                                                class="form-control form-control-sm" value="" />
                                        </div>

                                        <div class="form-group px-4">
                                            <label for="search_by" class="small">Search by</label>
                                            <select name="search_by" id="search_by"
                                                class="form-control form-control-sm">
                                                <option value="name">Name</option>
                                                <option value="host">Domain</option>
                                            </select>
                                        </div>

                                        <div class="form-group px-4">
                                            <label for="is_enabled" class="small">Status</label>
                                            <select name="is_enabled" id="is_enabled"
                                                class="form-control form-control-sm">
                                                <option value="">All</option>
                                                <option value="1">Active</option>
                                                <option value="0">Disabled</option>
                                            </select>
                                        </div>

                                        <div class="form-group px-4">
                                            <label for="is_enabled" class="small">Tracking type</label>
                                            <select name="tracking_type" id="tracking_type"
                                                class="form-control form-control-sm">
                                                <option value="">All</option>
                                                <option value="normal">Advanced</option>
                                                <option value="lightweight">Lightweight</option>
                                            </select>
                                        </div>

                                        <div class="form-group px-4">
                                            <label for="order_by" class="small">Order by</label>
                                            <select name="order_by" id="order_by" class="form-control form-control-sm">
                                                <option value="date">Created datetime</option>
                                                <option value="name">Name</option>
                                                <option value="host">Domain</option>
                                            </select>
                                        </div>

                                        <div class="form-group px-4">
                                            <label for="order_type" class="small">Order type</label>
                                            <select name="order_type" id="order_type"
                                                class="form-control form-control-sm">
                                                <option value="ASC">Ascending</option>
                                                <option value="DESC">Descending</option>
                                            </select>
                                        </div>

                                        <div class="form-group px-4">
                                            <label for="results_per_page" class="small">Results per
                                                page</label>
                                            <select name="results_per_page" id="results_per_page"
                                                class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25" selected="selected">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="250">250</option>
                                            </select>
                                        </div>

                                        <div class="form-group px-4 mt-4">
                                            <button type="submit" name="submit"
                                                class="btn btn-sm btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>


        <section class="container">



            <div class="table-responsive table-custom-container">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Website</th>
                            <th>Usage</th>
                            <th>Tracking</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr data-website-id="895">
                            <td>
                                <div class="d-flex flex-column">
                                    <span>SocialProofo Demo</span>
                                    <div class="d-flex align-items-center text-muted">
                                        <img src="https://external-content.duckduckgo.com/ip3/socialproofo.com.ico"
                                            class="img-fluid icon-favicon mr-1" />

                                        socialproofo.com/demo
                                    </div>
                                </div>
                            </td>
                            <td class="text-muted">

                                <a href="https://66analytics.com/demo/plan" data-toggle="tooltip" data-html="true"
                                    title="                            <div class='d-flex flex-column p-3'>
                                <div class='d-flex justify-content-between my-1'>
                                    <div class='mr-3'>Pageviews</div>
                                    <strong>9,020/∞</strong>
                                </div>

                                                                                                            <div class='d-flex justify-content-between my-1'>
                                            <div class='mr-3'>Visitors Events</div>
                                            <strong>69,170/∞</strong>
                                        </div>

                                                                            <div class='d-flex justify-content-between my-1'>
                                            <div class='mr-3'>Replays</div>
                                            <strong>1,000/1K</strong>
                                        </div>

                                                                            <div class='d-flex justify-content-between my-1'>
                                            <div class='mr-3'>Heatmaps</div>
                                            <strong>2/5</strong>
                                        </div>

                                                                    <div class='d-flex justify-content-between my-1'>
                                        <div class='mr-3'>Goals</div>
                                        <strong>0/10</strong>
                                    </div>
                                                            </div>
                            " class="text-muted">
                                    <i class="fa fa-fw fa-lg fa-info-circle"></i>
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-success">
                                    <i class="fa fa-fw fa-check"></i> Active - Advanced mode
                                </span>

                                <div class="mt-1">
                                    <span class="badge badge-pill badge-success" data-toggle="tooltip"
                                        title="Visitors Events"><i class="fa fa-fw fa-mouse"></i></span>

                                    <span class="badge badge-pill badge-success" data-toggle="tooltip"
                                        title="Replays"><i class="fa fa-fw fa-video"></i></span>

                                </div>

                            </td>

                            <td>
                                <div class="d-flex flex-column flex-md-row">
                                    <button type="button" class="btn btn-outline-primary btn-sm mr-3"
                                        data-toggle="modal" data-target="#website_pixel_key" data-tracking-type="normal"
                                        data-pixel-key="BRd8zqCcSdrWOqof"
                                        data-url="https://socialproofo.com/demo">Tracking Code</button>

                                    <a href="#" class="mr-3 text-decoration-none" data-toggle="modal"
                                        data-target="#website_update" data-website-id="895"
                                        data-name="SocialProofo Demo" data-scheme="https://"
                                        data-host="socialproofo.com/demo" data-tracking-type="normal"
                                        data-events-children-is-enabled="1" data-sessions-replays-is-enabled="1"
                                        data-excluded-ips="" data-email-reports-is-enabled="0" data-is-enabled="1">
                                        <i class="fa fa-fw fa-sm fa-pencil-alt"></i> Edit </a>
                                    <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                        data-target="#website_delete" data-website-id="895">
                                        <i class="fa fa-fw fa-sm fa-times"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        <tr data-website-id="896">
                            <td>
                                <div class="d-flex flex-column">
                                    <span>66Analytics Demo</span>
                                    <div class="d-flex align-items-center text-muted">
                                        <img src="https://external-content.duckduckgo.com/ip3/66analytics.com.ico"
                                            class="img-fluid icon-favicon mr-1" />

                                        66analytics.com/demo
                                    </div>
                                </div>
                            </td>
                            <td class="text-muted">

                                <a href="https://66analytics.com/demo/plan" data-toggle="tooltip" data-html="true"
                                    title="                            <div class='d-flex flex-column p-3'>
                                <div class='d-flex justify-content-between my-1'>
                                    <div class='mr-3'>Pageviews</div>
                                    <strong>5,490/∞</strong>
                                </div>

                                                                                                            <div class='d-flex justify-content-between my-1'>
                                            <div class='mr-3'>Visitors Events</div>
                                            <strong>1,242/∞</strong>
                                        </div>

                                                                            <div class='d-flex justify-content-between my-1'>
                                            <div class='mr-3'>Replays</div>
                                            <strong>0/1K</strong>
                                        </div>

                                                                            <div class='d-flex justify-content-between my-1'>
                                            <div class='mr-3'>Heatmaps</div>
                                            <strong>1/5</strong>
                                        </div>

                                                                    <div class='d-flex justify-content-between my-1'>
                                        <div class='mr-3'>Goals</div>
                                        <strong>3/10</strong>
                                    </div>
                                                            </div>
                            " class="text-muted">
                                    <i class="fa fa-fw fa-lg fa-info-circle"></i>
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-success">
                                    <i class="fa fa-fw fa-check"></i> Active - Advanced mode
                                </span>

                                <div class="mt-1">
                                    <span class="badge badge-pill badge-warning" data-toggle="tooltip"
                                        title="Visitors Events"><i class="fa fa-fw fa-mouse"></i></span>

                                    <span class="badge badge-pill badge-warning" data-toggle="tooltip"
                                        title="Replays"><i class="fa fa-fw fa-video"></i></span>

                                </div>

                            </td>

                            <td>
                                <div class="d-flex flex-column flex-md-row">
                                    <button type="button" class="btn btn-outline-primary btn-sm mr-3"
                                        data-toggle="modal" data-target="#website_pixel_key" data-tracking-type="normal"
                                        data-pixel-key="tSxQbH9Bngbtrzjl"
                                        data-url="https://66analytics.com/demo">Tracking Code</button>

                                    <a href="#" class="mr-3 text-decoration-none" data-toggle="modal"
                                        data-target="#website_update" data-website-id="896" data-name="66Analytics Demo"
                                        data-scheme="https://" data-host="66analytics.com/demo"
                                        data-tracking-type="normal" data-events-children-is-enabled=""
                                        data-sessions-replays-is-enabled="" data-excluded-ips=""
                                        data-email-reports-is-enabled="0" data-is-enabled="1">
                                        <i class="fa fa-fw fa-sm fa-pencil-alt"></i> Edit </a>
                                    <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                        data-target="#website_delete" data-website-id="896">
                                        <i class="fa fa-fw fa-sm fa-times"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        <tr data-website-id="897">
                            <td>
                                <div class="d-flex flex-column">
                                    <span>AltumCode</span>
                                    <div class="d-flex align-items-center text-muted">
                                        <img src="https://external-content.duckduckgo.com/ip3/altumcode.com.ico"
                                            class="img-fluid icon-favicon mr-1" />

                                        altumcode.com
                                    </div>
                                </div>
                            </td>
                            <td class="text-muted">

                                <a href="https://66analytics.com/demo/plan" data-toggle="tooltip" data-html="true"
                                    title="                            <div class='d-flex flex-column p-3'>
                                <div class='d-flex justify-content-between my-1'>
                                    <div class='mr-3'>Pageviews</div>
                                    <strong>1,718/∞</strong>
                                </div>


                                                                    <div class='d-flex justify-content-between my-1'>
                                        <div class='mr-3'>Goals</div>
                                        <strong>0/10</strong>
                                    </div>
                                                            </div>
                            " class="text-muted">
                                    <i class="fa fa-fw fa-lg fa-info-circle"></i>
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-success">
                                    <i class="fa fa-fw fa-check"></i> Active
                                    - Lightweight mode </span>


                            </td>

                            <td>
                                <div class="d-flex flex-column flex-md-row">
                                    <button type="button" class="btn btn-outline-primary btn-sm mr-3"
                                        data-toggle="modal" data-target="#website_pixel_key"
                                        data-tracking-type="lightweight" data-pixel-key="EYoqCFHubr7fjUID"
                                        data-url="https://altumcode.com">Tracking Code</button>

                                    <a href="#" class="mr-3 text-decoration-none" data-toggle="modal"
                                        data-target="#website_update" data-website-id="897" data-name="AltumCode"
                                        data-scheme="https://" data-host="altumcode.com"
                                        data-tracking-type="lightweight" data-events-children-is-enabled=""
                                        data-sessions-replays-is-enabled="" data-excluded-ips=""
                                        data-email-reports-is-enabled="0" data-is-enabled="1">
                                        <i class="fa fa-fw fa-sm fa-pencil-alt"></i> Edit </a>
                                    <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                        data-target="#website_delete" data-website-id="897">
                                        <i class="fa fa-fw fa-sm fa-times"></i> Delete </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="">
                        <p class="text-muted">
                            Showing 1-3 out of 3 results. </p>
                    </div>

                    <div class="">
                        <ul class="pagination">


                        </ul>
                    </div>
                </div>


            </div>


        </section>
    </main>



    <div id="loading" style="display: none;">
        <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading..</span>
            </div>
        </div>
    </div>


    <div class="modal fade" id="website_create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add New Website</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="website_create" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="request_type" value="create" />

                        <div class="notification-container"></div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required="required" />
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-network-wired text-muted mr-1"></i> Website</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="scheme"
                                        class="appearance-none select-custom-altum form-control form-control-lg input-group-text">
                                        <option value="https://">https://</option>
                                        <option value="http://">http://</option>
                                    </select>
                                </div>

                                <input type="text" class="form-control form-control-lg" name="host"
                                    placeholder="domain.com" required="required" />
                            </div>
                            <small class="form-text text-muted">Tracking will only work on the
                                <strong>domain.com</strong>, <strong>sub.domain.com</strong> or
                                <strong>domain.com/path</strong> that you specify.</small>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-chart-bar text-muted mr-1"></i> Tracking type</label>
                            <select name="tracking_type" class="form-control form-control-lg">
                                <option value="lightweight">Lightweight</option>
                                <option value="normal">Advanced</option>
                            </select>
                            <small data-tracking-type="lightweight" class="form-text text-muted d-none">This type of
                                tracking will not use any cookies, local storage or any identifiers for visitors, fully
                                compliant with GDPR, CCPA and PECR right out of the box. No consent needed for this kind
                                of tracking.</small>
                            <small data-tracking-type="normal" class="form-text text-muted d-none">This type of tracking
                                will use local storage and random unique identifiers for each visitor to know when the
                                user is coming back and to associate visits and other data to that particular
                                visitor.</small>
                            <small class="form-text text-danger">The tracking type cannot be changed later on!</small>
                        </div>

                        <div data-tracking-type="normal" class="d-none">

                            <div>
                                <div class="custom-control custom-switch my-3 ">
                                    <input type="checkbox" class="custom-control-input"
                                        name="events_children_is_enabled"
                                        id="website_create_events_children_is_enabled">
                                    <label class="custom-control-label clickable"
                                        for="website_create_events_children_is_enabled">Track Visitors Events</label>
                                    <small class="form-text text-muted">Enable or disable tracking for mouse clicks,
                                        form submissions, resizes or scrolls.</small>
                                </div>
                            </div>

                            <div>
                                <div class="custom-control custom-switch my-3 ">
                                    <input type="checkbox" class="custom-control-input"
                                        name="sessions_replays_is_enabled"
                                        id="website_create_sessions_replays_is_enabled">
                                    <label class="custom-control-label clickable"
                                        for="website_create_sessions_replays_is_enabled">Session Replays</label>
                                    <small class="form-text text-muted">Enable or disable visual session replays
                                        tracking. This is a more advanced tracking type compared to the normal
                                        option.</small>
                                </div>
                            </div>
                        </div>


                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="website_update" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Update Website</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="website_update" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="request_type" value="update" />
                        <input type="hidden" name="website_id" value="" />

                        <div class="notification-container"></div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" />
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-network-wired text-muted mr-1"></i> Website</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="scheme"
                                        class="appearance-none select-custom-altum form-control form-control-lg input-group-text">
                                        <option value="https://">https://</option>
                                        <option value="http://">http://</option>
                                    </select>
                                </div>

                                <input type="text" class="form-control form-control-lg" name="host"
                                    placeholder="domain.com" required="required" />
                            </div>
                            <small class="form-text text-muted">Tracking will only work on the
                                <strong>domain.com</strong>, <strong>sub.domain.com</strong> or
                                <strong>domain.com/path</strong> that you specify.</small>
                        </div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-chart-bar text-muted mr-1"></i> Tracking type</label>
                            <select name="tracking_type" class="form-control form-control-lg" disabled="disabled">
                                <option value="lightweight">Lightweight</option>
                                <option value="normal">Advanced</option>
                            </select>
                            <small data-tracking-type="lightweight" class="form-text text-muted d-none">This type of
                                tracking will not use any cookies, local storage or any identifiers for visitors, fully
                                compliant with GDPR, CCPA and PECR right out of the box. No consent needed for this kind
                                of tracking.</small>
                            <small data-tracking-type="normal" class="form-text text-muted d-none">This type of tracking
                                will use local storage and random unique identifiers for each visitor to know when the
                                user is coming back and to associate visits and other data to that particular
                                visitor.</small>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="is_enabled"
                                    id="website_update_is_enabled">
                                <label class="custom-control-label clickable" for="website_update_is_enabled">Tracking
                                    Status</label>
                                <small class="form-text text-muted">Fully enable or disable tracking of the
                                    website.</small>
                            </div>
                        </div>

                        <div data-tracking-type="normal" class="d-none">
                            <div>
                                <div class="custom-control custom-switch my-3 ">
                                    <input type="checkbox" class="custom-control-input"
                                        name="events_children_is_enabled"
                                        id="website_update_events_children_is_enabled">
                                    <label class="custom-control-label clickable"
                                        for="website_update_events_children_is_enabled">Track Visitors Events</label>
                                    <small class="form-text text-muted">Enable or disable tracking for mouse clicks,
                                        form submissions, resizes or scrolls.</small>
                                </div>
                            </div>

                            <div>
                                <div class="custom-control custom-switch my-3 ">
                                    <input type="checkbox" class="custom-control-input"
                                        name="sessions_replays_is_enabled"
                                        id="website_update_sessions_replays_is_enabled" />
                                    <label class="custom-control-label clickable"
                                        for="website_update_sessions_replays_is_enabled">Session Replays</label>
                                    <small class="form-text text-muted">Enable or disable visual session replays
                                        tracking. This is a more advanced tracking type compared to the normal
                                        option.</small>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-user-slash text-muted mr-1"></i> Excluded IPs</label>
                            <textarea class="form-control form-control-lg" name="excluded_ips"></textarea>
                            <small class="form-text text-muted">Exclude IPs from being tracked. Separated by
                                commas.</small>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="website_pixel_key" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header flex-column flex-md-row">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pixel-key-install-tab" data-toggle="pill"
                                href="#pixel-key-install" role="tab" aria-controls="pixel-key-install"
                                aria-selected="true"><i class="fa fa-fw fa-sm fa-code"></i> Install Pixel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pixel-key-verify-tab" data-toggle="pill" href="#pixel-key-verify"
                                role="tab" aria-controls="pixel-key-verify" aria-selected="false"><i
                                    class="fa fa-fw fa-sm fa-check"></i> Verify installation</a>
                        </li>
                    </ul>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pixel-key-install" role="tabpanel"
                            aria-labelledby="pixel-key-install-tab">
                            <p class="text-muted">Copy and paste the following JS Code Snippet before the end of the
                                <code>&lt;/head&gt;</code> of your website.
                            </p>

                            <pre id="pixel_key_html" class="pre-custom rounded"></pre>

                            <div class="mt-4">
                                <button type="button" class="btn btn-lg btn-block btn-primary"
                                    data-clipboard-target="#pixel_key_html" data-copied="Copied!">Copy Pixel</button>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pixel-key-verify" role="tabpanel"
                            aria-labelledby="pixel-key-verify-tab">
                            <p class="text-muted">Click on the Verify button. You should see an alert box saying that it
                                was installed, if not, then you must try again or double-check.</p>

                            <div class="mt-4">
                                <button type="button" data-verify=""
                                    class="btn btn-lg btn-block btn-outline-secondary">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="website_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-gray-700"></i>
                        Delete Website
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="website_delete" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="request_type" value="delete" />
                        <input type="hidden" name="website_id" value="" />

                        <div class="notification-container"></div>

                        <p class="text-muted">All data related to the website will be completely deleted. This action
                            cannot be undone.</p>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
