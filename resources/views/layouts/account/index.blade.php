<x-app-layout>
    <div class="p-3 p-md-5">
        <main>
            <div class="row">
                <div class="col-12 col-xl-3 mb-3 mb-xl-0">
                    <div class="container">
                        <ul class="nav nav-pills flex-column flex-md-row flex-xl-column">
                            <li class="nav-item">
                                <a href="account" class="nav-link active">
                                    <i class="fa fa-fw fa-sm fa-wrench mr-1"></i> Account </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-plan" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-box-open mr-1"></i> Plan </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-payments" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-logs" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-scroll mr-1"></i> Logs </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-api" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-code mr-1"></i> API </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-delete" class="nav-link ">
                                    <i class="fa fa-fw fa-sm fa-times mr-1"></i> Delete account </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <header class="header">
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <img src="https://www.gravatar.com/avatar/21a393b4dc948271a5142d2e898bc39e?s=80&d=mp&r=g"
                                        class="d-none d-md-block mr-3 user-avatar" />
                                    <div class="d-flex flex-column">
                                        <span class="h3">Rakibul Islam</span>
                                        <div>
                                            <span class="badge badge-success">Free Plan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <section class="container">
                        <form action="" method="post" role="form" class="mt-5">
                            <input type="hidden" name="token" value="14b7f0f981a356714952fe0a216ae006" />
                            <div class="row mb-5">
                                <div class="col-12 col-xl-4">
                                    <h2 class="h4">Settings</h2>
                                    <p class="text-muted">Basic profile settings of your account.</p>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control form-control-lg "
                                            value="Rakibul Islam" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control form-control-lg "
                                            value="kuyashaafrim18@gmail.com" />
                                    </div>
                                    <div class="form-group">
                                        <label for="timezone">Timezone</label>
                                        <select id="timezone" name="timezone" class="form-control form-control-lg">
                                            <option value="Africa/Abidjan">Africa/Abidjan</option>
                                            <option value="Africa/Accra">Africa/Accra</option>
                                            <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                            <option value="Africa/Algiers">Africa/Algiers</option>
                                            <option value="Africa/Asmara">Africa/Asmara</option>
                                            <option value="Africa/Bamako">Africa/Bamako</option>
                                            <option value="Africa/Bangui">Africa/Bangui</option>
                                            <option value="Africa/Banjul">Africa/Banjul</option>
                                            <option value="Africa/Bissau">Africa/Bissau</option>
                                            <option value="Africa/Blantyre">Africa/Blantyre</option>
                                            <option value="Africa/Brazzaville">Africa/Brazzaville</option>
                                            <option value="Africa/Bujumbura">Africa/Bujumbura</option>
                                            <option value="Africa/Cairo">Africa/Cairo</option>
                                            <option value="Africa/Casablanca">Africa/Casablanca</option>
                                            <option value="Africa/Ceuta">Africa/Ceuta</option>
                                            <option value="Africa/Conakry">Africa/Conakry</option>
                                            <option value="Africa/Dakar">Africa/Dakar</option>
                                            <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                            <option value="Africa/Djibouti">Africa/Djibouti</option>
                                            <option value="Africa/Douala">Africa/Douala</option>
                                            <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                            <option value="Africa/Freetown">Africa/Freetown</option>
                                            <option value="Africa/Gaborone">Africa/Gaborone</option>
                                            <option value="Africa/Harare">Africa/Harare</option>
                                            <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                            <option value="Africa/Juba">Africa/Juba</option>
                                            <option value="Africa/Kampala">Africa/Kampala</option>
                                            <option value="Africa/Khartoum">Africa/Khartoum</option>
                                            <option value="Africa/Kigali">Africa/Kigali</option>
                                            <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                            <option value="Africa/Lagos">Africa/Lagos</option>
                                            <option value="Africa/Libreville">Africa/Libreville</option>
                                            <option value="Africa/Lome">Africa/Lome</option>
                                            <option value="Africa/Luanda">Africa/Luanda</option>
                                            <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                                            <option value="Africa/Lusaka">Africa/Lusaka</option>
                                            <option value="Africa/Malabo">Africa/Malabo</option>
                                            <option value="Africa/Maputo">Africa/Maputo</option>
                                            <option value="Africa/Maseru">Africa/Maseru</option>
                                            <option value="Africa/Mbabane">Africa/Mbabane</option>
                                            <option value="Africa/Mogadishu">Africa/Mogadishu</option>
                                            <option value="Africa/Monrovia">Africa/Monrovia</option>
                                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                                            <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                            <option value="Africa/Niamey">Africa/Niamey</option>
                                            <option value="Africa/Nouakchott">Africa/Nouakchott</option>
                                            <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                                            <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                                            <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                            <option value="Africa/Tripoli">Africa/Tripoli</option>
                                            <option value="Africa/Tunis">Africa/Tunis</option>
                                            <option value="Africa/Windhoek">Africa/Windhoek</option>
                                            <option value="America/Adak">America/Adak</option>
                                            <option value="America/Anchorage">America/Anchorage</option>
                                            <option value="America/Anguilla">America/Anguilla</option>
                                            <option value="America/Antigua">America/Antigua</option>
                                            <option value="America/Araguaina">America/Araguaina</option>
                                            <option value="America/Argentina/Buenos_Aires">
                                                America/Argentina/Buenos_Aires</option>
                                            <option value="America/Argentina/Catamarca">
                                                America/Argentina/Catamarca</option>
                                            <option value="America/Argentina/Cordoba">America/Argentina/Cordoba
                                            </option>
                                            <option value="America/Argentina/Jujuy">America/Argentina/Jujuy
                                            </option>
                                            <option value="America/Argentina/La_Rioja">
                                                America/Argentina/La_Rioja</option>
                                            <option value="America/Argentina/Mendoza">America/Argentina/Mendoza
                                            </option>
                                            <option value="America/Argentina/Rio_Gallegos">
                                                America/Argentina/Rio_Gallegos</option>
                                            <option value="America/Argentina/Salta">America/Argentina/Salta
                                            </option>
                                            <option value="America/Argentina/San_Juan">
                                                America/Argentina/San_Juan</option>
                                            <option value="America/Argentina/San_Luis">
                                                America/Argentina/San_Luis</option>
                                            <option value="America/Argentina/Tucuman">America/Argentina/Tucuman
                                            </option>
                                            <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia
                                            </option>
                                            <option value="America/Aruba">America/Aruba</option>
                                            <option value="America/Asuncion">America/Asuncion</option>
                                            <option value="America/Atikokan">America/Atikokan</option>
                                            <option value="America/Bahia">America/Bahia</option>
                                            <option value="America/Bahia_Banderas">America/Bahia_Banderas
                                            </option>
                                            <option value="America/Barbados">America/Barbados</option>
                                            <option value="America/Belem">America/Belem</option>
                                            <option value="America/Belize">America/Belize</option>
                                            <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                            <option value="America/Boa_Vista">America/Boa_Vista</option>
                                            <option value="America/Bogota">America/Bogota</option>
                                            <option value="America/Boise">America/Boise</option>
                                            <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                            <option value="America/Campo_Grande">America/Campo_Grande</option>
                                            <option value="America/Cancun">America/Cancun</option>
                                            <option value="America/Caracas">America/Caracas</option>
                                            <option value="America/Cayenne">America/Cayenne</option>
                                            <option value="America/Cayman">America/Cayman</option>
                                            <option value="America/Chicago">America/Chicago</option>
                                            <option value="America/Chihuahua">America/Chihuahua</option>
                                            <option value="America/Costa_Rica">America/Costa_Rica</option>
                                            <option value="America/Creston">America/Creston</option>
                                            <option value="America/Cuiaba">America/Cuiaba</option>
                                            <option value="America/Curacao">America/Curacao</option>
                                            <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                            <option value="America/Dawson">America/Dawson</option>
                                            <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                            <option value="America/Denver">America/Denver</option>
                                            <option value="America/Detroit">America/Detroit</option>
                                            <option value="America/Dominica">America/Dominica</option>
                                            <option value="America/Edmonton">America/Edmonton</option>
                                            <option value="America/Eirunepe">America/Eirunepe</option>
                                            <option value="America/El_Salvador">America/El_Salvador</option>
                                            <option value="America/Fort_Nelson">America/Fort_Nelson</option>
                                            <option value="America/Fortaleza">America/Fortaleza</option>
                                            <option value="America/Glace_Bay">America/Glace_Bay</option>
                                            <option value="America/Goose_Bay">America/Goose_Bay</option>
                                            <option value="America/Grand_Turk">America/Grand_Turk</option>
                                            <option value="America/Grenada">America/Grenada</option>
                                            <option value="America/Guadeloupe">America/Guadeloupe</option>
                                            <option value="America/Guatemala">America/Guatemala</option>
                                            <option value="America/Guayaquil">America/Guayaquil</option>
                                            <option value="America/Guyana">America/Guyana</option>
                                            <option value="America/Halifax">America/Halifax</option>
                                            <option value="America/Havana">America/Havana</option>
                                            <option value="America/Hermosillo">America/Hermosillo</option>
                                            <option value="America/Indiana/Indianapolis">
                                                America/Indiana/Indianapolis</option>
                                            <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                            <option value="America/Indiana/Marengo">America/Indiana/Marengo
                                            </option>
                                            <option value="America/Indiana/Petersburg">
                                                America/Indiana/Petersburg</option>
                                            <option value="America/Indiana/Tell_City">America/Indiana/Tell_City
                                            </option>
                                            <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                            <option value="America/Indiana/Vincennes">America/Indiana/Vincennes
                                            </option>
                                            <option value="America/Indiana/Winamac">America/Indiana/Winamac
                                            </option>
                                            <option value="America/Inuvik">America/Inuvik</option>
                                            <option value="America/Iqaluit">America/Iqaluit</option>
                                            <option value="America/Jamaica">America/Jamaica</option>
                                            <option value="America/Juneau">America/Juneau</option>
                                            <option value="America/Kentucky/Louisville">
                                                America/Kentucky/Louisville</option>
                                            <option value="America/Kentucky/Monticello">
                                                America/Kentucky/Monticello</option>
                                            <option value="America/Kralendijk">America/Kralendijk</option>
                                            <option value="America/La_Paz">America/La_Paz</option>
                                            <option value="America/Lima">America/Lima</option>
                                            <option value="America/Los_Angeles">America/Los_Angeles</option>
                                            <option value="America/Lower_Princes">America/Lower_Princes</option>
                                            <option value="America/Maceio">America/Maceio</option>
                                            <option value="America/Managua">America/Managua</option>
                                            <option value="America/Manaus">America/Manaus</option>
                                            <option value="America/Marigot">America/Marigot</option>
                                            <option value="America/Martinique">America/Martinique</option>
                                            <option value="America/Matamoros">America/Matamoros</option>
                                            <option value="America/Mazatlan">America/Mazatlan</option>
                                            <option value="America/Menominee">America/Menominee</option>
                                            <option value="America/Merida">America/Merida</option>
                                            <option value="America/Metlakatla">America/Metlakatla</option>
                                            <option value="America/Mexico_City">America/Mexico_City</option>
                                            <option value="America/Miquelon">America/Miquelon</option>
                                            <option value="America/Moncton">America/Moncton</option>
                                            <option value="America/Monterrey">America/Monterrey</option>
                                            <option value="America/Montevideo">America/Montevideo</option>
                                            <option value="America/Montserrat">America/Montserrat</option>
                                            <option value="America/Nassau">America/Nassau</option>
                                            <option value="America/New_York">America/New_York</option>
                                            <option value="America/Nipigon">America/Nipigon</option>
                                            <option value="America/Nome">America/Nome</option>
                                            <option value="America/Noronha">America/Noronha</option>
                                            <option value="America/North_Dakota/Beulah">
                                                America/North_Dakota/Beulah</option>
                                            <option value="America/North_Dakota/Center">
                                                America/North_Dakota/Center</option>
                                            <option value="America/North_Dakota/New_Salem">
                                                America/North_Dakota/New_Salem</option>
                                            <option value="America/Nuuk">America/Nuuk</option>
                                            <option value="America/Ojinaga">America/Ojinaga</option>
                                            <option value="America/Panama">America/Panama</option>
                                            <option value="America/Pangnirtung">America/Pangnirtung</option>
                                            <option value="America/Paramaribo">America/Paramaribo</option>
                                            <option value="America/Phoenix">America/Phoenix</option>
                                            <option value="America/Port-au-Prince">America/Port-au-Prince
                                            </option>
                                            <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                            <option value="America/Porto_Velho">America/Porto_Velho</option>
                                            <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                            <option value="America/Punta_Arenas">America/Punta_Arenas</option>
                                            <option value="America/Rainy_River">America/Rainy_River</option>
                                            <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                            <option value="America/Recife">America/Recife</option>
                                            <option value="America/Regina">America/Regina</option>
                                            <option value="America/Resolute">America/Resolute</option>
                                            <option value="America/Rio_Branco">America/Rio_Branco</option>
                                            <option value="America/Santarem">America/Santarem</option>
                                            <option value="America/Santiago">America/Santiago</option>
                                            <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                            <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                                            <option value="America/Scoresbysund">America/Scoresbysund</option>
                                            <option value="America/Sitka">America/Sitka</option>
                                            <option value="America/St_Barthelemy">America/St_Barthelemy</option>
                                            <option value="America/St_Johns">America/St_Johns</option>
                                            <option value="America/St_Kitts">America/St_Kitts</option>
                                            <option value="America/St_Lucia">America/St_Lucia</option>
                                            <option value="America/St_Thomas">America/St_Thomas</option>
                                            <option value="America/St_Vincent">America/St_Vincent</option>
                                            <option value="America/Swift_Current">America/Swift_Current</option>
                                            <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                            <option value="America/Thule">America/Thule</option>
                                            <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                                            <option value="America/Tijuana">America/Tijuana</option>
                                            <option value="America/Toronto">America/Toronto</option>
                                            <option value="America/Tortola">America/Tortola</option>
                                            <option value="America/Vancouver">America/Vancouver</option>
                                            <option value="America/Whitehorse">America/Whitehorse</option>
                                            <option value="America/Winnipeg">America/Winnipeg</option>
                                            <option value="America/Yakutat">America/Yakutat</option>
                                            <option value="America/Yellowknife">America/Yellowknife</option>
                                            <option value="Antarctica/Casey">Antarctica/Casey</option>
                                            <option value="Antarctica/Davis">Antarctica/Davis</option>
                                            <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville
                                            </option>
                                            <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                            <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                            <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                                            <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                            <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                            <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                            <option value="Antarctica/Troll">Antarctica/Troll</option>
                                            <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                                            <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                                            <option value="Asia/Aden">Asia/Aden</option>
                                            <option value="Asia/Almaty">Asia/Almaty</option>
                                            <option value="Asia/Amman">Asia/Amman</option>
                                            <option value="Asia/Anadyr">Asia/Anadyr</option>
                                            <option value="Asia/Aqtau">Asia/Aqtau</option>
                                            <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                            <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                            <option value="Asia/Atyrau">Asia/Atyrau</option>
                                            <option value="Asia/Baghdad">Asia/Baghdad</option>
                                            <option value="Asia/Bahrain">Asia/Bahrain</option>
                                            <option value="Asia/Baku">Asia/Baku</option>
                                            <option value="Asia/Bangkok">Asia/Bangkok</option>
                                            <option value="Asia/Barnaul">Asia/Barnaul</option>
                                            <option value="Asia/Beirut">Asia/Beirut</option>
                                            <option value="Asia/Bishkek">Asia/Bishkek</option>
                                            <option value="Asia/Brunei">Asia/Brunei</option>
                                            <option value="Asia/Chita">Asia/Chita</option>
                                            <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                            <option value="Asia/Colombo">Asia/Colombo</option>
                                            <option value="Asia/Damascus">Asia/Damascus</option>
                                            <option value="Asia/Dhaka">Asia/Dhaka</option>
                                            <option value="Asia/Dili">Asia/Dili</option>
                                            <option value="Asia/Dubai">Asia/Dubai</option>
                                            <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                            <option value="Asia/Famagusta">Asia/Famagusta</option>
                                            <option value="Asia/Gaza">Asia/Gaza</option>
                                            <option value="Asia/Hebron">Asia/Hebron</option>
                                            <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                            <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                            <option value="Asia/Hovd">Asia/Hovd</option>
                                            <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                            <option value="Asia/Jakarta">Asia/Jakarta</option>
                                            <option value="Asia/Jayapura">Asia/Jayapura</option>
                                            <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                            <option value="Asia/Kabul">Asia/Kabul</option>
                                            <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                            <option value="Asia/Karachi">Asia/Karachi</option>
                                            <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                            <option value="Asia/Khandyga">Asia/Khandyga</option>
                                            <option value="Asia/Kolkata">Asia/Kolkata</option>
                                            <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                            <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                            <option value="Asia/Kuching">Asia/Kuching</option>
                                            <option value="Asia/Kuwait">Asia/Kuwait</option>
                                            <option value="Asia/Macau">Asia/Macau</option>
                                            <option value="Asia/Magadan">Asia/Magadan</option>
                                            <option value="Asia/Makassar">Asia/Makassar</option>
                                            <option value="Asia/Manila">Asia/Manila</option>
                                            <option value="Asia/Muscat">Asia/Muscat</option>
                                            <option value="Asia/Nicosia">Asia/Nicosia</option>
                                            <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                            <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                            <option value="Asia/Omsk">Asia/Omsk</option>
                                            <option value="Asia/Oral">Asia/Oral</option>
                                            <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                            <option value="Asia/Pontianak">Asia/Pontianak</option>
                                            <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                            <option value="Asia/Qatar">Asia/Qatar</option>
                                            <option value="Asia/Qostanay">Asia/Qostanay</option>
                                            <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                            <option value="Asia/Riyadh">Asia/Riyadh</option>
                                            <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                            <option value="Asia/Samarkand">Asia/Samarkand</option>
                                            <option value="Asia/Seoul">Asia/Seoul</option>
                                            <option value="Asia/Shanghai">Asia/Shanghai</option>
                                            <option value="Asia/Singapore">Asia/Singapore</option>
                                            <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                                            <option value="Asia/Taipei">Asia/Taipei</option>
                                            <option value="Asia/Tashkent">Asia/Tashkent</option>
                                            <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                            <option value="Asia/Tehran">Asia/Tehran</option>
                                            <option value="Asia/Thimphu">Asia/Thimphu</option>
                                            <option value="Asia/Tokyo">Asia/Tokyo</option>
                                            <option value="Asia/Tomsk">Asia/Tomsk</option>
                                            <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                            <option value="Asia/Urumqi">Asia/Urumqi</option>
                                            <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                                            <option value="Asia/Vientiane">Asia/Vientiane</option>
                                            <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                            <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                            <option value="Asia/Yangon">Asia/Yangon</option>
                                            <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                            <option value="Asia/Yerevan">Asia/Yerevan</option>
                                            <option value="Atlantic/Azores">Atlantic/Azores</option>
                                            <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                            <option value="Atlantic/Canary">Atlantic/Canary</option>
                                            <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                            <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                            <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                            <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                            <option value="Atlantic/South_Georgia">Atlantic/South_Georgia
                                            </option>
                                            <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                                            <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                                            <option value="Australia/Adelaide">Australia/Adelaide</option>
                                            <option value="Australia/Brisbane">Australia/Brisbane</option>
                                            <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                            <option value="Australia/Currie">Australia/Currie</option>
                                            <option value="Australia/Darwin">Australia/Darwin</option>
                                            <option value="Australia/Eucla">Australia/Eucla</option>
                                            <option value="Australia/Hobart">Australia/Hobart</option>
                                            <option value="Australia/Lindeman">Australia/Lindeman</option>
                                            <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                            <option value="Australia/Melbourne">Australia/Melbourne</option>
                                            <option value="Australia/Perth">Australia/Perth</option>
                                            <option value="Australia/Sydney">Australia/Sydney</option>
                                            <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                            <option value="Europe/Andorra">Europe/Andorra</option>
                                            <option value="Europe/Astrakhan">Europe/Astrakhan</option>
                                            <option value="Europe/Athens">Europe/Athens</option>
                                            <option value="Europe/Belgrade">Europe/Belgrade</option>
                                            <option value="Europe/Berlin">Europe/Berlin</option>
                                            <option value="Europe/Bratislava">Europe/Bratislava</option>
                                            <option value="Europe/Brussels">Europe/Brussels</option>
                                            <option value="Europe/Bucharest">Europe/Bucharest</option>
                                            <option value="Europe/Budapest">Europe/Budapest</option>
                                            <option value="Europe/Busingen">Europe/Busingen</option>
                                            <option value="Europe/Chisinau">Europe/Chisinau</option>
                                            <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                            <option value="Europe/Dublin">Europe/Dublin</option>
                                            <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                            <option value="Europe/Guernsey">Europe/Guernsey</option>
                                            <option value="Europe/Helsinki">Europe/Helsinki</option>
                                            <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                            <option value="Europe/Istanbul">Europe/Istanbul</option>
                                            <option value="Europe/Jersey">Europe/Jersey</option>
                                            <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                            <option value="Europe/Kiev">Europe/Kiev</option>
                                            <option value="Europe/Kirov">Europe/Kirov</option>
                                            <option value="Europe/Lisbon">Europe/Lisbon</option>
                                            <option value="Europe/Ljubljana">Europe/Ljubljana</option>
                                            <option value="Europe/London">Europe/London</option>
                                            <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                            <option value="Europe/Madrid">Europe/Madrid</option>
                                            <option value="Europe/Malta">Europe/Malta</option>
                                            <option value="Europe/Mariehamn">Europe/Mariehamn</option>
                                            <option value="Europe/Minsk">Europe/Minsk</option>
                                            <option value="Europe/Monaco">Europe/Monaco</option>
                                            <option value="Europe/Moscow">Europe/Moscow</option>
                                            <option value="Europe/Oslo">Europe/Oslo</option>
                                            <option value="Europe/Paris">Europe/Paris</option>
                                            <option value="Europe/Podgorica">Europe/Podgorica</option>
                                            <option value="Europe/Prague">Europe/Prague</option>
                                            <option value="Europe/Riga">Europe/Riga</option>
                                            <option value="Europe/Rome">Europe/Rome</option>
                                            <option value="Europe/Samara">Europe/Samara</option>
                                            <option value="Europe/San_Marino">Europe/San_Marino</option>
                                            <option value="Europe/Sarajevo">Europe/Sarajevo</option>
                                            <option value="Europe/Saratov">Europe/Saratov</option>
                                            <option value="Europe/Simferopol">Europe/Simferopol</option>
                                            <option value="Europe/Skopje">Europe/Skopje</option>
                                            <option value="Europe/Sofia">Europe/Sofia</option>
                                            <option value="Europe/Stockholm">Europe/Stockholm</option>
                                            <option value="Europe/Tallinn">Europe/Tallinn</option>
                                            <option value="Europe/Tirane">Europe/Tirane</option>
                                            <option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
                                            <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                                            <option value="Europe/Vaduz">Europe/Vaduz</option>
                                            <option value="Europe/Vatican">Europe/Vatican</option>
                                            <option value="Europe/Vienna">Europe/Vienna</option>
                                            <option value="Europe/Vilnius">Europe/Vilnius</option>
                                            <option value="Europe/Volgograd">Europe/Volgograd</option>
                                            <option value="Europe/Warsaw">Europe/Warsaw</option>
                                            <option value="Europe/Zagreb">Europe/Zagreb</option>
                                            <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                                            <option value="Europe/Zurich">Europe/Zurich</option>
                                            <option value="Indian/Antananarivo">Indian/Antananarivo</option>
                                            <option value="Indian/Chagos">Indian/Chagos</option>
                                            <option value="Indian/Christmas">Indian/Christmas</option>
                                            <option value="Indian/Cocos">Indian/Cocos</option>
                                            <option value="Indian/Comoro">Indian/Comoro</option>
                                            <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                            <option value="Indian/Mahe">Indian/Mahe</option>
                                            <option value="Indian/Maldives">Indian/Maldives</option>
                                            <option value="Indian/Mauritius">Indian/Mauritius</option>
                                            <option value="Indian/Mayotte">Indian/Mayotte</option>
                                            <option value="Indian/Reunion">Indian/Reunion</option>
                                            <option value="Pacific/Apia">Pacific/Apia</option>
                                            <option value="Pacific/Auckland">Pacific/Auckland</option>
                                            <option value="Pacific/Bougainville">Pacific/Bougainville</option>
                                            <option value="Pacific/Chatham">Pacific/Chatham</option>
                                            <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                            <option value="Pacific/Easter">Pacific/Easter</option>
                                            <option value="Pacific/Efate">Pacific/Efate</option>
                                            <option value="Pacific/Enderbury">Pacific/Enderbury</option>
                                            <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                            <option value="Pacific/Fiji">Pacific/Fiji</option>
                                            <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                            <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                            <option value="Pacific/Gambier">Pacific/Gambier</option>
                                            <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                            <option value="Pacific/Guam">Pacific/Guam</option>
                                            <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                            <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                            <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                            <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                            <option value="Pacific/Majuro">Pacific/Majuro</option>
                                            <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                            <option value="Pacific/Midway">Pacific/Midway</option>
                                            <option value="Pacific/Nauru">Pacific/Nauru</option>
                                            <option value="Pacific/Niue">Pacific/Niue</option>
                                            <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                            <option value="Pacific/Noumea">Pacific/Noumea</option>
                                            <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                            <option value="Pacific/Palau">Pacific/Palau</option>
                                            <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                            <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                            <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                            <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                            <option value="Pacific/Saipan">Pacific/Saipan</option>
                                            <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                            <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                            <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                            <option value="Pacific/Wake">Pacific/Wake</option>
                                            <option value="Pacific/Wallis">Pacific/Wallis</option>
                                            <option value="UTC" selected="selected">UTC</option>
                                        </select>
                                        <small class="form-text text-muted">Your preferred way of displaying
                                            dates.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5" id="billing" style="">
                                <div class="col-12 col-xl-4">
                                    <h2 class="h4">Billing details</h2>
                                    <p class="text-muted">These billing details are used when generating
                                        invoices after a successful payment.</p>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="billing_type">Type</label>
                                                <select id="billing_type" name="billing_type"
                                                    class="form-control form-control-lg">
                                                    <option value="personal" selected="selected">Personal
                                                    </option>
                                                    <option value="business">Business</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="billing_name">Name</label>
                                                <input id="billing_name" type="text" name="billing_name"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="billing_address">Address</label>
                                                <input id="billing_address" type="text" name="billing_address"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="billing_city">City</label>
                                                <input id="billing_city" type="text" name="billing_city"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="billing_county">County</label>
                                                <input id="billing_county" type="text" name="billing_county"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="form-group">
                                                <label for="billing_zip">ZIP</label>
                                                <input id="billing_zip" type="text" name="billing_zip"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="billing_country">Country</label>
                                                <select id="billing_country" name="billing_country"
                                                    class="form-control form-control-lg">
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
                                                    <option value="BQ">Bonaire, Saint Eustatius and Saba
                                                    </option>
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
                                                    <option value="HM">Heard Island and McDonald Islands
                                                    </option>
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
                                                    <option value="GS">South Georgia and the South Sandwich
                                                        Islands</option>
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
                                                    <option value="UM">United States Minor Outlying Islands
                                                    </option>
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
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="billing_phone">Phone</label>
                                                <input id="billing_phone" type="text" name="billing_phone"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12" id="billing_tax_id_container">
                                            <div class="form-group">
                                                <label for="billing_tax_id">Tax ID</label>
                                                <input id="billing_tax_id" type="text" name="billing_tax_id"
                                                    class="form-control form-control-lg" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    <h2 class="h4">Two-factor authentication</h2>
                                    <p class="text-muted">Use a mobile authentication app to get a verification
                                        code to enter every time you log in.</p>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="twofa_is_enabled">Enable Two-factor authentication</label>
                                        <select id="twofa_is_enabled" name="twofa_is_enabled"
                                            class="form-control form-control-lg ">
                                            <option value="1">Yes</option>
                                            <option value="0" selected="selected">No</option>
                                        </select>
                                    </div>
                                    <div id="twofa_container">
                                        <div class="form-group">
                                            <label>1. Scan QR Code</label>
                                            <p class="text-muted">Open the authentication app (ex: Authy, Google
                                                Authenticator) on your mobile device and scan the following QR
                                                Code with your camera.</p>
                                            <div class="d-flex flex-column flex-md-row align-items-center">
                                                <div class="mb-3 mb-md-0 mr-md-5">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADIAQMAAACXljzdAAAABlBMVEX///8AAABVwtN+AAACFElEQVRYheWYQY6DMAxFjbpgmSNwE7gYEkhcLNyEI2SZBcLzv1PU6X76R5rJIm15LKz429+p2V9bjnWYJc/2OPhgTHhyCUk1PKljqpa2w0bzK63ASjL5xthsKgveML7hVU4QUJ3KPOAHvv4G6XPqmR9syI+aMD+QR+9+DrXz/j1zAhIahUL6HaeDrb6rV0BiITCE83CcThzMawkIAtncEVPXTieUwjzJSO0KNpxOTtQq8zWbmiwHk8T82ASF2MJNSCbEFqdTFmKkClWjJNhQJXtBWCdjQ4q2ptGfJSjEeUAbCl/gGyN/ZyGJ6uu9+I6qBMFL59BOR0TYB2hH8AN45FQYlpiwBhAbLcGRH8S4HdEUVITKMPYBujM7UjiUCQnCQA3kFMqoLItbo0ISAUIcD1YhqnEdmmeJCESB6axjflCnY7LozkqCKjkZm9Gl+52jwWx3nUoI5Ikn7rcVuLNLX0LShDrGjHxwPkC9+j27aAgmVI9P1mnMSLdGRYTT+fDKT2kDWv5x0nphR2faPLLiqz2zICJdc/+4DRinQpBbFBoSHemy5s6tNRyuJLFojDEneIl5wUxIYiYHsegLoZitzWIqEvcSCJOdiD0Rn8/YZCRuh8gHlGKsRgb7rFMhqVP0AToTbBI3JVMTzkhdm0w4m9v73fnTJP6niF6IU8nszuv3fzA+T5pGc9xPnM6U6Y2XkPyX9QWQToOX/5rVSgAAAABJRU5ErkJggg=="
                                                        alt="1. Scan QR Code" />
                                                </div>
                                                <div>
                                                    <label>Can't scan the QR Code?</label>
                                                    <p class="text-muted">Try inserting the following secret
                                                        code into your app if you can't scan the QR Code.</p>
                                                    <p class="h5">WKCJABY6B5SOKDBA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="twofa_token">2. Enter freshly generated token</label>
                                            <p class="text-muted">To confirm that you setup your code properly,
                                                please enter the 6-digit token from your mobile app.</p>
                                            <input type="text" id="twofa_token" name="twofa_token"
                                                class="form-control form-control-lg " value="" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5"></div>
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    <h2 class="h4">Change Password</h2>
                                    <p class="text-muted">If you do not want to change your password, do not
                                        fill any of those fields below.</p>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="old_password">Current Password</label>
                                        <input type="password" id="old_password" name="old_password"
                                            class="form-control form-control-lg " />
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input type="password" id="new_password" name="new_password"
                                            class="form-control form-control-lg " />
                                    </div>
                                    <div class="form-group">
                                        <label for="repeat_password">Repeat Password</label>
                                        <input type="password" id="repeat_password" name="repeat_password"
                                            class="form-control form-control-lg " />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 col-xl-4"></div>
                                <div class="col">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
