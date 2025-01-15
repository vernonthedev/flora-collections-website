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
   <!-- main-area-start -->
   <main>

      <!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="assets/img/banner/breadcrumb-01.jpg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="./">Home</a></span>
                        <span>About</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">About Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          
      <!-- about-area-start -->
      <section class="about-area pt-80  pb-40">
         <div class="container">
            <div class="tpabout__inner-logo p-relative">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tpabout__inner-thumb mb-40">
                        <img src="https://fakeimg.pl/705x500?text=Flora+Collections" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tpabout__inner-thumb mb-40">
                        <img src="https://fakeimg.pl/705x500?text=Flora+Collections" alt="">
                     </div>
                  </div>
               </div>
               <div class="tpabout__logo">
                  <a href="./"><img src="assets/img/logo/logo-black.png" alt=""></a>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="tpabout__inner-title-area mt-25 mb-45">
                     <h4 class="tpabout__inner-sub-title">About Us</h4>
                     <h4 class="tpabout__inner-title">About Our Story</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="tpabout__inner-story mb-40">
                     <p>Publish your eCommerce site quickly with our easy-to-use store
                        builder— no coding required. Migrate your items from your
                        point of sale system or turn your Instagram feed into a shopping
                        site and start selling fast. Square Online works for all kinds of
                        businesses—retail, restaurants, services without costly
                        customization or add ons. Get orders to your customers in lots
                        of ways by offering shipping, pickup, delivery, and even QR
                        code ordering.</p>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                  <div class="tpabout__inner-story-2 mb-40">
                     <p>Expand your reach and sell more using seamless integrations with
                        Google, Instagram, Facebook, and more. Built- in SEO tools make
                        it easy for shoppers to find your business on search engines. Get
                        access to the entire suite of integrated Square solutions to help you
                        run your business. Integration between Square Online and all
                        Square point of sale systems makes inventory management easy.
                        Subscribe to Square Marketing and easily send email promotions
                        to your customers using the contact information</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                  <div class="tpabout__inner-list mb-40">
                     <ul>
                        <li> <a href="#"><i class="fal fa-check"></i> Orders go right to your restaurant point of sale, KDS, and kitchen</a>
                        </li>
                        <li> <a href="#"><i class="fal fa-check"></i> Provide in-person pickup, & delivery by professional couriers</a>
                        </li>
                        <li><a href="#"><i class="fal fa-check"></i> Offer in-person diners self-serve, contactless ordering via QR codes.</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about-area-end -->

      <!-- team-area-start -->
      <section class="team-area grey-bg-3 pb-30">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="tpabout__inner-title-area mt-65 mb-45 text-center">
                     <h4 class="tpabout__inner-sub-title">Team</h4>
                     <h4 class="tpabout__inner-title">Meet With Team</h4>
                  </div>
               </div>
            </div>
            <div class="swiper-container tp-team-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tpteam__item p-relative mb-40">
                        <div class="tpteam__thumb">
                           <img src="https://fakeimg.pl/343x395?text=team" alt="">
                        </div>
                        <div class="tpteam__content">
                           <h4 class="tpteam__position">Founder</h4>
                           <h5 class="tpteam__title">Team Member</h5>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpteam__item p-relative mb-40">
                        <div class="tpteam__thumb">
                           <img src="https://fakeimg.pl/343x395?text=team" alt="">
                        </div>
                        <div class="tpteam__content">
                           <h4 class="tpteam__position">CEO</h4>
                           <h5 class="tpteam__title">Team Member</h5>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpteam__item p-relative mb-40">
                        <div class="tpteam__thumb">
                           <img src="https://fakeimg.pl/343x395?text=team" alt="">
                        </div>
                        <div class="tpteam__content">
                           <h4 class="tpteam__position">Designer</h4>
                           <h5 class="tpteam__title">Team Member</h5>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpteam__item p-relative mb-40">
                        <div class="tpteam__thumb">
                           <img src="https://fakeimg.pl/343x395?text=team" alt="">
                        </div>
                        <div class="tpteam__content">
                           <h4 class="tpteam__position">Developer</h4>
                           <h5 class="tpteam__title">Team Member</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- team-area-end -->

      <!-- feature-area-start -->
      <section class="feature-area pt-70 pb-10">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="tpfeature__inner-thumb mb-70">
                     <img src="https://fakeimg.pl/705x440?text=About+Us" alt="">
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="tpabout__inner-title-area about-inner-content ml-50 mr-50 mb-70">
                     <h4 class="tpabout__inner-sub-title mb-5">Features #01</h4>
                     <h4 class="tpabout__inner-title mb-25">Solutions that work together</h4>
                     <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                        coding required. Migrate your items from your point of sale system or turn your
                        Instagram feed into a shopping site and start selling fast. Square Online works
                        for all kinds of businesses—retail, restaurants, services.
                     </p>
                     <a class="tpteam__btn" href="contact.php">Get In Touch</a>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="tpabout__inner-title-area about-inner-content mr-100 mb-70">
                     <h4 class="tpabout__inner-sub-title mb-5">Features #02</h4>
                     <h4 class="tpabout__inner-title mb-25">All kinds of payments securely</h4>
                     <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                        coding required. Migrate your items from your point of sale system or turn your
                        Instagram feed into a shopping site and start selling fast. Square Online works
                        for all kinds of businesses—retail, restaurants, services.
                     </p>
                     <a class="tpteam__btn" href="contact.php">Contact With Us</a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="tpfeature__inner-thumb mb-70">
                     <img src="https://fakeimg.pl/705x440?text=About+Us" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- feature-area-end -->

      </main>
      <!-- main-area-end -->
<?php require_once('inc/footer.php') ?>
</body>
</html>