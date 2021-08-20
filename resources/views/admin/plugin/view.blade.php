@extends('admin.admin')
@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
        <h1 class="h3"><i class="fa fa-fw fa-xs fa-users text-primary-900 mr-2"></i> Users management</h1>

        <div class="col-auto d-flex">

            <div class="">
                <a href="https://66analytics.com/demo/admin/user-create" class="btn btn-outline-primary"><i
                        class="fa fa-fw fa-plus-circle"></i> Create user</a>
            </div>

            <div class="ml-3">
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle-simple" data-toggle="dropdown"
                        title="Export">
                        <i class="fa fa-fw fa-sm fa-download"></i>
                    </button>

                    <div class="dropdown-menu  dropdown-menu-right">
                        <a href="https://66analytics.com/demo/admin/users?&export=csv" target="_blank"
                            class="dropdown-item">
                            <i class="fa fa-fw fa-sm fa-file-csv mr-1"></i> Export to CSV </a>
                        <a href="https://66analytics.com/demo/admin/users?&export=json" target="_blank"
                            class="dropdown-item">
                            <i class="fa fa-fw fa-sm fa-file-code mr-1"></i> Export to JSON </a>
                    </div>
                </div>
            </div>

            <div class="ml-3">
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary filters-button dropdown-toggle-simple"
                        data-toggle="dropdown" title="Filters">
                        <i class="fa fa-fw fa-sm fa-filter"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right filters-dropdown">
                        <div class="dropdown-header d-flex justify-content-between">
                            <span class="h6 m-0">Filters</span>

                        </div>

                        <div class="dropdown-divider"></div>

                        <form action="" method="get" role="form">
                            <div class="form-group px-4">
                                <label for="search" class="small">Search</label>
                                <input type="search" name="search" id="search" class="form-control form-control-sm"
                                    value="" />
                            </div>

                            <div class="form-group px-4">
                                <label for="search_by" class="small">Search by</label>
                                <select name="search_by" id="search_by" class="form-control form-control-sm">
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="active" class="small">Status</label>
                                <select name="active" id="active" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="1">Active</option>
                                    <option value="0">Unconfirmed</option>
                                    <option value="2">Disabled</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="plan_id" class="small">Plan</label>
                                <select name="plan_id" id="plan_id" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="free">Free</option>
                                    <option value="trial">Trial</option>
                                    <option value="custom">Custom</option>
                                    <option value="1">Gold</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="country" class="small">Country</label>
                                <select name="country" id="country" class="form-control form-control-sm">
                                    <option value="">All</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="CD">Democratic Republic of the Congo</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="TL">East Timor</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="CG">Republic of the Congo</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="VI">U.S. Virgin Islands</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="order_by" class="small">Order by</label>
                                <select name="order_by" id="order_by" class="form-control form-control-sm">
                                    <option value="date">Registration date</option>
                                    <option value="last_activity">Last activity</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="total_logins">Total logins</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="order_type" class="small">Order type</label>
                                <select name="order_type" id="order_type" class="form-control form-control-sm">
                                    <option value="ASC">Ascending</option>
                                    <option value="DESC">Descending</option>
                                </select>
                            </div>

                            <div class="form-group px-4">
                                <label for="results_per_page" class="small">Results per page</label>
                                <select name="results_per_page" id="results_per_page" class="form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25" selected="selected">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="250">250</option>
                                </select>
                            </div>

                            <div class="form-group px-4 mt-4">
                                <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="ml-3">
                <button id="bulk_enable" type="button" class="btn btn-outline-secondary" data-toggle="tooltip"
                    title="Bulk actions"><i class="fa fa-fw fa-sm fa-list"></i></button>

                <div id="bulk_group" class="btn-group d-none" role="group">
                    <div class="btn-group" role="group">
                        <button id="bulk_actions" type="button" class="btn btn-outline-primary dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bulk actions <span id="bulk_counter" class="d-none"></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="bulk_actions">
                            <a href="#" class="dropdown-item" data-toggle="modal"
                                data-target="#bulk_delete_modal">Delete</a>
                        </div>
                    </div>

                    <button id="bulk_disable" type="button" class="btn btn-outline-secondary" data-toggle="tooltip"
                        title="Close"><i class="fa fa-fw fa-times"></i></button>
                </div>
            </div>

        </div>
    </div>


    <form id="table" action="https://66analytics.com/demo/admin/users/bulk" method="post" role="form">
        <input type="hidden" name="token" value="faaedf3a610fb2487eca4f698a532f32" />
        <input type="hidden" name="type" value="" data-bulk-type />

        <div class="table-responsive table-custom-container">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="bulk_select_all" type="checkbox" class="custom-control-input" />
                                <label class="custom-control-label" for="bulk_select_all"></label>
                            </div>
                        </th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Plan</th>
                        <th>Details</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_1" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="1" />
                                <label class="custom-control-label" for="selected_user_id_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/1" class="font-weight-bold"
                                            data-toggle="tooltip" title="Admin">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Custom</span>

                                <div>
                                    <small class="text-muted" data-toggle="tooltip" title="Plan expiration date">2025-05-27
                                        00:00:00</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2020-01-20 12:20:20">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-20 11:00:25">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 6,995">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bangladesh" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/1"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/1"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="1"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="1"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_2" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="2" />
                                <label class="custom-control-label" for="selected_user_id_2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/2">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 11:08:15">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 11:08:38">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/vn.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Vietnam" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/2"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/2"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="2"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="2"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_3" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="3" />
                                <label class="custom-control-label" for="selected_user_id_3"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/3">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 11:11:33">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 11:14:15">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/in.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="India" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/3"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/3"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="3"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="3"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_4" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="4" />
                                <label class="custom-control-label" for="selected_user_id_4"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/4">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 11:17:44">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 11:27:19">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/in.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="India" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/4"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/4"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="4"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="4"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_5" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="5" />
                                <label class="custom-control-label" for="selected_user_id_5"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/5">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 11:53:01">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 12:02:56">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/pk.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Pakistan" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/5"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/5"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="5"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="5"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_6" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="6" />
                                <label class="custom-control-label" for="selected_user_id_6"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/6">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 12:22:37">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 12:44:26">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/in.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="India" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/6"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/6"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="6"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="6"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_7" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="7" />
                                <label class="custom-control-label" for="selected_user_id_7"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/7">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 12:27:25">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 12:34:56">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/in.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="India" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/7"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/7"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="7"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="7"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_8" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="8" />
                                <label class="custom-control-label" for="selected_user_id_8"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/8">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 14:12:27">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 14:14:16">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/ma.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Morocco" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/8"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/8"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="8"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="8"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_9" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="9" />
                                <label class="custom-control-label" for="selected_user_id_9"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/9">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-18 19:19:37">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-18 19:21:36">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bangladesh" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/9"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/9"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="9"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="9"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_10" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="10" />
                                <label class="custom-control-label" for="selected_user_id_10"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/10">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-19 13:06:49">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-19 14:09:48">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 2">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bd.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bangladesh" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/10"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/10"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="10"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="10"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-bulk-table class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input id="selected_user_id_11" type="checkbox" class="custom-control-input"
                                    name="selected[]" value="11" />
                                <label class="custom-control-label" for="selected_user_id_11"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <img src="https://www.gravatar.com/avatar/9fcffd7671de3147aa8e5092b0287a14?s=80&d=mp&r=g"
                                    class="user-avatar rounded-circle mr-3" alt="" />

                                <div class="d-flex flex-column">
                                    <div>
                                        <a href="https://66analytics.com/demo/admin/user-view/11">hidden on demo</a>
                                    </div>

                                    <span class="text-muted">hidden@demo.com</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-success"><i class="fa fa-fw fa-check"></i> Active
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>Free</span>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2" data-toggle="tooltip" title="Registration date: 2021-08-20 07:34:25">
                                    <i class="fa fa-fw fa-clock text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Last activity: 2021-08-20 07:45:39">
                                    <i class="fa fa-fw fa-history text-muted"></i>
                                </span>

                                <span class="mr-2" data-toggle="tooltip" title="Total logins: 1">
                                    <i class="fa fa-fw fa-user-clock text-muted"></i>
                                </span>

                                <img src="https://66analytics.com/demo/themes/altum/assets/images/countries/bg.svg"
                                    class="img-fluid icon-favicon mr-2" data-toggle="tooltip" title="Bulgaria" />
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="admin/user-view/11"><i
                                            class="fa fa-fw fa-sm fa-eye mr-1"></i> View</a>
                                    <a class="dropdown-item" href="admin/user-update/11"><i
                                            class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>
                                    <a href="#" data-toggle="modal" data-target="#user_delete_modal" data-user-id="11"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                    <a href="#" data-toggle="modal" data-target="#user_login_modal" data-user-id="11"
                                        class="dropdown-item"><i class="fa fa-fw fa-sm fa-sign-in-alt mr-1"></i> Login</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <div class="mt-3">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="">
                <p class="text-muted">
                    Showing 1-11 out of 11 results. </p>
            </div>

            <div class="">
                <ul class="pagination">


                </ul>
            </div>
        </div>


    </div>


@endsection
