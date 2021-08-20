<x-app-layout>
    <div class="p-3 p-md-5">
        <main>
            <div class="row">
                <div class="col-12 col-xl-3 mb-3 mb-xl-0">
                    <div class="container">
                        <ul class="nav nav-pills flex-column flex-md-row flex-xl-column">
                            <li class="nav-item">
                                <a href="account" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-wrench mr-1"></i> Account </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-plan" class="nav-link active">
                                    <i class="fa fa-fw fa-sm fa-box-open mr-1"></i> Plan </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-payments" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-logs" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-scroll mr-1"></i> Logs </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-api" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-code mr-1"></i> API </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-delete" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete account </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <header class="header">
                        <div class="container">
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <div>
                                    <h1 class="h3">Account Plan</h1>
                                </div>
                                <div class="col-auto p-0">
                                    <a href="plan/upgrade" class="btn btn-primary rounded-pill"><i
                                            class="fa fa-fw fa-arrow-up"></i> Upgrade Plan</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <section class="container">
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <h2 class="h4">Free</h2>
                            </div>
                            <div class="col">
                                <ul class="list-style-none m-0">
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div class="">
                                            <strong>1</strong> Websites
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div class="">
                                            <strong>15,000</strong> Pageviews <small class="text-muted">per
                                                month, per website</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div class="">
                                            <strong>10,000</strong> Visitors Events Tracking <small
                                                class="text-muted">per month, per website</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div>
                                            <strong>90</strong> Days Data Retention for Visitors Events
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div class="">
                                            <strong>25</strong> Sessions Replays <small class="text-muted">per
                                                month, per website</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div>
                                            <strong>30</strong> Days Data Retention for Sessions Replays
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div class="">
                                            <strong>1</strong> Websites Heatmaps
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                                        <div class="">
                                            <strong>10</strong> Tracked Goals
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                                        <div class="text-muted"> Email reports </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                                        <div class="text-muted"> Teams </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                                        <div class="text-muted"> No Ads </div>
                                    </li>
                                    <li class="d-flex align-items-baseline mb-2">
                                        <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                                        <div class="text-muted"> API access </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-8">
                            <div class="col-12 col-xl-4">
                                <h2 class="h4">Redeem</h2>
                                <p class="text-muted">Redeeming a code will cancel your current plan and
                                    automatically switch you to the new plan associated with the code.</p>
                            </div>
                            <div class="col">
                                <form id="code" action="account-plan/redeem_code" method="post" role="form">
                                    <input type="hidden" name="token" value="14b7f0f981a356714952fe0a216ae006" />
                                    <div class="form-group">
                                        <label><i class="fa fa-fw fa-sm fa-tags text-muted mr-1"></i> Redemption
                                            code</label>
                                        <input type="text" name="code" class="form-control form-control-lg" />
                                        <div class="mt-2"><span id="code_help" class="text-muted"></span></div>
                                    </div>
                                    <button id="code_submit" type="submit" name="submit"
                                        class="btn btn-primary d-none">Activate</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
