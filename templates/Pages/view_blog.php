<div class="about-header-area">
    <img src="<?php echo HTTP_ROOT;?>assets/img/bg/about-bg1.png" alt="" class="elements1 aniamtion-key-1">
    <img src="<?php echo HTTP_ROOT;?>assets/img/bg/about-bg2.png" alt="" class="star2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1><?php echo $getBlog["blog_title"]?></h1>
                    <a href="<?php echo HTTP_ROOT;?>">Home <i class="fa-solid fa-angle-right"></i>
                        <span><?php echo $getBlog["blog_title"]?></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-auhtor-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-sidebar-area">
                    <div class="posts-area">
                        <h3>Recent Post</h3>
                        <?php if(!empty($recentPosts)){?>
                        <?php foreach($recentPosts as $recentPost){?>
                        <div class="post-auhtor-area">
                            <div class="img1">
                                <img src="<?php echo HTTP_ROOT;?>img/<?php echo $recentPost["image"]?>" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="date"><img
                                        src="<?php echo HTTP_ROOT;?>assets/img/icons/calender1.svg"
                                        alt=""><?php echo date("d F Y",strtotime($recentPost["date_added"]));?></a>
                                <a href="<?php echo HTTP_ROOT."blog/".$recentPost["seo_url"]?>"
                                    class="head"><?php echo substr($recentPost["blog_title"],0,40);?></a>
                            </div>
                        </div>
                        <?php }?>
                        <?php }?>
                    </div>
                    <div class="space32"></div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-auhtor-sidebar-area heading2">
                    <div class="tags-area">
                        <ul>
                            <li><a href="javascript:void(0)"><img
                                        src="<?php echo HTTP_ROOT;?>assets/img/icons/contact1.svg" alt="">Admin</a></li>
                            <li><a href="javascript:void(0)"><img
                                        src="<?php echo HTTP_ROOT;?>assets/img/icons/calender1.svg"
                                        alt=""><?php echo date("d F Y",strtotime($getBlog["date_added"]))?></a></li>
                        </ul>
                    </div>
                    <h2><?php echo $getBlog["blog_title"]?></h2>
                    <div class="space34"></div>
                    <div class="img1">
                        <img src="<?php echo HTTP_ROOT;?>img/<?php echo $getBlog["image"]?>" alt="">
                    </div>
                    <div class="space24"></div>
                    <p><?php echo nl2br($getBlog["content"]);?></p>
                    <div class="social-tags">

                        <div class="social">
                            <h4>Social:</h4>
                            <ul>
                                <!-- <li><a href="#"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/facebook.svg"
                                            alt=""></a></li>
                                <li><a href="#"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/instagram.svg"
                                            alt=""></a></li> -->
                                <li><a target="_blank" href="https://www.linkedin.com/company/onmepro/"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/linkedin.svg"
                                            alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->
<!--===== CTA AREA STARTS =======-->
<div class="cta3-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-author-area">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="cta2-header heading6">
                                <h2 class="text-anime-style-3">Ready to Take Your Online Presence To The Next Level</h2>
                                <p data-aos="fade-up" data-aos-duretion="1200">Effective SEO strategies not only
                                    elevate a website's visibility but also drive targeted traffic, enhance user
                                    experience,</p>
                                <div class="space24"></div>
                                <div class="btn-area" data-aos="fade-up" data-aos-duretion="1400">
                                    <a href="javascript:void(0)" onclick="openBox()" class="header-btn5">Get a Quote
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <div class="images">
                                <img src="<?php echo HTTP_ROOT?>assets/img/elements/elements8.png" alt=""
                                    class="elements6 aniamtion-key-2">
                                <img src="<?php echo HTTP_ROOT?>assets/img/elements/star6.png" alt=""
                                    class="elements7 keyframe5">
                                <img src="<?php echo HTTP_ROOT?>assets/img/bg/cta-bg3.png" alt=""
                                    class="bg1 aniamtion-key-5">
                                <img src="<?php echo HTTP_ROOT?>img/cta-img1.png" alt="Online Presence" class="cta-img1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .blog-auhtor-sidebar-area ul li {
        list-style: disc;
        color: var(--ztc-text-text-3);
        margin-bottom: 2%;
    }
</style>
<!--===== CTA AREA ENDS =======-->