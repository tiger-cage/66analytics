@extends('admin.admin')
@section('content')



    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-dollar-sign text-primary-900 mr-2"></i> Payments list
        </h1>

        <div class="col-auto d-flex">
            <div class="">
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle-simple" data-toggle="dropdown"
                        title="Export">
                        <i class="fa fa-fw fa-sm fa-download"></i>
                    </button>

                    <div class="dropdown-menu  dropdown-menu-right">
                        <a href="https://66analytics.com/demo/admin/payments?&export=csv" target="_blank"
                            class="dropdown-item">
                            <i class="fa fa-fw fa-sm fa-file-csv mr-1"></i> Export to CSV </a>
                        <a href="https://66analytics.com/demo/admin/payments?&export=json" target="_blank"
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
                                    <option value="name">Payer name</option>
                                    <option value="email">Payer email</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="status" class="small">Status</label>
                                <select name="status" id="status" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="1">Paid</option>
                                    <option value="0">Pending</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="plan_id" class="small">Plan</label>
                                <select name="plan_id" id="plan_id" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="1">Gold</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="type" class="small">Type of payment</label>
                                <select name="type" id="type" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="recurring">Recurring Payment</option>
                                    <option value="one_time">One Time Payment</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="processor" class="small">Payment method</label>
                                <select name="processor" id="processor" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="stripe">Stripe</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="offline_payment">Offline payment</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="frequency" class="small">Payment frequency</label>
                                <select name="frequency" id="frequency" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="monthly">Monthly Payments</option>
                                    <option value="annual">Annual Payments</option>
                                    <option value="lifetime">Lifetime deal</option>
                                </select>
                            </div>


                            <div class="form-group px-4">
                                <label for="order_by" class="small">Order by</label>
                                <select name="order_by" id="order_by" class="form-control form-control-sm">
                                    <option value="date">Created datetime</option>
                                    <option value="total_amount">Total amount</option>
                                    <option value="name">Payer name</option>
                                    <option value="email">Payer email</option>
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
        </div>
    </div>


    <div class="table-responsive table-custom-container">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Payer</th>
                    <th>Type</th>
                    <th>Total Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex flex-column">
                            <div>
                                <a href="https://66analytics.com/demo/admin/user-view/1">hidden on demo</a>
                            </div>

                            <span class="text-muted">hidden@demo.com</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span>hidden on demo</span>
                            <span class="text-muted">hidden@demo.com</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span>One Time Payment</span>
                            <div>
                                <span class="text-muted">Monthly Payments</span> - <span class="text-muted">Offline
                                    payment</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="">5.49 USD</span>
                            <div>
                                <span class="text-muted" data-toggle="tooltip" title="2020-09-09 17:16:54">
                                    9 September, 2020 </span>
                            </div>
                        </div>
                    </td>
                    <td>

                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v "></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="https://66analytics.com/demo/uploads/offline_payment_proofs/logo.png"
                                    target="_blank" class="dropdown-item"><i class="fa fa-fw fa-sm fa-download mr-1"></i>
                                    View proof</a>


                                <a href="https://66analytics.com/demo/invoice/1" target="_blank" class="dropdown-item"><i
                                        class="fa fa-fw fa-sm fa-file-invoice mr-1"></i> Invoice</a>

                                <a href="#" data-toggle="modal" data-target="#payment_delete_modal" data-payment-id="1"
                                    class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                            </div>
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
                    Showing 1-1 out of 1 results. </p>
            </div>

            <div class="">
                <ul class="pagination">


                </ul>
            </div>
        </div>


    </div>





    <div class="modal fade" id="payment_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                            Delete payment
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">This action cannot be undone.</p>

                    <div class="mt-4">
                        <a href="" id="payment_delete_modal_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="payment_approve_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-check text-primary-900 mr-2"></i>
                            Approve payment
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">If you approve the payment, the plan for the user will start.</p>

                    <div class="mt-4">
                        <a href="" id="payment_approve_modal_url" class="btn btn-lg btn-block btn-primary">Submit</a>
                    </div>
                </div>

            </div>
        </div>
    </div>





@endsection
