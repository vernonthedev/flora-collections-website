<script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>

           <!-- footer-area-start -->
   <footer>
      <div class="footer-area secondary-footer black-bg-2 pt-65">
         <div class="container">
            <div class="main-footer pb-15 mb-30">
               <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-1 mb-40">
                        <div class="footer-logo mb-30">
                           <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                           <p>Elegant pink origami design three <br> dimensional view and decoration co-exist. <br>
                              Great for adding a decorative touch to <br> any room’s decor.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-2 ml-30 mb-40">
                        <h4 class="footer-widget__title mb-30">Information</h4>
                        <div class="footer-widget__links">
                           <ul>
                              <li><a href="#">Custom Service</a></li>
                              <li><a href="#">FAQs</a></li>
                              <li><a href="track.html">Ordering Tracking</a></li>
                              <li><a href="contact.html">Contacts</a></li>
                              <li><a href="#">Events</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-3 mb-40">
                        <h4 class="footer-widget__title mb-30">My Account</h4>
                        <div class="footer-widget__links">
                           <ul>
                              <li><a href="contact.html">Delivery Infomation</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Discount</a></li>
                              <li><a href="#">Custom Service</a></li>
                              <li><a href="#">Terms & Condition</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-4 mb-40">
                        <h4 class="footer-widget__title mb-30">Social Network</h4>
                        <div class="footer-widget__links">
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                              <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                              <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-8">
                     <div class="footer-widget footer-col-5 mb-40">
                        <h4 class="footer-widget__title mb-30">Popular Keywords</h4>
                        <div class="footer-widget__links keyword">
                           <a href="shop.html">Makeup</a>
                           <a href="shop.html">Dresses For Girls</a>
                           <a href="shop.html">T-Shirts</a>
                           <a href="shop.html">Sandals</a>
                           <a href="shop.html">Headphones</a>
                           <a href="shop.html">Baby dolls</a>
                           <a href="shop.html">Blazers</a>
                           <a href="shop.html">For Men</a>
                           <a href="shop.html">Handbags</a>
                           <a href="shop.html">Ladies Watches</a>
                           <a href="shop.html">Bags</a>
                           <a href="shop.html">Sport Shoes</a>
                           <a href="shop.html">Reebok Shoes</a>
                           <a href="shop.html">Puma Shoes</a>
                           <a href="shop.html">Boxers</a>
                           <a href="shop.html">Wallets</a>
                           <a href="shop.html">Tops</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-cta pb-20">
               <div class="row justify-content-between">
                  <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6">
                     <div class="footer-cta__contact">
                        <div class="footer-cta__icon">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="footer-cta__text">
                           <a href="tel:0123456">980. 029. 666. 99</a>
                           <span>Working 8:00 - 22:00</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                     <div class="footer-cta__source">
                        <div class="footer-cta__source-content">
                           <h4 class="footer-cta__source-title">Download App on Mobile</h4>
                           <p>15% discount on your first purchase</p>
                        </div>
                        <div class="footer-cta__source-thumb">
                           <a href="#"><img src="assets/img/footer/f-google.jpg" alt="google"></a>
                           <a href="#"><img src="assets/img/footer/f-app.jpg" alt="app"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-copyright black-bg-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-7 col-md-5">
                     <div class="footer-copyright__content">
                        <span>Copyright &copy; <?php echo $_settings->info('short_name') ?> | <?php echo date("Y"); ?></span>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-5 col-md-7">
                     <div class="footer-copyright__brand">
                        <img src="assets/img/footer/f-brand-icon-01.png" alt="footer-brand">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer-area-end -->
   











    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>



       <!-- Latest JS here -->
   <script src="assets/js/jquery.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/countdown.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/main.js"></script>