@extends('admin.admin')
@section('content')



    <div class="d-flex flex-column flex-lg-row justify-content-between mb-4">
        <div>
            <div class="d-flex justify-content-between">
                <h1 class="h3"><i class="fa fa-fw fa-xs fa-chart-line text-primary-900 mr-2"></i> Statistics
                </h1>
            </div>
            <p class="text-muted">See how your website evolves throughout time.</p>
        </div>

        <div class="col-auto p-0">
            <button id="daterangepicker" type="button" class="btn btn-sm btn-outline-secondary" data-max-date="2021-08-20">
                <i class="fa fa-fw fa-calendar mr-1"></i>
                <span>
                    21 July, 2021 - 20 August, 2021 </span>
                <i class="fa fa-fw fa-caret-down ml-1"></i>
            </button>
        </div>
    </div>


    <div class="row">
        <div class="mb-5 mb-xl-0 col-12 col-xl-3">
            <div class="nav flex-column nav-pills">
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/growth?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-seedling mr-1"></i> Growth</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/payments?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments</a>
                <a class="nav-link active"
                    href="https://66analytics.com/demo/admin/statistics/websites?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-server mr-1"></i> Websites</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/lightweight_events?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-seedling mr-1"></i> Lightweight pageviews</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/sessions_events?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-seedling mr-1"></i> Pageviews</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/events_children?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-bell mr-1"></i> Visitors events</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/sessions_replays?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-video mr-1"></i> Sessions replays</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/websites_heatmaps?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-fire mr-1"></i> Heatmaps</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/websites_goals?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-bullseye mr-1"></i> Goals</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/goals_conversions?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-bullseye mr-1"></i> Goals conversions</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/teams?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-user-shield mr-1"></i> Teams</a>
                <a class="nav-link "
                    href="https://66analytics.com/demo/admin/statistics/email_reports?start_date=2021-07-21&end_date=2021-08-20"><i
                        class="fa fa-fw fa-sm fa-envelope mr-1"></i> Email reports</a>
            </div>
        </div>

        <div class="col-12 col-xl-9">




            <div class="card mb-5">
                <div class="card-body">
                    <h2 class="h4"><i class="fa fa-fw fa-server fa-xs text-muted"></i> Websites</h2>
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="mb-2 mb-xl-0 mr-4">
                            <span class="font-weight-bold">9</span> New websites
                        </div>
                    </div>

                    <div class="chart-container">
                        <canvas id="websites"></canvas>
                    </div>
                </div>
            </div>


        </div>
    </div>







@endsection
