<?php
include('phantrang/phantrang_dichvu.php');
?>


<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <div style="padding:10px; padding-top: 100px;">
                <h2 style="font-weight: bold; color:#c00;">CHỮ KÝ SỐ, HOÁ ĐƠN ĐIỆN TỬ </h2>
                <div><a href="thanhlapcongtydanang">Trang chủ </a> &nbsp;/&nbsp; Sản phẩm</div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog-section">
    <div class="container">
        <div class="news-wrap">
            <div class="row">
                <?php
                require('db.php');
                include('phantrang/phantrang_sanpham.php');
                // Helper function to escape output
                function escape($value)
                {
                    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
                // Initialize pager and set limit
                $p = new pager;
                $limit = 8;
                $start = $p->findStart($limit);

                // Count total items and calculate total pages
                $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM ma_sanpham");
                $countRow = mysqli_fetch_assoc($countResult);
                $count = $countRow['total'];
                $pages = $p->findPages($count, $limit);

                // Fetch paginated data
                $sql = mysqli_query($link, "SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT $start, $limit");
                ?>
                <?php while ($row = mysqli_fetch_assoc($sql)): ?>
                    <?php
                    $id = $row['id'];
                    $ten = escape($row['ten']);
                    $hinhanh = escape($row['hinhanh']);
                    $tieude = escape($row['tieude']);
                    $tieude_en = escape($row['tieude_en']);
                    $mota = escape($row['mota']);
                    $ngay = escape($row['ngay']);
                    $giaban = $row['giaban'];
                    $url = escape($row['linkurl']);
                    $link = str_replace("?", "", strtolower("sanpham-$url"));

                    ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-6" style="margin-bottom:0px; padding:10px;">
                        <div class="news-item"
                            style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <a href="<?php echo "$link"; ?>" class="news-img-link">
                                <div class="img-box hover-effect">
                                    <img class="img-responsive" src="HinhCTSP/HinhSanPham/<?php echo $hinhanh; ?>"
                                        alt="<?php echo $tieude; ?>" style=" padding: 10px;" />
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="<?php echo "$link"; ?>">
                                    <h2 class="title-tintuc"><?php echo $tieude; ?></h2>
                                </a>
                                <ul class="starts text-center" style="padding: 0px;margin-top:0px; margin-bottom:0px;">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div style="text-align: center; font-weight: bold;color: #c00;">
                                    <p style="margin-bottom:18px;">
                                        <font style='color:#000; font-size: 14px;'>GIÁ:</font>
                                        <font style='color:#c00; font-size: 15px;'>
                                            <?php
                                            if (is_numeric($giaban)) {
                                                echo number_format($giaban) . ' vnđ';
                                            }
                                            ?>
                                        </font>
                                    </p>
                                </div>

                                <div style="text-align: center;">
                                    <a class="btn1 btn-sm" href="#"><i class="fa fa-shopping-cart"
                                            style="color:#ff0; padding-right: 9px;"></i>0973 611 973</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>



            </div>
</section>
<!-- END SECTION BLOG -->