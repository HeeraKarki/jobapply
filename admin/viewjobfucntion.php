<?php
require_once 'autoload.php';
require_once '../template/head.php';
require_once '../template/nav.php';
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
        <div class="inner-login-wrap signup-form" style="height: 128px;">
            <div class="simple-signup-logos">


                <div class="col-sm-12 alert alert-danger" id="facebook-fail-alert" style="display: none">
                    <strong>Ooops</strong>, Your facebook log in failed. Please try again or log in using
                    your correct email address.
                </div>

                <div class="col-sm-12 alert alert-danger" id="divEmployerNotAllow" style="display: none">
                    <strong>Sorry</strong>, your email address is already registered as an Employer, please
                    try a different email address.
                </div>




            </div>
            <h1>Add Job Function</h1>
            <div class="tit">
                <div id="BodyPlaceHolder_divMsg" class="divMsg"></div>
            </div>


            <div class="wrap-input form-group">
                <input type="text">

            </div>


            <div class="wrap-input">

                <input type="submit" class="login-button" style="width: 100%"/>
            </div>



        </div>
    </div>
</div> <!-- End of login-section -->

<?php
require_once 'template/foot.php';
?>



