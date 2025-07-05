<?php
session_start();
ini_set('display_errors', '0');
date_default_timezone_set('Asia/Saigon');
include("db.php");
include("ham/ham.php");
include("ham/catchuoi.php");
include("ngon_ngu/chon.php");
include("title_meta/title_meta.php");
?>
<!DOCTYPE html>
<html lang="en">
<base href="http://localhost:81/giaodien-bds/">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_meta; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="hinhmenu/icon-ely.png" rel="shortcut icon" />
    <link rel="canonical" href="https://taxitamky.com/" />
    <meta name="twitter:card" content="https://taxitamky.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta name="keywords" content="<?php echo $key; ?>" />
    <meta name="description" content="<?php echo $dis; ?>" />
    <meta property="og:url" content="https://taxitamky.com/<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image:alt" content="https://taxitamky.com/<?php echo $product['tieude']; ?>" />
    <meta property="og:title" content="https://taxitamky.com/<?php echo $product['tieude']; ?>" />
    <meta property="og:description" content="https://taxitamky.com/<?php echo $product['mota']; ?>" />
    <meta property="og:image" content="<?php echo $img; ?>" />
    <meta property="og:updated_time" content="1578214368" />
    <meta property="og:image" content="https://<?php echo $config_url; ?><?php echo $hinhanh; ?>" />
    <meta property="og:description" content="<?php echo $dis; ?>" />

    <script type="text/javascript" src="Scripts/check.js"></script>
    <script src="js/jquerykhongcopy.js"></script>


    <link rel="stylesheet" href="sitenewstravel/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="sitenewstravel/assets/css/slick.css">
    <link rel="stylesheet" href="sitenewstravel/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="sitenewstravel/assets/css/default.css">
    <link rel="stylesheet" href="sitenewstravel/assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "xưởng in đà nẵng",
            "name": "xưởng in ấn đà nẵng",
            "url": "https://taxitamky.com/"
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106809384-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-106809384-1');
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>

</head>

<body data-color="theme-1">
    <?php
    include("xu_ly_post_get/xu_ly_post_get.php");
    ?>




    <?php
    switch ($ngon_ngu_abc) {
        case "tieng_anh":
            include('menutopdidong/menutopdidong_en.php');

            break;
        default:
            include('menutopdidong/menutopdidong.php');

    }


    ?>



    <div>

        <?php
        include('bienluan_phanthan.php');
        ?>
    </div>
    <div style="width: 100%;">


        <?php
        switch ($ngon_ngu_abc) {
            case "tieng_anh":
                include('jqueryfooter/footertc_en.php');

                break;
            default:
                include('jqueryfooter/footertc.php');

        }


        ?>

    </div>



    <style>
        #widget {
            position: fixed;
            right: 6px;
            z-index: 99;
            top: 60%;
            margin-top: -66px;
        }

        .callmeText {
            position: absolute;
            z-index: 0;
            top: 26px;
            padding-left: 50px;
            width: 170px;
            height: 39px;
            line-height: 43px;
            background-color: #fff;
            -webkit-border-radius: 45px;
            -moz-border-radius: 45px;
            border-radius: 45px;
            margin-left: 25px;
        }

        .callmeTextzalo {
            position: absolute;
            z-index: 0;
            top: 86px;
            padding-left: 57px;
            width: 204px;
            height: 50px;
            line-height: 50px;
            background-color: #fff;
            -webkit-border-radius: 45px;
            -moz-border-radius: 45px;
            border-radius: 45px;
            margin-left: 25px;
        }

        .phone_text {
            font-size: 16px;
            font-weight: bold;
            color: #cf0808;
        }

        #widget>a {
            display: block;
            text-align: center;
            border: 1px solid #0ea180;
            padding: 2px;
            border-radius: 50%;
            color: #FFF;
            font-size: 13px;
            background: #FFF;
            -webkit-box-shadow: 0 1px 5px #999;
            -moz-box-shadow: 0 1px 5px #999;
            box-shadow: 0 1px 5px #999;
            margin-bottom: 5px;
            height: 39px;
            width: 39px;
        }

        #widget>a:hover {
            display: block;
            text-align: center;
            border: 1px solid #f00;
            padding: 2px;
            border-radius: 50%;
            color: #FFF;
            font-size: 13px;
            background: #FFF;
            -webkit-box-shadow: 0 1px 5px #999;
            -moz-box-shadow: 0 1px 5px #999;
            box-shadow: 0 1px 5px #999;
            margin-bottom: 5px;
            height: 39px;
            width: 39px;
        }

        #widget>a [class*=fa] {
            background: #0ea180;
            display: block;
            line-height: 32px;
        }

        #widget>a [class*=fa],
        #widget>a img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .suntory-alo-phone {
            background-color: transparent;
            cursor: pointer;
            height: 120px;
            position: fixed;
            transition: visibility 0.5s ease 0s;
            width: 120px;
            z-index: 200000 !important;
        }

        .suntory-alo-ph-circle {
            animation: 1.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim;
            background-color: transaparent;
            /*	border: 2px solid rgba(30, 30, 30, 0.4); */
            border-radius: 100%;
            height: 100px;
            left: 0px;
            opacity: 0.1;
            position: absolute;
            top: 0px;
            transform-origin: 50% 50% 0;
            transition: all 0.5s ease 0s;
            width: 100px;
        }

        .suntory-alo-ph-circle-fill {
            animation: 2.3s ease-in-out 0s normal none infinite running suntory-alo-circle-fill-anim;
            border: 2px solid transparent;
            border-radius: 100%;
            height: 60px;
            left: 15px;
            position: absolute;
            top: 15px;
            transform-origin: 50% 50% 0;
            transition: all 0.5s ease 0s;
            width: 60px;
        }

        .suntory-alo-ph-img-circle {
            /* animation: 1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim; */
            border: 2px solid transparent;
            border-radius: 100%;
            height: 40px;
            left: 25px;
            opacity: 0.7;
            position: absolute;
            top: 25px;
            transform-origin: 50% 50% 0;
            width: 40px;
        }

        .suntory-alo-phone.suntory-alo-hover,
        .suntory-alo-phone:hover {
            opacity: 1;
        }

        .suntory-alo-phone.suntory-alo-active .suntory-alo-ph-circle {
            animation: 1.1s ease-in-out 0s normal none infinite running suntory-alo-circle-anim !important;
        }

        .suntory-alo-phone.suntory-alo-static .suntory-alo-ph-circle {
            animation: 2.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim !important;
        }

        .suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle,
        .suntory-alo-phone:hover .suntory-alo-ph-circle {
            border-color: #00aff2;
            opacity: 0.5;
        }

        .suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle,
        .suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle {
            border-color: #EB278D;
            opacity: 1;
        }

        .suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle {
            border-color: #bfebfc;
            opacity: 1;
        }

        .suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle-fill,
        .suntory-alo-phone:hover .suntory-alo-ph-circle-fill {
            background-color: rgba(0, 175, 242, 0.9);
        }

        .suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle-fill,
        .suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle-fill {
            background-color: #EB278D;
        }

        .suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle-fill {
            background-color: rgba(0, 175, 242, 0.9);
        }

        .suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-img-circle,
        .suntory-alo-phone:hover .suntory-alo-ph-img-circle {
            background-color: #00aff2;
        }

        .suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-img-circle,
        .suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-img-circle {
            background-color: #EB278D;
        }

        .suntory-alo-phone.suntory-alo-green .suntory-alo-ph-img-circle {
            background-color: #00aff2;
        }

        @keyframes suntory-alo-circle-anim {
            0% {
                opacity: 0.1;
                transform: rotate(0deg) scale(0.5) skew(1deg);
            }

            30% {
                opacity: 0.5;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }

            100% {
                opacity: 0.6;
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }

        @keyframes suntory-alo-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }

        @keyframes suntory-alo-circle-fill-anim {
            0% {
                opacity: 0.2;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }

            50% {
                opacity: 0.2;
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            100% {
                opacity: 0.2;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }
        }

        .suntory-alo-ph-img-circle i {
            animation: 1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim;
            font-size: 25px;
            line-height: 42px;
            padding-left: 8px;
            color: #fff;
        }

        /*=================== End phone ring ===============*/
        @keyframes suntory-alo-ring-ring {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }
    </style>



    <a href="https://zalo.me/0931780616" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon" style="    left: 1px;
    bottom: 60px;">
        <div class="suntory-alo-ph-circle"></div>
        <div class="suntory-alo-ph-circle-fill"></div>
        <div class="suntory-alo-ph-img-circle"><img src="hinhmenu/icon-zalo.gif" style="width: 100%; height: auto;" />
        </div>
    </a>


    <a href="tel:0816791616 " class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon"
        style="left: 0px; bottom: 0px;">
        <div class="callmeText">
            <span class="phone_text">0816 79 16 16 </span>
        </div>
        <div class="suntory-alo-ph-circle"></div>
        <div class="suntory-alo-ph-circle-fill"></div>
        <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
    </a>
    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    <!-- Latest jQuery -->


    <!-- JAVASCRIPT  FILES ========================================= -->
    <!-- <script src="siteely/js/jquery-1.12.4.min.js"></script> -->
    <script src="sitenewstravel/assets/js/bootstrap.min.js"></script>
    <script src="sitenewstravel/assets/js/slick.min.js"></script>
    <script src="sitenewstravel/assets/js/main.js"></script>

</body>



</html>