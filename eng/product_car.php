<?php 
    $pageName = "product";
    $pageTitle = "CAR";
    $productClass = "CAR";
    $bannerPic = "../public/img/banner-product.jpg";
    $productCarImg = [
        "../public/img/product-1.jpg",
        "../public/img/product-2.jpg",
        "../public/img/product-3.jpg",
        "../public/img/product-17.png",
        "../public/img/product-5.jpg",
        "../public/img/product-6.jpg",
        "../public/img/product-1.jpg",
        "../public/img/product-2.jpg",
        "../public/img/product-3.jpg",
    ];
    $productCarName = [
        "ECU system wire harness",
        "back sensor",
        "13832946283SNSM1",
        "毫米波雷達",
        "Bus Dashboard wire harness",
        "audio",
        "ECU system wire harness",
        "back sensor",
        "13832946283SNSM1",
    ];
    $productCarIntro = [
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
        "Mauris augue neque gravida in fermentum et. Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus.",
        "Tincidunt augue interdum velit euismod in pellentesque massa placerat. Adipiscing at in tellus integer feugiat.",
        "Ac felis donec et odio pellentesque diam volutpat commodo sed. Placerat duis ultricies lacus sed turpis.",
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
        "Mauris augue neque gravida in fermentum et. Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus.",
        "Tincidunt augue interdum velit euismod in pellentesque massa placerat. Adipiscing at in tellus integer feugiat.",
        "Ac felis donec et odio pellentesque diam volutpat commodo sed. Placerat duis ultricies lacus sed turpis.",
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
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
                    <li><a>PRODUCT</a></li>
                    <li><a class="active">CAR</a></li>
                </ul>
            </div>
        </div>
        

        <div class="product">
            <div class="container">
                <ul class="product_tab">
                    <li><a href="./product_car.php" class="active">Car</a></li>
                    <li><a href="./product_bus.php">Bus</a></li>
                    <li><a href="./product_heavy-equipment.php">Heavy <br class="d-md-none">equipment</a></li>
                </ul>
                <p class="product_intro">
                    Yacenter Electric Co., Ltd. was established in 1997 and we are a professional manufacturer and exporter for automotive wire harness, and wiring and cords for electric products. We also sell the relevant KD parts and sell the relevant KD parts and components for original brands such as YAZAKI,SUMITOMO, TE, MOLEX, JST, and PED.
                </p>
                <div class="row product-list">
                    <?php for($i=0;$i<9;$i++) { ?>
                        <div class="col-lg-4 col-6">
                            <a href="./product_detail.php" class="product-list_item">
                                <div class="product-list_pic">
                                    <img src="<?php echo $productCarImg[$i] ?>" alt="">
                                    <div class="product-list_name"><h2><?php echo $productCarName[$i] ?></h2></div>
                                </div>
                                <p class="product-list_intro"><?php echo $productCarIntro[$i] ?></p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        
        <?php include("../include/pagination.php") ?>
        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

</body>
</html>