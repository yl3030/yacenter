<?php 
    $pageName = "media";
    $pageTitle = "BROCHURE";
    $bannerPic = "../public/img/banner-brochure.png";
    $brochureImg = [
        "../public/img/product-5.png",
        "../public/img/product-6.png",
        "../public/img/product-7.jpg",
        "../public/img/product-8.png",
        "../public/img/product-1.png",
        "../public/img/product-2.png",
    ];
    $brochureTitle = [
        "Lorem ipsum dolor sit amet,",
        "consectetur adipiscing elit",
        "sed do eiusmod tempor incididunt",
        "ut labore et dolore magna aliqua",
        "Lorem ipsum dolor sit amet,",
        "consectetur adipiscing elit",
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
                    <li><a class="active">BROCHURE</a></li>
                </ul>
            </div>
        </div>

        <div class="brochure-list">
            <div class="container">
                <div class="row">
                    <?php for($i=0;$i<6;$i++) { ?>
                        <div class="col-lg-6">
                            <div class="brochure-list_item">
                                <div class="brochure-list_pic"><img src="<?php echo $brochureImg[$i] ?>" alt=""></div>
                                <div class="brochure-list_text">
                                    <h2><?php echo $brochureTitle[$i] ?></h2>
                                    <a download>
                                        <span>download</span>
                                        <img src="../public/img/icon-download.svg" alt="">
                                    </a>
                                </div>
                            </div>
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