<?php 
    $pageName = "product";
    $pageTitle = "PRODUCT";
    $bannerPic = "../public/img/banner-product.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../include/meta.php") ?>
</head>
<body>
    <?php include("./header.php") ?>

    <main class="main product-detail-wrap">
        <?php include("../include/banner.php") ?>

        <div class="product-detail">
            <div class="breadcrumb-common">
                <div class="container">
                    <ul class="d-flex align-items-center flex-wrap">
                        <li><a href="./index.php">HOME</a></li>
                        <li><a>PRODUCT</a></li>
                        <li><a href="./product_car.php">CAR</a></li>
                        <li><a class="active">VEHICLE ALARM HARNESS</a></li>
                    </ul>
                </div>
            </div>
            <div class="product-detail_title">
                <h2>Vehicle alarm harnessVehicle alarm harnessVehicle alarm harness</h2>
                <h3>CAR</h3>
            </div>
            <div class="product-detail_pic">
                <div class="product-detail_slider">
                    <div class="swiper-container product-detail_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-detail_swiper_pic"><img src="../public/img/product-1.png" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-detail_swiper_pic"><img src="../public/img/product-2.png" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-detail_swiper_pic"><img src="../public/img/product-3.png" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-detail_swiper_pic"><img src="../public/img/product-4.png" alt=""></div>
                            </div>
                        </div>     
                    </div>
                    <div class="product-detail_slider_btn d-flex align-items-center justify-content-between">
                        <div class="product-detail_slider_prev">
                            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4546 5.89771H1.35232" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.52295 0.727295L1.35249 5.89775L6.52295 11.0682" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="product-detail_slider_pagination"></div>
                        <div class="product-detail_slider_next">
                            <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="./contact.php" class="btn-contact">
                    <svg class="btn-contact_bg" width="175" height="45" viewBox="0 0 175 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3948 14.965C17.7591 5.70268 27.6518 0 38.3553 0H165C170.523 0 175 4.47715 175 10V35C175 40.5228 170.523 45 165 45H8.87802C2.71482 45 -1.13358 38.324 1.95522 32.9907L12.3948 14.965Z" fill="#22B1DB"/>
                    </svg>
                    <img class="btn-contact_icon" src="../public/img/icon_email-2.svg" alt="">
                    <span>CONTACT US</span>
                </a>
            </div>
            <div class="product-detail_content">
                <div class="product-detail_content_inner">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim rutrum efficitur. Fusce laoreet ullamcorper molestie. Sed posuere varius mauris eu congue. Phasellus faucibus, quam id placerat bibendum, orci ipsum ullamcorper massa, in condimentum mauris magna quis urna. Nam vel lacus vel orci finibus suscipit id viverra ligula.<br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim rutrum efficitur. Fusce laoreet ullamcorper molestie. Sed posuere varius mauris eu congue. Phasellus faucibus, quam id placerat bibendum, orci ipsum ullamcorper massa, in condimentum mauris magna quis urna. Nam vel lacus vel orci finibus suscipit id viverra ligula.<br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim rutrum efficitur. Fusce laoreet ullamcorper molestie. Sed posuere varius mauris eu congue. Phasellus faucibus, quam id placerat bibendum, orci ipsum ullamcorper massa, in condimentum mauris magna quis urna. Nam vel lacus vel orci finibus suscipit id viverra ligula.<br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim rutrum efficitur. Fusce laoreet ullamcorper molestie. Sed posuere varius mauris eu congue. Phasellus faucibus, quam id placerat bibendum, orci ipsum ullamcorper massa, in condimentum mauris magna quis urna. Nam vel lacus vel orci finibus suscipit id viverra ligula.
                    </p>
                    <div class="product-detail_appl">
                        <h4>Application</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim rutrum efficitur. Fusce laoreet ullamcorper molestie. Sed posuere varius mauris eu congue. Phasellus faucibus, quam id placerat bibendum, orci ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-btn mb-footer">
            <div class="container d-sm-flex align-items-center justify-content-between">
                <a href="./product_car.php" class="btn-back">
                    <svg class="btn-back_bg" width="175" height="45" viewBox="0 0 175 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3948 14.965C17.7591 5.70268 27.6518 0 38.3553 0H165C170.523 0 175 4.47715 175 10V35C175 40.5228 170.523 45 165 45H8.87802C2.71482 45 -1.13358 38.324 1.95522 32.9907L12.3948 14.965Z" fill="#22B1DB"/>
                    </svg>
                    <span>BACK</span>
                </a>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="" class="inner-btn_prev">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4546 5.89771H1.35232" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.52295 0.727295L1.35249 5.89775L6.52295 11.0682" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>PREV</span>
                    </a>
                    <a href="" class="inner-btn_next">
                        <span>NEXT</span>
                        <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        var swiper = new Swiper(".product-detail_swiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".product-detail_slider_pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".product-detail_slider_next",
                prevEl: ".product-detail_slider_prev",
            },
            speed: 500,
        })

        let picTop = $(".product-detail_pic").offset().top;
        function productScroll(){
            if($(window).width() > 991) {
                let headerHeight = $(".header").height();
                let contentHeight = $(".product-detail").height();
                let picHeight = $(".product-detail_pic").height();
                let fixedTop = picTop - headerHeight;
                let absoluteTop = fixedTop + contentHeight - picHeight;
                // console.log("screenHeight=" + screenHeight + ",contentHeight=" + contentHeight);
                if($(window).scrollTop() > fixedTop && $(window).scrollTop() < absoluteTop) {
                    $(".product-detail_pic").removeClass("absoluteTop").addClass("fixedTop");
                }else if($(window).scrollTop() >= absoluteTop) {
                    $(".product-detail_pic").removeClass("fixedTop").addClass("absoluteTop");
                }else {
                    $(".product-detail_pic").removeClass("fixedTop").removeClass("absoluteTop");
                }
            }
        }
        productScroll();
        $(window).on("resize scroll",function(){
            productScroll();
        })
    </script>
</body>
</html>