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

<!-- this a page template -->

<?php require_once('inc/footer.php') ?>
</body>
</html>