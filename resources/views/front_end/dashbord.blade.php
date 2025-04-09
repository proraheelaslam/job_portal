@extends('front_end.layouts.app')
@section('content')

<main class="main">
      <section class="section-box">
            <div class="banner-hero hero-2 hero-3">
              <div class="banner-inner">
                <div class="block-banner">
                  <h1 class="text-42 color-white wow animate__animated animate__fadeInUp">Prashant Daebak <span class="color-green"> <br class="d-none d-lg-block"> AI-Powered Platform for </span><br class="d-none d-lg-block">Job Prep, Exams & Everyday Life Solutions</h1>
                  <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Prashant Daebak offers an advanced AI-driven platform designed to simplify your daily challenges—from job preparation and exam success to solving everyday problems. Boost your productivity and achieve your goals effortlessly with intelligent, personalized assistance.</div>
                  <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                    <form>
                      <div class="box-industry">
                        <select class="form-input mr-10 select-active input-industry">
                          <option value="0">Industry</option>
                          <option value="1">Software</option>
                          <option value="2">Finance</option>
                          <option value="3">Recruting</option>
                          <option value="4">Management</option>
                          <option value="5">Advertising</option>
                          <option value="6">Development</option>
                        </select>
                      </div>
                      <select class="form-input mr-10 select-active">
                        <option value="">Location</option>
                        <option value="AX">Aland Islands</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
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
                        <option value="PW">Belau</option>
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
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo (Brazzaville)</option>
                        <option value="CD">Congo (Kinshasa)</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Cura&ccedil;ao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
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
                        <option value="MO">Macao S.A.R., China</option>
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
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PS">Palestinian Territory</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="QA">Qatar</option>
                        <option value="IE">Republic of Ireland</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="ST">São Tomé and Príncipe</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="SX">Saint Martin (Dutch part)</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="SM">San Marino</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia/Sandwich Islands</option>
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
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom (UK)</option>
                        <option value="US">USA (US)</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="WS">Western Samoa</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                      <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
                      <button class="btn btn-default btn-find font-sm">Search</button>
                    </form>
                  </div>
                  <div class="list-tags-banner mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches:</strong><a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div>
                </div>
              </div>
              <div class="container mt-60">
                <div class="box-swiper mt-50">
                  <div class="swiper-container swiper-group-5 swiper">
                    <div class="swiper-wrapper pb-25 pt-5">
                      <div class="swiper-slide hover-up"><a href="jobs-list.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/marketing.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Marketing &amp; Sale</h4>
                              <p class="font-xs">1526<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/customer.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Customer Help</h4>
                              <p class="font-xs">185<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/finance.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Finance</h4>
                              <p class="font-xs">168<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-list.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/lightning.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Software</h4>
                              <p class="font-xs">1856<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/human.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Human Resource</h4>
                              <p class="font-xs">165<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/management.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Management</h4>
                              <p class="font-xs">965<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-list.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/retail.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Retail &amp; Products</h4>
                              <p class="font-xs">563<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/security.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Security Analyst</h4>
                              <p class="font-xs">254<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/content.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Content Writer</h4>
                              <p class="font-xs">142<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                      <div class="swiper-slide hover-up"><a href="jobs-list.html">
                          <div class="item-logo">
                            <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/research.svg') }}"></div>
                            <div class="text-info-right">
                              <h4>Market Research</h4>
                              <p class="font-xs">532<span> Jobs Available</span></p>
                            </div>
                          </div></a>
                      </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-style-border"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
      <section class="section-box mt-70">
        <div class="container">
            <div class="text-center">
                  <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs of the day</h2>
                  <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster.</p>
                  <div class="list-tabs mt-40">
                    <ul class="nav nav-tabs" role="tablist">
                      <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="{{ asset('front_end/assets/imgs/page/homepage1/management.svg') }}" alt="jobBox"> Management</a></li>
                      <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="{{ asset('front_end/assets/imgs/page/homepage1/marketing.svg') }}" alt="jobBox"> Marketing &amp; Sale</a></li>
                      <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="{{ asset('front_end/assets/imgs/page/homepage1/finance.svg') }}" alt="jobBox"> Finance</a></li>
                      <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="{{ asset('front_end/assets/imgs/page/homepage1/human.svg') }}" alt="jobBox"> Human Resource</a></li>
                      <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="{{ asset('front_end/assets/imgs/page/homepage1/retail.svg') }}" alt="jobBox"> Retail &amp; Products</a></li>
                      <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="{{ asset('front_end/assets/imgs/page/homepage1/content.svg') }}" alt="jobBox"> Content Writer</a></li>
                    </ul>
                  </div>
                </div>
                
          <div class="mt-50">
            <div class="tab-content" id="myTabContent-1">
              <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UX Designer &amp; Researcher remote</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy                        </a>
                        </div>
                        <div class="card-2-bottom mt-20">
                              <div class="row">
                                    <div class="col-lg-7 col-md-7">
                                      <div class="d-flex">
                                        <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png') }}" alt="jobBox">
                                        <div class="info-right-img">
                                          <h6 class="color-brand-1 lh-14">Linkedin</h6>
                                          <span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 text-end">
                                      <span class="card-text-price">$200</span><span class="text-muted">/Hour</span>
                                    </div>
                                  </div>
                                  
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Java</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">C++</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Swift</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">PHP</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-3.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$350</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-4.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$100</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-5.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$50</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-6.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-7.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-8.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$160</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-9.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UX Designer &amp; Researcher</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-10.png') }}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UX Designer &amp; Researcher remote</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy                        </a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Java</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">C++</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Swift</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">PHP</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-3.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$350</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-4.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$100</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-5.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$50</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-6.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-7.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-8.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$160</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-9.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UX Designer &amp; Researcher</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-10.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UX Designer &amp; Researcher remote</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy                        </a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Java</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">C++</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Swift</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">PHP</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-3.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$350</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-4.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$100</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-block-info pt-25">
                        <h6><a href="job-details.html">Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                        <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                        </div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                              <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-5.png')}}" alt="jobBox">
                                <div class="info-right-img">
                                  <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$50</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20">
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-6.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end">
                                  <span class="card-text-price">$120</span><span class="text-muted">/Hour</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20">
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-7.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end">
                                  <span class="card-text-price">$150</span><span class="text-muted">/Hour</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20">
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-8.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end">
                                  <span class="card-text-price">$160</span><span class="text-muted">/Hour</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20">
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                              <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-9.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end">
                                  <span class="card-text-price">$200</span><span class="text-muted">/Hour</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    




                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">UX Designer &amp; Researcher</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-10.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-2 grid-bd-16 hover-up">
                          <div class="card-block-info pt-25">
                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                            <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                            <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                            </div>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-7 col-md-7">
                                  <div class="d-flex">
                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png') }}" alt="jobBox">
                                    <div class="info-right-img">
                                      <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                  <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">UX Designer &amp; Researcher remote</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20">
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                          </div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex">
                                  <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20">
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Java</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">C++</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Swift</a>
                          </div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex">
                                  <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20">
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">PHP</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                          </div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex">
                                  <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-3.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$350</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20">
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                          </div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex">
                                  <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-4.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$100</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Java Software Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20">
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                          </div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex">
                                  <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-5.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$50</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Frontend Developer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20">
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a>
                            <a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a>
                          </div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex">
                                  <img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-6.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                  <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">UX Designer &amp; Researcher remote</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-1.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Java</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">C++</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Swift</a></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-2.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$200</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">PHP</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">JavaScript</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-3.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$350</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-4.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$100</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Java Software Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-5.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$50</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-block-info pt-25">
                          <h6><a href="job-details.html">Frontend Developer</a></h6>
                          <div class="mt-5"><span class="card-briefcase mr-15">Remote</span><span class="card-time">3 mins ago</span></div>
                          <div class="mt-20 border-bottom pb-20"><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Illustrator</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Sketch</a><a class="btn btn-grey-small bg-14 mb-5 mr-5" href="jobs-grid.html">Lunacy</a></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/brands/brand-6.png') }}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">Linkedin</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">New York, US</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end"><span class="card-text-price">$120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                

            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-70">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Candidates</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Jobs is a curated job board of the best jobs for developers, designers and marketers in the tech industry.</p>
        </div>
        <div class="mt-50">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left">
                            <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/candidates/user1.png') }}"></figure></a></div>
                            <div class="card-profile pt-10"><a href="candidate-details.html">
                                <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                <div class="rate-reviews-small pt-5"><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                            </div>
                        </div>
                        <div class="card-block-info">
                            <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a></div>
                            </div>
                            <div class="employers-info align-items-center justify-content-center mt-15">
                                <div class="row">
                                    <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                    <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left">
                            <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/candidates/user2.png') }}"></figure></a></div>
                            <div class="card-profile pt-10"><a href="candidate-details.html">
                                <h5>Cody Fisher</h5></a><span class="font-xs color-text-mutted">Python developer</span>
                                <div class="rate-reviews-small pt-5"><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                            </div>
                        </div>
                        <div class="card-block-info">
                            <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a></div>
                            </div>
                            <div class="employers-info align-items-center justify-content-center mt-15">
                                <div class="row">
                                    <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                    <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left">
                            <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/candidates/user3.png') }}"></figure></a></div>
                            <div class="card-profile pt-10"><a href="candidate-details.html">
                                <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">Content Manager</span>
                                <div class="rate-reviews-small pt-5"><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                            </div>
                        </div>
                        <div class="card-block-info">
                            <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a></div>
                            </div>
                            <div class="employers-info align-items-center justify-content-center mt-15">
                                <div class="row">
                                    <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                    <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left">
                            <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/candidates/user4.png') }}"></figure></a></div>
                            <div class="card-profile pt-10"><a href="candidate-details.html">
                                <h5>Jane Cooper</h5></a><span class="font-xs color-text-mutted">Network</span>
                                <div class="rate-reviews-small pt-5"><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                            </div>
                        </div>
                        <div class="card-block-info">
                            <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a></div>
                            </div>
                            <div class="employers-info align-items-center justify-content-center mt-15">
                                <div class="row">
                                    <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                    <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Continue this pattern for other candidates -->
            </div>
            <div class="row mt-40 mb-60">
                <div class="col-lg-12">
                    <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

      <div class="section-box mb-30">
        <div class="container">
          <div class="box-we-hiring">
            <div class="text-1"><span class="text-we-are">We are</span><span class="text-hiring">Hiring</span></div>
            <div class="text-2">Let&rsquo;s <span class="color-brand-1">Work</span> Together<br> &amp; <span class="color-brand-1">Explore</span> Opportunities</div>
            <div class="text-3">
              <div class="btn btn-apply btn-apply-icon" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-box mt-70">
        <div class="container">
          <div class="box-trust">
            <div class="row">
              <div class="left-trust col-lg-2 col-md-3 col-sm-3 col-3">
                <h4 class="color-text-paragraph-2">Trusted by</h4>
              </div>
              <div class="right-logos col-lg-10 col-md-9 col-sm-9 col-9">
                <div class="box-swiper">
                  <div class="swiper-container swiper-group-7 swiper">
                        <div class="swiper-wrapper">
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/microsoft.svg') }}" alt="jobBox"></a></div>
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/sony.svg') }}" alt="jobBox"></a></div>
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/acer.svg') }}" alt="jobBox"></a></div>
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/nokia.svg') }}" alt="jobBox"></a></div>
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/asus.svg') }}" alt="jobBox"></a></div>
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/casio.svg') }}" alt="jobBox"></a></div>
                              <div class="swiper-slide"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/homepage3/dell.svg') }}" alt="jobBox"></a></div>
                            </div>
                            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="section-box bg-15 pt-50 pb-50 mt-80">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center mb-30"><img class="img-job-search mt-20" src="{{ asset('front_end/assets/imgs/page/homepage3/img-job-search.png')}}" alt="jobBox"></div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
              <h2 class="mb-40">Job search for people passionate about startup</h2>
              <div class="box-checkbox mb-30">
                <h6>Create an account</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
              <div class="box-checkbox mb-30">
                <h6>Search for Jobs</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
              <div class="box-checkbox mb-30">
                <h6>Save &amp; Apply</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Recruiters</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next career move, freelance gig, or internship</p>
          </div>
        </div>
        <div class="container">
          <div class="box-swiper mt-50">
            <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
              <div class="swiper-wrapper pt-5">
                <div class="swiper-slide">
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-1.png')}}"></div>
                        <div class="text-info-right">
                          <h4>Linkedin</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg')}}"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg')}}"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                      </div></a></div>

                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-2.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Adobe</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">17<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-3.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Dailymotion</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">65<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-4.png') }}"></div>
                          <div class="text-info-right">
                            <h4>NewSum</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-5.png') }}"></div>
                          <div class="text-info-right">
                            <h4>PowerHome</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-6.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Whop.com</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">56<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-7.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Greewood</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">78<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      

                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-8.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Kentucky</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">98<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-9.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Qeuity</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">90<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-10.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Honda</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-5.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Toyota</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">26<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      


                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-3.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Lexuxs</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>27</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">54<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-6.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Ondo</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">58<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-2.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Square</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>16</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">37<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                      <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                        <div class="item-logo">
                          <div class="image-left"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/brands/brand-8.png') }}"></div>
                          <div class="text-info-right">
                            <h4>Vista</h4><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}">
                            <span class="font-xs color-text-mutted ml-10"><span>(</span><span>97</span><span>)</span>
                          </div>
                          <div class="text-info-bottom mt-5">
                            <span class="font-xs color-text-mutted icon-location">New York, US</span>
                            <span class="font-xs color-text-mutted float-end mt-5">43<span> Open Jobs</span></span>
                          </div>
                        </div>
                      </a></div>
                      
                </div>
              </div>
            </div>
            <div class="swiper-button-next swiper-button-next-1"></div>
            <div class="swiper-button-prev swiper-button-prev-1"></div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-12 mb-15 mb-lg-0">
                  <div class="box-radius-8 bg-urgent hover-up">
                    <div class="image">
                      <figure><img src="{{ asset('front_end/assets/imgs/page/homepage2/job-tools.png') }}" alt="jobBox"></figure>
                    </div>
                    <div class="text-info">
                      <h3>Job Tools Services</h3>
                      <p class="font-sm color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
                      <div class="mt-15"><a class="btn btn-arrow-right" href="#">Find Out More</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="box-radius-8 bg-9 hover-up">
                    <div class="image">
                      <figure><img src="{{ asset('front_end/assets/imgs/page/homepage2/planning-job.png') }}" alt="jobBox"></figure>
                    </div>
                    <div class="text-info">
                      <h3>Planning a Job?</h3>
                      <p class="font-sm color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
                      <div class="mt-15"><a class="btn btn-arrow-right" href="#">Find Out More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <section class="section-box mt-50 mb-50">
            <div class="container">
              <div class="text-center">
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
                <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
              </div>
            </div>
            <div class="container">
              <div class="mt-50">
                <div class="box-swiper style-nav-top">
                  <div class="swiper-container swiper-group-3 swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                      <div class="swiper-slide">
                        <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                          <div class="text-center card-grid-3-image"><a href="#">
                              <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/img-news1.png') }}"></figure></a></div>
                          <div class="card-block-info">
                            <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                            <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world’s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-6 col-6">
                                  <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/page/homepage1/user1.png') }}" alt="jobBox">
                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                  </div>
                                </div>
                                <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                          <div class="text-center card-grid-3-image"><a href="#">
                              <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/img-news2.png') }}"></figure></a></div>
                          <div class="card-block-info">
                            <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">Events</a></div>
                            <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world’s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-6 col-6">
                                  <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/page/homepage1/user2.png') }}" alt="jobBox">
                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                  </div>
                                </div>
                                <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                          <div class="text-center card-grid-3-image"><a href="#">
                              <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/img-news3.png') }}"></figure></a></div>
                          <div class="card-block-info">
                            <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                            <h5><a href="blog-details.html">Interview Question: Why Don't You Have a Degree?</a></h5>
                            <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you don’t have a degree, and read example answers that can help you craft your own response.</p>
                            <div class="card-2-bottom mt-20">
                              <div class="row">
                                <div class="col-lg-6 col-6">
                                  <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/page/homepage1/user3.png') }}" alt="jobBox">
                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">William Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                  </div>
                                </div>
                                <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
              </div>
            </div>
          </section>
          
          <section class="section-box mt-50 mb-20">
            <div class="container">
              <div class="box-newsletter">
                <div class="row">
                  <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{ asset('front_end/assets/imgs/template/newsletter-left.png') }}" alt="jobBox"></div>
                  <div class="col-lg-12 col-xl-6 col-12">
                    <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                    <div class="box-form-newsletter mt-40">
                      <form class="form-newsletter">
                        <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                        <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                      </form>
                    </div>
                  </div>
                  <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{ asset('front_end/assets/imgs/template/newsletter-right.png') }}" alt="jobBox"></div>
                </div>
              </div>
            </div>
          </section>
          
    </main>
    @endsection