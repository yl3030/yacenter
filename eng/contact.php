<?php 
    $pageName = "contact";
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_item">
                            <label for="">Company<br>Name</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_item">
                            <label for="">Name</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_item">
                            <label for="">TEL</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_item">
                            <label for="">Address</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_item">
                            <label for="">E-mail</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_item">
                            <label for="">Title</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact_item content">
                            <label for="">Content</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="contact_btn d-flex align-items-center justify-content-center">
                    <button class="btn-border">Reset</button>
                    <button class="btn-bg">Submit</button>
                </div>
            </div>
        </div>

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>
</body>
</html>