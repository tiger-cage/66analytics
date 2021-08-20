@extends('admin.admin')
@section('content')






    <div class="d-flex flex-column flex-md-row align-items-md-center">
        <div class="mb-3 mb-md-0 mr-md-5">
            <i class="fa fa-fw fa-7x fa-book text-primary-200"></i>
        </div>

        <div class="d-flex flex-column">
            <h1 class="h3">Create your first page category</h1>
            <p class="text-muted">Sort your additional pages by categories.</p>

            <div>
                <a href="https://66analytics.com/demo/admin/pages-category-create" class="btn btn-primary"><i
                        class="fa fa-fw fa-sm fa-plus-circle"></i> Create
                    category</a>
            </div>
        </div>
    </div>



    <hr class="my-5 border-gray-100" />



    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-file-alt text-primary-900 mr-2"></i> Pages</h1>

        <div class="col-auto p-0">
            <a href="https://66analytics.com/demo/admin/page-create" class="btn btn-outline-primary"><i
                    class="fa fa-fw fa-plus-circle"></i> Create page</a>
        </div>
    </div>

    <div class="table-responsive table-custom-container">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Page</th>
                    <th>Position</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">

                            <div class="d-flex flex-column">
                                <div>
                                    <a href="https://66analytics.com/demo/admin/page-update/1">Terms of
                                        service</a>
                                    <a href="https://66analytics.com/demo/page/terms-of-service" target="_blank"
                                        rel="noreferrer"><i class="fa fa-fw fa-xs fa-external-link-alt ml-1"></i></a>
                                </div>
                                <span class="text-muted">terms-of-service</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            Bottom menu <small class="text-muted">Page</small>
                        </div>
                    </td>
                    <td class="text-muted">972 views</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                data-toggle="dropdown">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="admin/page-update/1"><i
                                        class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                <a href="#" data-toggle="modal" data-target="#page_delete_modal" data-page-id="1"
                                    class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>






    <div class="modal fade" id="page_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                            Delete page
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">This action cannot be undone.</p>

                    <div class="mt-4">
                        <a href="" id="page_delete_modal_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="pages_category_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-primary-900 mr-2"></i>
                            Delete pages category
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">All the pages inside this category will be deleted as well. This action cannot
                        be undone.</p>

                    <div class="mt-4">
                        <a href="" id="pages_category_delete_modal_url" class="btn btn-lg btn-block btn-danger">Delete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>






@endsection
