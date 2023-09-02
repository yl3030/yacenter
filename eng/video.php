<?php 
    $pageName = "media";
    $pageTitle = "VIDEO";
    $bannerPic = "../public/img/banner-video.png";
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
                    <li><a class="active">VIDEO</a></li>
                </ul>
            </div>
        </div>

        <div class="video mb-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-lg-1 order-2">
                        <div class="video_main">
                            <div class="video_main_iframe">
                                <iframe class="active" width="560" height="315" src="https://www.youtube.com/embed/vul5HUdniXo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/a7HT7Qb_dUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/mLYMDF-m9Jc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/qxh2Sxd_8-g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/7Lar726n8FA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/I2D7liCyRXU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/X80DkyhpQJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/-d8lpQo8gN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/4D5ERNEzWf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <h2>Cars vs Giant Dip ▶️ BeamNG Drive</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-2 order-1 video_list-wrap">
                        <div class="video_list-active d-lg-none">
                            <p>Cars vs Giant Dip ▶️ BeamNG Drive</p>
                            <img src="../public/img/arrow-gray-down.svg" alt="">
                        </div>
                        <ul class="video_list">
                            <li class="active">Cars vs Giant Dip ▶️ BeamNG Drive</li>
                            <li>Police Car Chases #64 - BeamNG DRIVE | SmashChan</li>
                            <li>Collapsing Bridge Pileup Car Crashes #27 - BeamNG DRIVE | SmashChan</li>
                            <li>Collapsing Bridge Pileup Car Crashes #12 - BeamNG DRIVE | SmashChan</li>
                            <li>Loss of Control Car Crashes #62 – BeamNG Drive | CrashBoomPunk</li>
                            <li>Massive Spike Strip Pileup Crashes #9 – BeamNG Drive | CrashBoomPunk</li>
                            <li>Massive Spike Strip Pileup Crashes #10 – BeamNG Drive | CrashBoomPunk</li>
                            <li>Massive Spike Strip Pileup Crashes #11 – BeamNG Drive | CrashBoomPunk</li>
                            <li>Massive Spike Strip Pileup Crashes #12 – BeamNG Drive | CrashBoomPunk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        

        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        $(".video_list li").click(function(){
            $(this).addClass("active").siblings("li").removeClass("active");
            let index = $(this).index();
            $(".video_main_iframe").find("iframe").eq(index).addClass("active").siblings("iframe").removeClass("active");
            let title = $(this).text();
            $(".video_main").find("h2").text(title);
            if($(window).width() < 992) {
                $(".video_list-active").find("p").text(title);
                $(this).parents(".video_list-wrap").find(".video_list").slideUp(300);
            }
        })

        $(".video_list-active").click(function(){
            $(this).parents(".video_list-wrap").find(".video_list").slideToggle(300);
        })
    </script>
</body>
</html>