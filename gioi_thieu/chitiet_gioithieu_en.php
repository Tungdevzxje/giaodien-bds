<style>
    .share-linknd {
        width: 100%;
        margin: 0px 0;
        border-radius: 4px;
        display: inline-block;
        background: #fcf1bd;
    }
</style>
<?php
switch ($ngon_ngu_abc) {
    case "tieng_anh":
        include('side/side.php');

        break;
    default:
        include('side/side.php');

}


?>
<!-- End Header Area -->

<!-- rts breadcrumba area end -->

<!-- End Breadcrumb Area -->

<!-- Start Feature Post Area -->

<section class="eblog-featured-post-area area-2 tp-section-gapTop">
    <div class="container">
        <div class="section-inner">
            <div class="row g-5 sticky-coloum-wrap">
                <div class="col-xl-12" style="padding-top: 70px;">
                    <?php
                    include_once("phan_trang.php");
                    require('db.php');
                    $p = new pager;
                    $limit = 1;
                    $start = $p->findStart($limit);
                    $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM gioi_thieu"));
                    $pages = $p->findPages($count, $limit);
                    $id = $_REQUEST["url"];
                    $result = mysqli_query($link, "SELECT * FROM gioi_thieu where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
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
                            $tukhoa = doikyty($row->tukhoa1);
                            $url = khongdau($row->tieude_en);
                            $link = str_replace("?", "", strtolower("gioithieu/$url"));
                            $hinhanh = "HinhCTSP/" . $row->hinhanh;
                            $hinhanh = "<img src='$hinhanh'  text-align: center; alt='$tieude' title='$tieude'  >  ";
                            if ($stt % 2 == 0) {
                                echo "<tr>";
                            }
                            echo "<td align='left' width='100%'>";
                            echo "<table align='left' width='100%'>";
                            echo "<div>
                                  <h1 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa</a></h1>
                            <h2 style='font-size: 24px;
                            font-weight: bold;
                            margin-bottom: 15px;
                            line-height: 35px;'> $tieude_en</h2>

                    		<p style='font-size: 17px;' class='author_name'> $mota_en</p>

                                <div style='padding:20px; text-align: center;'>
                            	<a > $hinhanh </a></div>
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
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Blog Area -->
<section class="eblog-bottom-post-area tp-section-gap">
    <div class="container">
        <div style="border-bottom: 2px solid #000;
    padding: 7px;
    color: #c00;
        margin-bottom: 30px;
    font-weight: bold;font-size: 16px;
    padding-left: 1px;"><i class="fa fa-bars" style="padding-right:10px;"></i> DỊCH VỤ LIÊN QUAN </div>
        <div class="section-inner">
            <div class="row g-5">


                <?php
                require('db.php');

                // Function to fetch a random post
                function fetchRandomPost($link)
                {
                    $query = "SELECT * FROM (SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 8";
                    $stmt = $link->prepare($query);
                    if ($stmt === false) {
                        die('Prepare failed: ' . htmlspecialchars($link->error));
                    }
                    $stmt->execute();
                    return $stmt->get_result();
                }

                // Fetch random post
                $posts = fetchRandomPost($link);
                ?>
                <?php if ($posts && $posts->num_rows > 0): ?>
                    <?php while ($row = $posts->fetch_assoc()): ?>
                        <?php
                        $imageSrc = htmlspecialchars("HinhCTSP/Hinhdichvu/{$row['hinhanh']}");
                        $postLink = htmlspecialchars(str_replace("?", "", strtolower("thong-tin/{$row['linkurl']}")));
                        $postTitle = htmlspecialchars($row['tieude_en']);
                        $postDate = htmlspecialchars($row['ngay']);
                        $postDescription = htmlspecialchars($row['mota']);
                        ?>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="eblog-featured-news style-two small">
                                <div class="image-area">
                                    <a href="<?php echo $postLink; ?>"> <img src="<?php echo $imageSrc; ?>"
                                            alt="<?php echo $postTitle; ?>" /></a>
                                </div>
                                <div class="blog-content text-left">

                                    <a href="<?php echo $postLink; ?>">
                                        <h3 class="heading-title ml--0 mb--10 text-start" style="font-size: 15px;
    line-height: 23px;
    padding: 10px;
    font-weight: bold; padding-bottom:30px"><?php echo $postTitle; ?></h3>
                                    </a>

                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Không có bài viết nào.</p>
                <?php endif; ?>

                <?php
                $link->close();
                ?>


            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white rec-pro">
    <div class="container-fluid">
        <div class="owl-carousel style2">
            <?php
            //include_once("phan_trang.php");
            require('db.php');
            $tv = "select * from doi_tac order by id desc limit 0,6";

            $tv_1 = mysqli_query($link, $tv);
            $a_tv_1 = mysqli_query($link, $tv);
            ?>
            <?php
            while ($row = mysqli_fetch_array($tv_1)) {
                $link_hinh = "HinhCTSP/$row[hinhanh]";
                $id = "$row[id]";
                $tieude_en = "$row[tieude_en]";
                $tieude = "$row[tieude]";
                $mota = "$row[mota]";
                $url = "$row[linkurl]";
                $link = str_replace("?", "", strtolower("tintuc/$url"));
                $ngay = "$row[ngay]";
                ?>
                <div class="owl-item" data-aos="fade-up"><img src="<?php echo "$link_hinh"; ?>"
                        alt="thành lập công ty bình định"></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->