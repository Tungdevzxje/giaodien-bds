<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<style>
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 3px;
        width: 100%;
        margin: 20px auto;
        box-sizing: border-box;
    }

    .gallery-grid .grid-item {
        display: block;
    }

    .gallery-grid .aspect-ratio-box {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        /* 16:9 ratio = 9/16 * 100 = 56.25% */
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .gallery-grid .aspect-ratio-box img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Giữ ảnh phủ khung */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 8px;
    }

    .gallery-grid .aspect-ratio-box img:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: 1fr;
            /* 1 cột trên mobile */
            padding: 10px;
        }
    }


    /* --- CSS cho Gallery Masonry --- */

    .gallery-masonry {
        column-count: 3;
        column-gap: 3px;
        width: 100%;
        max-width: 1200px;
        margin: 20px auto;
        /*padding: 20px;*/
        box-sizing: border-box;
    }

    .gallery-masonry .masonry-item {
        display: inline-block;
        width: 100%;
        margin-bottom: 3px;
        break-inside: avoid;
        box-sizing: border-box;
    }

    .gallery-masonry .aspect-ratio-box {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        /* 16:9 */
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .gallery-masonry .aspect-ratio-box img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-masonry .aspect-ratio-box img:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    /* Responsive cho các kích thước màn hình */
    @media (max-width: 992px) {
        .gallery-masonry {
            column-count: 2;
            /* 2 cột trên tablet */
            gap: 10px;
        }
    }

    @media (max-width: 768px) {
        .gallery-masonry {
            column-count: 1;
            /* 1 cột trên mobile */
            gap: 10px;
            padding: 10px;
        }
    }

    .share-linknd {
        width: 100%;
        margin: 0px 0;
        border-radius: 4px;
        display: inline-block;
        background: #fcf1bd;
    }

    .grid-related {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }


    .card-custom {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid #ddd;
        padding: 10px;
        background: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .card-custom img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-title-custom {
        font-size: 16px;
        color: #222;
        /*margin-top: auto;*/
        /*min-height: 60px;*/
        overflow: hidden;
    }
</style>

<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>công ty kiến trúc tphcm
    </a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>biệt thự sân vườn
        tphcm</a>
</h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>công ty thiết kế nội
        thất</a></h3>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<< Breadcrumb Section Start >>-->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
        style="background-image:url(hinhmenu/banner-tintuc.jpg);">

        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">THI CÔNG ELY
                            ARCHI</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="p-tb20">
                    <div>
                        <?php
                        $id = $_GET['url'];
                        $tv = "select * from tin_dichvuabc where linkurl like '%" . $id . "%' order by id ";
                        $tv_1 = mysqli_query($link, $tv);
                        $tv_2 = mysqli_fetch_array($tv_1);
                        $thuocloai = "$tv_2[thuocloai]";
                        $phanloai = mysqli_fetch_array(mysqli_query($link, "select * from  loai_tin_dichvuabc where id=" . $thuocloai . " limit 1"));
                        $mota = "$tv_2[mota]";
                        $hinhanh = "$tv_2[hinhanh]";
                        $hinhanh1 = "$tv_2[hinhanh1]";
                        $hinhanh2 = "$tv_2[hinhanh2]";
                        $hinhanh3 = "$tv_2[hinhanh3]";
                        $mysql = mysqli_query($link, "select * from loai_tin_dichvuabc where id=$thuocloai limit 1");
                        $row = mysqli_fetch_array($mysql);
                        $ten = "$tv_2[tieude]";
                        ?>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="trang-chu">Trang chủ</a></li>
                            <li><?php echo "$ten"; ?></li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog bg-white">
        <div class="container" id="pinBoxContainer">
            <div class="row">
                <div class="col-lg-12 col-md-12 blog-pots">

                    <?php
                    include_once("phan_trang.php");
                    require('db.php');
                    $p = new pager;
                    $limit = 1;
                    $start = $p->findStart($limit);
                    $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_dichvuabc"));
                    $pages = $p->findPages($count, $limit);
                    $id = $_REQUEST["url"];
                    $result = mysqli_query($link, "SELECT * FROM tin_dichvuabc where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
                    // hiển thị DL
                    if (mysqli_num_rows($result) <> 0) {
                        echo " <table width='100%' border='0' align='left'>";
                        $stt = 0;
                        while ($row = mysqli_fetch_object($result)) {
                            $ngay = $row->ngay;
                            $thuocloai = $row->thuocloai;
                            $tieude = doikyty($row->tieude);
                            $noidung = doikyty($row->noidung);
                            $mota = doikyty($row->mota);
                            $tieude_en = doikyty($row->tieude_en);
                            $tukhoa2 = doikyty($row->tukhoa2);
                            $facebook = $row->facebook;
                            $tukhoa = $row->tukhoa;
                            $url = khongdau($row->tieude);
                            $link = str_replace("?", "", strtolower("du-an/$url"));
                            $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                            $hinhanh1 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh1;
                            $hinhanh2 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh2;
                            $hinhanh3 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh3;
                            $hinhanh4 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh4;
                            $hinhanh5 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh5;
                            $hinhanh6 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh6;
                            $hinhanh7 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh7;
                            $hinhanh8 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh8;
                            $hinhanh9 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh9;
                            $hinhanh10 = "HinhCTSP/Hinhdichvu/" . $row->hinhanh10;
                            $hinhanh = "
                            <div style='position: relative; padding-top: 56.25%; margin: auto; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);'>
                                <img src='$hinhanh' alt='$tieude_en' title='$tieude'
                                    style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; display: block;'>
                            </div>";

                            if ($stt % 2 == 0) {
                                echo "<tr>";
                            }

                            if (!function_exists('is_image_extension')) {
                                function is_image_extension($filename)
                                {
                                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                                    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'svg'];
                                    return in_array(strtolower($ext), $imageExtensions);
                                }
                            }

                            $baseImagePath = 'HinhCTSP/Hinhdichvu/';
                            $allImages = [];

                            // Ảnh chính
                            if (!empty($row->hinhanh) && is_image_extension($row->hinhanh)) {
                                $allImages[] = $baseImagePath . $row->hinhanh;
                            }

                            // Các ảnh phụ từ hinhanh1 đến hinhanh10
                            for ($i = 1; $i <= 10; $i++) {
                                $field = 'hinhanh' . $i;
                                if (isset($row->$field) && !empty($row->$field) && is_image_extension($row->$field)) {
                                    $allImages[] = $baseImagePath . $row->$field;
                                }
                            }

                            $gallery1Images = array_slice($allImages, 1, 4);
                            $gallery2Images = array_slice($allImages, 5);

                            // Gallery 1 - 2x2 Grid
                            $gallery1_id = "animated-thumbnails-gallery-part1-" . $stt;
                            $gallery1 = "<div class='gallery-grid lightgallery' id='$gallery1_id'>";
                            foreach ($gallery1Images as $index => $img) {
                                $gallery1 .= "<a href='$img' class='grid-item' data-aos='fade-up'>";
                                $gallery1 .= "<div class='aspect-ratio-box'>";
                                $gallery1 .= "<img src='$img' alt='" . htmlspecialchars($tieude . " - Ảnh " . ($index + 1), ENT_QUOTES, 'UTF-8') . "' title='" . htmlspecialchars($tieude . " - Ảnh " . ($index + 1), ENT_QUOTES, 'UTF-8') . "'>";
                                $gallery1 .= "</div>";
                                $gallery1 .= "</a>";
                            }
                            $gallery1 .= "</div>";

                            // Gallery 2 - Masonry
                            $gallery2_id = "animated-thumbnails-gallery-part2-" . $stt;
                            $gallery2 = "<div class='gallery-masonry lightgallery' id='$gallery2_id'>";
                            foreach ($gallery2Images as $index => $img) {
                                $gallery2 .= "<a href='$img' class='masonry-item' data-aos='zoom-in'>";
                                $gallery2 .= "<div class='aspect-ratio-box'>";
                                $gallery2 .= "<img src='$img' alt='" . htmlspecialchars($tieude . " - Ảnh " . ($index + 1), ENT_QUOTES, 'UTF-8') . "' title='" . htmlspecialchars($tieude . " - Ảnh " . ($index + 1), ENT_QUOTES, 'UTF-8') . "'>";
                                $gallery2 .= "</div>";
                                $gallery2 .= "</a>";
                            }

                            $gallery2 .= "</div>";

                            echo "<td align='left' width='100%'>";
                            echo "<table align='left' width='100%'>";
                            echo "<div>
                                  <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa</a></h2>
                            <h1 style='font-size: 24px;
                            font-weight: bold;
                            margin-bottom: 15px;
                            line-height: 35px;'> $tieude</h1>

                                <div style='padding-bottom:20px; text-align: center;'>
                            	<a href='$link'> $hinhanh </a></div>
                            	<p style='font-size: 17px;' class='author_name'> $mota</p>
                            	<div style=' text-align: center;'>$gallery1</div>
                               <div style='font-size: 17px; font-family:'Arial', sans-serif;' class='author_name'>
                               $noidung
                                   </div>
                            <div style=' text-align: center;'>$gallery2</div>

                                    <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa2</a></h2>
                        </div>";
                            echo " </table>";
                            echo "</td>";
                            $stt = $stt + 1;

                            if ($stt % 1 == 0) {
                                echo "</tr>";
                            }
                        }
                        echo " </table>";
                    }
                    ?>
                    <!-- đường dẫn h2 -->
                    <div class="share-linknd clearfix" style="margin: 5px 0 12px;">
                        <?php
                        require('db.php');
                        $query = "
                        SELECT * FROM (
                            SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 100
                        ) AS recent_news
                        ORDER BY RAND()
                        LIMIT 1
                    ";
                        $result = mysqli_query($link, $query);
                        ?>

                        <?php while ($row = mysqli_fetch_array($result)):
                            $imagePath = "HinhCTSP/Hinhdichvu/" . $row['hinhanh'];
                            $title = $row['tieude'];
                            $title_en = $row['tieude_en'];
                            $url = "thong-tin/" . str_replace("?", "", strtolower($row['linkurl']));
                            ?>
                            <div
                                style="display: flex; align-items: flex-start; padding: 10px; margin: 2px 0; font-size: 17px; font-weight: 300;">
                                <img src="hinhmenu/me-rev.gif" alt="<?= htmlspecialchars($title) ?>"
                                    style="width: 20px; margin-right: 10px;" />
                                <div class="author_name">
                                    <h3 style="font-size: 17px; font-weight: 400; line-height: 27px; margin: 0;">
                                        <a href="<?= $url ?>" style="text-decoration: none; color: #333;">
                                            <?= htmlspecialchars($title) ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="rating_wrap">
                                <span class="rating_num"></span>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- đường dẫn h2 -->
                    <div class="author_name">
                        <?php
                        include_once("phan_trang.php");
                        require('db.php');
                        $tv = "select * from gioi_thieu order by id=20 desc limit 0,1";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($tv_2 = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                            $id = "$tv_2[id]";
                            $tieude = "$tv_2[tieude]";
                            $noidung = "$tv_2[noidung]";

                            ?>
                            <div style='margin:0px;' class="author_img">
                                <div style='text-align: center;'>
                                    <img src="HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                        style='    text-align: center;
    padding: 20px;' />
                                </div>
                                <span style="font-size: 18px;"><?php echo "$noidung"; ?></span>

                            </div>
                            <div class="rating_wrap">
                                <span class="rating_num">
                                </span>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- đường dẫn h2 -->
                    <div class="share-linknd clearfix" style="margin: 5px 0 12px;">
                        <?php
                        require('db.php');
                        $query = "
                        SELECT * FROM (
                            SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 100
                        ) AS recent_news
                        ORDER BY RAND()
                        LIMIT 1
                    ";
                        $result = mysqli_query($link, $query);
                        ?>

                        <?php while ($row = mysqli_fetch_array($result)):
                            $imagePath = "HinhCTSP/Hinhdichvu/" . $row['hinhanh'];
                            $title = $row['tieude'];
                            $title_en = $row['tieude_en'];
                            $url = "thong-tin/" . str_replace("?", "", strtolower($row['linkurl']));
                            ?>
                            <div
                                style="display: flex; align-items: flex-start; padding: 10px; margin: 2px 0; font-size: 17px; font-weight: 300;">
                                <img src="hinhmenu/me-rev.gif" alt="<?= htmlspecialchars($title) ?>"
                                    style="width: 20px; margin-right: 10px;" />
                                <div class="author_name">
                                    <h3 style="font-size: 17px; font-weight: 400; line-height: 27px; margin: 0;">
                                        <a href="<?= $url ?>" style="text-decoration: none; color: #333;">
                                            <?= htmlspecialchars($title) ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="rating_wrap">
                                <span class="rating_num"></span>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- đường dẫn h2 -->

                    <div class="col-mob-12 col-xs-12 col-sm-12 col-md-12 col-lg-12"
                        style="margin-bottom: 20px;margin-top: 40px;">
                        <div style="border-bottom: 2px solid #000;
    padding: 7px;
    color: #c00;
        margin-bottom: 30px;
    font-weight: bold;font-size: 16px;
    padding-left: 5px;"><i class="fa fa-bars" style="padding-right:10px;"></i> TIN LIÊN QUAN </div>

                        <div class="row">

                            <?php
                            include_once("phan_trang.php");
                            require('db.php');
                            // Ensure $thuocloai is defined
                            $thuocloai = isset($thuocloai) ? $thuocloai : 0; // Default to 0 or appropriate value
                            $p = new pager;
                            $limit = 6;
                            $start = $p->findStart($limit);
                            $count_query = mysqli_query($link, "SELECT * FROM tin_dichvuabc WHERE thuocloai = " . $thuocloai);
                            $count = mysqli_num_rows($count_query);
                            $pages = $p->findPages($count, $limit);
                            $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM tin_dichvuabc WHERE thuocloai = $thuocloai ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 1,4");
                            // Error handling
                            if (!$sql) {
                                echo "Error: " . mysqli_error($link);
                            }
                            // Store IDs of related posts
                            $related_ids = [];
                            // Display data
                            while ($tv_2 = mysqli_fetch_array($sql)) {
                                $link_hinh = "HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
                                $related_ids[] = $id;
                                $thuocloai = $tv_2['tieude_en'];
                                $tieude_en = $tv_2['tieude_en'];
                                $tieude = $tv_2['tieude'];
                                $mota = $tv_2['mota'];
                                $ngay = $tv_2['ngay'];
                                $url = $tv_2['linkurl'];
                                $link = str_replace("?", "", strtolower("du-an/$url"));
                                ?>


                                <div class="grid-related"><?php
                                while ($tv_2 = mysqli_fetch_array($sql)) {
                                    $link_hinh = "HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
                                    $tieude = $tv_2['tieude'];
                                    $url = $tv_2['linkurl'];
                                    $link = str_replace("?", "", strtolower("du-an/$url"));
                                    ?>
                                        <div class="card-custom">
                                            <a href="<?php echo $link; ?>">
                                                <img src="<?php echo $link_hinh; ?>" alt="<?php echo $tieude; ?>">
                                            </a>
                                            <h3 class="card-title-custom">
                                                <a href="<?php echo $link; ?>"
                                                    style="text-decoration:none; color:#222;"><?php echo $tieude; ?></a>
                                            </h3>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php
                            }
                            ?>



                        </div>
                    </div>
                    <!-- Comments form end -->


                </div>

            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
    </br>

    <script src="js/jquery.pinBox.js"></script>
    <script>
        $(document).ready(function () {

            $(".pinBox").pinBox({
                //default 0px
                Top: '30px',
                //default '.container'
                Container: '#pinBoxContainer',
                //default 20
                ZIndex: 20,
                //default '767px' if you disable pinBox in mobile or tablet
                MinWidth: '1170px'
                //events if scrolled or window resized
            });

        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- lightGallery CSS & JS -->
    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" />

    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const galleryElements = document.querySelectorAll(".lightgallery");
            galleryElements.forEach(gallery => {
                lightGallery(gallery, {
                    thumbnail: true,
                    zoom: true
                });
            });
        });

    </script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            once: true, // chỉ chạy 1 lần khi cuộn tới
            duration: 800, // thời gian hiệu ứng (ms)
            offset: 100 // cách bao nhiêu px thì bắt đầu hiện
        });
    </script>