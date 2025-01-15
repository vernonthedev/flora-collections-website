<?php 
$title = "All Our Bitenge";
$sub_title = "Explore our nice clothes.";
if(isset($_GET['c']) && isset($_GET['s'])){
    $cat_qry = $conn->query("SELECT * FROM categories where md5(id) = '{$_GET['c']}'");
    if($cat_qry->num_rows > 0){
        $title = $cat_qry->fetch_assoc()['category'];
    }
 $sub_cat_qry = $conn->query("SELECT * FROM sub_categories where md5(id) = '{$_GET['s']}'");
    if($sub_cat_qry->num_rows > 0){
        $sub_title = $sub_cat_qry->fetch_assoc()['sub_category'];
    }
}
elseif(isset($_GET['c'])){
    $cat_qry = $conn->query("SELECT * FROM categories where md5(id) = '{$_GET['c']}'");
    if($cat_qry->num_rows > 0){
        $title = $cat_qry->fetch_assoc()['category'];
    }
}
elseif(isset($_GET['s'])){
    $sub_cat_qry = $conn->query("SELECT * FROM sub_categories where md5(id) = '{$_GET['s']}'");
    if($sub_cat_qry->num_rows > 0){
        $title = $sub_cat_qry->fetch_assoc()['sub_category'];
    }
}
?>
<!-- Header-->
<header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?php echo $title ?></h1>
            <p class="lead fw-normal text-white-50 mb-0"><?php echo $sub_title ?></p>
        </div>
    </div>
</header>


<!-- Section-->
<section class="py-5">
    <div class="container-fluid px-4 px-lg-5 mt-5">
    <?php 
                if(isset($_GET['search'])){
                    echo "<h4 class='text-center'><b>Search Result for '".$_GET['search']."'</b></h4>";
                }
            ?>
        
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
           
            <?php 
                $whereData = "";
                if(isset($_GET['search']))
                    $whereData = " and (product_name LIKE '%{$_GET['search']}%' or description LIKE '%{$_GET['search']}%')";
                elseif(isset($_GET['c']) && isset($_GET['s']))
                    $whereData = " and (md5(category_id) = '{$_GET['c']}' and md5(sub_category_id) = '{$_GET['s']}')";
                elseif(isset($_GET['c']))
                    $whereData = " and md5(category_id) = '{$_GET['c']}' ";
                elseif(isset($_GET['s']))
                    $whereData = " and md5(sub_category_id) = '{$_GET['s']}' ";
                $products = $conn->query("SELECT * FROM `products` where status = 1 {$whereData} order by rand() ");
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
            <div class="col">
                        <div class=" tpproduct pb-15 mb-30">
                           <div class="tpproduct__thumb p-relative">
                              <a href=".?p=view_product&id=<?php echo md5($row['id']) ?>">
                                 <img src="<?php echo validate_image($img) ?>" alt="<?php echo $row['product_name'] ?>">
                                 <img class="product-thumb-secondary" src="<?php echo validate_image($img) ?>" alt="<?php echo $row['product_name'] ?>">
                              </a>
                              <div class="tpproduct__thumb-action">
                                 <a class="quckview" href=".?p=view_product&id=<?php echo md5($row['id']) ?>"><i class="fal fa-eye"></i></a>
                              </div>
                           </div>
                           <div class="tpproduct__content">
                              <h3 class="tpproduct__title"><a href=".?p=view_product&id=<?php echo md5($row['id']) ?>"><?php echo $row['product_name'] ?></a></h3>
                              <div class="tpproduct__priceinfo p-relative">
                                 <div class="tpproduct__priceinfo-list">
                                       <!-- Product price-->
                                       <?php foreach($inv as $k=> $v): ?>
                                          <span><b><?php echo $k ?></b> - UGX <?php echo $v ?></span>
                                       <?php endforeach; ?>
                                 </div>
                                 <div class="tpproduct__cart">
                                    <a href=".?p=view_product&id=<?php echo md5($row['id']) ?>"><i class="fal fa-shopping-cart"></i>View More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
            <?php endwhile; ?>
            <?php 
                if($products->num_rows <= 0){
                    echo "<h4 class='text-center'><b>No Product Listed.</b></h4>";
                }
            ?>
        </div>
    </div>
</section>