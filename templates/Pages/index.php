<div class="hero3-section-area">
    <img src="assets/img/elements/star2.png" alt="" class="star3 keyframe5">
    <img src="assets/img/elements/star2.png" alt="" class="star4 keyframe5">
    <img src="assets/img/bg/header-bg2.png" alt="" class="header-bg2">
    <img src="assets/img/bg/header-bg3.png" alt="" class="header-bg3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-main-area heading5">
                    <h5><img src="assets/img/icons/logo-icons2.svg" alt="">Leading SEO and Digital Marketing Company
                    </h5>
                    <h1 class="text-anime-style-3">Pioneering Online Promotion & Bespoke Digital Marketing Solutions
                    </h1>
                    <p data-aos="fade-left" data-aos-duretion="1000">We are passionate and obsessed with executing and
                        building strategies that help businesses to reach their true potential. </p>
                    <div class="btn-area" data-aos="fade-left" data-aos-duretion="1200">
                        <a href="<?php echo HTTP_ROOT?>contact" class="header-btn4 btn2">Start Ranking Now</a>
                        <a href="<?php echo HTTP_ROOT?>contact" class="header-btn5">Contact Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="header-images-area" data-aos="zoom-in" data-aos-duretion="1000">
                    <img src="assets/img/elements/elements8.png" alt="" class="elements6 aniamtion-key-1">
                    <img src="assets/img/elements/star5.png" alt="" class="star5 keyframe5">
                    <div class="img1">
                        <img src="assets/img/bg/header-imgbg3.png" alt="" class="header-imgbg2">
                        <img src="assets/img/all-images/header-img3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="slider3-section-area sp5">
    <div class="container">
        <div class="row align-items-center">
            <!-- <div class="col-lg-2">
                <div class="sldier-head">
                    <p>Trusted by <br class="d-lg-block d-none"> Top Companies</p>
                </div>
            </div> -->
            <!-- <div class="col-lg-10">
                <div class="slider-images-area owl-carousel">
                    <div class="img1">
                        <img src="assets/img/elements/brand-img1.png" alt="">
                    </div>
                    <div class="img1">
                        <img src="assets/img/elements/brand-img2.png" alt="">
                    </div>
                    <div class="img1">
                        <img src="assets/img/elements/brand-img3.png" alt="">
                    </div>
                    <div class="img1">
                        <img src="assets/img/elements/brand-img4.png" alt="">
                    </div>
                    <div class="img1">
                        <img src="assets/img/elements/brand-img5.png" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about3-section-area sp1">
    <img src="<?php echo HTTP_ROOT;?>assets/img/bg/about-bg1.png" alt="" class="about-bg1">
    <img src="<?php echo HTTP_ROOT;?>assets/img/bg/about-bg2.png" alt="" class="about-bg2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-images-area reveal">
                    <img src="<?php echo HTTP_ROOT;?>assets/img/all-images/about-img3.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-header-area heading6">
                    <h5>About Us </h5>
                    <h2 class="text-anime-style-3">A premier Digital Marketing Agency having more than 18 years of
                        experience</h2>
                    <p data-aos="fade-left" data-aos-duretion="1000">Data Analysis, Behavioural Patterns and Strategy,
                        this is the spirit of OnMePro. With a dedicated team of experts armed with the latest tools &
                        techniques, we specialize in crafting bespoke SEO & digital marketing solutions. With the
                        intersection of unique ideas and technology, we promote your brand to cut through the
                        competition online.
                    </p>
                    <h3>Aritone’s Edge :</h3>
                    <div class="list-area" data-aos="fa-angle-left" data-aos-duretion="1100">
                        <ul>
                            <li><img src="<?php echo HTTP_ROOT;?>assets/img/icons/check1.svg" alt="">Powered by
                                technology
                            </li>
                            <li><img src="<?php echo HTTP_ROOT;?>assets/img/icons/check1.svg" alt="">Diversified domain
                                experience
                            </li>
                        </ul>
                        <ul>
                            <li><img src="<?php echo HTTP_ROOT;?>assets/img/icons/check1.svg" alt="">Commitment to
                                quality
                            </li>
                            <li><img src="<?php echo HTTP_ROOT;?>assets/img/icons/check1.svg" alt="">Deliver with
                                excellence</li>
                        </ul>
                    </div>
                    <div class="images-area" data-aos="fade-left" data-aos-duretion="1200">
                        <div class="img">
                            <img src="<?php echo HTTP_ROOT;?>assets/img/aritone-logo.png" alt="">
                        </div>
                        <div class="content-area" data-aos="fade-left" data-aos-duretion="1200">
                            <p data-aos="fade-left" data-aos-duretion="1000">Whether you're a start-up looking to build
                                a strong digital marketing campaigns, or want to echo your brand's online presence. We
                                have got your back!

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service3-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service-header-area text-center heading6">
                    <h5>Services</h5>
                    <h2 class="text-anime-style-3">OnMePro is specialized digital marketing agency to manage your all
                        online media promotions.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($getServices)){?>
            <?php foreach($getServices as $service){?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duretion="800">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="<?php echo HTTP_ROOT;?>assets/img/<?php echo $service["img_file"]?>" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="javascript:void(0)"><?php echo $service["service_title"]?></a>
                        <p><?php echo $service["content"]?>
                        </p>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php }?>


            <!-- <div class="col-lg-12">
                <div class="space30"></div>
                <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duretion="1200">
                    <a href="javascript:void(0)" class="header-btn5">View More Services</a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->


<!--===== WORK AREA STARTS =======-->
<div class="work4-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="work2-header text-center heading6">
                    <h5>Why choose us?</h5>
                    <h2 class="text-anime-style-3">Technology backed platform for our digital marketing services
                    </h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="work-images reveal">
                    <img src="assets/img/all-images/work-img2.png" alt="">
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="all-boxes-area">
                    <div class="work-process-area" data-aos="fade-up" data-aos-duretion="800">
                        <div class="icons">
                            <img src="<?php echo HTTP_ROOT;?>assets/img/icons/works-icon1.png" alt="">
                        </div>
                        <div class="content-area">
                            <a href="case-single.html">Tailored Strategic Solution</a>
                            <p>We understand that every business is unique. That's why we craft customized strategies
                                tailored to your specific objectives, audience, and industry.
                            </p>
                        </div>
                    </div>
                    <div class="space30"></div>
                    <div class="work-process-area work2" data-aos="fade-up" data-aos-duretion="1000">
                        <div class="icons">
                            <img src="<?php echo HTTP_ROOT;?>assets/img/icons/works-icon2.png" alt="">
                        </div>
                        <div class="content-area">
                            <a href="case-single.html">Transparent Communication</a>
                            <p>We believe in transparent communication and keep you informed every step of the way,
                                providing detailed reports and insights into your campaign performance.
                            </p>
                        </div>
                    </div>
                    <div class="space30"></div>
                    <div class="work-process-area" data-aos="fade-up" data-aos-duretion="1200">
                        <div class="icons">
                            <img src="<?php echo HTTP_ROOT;?>assets/img/icons/works-icon3.png" alt="">
                        </div>
                        <div class="content-area">
                            <a href="case-single.html">Multiple Level Monitoring</a>
                            <p>We believe in the power of data-driven decision-making. Our team monitors your campaign
                                to stay ahead in ever-evolving field of Online Promotion.
                            </p>
                        </div>
                    </div>
                    <div class="space30"></div>
                    <div class="work-process-area work2" data-aos="fade-up" data-aos-duretion="1000">
                        <div class="icons">
                            <img src="<?php echo HTTP_ROOT;?>assets/img/icons/works-icon2.png" alt="">
                        </div>
                        <div class="content-area">
                            <a href="case-single.html">Proven Track Record</a>
                            <p> We've helped businesses of all sizes achieve their digital goals with our data-driven
                                strategies and personalized approach.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->


<!--===== BLOG AREA STARTS =======-->
<div class="blog3-section-area sp2">
    <img src="assets/img/bg/about-bg1.png" alt="" class="about-bg1">
    <img src="assets/img/bg/about-bg2.png" alt="" class="about-bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="blog-header-area heading6 text-center">
                    <h5>Our Blog</h5>
                    <h2 class="text-anime-style-3">Latest updates on effective online promotion and digital maketing
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($getBlogs)){?>
            <?php foreach($getBlogs as $blog){?>
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duretion="1200">
                <div class="blog2-author-boxarea">
                    <div class="img1">
                        <img src="assets/img/all-images/blog-img4.png" alt="">
                    </div>
                    <div class="blog-content">
                        <a href="#" class="date"><img src="assets/img/icons/calender1.svg"
                                alt=""><?php echo date("d F Y",strtotime($blog["date_added"]))?></a>
                        <a href="<?php echo HTTP_ROOT;?>blog/<?php echo $blog["seo_url"]?>" class="head">
                            <?php echo $blog["blog_title"];?></a>
                        <p><?php echo substr(strip_tags($blog["content"]),0,100);?>...</p>
                        <a href="<?php echo HTTP_ROOT;?>blog/<?php echo $blog["seo_url"]?>" class="readmore">Learn More
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
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
                                    <a href="contact.html" class="header-btn5">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <div class="images">
                                <img src="assets/img/elements/elements8.png" alt="" class="elements6 aniamtion-key-2">
                                <img src="assets/img/elements/star6.png" alt="" class="elements7 keyframe5">
                                <img src="assets/img/bg/cta-bg3.png" alt="" class="bg1 aniamtion-key-5">
                                <img src="assets/img/all-images/cta-img1.png" alt="" class="cta-img1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CTA AREA ENDS =======-->