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
                        <span>Contact</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Get In Touch</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          
      <!-- contact-area-start -->
      <section class="contact-area pt-80 pb-80">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-12">
                  <div class="tpcontact__right mb-40">
                     <div class="tpcontact__shop mb-30">
                        <h4 class="tpshop__title mb-25">Get In Touch</h4>
                        <div class="tpshop__info">
                           <ul>
                              <li><i class="fal fa-map-marker-alt"></i> <a href="#">Kampala, Uganda</a></li>
                              <li>
                                 <i class="fal fa-phone"></i>
                                 <a href="tel:256700000000">+256 (704) 786 897 8</a>
                              </li>
                              <li>
                                 <i class="fal fa-clock"></i>
                                 <span>Store Hours:</span>
                                 <span>10 am - 10 pm, 6 days a week</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tpcontact__support">
                        <a href="tel:0123456">Get Support On Call <i class="fal fa-headphones"></i></a>
                        <a target="_blank" href="https://www.google.com/maps/@36.963672,-119.2249843,7.17z">Get Direction <i class="fal fa-map-marker-alt"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-12">
                  <div class="tpcontact__form">
                     <div class="tpcontact__info mb-35">
                        <h4 class="tpcontact__title">Make Custom Request</h4>
                        <p>Must-have pieces selected every month want style Ideas and Treats?</p>
                     </div>
                     <form action="https://html.hixstudio.net/ninico/assets/mail.php" id="contact-form" method="POST">
                        <div class="row"> 
                           <div class="col-lg-6">
                              <div class="tpcontact__input mb-20">
                                 <input name="name" type="text" placeholder="Full name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="tpcontact__input mb-20">
                                 <input name="email" type="email" placeholder="Email address" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="tpcontact__input mb-20">
                                 <input name="number" type="text" placeholder="Phone number" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="tpcontact__input mb-20">
                                 <input name="subject" type="text" placeholder="Subject" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="tpcontact__input mb-30">
                                 <textarea name="message" placeholder="Enter message" required></textarea>
                              </div>
                           </div>                      
                        </div>
                        <div class="tpcontact__submit">
                           <button class="tp-btn tp-color-btn tp-wish-cart">Get A Quote <i class="fal fa-long-arrow-right"></i></button>
                        </div>
                     </form>
                     <p class="ajax-response mt-30"></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact-area-end -->

      <!-- map-area-start -->
      <div class="map-area">
         <div class="tpshop__location-map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.26862955304!2d32.505330077582755!3d0.3140277746059388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbd5ac3b39b07%3A0x7d338a84c977212b!2sFlora%20Bridals%20Collection!5e0!3m2!1sen!2sug!4v1736936203456!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
      <!-- map-area-end -->

      </main>
      <!-- main-area-end -->

<?php require_once('inc/footer.php') ?>
</body>
</html>