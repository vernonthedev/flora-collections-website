<?php
  // require_once('sess_auth.php');
  
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?>
    </title>
    <title>Flora's Collection - Stylish Kitenge Clothes in Kampala, Uganda</title>
    <meta name="description"
        content="Discover the finest Kitenge clothes at Flora's Collection in Kampala, Uganda. We offer unique, high-quality locally made designs perfect for every occasion.">
    <meta name="keywords"
        content="Flora's Collection, Kitenge clothes, Kampala fashion, Ugandan clothing, African prints, local fashion Kampala, Flora Kampala, custom Kitenge designs">
    <meta name="author" content="Flora's Collection">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Flora's Collection - Stylish Kitenge Clothes in Kampala, Uganda">
    <meta property="og:description"
        content="Shop stylish and authentic Kitenge clothes at Flora's Collection in Kampala. Locally crafted designs for every occasion. Visit us today!">
    <meta property="og:url" content="https://floras-collection.com">
    <meta property="og:image" content="https://floras-collection.com/assets/img/logo/logo-black.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Flora's Collection - Stylish Kitenge Clothes in Kampala, Uganda">
    <meta name="twitter:description"
        content="Find authentic, high-quality Kitenge clothes at Flora's Collection in Kampala. Stand out with locally made designs for any event.">
    <meta name="twitter:image" content="https://floras-collection.com/assets/img/logo/logo-black.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://floras-collection.com">

    <!-- Additional Properties -->
    <meta property="og:locale" content="en_UG">
    <meta property="og:site_name" content="Flora's Collection">
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
        from {
            opacity: .99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
        position: absolute;
        direction: ltr;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
        z-index: -1
    }

    .chartjs-size-monitor-expand>div {
        position: absolute;
        width: 1000000px;
        height: 1000000px;
        left: 0;
        top: 0
    }

    .chartjs-size-monitor-shrink>div {
        position: absolute;
        width: 200%;
        height: 200%;
        left: 0;
        top: 0
    }
    </style>

    <!-- jQuery -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
    var _base_url_ = '<?php echo base_url ?>';
    </script>
    <script src="<?php echo base_url ?>dist/js/script.js"></script>
    <!-- <script src="<?php echo base_url ?>assets/js/scripts.js"></script> -->
    <style>
    #main-header {
        position: relative;
        background: rgb(0, 0, 0) !important;
        background: radial-gradient(circle, rgba(0, 0, 0, 0.48503151260504207) 22%, rgba(0, 0, 0, 0.39539565826330536) 49%, rgba(0, 212, 255, 0) 100%) !important;
    }

    #main-header:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url();
        background-repeat: no-repeat;
        background-size: cover;
        filter: drop-shadow(0px 7px 6px black);
        z-index: -1;
    }
    </style>

    <!-- Latest CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Custom Scroll Bar Configurations-->
    <style>
    body::-webkit-scrollbar {
        width: 10px;
    }

    body::-webkit-scrollbar-track {
        background: rgb(1, 3, 20);
    }

    body::-webkit-scrollbar-thumb {
        background-color: rgb(184, 184, 184);
        border-radius: 20px;
        border: 3px solid rgb(184, 184, 184);
    }
    </style>
</head>