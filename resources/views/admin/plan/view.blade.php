@extends('admin.admin')
@section('content')



    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-box-open text-primary-900 mr-2"></i> Plans management
        </h1>

        <div class="col-auto p-0">
            <a href="https://66analytics.com/demo/admin/plan-create" class="btn btn-outline-primary"><i
                    class="fa fa-fw fa-plus-circle"></i> Create Plan</a>
        </div>
    </div>


    <div class="table-responsive table-custom-container">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Plan Name</th>
                    <th>Monthly Price</th>
                    <th>Annual Price</th>
                    <th>Users</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="https://66analytics.com/demo/admin/plan-update/free">Free</a>
                        <a href="https://66analytics.com/demo/pay/free" target="_blank" rel="noreferrer"><i
                                class="fa fa-fw fa-xs fa-external-link-alt ml-1"></i></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <i class="fa fa-fw fa-users text-muted"></i>
                        <a href="https://66analytics.com/demo/admin/users?plan_id=free">
                            10 </a>
                    </td>
                    <td>
                        <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                            Active</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/plan-update/free"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>


                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="https://66analytics.com/demo/admin/plan-update/trial">Trial</a>
                        <a href="https://66analytics.com/demo/pay/trial" target="_blank" rel="noreferrer"><i
                                class="fa fa-fw fa-xs fa-external-link-alt ml-1"></i></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <i class="fa fa-fw fa-users text-muted"></i>
                        <a href="https://66analytics.com/demo/admin/users?plan_id=trial">
                            0 </a>
                    </td>
                    <td>
                        <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                            Active</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/plan-update/trial"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>


                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        Custom <span data-toggle="tooltip"
                            title="Custom plans can be defined directly from the User Update page."><i
                                class="fa fa-fw fa-info-circle text-muted"></i></span>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <i class="fa fa-fw fa-users text-muted"></i>
                        <a href="https://66analytics.com/demo/admin/users?plan_id=custom">
                            1 </a>
                    </td>
                    <td><span class="badge badge-pill badge-info"><i class="fa fa-fw fa-eye-slash"></i>
                            Hidden</span></td>
                    <td></td>
                </tr>


                <tr data-plan-id="1">
                    <td>
                        <a href="https://66analytics.com/demo/admin/plan-update/1">Gold</a>
                        <a href="https://66analytics.com/demo/pay/1" target="_blank" rel="noreferrer"><i
                                class="fa fa-fw fa-xs fa-external-link-alt ml-1"></i></a>
                    </td>
                    <td>9.99 USD</td>
                    <td>59 USD</td>
                    <td>
                        <i class="fa fa-fw fa-users text-muted"></i>
                        <a href="https://66analytics.com/demo/admin/users?plan_id=1">
                            0 </a>
                    </td>
                    <td>
                        <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i>
                            Active</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/plan-update/1"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>

                                <a href="#" data-toggle="modal" data-target="#plan_delete_modal" data-plan-id="1"
                                    class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>

                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>




    <div class="modal fade" id="plan_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                            Delete Plan
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">By deleting the plan, all the recurring subscriptions of this plan will be
                        cancelled. Users will still have their features they paid for until the Expiration Date of the
                        plan. This action cannot be undone.</p>

                    <div class="mt-4">
                        <a href="" id="plan_delete_modal_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
