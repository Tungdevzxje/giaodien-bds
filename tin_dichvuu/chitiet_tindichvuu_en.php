<style>
    .share-linknd {
        width: 100%;
        margin: 0px 0;
        border-radius: 4px;
        display: inline-block;
        background: #fcf1bd;
    }

    .grid-related {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
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
        margin-top: auto;
        min-height: 60px;
        overflow: hidden;
    }
</style>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>japan style design
    </a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>reputation
        construction</a>
</h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>beautiful architecture
        hcmc</a></h3>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--<< Breadcrumb Section Start >>-->
<div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
    style="background-image:url(hinhmenu/banner-tintuc.jpg);">

    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">ELY
                        ARCHI CONSTRUCTION</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->
            <div class="p-tb20">
                <div>
                    <?php
                    $id = $_GET['url'];
                    $tv = "select * from tin_dichvuu where linkurl like '%" . $id . "%' order by id ";
                    $tv_1 = mysqli_query($link, $tv);
                    $tv_2 = mysqli_fetch_array($tv_1);
                    $thuocloai = "$tv_2[thuocloai]";
                    $phanloai = mysqli_fetch_array(mysqli_query($link, "select * from  loai_tin_dichvuu where id=" . $thuocloai . " limit 1"));
                    $mota = "$tv_2[mota]";
                    $hinhanh = "$tv_2[hinhanh]";
                    $hinhanh1 = "$tv_2[hinhanh1]";
                    $hinhanh2 = "$tv_2[hinhanh2]";
                    $hinhanh3 = "$tv_2[hinhanh3]";
                    $mysql = mysqli_query($link, "select * from loai_tin_dichvuu where id=$thuocloai limit 1");
                    $row = mysqli_fetch_array($mysql);
                    $ten = "$tv_2[tieude_en]";
                    ?>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="trang-chu">Home page</a></li>
                        <li><?php echo "$ten"; ?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- START SECTION BLOG -->
<section class="blog bg-white">
    <div class="container" id="pinBoxContainer">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">

                <?php
                include_once("phan_trang.php");
                require('db.php');
                $p = new pager;
                $limit = 1;
                $start = $p->findStart($limit);
                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_dichvu"));
                $pages = $p->findPages($count, $limit);
                $id = $_REQUEST["url"];
                $result = mysqli_query($link, "SELECT * FROM tin_dichvuu where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
                // hiển thị DL
                if (mysqli_num_rows($result) <> 0) {
                    echo " <table width='100%' border='0' align='left'>";
                    $stt = 0;
                    while ($row = mysqli_fetch_object($result)) {
                        $ngay = $row->ngay;
                        $thuocloai = $row->thuocloai;
                        $tieude = doikyty($row->tieude);
                        $noidung_en = doikyty($row->noidung_en);
                        $mota_en = doikyty($row->mota_en);
                        $tieude_en = doikyty($row->tieude_en);
                        $tukhoa2 = doikyty($row->tukhoa2);
                        $facebook = $row->facebook;
                        $tukhoa = $row->tukhoa;
                        $url = khongdau($row->tieude_en);
                        $link = str_replace("?", "", strtolower("dich-vu/$url-$id"));
                        $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                        $hinhanh = "<img src='$hinhanh'  text-align: center; style='width:70%' alt='$tieude_en' title='$tieude_en'  >  ";
                        if ($stt % 2 == 0) {
                            echo "<tr>";
                        }
                        echo "<td align='left' width='100%'>";
                        echo "<table align='left' width='100%'>";
                        echo "<div>
                                  <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa</a></h2>
                            <h1 style='font-size: 24px;
                            font-weight: bold;
                            margin-bottom: 15px;
                            line-height: 35px;'> $tieude_en</h1>

                    		<p style='font-size: 17px;' class='author_name'> $mota_en</p>

                                <div style='padding:20px; text-align: center;'>
                            	<a href='$link'> $hinhanh </a></div>
                               <div style='font-size: 18px; font-family:'Arial', sans-serif;' class='author_name'>
                               $noidung_en
                                   </div>

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
                            SELECT * FROM tin_dichvuabc ORDER BY id DESC LIMIT 100
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
                        $url = "chi-tiet/" . str_replace("?", "", strtolower($row['linkurl']));
                        ?>
                        <div
                            style="display: flex; align-items: flex-start; padding: 10px; margin: 2px 0; font-size: 17px; font-weight: 300;">
                            <img src="hinhmenu/me-rev.gif" alt="<?= htmlspecialchars($title) ?>"
                                style="width: 20px; margin-right: 10px;" />
                            <div class="author_name">
                                <h3 style="font-size: 17px; font-weight: 400; line-height: 27px; margin: 0;">
                                    <a href="<?= $url ?>" style="text-decoration: none; color: #333;">
                                        <?= htmlspecialchars($title_en) ?>
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
                        $tieude_en = "$tv_2[tieude_en]";
                        $noidung_en = "$tv_2[noidung_en]";

                        ?>
                        <div style='margin:0px;' class="author_img">
                            <div style='text-align: center;'>
                                <img src="HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>" style='    text-align: center;
    padding: 20px;' />
                            </div>
                            <span style="font-size: 18px;"><?php echo "$noidung_en"; ?></span>

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
                            SELECT * FROM tin_dichvuabc ORDER BY id DESC LIMIT 100
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
                        $url = "chi-tiet/" . str_replace("?", "", strtolower($row['linkurl']));
                        ?>
                        <div
                            style="display: flex; align-items: flex-start; padding: 10px; margin: 2px 0; font-size: 17px; font-weight: 300;">
                            <img src="hinhmenu/me-rev.gif" alt="<?= htmlspecialchars($title_en) ?>"
                                style="width: 20px; margin-right: 10px;" />
                            <div class="author_name">
                                <h3 style="font-size: 17px; font-weight: 400; line-height: 27px; margin: 0;">
                                    <a href="<?= $url ?>" style="text-decoration: none; color: #333;">
                                        <?= htmlspecialchars($title_en) ?>
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
    padding-left: 5px;"><i class="fa fa-bars" style="padding-right:10px;"></i> RELATED NEWS </div>

                    <div class="row">

                        <?php
                        include_once("phan_trang.php");
                        require('db.php');
                        // Ensure $thuocloai is defined
                        $thuocloai = isset($thuocloai) ? $thuocloai : 0; // Default to 0 or appropriate value
                        $p = new pager;
                        $limit = 6;
                        $start = $p->findStart($limit);
                        $count_query = mysqli_query($link, "SELECT * FROM tin_dichvuu WHERE thuocloai = " . $thuocloai);
                        $count = mysqli_num_rows($count_query);
                        $pages = $p->findPages($count, $limit);
                        $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM tin_dichvuu WHERE thuocloai = $thuocloai ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 6");
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
                            $link = str_replace("?", "", strtolower("dich-vu/$url-$id"));
                            ?>


                            <div class="grid-related"><?php
                            while ($tv_2 = mysqli_fetch_array($sql)) {
                                $link_hinh = "HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
                                $tieude = $tv_2['tieude'];
                                $url = $tv_2['linkurl'];
                                $link = str_replace("?", "", strtolower("dich-vu/$url-$id"));
                                ?>
                                    <div class="card-custom">
                                        <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $link_hinh; ?>" alt="<?php echo $tieude_en; ?>">
                                        </a>
                                        <h3 class="card-title-custom">
                                            <a href="<?php echo $link; ?>"
                                                style="text-decoration:none; color:#222;"><?php echo $tieude_en; ?></a>
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


            <aside class="col-lg-3 col-md-12">
                <div class="pinBox">
                    <?php
                    include('menu_trai/lefttintuc_en.php');
                    ?>
                </div>
            </aside>
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