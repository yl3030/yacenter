<?php 
    $pageName = "about";
    $pageTitle = "about";
    $bannerPic = "../public/img/banner-about.png";
    $milestoneDate = [
        "Oct. 2018",
        "May 2018",
        "Jan. 2018",
        "Mar. 2017",
        "Aug. 2016",
        "Aug. 2016",
        "Dec. 2015",
        "Nov. 2014",
        "Nov. 2011",
        "Apr. 2005",
        "Aug. 2002",
        "May 1999",
        "Oct. 1999",
        "May 1999",
        "Nov. 1997",
        "Jul. 1991"
    ];
    $milestoneContent = [
        "E349597 UL Certificated",
        "IATF-16949 Certificated",
        "Expand production capacity",
        "Toyota OEM approved",
        "Mitsubishi OEM approved",
        "SUBARU OEM approved",
        "Nissan Norh America OEM approved",
        "WORK FLOW implemented",
        "Set up a new factory",
        "TS-16949 Certificated",
        "ERP implemented",
        "QS-9000 Certificated",
        "China factory established",
        "ISO 9002 Certificated",
        "Move to new factory",
        "Founded"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../include/meta.php") ?>
</head>
<body>
    <?php include("./header.php") ?>

    <main class="main">
        <?php include("../include/banner.php") ?>

        <div class="breadcrumb-common">
            <div class="container">
                <ul class="d-flex align-items-center flex-wrap">
                    <li><a href="./index.php">HOME</a></li>
                    <li><a class="active">ABOUT</a></li>
                </ul>
            </div>
        </div>

        <div class="about">
            <div class="about_milestone">
                <div class="container">
                    <h3>Milestone</h3>
                    <div class="about_milestone_content">
                        <div class="swiper-container about_milestone_swiper">
                            <div class="swiper-wrapper align-items-end">
                                <?php for($i=0;$i<16;$i++) { ?>
                                    <div class="swiper-slide">
                                        <h4 class="about_milestone_title"><?php echo $milestoneDate[$i] ?></h4>
                                        <p class="about_milestone_content"><?php echo $milestoneContent[$i] ?><</p>
                                        <div class="about_milestone_dot"></div>
                                    </div>
                                <?php } ?>
                            </div>     
                        </div>
                        <div class="about_milestone_swiper-arrow d-sm-block d-flex align-items-center justify-content-center">
                            <div class="about_milestone_swiper_prev">
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4546 5.89771H1.35232" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.52295 0.727295L1.35249 5.89775L6.52295 11.0682" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="about_milestone_swiper_next">
                                <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_quality">
                <h3>Quality Policy</h3>
                <div class="row">
                    <div class="col-6"><img src="../public/img/ISO9001.png" alt=""></div>
                    <div class="col-6"><img src="../public/img/IATF16949.png" alt=""></div>
                </div>
            </div>
            <div class="about_profile">
                <h3>Company Profile</h3>
                <div class="d-flex align-items-center justify-content-md-between justify-content-center flex-wrap">
                    <div class="about_profile_item">
                        <div class="about_profile_pic"><img src="../public/img/LOGO.png" alt=""></div>
                        <h4>Established</h4>
                        <p>1997</p>
                    </div>
                    <div class="about_profile_line"></div>
                    <div class="about_profile_item">
                        <div class="about_profile_pic"><img src="../public/img/about-icon-1.svg" alt=""></div>
                        <h4>Plant Area </h4>
                        <p>4253SQM</p>
                    </div>
                    <div class="about_profile_line"></div>
                    <div class="about_profile_item">
                        <div class="about_profile_pic"><img src="../public/img/about-icon-2.svg" alt=""></div>
                        <h4>Capital</h4>
                        <p>USD 1.5M</p>
                    </div>
                    <div class="about_profile_line"></div>
                    <div class="about_profile_item">
                        <div class="about_profile_pic"><img src="../public/img/about-icon-3.svg" alt=""></div>
                        <h4>Workforce</h4>
                        <p>160 people</p>
                    </div>
                    <div class="about_profile_line"></div>
                    <div class="about_profile_item">
                        <div class="about_profile_pic"><img src="../public/img/about-icon-4.svg" alt=""></div>
                        <h4>Certificated</h4>
                        <p>IATF-16949</p>
                    </div>
                </div>
            </div>
            <div class="about_pic">
                <div class="container">
                    <div class="about_pic_item">
                        <img src="../public/img/about-pic-1.png" alt="">
                        <div class="about_pic_text">
                            <h4>About Yacenter</h4>
                            <p>
                                Yacenter Electric Co., Ltd. was established in 1997 and we are a professional manufacturer and exporter for automotive wire harness, and wiring and cords for electric products. We also sell the relevant KD parts and sell the relevant KD parts and components for original brands such as YAZAKI,SUMITOMO, TE, MOLEX, JST, and PED.
                            </p>
                        </div>
                    </div>
                    <div class="about_pic_item">
                        <img src="../public/img/about-pic-2.png" alt="">
                        <div class="about_pic_text">
                            <h4>Customized products</h4>
                            <p>
                                 We devote to meet with the demand for customized products by self-developing, designing , processing & shipping .
                            </p>
                        </div>
                    </div>
                    <div class="about_pic_item">
                        <img src="../public/img/about-pic-3.png" alt="">
                        <div class="about_pic_text">
                            <h4>Environmental Policy</h4>
                            <ul>
                                <li>All operations are in compliance with environmental safety laws, fulfill social responsibility. </li>
                                <li>Our products comply with environmental regulations and material requirements of customers.</li>
                                <li>With the goal of fulfilling customer requirements and international regulations, Yacenter has conducted suppliers conflict minerals survey program based on Conflict-Free Sourcing Initiative(CFSI) Conflict Minerals Reporting Template(CMRT) since 2011.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        var swiper = new Swiper(".about_milestone_swiper", {
            slidesPerView: 2,
            navigation: {
                nextEl: ".about_milestone_swiper_next",
                prevEl: ".about_milestone_swiper_prev",
            },
            speed: 500,
            breakpoints: {
                767: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 5,
                },
            },
        })
    </script>
</body>
</html>