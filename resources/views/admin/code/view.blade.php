@extends('admin.admin')
@section('content')





    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-tags text-primary-900 mr-2"></i> Codes management</h1>

        <div class="col-auto p-0">
            <a href="https://66analytics.com/demo/admin/code-create" class="btn btn-outline-primary"><i
                    class="fa fa-fw fa-plus-circle"></i> Create code</a>
        </div>
    </div>


    <div class="table-responsive table-custom-container">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Type</th>
                    <th>Plan</th>
                    <th>Discount</th>
                    <th>Quantity</th>
                    <th>Redeemed</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <tr data-code-id="1">
                    <td><a href="https://66analytics.com/demo/admin/code-update/1">DISCOUNT30</a></td>
                    <td><span class="badge badge-pill badge-success">discount</span></td>
                    <td>
                        <span class="badge badge-pill badge-light">
                            Gold </span>
                    </td>
                    <td>30%</td>
                    <td>10</td>
                    <td><i class="fa fa-fw fa-users text-muted"></i> 0</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/code-update/1"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                <a href="#" data-toggle="modal" data-target="#code_delete_modal" data-code-id="1"
                                    class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>


                <tr data-code-id="2">
                    <td><a href="https://66analytics.com/demo/admin/code-update/2">CHRISTMASOFFER</a></td>
                    <td><span class="badge badge-pill badge-primary">redeemable</span></td>
                    <td>
                        <span class="badge badge-pill badge-light">
                            Gold </span>
                    </td>
                    <td>100%</td>
                    <td>5</td>
                    <td><i class="fa fa-fw fa-users text-muted"></i> 5</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/code-update/2"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                <a href="#" data-toggle="modal" data-target="#code_delete_modal" data-code-id="2"
                                    class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>







    <div class="modal fade" id="code_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                            Delete Code
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">This action cannot be undone.</p>

                    <div class="mt-4">
                        <a href="" id="code_delete_modal_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>






@endsection
