<?php 
    $pageName = "media";
    $pageTitle = "NEWS";
    $bannerPic = "../public/img/banner-home.png";
    $newsImg = [
        "../public/img/product-5.png",
        "../public/img/product-6.png",
        "../public/img/product-7.jpg",
        "../public/img/product-8.png",
        "../public/img/product-1.png",
        "../public/img/product-2.png",
        "../public/img/product-3.png",
        "../public/img/product-4.png",
        "../public/img/product-9.jpg",
    ];
    $newsDate = [
        "2023/03/03",
        "2023/03/04",
        "2023/03/05",
        "2023/03/06",
        "2023/03/07",
        "2023/03/08",
        "2023/03/09",
        "2023/03/10",
        "2023/03/11",
    ];
    $newsTitle = [
        "Lorem ipsum dolor sit amet,",
        "consectetur adipiscing elit",
        "sed do eiusmod tempor incididunt",
        "ut labore et dolore magna aliqua",
        "Lorem ipsum dolor sit amet,",
        "consectetur adipiscing elit",
        "sed do eiusmod tempor incididunt",
        "ut labore et dolore magna aliqua",
        "Lorem ipsum dolor sit amet,",
    ];
    $newsIntro = [
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
        "Mauris augue neque gravida in fermentum et. Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus.",
        "Tincidunt augue interdum velit euismod in pellentesque massa placerat. Adipiscing at in tellus integer feugiat.",
        "Ac felis donec et odio pellentesque diam volutpat commodo sed. Placerat duis ultricies lacus sed turpis.",
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
        "Mauris augue neque gravida in fermentum et. Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus.",
        "Tincidunt augue interdum velit euismod in pellentesque massa placerat. Adipiscing at in tellus integer feugiat.",
        "Ac felis donec et odio pellentesque diam volutpat commodo sed. Placerat duis ultricies lacus sed turpis.",
        "Fermentum iaculis eu non diam phasellus vestibulum lorem. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Nulla facilisi etiam dignissim diam quis enim.",
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
        <?php include("../include/banner.php") ?>
        <div class="breadcrumb-common">
            <div class="container">
                <ul class="d-flex align-items-center flex-wrap">
                    <li><a href="./index.php">HOME</a></li>
                    <li><a>MEDIA</a></li>
                    <li><a class="active">NEWS</a></li>
                </ul>
            </div>
        </div>

        <div class="news-list">
            <div class="container">
                <div class="row">
                    <?php for($i=0;$i<9;$i++) { ?>
                        <div class="col-md-4 col-6">
                            <a href="./news_detail.php" class="media-list_item">
                                <div class="media-list_pic">
                                    <img src="<?php echo $newsImg[$i] ?>" alt="">
                                </div>
                                <div class="media-list_text">
                                    <p class="media-list_date"><?php echo $newsDate[$i] ?></p>
                                    <h3 class="media-list_title"><?php echo $newsTitle[$i] ?></h3>
                                    <p class="media-list_intro"><?php echo $newsIntro[$i] ?></p>
                                </div>
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