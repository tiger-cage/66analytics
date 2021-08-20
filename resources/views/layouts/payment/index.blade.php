<x-app-layout>

    <div class="p-3 p-md-5">
        <main>

            <div class="row">

                <div class="col-12 col-xl-3 mb-3 mb-xl-0">
                    <div class="container">
                        <ul class="nav nav-pills flex-column flex-md-row flex-xl-column">
                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-wrench mr-1"></i> Account </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-plan" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-box-open mr-1"></i> Plan </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-payments" class="nav-link active">
                                    <i class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments </a>
                            </li>


                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-logs" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-scroll mr-1"></i> Logs </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-api" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-code mr-1"></i> API </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-delete" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete account </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col">

                    <header class="header">
                        <div class="container">

                            <div class="d-flex justify-content-between">
                                <div>
                                    <h2 class="h4">Account Payments</h2>
                                    <p class="text-muted">All the payments made on your account.</p>
                                </div>

                                <div class="col-auto p-0 d-flex">
                                    <div class="ml-3">
                                        <div class="dropdown">
                                            <button type="button"
                                                class="btn rounded-pill btn-outline-secondary dropdown-toggle-simple"
                                                data-toggle="dropdown" title="Export">
                                                <i class="fa fa-fw fa-sm fa-download"></i>
                                            </button>

                                            <div class="dropdown-menu  dropdown-menu-right">
                                                <a href="https://66analytics.com/demo/account-payments?&export=csv"
                                                    target="_blank" class="dropdown-item">
                                                    <i class="fa fa-fw fa-sm fa-file-csv mr-1"></i> Export
                                                    to CSV </a>
                                                <a href="https://66analytics.com/demo/account-payments?&export=json"
                                                    target="_blank" class="dropdown-item">
                                                    <i class="fa fa-fw fa-sm fa-file-code mr-1"></i> Export
                                                    to JSON </a>
                                            </div>
                                        </div>
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
                                                        <label for="processor" class="small">Processor</label>
                                                        <select name="processor" id="processor"
                                                            class="form-control form-control-sm">
                                                            <option value="">All</option>
                                                            <option value="paypal">PayPal</option>
                                                            <option value="stripe">Stripe</option>
                                                            <option value="offline_payment">Offline payment
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group px-4">
                                                        <label for="type" class="small">Type</label>
                                                        <select name="type" id="type"
                                                            class="form-control form-control-sm">
                                                            <option value="">All</option>
                                                            <option value="one_time">One time</option>
                                                            <option value="recurring">Recurring</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group px-4">
                                                        <label for="frequency" class="small">Frequency</label>
                                                        <select name="frequency" id="frequency"
                                                            class="form-control form-control-sm">
                                                            <option value="">All</option>
                                                            <option value="monthly">Monthly</option>
                                                            <option value="annual">Annual</option>
                                                            <option value="lifetime">Lifetime</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group px-4">
                                                        <label for="order_by" class="small">Order by</label>
                                                        <select name="order_by" id="order_by"
                                                            class="form-control form-control-sm">
                                                            <option value="date">Created datetime</option>
                                                            <option value="total_amount">Total amount
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group px-4">
                                                        <label for="order_type" class="small">Order
                                                            type</label>
                                                        <select name="order_type" id="order_type"
                                                            class="form-control form-control-sm">
                                                            <option value="ASC">Ascending</option>
                                                            <option value="DESC">Descending</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group px-4">
                                                        <label for="results_per_page" class="small">Results
                                                            per page</label>
                                                        <select name="results_per_page" id="results_per_page"
                                                            class="form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25" selected="selected">25
                                                            </option>
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
                                        <th>Customer</th>
                                        <th>Plan</th>
                                        <th>Type</th>
                                        <th>Total Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span>admin</span>
                                                <span class="text-muted">AltumCode</span>
                                            </div>
                                        </td>

                                        <td>Gold</td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <span>One Time Payment</span>
                                                <span class="text-muted">Offline payment</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <span><span class="text-success">5.49</span> USD</span>
                                                <span class="text-muted"><span data-toggle="tooltip"
                                                        title="2020-09-09 17:16:54">9 September,
                                                        2020</span></span>
                                            </div>
                                        </td>


                                        <td>
                                            <a href="https://66analytics.com/demo/invoice/1"
                                                class="btn btn-sm btn-outline-secondary">
                                                <i class="fa fa-fw fa-sm fa-file-invoice"></i> Invoice </a>
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

                    </section>

                </div>
            </div>
        </main>

    </div>




</x-app-layout>
