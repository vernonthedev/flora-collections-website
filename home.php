      <!-- slider-area-start -->
      <section class="slider-area slider-bg slider-bg-height">
         <div class="slider-pagination-2 p-relative">
            <div class="swiper-containers slidertwo-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide slider-bg">
                     <div class="container">
                        <div class="slider-top-padding pt-55">
                           <div class="row p-relative align-items-end">
                              <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                 <div class="tpslidertwo__item">
                                    <div class="tpslidertwo__content">
                                       <h4 class="tpslidertwo__sub-title">Winter</h4>
                                       <h3 class="tpslidertwo__title mb-10">Exclusive <br> Winter Collection</h3>
                                       <p>New Modern Stylist Fashionable Women's Wear holder</p>
                                       <div class="tpslidertwo__slide-btn">
                                          <a class="tp-btn banner-animation" href="">Shop Now <i
                                             class="fal fa-long-arrow-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                 <div class="tpslidertwo__img p-relative text-end">
                                    <img src="assets/img/slider/slider-01.png" alt="">
                                    <div class="tpslidertwo__img-shape">
                                       <img src="assets/img/slider/fasion-tag-01.png" alt="tag">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide slider-bg">
                     <div class="container">
                        <div class="slider-top-padding pt-55">
                           <div class="row p-relative align-items-end">
                              <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                 <div class="tpslidertwo__item">
                                    <div class="tpslidertwo__content">
                                       <h4 class="tpslidertwo__sub-title">Winter</h4>
                                       <h3 class="tpslidertwo__title mb-10">Exclusive <br> Women's Fashion</h3>
                                       <p>New Modern Stylist Fashionable Women's Wear holder</p>
                                       <div class="tpslidertwo__slide-btn">
                                          <a class="tp-btn banner-animation" href="shop.html">Shop Now <i
                                             class="fal fa-long-arrow-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                 <div class="tpslidertwo__img p-relative text-end">
                                    <img src="assets/img/slider/slider-02.png" alt="">
                                    <div class="tpslidertwo__img-shape">
                                       <img src="assets/img/slider/fasion-tag-01.png" alt="tag">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide slider-bg">
                     <div class="container">
                        <div class="slider-top-padding pt-55">
                           <div class="row p-relative align-items-end">
                              <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                 <div class="tpslidertwo__item">
                                    <div class="tpslidertwo__content">
                                       <h4 class="tpslidertwo__sub-title">Winter</h4>
                                       <h3 class="tpslidertwo__title mb-10">Exclusive <br> Summer Collection</h3>
                                       <p>New Modern Stylist Fashionable Women's Wear holder</p>
                                       <div class="tpslidertwo__slide-btn">
                                          <a class="tp-btn banner-animation" href="shop.html">Shop Now <i
                                             class="fal fa-long-arrow-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                 <div class="tpslidertwo__img p-relative text-end">
                                    <img src="assets/img/slider/slider-03.png" alt="">
                                    <div class="tpslidertwo__img-shape">
                                       <img src="assets/img/slider/fasion-tag-01.png" alt="tag">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-two-pagination">
               <div class="container">
                  <div class="slider-two-pagination-item p-relative">
                     <div class="slidertwo_pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end --> 
 
 
 
 
 
 <!-- Header-->
 
 
 
 
 
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Description Here</h1>
            <p class="lead fw-normal text-white-50 mb-0">Looking for your pet's needs? Shop Now!</p>
        </div>
    </div>
</header>




<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php 
                $products = $conn->query("SELECT * FROM `products` where status = 1 order by rand() limit 8 ");
                while($row = $products->fetch_assoc()):
                    $upload_path = base_app.'/uploads/product_'.$row['id'];
                    $img = "";
                    if(is_dir($upload_path)){
                        $fileO = scandir($upload_path);
                        if(isset($fileO[2]))
                            $img = "uploads/product_".$row['id']."/".$fileO[2];
                        // var_dump($fileO);
                    }
                    $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
                    $inv = array();
                    while($ir = $inventory->fetch_assoc()){
                        $inv[$ir['size']] = number_format($ir['price']);
                    }
            ?>
            <div class="col mb-5">
                <div class="card h-100 product-item">
                    <!-- Product image-->
                    <img class="card-img-top w-100" src="<?php echo validate_image($img) ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php echo $row['product_name'] ?></h5>
                            <!-- Product price-->
                            <?php foreach($inv as $k=> $v): ?>
                                <span><b><?php echo $k ?>: </b><?php echo $v ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-flat btn-primary "   href=".?p=view_product&id=<?php echo md5($row['id']) ?>">View</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>