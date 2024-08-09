<div class="about-header-area"
    style="background-image: url(<?php echo HTTP_ROOT;?>assets/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="<?php echo HTTP_ROOT;?>assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
    <img src="<?php echo HTTP_ROOT;?>assets/img/elements/star2.png" alt="" class="star2 keyframe5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Our Blog</h1>
                    <a href="<?php echo HTTP_ROOT;?>">Home <i class="fa-solid fa-angle-right"></i> <span>Blog</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-top-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-top-boxarea">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="content-area heading2">
                                <div class="tags-area">
                                    <ul>
                                        <li><a href="#"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/contact1.svg"
                                                    alt="">Admin</a>
                                        </li>
                                        <li><a href="#"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/calender1.svg"
                                                    alt=""><?php echo date("d F Y",strtotime($latestPost["date_added"]));?></a>
                                        </li>
                                    </ul>
                                </div>
                                <h2><?php echo $latestPost["blog_title"]?></h2>
                                <div class="space8"></div>
                                <div class="btn-area">
                                    <a href="<?php echo HTTP_ROOT."blog/".$latestPost["seo_url"]?>"
                                        class="header-btn1">Read Full Story <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <div class="images image-anime">
                                <img src="<?php echo HTTP_ROOT;?>assets/img/all-images/blog-img19.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog1-scetion-area sp1 bg2">
    <div class="container">
        <div class="row">
            <?php if(!empty($remainingPosts)){?>
            <?php foreach($remainingPosts as $post){?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-author-boxarea">
                    <div class="img1">
                        <img src="<?php echo HTTP_ROOT;?>assets/img/all-images/blog-img17.png" alt="">
                    </div>
                    <div class="content-area">
                        <div class="tags-area">
                            <ul>
                                <li><a href="#"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/calender1.svg"
                                            alt=""><?php echo date("d F Y",strtotime($post["date_added"]));?></a>
                                </li>
                                <li><a href="#"><img src="<?php echo HTTP_ROOT;?>assets/img/icons/contact1.svg"
                                            alt="">Admin</a></li>
                            </ul>
                        </div>
                        <a href="<?php echo HTTP_ROOT."blog/".$post["seo_url"]?>"><?php echo $post["blog_title"]?></a>
                        <p><?php echo substr(strip_tags($post["content"]),0,100);?>...</p>
                        <a href="<?php echo HTTP_ROOT."blog/".$post["seo_url"]?>" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="space30"></div>
            </div>
            <?php }?>


            <?php }?>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->


<!--===== CTA AREA STARTS =======-->
<div class="cta-section-area">
    <img src="assets/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
    <img src="assets/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="cta-header-area text-center sp4 heading2">
                    <h2>Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
                    <p>Effective SEO strategies not only elevate a website's visibility but also drive <br
                            class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
                    <div class="btn-area text-center">
                        <a href="contact.html" class="header-btn1">Free Consultation <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>