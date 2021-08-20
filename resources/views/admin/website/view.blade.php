@extends('admin.admin')
@section('content')




    <div class="d-flex justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-users text-primary-900 mr-2"></i> Websites management
        </h1>
    </div>

    <div class="row justify-content-between mb-4">
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card d-flex flex-row h-100">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-eye mr-1"></i> Total
                        pageviews</small>

                    <div class="mt-3"><span class="h4">625,394</span></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card d-flex flex-row h-100">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-bell mr-1"></i> Total tracked
                        events</small>

                    <div class="mt-3"><span class="h4">3,031,118</span></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card d-flex flex-row h-100">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-video mr-1"></i> Total sessions
                        replays</small>

                    <div class="mt-3"><span class="h4">0</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <div class="dropdown">
            <button type="button" class="btn btn-outline-secondary filters-button dropdown-toggle-simple"
                data-toggle="dropdown"><i class="fa fa-fw fa-sm fa-filter"></i></button>

            <div class="dropdown-menu dropdown-menu-right filters-dropdown">
                <div class="dropdown-header d-flex justify-content-between">
                    <span class="h6 m-0">Filters</span>

                </div>

                <div class="dropdown-divider"></div>

                <form action="" method="get" role="form">
                    <div class="form-group px-4">
                        <label for="search" class="small">Search</label>
                        <input type="search" name="search" id="search" class="form-control form-control-sm" value="" />
                    </div>

                    <div class="form-group px-4">
                        <label for="search_by" class="small">Search by</label>
                        <select name="search_by" id="search_by" class="form-control form-control-sm">
                            <option value="name">Name</option>
                            <option value="host">Domain</option>
                        </select>
                    </div>

                    <div class="form-group px-4">
                        <label for="is_enabled" class="small">Status</label>
                        <select name="is_enabled" id="is_enabled" class="form-control form-control-sm">
                            <option value="">All</option>
                            <option value="1">Active</option>
                            <option value="0">Disabled</option>
                        </select>
                    </div>

                    <div class="form-group px-4">
                        <label for="is_enabled" class="small">Tracking type</label>
                        <select name="tracking_type" id="tracking_type" class="form-control form-control-sm">
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
                        <select name="order_type" id="order_type" class="form-control form-control-sm">
                            <option value="ASC">Ascending</option>
                            <option value="DESC">Descending</option>
                        </select>
                    </div>

                    <div class="form-group px-4">
                        <label for="results_per_page" class="small">Results per page</label>
                        <select name="results_per_page" id="results_per_page" class="form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25" selected="selected">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                        </select>
                    </div>

                    <div class="form-group px-4 mt-4">
                        <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="ml-3">
            <button id="bulk_enable" type="button" class="btn btn-outline-secondary" data-toggle="tooltip"
                title="Bulk actions"><i class="fa fa-fw fa-sm fa-list"></i></button>

            <div id="bulk_group" class="btn-group d-none" role="group">
                <div class="btn-group" role="group">
                    <button id="bulk_actions" type="button" class="btn btn-outline-primary dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bulk actions <span id="bulk_counter" class="d-none"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="bulk_actions">
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#bulk_delete_modal">Delete</a>
                    </div>
                </div>

                <button id="bulk_disable" type="button" class="btn btn-outline-secondary" data-toggle="tooltip"
                    title="Close"><i class="fa fa-fw fa-times"></i></button>
            </div>
        </div>
    </div>


    <form id="table" action="https://66analytics.com/demo/admin/websites/bulk" method="post" role="form">
        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345" />
        <input type="hidden" name="type" value="" data-bulk-type />

        <div class="table-responsive table-custom-container">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="bulk_select_all" type="checkbox" class="custom-control-input" />
                                <label class="custom-control-label" for="bulk_select_all"></label>
                            </div>
                        </th>
                        <th>User</th>
                        <th>Website</th>
                        <th>Usage this month</th>
                        <th>Status</th>
                        <th>Created on</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_895" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="895" />
                                <label class="custom-control-label" for="selected_website_id_895"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/1">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo/demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>9K</strong>
                                </div>

                                <div class="text-muted">
                                    Visitors Events <strong>69.5K</strong>
                                </div>

                                <div class="text-muted">
                                    Replays <strong>1K</strong>
                                </div>
                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Advanced mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-07-30 11:50:56">
                                30 July, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="895"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_896" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="896" />
                                <label class="custom-control-label" for="selected_website_id_896"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/1">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo/demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>5.5K</strong>
                                </div>

                                <div class="text-muted">
                                    Visitors Events <strong>1.3K</strong>
                                </div>

                                <div class="text-muted">
                                    Replays <strong>0</strong>
                                </div>
                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Advanced mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-07-30 11:51:15">
                                30 July, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="896"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_897" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="897" />
                                <label class="custom-control-label" for="selected_website_id_897"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/1">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>1.7K</strong>
                                </div>

                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Lightweight mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-07-30 11:51:37">
                                30 July, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="897"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_898" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="898" />
                                <label class="custom-control-label" for="selected_website_id_898"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/4">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>0</strong>
                                </div>

                                <div class="text-muted">
                                    Visitors Events <strong>0</strong>
                                </div>

                                <div class="text-muted">
                                    Replays <strong>0</strong>
                                </div>
                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Advanced mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-08-18 11:18:19">
                                18 August, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="898"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_899" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="899" />
                                <label class="custom-control-label" for="selected_website_id_899"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/5">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>0</strong>
                                </div>

                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Lightweight mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-08-18 11:54:02">
                                18 August, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="899"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_900" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="900" />
                                <label class="custom-control-label" for="selected_website_id_900"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/7">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>0</strong>
                                </div>

                                <div class="text-muted">
                                    Visitors Events <strong>0</strong>
                                </div>

                                <div class="text-muted">
                                    Replays <strong>0</strong>
                                </div>
                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Advanced mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-08-18 12:27:57">
                                18 August, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="900"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_901" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="901" />
                                <label class="custom-control-label" for="selected_website_id_901"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/8">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>0</strong>
                                </div>

                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Lightweight mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-08-18 14:12:52">
                                18 August, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="901"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_902" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="902" />
                                <label class="custom-control-label" for="selected_website_id_902"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/9">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>0</strong>
                                </div>

                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Lightweight mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-08-18 19:20:34">
                                18 August, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="902"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_website_id_903" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="903" />
                                <label class="custom-control-label" for="selected_website_id_903"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/user-view/11">hidden on
                                        demo</a>
                                </div>

                                <span class="text-muted">hidden@demo.com</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>hidden on demo</span>
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/hidden on demo.ico"
                                        class="img-fluid icon-favicon mr-1" />

                                    hidden on demo
                                </div>
                            </div>
                        </td>
                        <td>
                            <small>
                                <div class="text-muted">
                                    Pageviews <strong>1.1K</strong>
                                </div>

                            </small>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div>
                                    <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                        Active</span>
                                </div>

                                <div class="text-muted">
                                    Lightweight mode </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-08-20 07:34:57">
                                20 August, 2021 </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#website_delete" data-website-id="903"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <div class="mt-3">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="">
                <p class="text-muted">
                    Showing 1-9 out of 9 results. </p>
            </div>

            <div class="">
                <ul class="pagination">


                </ul>
            </div>
        </div>


    </div>





    <div class="modal fade" id="website_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                        Delete Website
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="text-muted">By deleting the website, everything that is sub linked to the website will be
                        deleted. This action cannot be undone.</p>

                    <div class="mt-4">
                        <a href="" id="website_delete_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="bulk_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                            Delete in bulk
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">You've selected multiple entries to be deleted, this may take a while & it
                        action cannot be undone.</p>

                    <div class="mt-4">
                        <button type="submit" form="table" class="btn btn-lg btn-block btn-danger"
                            onclick="document.querySelector('#table input[data-bulk-type]').value = 'delete'">
                            Delete </button>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
