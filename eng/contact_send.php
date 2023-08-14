<?php 
    $pageName = "media";
    $pageTitle = "CONTACT";
    $bannerPic = "../public/img/banner-contact.png";
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
                    <li><a class="active">CONTACT</a></li>
                </ul>
            </div>
        </div>

        <div class="contact mb-footer">
            <div class="container">
                <div class="contact_send">
                    <h2>Thank you for your message</h2>
                    <p>
                        Message has been successful<br>
                        Once we receive your message, we will contact you as soon as possible.
                    </p>
                </div>
            </div>
        </div>

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>
</body>
</html>