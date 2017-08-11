<?php
require_once 'autoload.php';
require_once 'template/head.php';
require_once 'template/nav.php';
?>

    <style>
        .text-help {
            font-size: 11px;
            color: #d9534f;
            position: absolute;
        }

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) /*Iphone 6 Plus*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 100px;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) /*Iphone 6*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 60px;
            }

            .wrap-emply {
                width: 322px;
                margin: 0px auto;
                margin-left: -11px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }

        @media only screen and (min-device-width: 360px) and (max-device-width: 640px) /*Galaxy 5s*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 35px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }

        @media only screen and (min-device-width: 412px) and (max-device-width: 732px) /*Nexus 5X*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 80px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }

        @media only screen and (max-device-width: 359px) /*Iphone 5*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-left: -12px;
                margin-right: 6px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }
    </style>


    <div class="loginpage">


        <div class="top-nav">
            <div class="onepcssgrid-1200">
                <div class="onerow">
                    <div class="col12">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="LOGO"/></a>
                        </div>
                        <a href="login.html#" id="mobile-btn"><i class="fa fa-bars"></i></a>
                        <a href="employers.html"
                           class="find-job-post">Employers<span>Post Jobs &amp; Find Talent</span></a>
                        <div class="signin-signup">
                            <ul>

                                <li><a href="login.html#" class="flag flag-mm"></a></li>

                                <li>
                                    <a class="log" href="signup.html"
                                       style=''>Register</a>
                                </li>
                                <li>
                                    <a class="log" href="login.html">Login</a>
                                </li>


                            </ul>
                        </div>
                        <div class="search-wrap">
                            <a href="login.html#" id="src-btn" class="search-icon"><i class="fa fa-search"></i></a>
                            <div id="src-show" class="form-group">
                                <input class="form-control" placeholder="Search" type="text" id="txtTopSearch"
                                       name="txtTopSearch">
                            </div>
                        </div>
                        <div id="mobile-show" class="onlymobile collapsed">
                            <ul>

                                <li><a href="login.html#" id="burmese" class="flag flag-mm"></a></li>

                                <li>
                                    <a href="employers.html" class="find-job-post-mb">
                                        <i class="fa fa-briefcase"></i>Employers - Post Jobs & Find Talent</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of top-nav -->


        <div class="login-section">
            <div class="login-wrap">
                <div class="inner-login-wrap signup-form">

                    <h3>Sign In with your Job Seeker Account</h3>

                    <div class="alert-danger" id="facebook-fail-alert" style="display: none">
                        <strong>Ooops</strong>, Your facebook log in failed. Please try again or log in using an
                        email address only.
                    </div>

                    <div class="col-sm-12 alert alert-danger" id="divEmployerNotAllow" style="display:none;">
                        <strong>Ooops</strong>, Employer don't allow to log-in with social media. Please use email
                        instead.
                    </div>

                    <div class="simple-signup-logos">
                        <div class="social-login-sec full-width">
                            <a class="fbl" href="login.html#" onclick="checkLoginState();">Continue with
                                Facebook</a>
                            <a class="inl" id="linked-in" href="login.html#">Continue with Linkedin</a>
                            <span>OR</span>
                        </div>
                    </div>



                    <div class="login-email-block wrap-input form-group">
                        <div id="BodyPlaceHolder_divAlert" class="tit" style="">
                            <span id="BodyPlaceHolder_lblTitle"><font color="#F0794E" size="3"></font></span>
                        </div>
                        <label><span id="BodyPlaceHolder_LabelEmail">Email</span></label>
                        <i class="fa fa-envelope"></i>
                        <input name="ctl00$BodyPlaceHolder$txtEmail" type="text" id="BodyPlaceHolder_txtEmail"
                               class="form-control" placeholder="E-mail" required="" maxlength="50"
                               data-ajax="https://bunnyjs.com/api/users/email-exists/?q={value}"
                               onKeyPress="javascript:if (event.keyCode == 13) $(&#39;#ContentPlaceHolder1_btnSignIn&#39;).click();"/>


                    </div>
                    <div class="wrap-input form-group">
                        <label><span id="BodyPlaceHolder_LabelPassword">Password</span></label>
                        <i class="fa fa-lock"></i>
                        <input name="ctl00$BodyPlaceHolder$txtLoginPassword" type="password"
                               id="BodyPlaceHolder_txtLoginPassword" class="form-control" placeholder="Password"
                               required="" minlength="4" maxlength="18"
                               onKeyPress="javascript:if (event.keyCode == 13) $(&#39;#ContentPlaceHolder1_btnSignIn&#39;).click();"/>

                    </div>
                    <div class="wrap-input">
                        <input type="submit" name="ctl00$BodyPlaceHolder$btnSignIn" value="Log In"
                               onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$BodyPlaceHolder$btnSignIn&quot;, &quot;&quot;, true, &quot;m&quot;, &quot;&quot;, false, false))"
                               id="BodyPlaceHolder_btnSignIn" class="login-button"/>
                        <div>

                        </div>
                    </div>
                    <div class="wrap-input">
                        <div class="check" style="display:none">
                            <input type="checkbox">
                            <label>keep me logged in</label>
                        </div>
                        <center><a href="forgot-password.html" class="forget-pass" style="float:none;">Forgot your
                                password?</a></center>
                    </div>
                    <span>Don't have an account?</span>
                    <div class="wrap-input">
                        <a href="signup.html" class="signup-button">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once 'template/foot.php';
?>