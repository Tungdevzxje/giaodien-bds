<style>
    .top {
        margin-top: 30px;
    }

    .wt-icon-box-wraper {
        border: 1px solid #eee;
        border-radius: 8px;
        transition: box-shadow 0.3s;
    }

    .wt-icon-box-wraper:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .wt-tilte a {
        text-decoration: none;
        color: inherit;
    }

    img {
        display: block;
    }
</style>
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
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">ELY
                            ARCHI CONSTRUCTION.</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home page</a></li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <div class="container top">
        <div class="section-content m-b50">
            <div class="row">
                <?php
                require('db.php');
                $tv = "SELECT * FROM tin_tintuc ORDER BY id LIMIT 0,2";
                $tv_1 = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv_1)) {
                    $id = $row['id'];
                    $link_hinh = "HinhCTSP/Hinhtintuc/" . $row['hinhanh'];
                    $tieude_en = $row['tieude_en'];
                    $mota_en = $row['mota_en'];
                    $url = $row['linkurl'];
                    $link = "tin-tuc/$url";
                    ?>
                    <div class="col-md-6 col-sm-6 d-flex">
                        <div class="wt-icon-box-wraper bx-style-1 p-a20 bg-white shadow-sm w-100 d-flex flex-column">
                            <div class="wt-post-media wt-img-effect zoom-slow mb-3">
                                <a href="<?= $link; ?>">
                                    <img src="<?= $link_hinh; ?>" alt="<?= $tieude_en; ?>" class="img-fluid w-100"
                                        style="object-fit: cover; height: 220px; border-radius: 6px;">
                                </a>
                            </div>
                            <div class="flex-grow-1 d-flex flex-column">
                                <h3 class="wt-tilte text-uppercase letter-spacing-1 font-weight-bold"
                                    style="min-height: 50px; margin-bottom: 5px; font-size: 18px;">
                                    <a href="<?= $link; ?>" class="text-dark"><b><?= $tieude_en; ?></b></a>
                                </h3>
                                <p class="flex-grow-1" style="max-height: 96px; overflow: hidden;"><?= $mota_en; ?></p>
                                <div class="text-end mt-2">
                                    <a href="<?= $link; ?>" class="btn btn-sm btn-outline-dark text-uppercase">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-content m-b50">
            <div class="row">
                <?php
                require('db.php');
                $tv = "SELECT * FROM tin_tintuc ORDER BY id LIMIT 8";
                $tv_1 = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv_1)) {
                    $id = $row['id'];
                    $hinhanh = $row['hinhanh'];
                    $tieude_en = $row['tieude_en'];
                    $mota_en = $row['mota_en'];
                    $url = $row['linkurl'];
                    $link = "tin-tuc/$url";
                    ?>
                    <div class="col-md-6 col-sm-6 m-b10">
                        <div class="wt-icon-box-wraper bx-style-1 p-a10 left bg-white">

                            <div class="col-md-4 col-sm-4 m-b10">

                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="<?php echo "$link"; ?>"><img src="HinhCTSP/Hinhtintuc/<?php echo $hinhanh; ?>"
                                            title="<?php echo "$tieude_en"; ?>" alt="<?php echo "$tieude_en"; ?>" /></a>
                                </div>

                            </div>
                            <div class="col-md-8 col-sm-8 m-b10">

                                <h3 class="wt-tilte text-uppercase  letter-spacing-1 " style='height: 50px;'><a
                                        href="<?php echo $link ?>"><?php echo "$tieude_en"; ?></a></h3>
                                <p style="    height: 96px;
    overflow: hidden;"> <?php echo "$mota_en"; ?></p>

                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- CONTENT END -->