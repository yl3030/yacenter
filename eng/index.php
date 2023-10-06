<?php 
    $carProductImg = [
        "../public/img/product-1.jpg",
        "../public/img/product-2.jpg",
        "../public/img/product-3.jpg",
        "../public/img/product-17.png",
        "../public/img/product-5.jpg",
        "../public/img/product-6.jpg",
    ];
    $carProductName = [
        "ECU system wire harness",
        "back sensor",
        "13832946283SNSM1",
        "毫米波雷達",
        "Bus Dashboard wire harness",
        "audio",
    ];
    $busProductImg = [
        "../public/img/product-1.jpg",
        "../public/img/product-2.jpg",
        "../public/img/product-3.jpg",
        "../public/img/product-17.png",
        "../public/img/product-5.jpg",
        "../public/img/product-6.jpg",
    ];
    $busProductName = [
        "CCD",
        "Bus Waterproof Wire Harness",
        "Busloom",
        "CIMG1539",
        "control harness",
        "Camera cable for Heavy equipment",
    ];
    $craneProductImg = [
        "../public/img/product-1.jpg",
        "../public/img/product-2.jpg",
        "../public/img/product-3.jpg",
        "../public/img/product-17.png",
    ];
    $craneProductName = [
        "deutsch",
        "DW",
        "E26  HID車燈線組E",
        "ECU system wire harness",
    ];
    $productImg = [
        "../public/img/product-3.jpg",
        "../public/img/product-17.png",
        "../public/img/product-5.jpg",
        "../public/img/product-6.jpg",
    ];
    $productName = [
        "ECU system wire harness",
        "back sensor",
        "13832946283SNSM1",
        "毫米波雷達",
    ];
    $productIntro = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque ante dolor, et facilisis nibh vehicula vitae. Vestibulum vitae dolor massa. Nulla quis",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque ante dolor, et facilisis nibh vehicula vitae. Vestibulum vitae dolor massa. Nulla quis",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque ante dolor, et facilisis nibh vehicula vitae. Vestibulum vitae dolor massa. Nulla quis",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque ante dolor, et facilisis nibh vehicula vitae. Vestibulum vitae dolor massa. Nulla quis",
    ];
    $mediaImg = [
        "../public/img/product-5.png",
        "../public/img/product-6.png",
        "../public/img/product-7.jpg",
    ];
    $mediaTag = [
        "NEWS",
        "EXHIBITION",
        "BLOG",
    ];
    $mediaDate = [
        "2023/03/03",
        "2023/03/04",
        "2023/03/05",
    ];
    $mediaTitle = [
        "Lorem ipsum dolor sit amet,",
        "consectetur adipiscing elit",
        "sed do eiusmod tempor incididunt",
    ];
    $mediaIntro = [
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
        "Mauris augue neque gravida in fermentum et. Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus.",
        "Tincidunt augue interdum velit euismod in pellentesque massa placerat. Adipiscing at in tellus integer feugiat.",
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../include/meta.php") ?>
</head>
<body>
    <?php include("./header.php") ?>

    <main class="main">
        <div class="home-banner">
            <div class="swiper-container home-banner_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="home-banner_pic" src="../public/img/banner-home.jpg" alt="">
                        <h1 class="home-banner_title">
                            SloganSloganSloganSlogan<br>
                            SloganSloganSloganSloganSloganSlogan
                        </h1>
                    </div>
                </div>     
            </div>
            <img class="home-banner_style" src="../public/img/banner_style.svg" alt="">
            <div class="home-banner_next">
                <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="home-banner_prev">
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.4546 5.89771H1.35232" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.52295 0.727295L1.35249 5.89775L6.52295 11.0682" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    
        <div class="home-about">
            <img class="home-about_bg" src="../public/img/about_bg.svg" alt="">
            <div class="home-title">
                <div class="container">
                    <h2>About Us</h2>
                    <a href="./about.php">
                        <span>MORE</span>
                        <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <p class="home-about_text">
                Yacenter Electric Co., Ltd. was established in 1997 and we are a professional manufacturer and exporter for automotive wire harness, and wiring and cords for electric products. We also sell the relevant KD parts and sell the relevant KD parts and components for original brands such as YAZAKI,SUMITOMO, TE, MOLEX, JST, and PED.
            </p>
            <ul class="nav nav-pills home-about_tab justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-car-tab" data-bs-toggle="pill" data-bs-target="#pills-car" type="button" role="tab" aria-controls="pills-car" aria-selected="true">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.7873 18.8822C33.5412 16.1198 33.1358 15.5818 32.9827 15.3795C32.6307 14.9119 32.0674 14.6063 31.4713 14.2857C31.4376 14.2679 31.4085 14.2425 31.3863 14.2115C31.3641 14.1805 31.3494 14.1448 31.3433 14.1071C31.3373 14.0695 31.3401 14.0309 31.3515 13.9945C31.3629 13.9582 31.3826 13.9249 31.4091 13.8975C31.5195 13.7855 31.6043 13.651 31.6578 13.5031C31.7112 13.3553 31.732 13.1976 31.7187 13.0409C31.693 12.7631 31.5639 12.5051 31.3568 12.3181C31.1498 12.1311 30.8801 12.0287 30.6011 12.0312H29.5347C29.489 12.0315 29.4433 12.0345 29.3979 12.0401C29.3668 12.0266 29.3346 12.0159 29.3016 12.008C28.6699 10.6729 27.8052 8.84502 26.0128 7.95293C23.3543 6.63086 18.457 6.5625 17.5 6.5625C16.543 6.5625 11.6457 6.63086 8.99063 7.95088C7.19824 8.84297 6.3335 10.6709 5.70186 12.006L5.69639 12.0169C5.66488 12.0213 5.63395 12.0291 5.6041 12.0401C5.55874 12.0345 5.51309 12.0315 5.46738 12.0312H4.39893C4.11995 12.0287 3.85019 12.1311 3.64317 12.3181C3.43614 12.5051 3.30696 12.7631 3.28125 13.0409C3.26911 13.1972 3.29086 13.3543 3.34501 13.5014C3.39916 13.6485 3.48444 13.7822 3.59502 13.8934C3.62147 13.9208 3.64118 13.9541 3.6526 13.9904C3.66401 14.0268 3.66681 14.0654 3.66077 14.103C3.65474 14.1407 3.64004 14.1764 3.61784 14.2074C3.59563 14.2384 3.56652 14.2638 3.53281 14.2816C2.93672 14.6043 2.3707 14.9099 2.02139 15.3754C1.86826 15.5805 1.46358 16.1157 1.2168 18.8781C1.08008 20.4326 1.05957 22.0418 1.1669 23.0781C1.3918 25.2314 1.81358 26.533 1.83135 26.587C1.89607 26.7835 2.01521 26.9577 2.17493 27.0892C2.33465 27.2207 2.5284 27.3043 2.73369 27.3301V27.3438C2.73369 27.6338 2.84893 27.912 3.05404 28.1171C3.25916 28.3223 3.53736 28.4375 3.82744 28.4375H7.65557C7.94565 28.4375 8.22385 28.3223 8.42897 28.1171C8.63408 27.912 8.74932 27.6338 8.74932 27.3438C9.33789 27.3438 9.74736 27.2385 10.1814 27.1264C10.8082 26.9575 11.4487 26.8452 12.0955 26.7907C14.1812 26.5918 16.2552 26.5234 17.5 26.5234C18.7195 26.5234 20.8852 26.5918 22.9742 26.7907C23.6235 26.8453 24.2667 26.9581 24.8958 27.1277C25.3114 27.2344 25.7059 27.3328 26.252 27.3431C26.252 27.6331 26.3673 27.9113 26.5724 28.1165C26.7775 28.3216 27.0557 28.4368 27.3458 28.4368H31.1739C31.464 28.4368 31.7422 28.3216 31.9473 28.1165C32.1524 27.9113 32.2677 27.6331 32.2677 27.3431V27.3349C32.4735 27.3095 32.6678 27.2262 32.828 27.0947C32.9883 26.9631 33.1078 26.7887 33.1728 26.5918C33.1905 26.5378 33.6123 25.2362 33.8372 23.0829C33.9445 22.0459 33.9254 20.4395 33.7873 18.8822ZM7.67881 12.9411C8.22568 11.779 8.85117 10.4638 9.96475 9.90938C11.5739 9.1082 14.9092 8.74727 17.5 8.74727C20.0908 8.74727 23.4261 9.10547 25.0353 9.90938C26.1488 10.4638 26.7716 11.7797 27.3212 12.9411L27.3895 13.0895C27.4295 13.1739 27.4472 13.2672 27.4409 13.3604C27.4346 13.4536 27.4045 13.5437 27.3535 13.6219C27.3025 13.7002 27.2323 13.7641 27.1495 13.8076C27.0668 13.851 26.9744 13.8726 26.881 13.8701C24.6094 13.8086 19.8242 13.6117 17.5 13.6117C15.1758 13.6117 10.3906 13.8134 8.11563 13.8749C8.02223 13.8773 7.92976 13.8558 7.84704 13.8124C7.76432 13.7689 7.69412 13.705 7.64312 13.6267C7.59211 13.5485 7.56202 13.4584 7.5557 13.3652C7.54939 13.272 7.56706 13.1787 7.60703 13.0942C7.63096 13.0437 7.65625 12.9924 7.67881 12.9411ZM8.49434 18.3846C7.31842 18.5261 6.13499 18.596 4.95059 18.5938C4.22598 18.5938 3.47881 18.3887 3.34004 17.7434C3.24502 17.3093 3.25527 17.0652 3.30654 16.8198C3.34961 16.6113 3.41797 16.4596 3.75977 16.4062C4.64844 16.2695 5.14541 16.4411 6.6001 16.8697C7.56465 17.1534 8.26055 17.5314 8.65703 17.8309C8.85596 17.9785 8.75 18.3641 8.49434 18.3846ZM23.6277 23.99C22.7281 24.0926 20.9289 24.055 17.5205 24.055C14.1121 24.055 12.3136 24.0926 11.414 23.99C10.4856 23.8868 9.30234 23.0091 10.1104 22.2271C10.6483 21.7116 11.9034 21.3261 13.5748 21.1094C15.2462 20.8927 15.9537 20.7812 17.5137 20.7812C19.0736 20.7812 19.7094 20.8496 21.4525 21.1101C23.1957 21.3705 24.513 21.7608 24.917 22.2277C25.6539 23.0645 24.5554 23.8813 23.6277 23.9941V23.99ZM31.66 17.7427C31.5232 18.3907 30.7713 18.5931 30.0494 18.5931C28.8423 18.5933 27.6363 18.5235 26.4373 18.3839C26.2281 18.3641 26.1311 17.997 26.343 17.8302C26.7333 17.5232 27.4367 17.1527 28.3999 16.869C29.8546 16.4404 30.6934 16.2688 31.4139 16.4117C31.5896 16.4466 31.6825 16.6353 31.6935 16.7535C31.7417 17.0828 31.7303 17.4181 31.66 17.7434V17.7427Z" fill="#ADADAD"/>
                    </svg>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-bus-tab" data-bs-toggle="pill" data-bs-target="#pills-bus" type="button" role="tab" aria-controls="pills-bus" aria-selected="false">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3365 10.3354C30.0915 7.94068 29.7013 6.07612 29.084 5.34323C26.5387 2.32983 8.70918 2.10931 6.68484 5.34323C6.18965 6.13554 5.84235 7.9935 5.60928 10.3394C4.85725 10.4279 4.27161 11.061 4.27161 11.8362V14.7697C4.27161 15.422 4.68493 15.972 5.26199 16.1866C5.12532 20.8071 5.23624 25.6276 5.44092 28.025C5.44092 29.8757 6.68418 29.5686 6.68418 29.5686H7.84953V31.5666C7.84953 32.3589 8.66626 33 9.67249 33C10.68 33 11.4968 32.3589 11.4968 31.5666V29.5686H25.0544V31.5666C25.0544 32.3589 25.8705 33 26.8781 33C27.8843 33 28.701 32.3589 28.701 31.5666V29.5686H29.084C29.084 29.5686 30.5471 29.7694 30.6409 28.8978C30.6409 26.507 30.7914 21.2085 30.6673 16.2071C31.2807 16.0149 31.7283 15.4498 31.7283 14.7697V11.8362C31.729 11.0426 31.1149 10.3988 30.3365 10.3354ZM11.0392 5.77306H24.7296V7.84428H11.0392V5.77306ZM11.2347 27.2096C10.1598 27.2096 9.28888 26.338 9.28888 25.2631C9.28888 24.1889 10.1598 23.318 11.2347 23.318C12.3095 23.318 13.1811 24.1889 13.1811 25.2631C13.1811 26.338 12.3102 27.2096 11.2347 27.2096ZM24.6563 27.2096C23.5821 27.2096 22.7092 26.338 22.7092 25.2631C22.7092 24.1889 23.5814 23.318 24.6563 23.318C25.7312 23.318 26.6021 24.1889 26.6021 25.2631C26.6027 26.338 25.7312 27.2096 24.6563 27.2096ZM27.1303 18.6923H8.63853V8.99312H27.1303V18.6923Z" fill="#ADADAD"/>
                    </svg>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-crane-tab" data-bs-toggle="pill" data-bs-target="#pills-crane" type="button" role="tab" aria-controls="pills-crane" aria-selected="false">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.5317 26.2496H16.4058C14.5935 26.2496 13.1243 27.7187 13.1243 29.5309C13.1243 31.3431 14.5935 32.8121 16.4058 32.8121H29.5317C31.344 32.8121 32.8132 31.3431 32.8132 29.5309C32.8132 27.7187 31.344 26.2496 29.5317 26.2496ZM16.4058 31.7184C15.1976 31.7184 14.2181 30.739 14.2181 29.5309C14.2181 28.3227 15.1976 27.3434 16.4058 27.3434C17.614 27.3434 18.5934 28.3227 18.5934 29.5309C18.5934 30.739 17.614 31.7184 16.4058 31.7184ZM22.9688 31.7184C21.7606 31.7184 20.7811 30.739 20.7811 29.5309C20.7811 28.3227 21.7606 27.3434 22.9688 27.3434C24.1769 27.3434 25.1564 28.3227 25.1564 29.5309C25.1564 30.739 24.1769 31.7184 22.9688 31.7184ZM29.5317 31.7184C28.3235 31.7184 27.3441 30.739 27.3441 29.5309C27.3441 28.3227 28.3235 27.3434 29.5317 27.3434C30.7399 27.3434 31.7194 28.3227 31.7194 29.5309C31.7194 30.739 30.7399 31.7184 29.5317 31.7184Z" fill="#ADADAD"/>
                        <path d="M7.65552 12.0309C7.0515 12.0309 6.56177 12.5201 6.56177 13.1246C6.56177 13.7281 6.07097 14.2184 5.46802 14.2184C4.86507 14.2184 4.37427 13.7281 4.37427 13.1246C4.37427 12.5211 4.86507 12.0309 5.46802 12.0309C6.07204 12.0309 6.56177 11.5417 6.56177 10.9371V6.71019L14.218 17.4996L16.7336 14.2184L9.39741 6.03014L26.2493 12.7711V19.6871H24.0612V15.3121C24.0612 14.7076 23.5714 14.2184 22.9674 14.2184H18.5921C18.2475 14.2184 17.9234 14.3807 17.7172 14.6563L14.4357 19.0313C14.2937 19.2204 14.2167 19.45 14.2167 19.6871V24.0621C14.2167 24.6667 14.7065 25.1559 15.3106 25.1559H30.6242C31.2282 25.1559 31.718 24.6667 31.718 24.0621V20.7809C31.718 20.1763 31.2282 19.6871 30.6242 19.6871H28.4368V12.0309C28.4368 11.5833 28.1644 11.1817 27.7489 11.0151L5.87444 2.2651C5.53798 2.13158 5.15559 2.17324 4.85492 2.37511C4.55424 2.57912 4.37427 2.91772 4.37427 3.28088V10.0303C3.10107 10.4821 2.18677 11.6987 2.18677 13.1246C2.18677 14.934 3.65863 16.4059 5.46802 16.4059C7.2774 16.4059 8.74927 14.934 8.74927 13.1246C8.74927 12.5201 8.25954 12.0309 7.65552 12.0309ZM22.9674 19.6871H16.4044C15.9538 19.6871 15.6965 19.1726 15.9669 18.8121L18.5921 15.3121H22.9674V19.6871Z" fill="#ADADAD"/>
                    </svg>
                  </button>
                </li>
            </ul>
            <div class="tab-content home-about_tabContent-wrap" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-car" role="tabpanel" aria-labelledby="pills-car-tab">
                    <div class="home-about_tabContent">
                        <img class="home-about_bigpic" src="../public/img/car.png" alt="">
                        <!-- <svg class="home-about_line car-line-1" width="856" height="572" viewBox="0 0 856 572" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M779.352 355.9L772.914 362.286C766.234 369.422 756.297 372.506 746.766 370.401C742.875 369.548 738.93 371.543 737.312 375.19L733.477 383.845C730.875 389.714 726.805 394.808 721.664 398.642L673.258 434.733C655.422 448.036 634.781 457.176 612.867 460.995C611.961 461.152 611.062 461.3 610.172 461.441C601.773 462.725 593.586 458.123 590.289 450.274C581.453 429.263 560.055 385.989 527.453 366.731C475.836 336.243 441.297 344.882 422.016 365.408C418.758 368.882 416.133 371.715 414.039 374.016C409.219 379.306 401.469 380.714 395.094 377.475L381.695 370.667C378.398 368.992 375.836 366.151 374.508 362.693C373.008 358.796 369.953 355.697 366.078 354.155L304.383 329.584C300.828 328.167 296.93 327.893 293.211 328.801L287.656 330.155C284.367 330.953 280.914 330.687 277.781 329.388L241.648 314.395C240.227 313.808 239.695 312.07 240.531 310.779L241.938 308.619C243.313 306.507 242.305 303.658 239.914 302.876L198.102 289.228C190.977 286.904 185.266 281.481 182.609 274.462C177.656 261.37 168.258 240.006 156.57 230.217C154.836 228.769 155.32 225.991 157.461 225.271L162.945 223.44C165.086 222.728 165.594 219.919 163.836 218.494L109.922 174.852C105.906 171.597 103.789 166.542 104.289 161.392C104.875 155.383 108.914 150.273 114.617 148.324L256.945 94.3657C258.875 93.7084 259.125 91.0791 257.352 90.0696C256.805 89.7566 256.148 89.6783 255.539 89.8427L242.805 93.411C240.539 94.0449 238.188 92.7537 237.5 90.5C236.828 88.3089 234.57 87.0177 232.344 87.5498L229.469 88.2463" stroke="url(#paint0_linear_443_1119)" stroke-width="5" stroke-miterlimit="10"/>
                            <defs>
                            <linearGradient id="paint0_linear_443_1119" x1="441.784" y1="87.4303" x2="441.784" y2="461.655" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF382C"/>
                            <stop offset="1" stop-color="#FF8F27"/>
                            </linearGradient>
                            </defs>
                        </svg>
                        <svg class="home-about_line car-line-2" width="856" height="572" viewBox="0 0 856 572" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_f_444_1121)">
                            <path d="M542 343.441L461.078 311.287C455.383 309.025 449.086 308.736 443.211 310.473C437.469 312.171 431.328 311.936 425.727 309.816L289.961 258.231C284.32 256.086 280.273 251.063 279.367 245.092L277.594 233.354C277.219 230.873 275.727 228.705 273.547 227.469C271.445 226.28 269.984 224.222 269.547 221.843L268.18 214.393" stroke="url(#paint0_linear_444_1121)" stroke-width="4" stroke-miterlimit="10"/>
                            </g>
                            <defs>
                            <filter id="filter0_f_444_1121" x="262.213" y="210.032" width="284.526" height="139.268" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_444_1121"/>
                            </filter>
                            <linearGradient id="paint0_linear_444_1121" x1="405.09" y1="214.393" x2="405.09" y2="343.441" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF382C"/>
                            <stop offset="1" stop-color="#FF8F27"/>
                            </linearGradient>
                            </defs>
                        </svg>
                        <svg class="home-about_line car-line-3" width="856" height="572" viewBox="0 0 856 572" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_f_444_1123)">
                            <path d="M201.703 115.12C200.742 121.161 196.719 126.271 191.078 128.611L79.75 174.859C76.2187 176.33 75.9765 181.252 79.3515 183.052L86.2734 186.753C89.0781 188.248 92.4375 188.295 95.2734 186.871L98.2421 185.384" stroke="url(#paint0_linear_444_1123)" stroke-width="3" stroke-miterlimit="10"/>
                            </g>
                            <defs>
                            <filter id="filter0_f_444_1123" x="71.4552" y="110.884" width="135.729" height="82.5234" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_444_1123"/>
                            </filter>
                            <linearGradient id="paint0_linear_444_1123" x1="139.329" y1="115.12" x2="139.329" y2="187.908" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF382C"/>
                            <stop offset="1" stop-color="#FF8F27"/>
                            </linearGradient>
                            </defs>
                        </svg> -->
                        <div class="home-about_pin-warp">
                            <?php for($i=0;$i<6;$i++) { ?>
                                <div class="home-about_pin car-pin-<?php echo $i+1 ?>" data-product="#car-<?php echo $i+1 ?>">
                                    <div class="home-about_product">
                                        <img src="<?php echo $carProductImg[$i] ?>" alt="">
                                    </div>
                                    <div class="pin">
                                        <div class="pin_inner">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0.474106C6.55228 0.474106 7 0.921821 7 1.47411V10.5258C7 11.0781 6.55228 11.5258 6 11.5258C5.44772 11.5258 5 11.0781 5 10.5258V1.47411C5 0.921821 5.44772 0.474106 6 0.474106Z" fill="#2096B9"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.474121 5.99997C0.474121 5.44768 0.921836 4.99997 1.47412 4.99997H10.5258C11.0781 4.99997 11.5258 5.44768 11.5258 5.99997C11.5258 6.55225 11.0781 6.99997 10.5258 6.99997H1.47412C0.921836 6.99997 0.474121 6.55225 0.474121 5.99997Z" fill="#2096B9"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="home-about_product-m">
                        <?php for($i=0;$i<6;$i++) { ?>
                            <a href="./product_detail.php" class="home-about_product-m_link" id="car-<?php echo $i+1 ?>">
                                <img src="<?php echo $carProductImg[$i] ?>" alt="">
                                <p><?php echo $carProductName[$i] ?></p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bus" role="tabpanel" aria-labelledby="pills-bus-tab">
                    <div class="home-about_tabContent">
                        <img class="home-about_bigpic" src="../public/img/bus.png" alt="">
                        <!-- <svg class="home-about_line bus-line" width="856" height="572" viewBox="0 0 856 572" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M770 360.5L763.564 367.018C756.886 374.303 740.626 377.32 731.097 375.171C727.207 374.3 723.262 376.337 721.646 380.06L717.81 388.894C715.209 394.885 711.14 400.086 706 404L652 443.5C634.168 457.079 630.91 458.602 609 462.5C609 462.5 594.5 464.5 585 464C563 464 536.296 447.012 533 439C524.166 417.552 508 375 479 357.5C451 343.5 417 354.5 406.975 380.713C406.975 380.713 403.593 390.651 401.5 393C388.5 404.5 373.5 389.5 367.5 386L353 376.5C345.5 372.5 353.385 359.5 351.5 354.5C350 350.522 346.683 348.84 342.809 347.267L281.126 322.185C277.572 320.739 273.674 320.459 269.956 321.386L264.403 322.768C261.114 323.583 257.662 323.311 254.53 321.985L218.404 306.68C216.982 306.081 216.451 304.308 217.287 302.99L218.693 300.785C220.068 298.628 219.06 295.72 216.67 294.922L149.723 275.073C142.599 272.701 136.889 267.165 134.233 260C129.281 246.636 110.421 224.459 98.7357 214.466C97.0017 212.988 97.486 210.152 99.6262 209.417L105.109 207.548C107.25 206.821 107.757 203.954 106 202.5L54.5 179.5C50.4852 176.177 49.8684 173.517 50.3683 168.26C50.9541 162.126 56.3984 159.447 62.1004 157.458L257.802 99.9999C265 98.9999 265 92.4999 251 89.9999C241 88.2142 236.5 92.4999 228.5 93.9999" stroke="url(#paint0_linear_451_1135)" stroke-width="7" stroke-miterlimit="10"/>
                            <defs>
                            <linearGradient id="paint0_linear_451_1135" x1="410.11" y1="89.572" x2="410.11" y2="464.08" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF382C"/>
                            <stop offset="1" stop-color="#FF8F27"/>
                            </linearGradient>
                            </defs>
                        </svg> -->
                        <div class="home-about_pin-warp">
                            <?php for($i=0;$i<6;$i++) { ?>
                                <div class="home-about_pin bus-pin-<?php echo $i+1 ?>" data-product="#bus-<?php echo $i+1 ?>">
                                    <div class="home-about_product">
                                        <img src="<?php echo $busProductImg[$i] ?>" alt="">
                                        <!-- <p><?php echo $busProductName[$i] ?></p> -->
                                    </div>
                                    <div class="pin">
                                        <div class="pin_inner">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0.474106C6.55228 0.474106 7 0.921821 7 1.47411V10.5258C7 11.0781 6.55228 11.5258 6 11.5258C5.44772 11.5258 5 11.0781 5 10.5258V1.47411C5 0.921821 5.44772 0.474106 6 0.474106Z" fill="#2096B9"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.474121 5.99997C0.474121 5.44768 0.921836 4.99997 1.47412 4.99997H10.5258C11.0781 4.99997 11.5258 5.44768 11.5258 5.99997C11.5258 6.55225 11.0781 6.99997 10.5258 6.99997H1.47412C0.921836 6.99997 0.474121 6.55225 0.474121 5.99997Z" fill="#2096B9"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="home-about_product-m">
                        <?php for($i=0;$i<6;$i++) { ?>
                            <div class="home-about_product-m_link" id="bus-<?php echo $i+1 ?>">
                                <img src="<?php echo $busProductImg[$i] ?>" alt="">
                                <!-- <p><?php echo $busProductName[$i] ?></p> -->
                                </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-crane" role="tabpanel" aria-labelledby="pills-crane-tab">
                    <div class="home-about_tabContent">
                        <img class="home-about_bigpic" src="../public/img/crane.png" alt="">
                        <!-- <svg class="home-about_line crane-line" width="856" height="572" viewBox="0 0 856 572" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M651.5 414L691.324 128.207C692.445 120.159 684.007 114.204 676.8 117.958L453.069 234.478C448.046 237.093 443.504 240.543 439.637 244.68L400.004 287.08C395.229 292.189 391.876 298.46 390.281 305.269L368.602 397.783C364.465 415.439 348.968 428.102 330.842 428.639L176.694 433.209C163.355 433.604 153.378 421.073 156.751 408.161L159.377 398.111C161.376 390.464 167.69 384.711 175.491 383.431L221.759 375.842" stroke="url(#paint0_linear_451_1139)" stroke-width="5"/>
                            <defs>
                            <linearGradient id="paint0_linear_451_1139" x1="422" y1="109" x2="422" y2="434" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#2CB3FF"/>
                            <stop offset="1" stop-color="#27FFF2"/>
                            </linearGradient>
                            </defs>
                        </svg> -->
                        <div class="home-about_pin-warp">
                            <?php for($i=0;$i<4;$i++) { ?>
                                <div class="home-about_pin crane-pin-<?php echo $i+1 ?>" data-product="#crane-<?php echo $i+1 ?>">
                                    <a href="./product_detail.php" class="home-about_product">
                                        <img src="<?php echo $craneProductImg[$i] ?>" alt="">
                                        <p><?php echo $craneProductName[$i] ?></p>
                                    </a>
                                    <div class="pin">
                                        <div class="pin_inner">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0.474106C6.55228 0.474106 7 0.921821 7 1.47411V10.5258C7 11.0781 6.55228 11.5258 6 11.5258C5.44772 11.5258 5 11.0781 5 10.5258V1.47411C5 0.921821 5.44772 0.474106 6 0.474106Z" fill="#2096B9"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.474121 5.99997C0.474121 5.44768 0.921836 4.99997 1.47412 4.99997H10.5258C11.0781 4.99997 11.5258 5.44768 11.5258 5.99997C11.5258 6.55225 11.0781 6.99997 10.5258 6.99997H1.47412C0.921836 6.99997 0.474121 6.55225 0.474121 5.99997Z" fill="#2096B9"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="home-about_product-m">
                        <?php for($i=0;$i<4;$i++) { ?>
                            <a href="./product_detail.php" class="home-about_product-m_link" id="crane-<?php echo $i+1 ?>">
                                <img src="<?php echo $craneProductImg[$i] ?>" alt="">
                                <p><?php echo $craneProductName[$i] ?></p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="home-product">
            <img class="home-product_bg" src="../public/img/Products_bg.svg" alt="">
            <div class="home-title">
                <div class="container">
                    <h2>Products</h2>
                    <a href="./product_car.php">
                        <span>MORE</span>
                        <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="home-product_content d-flex flex-wrap">
                    <?php for($i=0;$i<4;$i++) { ?>
                        <div class="home-product_item">
                            <a href="./product_detail.php">
                                <img src="<?php echo $productImg[$i] ?>" alt="">
                                <div class="home-product_text">
                                    <h3><?php echo $productName[$i] ?></h3>
                                    <p>
                                        <?php echo $productIntro[$i] ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
    
            </div>
        </div>

        <div class="home-media mb-footer media-list">
            <img class="home-media_bg" src="../public/img/Media_bg.svg" alt="">
            <div class="home-title">
                <div class="container">
                    <h2>Media</h2>
                    <a href="./news.php">
                        <span>MORE</span>
                        <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7.5H21.2429" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.7429 1L21.2429 7.5L14.7429 14" stroke="#444444" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php for($i=0;$i<3;$i++) { ?>
                        <div class="col-md-4 col-6">
                            <a href="./news_detail.php" class="media-list_item">
                                <div class="media-list_pic">
                                    <img src="<?php echo $mediaImg[$i] ?>" alt="">
                                    <div class="media-list_tag"><?php echo $mediaTag[$i] ?></div>
                                </div>
                                <div class="media-list_text">
                                    <p class="media-list_date"><?php echo $mediaDate[$i] ?></p>
                                    <h3 class="media-list_title"><?php echo $mediaTitle[$i] ?></h3>
                                    <p class="media-list_intro"><?php echo $mediaIntro[$i] ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <?php include("../include/cookies.php") ?>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        var swiperBanner = new Swiper(".home-banner_swiper", {
            slidesPerView: 1,
            loop: true,
            speed: 1000,
            navigation: {
                nextEl: ".home-banner_next",
                prevEl: ".home-banner_prev",
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
        $(".home-about_pin .pin").click(function(){
            if($(window).width() >= 576) {
                if($(this).parents(".home-about_pin").hasClass("active")) {
                    $(this).parents(".home-about_pin").removeClass("active");
                }else {
                    $(this).parents(".home-about_pin").siblings(".home-about_pin").removeClass("active");
                    $(this).parents(".home-about_pin").addClass("active");
                }
            }else {
                let open = 0;
                $(this).parents(".home-about_pin-warp").find(".home-about_pin").each(function(){
                    if($(this).hasClass("active")) {
                        open ++;
                    }
                })
                if($(this).parents(".home-about_pin").hasClass("active")) {
                    $(this).parents(".home-about_pin").removeClass("active");
                    $(this).parents(".tab-pane").find(".home-about_product-m").slideUp(300);
                }else {
                    $(this).parents(".home-about_pin").siblings(".home-about_pin").removeClass("active");
                    $(this).parents(".home-about_pin").addClass("active");
                    if(open == 0) {
                        $(this).parents(".tab-pane").find(".home-about_product-m").slideDown(300);
                    }
                    let product = $(this).parents(".home-about_pin").data("product");
                    $(product).addClass("active").siblings(".home-about_product-m_link").removeClass("active");
                }
            }
        })

        function aboutLine(){
            let aboutTabContentTop = $(".home-about_tabContent-wrap").offset().top - $(window).height()*5/6;
            if($(window).scrollTop()>aboutTabContentTop) {
                $(".home-about_line").addClass("scroll");
            }
        }
        $(window).on("resize scroll",function(){
            aboutLine();
        })
        aboutLine();
    </script>
</body>
</html>