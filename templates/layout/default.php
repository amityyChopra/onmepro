<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($pageTitle)){echo $pageTitle;}else{?>ONMEPRO - Leading SEO and Digital Marketing Company<?php }?></title>

    <meta name="description"
        content="<?php if(isset($metaDescription)){echo $metaDescription;}else{?>ONMEPRO is a leading SEO and digital marketing company, dedicated to enhancing your online presence and driving results through tailored strategies Get started!<?php }?>">
    <meta name="keywords"
        content="<?php if(isset($keywords)){echo $keywords;}else{?>Digital Marketing Company, Digital Marketing Agency, Online Media Promotion, Internet Marketing Company, SEO and digital marketing company, search engine optimization in digital marketing<?php }?>">
    <link rel="canonical" href="<?php if(isset($canonicalUrl)){echo $canonicalUrl;}else{?>https://www.onmepro.com/<?php }?>" />

    <!--=====FAB ICON=======-->
    <link rel="icon" href="<?php echo HTTP_ROOT;?>img/favicon.ico" type="image/x-icon">

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
    <link rel="stylesheet" href="<?php echo HTTP_ROOT;?>assets/css/intlTelInput.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "ONMEPRO",
            "url": "https://www.onmepro.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Online Media Promotion",
            "image": "https://www.onmepro.com/assets/img/logo/logo.png",
            "@id": "",
            "url": "https://www.onmepro.com/",
            "telephone": "+91 9811205120",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Ashok Vihar, Phase - 1",
                "addressLocality": "Delhi",
                "postalCode": "110052",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 28.6916606,
                "longitude": 77.16720939999999
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                "Tuesday",
                "Monday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
                ],
                "opens": "10:00",
                "closes": "18:00"
            } 
        }
    </script>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ONMEPRO: Leading SEO and Digital Marketing Company" />
    <meta property="og:description" content="ONMEPRO is a leading SEO and digital marketing company, dedicated to enhancing your online presence and driving results through tailored strategies Get started!." />
    <meta property="og:url" content="https://www.onmepro.com/" />
    <meta property="og:image" content="https://opengraph.b-cdn.net/production/images/60ea500f-b46d-4b02-8322-926f3d055e4b.png?token=_v6IOJJwwIMSye3IWTC4MoIG3KYLApQX94BZBvnTLso&height=820&width=1120&expires=33262733504">


    <!--=====  JS SCRIPT LINK =======-->
    <script src="<?php echo HTTP_ROOT;?>assets/js/plugins/jquery-3-6-0.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8VQGFGNS7Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-8VQGFGNS7Y');
    </script>
</head>

<body class="homepage3-body">

    <!--===== PRELOADER STARTS =======-->
    <div class="preloader preloader5">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="<?php echo HTTP_ROOT;?>assets/img/logo/logo.png" alt="ONMEPRO"></div>
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

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/intlTelInput.min.js"></script>

    <script src="<?php echo HTTP_ROOT;?>assets/js/sweetalert.js"></script>
    <script src="<?php echo HTTP_ROOT;?>assets/js/validate.js"></script>

    <div id="quote" class="modal fade contact-main-inner-area sp1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Get a Quote</h4>
                    <button type="button" style="border:none;box-shadow:none;background:#fff;" class="close"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:0">
                    <div class="contact-form-area" id="successForm" style="padding-top:0px;">
                        <div class="errorTxt"></div>
                        <?php echo $this->Form->create(null,["id"=>"quote-form",'url'=>["action"=>"quoteRequest"]])?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="text" name="full_name" id="full_name" class="required"
                                        placeholder="Full Name *" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="email" class="required email" id="email" name="email"
                                        placeholder="Email Address *" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="hidden" id="country" name="country" />
                                    <input type="tel" name="mobile" class="required number" id="phone"
                                        placeholder="Phone Number *">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <textarea rows="10" name="message" id="message"
                                        placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="input-area queryButton">
                                    <button type="button" class="header-btn4 btn2 g-recaptcha checkSubmission"
                                        data-sitekey="6LezDSMqAAAAACRJRjsFUUbr2XYhS-soCeQxN7OX" data-callback='onSubmit'
                                        data-action='submit'>Get In Touch <span><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/js/utils.js",
    });

    var input2 = $('#phone');
    var country = $('#country');
    var iti = intlTelInput(input2.get(0))
    input2.on('countrychange', function(e) {
        country.val(iti.getSelectedCountryData().dialCode);
    });
    </script>
    <script>
    var validator = $('#quote-form').validate({
        rules: {
            full_name: {
                required: true
            },
            email: {
                required: true
            },
            mobile: {
                required: true
            }
        },
        messages: {
            full_name: {
                required: "Full name is required"
            },
            email: {
                required: "Email is required"
            },
            mobile: {
                required: "Phone number is required"
            }
        },
        errorElement: 'div',
        errorLabelContainer: '.errorTxt'
    });


    function onSubmit(token) {

        $(".checkSubmission").attr('disabled', 'disabled');


        $.ajax({
            url: "<?php echo HTTP_ROOT;?>quote-request",
            type: "POST",
            data: $("#quote-form").serialize(),
            success: function(res) {

                $("#quote").modal("hide");

                $('#full_name').val("");
                $('#email').val("");
                $('#phone').val("");
                $('#message').html("");

                $(".checkSubmission").removeAttr('disabled');


                if (res == "success") {
                    Swal.fire({
                        icon: "success",
                        title: "Thank You",
                        text: "We have received you request.",
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Please check the filled details!",
                    });
                }
            }
        });

    }

    $(".close").click(function() {
        $("#quote").modal("hide");
    });

    function subscribeMe() {
        var emailVal = $("#email_user").val();
        $.ajax({
            url: "<?php echo HTTP_ROOT;?>Pages/subscribeMe",
            type: "GET",
            data: {
                email: emailVal
            },
            success: function(res) {
                console.log(res);
                $('#email_user').val("");
                $("#messageClass").html(res);
            }
        })
    }
    (function($) {
        $(window).on("load", function() {
            $(document).on("click", ".hash-nav", function() {
                $(".menu-close").trigger("click");
            });
        });
    })(jQuery);
    </script>
</body>

</html>