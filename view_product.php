<?php 
 $products = $conn->query("SELECT * FROM `products`  where md5(id) = '{$_GET['id']}' ");
 if($products->num_rows > 0){
     foreach($products->fetch_assoc() as $k => $v){
         $$k= $v;
     }
    $upload_path = base_app.'/uploads/product_'.$id;
    $img = "";
    if(is_dir($upload_path)){
        $fileO = scandir($upload_path);
        if(isset($fileO[2]))
            $img = "uploads/product_".$id."/".$fileO[2];
        // var_dump($fileO);
    }
    $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$id);
    $inv = array();
    while($ir = $inventory->fetch_assoc()){
        $inv[] = $ir;
    }
 }
?>

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0 " loading="lazy" id="display-img"
                    src="<?php echo validate_image($img) ?>" alt="..." />
                <div class="mt-2 row gx-2 gx-lg-3 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
                    <?php 
                        foreach($fileO as $k => $img):
                            if(in_array($img,array('.','..')))
                                continue;
                    ?>
                    <a href="javascript:void(0)" class="view-image <?php echo $k == 2 ? "active":'' ?>"><img
                            src="<?php echo validate_image('uploads/product_'.$id.'/'.$img) ?>" loading="lazy"
                            class="img-thumbnail" alt=""></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <div class="small mb-1">SKU: BST-498</div> -->
                <h1 class="display-5 fw-bolder"><?php echo $product_name ?></h1>
                <div class="fs-5 mb-5">
                    UGX <span id="price"><?php echo $inv[0]['price'] ?></span>
                    <br>
                    <span><small><b>Available stock:</b> <span
                                id="avail"><?php echo $inv[0]['quantity'] ?></span></small></span>
                </div>
                <div class="fs-5 mb-5 d-flex justify-content-start">
                    <?php foreach($inv as $k => $v): ?>
                    <span><button
                            class="btn btn-sm btn-flat btn-outline-dark m-2 p-size <?php echo $k == 0 ? "active":'' ?>"
                            data-id="<?php echo $k ?>"><?php echo $v['size'] ?></button></span>
                    <?php endforeach; ?>
                </div>
                <form action="" id="add-cart">
                    <div class="d-flex">
                        <input type="hidden" name="price" value="<?php echo $inv[0]['price'] ?>">
                        <input type="hidden" name="inventory_id" value="<?php echo $inv[0]['id'] ?>">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" name="quantity" />
                        <div class="tpproduct-details__cart ml-20">
                            <button type="submit"><i class="fal fa-shopping-cart"></i> Add To Cart</button>
                        </div>
                    </div>
                </form>
                <p class="lead"><?php echo stripslashes(html_entity_decode($description)) ?></p>

            </div>
        </div>
    </div>
</section>


<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php 
            $products = $conn->query("SELECT * FROM `products` where status = 1 and (category_id = '{$category_id}' or sub_category_id = '{$sub_category_id}') and id !='{$id}' order by rand() limit 4 ");
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
                $_inv = array();
                while($ir = $inventory->fetch_assoc()){
                    $_inv[$ir['size']] = number_format($ir['price']);
                }
        ?>
            <div class="col">
                <div class=" tpproduct pb-15 mb-30">
                    <div class="tpproduct__thumb p-relative">
                        <a href=".?p=view_product&id=<?php echo md5($row['id']) ?>">
                            <img src="<?php echo validate_image($img) ?>" alt="<?php echo $row['product_name'] ?>">
                            <img class="product-thumb-secondary" src="<?php echo validate_image($img) ?>"
                                alt="<?php echo $row['product_name'] ?>">
                        </a>
                        <div class="tpproduct__thumb-action">
                            <a class="quckview" href=".?p=view_product&id=<?php echo md5($row['id']) ?>"><i
                                    class="fal fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="tpproduct__content">
                        <h3 class="tpproduct__title"><a
                                href=".?p=view_product&id=<?php echo md5($row['id']) ?>"><?php echo $row['product_name'] ?></a>
                        </h3>
                        <div class="tpproduct__priceinfo p-relative">
                            <div class="tpproduct__priceinfo-list">
                                <!-- Product price-->
                                <?php foreach($_inv as $k=> $v): ?>
                                <span><b><?php echo $k ?>: </b><?php echo $v ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="tpproduct__cart">
                                <a href=".?p=view_product&id=<?php echo md5($row['id']) ?>"><i
                                        class="fal fa-shopping-cart"></i>View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
    </div>
</section>
<script>
var inv = $.parseJSON('<?php echo json_encode($inv) ?>');
$(function() {
    $('.view-image').click(function() {
        var _img = $(this).find('img').attr('src');
        $('#display-img').attr('src', _img);
        $('.view-image').removeClass("active")
        $(this).addClass("active")
    })
    $('.p-size').click(function() {
        var k = $(this).attr('data-id');
        $('.p-size').removeClass("active")
        $(this).addClass("active")
        $('#price').text(inv[k].price)
        $('[name="price"]').val(inv[k].price)
        $('#avail').text(inv[k].quantity)
        $('[name="inventory_id"]').val(inv[k].id)

    })

    $('#add-cart').submit(function(e) {
        e.preventDefault();
        if ('<?php echo $_settings->userdata('id') ?>' <= 0) {
            uni_modal("", "login.php");
            return false;
        }
        start_loader();
        $.ajax({
            url: 'classes/Master.php?f=add_to_cart',
            data: $(this).serialize(),
            method: 'POST',
            dataType: "json",
            error: err => {
                console.log(err)
                alert_toast("an error occured", 'error')
                end_loader()
            },
            success: function(resp) {
                if (typeof resp == 'object' && resp.status == 'success') {
                    alert_toast("Product added to cart.", 'success')
                    $('#cart-count').text(resp.cart_count)
                } else {
                    console.log(resp)
                    alert_toast("an error occured", 'error')
                }
                end_loader();
            }
        })
    })
})
</script>