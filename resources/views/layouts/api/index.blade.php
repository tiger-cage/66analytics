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
                                <a href="https://66analytics.com/demo/account-payments" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments </a>
                            </li>


                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-logs" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-scroll mr-1"></i> Logs </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://66analytics.com/demo/account-api" class="nav-link active">
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
                    <header class="">
                        <div class="container">

                            <h1 class="h3">API</h1>
                            <p class="text-muted">Your API key. If needed, you can get a new one by hitting the
                                button below. Looking for the <a
                                    href="https://66analytics.com/demo/api-documentation">API Documentation?</a>
                            </p>
                        </div>
                    </header>

                    <section class="container">
                        <form action="" method="post" role="form">
                            <input type="hidden" name="token" value="faaedf3a610fb2487eca4f698a532f32" />

                            <div>
                                <div class="form-group ">
                                    <label for="api_key">API Key</label>
                                    <input type="text" id="api_key" name="api_key"
                                        value="524F0QFGCOOOL2J7C925X0A6N78RVOPL" class="form-control"
                                        readonly="readonly" />
                                </div>
                            </div>


                            <button type="submit" name="submit" class="btn btn-block btn-outline-secondary">Regenerate
                                API Key</button>
                        </form>
                    </section>
                </div>
            </div>
        </main>

    </div>
</x-app-layout>
