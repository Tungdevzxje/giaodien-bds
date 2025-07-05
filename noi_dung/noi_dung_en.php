<?php
switch ($ngon_ngu_abc) {
    case "tieng_anh":
        include('side/side_en.php');

        break;
    default:
        include('side/side.php');

}


?>
<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>công ty thiết kế nội
        thất tphcm</a></h1>
<!-- WELCOME SECTION START -->
<div class="section-full p-t90 bg-gray">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <?php

                $tv = "select * from gioi_thieu order by id ASC limit 0,1";
                $tv_1 = mysqli_query($link, $tv);

                ?>
                <?php
                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                    $id = $tv_2['id'];
                    $tieude = $tv_2['tieude'];
                    $tieude_en = $tv_2['tieude_en'];
                    $mota_en = $tv_2['mota_en'];
                    $hinhanh = $tv_2['hinhanh'];
                    $logo = $tv_2['logo'];
                    $url = khongdau($tieude);
                    $link = "thongtin-gioithieu-$url-$id";

                    ?>
                    <div class="col-md-5 col-sm-12 text-uppercase text-black">
                        <span class="font-30 font-weight-300">HELLO</span>

                        <h2 class="font-40">
                            <a href="<?php echo "$link"; ?>"> <?php echo "$tieude_en"; ?></a>
                        </h2>

                        <p class="text-lowercase" style="font-size: 14px;"> 
                        Our team consists of seasoned professionals — architects, engineers, and specialists — who have participated in a wide range of projects, from small to large-scale developments with demanding quality standards. With extensive experience in both design and construction, we are the ideal partner you can rely on. <br>
                        "Ely Archi places people at the heart of every creative endeavor."
In the spirit of collaboration and shared success, we work alongside you to craft exceptional living spaces — spaces that enrich your well-being, bring joy and health, and reflect your personality, lifestyle, and unique identity.
                        </p>
                        <a href="<?php echo "$link"; ?>" class="btn-half site-button button-lg m-b15"><span>READ
                                MORE</span><em></em></a>
                    </div>
                <?php } ?>



                <div class="col-md-7 col-sm-12">
                    <div class="m-carousel-1 m-l100">
                        <div class="owl-carousel home-carousel-1 owl-btn-vertical-center">
                            <!-- COLUMNS 1 -->
                            <?php
                            require('db.php');
                            $tv = "SELECT * FROM du_an WHERE id BETWEEN 22 AND 26 ORDER BY id;";
                            $tv_1 = mysqli_query($link, $tv);
                            $a_tv_1 = mysqli_query($link, $tv);
                            ?>

                            <?php
                            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                $id = "$tv_2[id]";
                                $tieude = "$tv_2[tieude]";
                                $mota = "$tv_2[mota]";
                                $ngay = "$tv_2[ngay]";
                                ?>
                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="#"><img src="<?php echo "$link_hinh"; ?>"
                                                alt="<?php echo "$tieude"; ?>" /></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                <strong>10 Year</strong>
                <span class="text-black">Experience Working</span>
            </div>
        </div>
    </div>
</div>
<!-- WELCOME  SECTION END -->

<!-- LATEST PRJECTS SLIDER START -->
<div class="section-full p-t90 p-lr80 latest_project-outer square_shape3">

    <!-- TITLE START -->
    <div class="section-head text-left">
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-uppercase font-36">OUR PROJECTS</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-black"></div>
                </div>
            </div>
            <div class="col-md-8">
                <ul class="btn-filter-wrap">
                    <li class="btn-filter btn-active" data-filter="*">All Project</li>
                    <li class="btn-filter" data-filter=".building-col">Building</li>
                    <li class="btn-filter" data-filter=".interior-col">Interior</li>
                    <li class="btn-filter" data-filter=".restaurant-col">Restaurant</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- TITLE END -->

    <!-- IMAGE CAROUSEL START -->
    <div class="portfolio-wrap mfp-gallery work-grid clearfix">
        <div class="container-fluid">
            <div class="row">
                <!-- COLUMNS 1 -->
                <?php
                $tv = "select * from tin_dichvuabc order by id desc limit 0,9";
                $tv_1 = mysqli_query($link, $tv);
                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                    $id = $tv_2['id'];
                    $tieude = $tv_2['tieude'];
                    $tieude_en = $tv_2['tieude_en'];
                    $mota = $tv_2['mota'];
                    $mota_en = $tv_2['mota_en'];
                    $hinhanh = $tv_2['hinhanh'];
                    $logo = $tv_2['logo'];
                    $url = $tv_2['linkurl'];
                    $link = "chi-tiet/$url";

                    ?>
                    <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6" style="padding:5px;">
                        <div class="wt-img-effect ">
                            <img src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>"
                                alt="<?php echo "$tieude_en"; ?>" />
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation">
                                    <div class="text-white  font-weight-300 p-a40">
                                        <h2><a href="<?php echo "$link"; ?>"
                                                class="text-white font-20 letter-spacing-4 text-uppercase"><?php echo "$tieude_en"; ?></a>
                                        </h2>
                                        <p><?php echo "$mota_en"; ?>
                                        </p>
                                        <a href="<?php echo "$link"; ?>"
                                            class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
        <strong>Awesome</strong>
        <span class="text-black">Designs</span>
    </div>
</div>
<!-- LATEST PRJECTS SLIDER END -->

<!-- WHO WE ARE SECTION START -->
<div class="section-full p-t140 bg-repeat" style="background-image:url(images/background/ptn-1.png);">
    <div class="container-fluid">
        <div class="section-content">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="wt-left-part">
                        <div class="text-uppercase text-black">
                            <span class="font-30 font-weight-300">SERVICES</span>
                            <h2 class="font-34">
                                ARCHITECTURAL AND INTERIOR DESIGN - INTERIOR CONSTRUCTION
                            </h2>
                            <p>“Taking reputation as the foundation”, we build reputation on every detail of your home
                                space. Thoroughly implementing the meticulous spirit from the design stage to the
                                completion of construction, Ely Archi commits that each product we create is the result
                                of the tireless creative work of our team of Architects, Engineers and staff to bring a
                                true value in terms of function, space, shape, proportion, color... most impressive.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="m-carousel-2">
                        <div class="owl-carousel carousel-hover home-carousel-2 owl-btn-vertical-center">
                            <?php
                            require('db.php');
                            $tv = "select * from du_an order by id limit 0,5";
                            $tv_1 = mysqli_query($link, $tv);
                            while ($row = mysqli_fetch_array($tv_1)) {
                                $id = $row['id'];
                                $tieude = $row['tieude'];
                                $mota_en = $row['mota_en'];
                                $mota = $row['mota'];
                                $tieude_en = $row['tieude_en'];
                                $link_hinh = "HinhCTSP/$row[hinhanh]";
                                ?>
                                <div class="item">
                                    <div class="wt-box">
                                        <div class="ow-img wt-carousel-block gradi-black">
                                            <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>">
                                            <div class="p-a50 wt-carousel-info text-white">
                                                <div class="carousel-line">
                                                    <h2 class="font-28 font-weight-400 m-b10"><?php echo "$tieude_en"; ?>
                                                    </h2>
                                                    <p class="m-b0"><?php echo "$mota_en"; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="carousel-bg-img">
                            <img src="images/slider-corner.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hilite-title p-lr20 m-tb20 text-left text-uppercase bdr-gray bdr-left">
                <strong>Prestigious</strong>
                <span class="text-black">Brand</span>
            </div>
        </div>
    </div>
</div>
<!-- WHO WE ARE SECTION END -->


<div class="section-full bg-white  square_shape2">
    <div class="container-fluid">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6 col-sm-12 bg-repeat" style="background-image:url(images/background/ptn-1.png);">
                    <div class="wt-left-part m-experts p-tb90">
                        <!-- TITLE START -->
                        <div class="section-head text-left text-black">
                            <h2 class="text-uppercase font-36">Human resources</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-black"></div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <div class="wt-team-six large-pic">
                            <div class="wt-team-media wt-thum-bx">
                                <?php
                                require('db.php');
                                $tv = "select * from doi_tac where id=33";
                                $tv_1 = mysqli_query($link, $tv);
                                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                    $id = "$tv_2[id]";
                                    $tieude = "$tv_2[tieude]";
                                    $mota = "$tv_2[mota]";
                                    $ngay = "$tv_2[ngay]";
                                    ?>
                                    <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                                <?php } ?>
                            </div>
                            <div class="wt-team-info text-center p-lr10 p-tb20 bg-white">
                                <h2 class="wt-team-title text-uppercase"><a href="javascript:void(0);"
                                        class="text-black font-32 font-weight-500">Architect Phan Van Nhut</a></h2>
                                <ul class="social-icons social-md social-square social-dark">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="wt-right-part team-outer">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                <div class="wt-team-six bg-white">
                                    <?php
                                    require('db.php');
                                    $tv = "select * from doi_tac where id=32";
                                    $tv_1 = mysqli_query($link, $tv);
                                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                        $id = "$tv_2[id]";
                                        $tieude = "$tv_2[tieude]";
                                        $mota = "$tv_2[mota]";
                                        $ngay = "$tv_2[ngay]";
                                        ?>
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">

                                            <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0"><a
                                                    href="javascript:void(0);">Engineer N.Le Minh Thinh</a>
                                            </h5>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                <div class="wt-team-six bg-white">
                                    <?php
                                    require('db.php');
                                    $tv = "select * from doi_tac where id=28";
                                    $tv_1 = mysqli_query($link, $tv);
                                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                        $id = "$tv_2[id]";
                                        $tieude = "$tv_2[tieude]";
                                        $mota = "$tv_2[mota]";
                                        $ngay = "$tv_2[ngay]";
                                        ?>
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="<?php echo "$link_hinh"; ?>" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0"><a
                                                    href="javascript:void(0);">Architect Nguyen Cong Quy</a></h5>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                <div class="wt-team-six bg-white">
                                    <?php
                                    require('db.php');
                                    $tv = "select * from doi_tac where id=27";
                                    $tv_1 = mysqli_query($link, $tv);
                                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                        $id = "$tv_2[id]";
                                        $tieude = "$tv_2[tieude]";
                                        $mota = "$tv_2[mota]";
                                        $ngay = "$tv_2[ngay]";
                                        ?>
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="<?php echo "$link_hinh"; ?>" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0"><a
                                                    href="javascript:void(0);">Architect Nguyen Minh Vu</a></h5>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                <div class="wt-team-six bg-white">
                                    <?php
                                    require('db.php');
                                    $tv = "select * from doi_tac where id=26";
                                    $tv_1 = mysqli_query($link, $tv);
                                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                        $id = "$tv_2[id]";
                                        $tieude = "$tv_2[tieude]";
                                        $mota = "$tv_2[mota]";
                                        $ngay = "$tv_2[ngay]";
                                        ?>
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0"><a href="javascript:void(0);">Mr.
                                                    Ngo Thanh Trung</a></h5>
                                            <!---->
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- BLOG SECTION START -->
<div class="section-full p-t140 bg-repeat" style="background-image:url(images/background/ptn-1.png);">
    <div class="container">
        <div class="section-content">
            <!-- TITLE START -->
            <div class="section-head text-left">
                <h2 class="text-uppercase font-36">CONSTRUCTION</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-black"></div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <?php
                    require('db.php');
                    $tv = "select * from tin_dichvu order by id desc limit 0,2";
                    $tv_1 = mysqli_query($link, $tv);
                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $id = $tv_2['id'];
                        $tieude = $tv_2['tieude'];
                        $tieude_en = $tv_2['tieude_en'];
                        $mota = $tv_2['mota'];
                        $hinhanh = $tv_2['hinhanh'];
                        $ngay = $tv_2['ngay'];
                        $logo = $tv_2['logo'];
                        $url = $tv_2['linkurl'];
                        $link = "thong-tin/$url";
                        ?>
                        <div class="overlay-wraper bg-no-repeat bg-cover latest-blog-dark-outer p-a20 m-b30">
                            <a href="<?php echo "$link"; ?>"> <img src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>"
                                    alt="<?php echo "$tieude_en"; ?>" style='    height: 210px;
    width: 100%;' /> </a>
                            <div class="overlay-main bg-black opacity-04"></div>
                            <div class="latest-blog-dark text-uppercase p-a20">
                                <a href="<?php echo "$link"; ?>">
                                    <h3 class="m-a0"><span class="text-white"><?php echo "$tieude_en"; ?></span></h3>
                                </a>
                                <div class="v-date  text-white font-weight-700"><?php echo "$ngay"; ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-6 col-sm-12">
                    <?php
                    require('db.php');
                    $tv = "select * from tin_dichvu order by rand() limit 0,1";
                    $tv_1 = mysqli_query($link, $tv);
                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $id = $tv_2['id'];
                        $tieude = $tv_2['tieude'];
                        $tieude_en = $tv_2['tieude_en'];
                        $mota = $tv_2['mota'];
                        $mota_en = $tv_2['mota_en'];
                        $hinhanh = $tv_2['hinhanh'];
                        $ngay = $tv_2['ngay'];
                        $logo = $tv_2['logo'];
                        $url = $tv_2['linkurl'];
                        $link = "thong-tin/$url";
                        ?>
                        <div class="overlay-wraper bg-no-repeat bg-cover latest-blog-dark-outer2 m-b30">
                            <a href="<?php echo "$link"; ?>"> <img src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>"
                                    alt="<?php echo "$tieude"; ?>" style='    height: 100%;
                         width: 100%;' /> </a>
                            <div class="overlay-main bg-black opacity-04"></div>
                            <div class="latest-blog-square text-white">
                                <a href="<?php echo "$link"; ?>">
                                    <h2 class="m-t0 m-b10">
                                        <span class="text-white font-30 text-uppercase"><?php echo "$tieude_en"; ?></span>
                                    </h2>
                                </a>
                                <p class="font-weight-300"><?php echo "$mota_en"; ?></p>
                                <a href="<?php echo "$link"; ?>"
                                    class="letter-spacing-4 font-12 text-white text-uppercase">Read more</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
            <strong>Construction</strong>
            <span class="text-black">Post</span>
        </div>
    </div>
</div>
<!-- BLOG SECTION END -->

<!-- COMPANY DETAIL SECTION START -->
<div class="section-full p-tb100 overlay-wraper bg-top-center bg-parallax" data-stellar-background-ratio="0.5"
    style="background-image:url(hinhmenu/side04443.jpg);">
    <div class="overlay-main opacity-08 bg-black"></div>
    <div class="container">
        <div class="row">
            <!-- Giới thiệu Ely Archi -->
            <div class="col-md-6 col-sm-12">
                <div class="some-facts">
                    <div class="text-white text-uppercase">
                        <span class="font-40 font-weight-300">A few</span>
                        <h2 class="font-50">Additional details</h2>
                        <p class="font-18 font-weight-300">
                            Ely Archi is an architecture firm specializing in the design and construction of custom
                            residential homes. We create modern, sustainable living spaces that reflect each client’s
                            unique lifestyle and personality.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Các con số nổi bật -->
            <div class="col-md-6 col-sm-12">
                <div class="row some-facts-counter">
                    <div class="col-md-4 col-sm-4">
                        <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                            <div class="icon-content text-center">
                                <div class="font-40 font-weight-600 m-b5"><span class="counter">10</span>+</div>
                                <div class="wt-separator-outer m-b20">
                                    <div class="wt-separator bg-white"></div>
                                </div>
                                <span class="text-uppercase">Years of Experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                            <div class="icon-content text-center">
                                <div class="font-40 font-weight-600 m-b5"><span class="counter">150</span>+</div>
                                <div class="wt-separator-outer m-b20">
                                    <div class="wt-separator bg-white"></div>
                                </div>
                                <span class="text-uppercase">Completed Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                            <div class="icon-content text-center">
                                <div class="font-40 font-weight-600 m-b5"><span class="counter">3</span></div>
                                <div class="wt-separator-outer m-b20">
                                    <div class="wt-separator bg-white"></div>
                                </div>
                                <span class="text-uppercase">Core Values: Aesthetics – Function – Cost Efficiency</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COMPANY DETAIL SECTION End -->

<!-- TESTIMONIALS SECTION START -->
<div class="section-full p-t140 bg-repeat " style="background-image:url(hinhmenu/ptn-1.png);">
    <div class="container">
        <div class="section-content">
            <!-- TITLE START -->
            <div class="section-head text-left">
                <h2 class="text-uppercase font-36">Ý KIẾN</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-black"></div>
                </div>
            </div>
            <!-- TITLE END -->
            <!-- TESTIMONIAL 4 START ON BACKGROUND -->
            <div class="section-content">
                <div class="owl-carousel testimonial-home">
                    <?php
                    require('db.php');
                    $tv = "SELECT * FROM du_an WHERE id BETWEEN 27 AND 30 ORDER BY id;";
                    $tv_1 = mysqli_query($link, $tv);
                    while ($row = mysqli_fetch_array($tv_1)) {
                        $id = $row['id'];
                        $tieude = $row['tieude'];
                        $mota_en = $row['mota_en'];
                        $mota = $row['mota'];
                        $noidung = $row['noidung'];
                        $noidung_en = $row['noidung_en'];
                        $tieude_en = $row['tieude_en'];
                        $link_hinh = "HinhCTSP/$row[hinhanh]";
                        ?>
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block">
                                    <div class="testimonial-pic">
                                        <img src="<?php echo "$link_hinh"; ?>" width="132" height="132"
                                            alt="<?php echo "$tieude_en"; ?>">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name"><?php echo "$tieude_en"; ?></strong>
                                        <span class="testimonial-position p-t0"><?php echo "$mota_en"; ?></span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p><?php echo "$noidung_en"; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
            <strong>Client</strong>
            <span class="text-black">Comment
            </span>
        </div>
    </div>
</div>
<!-- TESTIMONIALS SECTION END -->