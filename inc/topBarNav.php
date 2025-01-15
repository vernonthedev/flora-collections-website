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
      
      <div class="logo-area green-logo-area mt-30 d-none d-xl-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-3">
                  <div class="logo">
                  <a href="./index.php"><img src="assets/img/logo/logo-black.png" alt="logo" width="50%"></a>
                  </div>
               </div>
               <div class="col-xl-10 col-lg-9">
                  <div class="header-meta-info d-flex align-items-center justify-content-between">
                     <div class="header-search-bar">

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

                     </div>
                     <div class="header-meta header-language d-flex align-items-center">
                        <div class="header-meta__lang">
                           <ul>
                              <li>
                                 <a href="#">
                                    <img src="assets/img/icon/lang-flag.png" alt="flag">
                                    English
                                    <span><i class="fal fa-angle-down"></i></span>
                                 </a>
                                
                              </li>
                           </ul>
                        </div>
                        <div class="header-meta__value mr-15">
                           <select>
                              <option>UGX</option>
                           </select>
                        </div>
                        <div class="header-meta__social d-flex align-items-center ml-25">
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
         </div>
      </div>
      <div class="main-menu-area tertiary-main-menu mt-25 d-none d-xl-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-3">
                  <div class="cat-menu__category p-relative">
                     <a data-bs-toggle="collapse" href="#collapsecategory" role="button" aria-expanded="false"
                        aria-controls="collapsecategory"><i class="fal fa-bars"></i>Categories</a>
                     <div class="category-menu collapse show" id="collapsecategory">
                        <ul class="cat-menu__list">
                           <li><a href=""><i class="fal fa-tshirt"></i>Men's Fashion</a></li>
                           <li><a href=""><i class="fal fa-tshirt"></i>Women's Fashion</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-6">
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
               </div>
               <div class="col-xl-3 col-lg-3">
                  <div class="menu-contact">
                     <ul>
                        <li>
                           <div class="menu-contact__item">
                              <div class="menu-contact__icon">
                                 <i class="fal fa-phone"></i>
                              </div>
                              <div class="menu-contact__info">
                                 <a href="tel:25670000000">+256 700 000 000</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="menu-contact__item">
                              <div class="menu-contact__icon">
                                 <i class="fal fa-map-marker-alt"></i>
                              </div>
                              <div class="menu-contact__info">
                                 <a href="">Find Store</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->

   <!-- header-xl-sticky-area -->
   <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3">
               <div class="logo">
                  <a href="./index.php"><img src="assets/img/logo/logo-black.png" alt="logo" width="50%"></a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="main-menu">
                  <nav>
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
            </div>
            
            <div class="col-xl-4 col-lg-9">
               <div class="header-meta-info d-flex align-items-center justify-content-end">
                
                  <div class="header-meta__social  d-flex align-items-center"> 
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
   </div>
   <!-- header-xl-sticky-end -->

   <!-- header-md-lg-area -->
   <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 d-flex align-items-center">
               <div class="header-canvas flex-auto">
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
               <div class="logo">
               <a href="./index.php"><img src="assets/img/logo/logo-black.png" alt="logo" width="50%"></a>
               </div>
            </div>
            <div class="col-lg-9 col-md-8">
               <div class="header-meta-info d-flex align-items-center justify-content-between">
                  <div class="header-search-bar">
                     <form action="#">
                        <div class="search-info p-relative">
                           <button class="header-search-icon"><i class="fal fa-search"></i></button>
                           <input type="text" placeholder="Search products...">
                        </div>
                     </form>
                  </div>
                  <div class="header-meta__social d-flex align-items-center ml-25">
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
   </div>
   <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-3 d-flex align-items-center">
               <div class="header-canvas flex-auto">
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
            </div>
            <div class="col-6">
               <div class="logo text-center">
               <a href="./index.php"><img src="assets/img/logo/logo-black.png" alt="logo" width="50%"></a>
               </div>
            </div>
            <div class="col-3">
               <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                  <div class="header-meta m-0 d-flex align-items-center">
                     <div class="header-meta__social d-flex align-items-center"> 
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
      </div>
   </div>
   <!-- header-md-lg-area -->

   <!-- sidebar-menu-area -->
   <div class="tpsideinfo">
      <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
      <div class="tpsideinfo__search text-center pt-35">
         <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
         <form id="search-form">
            <input class="form-control form-control-sm form " type="search" placeholder="Search"
                                        aria-label="Search" name="search"
                                        value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"
                                        aria-describedby="button-addon2">
            <button><i class="fal fa-search"></i></button>
         </form>
      </div>
      <div class="tpsideinfo__nabtab">
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
               tabindex="0">
               <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
               tabindex="0">
               <div class="tpsidebar-categories">
                  <ul>
                    <!-- TODO: add the categories -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="tpsideinfo__account-link">
         <a href=""><i class="fal fa-user"></i> Login / Register</a>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- sidebar-menu-area-end -->

   <!-- header-cart-start -->
   <!-- <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="assets/img/product/home-one/product-3.jpg" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop.html">Evo Lightweight Granite Shirt</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$138.00</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="assets/img/product/home-one/product-5.jpg" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop.html">Purab Enormous Miranda Bottle</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$162.8</span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tpcart__checkout">
               <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                  <span> Subtotal:</span>
                  <span class="heilight-price"> $300.00</span>
               </div>
               <div class="tpcart__checkout-btn">
                  <a class="tpcart-btn mb-10" href="#">View Cart</a>
                  <a class="tpcheck-btn" href="#">Checkout</a>
               </div>
            </div>
         </div>
         <div class="tpcart__free-shipping text-center">
            <span>Free shipping for orders <b>under 10km</b></span>
         </div>
      </div>
   </div>
   <div class="cartbody-overlay"></div> -->
   <!-- header-cart-end -->


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