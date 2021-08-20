<x-app-layout>

    <main>

        <header class="header">
            <div class="container">

                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div>
                        <h1 class="h3 text-break">Realtime analytics for socialproofo.com/demo</h1>
                        <p class="text-muted">Data is based on the last 5 minutes of activity on the site.
                        </p>
                    </div>
                </div>

            </div>
        </header>


        <section class="container">


            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <div id="realtime_visitors_result" class="h1"></div>

                    <span>Active users on site</span>

                </div>

                <div class="col-12 col-md-8">
                    <div class="chart-container">
                        <canvas id="logs_chart"></canvas>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="h5 m-0">Countries</h2>
                                </div>
                                <span class="round-circle-sm bg-gray-200 text-primary-700 p-3">
                                    <i class="fa fa-fw fa-sm fa-globe"></i>
                                </span>
                            </div>

                            <div class="mt-4" id="realtime_countries_result"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="h5 m-0">Devices</h2>
                                </div>
                                <span class="round-circle-sm bg-gray-200 text-primary-700 p-3">
                                    <i class="fa fa-fw fa-sm fa-laptop"></i>
                                </span>
                            </div>

                            <div class="mt-4" id="realtime_device_types_result"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="h5 m-0">Pages</h2>
                                </div>
                                <span class="round-circle-sm bg-gray-200 text-primary-700 p-3">
                                    <i class="fa fa-fw fa-sm fa-copy"></i>
                                </span>
                            </div>

                            <div class="mt-4" id="realtime_paths_result"></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <input type="hidden" name="website_id" value="895" />

    </main>



    <div id="loading" style="display: none;">
        <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading..</span>
            </div>
        </div>
    </div>


</x-app-layout>
