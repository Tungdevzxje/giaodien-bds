<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
        style="background-image:url(hinhmenu/banner-duan.jpg);">
        <div class="overlay-main bg-black opacity-07" ></div>
        <div class=" container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">ELY ARCHI
                            CONSTRUCTION
                        </h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="trang-chu">Home page</a></li>
                            <li>Project</li>
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
        <div class="container">
            <!--
                    <div class="filter-wrap p-tb50">
                        <ul class="masonry-filter link-style  text-uppercase">
                                <li class="active"><a data-filter="*" href="#">Tất cả</a></li>
                                <li><a data-filter=".cat-1" href="#">Kiến trúc</a></li>
                                <li><a data-filter=".cat-2" href="#">Nội thất</a></li>
                                <li><a data-filter=".cat-3" href="#">Nhà hàng</a></li>

                        </ul>
                    </div>
                 -->
        </div>
        <!-- GALLERY CONTENT START -->
        <div class="portfolio-wrap mfp-gallery work-grid clearfix">
            <div class="container-fluid">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <?php
                    $tv = "select * from tin_dichvuabc order by id asc limit 0,40";
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
        <!-- GALLERY CONTENT END -->

    </div>
    <!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->