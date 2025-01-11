<!-- header-area-start -->
<header>
    <div class="header-top space-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="header-welcome-text ">
                        <span>Welcome to our Kitenge shop! Enjoy free shipping around Kampala, Uganda</span>
                        <a href="">Contact Us Today<i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <div class="headertoplag d-flex align-items-center justify-content-end">
                        <div class="headertoplag__lang">
                            <ul>
                                <li>
                                    <a href="#">
                                        English
                                        <span><i class="fal fa-angle-down"></i></span>
                                    </a>
                                    <ul class="header-meta__lang-submenu">
                                        <li>
                                            <a href="#">Kiswahili</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainmenuarea d-none d-xl-block">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="mainmenu d-flex align-items-center">

                        <form class="form-inline" id="search-form">
                            <div class="mainmenu__search-bar p-relative">
                                <div class="input-group">
                                    <input class="form-control form-control-sm form " type="search" placeholder="Search"
                                        aria-label="Search" name="search"
                                        value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="mainmenu__search-icon" type="submit" id="button-addon2"><i
                                                class="fal fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="mainmenu__main d-flex align-items-center p-relative">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="./">Home</a>
                                        </li>
                                        <li>
                                            <a href="">About Us</a>
                                        </li>

                                        <?php 
                        $cat_qry = $conn->query("SELECT * FROM categories where status = 1 ");
                        while($crow = $cat_qry->fetch_assoc()):
                          $sub_qry = $conn->query("SELECT * FROM sub_categories where status = 1 and parent_id = '{$crow['id']}' ");
                          if($sub_qry->num_rows <= 0):
                        ?>
                                        <li class="has-dropdown"><a aria-current="page"
                                                href="./?p=products&c=<?php echo md5($crow['id']) ?>"><?php echo $crow['category'] ?></a>
                                        </li>

                                        <?php else: ?>
                                        <li class="has-dropdown">
                                            <a id="navbarDropdown<?php echo $crow['id'] ?>" href="#" role="button"
                                                data-toggle="dropdown"
                                                aria-expanded="false"><?php echo $crow['category'] ?></a></a>
                                            <ul class="submenu"
                                                aria-labelledby="navbarDropdown<?php echo $crow['id'] ?>">
                                                <?php while($srow = $sub_qry->fetch_assoc()): ?>
                                                <li><a
                                                        href="./?p=products&c=<?php echo md5($crow['id']) ?>&s=<?php echo md5($srow['id']) ?>"><?php echo $srow['sub_category'] ?></a>
                                                </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </li>

                                        <?php endif; ?>
                                        <?php endwhile; ?>
                                        <li><a href="">Contact Us</a></li>

                                    </ul>

                                </nav>
                            </div>
                            <div class="mainmenu__logo">
                                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><span
                                        class="navbar-toggler-icon"></span></button>
                                <a class="navbar-brand" href="./">
                                    <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30"
                                        height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="d-flex align-items-center">
                        <?php if(!isset($_SESSION['userdata']['id'])): ?>
                        <button class="btn btn-outline-dark ml-2" id="login-btn" type="button">Login</button>
                        <?php else: ?>
                        <a class="text-dark mr-2 nav-link" href="./?p=cart">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill" id="cart-count">
                                <?php 
                              if(isset($_SESSION['userdata']['id'])):
                                $count = $conn->query("SELECT SUM(quantity) as items from `cart` where client_id =".$_settings->userdata('id'))->fetch_assoc()['items'];
                                echo ($count > 0 ? $count : 0);
                              else:
                                echo "0";
                              endif;
                              ?>
                            </span>
                        </a>

                        <a href="./?p=my_account" class="text-dark  nav-link"><b> Hi,
                                <?php echo $_settings->userdata('firstname')?>!</b></a>
                        <a href="logout.php" class="text-dark  nav-link"><i class="fa fa-sign-out-alt"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->



<script>
$(function() {
    $('#login-btn').click(function() {
        uni_modal("", "login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function() {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function() {
        if ($('body').offset.top == 0)
            $('#mainNav').removeClass('navbar-shrink')
    })
})

$('#search-form').submit(function(e) {
    e.preventDefault()
    var sTxt = $('[name="search"]').val()
    if (sTxt != '')
        location.href = './?p=products&search=' + sTxt;
})
</script>