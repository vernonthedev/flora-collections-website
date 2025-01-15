 <!-- breadcrumb-area -->
 <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="assets/img/banner/breadcrumb-01.jpg">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                 <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                         <span class="breadcrumb-item-active"><a href="index.php">Home</a></span>
                         <span>Manage Account</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Manage Account Settings</h2>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- breadcrumb-area-end -->



<section class="py-5">
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body">
                <div class="w-100 justify-content-between d-flex">
                    <h4><b>Update Account Details</b></h4>
                    <a href="./?p=my_account" class="btn btn btn-dark btn-flat"><div class="fa fa-angle-left"></div> Back to Order List</a>
                </div>
                    <hr class="border-warning">
                    <div class="col-md-6">
                        <form action="" id="update_account">
                        <input type="hidden" name="id" value="<?php echo $_settings->userdata('id') ?>">
                        <div class="tptrack__id mb-10">
                            <div class="form-group">
                                <label for="firstname" class="control-label">Firstname</label>
                                <input type="text" name="firstname" class="form-control form" value="<?php echo $_settings->userdata('firstname') ?>" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="lastname" class="control-label">Lastname</label>
                                <input type="text" name="lastname" class="form-control form" value="<?php echo $_settings->userdata('lastname') ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Contact</label>
                                <input type="text" class="form-control form-control-sm form" name="contact" value="<?php echo $_settings->userdata('contact') ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Gender</label>
                                <select name="gender" id="" class="custom-select select" required>
                                    <option <?php echo $_settings->userdata('gender') == "Male" ? "selected" : '' ?>>Male</option>
                                    <option <?php echo $_settings->userdata('gender') == "Female" ? "selected" : '' ?>>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Default Delivery Address</label>
                                <textarea class="form-control form" rows='3' name="default_delivery_address"><?php echo $_settings->userdata('default_delivery_address') ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" name="email" class="form-control form" value="<?php echo $_settings->userdata('email') ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">New Password</label>
                                <input type="password" name="password" class="form-control form" value="" placeholder="(Enter value to change password)">
                            </div>
                            <div class="form-group">
                                <label for="cpassword" class="control-label">Current Password</label>
                                <input type="password" name="cpassword" class="form-control form" value="" placeholder="(Enter value to change password)">
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button class="btn btn-dark btn-flat">Update</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
<script>
$(function(){
        $('#update_account [name="password"],#update_account [name="cpassword"]').on('input',function(){
            if($('#update_account [name="password"]').val() != '' || $('#update_account [name="cpassword"]').val() != '')
            $('#update_account [name="password"],#update_account [name="cpassword"]').attr('required',true);
            else
            $('#update_account [name="password"],#update_account [name="cpassword"]').attr('required',false);
        })
        $('#update_account').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=update_account",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status == 'success'){
                        alert_toast("Account succesfully updated",'success');
                        $('#update_account [name="password"],#update_account [name="cpassword"]').attr('required',false);
                        $('#update_account [name="password"],#update_account [name="cpassword"]').val('');
                    }else if(resp.status == 'failed' && !!resp.msg){
                        var _err_el = $('<div>')
                            _err_el.addClass("alert alert-danger err-msg").text(resp.msg)
                        $('#update_account').prepend(_err_el)
                        $('body, html').animate({scrollTop:0},'fast')
                        end_loader()
                        
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                    }
                    end_loader()
                }
            })
        })
    })
</script>