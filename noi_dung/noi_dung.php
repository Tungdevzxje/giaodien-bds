<!--đầu trang .start-->
<div class="container tren">
    <div class="row">
        <!-- Phần tin chính + danh sách tin -->
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <!-- Tin chính -->
                <div class="col-lg-7 col-md-12 mb-3">
                    <?php
                    require('db.php');
                    $a = "select * from tin_tintuc order by id desc limit 0,1";
                    $tv = mysqli_query($link, $a);
                    while ($row = mysqli_fetch_array($tv)) { ?>
                        <a href="tin-tuc/<?php echo strtolower(str_replace("?", "", urlencode($row['linkurl']))); ?>">
                            <img src="HinhCTSP/Hinhtintuc/<?php echo $row['hinhanh']; ?>"
                                alt="<?php echo $row['tieude']; ?>">
                            <div>
                                <span class="title-span">
                                    <?php echo $row['tieude']; ?>
                                </span>
                            </div>
                        </a>
                        <p>
                            <?php echo $row['mota']; ?>
                        </p>
                    <?php } ?>
                </div>

                <!-- Danh sách tin liên quan -->
                <div class="col-lg-5 col-md-12">
                    <div class="news-list">
                        <?php
                        $a = "SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 6";
                        $tv = mysqli_query($link, $a);
                        while ($row = mysqli_fetch_array($tv)) { ?>
                            <a href="tin-tuc/<?php echo strtolower(str_replace("?", "", $row['linkurl'])); ?>"
                                class="news-itemm">
                                <i class="fa fa-arrow-right news-icon" aria-hidden="true"></i>
                                <span class="news-title">
                                    <?php echo $row['tieude']; ?>
                                </span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Phần giới thiệu -->

        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
            <div class="box-shadow-fit">
                <img class="img-fluid rounded" src="hinhmenu/logo-bds.jpg" style="width:425px; height: 266px;"
                    alt="công ty pccc tam kỳ">
                <p style="color: #333;"> <b>Công ty TNHH MTV Thương Mại Dịch Vụ Và Kỹ Thuật Mặt Trời Đỏ </b> chúng tôi
                    chuyên cung cấp các sản phẩm PCCC chính hãng, đạt tiêu chuẩn chất lượng cao.
            </div>
        </div>

    </div>
</div>
<!--đầu trang .end-->

<main>
    <!-- editor-post-area -->
    <section class="editor-post-area-two pb-30 pt-30">
        <div class="container">
            <div class="editor-post-wrap">
                <div class="row">
                    <?php
                    //include_once("phan_trang.php");
                    require('db.php');
                    $tv = "SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 6";
                    $tv_1 = mysqli_query($link, $tv);
                    while ($row = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                        $id = "$row[id]";
                        $tieude = "$row[tieude]";
                        $thuocloai = "$row[thuocloai]";
                        $mota = "$row[mota]";
                        $url = $row['linkurl'];
                        $link = str_replace("?", "", strtolower("thong-tin/$url"));
                        ?>
                        <div class="col-xl-4 col-lg-6">
                            <div class="editor-post-item editor-post-two">
                                <div class="editor-post-thumb">
                                    <a href="<?php echo "$link"; ?>"><img src="<?php echo "$link_hinh" ?>"
                                            alt="<?php echo "$tieude"; ?>" /></a>
                                </div>
                                <div class="editor-post-content">
                                    <a href="<?php echo "$link"; ?>" class="post-tag-two">Nổi bật</a>
                                    <h3 style="padding: 0px;" class="post-title p-text-change-h"><a
                                            href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- editor-post-area-end -->
    <!-- ad-banner-area -->
    <div class="ad-banner-area">
        <div class="container">
            <div class="ad-banner-img ad-banner-img-two text-center">
                <a href="#">
                    <img src="hinhmenu/banner-center1.png" alt="du lịch làng ta lang">
                </a>
            </div>
        </div>
    </div>
    <!-- ad-banner-area-end -->

    <!-- latest-post-area -->
    <section class="latest-post-area-two pt-60 pb-60">
        <div class="container">
            <div class="latest-post-inner-wrap">
                <div class="row">
                    <div class="col-70">
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <span class="title p-text-change-h">Khám Phá Địa Điểm Mới Nhất</span>
                            </div>
                            <div class="view-all-btn">
                                <a href="dulichcongdong-taygiang" class="link-btn">Xem Tất Cả
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                            <path
                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                fill="currentColor" />
                                            <path
                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="section-title-line"></div>
                        </div>
                        <div class="latest-post-item-wrap">
                            <div class="row">
                                <div class="col-34">
                                    <div class="latest-post-wrap">
                                        <?php
                                        require('db.php');
                                        $tv = "select * from tin_dichvu order by rand() limit 0,2";
                                        $tv_1 = mysqli_query($link, $tv);
                                        ?>
                                        <?php
                                        while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                            $link_hinh = "HinhCTSP/Hinhdichvu/$tv_2[hinhanh]";
                                            $id = "$tv_2[id]";
                                            $tieude = "$tv_2[tieude]";
                                            $tieude = "$tv_2[tieude]";
                                            $mota = "$tv_2[mota]";
                                            $ngay = "$tv_2[ngay]";
                                            $url = $tv_2['linkurl'];
                                            $link = str_replace("?", "", "thong-tin/$url");
                                            ?>
                                            <div class="featured-post-item latest-post-item small-post">
                                                <div class="featured-post-thumb">
                                                    <a href="<?php echo "$link"; ?>"><img src="<?php echo "$link_hinh" ?>"
                                                            alt="<?php echo "$tieude"; ?>" /></a>
                                                </div>
                                                <div class="featured-post-content">
                                                    <a href="<?php echo "$link"; ?>" class="post-tag">Nổi Bật</a>
                                                    <p class="post-title p-text-change-h"><a
                                                            href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-66">
                                    <div class="featured-post-item latest-post-item big-post">
                                        <?php
                                        require('db.php');
                                        $tv = "select * from tin_tintuc order by id desc limit 0,1";
                                        $tv_1 = mysqli_query($link, $tv);
                                        ?>
                                        <?php
                                        while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                            $link_hinh = "HinhCTSP/Hinhdichvu/$tv_2[hinhanh]";
                                            $id = "$tv_2[id]";
                                            $tieude = "$tv_2[tieude]";
                                            $tieude = "$tv_2[tieude]";
                                            $mota = "$tv_2[mota]";
                                            $ngay = "$tv_2[ngay]";
                                            $url = $tv_2['linkurl'];
                                            $link = str_replace("?", "", "tin-tuc/$url");
                                            ?>
                                            <div class="featured-post-thumb">
                                                <a href="<?php echo "$link"; ?>"><img
                                                        src="HinhCTSP/Hinhtintuc/<?php echo $tv_2["hinhanh"]; ?>"
                                                        alt="<?php echo "$tieude"; ?>" /></a>
                                            </div>
                                            <div class="featured-post-content">
                                                <a href="<?php echo "$link"; ?>" class="post-tag">Hot</a>
                                                <p class="post-title bold-underline p-text-change-h"><a
                                                        href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a></p>
                                                <p><?php echo "$mota"; ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget">
                                <div class="sidebar-avatar-two">
                                    <div class="sidebar-avatar-content">
                                        <iframe width="100%" height="315" style="max-width:100%; border: 0;"
                                            src="https://www.youtube.com/embed/K2Amhk1yBgw?si=UeI_14odK2EiRkOr"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                    <p class="video-source">Nguồn: <a href="https://www.youtube.com/@VTC14"
                                            target="_blank" rel="noopener noreferrer">Kênh VTC14</a></p>
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="https://vietnamtourism.gov.vn/">
                                                <img src="hinhmenu/cuc-du-lich-quoc-gia-viet-nam.png"
                                                    alt="cục du lịch quốc gia việt nam">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://baochinhphu.vn/">
                                                <img src="hinhmenu/cong-thong-tin-dien-tu.jpg"
                                                    alt="cổng thông tin điện tử chính phủ">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://dichvucong.danang.gov.vn/">
                                                <img src="hinhmenu/DVC.png"
                                                    alt="dịch vụ công trực tuyến thành phố đà nẵng">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-post-area-end -->


    <!-- trending-post-area -->
    <section class="trending-post-area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <span class="title p-text-change-h">Cẩm Nang Du Lịch</span>
                        </div>
                        <div class="view-all-btn">
                            <a href="dulichcongdong-taygiang" class="link-btn">Xem Tất Cả
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path
                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                            fill="currentColor" />
                                        <path
                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="section-title-line"></div>
                    </div>
                </div>
            </div>
            <div class="row trending-post-active">
                <?php
                require('db.php');
                $tv = "select * from tin_dichvu order by id desc limit 0,6";
                $tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/Hinhdichvu/$tv_2[hinhanh]";
                    $id = "$tv_2[id]";
                    $tieude = "$tv_2[tieude]";
                    $tieude = "$tv_2[tieude]";
                    $mota = "$tv_2[mota]";
                    $ngay = "$tv_2[ngay]";
                    $url = $tv_2['linkurl'];
                    $link = str_replace("?", "", "$url-$id");
                    ?>
                    <div class="col-lg-4">
                        <div class="overlay-post-three overlay-post-four">
                            <div class="overlay-post-thumb-three">
                                <a href="<?php echo "$link"; ?>"><img src="<?php echo "$link_hinh" ?>"
                                        alt="<?php echo "$tieude"; ?>" /></a>
                            </div>
                            <div class="overlay-post-content-three">
                                <a href="<?php echo "$link"; ?>" class="post-tag">ta lang</a>
                                <h3 style="padding: 0;" class="post-title p-text-change-h"><a style="color: #fff;"
                                        href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="trending-shape-wrap">
            <img src="sitenewstravel/assets/img/images/trending_shape01.png" alt="trending travel">
            <img src="sitenewstravel/assets/img/images/trending_shape02.png" alt="trending travel">
        </div>
    </section>
    <!-- trending-post-area-end -->
    <!-- ad-banner-area -->
    <div class="ad-banner-area pt-80">
        <div class="container">
            <div class="ad-banner-img ad-banner-img-two text-center">
                <a href="#">
                    <img src="hinhmenu/banner-center2.png" alt="làng ta lang du lịch xanh">
                </a>
            </div>
        </div>
    </div>
    <!-- ad-banner-area-end -->

    <!-- weekly-post-area -->
    <section class="weekly-post-area-three pt-80 pb-80">
        <div class="container">
            <div class="weekly-post-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <span class="title p-text-change-h">Tin tức phong thuỷ</span>
                            </div>
                            <div class="view-all-btn">
                                <a href="tin-tuc" class="link-btn">Xem Tất Cả
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                            <path
                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                fill="currentColor" />
                                            <path
                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="section-title-line"></div>
                        </div>
                        <div class="weekly-post-item-wrap-three">
                            <div class="row">
                                <?php
                                require('db.php');
                                $tv = "select * from tin_tintuc  order by id desc limit 0,10";
                                $tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/Hinhtintuc/$tv_2[hinhanh]";
                                    $id = "$tv_2[id]";
                                    $tieude = "$tv_2[tieude]";
                                    $tieude = "$tv_2[tieude]";
                                    $mota = "$tv_2[mota]";
                                    $ngay = "$tv_2[ngay]";
                                    $url = $tv_2['linkurl'];
                                    $link = str_replace("?", "", "tin-tuc/$url");
                                    ?>
                                    <div class="col-md-6">
                                        <div class="weekly-post-three">
                                            <div class="weekly-post-thumb">
                                                <a href="<?php echo "$link"; ?>"><img src="<?php echo "$link_hinh" ?>"
                                                        alt="<?php echo "$tieude"; ?>"></a>
                                                <a href="tin-tuc" class="post-tag">Tin BĐS</a>
                                            </div>
                                            <div class="weekly-post-content">
                                                <p class="post-title p-text-change-h"><a
                                                        href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a></p>
                                                <p><?php echo strtok($mota, '.') . '.'; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="pinBox">
                            <?php
                            include('menu_trai/lefttintuc.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- weekly-post-area-end -->
    <div class="instagram-area">
        <div class="instagram-inner-wrap">
            <div class="row instagram-active">
                <?php
                //include_once("phan_trang.php");
                require('db.php');
                $tv = "select * from tin_dichvu order by id desc limit 0,10";
                $tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                    $id = "$tv_2[id]";
                    $tieude = "$tv_2[tieude]";
                    $tieude = "$tv_2[tieude]";
                    $mota = "$tv_2[mota]";
                    $ngay = "$tv_2[ngay]";
                    $url = khongdau($tieude);
                    $link = str_replace("?", "", "$url-$id");
                    ?>
                    <div class="col">
                        <div class="instagram-item">
                            <a href="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>"><img
                                    src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>"
                                    alt="<?php echo "$tieude"; ?>" /></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- instagram-area-end -->

</main>