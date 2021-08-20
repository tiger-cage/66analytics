@extends('admin.admin')
@section('content')


    <div class="mb-5 row justify-content-between">
        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-server mr-1"></i> Websites</small>

                    <div class="mt-3"><span class="h4">9</span></div>
                </div>

                <div class="bg-gray-200 px-2 d-flex flex-column justify-content-center">
                    <a href="https://66analytics.com/demo/admin/websites" class="stretched-link">
                        <i class="fa fa-fw fa-angle-right text-gray-500"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-user-shield mr-1"></i>
                        Teams</small>

                    <div class="mt-3"><span class="h4">1</span></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-fire mr-1"></i> Heatmaps</small>

                    <div class="mt-3"><span class="h4">3</span></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-bullseye mr-1"></i> Goals</small>

                    <div class="mt-3"><span class="h4">3</span></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-envelope mr-1"></i> Email
                        reports</small>

                    <div class="mt-3"><span class="h4">0</span></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-users mr-1"></i> Users</small>

                    <div class="mt-3"><span class="h4">11</span></div>
                </div>

                <div class="bg-gray-200 px-2 d-flex flex-column justify-content-center">
                    <a href="https://66analytics.com/demo/admin/users" class="stretched-link">
                        <i class="fa fa-fw fa-angle-right text-gray-500"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-funnel-dollar mr-1"></i>
                        Payments</small>

                    <div class="mt-3"><span class="h4">1</span></div>
                </div>

                <div class="bg-gray-200 px-2 d-flex flex-column justify-content-center">
                    <a href="https://66analytics.com/demo/admin/payments" class="stretched-link">
                        <i class="fa fa-fw fa-angle-right text-gray-500"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4 position-relative">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="card-body">
                    <small class="text-muted"><i class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i>
                        Earned</small>

                    <div class="mt-3"><span class="h4">5.49</span> <small>USD</small></div>
                </div>

                <div class="bg-gray-200 px-2 d-flex flex-column justify-content-center">
                    <a href="https://66analytics.com/demo/admin/payments" class="stretched-link">
                        <i class="fa fa-fw fa-angle-right text-gray-500"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <h1 class="h3 mb-4">Latest users</h1>

        <div class="table-responsive table-custom-container">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Status</th>
                        <th>Plan</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/11">hidden on
                                            demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-20 07:34:25">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-20 07:45:39">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bg.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bulgaria" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/10">hidden on
                                            demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-19 13:06:49">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-19 14:09:48">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 2">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bangladesh" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/9">hidden on
                                            demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 19:19:37">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 19:21:36">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bangladesh" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/8">hidden on
                                            demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 14:12:27">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 14:14:16">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/ma.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Morocco" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/7">hidden on
                                            demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                                Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 12:27:25">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 12:34:56">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/in.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="India" />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="mb-5">
        <h1 class="h3 mb-4">Latest payments</h1>

        <div class="table-responsive table-custom-container">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Payer</th>
                        <th>Type</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
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
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fa fa-fw fa-code fa-sm mr-1"></i> Version
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    7.1.0 </div>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fa fa-fw fa-book fa-sm mr-1"></i> Documentation
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    <a href="https://altumco.de/66analytics-docs" target="_blank">66Analytics
                        Documentation</a>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fa fa-fw fa-question-circle fa-sm mr-1"></i> Support
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    <a href="https://altumcode.com/contact" target="_blank">support@altumcode.com</a><br />
                    <span class="text-muted">Provide proof of purchase when requesting support, otherwise
                        your email can be discarded.</span>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fa fa-fw fa-cloud-upload-alt fa-sm mr-1"></i> Check for updates
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    <a href="https://altumco.de/66analytics-buy" target="_blank">Codecanyon</a>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fa fa-fw fa-project-diagram fa-sm mr-1"></i> More work of mine
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    <a href="https://codecanyon.net/user/altumcode/portfolio" target="_blank">Envato //
                        Codecanyon</a>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fa fa-fw fa-globe fa-sm mr-1"></i> Official website
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    <a href="https://altumcode.com/" target="_blank">AltumCode</a>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <span class="font-weight-bold">
                        <i class="fab fa-fw fa-twitter fa-sm mr-1"></i> Twitter Updates
                    </span>
                </div>
                <div class="col-12 col-md-6">
                    <a href="https://altumco.de/twitter" target="_blank">@altumcode</a>
                </div>
            </div>

        </div>
    </div>


@endsection
