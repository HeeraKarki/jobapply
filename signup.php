<?php
require_once 'autoload.php';
require_once 'template/head.php';
require_once 'template/nav.php';
?>
<style>
    @media (max-width: 600px) {
        #img-4, #img-5, #img-6 {
            display: none;
        }
    }

    .text-help {
        font-size: 11px;
        color: #d9534f;
        position: absolute;
    }

    .divMsg > .text-help {
        position: relative;
    }
</style>
<div class="login-section" style="padding-top: 100px;">
    <div class="login-wrap">
        <div class="inner-login-wrap signup-form">
            <div class="simple-signup-logos">


                <div class="col-sm-12 alert alert-danger" id="facebook-fail-alert" style="display: none">
                    <strong>Ooops</strong>, Your facebook log in failed. Please try again or log in using
                    your correct email address.
                </div>

                <div class="col-sm-12 alert alert-danger" id="divEmployerNotAllow" style="display: none">
                    <strong>Sorry</strong>, your email address is already registered as an Employer, please
                    try a different email address.
                </div>

                <h1>Sign Up Now and Move Up Today</h1>
                <p>Find your dream job with Top Employers</p>
                <div class="singup-logo-wrap">

                    <img src="https://cdn.jobnet.com.mm/images/can/mc/73/73/20160905104701-20160905102635-20160816033014-kbz-bank.png"
                         id="img-1"
                         alt="KBZ Bank"/>

                    <img src="https://cdn.jobnet.com.mm/images/can/mc/73/73/20170321012616-manpower3.PNG"
                         id="img-2"
                         alt="ManpowerGroup Myanmar"/>

                    <img src="https://cdn.jobnet.com.mm/images/can/mc/73/73/20160906092256-colgate.PNG"
                         id="img-3"
                         alt="Colgate Palmolive (Myanmar) Ltd."/>

                    <img src="https://cdn.jobnet.com.mm/images/can/mc/73/73/Capital-Automotives-(Gold).png"
                         id="img-4"
                         alt="Capital Automotive Ltd."/>

                    <img src="https://cdn.jobnet.com.mm/images/can/mc/73/73/201702200458142040.PNG"
                         id="img-5"
                         alt="MyWorld Careers Co., Ltd."/>

                    <img src="https://cdn.jobnet.com.mm/images/can/mc/73/73/201601171158198126.png"
                         id="img-6"
                         alt="Telenor Myanmar"/>

                </div>
                <div class="social-login-sec">
                    <a class="fbl" href="signup.html#" onclick="checkLoginState();">Continue with
                        Facebook</a>
                    <a class="inl" href="signup.html#" id="linked-in">Continue with Linkedin</a>
                    <span>OR</span>
                </div>
            </div>
            <span>Or Sign Up a New Account using your Email</span>

            <div class="tit">
                <div id="BodyPlaceHolder_divMsg" class="divMsg"></div>
            </div>


            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_LabelEmail">Email</span><span
                            class="star"> *</span></label>
                <i class="fa fa-envelope"></i>
                <input name="ctl00$BodyPlaceHolder$txtEmail" type="text" maxlength="50"
                       id="BodyPlaceHolder_txtEmail" class="form-control" placeholder="E-mail"/>


            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblPassword">Password</span><span
                            class="star"> *</span></label>
                <i class="fa fa-lock"></i>

                <input name="ctl00$BodyPlaceHolder$txtPassword" type="password" maxlength="18"
                       id="BodyPlaceHolder_txtPassword" class="form-control" placeholder="Password"
                       minlength="4"/>

            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblFirstName">First Name</span><span class="star"> *</span></label>
                <i class="fa fa-user"></i>

                <input name="ctl00$BodyPlaceHolder$txtFirstName" type="text" maxlength="50"
                       id="BodyPlaceHolder_txtFirstName" class="form-control" placeholder="Name"/>

            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblLastName">Last Name</span><span
                            class="star"> *</span></label>
                <i class="fa fa-user"></i>

                <input name="ctl00$BodyPlaceHolder$txtLastName" type="text" maxlength="50"
                       id="BodyPlaceHolder_txtLastName" class="form-control" placeholder="Name"/>

            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_LabelPhoneNumber">Phone Number</span><span
                            class="star"> *</span></label>
                <i class="fa fa-phone"></i>


                <input name="ctl00$BodyPlaceHolder$txtPhoneNumber" type="text" maxlength="20"
                       id="BodyPlaceHolder_txtPhoneNumber" class="sign-up-input"
                       placeholder="+95 1 502 077"/>
            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblJobTitle">What are you looking for</span><span
                            class="star"> *</span></label>
                <i class="fa fa-user"></i>
                <input name="ctl00$BodyPlaceHolder$txtJobTitle" type="text" maxlength="50"
                       id="BodyPlaceHolder_txtJobTitle" class="sign-up-input" placeholder="Job Title"/>

            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblJobFunction">Your Primary Job Function</span><span
                            class="star"> *</span></label>
                <select name="ctl00$BodyPlaceHolder$ddlJobFunction" id="BodyPlaceHolder_ddlJobFunction"
                        class="sign-up-select">
                    <option value="0">Choose Job Function</option>
                    <option value="1">Accounting/Finance</option>
                    <option value="2">Administrative</option>
                    <option value="4">Consulting</option>
                    <option value="6">Customer Service/Support</option>
                    <option value="7">Design/Architecture</option>
                    <option value="8">Driver/Security/Cleaning</option>
                    <option value="9">Education/Teaching/Childcare</option>
                    <option value="10">Engineering/Technical</option>
                    <option value="12">Fitness/Wellbeing</option>
                    <option value="13">Food and Beverage</option>
                    <option value="14">Hair/Nails and Beauty</option>
                    <option value="16">HR/Training and Recruitment</option>
                    <option value="15">Hospitality/Tourism</option>
                    <option value="17">IT Hardware/Software</option>
                    <option value="18">Legal</option>
                    <option value="19">Logistics/Distribution</option>
                    <option value="20">Management</option>
                    <option value="21">Manufacturing/Warehouse</option>
                    <option value="22">Marketing/Media/Creative</option>
                    <option value="23">Medical/Doctor/Nursing</option>
                    <option value="25">PR/Communications</option>
                    <option value="38">Procurement/Sourcing</option>
                    <option value="24">Project Management</option>
                    <option value="26">Quality Assurance</option>
                    <option value="27">Research and Development</option>
                    <option value="30">Sales/Business Development</option>
                    <option value="31">Science/Technology</option>
                    <option value="32">Skilled Trades / Construction</option>
                    <option value="33">Strategy/Planning</option>
                    <option value="34">Translation</option>
                    <option value="35">Voluntary work</option>
                    <option value="36">Writing/Editing</option>
                    <option value="37">Others</option>

                </select>

            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblExperienceLevel">Your Experience Level</span><span
                            class="star"> *</span></label>
                <select name="ctl00$BodyPlaceHolder$ddlExperienceLevel"
                        id="BodyPlaceHolder_ddlExperienceLevel" class="sign-up-select">
                    <option value="0">Choose Experience Level</option>
                    <option value="1">Entry Level</option>
                    <option value="2">Experienced Non-Manager</option>
                    <option value="3">Manager</option>
                    <option value="4">Director and Above</option>

                </select>

            </div>
            <div class="wrap-input form-group">
                <label><span id="BodyPlaceHolder_lblLocation">Your Current Location</span><span
                            class="star"> *</span></label>
                <select name="ctl00$BodyPlaceHolder$ddlLocation" id="BodyPlaceHolder_ddlLocation"
                        class="sign-up-select">
                    <option value="0">Choose Location</option>
                    <option selected="selected" value="1">Yangon</option>
                    <option value="2">Mandalay</option>
                    <option value="3">NayPyiTaw</option>
                    <option value="9">Ayeyawady Division</option>
                    <option value="5">Bago Division</option>
                    <option value="14">Chin State</option>
                    <option value="10">Kachin State</option>
                    <option value="15">Kayah State</option>
                    <option value="13">Kayin State</option>
                    <option value="7">Magway Division</option>
                    <option value="8">Mon State</option>
                    <option value="11">Rakhine State</option>
                    <option value="6">Sagaing Division</option>
                    <option value="4">Shan State</option>
                    <option value="12">Taninthayi Division</option>
                    <option value="16">International</option>

                </select>

            </div>


            <div class="wrap-input">

                <input type="submit" name="ctl00$BodyPlaceHolder$btnSave" value="Register"
                       onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$BodyPlaceHolder$btnSave&quot;, &quot;&quot;, true, &quot;save&quot;, &quot;&quot;, false, false))"
                       id="BodyPlaceHolder_btnSave" class="login-button" style="width: 100%"/>
            </div>


            <span>Already have an account?</span>
            <div class="wrap-input">
                <a href="login.html" class="signup-button">Log In</a>
            </div>
        </div>
    </div>
</div> <!-- End of login-section -->

<?php
require_once 'template/foot.php';
?>



