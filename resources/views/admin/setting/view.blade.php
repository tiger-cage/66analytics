@extends('admin.admin')
@section('content')

    <div class="d-flex mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-wrench text-primary-900 mr-2"></i> Website Settings</h1>
    </div>


    <div class="row">
        <div class="mb-3 mb-xl-5 mb-xl-0 col-12 col-xl-3">
            <div class="d-xl-none">
                <select name="settings_menu" class="form-control">
                    <option value="https://66analytics.com/demo/admin/settings/main" class="nav-link">Main
                    </option>
                    <option value="https://66analytics.com/demo/admin/settings/analytics" class="nav-link">
                        Analytics</option>
                    <option value="https://66analytics.com/demo/admin/settings/payment" class="nav-link">
                        Payment</option>
                    <option value="https://66analytics.com/demo/admin/settings/paypal" class="nav-link">
                        Paypal</option>
                    <option value="https://66analytics.com/demo/admin/settings/stripe" class="nav-link">
                        Stripe</option>
                    <option value="https://66analytics.com/demo/admin/settings/offline_payment" class="nav-link">Offline
                        payment</option>
                    <option value="https://66analytics.com/demo/admin/settings/affiliate" class="nav-link">
                        Affiliate</option>
                    <option value="https://66analytics.com/demo/admin/settings/business" class="nav-link">
                        Business</option>
                    <option value="https://66analytics.com/demo/admin/settings/captcha" class="nav-link">
                        Captcha</option>
                    <option value="https://66analytics.com/demo/admin/settings/facebook" class="nav-link">
                        Facebook Login</option>
                    <option value="https://66analytics.com/demo/admin/settings/google" class="nav-link">
                        Google Login</option>
                    <option value="https://66analytics.com/demo/admin/settings/ads" class="nav-link">Ads
                    </option>
                    <option value="https://66analytics.com/demo/admin/settings/socials" class="nav-link">
                        Socials</option>
                    <option value="https://66analytics.com/demo/admin/settings/smtp" class="nav-link">SMTP
                    </option>
                    <option value="https://66analytics.com/demo/admin/settings/custom" class="nav-link">
                        Custom JS / CSS</option>
                    <option value="https://66analytics.com/demo/admin/settings/announcements" class="nav-link">Announcements
                    </option>
                    <option value="https://66analytics.com/demo/admin/settings/email_notifications" class="nav-link">Email
                        Notifications</option>
                    <option value="https://66analytics.com/demo/admin/settings/webhooks" class="nav-link">
                        Webhooks</option>
                    <option value="https://66analytics.com/demo/admin/settings/offload" class="nav-link">
                        Offload</option>
                    <option value="https://66analytics.com/demo/admin/settings/cron" class="nav-link">Cron
                    </option>
                    <option value="https://66analytics.com/demo/admin/settings/license" class="nav-link">
                        License</option>
                </select>
            </div>


            <div class="nav flex-column nav-pills d-none d-xl-flex" role="tablist" aria-orientation="vertical">
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/main"><i
                        class="fa fa-fw fa-sm fa-home mr-1"></i> Main</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/analytics"><i
                        class="fa fa-fw fa-sm fa-chart-pie mr-1"></i> Analytics</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/payment"><i
                        class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payment</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/paypal"><i
                        class="fab fa-fw fa-sm fa-paypal mr-1"></i> Paypal</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/stripe"><i
                        class="fab fa-fw fa-sm fa-stripe mr-1"></i> Stripe</a>
                <a class="nav-link active" href="https://66analytics.com/demo/admin/settings/offline_payment"><i
                        class="fa fa-fw fa-sm fa-university mr-1"></i> Offline payment</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/affiliate"><i
                        class="fa fa-fw fa-sm fa-wallet mr-1"></i> Affiliate</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/business"><i
                        class="fa fa-fw fa-sm fa-briefcase mr-1"></i> Business</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/captcha"><i
                        class="fa fa-fw fa-sm fa-low-vision mr-1"></i> Captcha</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/facebook"><i
                        class="fab fa-fw fa-sm fa-facebook mr-1"></i> Facebook Login</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/google"><i
                        class="fab fa-fw fa-sm fa-google mr-1"></i> Google Login</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/ads"><i
                        class="fa fa-fw fa-sm fa-ad mr-1"></i> Ads</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/socials"><i
                        class="fab fa-fw fa-sm fa-instagram mr-1"></i> Socials</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/smtp"><i
                        class="fa fa-fw fa-sm fa-mail-bulk mr-1"></i> SMTP</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/custom"><i
                        class="fa fa-fw fa-sm fa-paint-brush mr-1"></i> Custom JS / CSS</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/announcements"><i
                        class="fa fa-fw fa-sm fa-bullhorn mr-1"></i> Announcements</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/email_notifications"><i
                        class="fa fa-fw fa-sm fa-bell mr-1"></i> Email Notifications</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/webhooks"><i
                        class="fa fa-fw fa-sm fa-code-branch mr-1"></i> Webhooks</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/offload"><i
                        class="fa fa-fw fa-sm fa-copy mr-1"></i> Offload</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/cron"><i
                        class="fa fa-fw fa-sm fa-sync mr-1"></i> Cron</a>
                <a class="nav-link " href="https://66analytics.com/demo/admin/settings/license"><i
                        class="fa fa-fw fa-sm fa-key mr-1"></i> License</a>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">

                    <form action="https://66analytics.com/demo/admin/settings/offline_payment" method="post" role="form"
                        enctype="multipart/form-data">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345" />


                        <div>

                            <div class="">
                                <div class="form-group">
                                    <label for="is_enabled">Enable offline payments</label>
                                    <select id="is_enabled" name="is_enabled" class="form-control form-control-lg">
                                        <option value="1" selected="selected">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="instructions">Instructions</label>
                                    <textarea id="instructions" name="instructions"
                                        class="form-control form-control-lg">Your offline payment instructions go here..</textarea>
                                    <small class="form-text text-muted">Payment instructions for the user to
                                        see, before submitting the payment.</small>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary mt-4">Update</button>
                    </form>

                </div>
            </div>

            <p class="text-muted my-3">Read the <a href="https://altumco.de/66analytics-docs"
                    target="_blank">Documentation</a> to get more details on certain available
                configurations.</p>
        </div>
    </div>






@endsection
