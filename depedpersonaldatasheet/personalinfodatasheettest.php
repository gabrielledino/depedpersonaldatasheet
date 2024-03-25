<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/css/style.css">
    <script defer src="resource/js/bootstrap.min.js"></script>
    <script defer src="resource/js/script.js"></script>
    
    <title>DepEd Personal Data Sheet</title>
    
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="resource/img/deped-malolos-logo.png" alt="DepEd Malolos Logo" width="30" height="30" class="d-inline-block align-text-top">
                Personal Data Sheet
              </a>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-personal-info-tab" data-bs-toggle="tab" data-bs-target="#nav-personal-info" type="button" role="tab" aria-controls="nav-personal-info" aria-selected="true"> 1</button>
                  <button class="nav-link" id="nav-civil-work-tab" data-bs-toggle="tab" data-bs-target="#nav-civil-work" type="button" role="tab" aria-controls="nav-civil-work" aria-selected="false"> 2</button>
                  <button class="nav-link" id="nav-other-info-tab" data-bs-toggle="tab" data-bs-target="#nav-other-info" type="button" role="tab" aria-controls="nav-other-info" aria-selected="false">3</button>
                  <button class="nav-link" id="nav-other-info2-tab" data-bs-toggle="tab" data-bs-target="#nav-other-info2" type="button" role="tab" aria-controls="nav-other-info2" aria-selected="false">4</button>
                </div>
            </div>
          </nav>
    </div>

    <div class="container">
        

        <div class="tab-content" id="nav-tabContent">

          <!-- START OF PAGE 1 -->

          <div class="tab-pane fade show active" id="nav-personal-info" role="tabpanel" aria-labelledby="nav-personal-info-tab">
              
            <div class="c1-container">

              <div class="c1-container-header border-bottom">
                <span>CS Form No. 212</span>
                <br>
                <span>Revised 2017</span>
                <br>
                <br>
                <center><h1>PERSONAL DATA SHEET</h1></center>
                <br>
                <p><b>
                  WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.
                  <br>
                  READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.
                </b></p>
              </div>

              <br>

              <div class="c1-container-body">
                
                <div class="holder-box-0">
                  <div class="form-group row">
                    <label for="CSID" class="col-sm-2 col-form-label">1. CS ID No.</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="CSID" placeholder="(Do not fill up. For CSC use only.)" disabled>
                    </div>
                  </div>

                  <br>

                  <h5><b> I. PERSONAL INFORMATION</b></h3>
                  <hr>
                  <br>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">2. SURNAME</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Surname">
                    </div>
                  </div>

                  <br>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">FIRST NAME</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="First Name">
                    </div>

                    <label for="" class="col-sm-2 col-form-label">NAME EXTENSION (JR., SR)</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="NameExtension" placeholder="Jr., Sr., II, etc.">
                    </div>
                  </div>

                  <br>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">MIDDLE NAME</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="Middle Name">
                    </div>
                  </div>
                  <br>

                </div>


                <hr>


                <div class="holder-box-1">
                  <div class="box-1">
                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">3. DATE OF BIRTH 
                        (mm/dd/yyyy)  </label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="DateOfBirth" placeholder="Date Of Birth">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">4. PLACE OF BIRTH</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="PlaceOfBirth" placeholder="Place of Birth">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">5. SEX</label>
                      <div class="col-sm-8">
                        <input class="form-check-input" type="radio" name="Sex" id="Male" value="Male">
                        <label class="form-check-label" for="Male">
                          Male
                        </label>

                        &nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="Sex" id="Female" value="Female">
                        <label class="form-check-label" for="Female">
                          Female
                        </label>
                      </div>
                    </div>

                    <br>


                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">6. CIVIL STATUS</label>
                      <div class="col-sm-8">
                        <input class="form-check-input" type="radio" name="CivilStatus" id="Single" value="Single">
                        <label class="form-check-label" for="Single">
                          Single
                        </label>

                        &nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="CivilStatus" id="Married" value="Married">
                        <label class="form-check-label" for="Married">
                          Married
                        </label>

                        &nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="CivilStatus" id="Widowed" value="Widowed">
                        <label class="form-check-label" for="Widowed">
                          Widowed
                        </label>

                        <br>

                        <input class="form-check-input" type="radio" name="CivilStatus" id="Seperated" value="Seperated">
                        <label class="form-check-label" for="Seperated">
                          Seperated
                        </label>

                        
                        &nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="CivilStatus" id="Other/s" value="Other/s">
                        <label class="form-check-label" for="Other/s">
                          Other/s
                        </label>
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">7. HEIGHT (m)</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Height" placeholder="Height">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">8. WEIGHT (kg)</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Weight" placeholder="Weight">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">9. BLOOD TYPE</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="BloodType" placeholder="Blood Type">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">10. GSIS ID NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="GSIS" placeholder="GSIS Number">
                      </div>
                    </div>



                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">11. PAG-IBIG ID NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="PagIBIG" placeholder="Pag-ibig Number">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">12. PHILHEALTH NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="PHILHEALTH" placeholder="Philhealth Number">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">13. SSS NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="SSS" placeholder="SSS Number">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">14. TIN NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="TIN" placeholder="TIN Number">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">15. AGENCY EMPLOYEE NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="AgencyNo" placeholder="Agency Number">
                      </div>
                    </div>
                  
                  </div>



                  <div class="box-1" style="margin-left: 1%;">
                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">16. CITIZENSHIP</label>
                      <div class="col-sm-8">
                        <input class="form-check-input" type="radio" name="Citizenship1" id="Filipino" value="Filipino" checked>
                        <label class="form-check-label" for="Filipino">
                          Filipino
                        </label>

                        &nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="Citizenship1" id="Dual" value="Dual">
                        <label class="form-check-label" for="Dual">
                          Dual Citizenship
                        </label>
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-8">
                        <input class="form-check-input" type="radio" name="Citizenship2" id="Birth" value="by birth" checked>
                        <label class="form-check-label" for="Birth">
                          by birth
                        </label>

                        &nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="Citizenship2" id="Naturalization" value="by naturalization">
                        <label class="form-check-label" for="Naturalization">
                          by naturalization
                        </label>

                        <br>
                        <br>
                        <center>Pls. indicate country:</center>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">If holder of  dual citizenship, please indicate the details.</label>
                      <div class="col-sm-8">
                        <br>
                        <select class="form-control" list="datalistOptions" id="DualCountry">
                            <option selected disabled>Click to select country...</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">17. RESIDENTIAL ADDRESS</label>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="ResHouse_Block_LotNo" placeholder="House / Block / Lot No.">
                      </div>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="ResStreet" placeholder="Street">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="ResSubdivision_Village" placeholder="Subdivision / Village">
                      </div>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="ResBarangay" placeholder="Barangay">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="ResCity_Municipality" placeholder="City/ Municipality">
                      </div>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="ResProvince" placeholder="Province">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"><center>ZIP CODE</center> </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ResZipCode" placeholder="Zip Code">
                      </div>
                    </div>

                    <br>

                    <label><input type="checkbox" id="samepermanentaddress" name="samepermanentaddress"> Click if your residential address is the same as your permanent address.</label>


                    <hr>


                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">18. PERMANENT ADDRESS</label>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="PerHouse_Block_LotNo" placeholder="House / Block / Lot No.">
                      </div>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="PerStreet" placeholder="Street">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="PerSubdivision_Village" placeholder="Subdivision / Village">
                      </div>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="PerBarangay" placeholder="Barangay">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="PerCity_Municipality" placeholder="City / Municipality">
                      </div>
                      <div class="col-sm-4">
                        <br><input type="text" class="form-control" id="PerProvince" placeholder="Province">
                      </div>
                    </div>


                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"><center>ZIP CODE</center> </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="PerZipCode" placeholder="Zip Code">
                      </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">19. TELEPHONE NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="TelephoneNumber" placeholder="Telephone Number">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">20. MOBILE NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="MobileNumber" placeholder="Mobile Number">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">21. E-MAIL ADDRESS (if any)</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="EmailAdd" placeholder="E-mail Address">
                      </div>
                    </div>
                  </div>
                </div>

                <br>

                <h5><b> II. FAMILY BACKGROUND</b></h3>
                <hr>

                <div class="holder-box-2">
                  <div class="box-1">
                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">22. SPOUSE'S SURNAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Spouse_Surname" placeholder="Surname">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> FIRST NAME</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="Spouse_Firstname" placeholder="First Name">
                      </div>

                      <label for="" class="col-sm-2 col-form-label"> NAME EXTENSION (JR., SR.)</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="Spouse_NameExtension" placeholder="Jr., Sr., II, etc.">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> MIDDLE NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Spouse_Middlename" placeholder="Middle Name">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> OCCUPATION</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Spouse_Occupation" placeholder="Occupation">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> EMPLOYER/BUSINESS NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Spouse_Employer_Businessname" placeholder="Employer Businessname">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> BUSINESS ADDRESS</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Spouse_BusinessAddress" placeholder="Business Address">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> TELEPHONE NO.</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Spouse_TelephoneNumber" placeholder="Telephone Number">
                      </div>
                    </div>
                  </div>

                  <div class="box-1" style="margin-left: 1%;">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">23.  NAME of CHILDREN  (Write full name and list all)</label>
                            <input type="text" class="form-control" id="Children_Fullname" placeholder="Children Fullname">
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-4">
                          <label for="" class="col-sm-6 col-form-label">DATE OF BIRTH (mm/dd/yyyy) </label>
                            <input type="date" class="form-control" id="Children_Birthdate" placeholder="Children Birthdate">
                        </div>
                            <br>
                        <div class="col-sm-2 pt-3">
                          <input type="button" class="btn btn-dark" id="Spouse-Add-Children" value="ADD TO TABLE">
                        </div>
                    </div>

                    <br>
                    <br>

                    <!-- <ol id="spouse-children" style="list-style-position: inside; padding: 0px;">
                      
                    </ol> -->

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">NAME OF CHILDREN</th>
                            <th scope="col">DATE OF BIRTH</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody id="spouse-children">
                        </tbody>
                      </table>
                    </div>
                    <br>
                  </div>
                </div>
                
                <div class="holder-box-2">
                  <div class="box-1">


                    <hr>


                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">24. FATHER'S SURNAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Father_Surname" placeholder="Surname">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label"> FIRST NAME</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="Father_Firstname" placeholder="First Name">
                      </div>

                      <label for="" class="col-sm-2 col-form-label"> NAME EXTENSION (JR., SR.)</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="Father_NameExtension" placeholder="Jr., Sr., II, etc.">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">MIDDLE NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Father_Middlename" placeholder="Middle Name">
                      </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">25. MOTHER'S MAIDEN NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Mother_MaidenName" placeholder="Maiden Name">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">SURNAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Mother_Surname" placeholder="Surname">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">FIRST NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Mother_Firstname" placeholder="First Name">
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">MIDDLE NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="Mother_Middlename" placeholder="Middle Name">
                      </div>
                    </div>

                  </div>

                  <div class="box-1" style="margin-left: 1%;">
                    
                  </div>

                </div>


                <br>
                <br>
                <h5><b> III. EDUCATIONAL BACKGROUND</b></h3>
                <hr>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label edu-label"> 26. LEVEL</label>
                  <label for="" class="col-sm-2 col-form-label edu-label">ELEMENTARY</label>
                  <label for="" class="col-sm-2 col-form-label edu-label">SECONDARY</label>
                  <label for="" class="col-sm-2 col-form-label edu-label">VOCATIONAL COURSE</label>
                  <label for="" class="col-sm-2 col-form-label edu-label">COLLEGE</label>
                  <label for="" class="col-sm-2 col-form-label edu-label">GRADUATE STUDIES </label>
                </div>

                

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">NAME OF SCHOOL (Write in full)</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="NOF_Elementary" placeholder="Elementary"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="NOF_Secondary" placeholder="Secondary"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="NOF_Vocational" placeholder="Vocational"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="NOF_College" placeholder="College"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="NOF_Graduate" placeholder="Graduate"><br>
                  </div>
                  <br>
                </div>
                
                <hr>
                
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">BASIC EDUCATION / DEGREE/COURSE (Write in full) </label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="BE_D_C_Elementary" placeholder="Elementary"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="BE_D_C_Secondary" placeholder="Secondary"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="BE_D_C_Vocational" placeholder="Vocational"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="BE_D_C_College" placeholder="College"><br>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="BE_D_C_Graduate" placeholder="Graduate"><br>
                  </div>
                  <br>
                </div>
                
                <hr>

                <div class="form-group row">

                    <label for="" class="col-sm-2 col-form-label">PERIOD OF ATTENDANCE</label>

                    <div class="col-sm-2">
                        <label for="">ELEMENTARY</label>
                        <input type="text" class="form-control" id="POA_From_Elementary" placeholder="POA_From_Elementary">
                        <input type="text" class="form-control" id="POA_To_Elementary" placeholder="POA_To_Elementary">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="">SECONDARY</label>
                        <input type="text" class="form-control" id="POA_From_Secondary" placeholder="POA_From_Secondary">
                        <input type="text" class="form-control" id="POA_To_Secondary" placeholder="POA_To_Secondary">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="">Vocational COURSE</label>
                        <input type="text" class="form-control" id="POA_From_Vocational" placeholder="POA_From_Vocational">
                        <input type="text" class="form-control" id="POA_To_Vocational" placeholder="POA_To_Vocational">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="">COLLEGE</label>
                        <input type="text" class="form-control" id="POA_From_College" placeholder="POA_From_College">
                        <input type="text" class="form-control" id="POA_To_College" placeholder="POA_To_College">
                        <br>
                    </div>

                    <div class="col-sm-2">
                        <label for="">GRADUATE STUDIES</label>
                        <input type="text" class="form-control" id="POA_From_Graduate" placeholder="POA_From_Graduate">
                        <input type="text" class="form-control" id="POA_To_Graduate" placeholder="POA_To_Graduate">
                        <br>
                    </div>
                </div>
                
                <hr>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">HIGHEST LEVEL / UNITS EARNED (if not graduated)</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="HL_UE_Elementary" placeholder="HL_UE_Elementary">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="HL_UE_Secondary" placeholder="HL_UE_Secondary">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="HL_UE_Vocational" placeholder="HL_UE_Vocational">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="HL_UE_College" placeholder="HL_UE_College">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="HL_UE_Graduate" placeholder="HL_UE_Graduate">
                    </div>
                    <br>
                </div>
                
                <hr>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">YEAR GRADUATED</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="YR_G_Elementary" placeholder="YR_G_Elementary">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="YR_G_Secondary" placeholder="YR_G_Secondary">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="YR_G_Vocational" placeholder="YR_G_Vocational">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="YR_G_College" placeholder="YR_G_College">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="YR_G_Graduate" placeholder="YR_G_Graduate">
                    </div>
                    <br>
                </div>
                
                <hr>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="Scho_AHR_Elementary" placeholder="Scho_AHR_Elementary">
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="Scho_AHR_Secondary" placeholder="Scho_AHR_Secondary">
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="Scho_AHR_Vocational" placeholder="Scho_AHR_Vocational">
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="Scho_AHR_College" placeholder="Scho_AHR_College">
                  </div>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="Scho_AHR_Graduate" placeholder="Scho_AHR_Graduate">
                  </div>
                  <br>
                </div>
                
                <hr style="margin: 0;">
                <br>

              </div>

            </div>


          </div>
          <!-- END OF PAGE 1 -->


          <!-- START OF PAGE 2 -->
          
          <div class="tab-pane fade" id="nav-civil-work" role="tabpanel" aria-labelledby="nav-civil-work-tab">
             <div class="c2-container">

               <div class="c2-container-header">

               </div>

               <div class="c2-container-body">

                <br>

                <h5><b>IV.  CIVIL SERVICE ELIGIBILITY</b></h3>
                <hr class="inputting-0">
                <br class="inputting-0">

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label inputting-0">27.</label>
                  <label for="" class="col-sm-3 col-form-label border-end inputting-0 text-center">
                    CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                  </label>
                  <label for="" class="col-sm-1 col-form-label border-end inputting-0 text-center">
                    RATING
                    (If Applicable)
                  </label>
                  <label for="" class="col-sm-1 col-form-label border-end inputting-0 text-center">
                    DATE OF EXAMINATION / CONFERMENT
                  </label>
                  <label for="" class="col-sm-3 col-form-label border-end inputting-0 text-center">
                    PLACE OF EXAMINATION / CONFERMENT
                  </label>
                  <label for="" class="col-sm-3 col-form-label inputting-0 text-center">
                    LICENSE (if applicable)
                    <hr>
                    <div class="form-group row">
                      <label for="" class="col-sm-6 col-form-label border-end inputting-0 text-center">NUMBER</label>
                      <label for="" class="col-sm-6 col-form-label inputting-0 text-center">Date of Validity</label>
                    </div>
                  </label>
                </div>

                <br>

                <div class="form-group row border-top">
                  <div class="col-sm-4">
                    <br>
                    <label class="inputting" for="">27. CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE</label>
                    <input type="text" class="form-control" id="CS_RA_CES_CSEE_DL" placeholder="Career Service / Board / Bar / CES / CSEE / Driver's License">
                  </div>

                  <div class="col-sm-1">
                    <br>
                    <label class="inputting" for="">RATING (If Applicable)</label>
                    <input type="text" class="form-control" id="Rating" placeholder="Rating">
                  </div>

                  <div class="col-sm-1">
                    <br>
                    <label class="inputting" for="">DATE OF EXAMINATION / CONFERMENT</label>
                    <input type="date" class="form-control" id="DOT_C">
                  </div>

                  <div class="col-sm-3">
                    <br>
                    <label class="inputting" for="">PLACE OF EXAMINATION / CONFERMENT</label>
                    <input type="text" class="form-control" id="POE_C" placeholder="Place of Examination / Conferment">
                  </div>

                  <div class="col-sm-3">
                    <br>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label class="inputting" for="">LICENSE (if applicable) NUMBER</label>
                        <input type="text" class="form-control" id="LNumber" placeholder="License Number">
                      </div>
                      <div class="col-sm-6">
                        <label class="inputting" for="">LICENSE (if applicable) Date of Validity</label>
                        <input type="date" class="form-control" id="LValidity">
                      </div>
                    </div>
                  </div>
                </div>

                <br>

                <div class="form-group row">
                  <div class="col-sm-2 pb-3">
                    <input type="button" class="btn btn-dark" id="CivilServiceAdd" value="ADD TO TABLE">
                  </div>

                  <br>
                  <br>

                  <!-- <ol id="civil-service" style="list-style-position: inside;">

                  </ol> -->

                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
                          <th scope="col">RATING</th>
                          <th scope="col">DATE OF EXAMINATION / CONFERMENT</th>
                          <th scope="col">PLACE OF EXAMINATION / CONFERMENT</th>
                          <th scope="col">LICENSE NUMBER</th>
                          <th scope="col">LICENSE Date of Validity</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody id="civil-service">

                      </tbody>
                    </table>
                  </div>


                  <br>
                  <br>
                  <br>
                  <hr style="margin: 0;">
                  <br>
                </div>



                <br class="inputting-0">
                <hr class="inputting-0">
                <h5><b>V.  WORK EXPERIENCE </b></h3>
                <hr class="inputting-0">
                <br class="inputting-0">
                  
                <div class="form-group row">

                  <label for="" class="col-sm-1 inputting-0">
                    28.
                  </label>

                  <label class="col-sm-3 text-center border-end">
                    <label class="inputting-0" for="">INCLUSIVE DATES <br> (mm/dd/yyyy)</label>
                    <hr>
                    <div class="form-group row">
                      <div class="col-sm-6 border-end">
                        <label class="inputting-0">From</label>
                      </div>
                      <div class="col-sm-6">
                        <label class="inputting-0">To</label>
                      </div>
                    </div>
                  </label>

                  <label class="col-sm-2 border-end inputting-0 text-center">
                    POSITION TITLE <br> (Write in full/Do not abbreviate)
                  </label>

                  <label for="" class="col-sm-2 border-end inputting-0 text-center">
                    DEPARTMENT / AGENCY / OFFICE / COMPANY <br> (Write in full/Do not abbreviate)
                  </label>


                  <label for="" class="col-sm-1 border-end inputting-0 text-center">
                    MONTHLY SALARY
                  </label>

                  
                  <label for="" class="col-sm-1 border-end inputting-0 text-center">
                    SALARY/ JOB/ PAY GRADE (if applicable)& STEP (Format "00-0")/ INCREMENT
                  </label>
                  
                  <label for="" class="col-sm-1 border-end inputting-0 text-center">
                    STATUS OF APPOINTMENT
                  </label>
                  
                  <label for="" class="col-sm-1 inputting-0 text-center">
                    GOVERNMENT SERVICE <br>(Y/ N)
                  </label>

                </div>

                <hr class="inputting-0">

                <div class="form-group row">

                  <div class="col-sm-1">
                    
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <br>
                        <label class="inputting" for="">28. INCLUSIVE DATES <br> (mm/dd/yyyy) From</label>
                        <input type="date" class="form-control" id="V_I_D_From">
                      </div>
                      <div class="col-sm-6">
                        <br>
                        <label class="inputting" for="">INCLUSIVE DATES <br> (mm/dd/yyyy) To</label>
                        <input type="date" class="form-control" id="V_I_D_To">
                      </div>
                    </div>
                  </div>


                  <div class="col-sm-2">
                    <br>
                    <label class="inputting" for="">POSITION TITLE <br> (Write in full/Do not abbreviate)</label>
                    <input type="text" class="form-control" id="V_PosTitle" placeholder="Title of Position">
                  </div>

                  <div class="col-sm-2">
                    <br>
                    <label class="inputting" for="">DEPARTMENT / AGENCY / OFFICE / COMPANY <br> (Write in full/Do not abbreviate)</label>
                    <input type="text" class="form-control" id="V_D_A_O_C" placeholder="Department / Agency / Office / Company">
                  </div>

                  <div class="col-sm-1">
                    <br>
                    <label class="inputting" for="">MONTHLY SALARY</label>
                    <input type="text" class="form-control" id="V_MS" placeholder="Salary">
                  </div>

                  <div class="col-sm-1">
                    <br>
                    <label class="inputting" for="">SALARY/ JOB/ PAY GRADE (if applicable) <br> & STEP (Format "00-0") / INCREMENT</label>
                    <input type="text" class="form-control" id="V_S_J_PG" placeholder="V_S_J_PG">
                  </div>
                
                  <div class="col-sm-1">
                    <br>
                    <label class="inputting" for="">STATUS OF APPOINTMENT</label>
                    <input type="text" class="form-control" id="V_SOA" placeholder="SOA">
                  </div>

                  <div class="col-sm-1">
                    <br>
                    <label class="inputting" for="">GOVERNMENT SERVICE (Y/ N)</label>
                    <input type="text" class="form-control" id="V_GOS" placeholder="Gov't Service">
                  </div>

                </div>

                <br>

                <div class="form-group row">
                  <div class="col-sm-2 pb-3">
                    <input type="button" class="btn btn-dark" id="WorkExperienceAdd" value="ADD TO TABLE">
                  </div>

                  <br>
                  <br>

                  <!-- <ol id="work-experience" style="list-style-position: inside;">

                  </ol> -->

                  <br>

                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">INCLUSIVE DATES From</th>
                          <th scope="col">INCLUSIVE DATES To</th>
                          <th scope="col">POSITION TITLE</th>
                          <th scope="col">DEPARTMENT / AGENCY / OFFICE / COMPANY</th>
                          <th scope="col">MONTHLY SALARY</th>
                          <th scope="col">SALARY/ JOB / PAY GRADE / INCREMENT</th>
                          <th scope="col">STATUS OF APPOINTMENT</th>
                          <th scope="col">GOVERNMENT SERVICE (Y/ N)</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody id="work-experience">
                      </tbody>
                    </table>
                  </div>

                  <br>
                  <br>
                  <br>
                  <hr style="margin: 0;">
                </div>

                <br>

               </div>
             </div>
          </div>
          <!-- END OF PAGE 2 -->


          <!-- START OF PAGE 3 -->

          <div class="tab-pane fade" id="nav-other-info" role="tabpanel" aria-labelledby="nav-other-info-tab">
              <div class="c3-container">
                <div class="c3-container-header"></div>
                <div class="c3-container-body">

                  <br>

                  <h5><b>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</b></h3>
                  <hr class="inputting-0">
                  <br class="inputting-0">

                  <div class="form-group row">
                    <label for="" class="col-sm-1 col-form-label inputting-0">29.</label>
                    <label for="" class="col-sm-3 col-form-label border-end inputting-0 text-center">
                      NAME & ADDRESS OF ORGANIZATION <br> (Write in full)
                    </label>
                    <label for="" class="col-sm-3 col-form-label inputting-0 border-end text-center">
                      INCLUSIVE DATES <br> (mm/dd/yyyy)
                      <hr>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label border-end inputting-0 text-center">From</label>
                        <label for="" class="col-sm-6 col-form-label inputting-0 text-center">To</label>
                      </div>
                    </label>
                    <label for="" class="col-sm-1 col-form-label border-end inputting-0 text-center">
                      NUMBER OF HOURS
                    </label>
                    <label for="" class="col-sm-4 col-form-label border-end inputting-0 text-center">
                      POSITION / NATURE OF WORK
                    </label>
                  </div>

                  <br>

                  <div class="form-group row border-top">
                    <div class="col-sm-4">
                      <br>
                      <label class="inputting" for="">NAME & ADDRESS OF ORGANIZATION <br> (Write in full)</label>
                      <input type="text" class="form-control" id="NAOF" placeholder="Name and address of organization">
                    </div>


                    <div class="col-sm-3">
                      <br>
                      <div class="form-group row">
                        <div class="col-sm-6">
                          <label class="inputting" for="">INCLUSIVE DATES <br> (mm/dd/yyyy) From</label>
                          <input type="date" class="form-control" id="VI_I_D_From" >
                        </div>
                        <div class="col-sm-6">
                          <label class="inputting" for="">INCLUSIVE DATES <br> (mm/dd/yyyy) To</label>
                          <input type="date" class="form-control" id="VI_I_D_To" >
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-1">
                      <br>
                      <label class="inputting" for="">NUMBER OF HOURS</label>
                      <input type="text" class="form-control" id="VI_NOF" placeholder="Num of Hours">
                    </div>

                    <div class="col-sm-4">
                      <br>
                      <label class="inputting" for="">POSITION / NATURE OF WORK</label>
                      <input type="text" class="form-control" id="VI_POS_NOW" placeholder="Position / Nature of Work">
                    </div>
                  </div>
                  
                  <br>

                  <div class="form-group row">
                    <div class="col-sm-2 pb-3">
                      <input type="button" class="btn btn-dark" id="VoluntaryAdd" value="ADD TO TABLE">
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">NAME & ADDRESS OF ORGANIZATION</th>
                            <th scope="col">INCLUSIVE DATES FROM</th>
                            <th scope="col">INCLUSIVE DATES TO</th>
                            <th scope="col">NUMBER OF HOURS</th>
                            <th scope="col">POSITION / NATURE OF WORK</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody id="voluntary-work">

                        </tbody>
                      </table>
                    </div>

                    <br>
                    <br>
                    <hr style="margin: 0;">
                  </div>

                  <br>

                  <br class="inputting-0">
                  <hr class="inputting-0">  
                  <h5><b>VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</b></h3>
                  <h6>(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</h6>
                  <hr class="inputting-0">
                  <br class="inputting-0">

                  <div class="form-group row">
                    <label for="" class="col-sm-1 col-form-label inputting-0">30.</label>
                    <label for="" class="col-sm-3 col-form-label border-end inputting-0 text-center">
                      TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS    <br> (Write in full)
                    </label>
                    <label for="" class="col-sm-3 col-form-label inputting-0 border-end text-center">
                      INCLUSIVE DATES OF ATTENDANCE <br> (mm/dd/yyyy)
                      <hr>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label border-end inputting-0 text-center">From</label>
                        <label for="" class="col-sm-6 col-form-label inputting-0 text-center">To</label>
                      </div>
                    </label>
                    <label for="" class="col-sm-1 col-form-label border-end inputting-0 text-center">
                      NUMBER OF HOURS
                    </label>
                    <label for="" class="col-sm-1 col-form-label border-end inputting-0 text-center">
                      Type of LD <br> ( Managerial / Supervisory / Technical/etc) 
                    </label>
                    <label for="" class="col-sm-3 col-form-label border-end inputting-0 text-center">
                      POSITION / NATURE OF WORK
                    </label>
                  </div>

                  <br>

                  <div class="form-group row border-top">
                    <div class="col-sm-4">
                      <br>
                      <label class="inputting" for="">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS    <br> (Write in full)</label>
                      <input type="text" class="form-control" id="TOLADI_TP" placeholder="Total of L&D Interventions / Training Programs">
                    </div>


                    <div class="col-sm-3">
                      <br>
                      <div class="form-group row">
                        <div class="col-sm-6">
                          <label class="inputting" for="">INCLUSIVE DATES <br> (mm/dd/yyyy) From</label>
                          <input type="date" class="form-control" id="VII_I_D_From">
                        </div>
                        <div class="col-sm-6">
                          <label class="inputting" for="">INCLUSIVE DATES <br> (mm/dd/yyyy) To</label>
                          <input type="date" class="form-control" id="VII_I_D_To">
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-1">
                      <br>
                      <label class="inputting" for="">NUMBER OF HOURS</label>
                      <input type="text" class="form-control" id="VII_NOF" placeholder="Num of Hours">
                    </div>

                    <div class="col-sm-1">
                      <br>
                      <label class="inputting" for="">Type of L&D ( Managerial / Supervisory / Technical/etc) </label>
                      <input type="text" class="form-control" id="VII_TOLD" placeholder="Type of L&D">
                    </div>

                    <div class="col-sm-3">
                      <br>
                      <label class="inputting" for="">POSITION / NATURE OF WORK</label>
                      <input type="text" class="form-control" id="VII_POS_NOF" placeholder="Postion / Nature of Work">
                    </div>
                  </div>

                  <br>

                  <div class="form-group row">
                    <div class="col-sm-2 pb-3">
                      <input type="button" class="btn btn-dark" id="LADAdd" value="ADD TO TABLE">
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS</th>
                            <th scope="col">INCLUSIVE DATES OF ATTENDANCE FROM</th>
                            <th scope="col">INCLUSIVE DATES OF ATTENDANCE TO</th>
                            <th scope="col">NUMBER OF HOURS</th>
                            <th scope="col">Type of LD</th>
                            <th scope="col">POSITION / NATURE OF WORK</th>
                            <th scope="col">Control</th>
                          </tr>
                        </thead>
                        <tbody id="LAD">

                        </tbody>
                      </table>
                    </div>


                    <br>
                    <br>

                    <hr style="margin: 0;">
                  </div>

                  
                  <br>

                  <!-- <div class="form-group row">
                    <label for="" class="col-sm-1 col-form-label">SIGNATURE</label>
                    <div class="col-sm-5">
                      <input type="file" class="form-control" id="C3_Signature" placeholder="C3_Signature">
                    </div>

                    <label for="" class="col-sm-1 col-form-label">DATE</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control" id="C3_Date" placeholder="C3_Date">
                    </div>
                  </div> -->

                </div>
              </div>
          </div>
          <!-- END WHOLE C3 -->


          <!-- START WHOLE C4 -->
          <div class="tab-pane fade" id="nav-other-info2" role="tabpanel" aria-labelledby="nav-other-info2-tab">


             <div class="c4-container">
               <div class="c4-container-header"></div>
               <div class="c4-container-body">
                <br>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">34.</label>
                  <label for="" class="col-sm-6 col-form-label">Are you related by consanguinity or affinity to the appointing or recommending authority, or to the <br>
                    Bureau or Department where you will be apppointed,
                  </label>
                  <label for="" class="col-sm-5 col-form-label"></label>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label"></label>
                  <label for="" class="col-sm-6 col-form-label">a. within the third degree?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">

                    <input class="form-check-input" type="radio" name="TD" id="TDYes" value="Yes">
                    <label class="form-check-label" for="TDYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="TD" id="TDNo" value="No">
                    <label class="form-check-label" for="TDNo">
                      No
                    </label>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label"></label>
                  <label for="" class="col-sm-6 col-form-label">b. within the fourth degree (for Local Government Unit - Career Employees)?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">

                    <input class="form-check-input" type="radio" name="FD" id="FDYes" value="Yes">
                    <label class="form-check-label" for="FDYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="FD" id="FDNo" value="No">
                    <label class="form-check-label" for="FDNo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="FDDetails">If YES, give details:</label>
                    <textarea class="form-control" id="FDDetails" rows="3"></textarea>
                  </div>
                </div>

                <hr>


                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">35.</label>
                  <label for="" class="col-sm-6 col-form-label">a. Have you ever been found guilty of any administrative offense?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="AO" id="AOYes" value="Yes">
                    <label class="form-check-label" for="AOYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="AO" id="AONo" value="No">
                    <label class="form-check-label" for="AONo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="AODetails">If YES, give details:</label>
                    <textarea class="form-control" id="AODetails" rows="3"></textarea>
                  </div>
                </div>

                <br>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label"></label>
                  <label for="" class="col-sm-6 col-form-label">b. Have you been criminally charged before any court?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="CC" id="CCYes" value="Yes">
                    <label class="form-check-label" for="CCYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="CC" id="CCNo" value="No">
                    <label class="form-check-label" for="CCNo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="CCDate">If YES, give details:</label>
                    <div class="form-group row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3 col-form-label">
                        Date Filed: 
                      </div>
                      <div class="col-sm-8 col-form-label">
                        <input type="date" class="form-control" id="CCDate" placeholder="CCDate">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3 col-form-label">
                        Status of Case/s:
                      </div>
                      <div class="col-sm-8 col-form-label">
                        <input type="text" class="form-control" id="CCSOC" placeholder="Enter the status of your case.">
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">36.</label>
                  <label for="" class="col-sm-6 col-form-label">Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="CoV" id="CoVYes" value="Yes">
                    <label class="form-check-label" for="CoVYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="CoV" id="CoVNo" value="No">
                    <label class="form-check-label" for="CoVNo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="CoVDetails">If YES, give details:</label>
                    <textarea class="form-control" id="CoVDetails" rows="3"></textarea>
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">37.</label>
                  <label for="" class="col-sm-6 col-form-label">
                    Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal,
                    termination, end of term, finished contract or phased out (abolition) in the public or private sector?

                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="SFTS" id="SFTSYes" value="Yes">
                    <label class="form-check-label" for="SFTSYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="SFTS" id="SFTSNo" value="No">
                    <label class="form-check-label" for="SFTSNo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="SFTSDetails">If YES, give details:</label>
                    <textarea class="form-control" id="SFTSDetails" rows="3"></textarea>
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">38.</label>
                  <label for="" class="col-sm-6 col-form-label">a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="CNOLE" id="CNOLEYes" value="Yes">
                    <label class="form-check-label" for="CNOLEYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="CNOLE" id="CNOLENo" value="No">
                    <label class="form-check-label" for="CNOLENo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="CNOLEDetails">If YES, give details:</label>
                    <textarea class="form-control" id="CNOLEDetails" rows="3"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label"></label>
                  <label for="" class="col-sm-6 col-form-label">b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="RGS" id="RGSYes" value="Yes">
                    <label class="form-check-label" for="RGSYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="RGS" id="RGSNo" value="No">
                    <label class="form-check-label" for="RGSNo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="RGSDetails">If YES, give details:</label>
                    <textarea class="form-control" id="RGSDetails" rows="3"></textarea>
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">39.</label>
                  <label for="" class="col-sm-6 col-form-label">Have you acquired the status of an immigrant or permanent resident of another country?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="SIoPS" id="SIoPSYes" value="Yes">
                    <label class="form-check-label" for="SIoPSYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="SIoPS" id="SIoPSNo" value="No">
                    <label class="form-check-label" for="SIoPSNo">
                      No
                    </label>

                    <br>
                    <br>
                    <label for="SIoPSDetails">If YES, give details:</label>
                    <textarea class="form-control" id="SIoPSDetails" rows="3"></textarea>
                  </div>
                </div>

                <hr>


                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">40.</label>
                  <label for="" class="col-sm-6 col-form-label">Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                  </label>
                  <label for="" class="col-sm-5 col-form-label"></label>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">a.</label>
                  <label for="" class="col-sm-6 col-form-label">Are you a member of any indigenous group?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="IG" id="IGYes" value="Yes">
                    <label class="form-check-label" for="IGYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="IG" id="IGNo" value="No">
                    <label class="form-check-label" for="IGNo">
                      No
                    </label>

                    <br>
                    <br>
                    <div class="form-group row">
                      <div class="col-sm-4">
                        If Yes, please specify:
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="IGDetails" placeholder="Enter the name of your Indigenous Group.">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">b.</label>
                  <label for="" class="col-sm-6 col-form-label">Are you a person with disability?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="PwD" id="PwDYes" value="Yes">
                    <label class="form-check-label" for="PwDYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="PwD" id="PwDNo" value="No">
                    <label class="form-check-label" for="PwDNo">
                      No
                    </label>

                    <br>
                    <br>
                    <div class="form-group row">
                      <div class="col-sm-4">
                        If Yes, please specify ID No:
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="PwDDetails" placeholder="Enter your PWD I.D. Number.">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="" class="col-sm-1 col-form-label">c.</label>
                  <label for="" class="col-sm-6 col-form-label">Are you a solo parent?
                  </label>
                  <div for="" class="col-sm-5 col-form-label">
                    <input class="form-check-input" type="radio" name="SP" id="SPYes" value="Yes">
                    <label class="form-check-label" for="SPYes">
                      Yes
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-input" type="radio" name="SP" id="SPNo" value="No">
                    <label class="form-check-label" for="SPNo">
                      No
                    </label>

                    <br>
                    <br>
                    <div class="form-group row">
                      <div class="col-sm-4">
                        If Yes, please specify ID No:
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="SPDetails" placeholder="Enter your I.D. Number.">
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="holder-box-3">
                  <div class="box-2">

                    <div class="form-group row">
                      <label for="" class="col-sm-1">41.</label>
                      <label for="" class="col-sm-11">REFERENCES (Person not related by consanguinity or affinity to applicant /appointee)</label>
                    </div>

                    <br>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-labe border-end inputting-0 text-center">
                        NAME
                      </label>
                      <label for="" class="col-sm-4 col-form-label border-end inputting-0 text-center">
                        ADDRESS
                      </label>
                      <label for="" class="col-sm-4 col-form-label inputting-0 text-center">
                        TEL. NO.
                      </label>
                      
                    </div>



                    <div class="form-group row">
                      
                      <div class="col-sm-4">
                        <br>
                        <label class="inputting" for="RefName">NAME</label>
                        <input type="text" class="form-control" id="RefName" placeholder="Name">
                      </div>
  
                      <div class="col-sm-4">
                        <br>
                        <label class="inputting" for="">ADDRESS</label>
                        <input type="text" class="form-control" id="RefAddress" placeholder="Address">
                      </div>

                      <div class="col-sm-4">
                        <br>
                        <label class="inputting" for="">TEL. NO.</label>
                        <input type="text" class="form-control" id="RefTelNo" placeholder="Telephone Number">
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-4">
                          <br>
                          <input type="button" class="btn btn-dark" id="ReferencesAdd" value="ADD TO TABLE">
                          <br>
                          <br>
                        </div>
                      </div>

                      <br>

                      <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">NAME</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">TEL. NO.</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody id="reference">

                                </tbody>
                              </table>
                            </div>
                        </div>
                      </div>

                    </div>

                    <hr>

                    <div class="form-group row">
                      <label for="" class="col-sm-1">42.</label>
                      <label for="" class="col-sm-11">
                        I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein. I  agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.
                      </label>
                    </div>

                    <hr>

                  </div>
                  <div class="box-3">
                    <div class="box-3-picturebox">
                      <div class="box-3-picturebox-solo">
                        
                        ID picture taken within 
                        the last  6 months
                        3.5 cm. X 4.5 cm
                        (passport size)

                        With full and handwritten
                        name tag and signature over
                        printed name

                        Computer generated 
                        or photocopied picture 
                        is not acceptable

                        <br>
                        <br>

                        <input type="file" class="form-control" id="C4_Picture" placeholder="C4_Picture" name="C4_Picture">

                      </div>

                      <div class="box-3-picturebox-caption">
                        PHOTO
                      </div>
                    </div>
                  </div>

                </div>

                <hr>

                <div class="form-group row">
                  <div class="col-sm-4 border" style="padding: 15px;">

                    <div class="form-group row">
                      <div class="col-sm-12">Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.) <br> PLEASE INDICATE ID Number and Date of Issuance</div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <div class="form-group row">
                          <div class="col-sm-5">
                            Government Issued ID: 
                          </div>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="GIID" placeholder="Enter the ID Number">
                          </div>
                        </div>
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <div class="form-group row">
                          <div class="col-sm-5">
                            ID/License/Passport No.: 
                          </div>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="ID_L_PNO" placeholder="Enter the ID Number">
                          </div>
                        </div>
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <div class="form-group row">
                          <div class="col-sm-5">
                            Date/Place of Issuance:
                          </div>
                          <div class="col-sm-7">
                            <input type="date" class="form-control" id="D_PoI">
                          </div>
                        </div>
                      </div>
                    </div>


                    


                  </div>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <div class="col-sm-4 border" style="padding: 15px;">
                    <br>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="file" class="form-control" id="C4_Signature" placeholder="C4_Signature" name="C4_Signature">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12 text-center">
                        Signature (E-Sign inside the box)
                      </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="date" class="form-control" id="C4_Date" placeholder="C4_Date" name="C4_Date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12 text-center">
                        Date Accomplished
                      </div>
                    </div>

                  </div>     

                  <br>
                  
                  <div class="col-sm-3 submit-button" style="position: relative;">
                    <input type="hidden" name="info" id="info">
                    <input type="button" id="Submit" class="btn btn-primary" style="bottom: 0; right: 0; position: absolute;" value="Submit">
                  </div>
                </div>
             </div>
          </div>
          </div>
          <!-- END OF PAGE 4 -->

        </div>
                        
        <br>
    </div>

</body>
</html>