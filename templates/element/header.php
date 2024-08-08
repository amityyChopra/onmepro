<header>
    <div class="header-area homepage3 header header-sticky d-none d-lg-block " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="index.html"><img style="width:35%"
                                    src="<?php echo HTTP_ROOT;?>assets/img/logo/AnimatedLogo-300x152.gif" alt=""></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?php echo HTTP_ROOT;?>">Home</a></li>
                                <li><a href="<?php echo HTTP_ROOT;?>about-us">About</a></li>
                                <li>
                                    <a href="<?php echo HTTP_ROOT;?>services">Services <i
                                            class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        <?php if(!empty($getServices)){?>
                                        <?php foreach($getServices as $service){?>
                                        <li><a
                                                href="<?php echo HTTP_ROOT."service/".$service["slug"]?>"><?php echo $service["service_title"]?></a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo HTTP_ROOT;?>blog">Blog</a></li>
                                <li><a href="<?php echo HTTP_ROOT;?>contact-us">Contact Us</a></li>
                                <a href="<?php echo HTTP_ROOT;?>contact-us" class="header-btn5">Get a Quote</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>