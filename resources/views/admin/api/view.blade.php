@extends('admin.admin')
@section('content')



    <div class="d-flex flex-column flex-lg-row justify-content-between mb-4">
        <div>
            <div class="d-flex justify-content-between">
                <h1 class="h3"><i class="fa fa-fw fa-xs fa-code text-primary-900 mr-2"></i> Admin API
                    documentation</h1>
            </div>
            <p class="text-muted">This is the documentation for the available API endpoints, only for the
                admins, which are built around the <strong>REST architecture</strong>. All the API endpoints
                will return a <strong>JSON response</strong> with the standard <strong>HTTP response
                    codes</strong> and need a <strong>Bearer Authentication via an API Key</strong>.</p>
        </div>

        <div class="col-12 col-lg-4">
            <div class="form-group">
                <label for="api_key">API Key</label>
                <input type="text" id="api_key" value="524F0QFGCOOOL2J7C925X0A6N78RVOPL"
                    class="form-control form-control-lg" readonly="readonly" />
            </div>

            <div class="form-group">
                <label for="base_url">Base URL</label>
                <input type="text" id="base_url" value="https://66analytics.com/demo/admin-api"
                    class="form-control form-control-lg" readonly="readonly" />
            </div>
        </div>
    </div>


    <div class="">

        <div class="mb-4">
            <h2 class="h4">Authentication</h2>
            <p class="text-muted">All the API endpoints require an API key sent by the <strong>Bearer
                    Authentication method.</strong></p>
        </div>

        <div class="form-group">
            <label>Example</label>
            <div class="card bg-gray-200 border-0">
                <div class="card-body">
                    curl --request GET \<br />
                    --url 'https://66analytics.com/demo/admin-api/<span class="text-primary">{endpoint}</span>' \<br />
                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                </div>
            </div>
        </div>

    </div>

    <hr class="border-gray-100 my-7" />

    <div class="">

        <div class="mb-3">
            <h2 class="h4">Users</h2>
        </div>

        <div class="accordion">
            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#users_read_all"
                            aria-expanded="true" aria-controls="users_read_all">
                            Retrieve list </a>
                    </h3>
                </div>

                <div id="users_read_all" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-success mr-3">GET</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/users/</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request GET \<br />
                                    --url 'https://66analytics.com/demo/admin-api/users/' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-custom-container mb-4">
                            <table class="table table-custom">
                                <thead>
                                    <tr>
                                        <th>Parameters</th>
                                        <th>Details</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>page</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>The page number that you want results from. Defaults to
                                            <code>1</code>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>results_per_page</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>How many results you want per page. Allowed values are:
                                            <code>10</code> , <code>25</code> , <code>50</code> ,
                                            <code>100</code> , <code>250</code>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>search</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>The search string.</td>
                                    </tr>
                                    <tr>
                                        <td>search_by</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>What field are you searching by. Allowed values are:
                                            <code>name</code> , <code>email</code>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>order_by</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>What field to order the results by. Allowed values are:
                                            <code>email</code> , <code>date</code> ,
                                            <code>last_activity</code> , <code>name</code> ,
                                            <code>total_logins</code>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>order_by_type</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>The ordering of the results. Allowed values are:
                                            <code>ASC</code> for ascending ordering, and <code>DESC</code>
                                            for descending ordering.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": [
                {
                    "id":"1",
                    "email":"example@example.com",
                    "billing":{
                        "type":"personal",
                        "name":"John Doe",
                        "address":"Lorem Ipsum",
                        "city":"Dolor Sit",
                        "county":"Amet",
                        "zip":"5000",
                        "country":"",
                        "phone":"",
                        "tax_id":""
                    },
                    "is_enabled":true,
                    "plan_id":"custom",
                    "plan_expiration_date":"2025-12-12 00:00:00",
                    "plan_settings":{
                        ...
                    },
                    "plan_trial_done":false,
                    "language":"english",
                    "timezone":"UTC",
                    "country":null,
                    "date":"2020-01-01 00:00:00",
                    "last_activity":"2020-01-01 00:00:00",
                    "total_logins":10
                }
            ],
            "meta": {
                "page": 1,
                "results_per_page": 25,
                "total": 1,
                "total_pages": 1
            },
            "links": {
                "first": "https://66analytics.com/demo/admin-api/users?&page=1",
                "last": "https://66analytics.com/demo/admin-api/users?&page=1",
                "next": null,
                "prev": null,
                "self": "https://66analytics.com/demo/admin-api/users?&page=1"
            }
        }</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#users_read"
                            aria-expanded="true" aria-controls="users_read">
                            Retrieve a user </a>
                    </h3>
                </div>

                <div id="users_read" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-success mr-3">GET</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/users/</span><span
                                        class="text-primary">{user_id}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request GET \<br />
                                    --url 'https://66analytics.com/demo/admin-api/users/<span
                                        class="text-primary">{user_id}</span>' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": {
                "id":"1",
                "email":"example@example.com",
                "billing":{
                    "type":"personal",
                    "name":"John Doe",
                    "address":"Lorem Ipsum",
                    "city":"Dolor Sit",
                    "county":"Amet",
                    "zip":"5000",
                    "country":"",
                    "phone":"",
                    "tax_id":""
                },
                "is_enabled":true,
                "plan_id":"custom",
                "plan_expiration_date":"2025-12-12 00:00:00",
                "plan_settings":{
                    ...
                },
                "plan_trial_done":false,
                "language":"english",
                "timezone":"UTC",
                "country":null,
                "date":"2020-01-01 00:00:00",
                "last_activity":"2020-01-01 00:00:00",
                "total_logins":10
            }
        }</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#users_create"
                            aria-expanded="true" aria-controls="users_create">
                            Create a new user </a>
                    </h3>
                </div>

                <div id="users_create" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-info mr-3">POST</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/users</span>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-custom-container mb-4">
                            <table class="table table-custom">
                                <thead>
                                    <tr>
                                        <th>Parameters</th>
                                        <th>Details</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>name</td>
                                        <td><span class="badge badge-danger">Required</span></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td><span class="badge badge-danger">Required</span></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>password</td>
                                        <td><span class="badge badge-danger">Required</span></td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request POST \<br />
                                    --url 'https://66analytics.com/demo/admin-api/users' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \<br />
                                    --header 'Content-Type: multipart/form-data' \<br />
                                    --form 'name=<span class="text-primary">John Doe</span>' \<br />
                                    --form 'email=<span class="text-primary">john@example.com</span>'
                                    \<br />
                                    --form 'password=<span class="text-primary">MyStrongPassword123</span>'
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": {
                "id": 2
            }
        }</pre>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#users_update"
                            aria-expanded="true" aria-controls="users_update">
                            Update a user </a>
                    </h3>
                </div>

                <div id="users_update" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-info mr-3">POST</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/users/</span><span
                                        class="text-primary">{user_id}</span>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-custom-container mb-4">
                            <table class="table table-custom">
                                <thead>
                                    <tr>
                                        <th>Parameters</th>
                                        <th>Details</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>name</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>password</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>is_enabled</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>0 - Disabled, 1 - Active, 2 - Banned</td>
                                    </tr>
                                    <tr>
                                        <td>type</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>0 - Normal user, 1 - Admin</td>
                                    </tr>
                                    <tr>
                                        <td>plan_id</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>free, trial or an integer plan_id</td>
                                    </tr>
                                    <tr>
                                        <td>plan_expiration_date</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>Y-m-d H:i:s format in UTC timezone</td>
                                    </tr>
                                    <tr>
                                        <td>plan_trial_done</td>
                                        <td><span class="badge badge-info">Optional</span></td>
                                        <td>0 - No, 1 - Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request POST \<br />
                                    --url 'https://66analytics.com/demo/admin-api/users/<span
                                        class="text-primary">{user_id}</span>' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \<br />
                                    --header 'Content-Type: multipart/form-data' \<br />
                                    --form 'name=<span class="text-primary">Jane Doe</span>' \<br />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": {
                "id": 2
            }
        }</pre>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#users_delete"
                            aria-expanded="true" aria-controls="users_delete">
                            Delete a user </a>
                    </h3>
                </div>

                <div id="users_delete" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-danger mr-3">DELETE</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/users/</span><span
                                        class="text-primary">{user_id}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request DELETE \<br />
                                    --url 'https://66analytics.com/demo/admin-api/users/<span
                                        class="text-primary">{user_id}</span>' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \<br />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#users_one_time_login_code"
                            aria-expanded="true" aria-controls="users_one_time_login_code">
                            Generate a one time login code </a>
                    </h3>
                </div>

                <div id="users_one_time_login_code" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-info mr-3">POST</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/users/</span><span
                                        class="text-primary">{user_id}</span><span
                                        class="text-muted">/one-time-login-code</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request POST \<br />
                                    --url 'https://66analytics.com/demo/admin-api/users/<span
                                        class="text-primary">{user_id}</span>/one-time-login-code' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \<br />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": {
                "one_time_login_code": "7be875f9f1e3e73e1c7a09f186f6b69c",
                "url": "https://66analytics.com/demo/login/one-time-login-code/7be875f9f1e3e73e1c7a09f186f6b69c",
                "id": "1"
            }
        }</pre>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr class="border-gray-100 my-7" />

    <div class="">

        <div class="mb-3">
            <h2 class="h4">Plans</h2>
        </div>

        <div class="accordion">
            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#plans_read_all"
                            aria-expanded="true" aria-controls="plans_read_all">
                            Retrieve list </a>
                    </h3>
                </div>

                <div id="plans_read_all" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-success mr-3">GET</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/plans/</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request GET \<br />
                                    --url 'https://66analytics.com/demo/admin-api/plans/' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": [
                {
                    "id": 1,
                    "name": "Golden",
                    "monthly_price": 3.99,
                    "annual_price": 49.9,
                    "lifetime_price": 99,
                    "settings": {
                        ...
                    },
                    "taxes_ids": [],
                    "status": 1,
                    "date": "2020-01-01 12:00:00"
                }
            ]
        }</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-gray-200 p-3 position-relative">
                    <h3 class="h6 m-0">
                        <a href="#" class="stretched-link" data-toggle="collapse" data-target="#plans_read"
                            aria-expanded="true" aria-controls="plans_read">
                            Retrieve a plan </a>
                    </h3>
                </div>

                <div id="plans_read" class="collapse">
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <label>Endpoint</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    <span class="badge badge-success mr-3">GET</span> <span
                                        class="text-muted">https://66analytics.com/demo/admin-api/plans/</span><span
                                        class="text-primary">{plan_id}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label>Example</label>
                            <div class="card bg-gray-200 border-0">
                                <div class="card-body">
                                    curl --request GET \<br />
                                    --url 'https://66analytics.com/demo/admin-api/plans/<span
                                        class="text-primary">{plan_id}</span>' \<br />
                                    --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Response example</label>
                            <div class="card bg-gray-200 border-0">
                                <pre class="card-body">
        {
            "data": {
                "id": 1,
                "name": "Golden",
                "monthly_price": 3.99,
                "annual_price": 49.9,
                "lifetime_price": 99,
                "settings": {
                    ...
                },
                "taxes_ids": [],
                "status": 1,
                "date": "2020-01-01 12:00:00"
            }
        }</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>








@endsection
