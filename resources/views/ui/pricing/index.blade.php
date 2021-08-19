@extends('ui.master')
@section('content')
    <main class="animate__animated animate__fadeIn">
        <div class="index-container">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11 col-md-10 col-lg-7">
                        <h1 class="index-header text-center mb-4">All-in-one web analytics.</h1>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <p class="index-subheader text-center mb-4">Easy and friendly analytics. Track your users
                            journey, replay sessions, collect heatmaps & more.</p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ url('dashboard') }}" class="btn btn-primary btn-lg">Get started</a>
                </div>
            </div>

            <div class="position-relative">
                <svg class="index-background" height="500px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <defs>
                        <linearGradient spreadMethod="pad" id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:rgb(17, 85, 212);stop-opacity:1;" />
                            <stop offset="100" style="stop-color:rgb(255, 255, 255);stop-opacity:1;" />
                        </linearGradient>
                    </defs>
                    <path fill="#256DF4" opacity="0.3"
                        d="M0,32L20,69.3C40,107,80,181,120,181.3C160,181,200,107,240,85.3C280,64,320,96,360,133.3C400,171,440,213,480,240C520,267,560,277,600,245.3C640,213,680,139,720,106.7C760,75,800,85,840,90.7C880,96,920,96,960,122.7C1000,149,1040,203,1080,192C1120,181,1160,107,1200,96C1240,85,1280,139,1320,176C1360,213,1400,235,1420,245.3L1440,256L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
                    </path>
                    <path fill="#256DF4" opacity="0.4"
                        d="M0,224L12,192C24,160,48,96,72,90.7C96,85,120,139,144,186.7C168,235,192,277,216,277.3C240,277,264,235,288,197.3C312,160,336,128,360,138.7C384,149,408,203,432,218.7C456,235,480,213,504,176C528,139,552,85,576,69.3C600,53,624,75,648,101.3C672,128,696,160,720,154.7C744,149,768,107,792,80C816,53,840,43,864,69.3C888,96,912,160,936,186.7C960,213,984,203,1008,186.7C1032,171,1056,149,1080,154.7C1104,160,1128,192,1152,197.3C1176,203,1200,181,1224,165.3C1248,149,1272,139,1296,138.7C1320,139,1344,149,1368,154.7C1392,160,1416,160,1428,160L1440,160L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z">
                    </path>

                    <path fill="url(#gradient)"
                        d="M0,96L20,112C40,128,80,160,120,149.3C160,139,200,85,240,101.3C280,117,320,203,360,197.3C400,192,440,96,480,69.3C520,43,560,85,600,90.7C640,96,680,64,720,64C760,64,800,96,840,112C880,128,920,128,960,117.3C1000,107,1040,85,1080,90.7C1120,96,1160,128,1200,160C1240,192,1280,224,1320,202.7C1360,181,1400,107,1420,69.3L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
                    </path>
                </svg>
            </div>


            <div class="container">
                <div class="row justify-content-center mt-8">
                    <div class="col-11 col-md-10">
                        <img src="https://66analytics.com/demo/themes/altum/assets/images/index/hero.png"
                            class="img-fluid shadow-lg rounded" />
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-10">

            <div class="row justify-content-between">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center order-1 order-md-0">
                    <div class="text-uppercase font-weight-bold text-primary mb-3">Analytics</div>

                    <div>
                        <h2 class="mb-4">Good & good looking analytics</h2>

                        <p class="text-muted">Have you ever felt like you have too much information in front of you and
                            don't know what it means? We are providing you a clean and simple interface with easy to
                            understand analytics.</p>
                    </div>
                </div>

                <div class="col-8 col-md-5 text-center mb-5 mb-md-0 order-0 order-md-1">
                    <img src="https://66analytics.com/demo/themes/altum/assets/images/index/analytics.svg"
                        class="img-fluid" />
                </div>
            </div>

            <div class="row justify-content-between mt-9">
                <div class="col-8 col-md-5 text-center mb-5 mb-md-0">
                    <img src="https://66analytics.com/demo/themes/altum/assets/images/index/visitor_behaviour.svg"
                        class="img-fluid" />
                </div>

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <div class="text-uppercase font-weight-bold text-primary mb-3">Visitor behaviour</div>

                    <div>
                        <h2 class="mb-4">Understand your users</h2>

                        <p class="text-muted">Understanding your users is key to learning how to improve your website.
                            Check each visitors path and what they are doing on your site without intruding they're
                            privacy.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between mt-9">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center order-1 order-md-0">
                    <div class="text-uppercase font-weight-bold text-primary mb-3">Realtime data</div>

                    <div>
                        <h2 class="mb-4">Realtime visitor analytics</h2>

                        <p class="text-muted">Curious to see realtime data? You can check and how many users are online,
                            which devices are the most popular and what pages are most accessed.</p>
                    </div>
                </div>

                <div class="col-8 col-md-5 text-center mb-5 mb-md-0 order-0 order-md-1">
                    <img src="https://66analytics.com/demo/themes/altum/assets/images/index/realtime_data.svg"
                        class="img-fluid" />
                </div>
            </div>

            <div class="row justify-content-between mt-9">
                <div class="col-8 col-md-5 text-center mb-5 mb-md-0">
                    <img src="https://66analytics.com/demo/themes/altum/assets/images/index/privacy.svg"
                        class="img-fluid" />
                </div>

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <div class="text-uppercase font-weight-bold text-primary mb-3">Privacy</div>

                    <div>
                        <h2 class="mb-4">We never sell your data, you own it!</h2>

                        <p class="text-muted">Why would you get a service like this compared when Google analytics is
                            available? Because your data matters, we never sell your data and you are in full control of
                            it. You can delete it at any time!</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between mt-9">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center order-1 order-md-0">
                    <div class="text-uppercase font-weight-bold text-primary mb-3">Session recording</div>

                    <div>
                        <h2 class="mb-4">Record & replay visitors sessions</h2>

                        <p class="text-muted">This is simply the best way to see a visitors journey throughout your
                            website. What they click, where they're going and what they like and do not understand. You
                            can easily replay their sessions and see exactly what they did.</p>
                    </div>
                </div>

                <div class="col-8 col-md-5 text-center mb-5 mb-md-0 order-0 order-md-1">
                    <img src="https://66analytics.com/demo/themes/altum/assets/images/index/session_recording.svg"
                        class="img-fluid" />
                </div>
            </div>

            <div class="row justify-content-between mt-9">
                <div class="col-8 col-md-5 text-center mb-5 mb-md-0">
                    <img src="https://66analytics.com/demo/themes/altum/assets/images/index/heatmaps.svg"
                        class="img-fluid" />
                </div>

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <div class="text-uppercase font-weight-bold text-primary mb-3">Heatmaps</div>

                    <div>
                        <h2 class="mb-4">Heatmaps tracking</h2>

                        <p class="text-muted">Heatmaps is a very easy to use feature to test out pages on your website
                            and understand which parts are the most used by a collection of users on your website.</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="index-register-container bg-gray-200 mt-9">
            <div class="container">
                <div class="text-center">
                    <h2>What other people are saying</h2>
                    <p class="text-muted mt-3">Testimonials from people that have used our product.</p>
                </div>

                <div class="row mt-8">
                    <div class="col-12 col-md-4 m mb-md-0">

                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80"
                                    class="img-fluid index-testimonial-avatar" />

                                <p class="mt-5">
                                    <span class="text-primary-800 font-weight-bold h4">“</span>
                                    <span class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Praesent finibus vestibulum porta. Sed id eros quam. Nunc at
                                        nisi vel arcu placerat gravida. Proin lacinia ipsum porttitor, sollicitudin est
                                        in, ornare ex. Vivamus eu ex non orci condimentum placerat ac ac nisi. Nam velit
                                        libero, hendrerit vitae auctor eget, congue ut ante.</span>
                                    <span class="text-primary-800 font-weight-bold h4">”</span>
                                </p>
                                <div class="blockquote-footer mt-4">
                                    <span class="font-weight-bold">George</span>, <span class="text-muted">Founder of X
                                        Machine</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 m mb-md-0">

                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                    class="img-fluid index-testimonial-avatar" />

                                <p class="mt-5">
                                    <span class="text-primary-800 font-weight-bold h4">“</span>
                                    <span class="font-italic text-muted">Praesent finibus vestibulum porta. Sed id eros
                                        quam. Proin lacinia ipsum porttitor, sollicitudin est in, ornare ex. Vivamus eu
                                        ex non orci condimentum placerat ac ac nisi. Nam velit libero, hendrerit vitae
                                        auctor eget, congue ut ante.</span>
                                    <span class="text-primary-800 font-weight-bold h4">”</span>
                                </p>
                                <div class="blockquote-footer mt-4">
                                    <span class="font-weight-bold">Calvin</span>, <span class="text-muted">Owner X
                                        Website</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 m mb-md-0">

                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80"
                                    class="img-fluid index-testimonial-avatar" />

                                <p class="mt-5">
                                    <span class="text-primary-800 font-weight-bold h4">“</span>
                                    <span class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.Ornare ex. Vivamus eu ex non orci condimentum placerat ac ac
                                        nisi. Nam velit libero, hendrerit vitae auctor eget, congue ut ante.</span>
                                    <span class="text-primary-800 font-weight-bold h4">”</span>
                                </p>
                                <div class="blockquote-footer mt-4">
                                    <span class="font-weight-bold">Andrea</span>, <span class="text-muted">Writter at X
                                        Magazine</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pricing" class="container mt-10">
            <div class="mb-5 text-center">
                <h2>Choose the perfect plan for you.</h2>

                <p class="text-muted mt-3">Pick and get your plan based on your needs.</p>
            </div>





            <div class="mb-4 d-flex justify-content-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">

                    <label class="btn btn-outline-secondary active" data-payment-frequency="monthly">
                        <input type="radio" name="payment_frequency" checked="checked"> Monthly </label>

                    <label class="btn btn-outline-secondary " data-payment-frequency="annual">
                        <input type="radio" name="payment_frequency"> Annual </label>

                    <label class="btn btn-outline-secondary " data-payment-frequency="lifetime">
                        <input type="radio" name="payment_frequency"> Lifetime </label>

                </div>
            </div>


            <div class="pricing pricing-palden d-flex flex-wrap justify-content-center">


                <div class="pricing-item">
                    <div class="pricing-deco">
                        <h3 class="pricing-title">Free</h3>

                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px"
                            xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg" y="0px">
                            <path class="deco-layer deco-layer--1"
                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--4"
                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                fill="#f5f8ff"></path>
                        </svg>

                        <div class="pricing-price">
                            Free </div>

                        <div class="pricing-sub">&nbsp;</div>
                    </div>


                    <ul class="pricing-feature-list">
                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-check-circle fa-sm mr-3 text-success"></i>
                            <div>
                                <strong>3</strong> Websites
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-check-circle fa-sm mr-3 text-success"></i>
                            <div>
                                <strong>Unlimited</strong> Pageviews <small class="text-muted">per month, per
                                    website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>Unlimited</strong> Visitors Events Tracking <small class="text-muted">per month,
                                    per website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>3</strong> Days Data Retention for Visitors Events
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>100</strong> Sessions Replays <small class="text-muted">per month, per
                                    website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>1</strong> Days Data Retention for Sessions Replays
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>5</strong> Websites Heatmaps
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>10</strong> Tracked Goals
                            </div>
                        </li>


                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                            <div>
                                Teams </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                No Ads </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                            <div>
                                API access </div>
                        </li>

                    </ul>

                    <a href="https://66analytics.com/demo/register"
                        class="btn btn-primary btn-lg rounded-pill pricing-action">Choose plan</a>
                </div>



                <div class="pricing-item">
                    <div class="pricing-deco">
                        <h3 class="pricing-title">Trial</h3>

                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px"
                            xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg" y="0px">
                            <path class="deco-layer deco-layer--1"
                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--4"
                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                fill="#f5f8ff"></path>
                        </svg>

                        <div class="pricing-price">
                            Trial </div>

                        <div class="pricing-sub">&nbsp;</div>
                    </div>


                    <ul class="pricing-feature-list">
                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-check-circle fa-sm mr-3 text-success"></i>
                            <div>
                                <strong>3</strong> Websites
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-check-circle fa-sm mr-3 text-success"></i>
                            <div>
                                <strong>249,000</strong> Pageviews <small class="text-muted">per month, per
                                    website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>399,000</strong> Visitors Events Tracking <small class="text-muted">per month,
                                    per website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>30</strong> Days Data Retention for Visitors Events
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>50</strong> Sessions Replays <small class="text-muted">per month, per
                                    website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>15</strong> Days Data Retention for Sessions Replays
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>3</strong> Websites Heatmaps
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>5</strong> Tracked Goals
                            </div>
                        </li>


                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                            <div>
                                Teams </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                No Ads </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                            <div>
                                API access </div>
                        </li>

                    </ul>

                    <a href="https://66analytics.com/demo/register?redirect=pay/trial"
                        class="btn btn-primary btn-lg rounded-pill pricing-action">Choose plan</a>
                </div>




                <div class="pricing-item" data-plan-monthly="true" data-plan-annual="true" data-plan-lifetime="true">
                    <div class="pricing-deco">
                        <h3 class="pricing-title">Gold</h3>

                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px"
                            xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg" y="0px">
                            <path class="deco-layer deco-layer--1"
                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--4"
                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                fill="#f5f8ff"></path>
                        </svg>

                        <div class="pricing-price">
                            <span class="d-none" data-plan-payment-frequency="monthly">9.99</span>
                            <span class="d-none" data-plan-payment-frequency="annual">59</span>
                            <span class="d-none" data-plan-payment-frequency="lifetime">499</span>
                            <span class="pricing-currency">USD</span>
                        </div>

                        <div class="pricing-sub">
                            <span class="d-none" data-plan-payment-frequency="monthly">Monthly payments.</span>
                            <span class="d-none" data-plan-payment-frequency="annual">Annual payments.</span>
                            <span class="d-none" data-plan-payment-frequency="lifetime">Lifetime payments.</span>
                        </div>
                    </div>


                    <ul class="pricing-feature-list">
                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-check-circle fa-sm mr-3 text-success"></i>
                            <div>
                                <strong>5</strong> Websites
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-check-circle fa-sm mr-3 text-success"></i>
                            <div>
                                <strong>Unlimited</strong> Pageviews <small class="text-muted">per month, per
                                    website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>Unlimited</strong> Visitors Events Tracking <small class="text-muted">per month,
                                    per website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>30</strong> Days Data Retention for Visitors Events
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>Unlimited</strong> Sessions Replays <small class="text-muted">per month, per
                                    website</small>
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>30</strong> Days Data Retention for Sessions Replays
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                <strong>3</strong> Websites Heatmaps
                            </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-times-circle text-muted"></i>
                            <div>
                                <strong>0</strong> Tracked Goals
                            </div>
                        </li>


                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                Teams </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                No Ads </div>
                        </li>

                        <li class="pricing-feature d-flex align-items-baseline mb-2">
                            <i class="fa fa-fw fa-sm mr-3 fa-check-circle text-success"></i>
                            <div>
                                API access </div>
                        </li>

                    </ul>

                    <a href="https://66analytics.com/demo/register?redirect=pay/1"
                        class="btn btn-primary btn-lg rounded-pill pricing-action">Choose plan</a>
                </div>



            </div>
        </div>

    </main>
@endsection
