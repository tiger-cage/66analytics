<x-app-layout>


    <div class="p-3 p-md-5">
        <main>

            <header class="header">
                <div class="container">

                    <h1 class="h3"><i class="fa fa-fw fa-xs fa-user-shield text-gray-700"></i> Teams</h1>
                    <p class="text-muted">Create, invite or get invited to other people's teams.</p>

                </div>
            </header>


            <section class="container">



                <div>
                    <div class="mb-3">
                        <h2 class="h4">Teams you belong to</h2>
                        <p class="text-muted"></p>
                    </div>


                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('images/default/no_rows.svg') }}" class="col-10 col-md-6 col-lg-4 mb-3"
                            alt="You do not belong to any team :(" />
                        <h2 class="h4 text-muted">You do not belong to any team :(</h2>
                        <p></a></p>
                    </div>


                </div>

            </section>


        </main>

    </div>




    <div class="modal fade" id="team_create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Create a new team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="team_create" method="post" role="form">
                        <input type="hidden" name="token" value="14b7f0f981a356714952fe0a216ae006"
                            required="required" />
                        <input type="hidden" name="request_type" value="create" />

                        <div class="notification-container"></div>

                        <div class="form-group">
                            <label><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Access to websites</label>
                            <select multiple="multiple" name="websites_ids[]" class="form-control form-control-lg">
                            </select>
                            <small class="form-text text-muted">Which websites you want to share access to.</small>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="team_update" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Update team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="team_update" method="post" role="form">
                        <input type="hidden" name="token" value="14b7f0f981a356714952fe0a216ae006"
                            required="required" />
                        <input type="hidden" name="request_type" value="update" />
                        <input type="hidden" name="team_id" value="" />

                        <div class="notification-container"></div>

                        <div class="form-group">
                            <label><i class="fa fa-sm fa-fw fa-signature text-muted mr-1"></i> Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Access to websites</label>
                            <select multiple="multiple" name="websites_ids[]" class="form-control form-control-lg">
                            </select>
                            <small class="form-text text-muted">Which websites you want to share access to.</small>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="team_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-gray-700"></i>
                        Delete Team
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="team_delete" method="post" role="form">
                        <input type="hidden" name="token" value="14b7f0f981a356714952fe0a216ae006"
                            required="required" />
                        <input type="hidden" name="request_type" value="delete" />
                        <input type="hidden" name="team_id" value="" />

                        <div class="notification-container"></div>

                        <p class="text-muted">All the team members and access to the websites of this team will be
                            deleted. This action cannot be undone.</p>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="team_association_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-gray-700"></i>
                        Remove your access
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="team_association_delete" method="post" role="form">
                        <input type="hidden" name="token" value="14b7f0f981a356714952fe0a216ae006"
                            required="required" />
                        <input type="hidden" name="request_type" value="delete" />
                        <input type="hidden" name="team_association_id" value="" />

                        <div class="notification-container"></div>

                        <p class="text-muted">Remove your membership from this team. This action cannot be undone.</p>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
