<div class="about-header-area">
    <img src="<?php echo HTTP_ROOT;?>assets/img/bg/about-bg1.png" alt="" class="elements1 aniamtion-key-1">
    <img src="<?php echo HTTP_ROOT;?>assets/img/bg/about-bg2.png" alt="" class="star2">
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
                                        class="header-btn4 btn2">Read Full Story <span><i
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
                                <img src="<?php echo HTTP_ROOT?>assets/img/all-images/cta-img1.png" alt=""
                                    class="cta-img1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CTA AREA ENDS =======-->