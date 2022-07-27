@extends('layouts.user')
@section('content')       

  
  <h2>Apply Borrow</h2>
  <input type="hidden" name="bitcoin" id="bitcoin" value="{{number_format(floatval($btcrate) , $gnl->decimal, '.', '')}} ">
  
  <ul class="nav nav-pills">
    <li class="{{$active_pf}}"><a data-toggle="pill" href="#home">Profile</a></li>
    <li class="{{$active_kyc}}"><a data-toggle="{{$kyc_enable}}" href="#menu1" >KYC / AML Verification</a></li>
    <li class="{{$active_b}}"><a data-toggle="{{$borrow}}" href="#menu2">Borrow</a></li>
    <!-- <li><a data-toggle="pill" href="#menu3">Menu 3</a></li> -->
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in {{$active_pf}}">
      <h3>Profile</h3>
      <p>
        <div class="right-content">
                <!-- begin register-header -->
              
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content" >
                    <form method="post" class="margin-bottom-0"action="{{ route('borrow.update_user') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name" required="">
                            </div>
                                  
                        </div>
                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email" required="" readonly>
                            </div>
                                <div class="col-md-5 m-b-15">
                                  <label class="control-label">Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control" value="{{$user->mobile}}" placeholder="Phone Number" required="">
                            </div>
                        </div>

                        <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Country <span class="text-danger">*</span></label>
                              <select name="countries" class="form-control">
                                <option value="{{$user->country}}">{{$user->country}}</option>
                <option value="United States">United States</option> 
                <option value="United Kingdom">United Kingdom</option> 
                <option value="Afghanistan">Afghanistan</option> 
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
                <option value="Israel">Israel</option> 
                <option value="Italy">Italy</option> 
                <option value="Jamaica">Jamaica</option> 
                <option value="Japan">Japan</option> 
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
                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
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
                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
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
                                    <div class="col-md-5 m-b-15">
                                   <label class="control-label">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" value="{{$user->city}}" class="form-control" placeholder="City" required="">
                            </div>
                        </div>


                        <label class="control-label">Address <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-10">
                                <input type="text" name="address" value="{{$user->address}}" class="form-control" placeholder="Address" required="">
                            </div>
                        </div>


                        <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Postal Code <span class="text-danger">*</span></label>
                                <input type="number" name="postal_code" value="{{$user->postal_code}}" class="form-control" placeholder="Postal code" required="">
                            </div>
                                <div class="col-md-5 m-b-15">
                                  <label class="control-label">Avatar <span class="text-danger">*</span></label>
                                  @if($user->avatar !="")
                                  <br>
                                  <img src="{{$user->avatar}}"  id="image_show" height="50px" width="50px">
                                  <input type="hidden" name="avatar_image" value="{{$user->avatar}}">                                  @else

                                <input type="file" name="avatar" class="form-control"  required="">
                                @endif
                            </div>
                        </div>

                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Twitter Profile URL </label>
                                <input type="text" name="twitter" value="{{$user->twitter_url}}" class="form-control" placeholder="Twitter url" >
                            </div>
                                <div class="col-md-5 m-b-15">
                                  <label class="control-label">Linkedin Profile URL </label>
                                <input type="text" name="linkedin" value="{{$user->linkedin_url}}" placeholder="Linkedin Url" class="form-control"  >
                            </div>
                        </div>


                            <button type="submit" style=" background-color: #008a8a; color: white;"  class="btn green">Save and Continue</button>
                    
                    </form>
                    <br>
                    <br>
                </div>
                <!-- end register-content -->
            </div>

      </p>
    </div>
    <div id="menu1" class="tab-pane fade in {{$active_kyc}}" >
      
      <p>
      <div class="register-content" >
         <form method="post" class="margin-bottom-0"action="{{ route('borrow.kyc_update') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <?php if(count($kyc)!=0){?>
                        <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">ID Proof <span class="text-danger">*</span></label>

                              <select name="id_proof" required="" class="form-control">
                                                 @if($kyc->id_proof_type =='PASSPORT')
                                                    <option selected="" value="PASSPORT">Passport</option>
                                                 @else
                                                    <option  value="PASSPORT">Passport</option>
                                                 @endif
                                                 @if($kyc->id_proof_type=='Rental Agreeent')
                                                <option selected value="Rental Agreeent">Rental Agreeent</option>
                                                @else
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                @endif
                                                @if($kyc->id_proof_type=='Social Security Card')
                                                <option selected value="Social Security Card">Social Security Card</option>
                                                @else
                                                <option value="Social Security Card">Social Security Card</option>
                                                @endif
                                                @if($kyc->id_proof_type =='Drivers License')
                                                <option selected value="Drivers License">Drivers License</option
                                                    >
                                                    @else
                                                    <option value="Drivers License">Drivers License</option>
                                                    @endif
                                                @if($kyc->id_proof_type =='Others')
                                                <option selected value="Others">Others</option>
                                                @else
                                                <option value="Others">Others</option>
                                                @endif
                                            </select>

                              <span>
                                <br>
                                <img src="{{$kyc->id_proof}}" width="100%" height="60%">

                                 <input type="hidden" name="id_pf"  class="form-control" value="{{$kyc->id_proof}}">
                                

                              </span>
                              <br><br>
                                          <input type="file" name="id_proof_url"  class="form-control" >                            </div>
                                    <div class="col-md-5 m-b-15">
                                       <label class="control-label">Address Proof <span class="text-danger">*</span></label>

                                       <select name="address_proof" required="" class="form-control">
                                                 @if($kyc->address_proof_type =='PASSPORT')
                                                    <option selected="" value="PASSPORT">Passport</option>
                                                 @else
                                                    <option  value="PASSPORT">Passport</option>
                                                 @endif
                                                 @if($kyc->address_proof_type=='Rental Agreeent')
                                                <option selected value="Rental Agreeent">Rental Agreeent</option>
                                                @else
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                @endif
                                                @if($kyc->address_proof_type=='Social Security Card')
                                                <option selected value="Social Security Card">Social Security Card</option>
                                                @else
                                                <option value="Social Security Card">Social Security Card</option>
                                                @endif
                                                @if($kyc->address_proof_type =='Drivers License')
                                                <option selected value="Drivers License">Drivers License</option
                                                    >
                                                    @else
                                                    <option value="Drivers License">Drivers License</option>
                                                    @endif
                                                @if($kyc->address_proof_type =='Others')
                                                <option selected value="Others">Others</option>
                                                @else
                                                <option value="Others">Others</option>
                                                @endif
                                           
                                            </select>
                                            <span>
                                                <br>
                                              <img src="{{$kyc->address_proof}}" width="100%" height="60%">
                                              <input type="hidden" name="address_pf"  class="form-control" value="{{$kyc->address_proof}}">
                                            </span>
                                            <br><br>
                                 <input type="file" name="address_proof_url"  class="form-control">
                            </div>
                        </div>
                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Face proof<span class="text-danger">*</span><br>
                             <sup> Note : Please make sure that you upload a High Resolution image. Your face should also be visible clear and the details in the ID proof should also be very easily readble.</sup>
                        </label><select name="face_proof" required="" class="form-control">

                                                @if($kyc->face_proof_type =='PASSPORT')
                                                    <option selected="" value="PASSPORT">Passport</option>
                                                 @else
                                                    <option  value="PASSPORT">Passport</option>
                                                 @endif
                                                 @if($kyc->face_proof_type=='Rental Agreeent')
                                                <option selected value="Rental Agreeent">Rental Agreeent</option>
                                                @else
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                @endif
                                                @if($kyc->face_proof_type=='Social Security Card')
                                                <option selected value="Social Security Card">Social Security Card</option>
                                                @else
                                                <option value="Social Security Card">Social Security Card</option>
                                                @endif
                                                @if($kyc->face_proof_type =='Drivers License')
                                                <option selected value="Drivers License">Drivers License</option
                                                    >
                                                    @else
                                                    <option value="Drivers License">Drivers License</option>
                                                    @endif
                                                @if($kyc->face_proof_type =='Others')
                                                <option selected value="Others">Others</option>
                                                @else
                                                <option value="Others">Others</option>
                                                @endif
                                            </select>
                                            <span>
                                                <br>
                                              <img src="{{$kyc->face_proof}}" width="100%" height="60%">
                                              <input type="hidden" name="face_pf"  class="form-control" value="{{$kyc->face_proof}}">
                                            </span>
                                            <br><br>
                                <input type="file" name="face_proof_url"  class="form-control" >
                            </div>
                               
                        </div>
                        
                    </div>
                     <?php }else{ ?>

                       <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">ID Proof <span class="text-danger">*</span></label>

                              <select name="id_proof" required="" class="form-control">
                                                
                                                    <option  value="PASSPORT">Passport</option>
                                            
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                
                                                <option value="Social Security Card">Social Security Card</option>
                                               
                                                    <option value="Drivers License">Drivers License</option>
                                                 
                                                <option value="Others">Others</option>
                                               
                                            </select>

                              <span>
                                <br>
                                

                              </span>
                              <br><br>
                                          <input type="file" name="id_proof_url"  class="form-control" >                            </div>
                                    <div class="col-md-5 m-b-15">
                                       <label class="control-label">Address Proof <span class="text-danger">*</span></label>

                                       <select name="address_proof" required="" class="form-control">
                                               
                                                    <option  value="PASSPORT">Passport</option>
                                                 
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                               
                                                <option value="Social Security Card">Social Security Card</option>
                                               
                                                    <option value="Drivers License">Drivers License</option>
                                                   
                                                <option value="Others">Others</option>
                                               
                                           
                                            </select>
                                            <span>
                                                <br>
                                            
                                            </span>
                                            <br><br>
                                 <input type="file" name="address_proof_url"  class="form-control">
                            </div>
                        </div>
                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Face proof<span class="text-danger">*</span><br>
                             <sup> Note : Please make sure that you upload a High Resolution image. Your face should also be visible clear and the details in the ID proof should also be very easily readble.</sup>
                        </label><select name="face_proof" required="" class="form-control">

                                   
                                                    <option  value="PASSPORT">Passport</option>
                                                 
                                              <option value="Rental Agreeent">Rental Agreeent</option>
                                                <option value="Social Security Card">Social Security Card</option>
                                                    <option value="Drivers License">Drivers License</option>
                                                  
                                                <option value="Others">Others</option>
                                               
                                            </select>
                                            <span>
                                                <br>
                                            </span>
                                            <br><br>
                                <input type="file" name="face_proof_url"  class="form-control" >
                            </div>
                               
                        </div>
                        
                    </div>

                  <?php } ?>

                 

                    <input type="submit" style="background-color: #008a8a; color: white;"  class="btn green" value="Save and Continue">
                </form>
         

  </p>

    </div>
    <div id="menu2" class="tab-pane fade in {{$active_b}}">
      <p>   
        <form name="borrow" method="post" action="{{route('borrow.apply')}}">

          {{ csrf_field() }}

          <input name="bitcoin_in_usd" id="bitcoin_in_usd" value="" type="hidden">
          <input name="bitcoin" id="bitcoin_value" value="" type="hidden">

         <div class="row row-space-10" >
                            <div class="col-md-4 m-b-15">
                              <label class="control-label">How much BTC would like to Borrow ? <span class="text-danger">*</span></label>

                               
                                <input type="text"  name="amount_in_btc" id="bitcoin_count" value="" class="form-control" placeholder="How many coins you Need ?" required="">
                            </div>
                                <div class="col-md-3 m-b-15">
                                  <label class="control-label">Total Repay amount in BTC <span class="text-danger">*</span></label>
                                  
                             
                                <input type="text" id="repay" name="repay" value="0" class="form-control"  readonly required="">
                          
                            </div>
                             <div class="col-md-3 m-b-15">
                                  <label class="control-label">Total Repay amount in USD <span class="text-danger">*</span></label>
                               
                                <input type="text" name="repay_usd" value="0" readonly class="form-control" id="repay_usd" required="">
                              
                              
                            </div>
                        </div>
                        <br><br>
                         <div class="row row-space-10">
                            <div class="col-md-2 m-b-15">
                              <label class="control-label">Term<span class="text-danger">*</span></label>
                                <select name="installment" class="form-control" id="term">

                                   
                                  <option value="3">3 Months</option>
                                  <option value="6">6 Months</option>
                                  <option value="12">12 Months</option>
                                  <option value="24">24 Months</option>
                                  <option value="36">36 Months</option>
                                 

                                </select>
                            </div>
                          <div class="col-md-3 m-b-15">
                                  <label class="control-label">Interst Percentage <span class="text-danger">*</span></label>
                                 <input type="hidden" name="intrest1" id="interst_value" value="">
                                <input type="text" name="intrest" value="0" readonly class="form-control" id="intrest" required="">
                              
                              
                            </div>
                                <div class="col-md-2 m-b-15">
                                  <label class="control-label">Monthly Payments in BTC<span class="text-danger">*</span></label>
                                
                                <input type="text" name="monthly_payments" value="0" readonly class="form-control" id="monthly_payments" required="">
                              
                              
                            </div>
                            <div class="col-md-3 m-b-15">
                                  <label class="control-label">Monthly Payments Value in USD <span class="text-danger">*</span></label>
                               
                                <input type="text" name="monthly_payments_usd" value="0" readonly class="form-control" id="monthly_payments_usd" required="">
                              
                              
                            </div>
                            <div class="col-md-10 ">
                            <label class="control-label">Reason for Borrowing ? <span class="text-danger">*</span></label>
                                <input type="text" name="reason" value="" class="form-control" placeholder="Reason for Borrowing ?" required="">
                            </div>
                            <br>
                             <div class="col-md-10 ">
                            <label class="control-label"><input checked type="checkbox" id="terms_conditions" name="terms_conditions" value="1"> &nbsp;Accept <a href="{{$gnl->terms_url}}">Terms and Conditions</a><span class="text-danger">*</span></label>
                                
                            </div>
                            
                        </div>
 <input type="submit" style="background-color: #008a8a; color: white;"  class="btn green" value="Apply">
</form>
                        </div>

      </p>
    </div>

</p>
</div>
</div>
<script>


    
    
    //var api_url1 = window.location.protocol + "//" + window.location.host + "/cryptocompare/";


 var bitcoin= document.getElementById('bitcoin').value;

  var api_url = window.location.protocol + "//" + window.location.host + "/user/home/getajaxMonth";

    console.log(api_url);


$('#bitcoin_count,#term').on('change',function(){

    
    
    var bitcoin_count= document.getElementById('bitcoin_count').value;


    var term= document.getElementById('term').value; 


var interst=0;
 $.ajax({
            type: "GET",
            url: api_url+'?month='+term,
            dataType:'json',
            success: function(data){
                console.log("interst : "+data);
         interst = data;

    document.getElementById('intrest').value=interst;

 

  var total_value= bitcoin * bitcoin_count;
  
  repay_intrest=(interst/100)*bitcoin_count;

console.log("bitcoin repay_usd  "+repay_usd);

  repay=Number(bitcoin_count)+Number(repay_intrest);

  console.log("bitcoin will borrow  "+bitcoin_count);
  repay_usd=(interst/100)*total_value+total_value;
console.log("bitcoin repay_usd  "+repay_usd);
  document.getElementById('interst_value').value=interst;
  ///document.getElementById('').value=;
  document.getElementById('repay').value=repay.toFixed(2);
  document.getElementById('repay_usd').value=repay_usd.toFixed(2);

  document.getElementById('monthly_payments').value=(repay/term).toFixed(2);
  document.getElementById('monthly_payments_usd').value=(repay_usd/term).toFixed(2);

  document.getElementById('bitcoin_in_usd').value=total_value;

  document.getElementById('bitcoin_value').value=bitcoin;

  //  interst_value= total_value*interst/100;

  // document.getElementById('coin_price').value=(total_value+interst_value).toFixed(2);

  // console.log("total interst :" + total_value * interst/100);


  // var monthly_payments= (total_value+interst_value)/term;

  // //console.log('Monthly Payments : '+ monthly_payments);

  // document.getElementById('monthly_payments').value=monthly_payments.toFixed(2);


            }

        });

});

window.onsubmit = function(){

if ($('input#terms_conditions').is(':checked')) {
   
    }else{
        alert("Please Accept Terms and Conditions");
        return false;
    }
}




</script>
@endsection

