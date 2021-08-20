@extends('admin.admin')
@section('content')



    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-receipt text-primary-900 mr-2"></i> Taxes management</h1>

        <div class="col-auto p-0">
            <a href="https://66analytics.com/demo/admin/tax-create" class="btn btn-outline-primary"><i
                    class="fa fa-fw fa-plus-circle"></i> Create tax</a>
        </div>
    </div>


    <div class="table-responsive table-custom-container">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Tax</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Billing for</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr data-tax-id="1">
                    <td><a href="https://66analytics.com/demo/admin/tax-update/1">VAT</a></td>
                    <td>
                        <div class="d-flex flex-column">
                            <span>VAT</span>
                            <span class="text-muted">Value Added Tax</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span>20%</span>
                            <span class="text-muted">Inclusive</span>
                        </div>
                    </td>
                    <td>
                        Personal & Business </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/tax-update/1"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr data-tax-id="2">
                    <td><a href="https://66analytics.com/demo/admin/tax-update/2">Setup Fee</a></td>
                    <td>
                        <div class="d-flex flex-column">
                            <span>Support Fee</span>
                            <span class="text-muted">A random description for a support fee.</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span>2 USD</span>
                            <span class="text-muted">Exclusive</span>
                        </div>
                    </td>
                    <td>
                        Personal & Business </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/tax-update/2"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>





@endsection
