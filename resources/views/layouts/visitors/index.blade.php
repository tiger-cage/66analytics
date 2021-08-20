<x-app-layout>
    <main>

        <header class="header">
            <div class="container">

                <div class="d-flex flex-column flex-xl-row justify-content-between mb-3">
                    <div>
                        <h1 class="h3 text-break">Visitors of socialproofo.com/demo</h1>
                    </div>

                    <div>
                        <button id="daterangepicker" type="button" class="btn btn-sm btn-outline-primary my-1"
                            data-min-date="2021-07-30" data-max-date="2021-08-20">
                            <i class="fa fa-fw fa-calendar mr-1"></i>
                            <span>
                                21 July, 2021 - 20 August, 2021 </span>
                            <i class="fa fa-fw fa-caret-down ml-1"></i>
                        </button>

                        <button type="button" class="btn btn-sm btn-outline-secondary d-print-none my-1"
                            onclick="$('#filters').toggle();" data-toggle="tooltip" title="Filter">
                            <i class="fa fa-fw fa-filter"></i>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3 mb-md-0">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-column">
                                        <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                        <span class="h4 font-weight-bolder">1,423</span>
                                    </div>

                                    <span class="round-circle-md bg-gray-200 text-primary-700 p-3">
                                        <i class="fa fa-fw fa-lg fa-users"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-3 mb-md-0">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-column">
                                        <small class="text-muted text-uppercase font-weight-bold">Avg. time
                                            per session</small>
                                        <span class="h4 font-weight-bolder">0:3:0</span>
                                    </div>

                                    <span class="round-circle-md bg-gray-200 text-primary-700 p-3">
                                        <i class="fa fa-fw fa-lg fa-stopwatch"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="filters" class="card border-0 my-4" style="display: none;">
                    <div class="card-body">

                        <div class="row justify-content-between">
                            <div class="col-12 col-md-auto">
                                <h2 class="h4">Active filters</h2>
                            </div>

                            <div class="col-12 col-md-auto dropdown">
                                <button type="button" class="btn btn-sm btn-primary rounded-pill dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-fw fa-plus-circle"></i> Add filter </button>
                                <div id="create_filters_list" class="dropdown-menu dropdown-menu-right">
                                    <h6 class="dropdown-header">Visitors</h6>
                                    <button type="button" class="dropdown-item" data-filter-by="country_code"><i
                                            class="fa fa-fw fa-sm fa-globe text-muted"></i> Country
                                        Code</button>
                                    <button type="button" class="dropdown-item" data-filter-by="screen_resolution"><i
                                            class="fa fa-fw fa-sm fa-desktop text-muted"></i> Screen
                                        Resolution</button>
                                    <button type="button" class="dropdown-item" data-filter-by="browser_language"><i
                                            class="fa fa-fw fa-sm fa-language text-muted"></i> Browser
                                        Language</button>
                                    <button type="button" class="dropdown-item" data-filter-by="os_name"><i
                                            class="fa fa-fw fa-sm fa-server text-muted"></i> Operating
                                        System</button>
                                    <button type="button" class="dropdown-item" data-filter-by="device_type"><i
                                            class="fa fa-fw fa-sm fa-laptop text-muted"></i> Device</button>
                                    <button type="button" class="dropdown-item" data-filter-by="browser_name"><i
                                            class="fa fa-fw fa-sm fa-window-restore text-muted"></i>
                                        Browser</button>

                                </div>
                            </div>
                        </div>
                        <p class="text-muted">Create and modify filters to segmentize and check only the
                            data that you need.</p>

                        <form id="filters_form" action="" method="post" role="form">
                            <div id="filters_list"></div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>

                <template id="template_filter">
                    <div class="filter">
                        <input type="hidden" name="filter_by[]" value="" />

                        <div class="row mb-4 mb-md-3">
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <span id="template_filter_by_display" class="font-weight-bold"></span>
                            </div>

                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <select name="filter_rule[]" class="form-control form-control-lg ml-md-3">
                                    <option value="is">Is</option>
                                    <option value="is_not">Is not</option>
                                    <option value="contains">Contains</option>
                                    <option value="starts_with">Starts with</option>
                                    <option value="ends_with">Ends with</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-5 mb-3 mb-md-0">
                                <input type="text" name="filter_value[]" class="form-control form-control-lg ml-md-3" />
                            </div>

                            <div class="col-1 d-flex">
                                <button type="button"
                                    class="btn btn-outline-gray-400 ml-md-3 text-muted align-self-center filter_delete"
                                    data-toggle="tooltip" title="Delete"><i
                                        class="fa fa-fw fa-times fa-sm"></i></button>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
        </header>


        <section class="container">



            <div class="table-responsive table-custom-container">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Visitor</th>
                            <th>System</th>
                            <th></th>
                            <th>Last Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr data-visitor-id="129550">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129550" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAA9QTFRF////rOPOlsWzWcedLoxotyBOTQAAAM9JREFUeF7tlUsSxCAIRNXk/mce0hIaIzWjzi6lK0p44dNqUtoLE8j5HkQpvUUvx5WPQ5lynsrQorchlJE4ZWgJYV+8GexhF3FgaNH7yAFG44ShpUSbh5vDSJovTEZsDY62D2ZyyCtSJmrOSdKKvNKCnZOeibxsOtd1VYp18fS6vKY5I4moWE0VFNB93BDvtSwLiDuCo4X5Bq2eH+2Dqe1FCL3N/COxvkv5j/rDhW31VctoYtHhd+r396temOACLqi/X/6Zn8XbXv7wbL198wPilQk1Ofda9QAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/us.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">United States</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 14:02:39" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129550">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 14:02:48" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129550">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129549">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129549" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAADZQTFRF////6Mm60ZN1/v7++fn5/Pz86enp6Ojo7u7u+/v7/f396+vr7Ozs8+Tc3K6X7NPH8uLa2qiQtV0zSAAAAYFJREFUeF7tlN1CwyAMhSlaWdV2+v4va34hJGHuXnuxUpKvOclhLeX/KlvV6+EwNhvtDG6+vGporHBnq9MLlSllf2vtdmBwrCgVUiZEtZX3jwbXJwTHSgmHCFN2JFqDMmMlNXwVKgybC4SFz8JYbF0Ik1YDwg1m7Y/hBIjHGIY8WeChySwNdsJPjBP6MTAL/97+zHJWyHwOCNKmc8SdAyK60ynizgELO9jzvSBywt5J7EU3tXfnXPkV5CDkgs2LgELP7ugIMgs7qcgdY4Skwub2Lyoyqvi/gQq0Q1bzpBdISYasIL7dXxpb3H06Pi9StTSmfH0LaI58Isy6D65w+zwFqPKr+ygEC/CsV0Puf1/WTlXU0YWVk/ssa5ybZ9yX7vX2jPseSdvv/rpsesRxJENWu1ZIsLMn5p+LkA8bijDhP0o1e5EgFIqfvpoxjBCRfPkhGusQwtvJZ3wETVNmc4GEOqZ0Lixqs2Kz9o1w1TaXDUMmws0gDsS6J0Q2N5v2R9Y/ZS4QVdSXLtcAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/tr.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Turkey</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 13:58:06" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1536x864</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129549">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 13:58:58" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129549">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129266">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129266" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAADZQTFRF////paWlvcxmzdiMTExM7vLZ/P366e7M1d6ew9F1xdJ61+Cj0NuU5OrB6+/R2+OtytaEq6urVQ8p1gAAAVRJREFUeF7t1NmWgyAMAFBAae3s8/8/O9lIiOQInef60HMauUIWTel1RRXIWaMFri1a42N539UgqVMCwszSJiTUrGwiopkwk80dVYWYMBN4jqFOsAnLRWUU5ASZsFxIBJ0EmrAnTBANAsx1T6zlXevCYLuf96jJNgfjXTjVGEzJ5mC4i3kMQQh0s3O6TZlz7HY/Hm/vd1nQzY4nXCuK3T64hAev6OetN1LdXpTChshYg9YPJJ+tTaV84X8mZ6MdxCWHke+OeGM9xyUPIz89ceYfJD1/sKQGD7KWvhokrS2TIjeDZLWVYoikxYFhw8T/Rq1vK6BuMbl4yZ5/xeBs0S5hUBfGn4utTVD0wM3mQOaXBqsKCkgtNgd+5BkFZAPi97E8EI2kctDm2r8iNfhstueoua4VJgmF4a3FTEXCsshpycwFbqIJgpkL2sRqkn/H8rwiUIE/icEJY3lJbJ4AAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Bangladesh</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-17 10:35:49" class="text-muted">17 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129266">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>10</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 13:50:44" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129266">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129548">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129548" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAABJQTFRF////oqKiWce9gtXN1fHuRkZGYzn/IwAAAVhJREFUeF7tldGWwyAIRJOY/P8vl0GFQTHHPrc+7FnFC8JQchz/pRU4T/y9ZBXd3wX/Y7lVDbbO5wGDK3c77JBsm3UklBGiBlFrhZSoHonRM5xSEIMqMTCNkNMQpEFunYMo0jNxc4p4aM7EIHs2RfEEkyByL0vfykjlYpdZkbuUcyaVrEKTFwi48C+3Yh80jDUPKbYN9UE3vwbRS70PzGHQHCF92R1A9IKQyQJBpIBQpZYIAdK/kU8fFgBBWI69KEGTPSRovofExALDplU36c/fFyPLnloiN0u597DyNXKHhik7ukw95tAiFwkS21Iac1nCminmbWhLuH6FEGRGXiEd6kNrTgOh2/XBmTUfO7gNzTNrPtxAQPPMmo9QfZponlnb2fQN0SBXavXDqdBSqRShyT+oo5pnD6PJP0haNc/StzJCMJK0ay6MfrDj8o84QaZ5JuXo4Tf2H3eCB1Hl2qs4AAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Bangladesh</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 13:45:30" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129548">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 13:47:16" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129548">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129547">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129547" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAFdQTFRF////oqKi+fz92OnyRkZG7vX5ZKfKWaHHhbrV4+/18/j7dLDQfLXSfLXT6fL35vD2/v7+9fX17e3t5eXl5ubm7u7u6+vr4+Pj8/Pz9vb28PDw6OjofLTT3G5ihQAAAStJREFUeF7tldkSwiAMRam24m4Xd/3/75QlkICxBZ4cxz44NMmBkBtTIf5PVIGqcgZcsUWazcFc1TUwuBLei2yzkHK50u8qDhhcoReJ9UaqZ+sIwxjCrKx3Fya314SUBxenIoHQjPdSqADBozGdicRE/vVVktlFphdLlnJcac5LlA7rb944LyrNAKQj0IsF/Uj4zrMRRGljaLt+OJ46wGOvMUfG9nwxT89vGFht0zsiZvzfiDBgu9oz9O/t3QvZ2tzcLj0idwjgiqzu488dEHm4PTkpCxBydGJiVP206wfqJxW5QMq4JRIahgwgVCrQzA+3yBp1xJSX19crGbW+tbP6+oPGvaQPJgKzh1L+6CsYsAVjHJAm42NhE3uqmmKD4or9JH3z5Oda+OdtLzfWFiONXd8fAAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Bangladesh</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 13:45:26" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129547">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 13:45:30" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129547">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129546">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129546" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAEVQTFRF////5OD0rqLgk4TWW1tbhISE1tbWycHqzMXr4dzyysPq+vn9+/r94dzzysLqy8PqjIyMy8Pp3t7e09PTe3t79/b83tnyeKAoCQAAAYlJREFUeF7tlVl6gzAMhJUEcAKl6X7/o1abFy1wgdYvYEe/x5rxRwD+B1yuNx3djAnHbL25mGmFLLJY5OrcFcggXuQWAiHIIF4kIoA9jUgQyRCAue08TUEkR9AlrQx2oaehF1pgaxlKRI4RgWInJyqiFDs5QEoyknswNtWIe2cJcZop8jCIa8w4VwvXzSAnIlALH+2tlHCjSaRnrsj9xSCJSM9ckQfAtr/qxN8D7qRnLlXPjVa3/cnT1C5CREmQXS0R6E1n5iEIQYy8swiPbV/Lh6n1k6U896FeDvb5Vbf05TSfUaNDGifAMguUIMvEB1NoW6UzKhQoQWZBFNqFKFJIUESWqSKlrPCtIoqQUkRwH90YH1BFGhIBQJEBaSJnCNnSVX7aa7K7LpHIgNRO8IiHg73vKkNXGUKfffeNXs4zB0LsPwGgoSeZAyFehGM7zJwRL6JJ55njbolIuxxZ5owEkeE+Xd2PbGDsZLyCeIYIJSKDCkfgoWAXhtrzIyRAsZOIBKjv+afefgFZ4RBqAipfRgAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/ng.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Nigeria</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 13:27:24" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1600x900</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129546">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 13:32:04" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129546">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129545">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129545" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAF1QTFRF/////P366vPb+vv43ufP9vrwrM9wp8xmvtmO8Pbl8fXqfZ8/dJkymbRo6O7d+fv0tdR/udeH9fjxi6pUka9eudaG8/jr8ffo7fHk6u/gdJkxka9d7PHk0+Wy1ee3wn0tXQAAARVJREFUeF7tldkagiAQhWkxymjfF3v/x2xQdAY9lPDVnVwBhx9n5iAoNbTUCozGNTmZdnusNvtnM63nCzvMl8as1n6PVQ5os9XUdjSxPxhqR69XqSdebntnS2h9UepqCWNusseqoMLInWCIJASm4tOnGKOL7FfjfyP2HH0DqOw5ApDKniOiUh++xJ4jBKrP5pjUSFEwDJFOYIXWzMDAxJEvNydCMih9WiXLWBKS8VSUriM8Bq0Tc32R6MBaCfZIP6HIXbOK1xcrnfs5rovb0Fexv/UGWA3466CACn4iEeZnFefzo9noSyn+6mtfsPY/5xPBqsgo4RrvIOQ0e+7UzKtaOzD0JNkHS7b49ImOLnLro8MwWIE3/Zoc9v38D5gAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/tr.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Turkey</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 13:08:13" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>OS X</span>
                                </div>

                                <small class="text-muted">Chrome - 1680x1050</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129545">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 13:08:40" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129545">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129544">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129544" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAABtQTFRF////2eXMjrJlaZkyzeWynMxmyuOt5eXlx+KoyVKqsgAAAU5JREFUeF7tldsSgjAMRAFB/P8vNrd2kyZ10CfHsS9W6GmS3bQsy38s63azwWLse5MEM3myBqkaxMRxGIOZrt0CQltIJCGMwUyXrvS2gJQQRogekdZuGeFId11HK40As3IOxcDChFDiBUCPkM6QGAWZINPyWZ06ykxkDjJFaivNghBHnT6LwcuGPhCSimXPC+LE2xjDXKuRsQ8shjKE6Fb4PXMfaFzrjgpBR7jE4HSFPHoT+Vq60xVSJoaWLxHXEUMcEzmX7zsiMHIUa5FrK83fdxC4fzWx5u/18t8X+bWV3+J+0hm94X385Ig1f1MIUz0dZL49cEdPb36fFyP9S2B9QO8xi0XwPx+k9cGsaKNdkN4Hk4PV4qES9AFmOStJrFVSIVv84OkOXi67aqwUvhAphwxBLl90E0IsGKHw3UwiM5KguMVopSIJKlX5/YdPoVwQ+9YLlEsAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/id.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Indonesia</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 12:44:15" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Firefox - 1366x768</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129544">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 12:44:15" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129544">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129543">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129543" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAEhQTFRF////rOPQ1fHnWceijdi/7Pj0YcmmtubW/f79etK03fPsW8ejod/K9/z6a82sy+3i3vPsetG02PHpa8yskNnB7vn13vTs0O/k81V3SwAAAbNJREFUeF7tlGl6AyEIhkedLZlJ0r33v2nZREDbHqD1Rx4HeAU+jNP0v0iBlPA3qxqpLjKxV520SaUgk5TxBHsdAgRZkzKCcA7xWoQIZCBQ8jDSiJBHCLDiYqZtm9dk8QgzBuYSxmmoMMmj6Uia75qh9ivThBCGhhAEIJGVaXKjeSAyBuMJFUm5DZXtPoOZOTlmrLyFtGMM5oqYpmUdIi6vbRVP2kZIrNTn2S99YZ6gpp3pesReAsE6OeOpyDJ3B2LtrIllbndWZ99WvHgxh525yvig3dMzCDEizMwVwc3tPOhu9TnszC3yuCNQyos7J35kDnrlssSbdfwxHL4zXfPjvHmfMj0CLiAuV/LYRJXpEHSUddvZcbephIkImd/eq7mcNoCZgERjOT46xiNdamhKSuRADHBI3yAIscWQLi320oyArEtgzGfNEZAyh+L9pzwXasyfbuY/vPwVyQmugiywjR4luimtEwjH68OLiO4hC0+oCFqFD16qRGz1JApFuzCYI+bxCAfSWbwdIe5tr+Uo88vLb5uuzLj9JmOVSdUDucci4//fNGyvDj0Wo1FSFX9ufQHXEgcNl8fHiQAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/se.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Sweden</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 12:17:20" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>OS X</span>
                                </div>

                                <small class="text-muted">Safari - 2560x1440</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129543">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 12:17:20" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129543">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="127552">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/127552" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAACdQTFRF////qamp6LrZ0XW0VFRU+e317cvi9ePv89zs6b7c5bHU+Oz07Mfg3Bg2WwAAAZxJREFUeF7tlFd2xDAIRW157Enb/3oDjyqEvYFEHy7Apeqwbf8HHdh3fg7vxmEHItG6Eh/768XM4cxMiHZCiID0cEYRiaHajIBghgw1jiBBlDhKkJQNhQGSiZmZETEMOLR3ialzD4fW3BWD8i2haIQyGEKJgyY7E+0msY6gMvBiyDFiqCxfRhnq0Zxwk6JEEg0xItmMOPOAzJmSHxXcIzOBokXEyEnxT7AXXkisENInCGFI7wuA/HeEtpYZOD8R5G0umhh55kAuBElRalbkDNnCGZDxIS+rpSHyzNU4vz7TONbPBhjjy5I4VmAbdLXG+P5RUvMjsZ4VIRUb01SkfOkC/RuzIKwQZNs4gPQaV1qZikCcothEZcRIrSB6L9g70op7A0OoZ0RDw7gcMWSDCbECqzn/qyGZZMQI1FKPGY6MOPGIpB0vXspCKDNf1gVBZe1QEh561SKIbX7NG6Uas2iDiD2tDVWmXbBlUcOUXQnTrvFZKIaIjs8WmUJbOs60ieUCo2hj+vKjyUb4pDHzp83vRFwO3LFulMjiz51fubMLM7CYo9sAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/br.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Brazil</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-06 01:05:49" class="text-muted">6 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/127552">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>3</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 11:47:09" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="127552">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129179">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129179" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAADNQTFRF////2fLaMpk3mMybjNiPZsxqn8+h9Pv1nt6gcM9zo+Cl8PrwjtmRnd6gfdOAf9SDptOoEEdqjgAAAVdJREFUeF7t1cmSxCAIAFCMOvv2/187IIigaKX6OpNLutK+RhbTAP/XqEC6+pWzfjwXqKgAUHMkqQrJtKybIylCmlBzIqkyEdHNiRQmKsSUtEUYhKIYwabWLcIgSJxoBh9vEAWpsyBDz2NEQerTuu3MZEKj56swPb3Mt6bnR7OSKfOxIJgDjrIV0Rw0ouL55fXtHUBuHIvjTBsbMT6wRJ8AcpNlzXhidvWF5BtAbn0ZGUdsHmGUlo8lLvMoF1qcLTnUyvww2GUPED+MtzbmR/5e+s7cLLI1YZSglY8MzHKEXXl5cP3AuMG0q7mJO7IefLb9uESnMjYqLEntVUHXz7wnHC16XtbnHa1x+KUUvjAZLXXDXcVBWlhC9kD3WiEJgwiaat0yDzMZubX661ngWp2CoOSWiZHqRuUyBWTCcXo/DpmQFEJGOxj0xARRcpk/8X25rPwrn38BVlIJHTYbPoAAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/vn.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Vietnam</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-16 15:29:31" class="text-muted">16 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1366x768</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129179">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>4</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 11:41:52" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129179">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129542">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129542" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAFpQTFRF////3uWyvcxm+fn51dXV7e3tV1dXTExMe3t74eHh8/PzampqcnJy5+fn5OTkS0tL3+W04+m+5OrB9ffp/v785+zH5uvG9Pbl9/jt/f785+zJ9ffo9vjq5evEXxLEOgAAAT5JREFUeF7tlFF3wiAMhaGuw82p3dpu2rn//zeXXAqJHe0pvHiOk5dwiF/JzY0Y81jogLVLjUhlbVUFZvMU4LhT2fhhOhuZ+tm57QsnZCdZqQRnYF53jtYbpWQn2T8EM3smnDsY2Y2EVM6gOpwix4POyi3hNKOw8R60bK18MJlNLrFyFGYTS2m+3nqnEwTqlYmIVBANpHn35IcPuiVyTXQaRNv1HPuubTiqOVCFRQNBGMNM3xkDJsxBfaVEIUwww4Rn1BApSBX26Y+/Tohn0pMuLHoOCfg6boOotHzKSpOJYQ3E+DbwbYkmowpa3CE7fCM0lx/EkJuJ+M1aJLsw5X6Qzy1bkF/Q5ISVA9Ry69JWFgxMwVhq91cOP1Wd/RcLzsLKyZpxveS5yH+Ubvzyzz3jCy+/q//Tyz87HPeZ+AWkZxXGFMvIRAAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/rs.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Serbia</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 11:37:47" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1600x900</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129542">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 11:37:47" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129542">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129541">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129541" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAHJQTFRF////+fn519fX/vz++O/57u7uX19fVFRUgYGB4uLi/Pj85b7p5Lro68zu+vP78/PzcHBweHh4/fr96MXr6cjs6Ojo5eXl+/b8+vT7U1NT+/X73KfhzH7U3qzj+fH6+/b715ndyXXR3Kbh47ro0YrY0ozY2Qg/+wAAARVJREFUeF7tVdkSwjAIxKNGa7xv61WP//9FiU1DmFJnEqc+OPKSY7sEWESAv8VWoNUumZ1udUeo85/0lOoPzDEdaj0a8x2hFNBkqtBmeDFfaLQl2xFKDFgZhlJrgI1haL31dwW6Q/QzSkRgEJ4+xhhcZJZZgwfSXHpEQElziSChpLnEEFHSHCn77HA8uQUvLJoyd2fXJnh9yfP8WizZ66uCcsMm8ow9fUfKA8Au+JUYmNfyzr19zDiW0sdrKmMlF4ay6L5xCA7MT7BSZDH9iCIz9c0rqCEVmaFlkZj6lSKLDSPrWzqU0Rp9LakGFX5Enrbv0UabIHgohY++iAEbP/kT4c8Ch4R1iKhnEYH92ORvtLW+4vwJ+1YljghixT8AAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/vn.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Vietnam</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 11:14:16" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Mobile"><i
                                            class="fa fa-fw fa-mobile"></i></span>
                                    <span>iOS</span>
                                </div>

                                <small class="text-muted">Safari - 414x736</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129541">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 11:14:33" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129541">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129530">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129530" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAEtQTFRF////8Nzz1Jfc+fn519fX7tXxxnXR7u7uX19fVFRUgYGB4uLi8/PzcHBweHh46OjoU1NT5eXl5L7p0ZDa05Xb4rro8+P11Znd5sPrW/5c4AAAAWJJREFUeF7tlWtbwyAMhVNUNrxN53T+/19qwiUEdtKtfvSRDx2leXua5MCI/kevwLK9GEGQu/sG9pn7qodItNun9PgkIX3mAkQh0vNL4vHKQX22Qiwx0kGI9PZOdZZ4tjKCIhJYYJ4FvygsAj8sRhdiEZg+LzuQiDByWWRZx5CIZGQeBcEQx7bH9nd+hd6XTnsI8EHrNEaQD7TTEIE+qG3b5VyOHw08fcoM+0A7LSGBllw9bmCpoj61hRg/jA2yhNMXX7OcY9Ah/bxrZGSRwRFWp26sHBOrD4vI5IgBkpuCVJkiAh1hwE2I7f5NH7Y9fVDk85Ui39JKOQ/MGAzzrYY5W8NMyC9sqcdcKfJ4dQ/BzVus5YVVLkwivm2h4GE2kTq1BzRIVuaTXxB4YBYInfxYJMsJhE5+T6RCZp8bR4BMTNLqgw47mSgE/pJQuYwITB+Wa4DmIq9nMqDt5roIxP7o4g8YWxhGDgGlTwAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/id.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Indonesia</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 06:06:14" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Mobile"><i
                                            class="fa fa-fw fa-mobile"></i></span>
                                    <span>Android</span>
                                </div>

                                <small class="text-muted">Chrome - 360x640</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129530">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>2</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 10:18:27" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129530">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129539">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129539" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAGBQTFRF////VFRUfn5+/Pr969/01NTU9vH6sX7UrHXRwpnd8ej3+fX7uYzYvZLa9O358ur40bLlr3rS9/P70bPl9/P60LPlh4eHr3nS3Nzc0dHRdnZ2rnrSrnnS8+z4zazjrHTQCwrlKQAAAaZJREFUeF7tlVlWwzAMRdWAW0MZMpWxwP53iUZHdpRsAPwBiaXrJ+nluAD/K5zAAVcXRsrmzW0dJyRtRjFwPOV8d+8hL7KOApwfMq7HBjGRIArwRETOz45xnQRRh3SlfNdJiBRpPFshN66wsNI+j5YhN65gONyBDJkQgWpPWguqpg1aPPFzDJ5lcvVf1g1ydasko7W2CNnRLHl9heyIgCUOY4XsiBSkL085h50snuvZp3OFBCKL54r0AOM06Es4LrMP9OxhpgHOCoXjMvsMuejIRekl8kQQKo9reWURXqT0FiFlL+VhGsvbLN28f9iREduhxjCZiNoJkDqBAiQduDBVGj9lZJQoUIB0gqjSRYgsiQStkXQwJOcrfF0rhJTWCJ6jWfgPTERV1ulUL/a4IEVkD6GxLMh3eQzP500ScYh1giVuLp79ouK62kTqQDL7otFqanPt4EC958Gl1N7tiW0zz9soxVZXaKdOs+erKCHtRY3Ts9bQc4n++N+Fghwtr/6eQqSRJouMjsrmWN0gWeSQ/ZufE/k78Ij9LtR7/o2/g+3w3478AiYRFbYFVQJUAAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/tr.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Turkey</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 08:54:06" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129539">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 08:54:06" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129539">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129533">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129533" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAEVQTFRF////4Ob0nq/bwc3qPWC3hJzWiJ/XmKzcnK/eh5/X3OPz+/z9prfhl6rYkaXWpLbg1t7x4uj1+/v9qbni2uHy3uT0oLPfBzcL0gAAATRJREFUeF7tldkWgyAMRHHB1qWrbf//U5tMkIByKvaxlYeGg1xIZqI1Zh9QoCgmIcpyOdOnKldRVY4p69oxOtOnEeEY2ucYnRHhT5wYrGEV+8DoTJ/O7gDj9hGjM0fE9+hiNmK2J0YS+wJzywezUeRvrDTiuU0MVlY7QnWmEtjzBGGZ8B0REVgF0hyEPEpwrvrOE8o7zZvarh84Dn3Xcgz6YHYH+gSEMcwMvTFgTtJDcW7quRDMMCHMOYXo1dZe5PLrDfFO9SQT0wJRAk7n/JAgKaYdIefJbyAyMVwDMSIDbUiJPJnFCtnxgdA8X4h8ZsrK0P1MZHtiU4GUhyu/Yck+lB+4nylyysoRSrJ0q+4vG2bV/cy2jNzPbH7vL7ybjRz3l0ja/f3Lv+XP4te+/Hg9/m28AQDAEd13+LSoAAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/vn.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Vietnam</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 07:15:59" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Mobile"><i
                                            class="fa fa-fw fa-mobile"></i></span>
                                    <span>iOS</span>
                                </div>

                                <small class="text-muted">Safari - 414x736</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129533">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>2</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 08:14:00" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129533">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129537">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129537" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAC1QTFRF////rOPi4+Pj8fHxWcfG7+/vseTketLRgNTTgtXU1fHw3fPzhdXVt+bm8PDwoV9lyQAAAYBJREFUeF7tldlChDAMRcsUdcDR//9cm5sdolN51T4UaHvIckNo7X8gA8tC801H73bruzlVy7oSY0RrxtD7eDchYw2rgnTaVAbEicEarTICwhgmDowQYxWIEMr4bnAsI0YIUyJuOtpQ30rHPMDglcVTh29p9DjU734bd1WSVcoQhzF0w0KH8E3ozsnO84ttF0hvFZLqQCnXvERCHZgd17xGlDk6hsgJeX1T8A4VaZ3r7YBwrujI1vYN173hioNgMiLZpSPr3gZ0fx8zHvkgMQlRPXBm0y0YEYTsRMQUxBkyQ4ONKDKYgLjmjIgZNmJIi6VxAfFinHbMSx7IVPjGaPT79niWZGXYyJyUwhDyYQXz+LlgmOHw8zzUkJYWpbRSrhFvggbpZ/f7T2z4Vln5rD5kMscNIdaEOIGlU7ugNen8J+bbpoRsovMfGJS87oaMXWiwF9p4RqZ+FsmxkVKJRzWXN+Jn6sPDhwhgXPMqfE+yyDYYJZ51fhN64iee/fwrT19I8AztZzVeOQAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/gb.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">United Kingdom</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 07:40:23" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>OS X</span>
                                </div>

                                <small class="text-muted">Chrome - 2560x1440</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129537">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 07:42:47" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129537">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129535">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129535" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAABhQTFRF////W1tbhISE9PT01tbW6urqhIbW8/PzKmI1+QAAATlJREFUeF7tlUsCwjAIRGMb6/1vLBC+ydTfUs1GbHmFDAm09l/tQmtzHfbdzGH1jd/zSlLx3+5+16syu1kGVcSDkJ96htXagCpiQcRPmLDEk6GCWBD1IyYsc+yx3Ubbn4JAJMUgJMl1llgBCHG5dAsiWd7+BLSWk2TPWeQFIDXKs7mUABiPhuMBliTpJyI+oOkA4mDCky2EPMUIEsIrTcj4Tvwe8zkQh6g0Qm6jVDW3D5AIjaLAxKLSEDk5ByHyun0sshULi4xLqfV9B3k/Mavv69v/1uovOp91gRAZIPCKfVT9dEOnzu9valcJ4EFTKr2rEqDzs0PPbXwmUOenBomRuNJh6Qd7GRZbHmHaxxdkmS/PR9I6Ky2SXYO55jxj057HvFVIzwG9DovlQggNckkPdn4Z5CnKz5p3mswO+dNS4tEAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/id.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Indonesia</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 07:22:37" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>OS X</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129535">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 07:22:38" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129535">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129532">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129532" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAE5QTFRF////1NTUfn5+VFRU+Oz47Mfs6Lro+e357cvt0XXR0nnS2IzY2pDa8tjy/fv93Zvd3Znd79Hv9N/0/fr93p7e8dXx8try25Xb7szu+vH6bc/QXwAAAcNJREFUeF7tldtWhDAMRQujMIzORR1v//+j9uQ0CSRdS55d9qWQZucOLeV/lWE8tPXwOLVlZZntadiUSqFS5iMZOz7a0xiqSwhCQno8T/o0HAJSJDwKAenx0Z7GjAAy2xrObPCgBpOvIHB/FsMvSHXSAqtOeoFlHuWjFH3I51kCJ0TgZBciPRJL0uyVTW3fNC2dZYo+BxAp1CEWQ3wOKCIkyOmJ5DM3RXwO3G+NXIjz5Yr9ejmfsKuCz4EhCE+IUsBcL6UI0xR8DlZEfSQBBgSZprGauw2zLDe+v7zK/lbzocDnYAPAiwRUI0J8EmBDfA4yAgY5VIZlEBWfg0DAy7Lc32U7fXzKLjo+B0QwFuyT6PSQaBsIpwFEN7AO0oaBhKSPkq3SD4w5qbnceJaKnBCdOG/lXXRQuqDMV81E+pIG5uu7A7Vy1ROkH8eyVnP7pcBCK1dD4vBLCyLk3w68xAUkQW4iquOdSIDwK+CPUux1sk0iILwJgMSwkzoE5qTsdQKkXTd7nVREf/k7M0Fgeqd5Jt6JcXvhMTVzUrxcXtQaQ4bMyWoOpNxSPGlBhPze9J4AIQQkQW7Ce0IEEJEEddv194U/jnwVO2XQK34AAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/ua.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Ukraine</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 06:16:09" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129532">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 06:19:03" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129532">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129531">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129531" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAD9QTFRF////y9viYpOoLm+M+fz92Ory7vb5ZKvKWaXHhb3V4/D1wNTc8/n7dLTQfLjSfLjT6fP35vH2rNLjfLfTWaTH/+oHxgAAAVhJREFUeF7tlNtWxDAIRXvRMd6d0f//VoEEQuGwVn0eeWpCdggHyrL8m1Ng3fZhtrmWAj08dpdCdnDjL/U6/PLU2vOLh9T5ui+L9+r+23sj+9AlR9LvbV+699NFoM8vJlq72u4qzyFbCU5edsBNQTge9MLQI0jxMJjgCFKkT14go2TShYBeeXk0KWzclDWoOTp37INUc4So8OrrEDppJ/ITR81vB3N3UB9kk5pXCPdBYRXi+i6SBcIlikd1XSBcor8h1gcIw1FiH3BbWJ0wEi9nxLrhNDKb4TQyW+4s4jruLOL6OiEbGn5TLhImIaRmhqZcUUteSwkiFP+dI8hIguIVCEmQHpL70OvQXh87jKCYYCjpbMdB6sn/LerkIHD82qCGmXTvz/WQz0AuFEWDuEpAxEJPuZyo8GE2+WcmvnwofXpll3HWhJEZCYismU25OlLWHJX2LvZ+AX4CFsvfIiK5AAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/id.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Indonesia</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 06:12:02" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Mobile"><i
                                            class="fa fa-fw fa-mobile"></i></span>
                                    <span>Android</span>
                                </div>

                                <small class="text-muted">Chrome - 360x800</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129531">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 06:12:03" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129531">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129529">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129529" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAADNQTFRF////oqKiRkZG/v7++Pj4/Pz85OTk4+Pj6urq+vr6/f395+fn6Ojo6enp+/v7WZHHrMjj4CuoZQAAATpJREFUeF7tlduWwyAIRYnTjJ3OJfn/ry2oINFjV8zr1JcQ4w5HQCR6jxqBBQUDTurCJYj1cdP3bIUXzBIYWT9jvH8JpFYYM0wEenxHHj9MZOuXiKcHfoQI9CdEjOzGLJmHTCKGCGIyocJYzkEY8lOIwfaTgEabEjjIiWgYIxLSjkJ0fsq6DYz2F/aeMw2ITZbUijBAM42RWhHVo2UaIvbVS7RMQ6RWhGN6ZN+NdkXkkE7YTmRMrQMvzAq9/JqJyvgDcYB8kBNhjJggyEonL4VQRr8NnlPItLAm+0mahgxv/0KQL6SyICu9Kpj1ELJOmEfPZf/gDG+fXU4fMZUJ94LSfqVdzDclovnWZ8yg87eNL+9uvo0XP3rOOdNWEV1zrREUPy7TJ66k5Gfy4hNGfM5cr8zARKPJfzv3BOCfIatu7UT+AAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/us.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">United States</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 05:54:57" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129529">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 05:57:05" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129529">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129528">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129528" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAADZQTFRF////6LrO0XWe/Pj66tDc9uvwrUVzqDhqv22R8N7m+fH1tlmDuWKJuWKK8+Xr8uHoumKK6Ojo3LY1SAAAAP1JREFUeF7tldsSgyAMRNHW0rv6/z/bcEuC7lBRpw8deWkkPSbsMtGYY3kFmqYkBMo2bZuY0znBHKksv5j2ItNdrL3eXEIiyUonfs8z94el9aRUiF6uZ87OCMe8HWFtbySKhHTuQLW5FFGlQzvD18ZiHS/Z0uN7plLkNVZG+UawRNlJFJwGxOj+KDeCsXRojIgkUoelJSTsyu8Y78GQtxUN7AxEOKsh9ryE0CVSa0Vj7Dmsom5EVohFnh+fdoDIicYiZ++ePlQh1Y0p98FZ9nW/L7qfW/l792c663mA3QfIfu6j2S5toGz9UNo++Qdq6Zj8xc/rhsk/nQV//vwBRqMd/TVPyiQAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/mx.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Mexico</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 05:37:13" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1920x1080</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129528">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 05:37:20" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129528">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129527">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129527" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAEVQTFRF////zcHq2dDv+fn52dnZ8u/57u7uZWVlW1tbhoaG4+Pj9PT0dnZ2fX19fn5+6enp5ubmm4TW3NPw9fL68e75183uWlpaBXurtAAAAVlJREFUeF7tlUl2AyEMRAUJDhltZ7r/UaMBaAEFed6blS31p6RSPzXR/UAHAp8IMy348NjnBUnLLCdOTzk/v3jIi8xZote3zOd9QKqIZT/6Ks5C5HxxUdcJyBK1YGzlu04g0qT57gI5u2BhrX21ViFnFzBHOzCTBTGon8k4gq7pCh0zcWn08wqO6qKHLQaIqyAbzQWyESFGqlyT3YssECByzByrgE6OmUMEiJDaqFdBBIgoYhBCPtFMDBEImfyFkBaDyPdPvRKxERVGlKJBAEkBIxUCSFwiBs1IChtEoBnhileFzQ9rhEVuRcQWVpnOQqGI3Iio95MEB9YqfSbV8YWwRIa1w4b6mYOlNO72pHcbhL4LdfO73R5LOQKV78I/m59HVDvgmdsa/710TZXdfqpBufs4EBk+SfIeOGS/+e1BGZGvYjSn5JyNIjJMA5jcdabvQRe5/2kO/AE70hlhriTJOwAAAABJRU5ErkJggg=="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/in.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">India</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 04:18:00" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Desktop"><i
                                            class="fa fa-fw fa-desktop"></i></span>
                                    <span>Windows</span>
                                </div>

                                <small class="text-muted">Chrome - 1440x900</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129527">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 04:18:00" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129527">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129526">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129526" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAABVQTFRF////wczq4OX0hJrWnq7bPV23pLPdd2eu8AAAAOJJREFUeF7tlcESgzAIRJMY+/+fXIbBbIGtk3hUe6JsngGW2lLej06g1mMQreUIKsZVt82YVqsxiKA6whg5ZwwiIcYTD0ZzmtVzyiCCGu5Qxs4Jg8gIfw+S00hZL0xGPBqcbV+ZxSFfsbLAc0wSEVOlhbEnmWEqms7nzdXwRDj9lwhVwMATwjME6X3QRBUtFdb3PTGsGeSESEwaqBujEoFJhNQW7ggMIS4g64UF9yfaXx8yMat/zq0kyM/mcDUV5naNq6H9sJ1clSxzy1iusp8qLqPq++Zf+bO425s/bOIzvn4B3twFyweCLHIAAAAASUVORK5CYII="
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/ua.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Ukraine</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 03:06:29" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Mobile"><i
                                            class="fa fa-fw fa-mobile"></i></span>
                                    <span>iOS</span>
                                </div>

                                <small class="text-muted">Safari - 375x812</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129526">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 03:06:29" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129526">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>


                        <tr data-visitor-id="129525">
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="https://66analytics.com/demo/visitor/129525" class="mr-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAABhQTFRF////w+WyTExMeHh4iMxm0tLSv+Otu+KoV+N6zwAAAS5JREFUeF7tlFsSgyAMRRGk3f+Om4S8kKtOx8/Wj5oGDnlcTCn/59CBbTPHsCo97bJL274roxYj/QqhfcqYdRdE9gnj1k0Q3UdMWLCS5qliBFRC55gXJYbaJW1UCJQPghRGHCJmbjIKoohBRylREJFpbBwtnn9jddZT0zlBItmgrGiMREsOBJdNyPDGe497kBILARHystB+w7l0dyLkjZAIjRCYmMahwBAZTE5Lioomr+X7aipfGDnF0s7vWH2MfJ9YUh/U8kvqL9LE3Zh1iSYDxO7GYynHATIZlnHRxgSq9RBF/vL80RSz1RUCSKdzQums+YAA0mr6nITwMVgYWpFeq+6bJr9t7GBs0jnxnQe8nu0eCnKRGAS5LWflQ6BwEC4QNBkDpIkii5RnwG/6P67MCv1vwmRDAAAAAElFTkSuQmCC"
                                            class="visitor-avatar rounded-circle" alt="" />
                                    </a>

                                    <div class="d-flex flex-column">
                                        <div>
                                            <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/ng.svg"
                                                class="img-fluid icon-favicon mr-1" />

                                            <span class="align-middle">Nigeria</span>
                                        </div>
                                        <small class="text-muted">Since <span data-toggle="tooltip"
                                                title="2021-08-20 02:20:52" class="text-muted">20 August,
                                                2021</span></small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="mr-1" data-toggle="tooltip" title="Mobile"><i
                                            class="fa fa-fw fa-mobile"></i></span>
                                    <span>Android</span>
                                </div>

                                <small class="text-muted">Chrome - 320x640</small>
                            </td>

                            <td>
                                <a href="https://66analytics.com/demo/visitor/129525">
                                    <i class="fa fa-fw fa-hourglass-half fa-sm text-muted"></i>
                                    <strong>1</strong> Sessions </a>
                            </td>

                            <td>
                                <span data-toggle="tooltip" title="2021-08-20 02:23:17" class="text-muted">20 August,
                                    2021</span>
                            </td>

                            <td>
                                <a href="#" class="text-muted text-decoration-none" data-toggle="modal"
                                    data-target="#visitor_delete" data-visitor-id="129525">
                                    <span data-toggle="tooltip" title="Delete"><i
                                            class="fa fa-fw fa-times fa-sm"></i></span>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="">
                        <p class="text-muted">
                            Showing 1-25 out of 1423 results. </p>
                    </div>

                    <div class="">
                        <ul class="pagination">

                            <li class="page-item active">
                                <a href="https://66analytics.com/demo/visitors?page=1" class="page-link">1</a>
                            </li>
                            <li class="page-item ">
                                <a href="https://66analytics.com/demo/visitors?page=2" class="page-link">2</a>
                            </li>
                            <li class="page-item ">
                                <a href="https://66analytics.com/demo/visitors?page=3" class="page-link">3</a>
                            </li>
                            <li class="page-item ">
                                <a href="https://66analytics.com/demo/visitors?page=4" class="page-link">4</a>
                            </li>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                            <li class="page-item ">
                                <a href="https://66analytics.com/demo/visitors?page=57" class="page-link">57</a>
                            </li>

                            <li class="page-item"><a href="https://66analytics.com/demo/visitors?page=2"
                                    class="page-link" aria-label="Next">›</a></li>
                        </ul>
                    </div>
                </div>


            </div>


        </section>

        <input type="hidden" name="start_date" value="2021-07-21 00:00:00" />
        <input type="hidden" name="end_date" value="2021-08-20 00:00:00" />
        <input type="hidden" name="website_id" value="895" />


    </main>



    <div id="loading" style="display: none;">
        <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading..</span>
            </div>
        </div>
    </div>


    <div class="modal fade" id="visitor_delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-gray-700"></i>
                        Delete Visitor
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="visitor_delete" method="post" role="form">
                        <input type="hidden" name="token" value="4dfa9e9964f9864eb63bf8b2a2d9a345"
                            required="required" />
                        <input type="hidden" name="visitor_id" value="" />

                        <div class="notification-container"></div>

                        <p class="text-muted">By deleting the visitor, all the pageviews and all the events of this user
                            will be deleted as well. This action cannot be undone.</p>

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-lg btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


</x-app-layout>
