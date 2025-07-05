<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
        style="background-image:url(hinhmenu/banner-tintuc.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">ELY ARCHI
                            CONSTRUCTION.</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home page</a></li>
                            <li>Construction</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-tb90">
        <!-- GALLERY CONTENT START -->
        <div class="container-fluid">
            <div class="portfolio-wrap mfp-gallery news-masonry clearfix">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <?php
                    $tv = "select * from tin_dichvu order by id desc limit 0,40";
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
                        $link = "thong-tin/$url";

                        ?>
                        <div class="masonry-item col-lg-3 col-md-6 col-sm-6">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="<?php echo "$link"; ?>"><img
                                            src="HinhCTSP/Hinhdichvu/<?php echo $tv_2["hinhanh"]; ?>"
                                            alt="<?php echo "$tieude_en"; ?>"></a>
                                </div>
                                <div class="wt-post-info p-t30 text-black">
                                    <div class="wt-post-title ">
                                        <h2 class="post-title"><a href="<?php echo "$link"; ?>"
                                                class="text-black font-20 letter-spacing-4 font-weight-600"><?php echo "$tieude_en"; ?></a>
                                        </h2>
                                    </div>
                                    <div class="wt-post-text">
                                        <p><?php echo "$mota_en"; ?></p>
                                    </div>
                                    <a href="<?php echo "$link"; ?>"
                                        class="m-b15 site-button black radius-no text-uppercase"><span
                                            class="font-12 letter-spacing-5"> Read more </span></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- GALLERY CONTENT END -->

    </div>
    <!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->