<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "inc/topBarNav.php";
    if( file_exists($page)) include($page);
    else include("404.php");
?>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg"
        data-background="assets/img/banner/breadcrumb-01.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                    <div class="tp-breadcrumb">
                        <div class="tp-breadcrumb__link mb-10">
                            <span class="breadcrumb-item-active"><a href="./">Home</a></span>
                            <span>Login</span>
                        </div>
                        <h2 class="tp-breadcrumb__title">Login Here</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <div class="col-lg-12 col-sm-12">
        <div class="tptrack__product mb-40">
            <div class="tptrack__content grey-bg-3">
                <div class="tptrack__item d-flex mb-20">
                    <div class="tptrack__item-icon">
                        <img src="assets/img/icon/lock.png" alt="">
                    </div>
                    <div class="tptrack__item-content">
                        <h4 class="tptrack__item-title">Secure Login</h4>
                        <p>Your personal data will be used to support your experience throughout this website, to manage
                            access to your account.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <hr>
                    <form action="" id="login-form">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control form tptrack__email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control form" name="password" required>
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-between">
                            <strong><a href="registration.php" id="create_account" class="tptrack__item-content">Create
                                    Account</a></strong>
                            <button class="tp-btn tp-color-btn banner-animation">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <script>
        $(function() {
            $('#create_account').click(function() {
                uni_modal("", "registration.php", "mid-large")
            })
            $('#login-form').submit(function(e) {
                e.preventDefault();
                start_loader()
                if ($('.err-msg').length > 0)
                    $('.err-msg').remove();
                $.ajax({
                    url: _base_url_ + "classes/Login.php?f=login_user",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    error: err => {
                        console.log(err)
                        alert_toast("an error occured", 'error')
                        end_loader()
                    },
                    success: function(resp) {
                        if (typeof resp == 'object' && resp.status == 'success') {
                            alert_toast("Login Successfully", 'success')
                            setTimeout(function() {
                                location.reload()
                            }, 2000)
                        } else if (resp.status == 'incorrect') {
                            var _err_el = $('<div>')
                            _err_el.addClass("alert alert-danger err-msg").text(
                                "Incorrect Credentials.")
                            $('#login-form').prepend(_err_el)
                            end_loader()

                        } else {
                            console.log(resp)
                            alert_toast("an error occured", 'error')
                            end_loader()
                        }
                    }
                })
            })
        })
        </script>
        </div>

        <?php require_once('inc/footer.php') ?>
</body>

</html>