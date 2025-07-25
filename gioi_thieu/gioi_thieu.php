
<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->




    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
        style="background-image:url(hinhmenu/banner-gt.jpg);">

        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">VÀI NÉT VỀ ELY
                            ARCHI</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="trang-chu">Trang chủ</a></li>
                            <li>Giới Thiệu</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>

    </div>

    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-tb90 bg-gray square_shape2">
        <div class="container">
            <div class="section-content ">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="m-about m-l50 m-r50">
                            <div class="owl-carousel about-us-carousel owl-btn-bottom-right">
                                <!-- COLUMNS 1 -->
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM tin_dichvuabc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 8";
                                $tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                    $id = "$row[id]";
                                    // $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    //$ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $link = str_replace("?", "", strtolower("chi-tiet/$url"));
                                    ?>
                                    <div class="item">
                                        <div class="ow-img wt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="<?php echo "$link_hinh"; ?>"
                                                    alt="<?php echo "$tieude"; ?>"></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <?php
                        require('db.php');
                        $tv = "select * from gioi_thieu order by id=20 desc limit 0,1";
                        $tv_1 = mysqli_query($link, $tv);
                        while ($tv_2 = mysqli_fetch_array($tv_1)) {
                            $id = $tv_2['id'];
                            $tieude = $tv_2['tieude'];
                            $tieude_en = $tv_2['tieude_en'];
                            $mota = $tv_2['mota'];
                            $hinhanh = $tv_2['hinhanh'];
                            $logo = $tv_2['logo'];
                            $url = khongdau($tieude);
                            $link = "gioithieu/$url-$id";

                            ?>
                            <div class="m-about-containt text-uppercase text-black p-t30">

                                <span class="font-30 font-weight-300">Giới thiệu</span>

                                <h2 class="font-40"><?php echo "$tieude"; ?></h2>
                                <p class="text-lowercase"><?php echo "$mota"; ?></p>
                                <a href="<?php echo "$link"; ?>"
                                    class="m-b15 site-button black radius-no text-uppercase"><span
                                        class="font-12 letter-spacing-5"> Đọc tiếp </span></a>

                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->



    <!-- OUR SERVICES SECTION START -->
    <div class="section-full bg-black p-tb90 square_shape1">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-left text-white">
                <h2 class="text-uppercase font-36">LĨNH VỰC</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-white"></div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content circle-block-outer" data-toggle="tab-hover">
                <div class="row">

                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper right p-a20 m-b50 text-white" data-target="#tab1"
                            data-toggle="tab">
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase">THIẾT KẾ KIẾN TRÚC</h4>
                                <p style=" width: 100%;">Mỗi vật dù nhỏ cũng đều có câu chuyện riêng. từng viên gạch
                                    là những mảng ghép không thể tách rời của công trình lớn.. </p>
                            </div>
                        </div>
                        <div class="wt-icon-box-wraper right p-a20 m-b50 text-white" data-target="#tab2"
                            data-toggle="tab">
                            <div class="icon-md text-primary">
                                <span class="icon-cell  text-primary"><img src="images/icon/leaves.png" alt=""></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase">THIẾT KẾ CẢNH QUAN</h4>
                                <p style=" width: 97%;">Nghiên cứu thiên nhiên, yêu thiên nhiên ở gần thiên nhiên nó sẽ
                                    không bao giờ làm bạn thất vọng. </p>
                            </div>
                        </div>
                        <div class="wt-icon-box-wraper right p-a20 m-b50 text-white" data-target="#tab3"
                            data-toggle="tab">
                            <div class="icon-md text-primary">
                                <span class="icon-cell  text-primary"><img src="images/icon/lotus-position.png"
                                        alt=""></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase">QUY HOẠCH – LẬP DỰ ÁN ĐẦU TƯ</h4>
                                <p style=" width: 97%;">Một dự án dược quy hoạch tốt thì dự án sẽ thành công lớn và đem
                                    lại giá trị lớn. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="circle-content-pic tab-content ">
                            <div id="tab1" class="tab-pane active">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 ">
                                        <img src="hinhmenu/gt-011.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="hinhmenu/gt-012.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="hinhmenu/gt-013.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="hinhmenu/gt-014.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab5" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="hinhmenu/gt-015.jpg" alt="">
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper left p-a20 m-b50 text-white" data-target="#tab4"
                            data-toggle="tab">
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase">THIẾT KẾ NỘI THẤT</h4>
                                <p style="width: 95%;">Hình thức và công năng phải là một, hài hòa trong sự hợp nhất
                                    tuyệt diệu.. </p>
                            </div>
                        </div>
                        <div class="wt-icon-box-wraper left p-a20 m-b50 text-white" data-target="#tab5"
                            data-toggle="tab">
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase">THI CÔNG NỘI THẤT – XÂY DỰNG</h4>
                                <p style="width: 95%;">Làm một chút mà làm tốt vẫn hơn làm rất nhiều mà không hoàn hảo.
                                </p>
                            </div>
                        </div>
                        <div class="wt-icon-box-wraper left p-a20 m-b50 text-white" data-target="#tab6"
                            data-toggle="tab">
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase" style="font-size: 1.2em;">ELY DECORRATION –
                                    ELYDECOR.COM</h4>
                                <p style="width: 90%;">Hãy làm cho cuộc sống của bạn thêm phần thú vị bằng cách dừng lại
                                    một chút để thưởng thức nó. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


</div>
<!-- CONTENT END -->

<div class="section-full bg-white  square_shape2">
    <div class="container-fluid">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6 col-sm-12 bg-repeat" style="background-image:url(images/background/ptn-1.png);">
                    <div class="wt-left-part m-experts p-tb90">
                        <!-- TITLE START -->
                        <div class="section-head text-left text-black">
                            <h2 class="text-uppercase font-36">Nhân sự</h2>
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
                                        class="text-black font-32 font-weight-500">KTS Phan Văn Nhựt</a></h2>
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
                                                    href="javascript:void(0);"><?php echo "$tieude"; ?></a></h5>
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
                                                    href="javascript:void(0);"><?php echo "$tieude"; ?></a></h5>
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
                                                    href="javascript:void(0);"><?php echo "$tieude"; ?></a></h5>
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
                                        <img src="<?php echo"$link_hinh";?>" alt="<?php echo "$tieude"; ?>">
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
                                                href="javascript:void(0);"><?php echo"$tieude";?></a></h5>
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