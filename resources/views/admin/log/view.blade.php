@extends('admin.admin')
@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-scroll text-primary-900 mr-2"></i> Users logs</h1>

        <div class="col-auto d-flex">
            <div class="ml-3">
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle-simple" data-toggle="dropdown"
                        title="Export">
                        <i class="fa fa-fw fa-sm fa-download"></i>
                    </button>

                    <div class="dropdown-menu  dropdown-menu-right">
                        <a href="https://66analytics.com/demo/admin/users-logs?&export=csv" target="_blank"
                            class="dropdown-item">
                            <i class="fa fa-fw fa-sm fa-file-csv mr-1"></i> Export to CSV </a>
                        <a href="https://66analytics.com/demo/admin/users-logs?&export=json" target="_blank"
                            class="dropdown-item">
                            <i class="fa fa-fw fa-sm fa-file-code mr-1"></i> Export to JSON </a>
                    </div>
                </div>
            </div>

            <div class="ml-3">
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
                                <input type="search" name="search" id="search" class="form-control form-control-sm"
                                    value="" />
                            </div>

                            <div class="form-group px-4">
                                <label for="search_by" class="small">Search by</label>
                                <select name="search_by" id="search_by" class="form-control form-control-sm">
                                    <option value="type">Type</option>
                                    <option value="ip">IP</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="order_by" class="small">Order by</label>
                                <select name="order_by" id="order_by" class="form-control form-control-sm">
                                    <option value="datetime">Created datetime</option>
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
                            <a href="#" class="dropdown-item" data-toggle="modal"
                                data-target="#bulk_delete_modal">Delete</a>
                        </div>
                    </div>

                    <button id="bulk_disable" type="button" class="btn btn-outline-secondary" data-toggle="tooltip"
                        title="Close"><i class="fa fa-fw fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>


    <form id="table" action="https://66analytics.com/demo/admin/users-logs/bulk" method="post" role="form">
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
                        <th>Type</th>
                        <th>IP</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1621" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1621" />
                                <label class="custom-control-label" for="selected_id_1621"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-22 17:25:30">
                                22 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1621"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1622" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1622" />
                                <label class="custom-control-label" for="selected_id_1622"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-22 21:36:42">
                                22 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1622"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1623" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1623" />
                                <label class="custom-control-label" for="selected_id_1623"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 04:44:34">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1623"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1624" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1624" />
                                <label class="custom-control-label" for="selected_id_1624"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 06:54:53">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1624"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1625" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1625" />
                                <label class="custom-control-label" for="selected_id_1625"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 07:21:31">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1625"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1626" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1626" />
                                <label class="custom-control-label" for="selected_id_1626"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 07:55:31">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1626"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1627" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1627" />
                                <label class="custom-control-label" for="selected_id_1627"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 08:52:11">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1627"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1630" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1630" />
                                <label class="custom-control-label" for="selected_id_1630"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 09:40:55">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1630"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1631" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1631" />
                                <label class="custom-control-label" for="selected_id_1631"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 10:17:21">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1631"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1632" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1632" />
                                <label class="custom-control-label" for="selected_id_1632"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 10:29:46">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1632"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1633" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1633" />
                                <label class="custom-control-label" for="selected_id_1633"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 10:38:34">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1633"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1634" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1634" />
                                <label class="custom-control-label" for="selected_id_1634"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 12:14:26">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1634"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1635" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1635" />
                                <label class="custom-control-label" for="selected_id_1635"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 12:31:26">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1635"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1636" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1636" />
                                <label class="custom-control-label" for="selected_id_1636"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 13:12:59">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1636"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1637" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1637" />
                                <label class="custom-control-label" for="selected_id_1637"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 13:23:57">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1637"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1638" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1638" />
                                <label class="custom-control-label" for="selected_id_1638"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 14:32:27">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1638"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1639" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1639" />
                                <label class="custom-control-label" for="selected_id_1639"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 14:41:49">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1639"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1642" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1642" />
                                <label class="custom-control-label" for="selected_id_1642"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 18:24:03">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1642"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1643" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1643" />
                                <label class="custom-control-label" for="selected_id_1643"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-23 23:15:17">
                                23 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1643"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1644" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1644" />
                                <label class="custom-control-label" for="selected_id_1644"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-24 00:15:28">
                                24 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1644"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1645" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1645" />
                                <label class="custom-control-label" for="selected_id_1645"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-24 00:50:40">
                                24 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1645"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1646" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1646" />
                                <label class="custom-control-label" for="selected_id_1646"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-24 00:58:50">
                                24 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1646"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1647" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1647" />
                                <label class="custom-control-label" for="selected_id_1647"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-24 02:10:53">
                                24 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1647"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1648" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1648" />
                                <label class="custom-control-label" for="selected_id_1648"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-24 02:46:04">
                                24 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1648"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_id_1649" type="checkbox" class="custom-control-input" name="selected[]"
                                    value="1649" />
                                <label class="custom-control-label" for="selected_id_1649"></label>
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
                            <span>login.success</span>
                        </td>
                        <td>
                            <span>hidden on demo</span>
                        </td>
                        <td>


                        </td>
                        <td>
                            <span class="text-muted" data-toggle="tooltip" title="2021-05-24 04:22:55">
                                24 May, 2021 </span>
                        </td>
                        <td>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#user_log_delete_modal" data-id="1649"
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
                    Showing 1-25 out of 1362 results. </p>
            </div>

            <div class="">
                <ul class="pagination">

                    <li class="page-item active">
                        <a href="https://66analytics.com/demo/admin/users-logs?&page=1" class="page-link">1</a>
                    </li>
                    <li class="page-item ">
                        <a href="https://66analytics.com/demo/admin/users-logs?&page=2" class="page-link">2</a>
                    </li>
                    <li class="page-item ">
                        <a href="https://66analytics.com/demo/admin/users-logs?&page=3" class="page-link">3</a>
                    </li>
                    <li class="page-item ">
                        <a href="https://66analytics.com/demo/admin/users-logs?&page=4" class="page-link">4</a>
                    </li>
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                    <li class="page-item ">
                        <a href="https://66analytics.com/demo/admin/users-logs?&page=55" class="page-link">55</a>
                    </li>

                    <li class="page-item"><a href="https://66analytics.com/demo/admin/users-logs?&page=2" class="page-link"
                            aria-label="Next">›</a></li>
                </ul>
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

    <div class="modal fade" id="user_log_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title"><i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i> Delete
                            log</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">This action cannot be undone.</p>

                    <div class="mt-4">
                        <a href="" id="user_log_delete_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
