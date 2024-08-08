<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($pageTitle)){echo $pageTitle;}else{?>SEO - Digital Marketing Agency<?php }?></title>

    <meta name="description"
        content="<?php if(isset($metaDescription)){echo $metaDescription;}else{?>SEO - Digital Marketing Agency<?php }?>">
    <meta name="keywords"
        content="<?php if(isset($keywords)){echo $keywords;}else{?>SEO - Digital Marketing Agency<?php }?>">


    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="<?php echo HTTP_ROOT;?>img/favicon.ico" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/main.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/jquery-3-6-0.min.js"></script>
</head>

<body class="homepage3-body">

    <!--===== PRELOADER STARTS =======-->
    <div class="preloader preloader5">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="assets/img/logo/preloader5.png" alt=""></div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS=======-->

    <!--=====HEADER START=======-->
    <?php echo $this->element('header');?>
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <?php echo $this->element('mobile-header');?>
    <!--===== MOBILE HEADER STARTS =======-->
    <?= $this->fetch('content') ?>
    <!--===== FOOTER AREA STARTS =======-->
    <?php echo $this->element('footer');?>
    <!--===== FOOTER AREA ENDS =======-->


    <!--===== JS SCRIPT LINK =======-->
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/fontawesome.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/aos.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/counter.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/gsap.min.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/Splitetext.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/sidebar.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/magnific-popup.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/mobilemenu.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/owlcarousel.min.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/gsap-animation.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/nice-select.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/waypoints.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/slick-slider.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/circle-progress.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/main.js"></script>

</body>

</html>