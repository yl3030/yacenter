<header class="header">
    <img class="header_bg d-md-block d-none" src="../public/img/header_bg.png" alt="">
    <img class="header_bg d-md-none" src="../public/img/header_bg_m.png" alt="">
    <div class="header_inner d-flex justify-content-between">
        <div class="header_left d-flex align-items-center">
            <a href="./index.php" class="header_logo"><img src="../public/img/LOGO.png" alt=""></a>
            <nav class="header_nav">
                <ul class="d-lg-flex header_nav_first">
                    <li class="drop">
                        <a class="<?php if($pageName == "product") echo "active" ?>" data-link="./product_car.php">Products</a>
                        <div class="header_nav_second">
                            <ul class="header_nav_second_inner">
                                <li><a href="./product_car.php">CAR</a></li>
                                <li><a href="./product_bus.php">BUS</a></li>
                                <li><a href="./product_heavy-equipment.php">HEAVY <br>EQUIPMENT</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="" class="<?php if($pageName == "solution") echo "active" ?>">Solution</a>
                    </li> -->
                    <li>
                        <a href="./about.php" class="<?php if($pageName == "about") echo "active" ?>">About</a>
                    </li>
                    <li class="drop">
                        <a class="<?php if($pageName == "media") echo "active" ?>" data-link="./news.php">Media</a>
                        <div class="header_nav_second">
                            <ul class="header_nav_second_inner">
                                <li><a href="./news.php">NEWS</a></li>
                                <li><a href="">EXHIBITION</a></li>
                                <li><a href="./brochure.php">BROCHURE</a></li>
                                <li><a href="./video.php">VIDEO</a></li>
                                <li><a href="">BLOG</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="./contact.php" class="<?php if($pageName == "contact") echo "active" ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header_right d-flex align-items-center">
            <div class="header_search d-flex justify-content-end align-items-center">
                <form class="header_search_form">
                    <input type="text" placeholder="SEARCH">
                    <button>
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_416_812)">
                            <path d="M14.6893 7.01309L0.761055 0.584677C0.539274 0.483966 0.274638 0.543964 0.120356 0.734674C-0.0349972 0.925383 -0.0403543 1.19645 0.107499 1.39251L4.68774 7.49951L0.107499 13.6065C-0.0403543 13.8026 -0.0349972 14.0747 0.119285 14.2643C0.223211 14.394 0.378564 14.4636 0.53606 14.4636C0.61213 14.4636 0.688199 14.4476 0.759983 14.4143L14.6882 7.98592C14.8789 7.89807 15 7.70843 15 7.49951C15 7.29058 14.8789 7.10095 14.6893 7.01309Z" fill="#C5C5C5"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_416_812">
                            <rect width="15" height="15" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </button>
                </form>
                <svg class="header_search_icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.8228 12.8891C14.9509 11.555 15.6419 9.84003 15.6724 7.96735C15.743 3.68343 12.2275 0.0580783 7.94357 0.00071281C3.53775 -0.0581623 -0.0581623 3.53775 0.00071281 7.94357C0.0580783 12.2279 3.68343 15.743 7.96773 15.6724C9.84003 15.6415 11.5553 14.9505 12.8895 13.8228L16.8734 17.8067C17.1311 18.0644 17.5493 18.0644 17.8071 17.8067C18.0648 17.5489 18.0648 17.1307 17.8071 16.873L13.8232 12.8891H13.8228ZM12.8853 11.9516C12.6064 12.2935 12.2935 12.6064 11.9516 12.8853C10.8288 13.8024 9.39583 14.3527 7.83677 14.3527C4.24388 14.3527 1.32087 11.4297 1.32087 7.83677C1.32087 4.24388 4.24388 1.32087 7.83677 1.32087C11.4297 1.32087 14.3527 4.24388 14.3527 7.83677C14.3527 9.39583 13.8024 10.8288 12.8853 11.9516Z" fill="#203354"/>
                </svg>
            </div>
            <div class="header_lang">
                <svg class="header_lang_icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.7369 6.82467C17.6251 6.37058 17.4777 5.9271 17.2961 5.49802C16.85 4.44163 16.1995 3.47128 15.3641 2.63625C13.674 0.945713 11.4289 0.0102342 9.03979 0.000379043C9.02652 0 9.01363 0 9.00037 0C8.9871 0 8.97421 0 8.96095 0.000379043C6.57184 0.0102342 4.32676 0.945713 2.63661 2.63625C1.8012 3.47128 1.15076 4.44163 0.704628 5.49802C0.523067 5.9271 0.375619 6.37058 0.263801 6.82467C0.0898204 7.5278 0.000366211 8.25708 0.000366211 9C0.000366211 9.74292 0.0898204 10.4722 0.263801 11.1753C0.375619 11.6294 0.523067 12.0729 0.704628 12.502C1.15076 13.5584 1.8012 14.5287 2.63661 15.3638C4.32676 17.0543 6.57184 17.9898 8.96095 17.9996C8.97421 18 8.9871 18 9.00037 18C9.01363 18 9.02652 18 9.03979 17.9996C11.4289 17.9898 13.674 17.0543 15.3641 15.3638C16.1995 14.5287 16.85 13.5584 17.2961 12.502C17.4777 12.0729 17.6251 11.6294 17.7369 11.1753C17.9109 10.4722 18.0004 9.74292 18.0004 9C18.0004 8.25708 17.9109 7.5278 17.7369 6.82467ZM15.8269 5.49802H12.2317C12.0013 3.97275 11.615 2.60327 11.0783 1.61245C13.1448 2.19466 14.8611 3.62289 15.8269 5.49802ZM7.63392 3.31776C8.16571 1.74625 8.743 1.32665 9.00037 1.32665C9.25774 1.32665 9.83502 1.74625 10.3668 3.31776C10.5844 3.96138 10.7606 4.69786 10.8907 5.49802H7.11008C7.24009 4.69786 7.41634 3.96138 7.63392 3.31776ZM6.92245 1.61245C6.38573 2.60327 5.99948 3.97275 5.76902 5.49802H2.1738C3.1396 3.62289 4.85591 2.19466 6.92245 1.61245ZM1.32702 9C1.32702 8.24457 1.43656 7.51453 1.64086 6.82467H5.61134C5.54766 7.53803 5.51582 8.26958 5.51582 9C5.51582 9.73042 5.54766 10.462 5.61134 11.1753H1.64086C1.43656 10.4855 1.32702 9.75543 1.32702 9ZM2.1738 12.502H5.76902C5.99948 14.0272 6.38573 15.3967 6.92245 16.3876C4.85591 15.8053 3.1396 14.3771 2.1738 12.502ZM10.3668 14.6822C9.83502 16.2537 9.25774 16.6733 9.00037 16.6733C8.743 16.6733 8.16571 16.2537 7.63392 14.6822C7.41634 14.0386 7.24009 13.3021 7.11008 12.502H10.8907C10.7606 13.3021 10.5844 14.0386 10.3668 14.6822ZM6.9414 11.1753C6.87621 10.4771 6.84247 9.74671 6.84247 9C6.84247 8.25328 6.87621 7.52287 6.9414 6.82467H11.0593C11.1245 7.52287 11.1583 8.25328 11.1583 9C11.1583 9.74671 11.1245 10.4771 11.0593 11.1753H6.9414ZM11.0783 16.3876C11.615 15.3967 12.0013 14.0272 12.2317 12.502H15.8269C14.8611 14.3771 13.1448 15.8053 11.0783 16.3876ZM16.3599 11.1753H12.3894C12.4531 10.462 12.4849 9.73042 12.4849 9C12.4849 8.26958 12.4531 7.53803 12.3894 6.82467H16.3599C16.5642 7.51453 16.6737 8.24457 16.6737 9C16.6737 9.75543 16.5642 10.4855 16.3599 11.1753Z" fill="#203354"/>
                </svg>
                <div class="header_lang_list">
                    <ul class="header_lang_list_inner d-flex align-items-center">
                        <li><a href="" class="en active">EN</a></li>
                        <li><a href="" class="ch">中文</a></li>
                    </ul>
                </div>
            </div>
            <div class="header_menu d-lg-none">
                <div class="bar top"></div>
                <div class="bar middle"></div>
                <div class="bar bottom"></div>
            </div>
        </div>
    </div>
</header>