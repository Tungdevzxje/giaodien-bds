<style>
    .p-3 {
        padding: 0rem !important;
    }

    .product-default img:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }

    .pinBox {
        position: sticky;
        top: 20px;
        max-height: 100vh;
        /* overflow-y: auto; */
    }

    .bgphantranga {
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .phantrang {
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #333;
    }

    .phantrang a {
        text-decoration: none;
        color: #007bff;
        margin: 0 5px;
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    .phantrang a:hover {
        background-color: #007bff;
        color: #fff;
    }

    .phantrang .current {
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        padding: 5px 10px;
        border-radius: 4px;
        margin: 0 5px;
    }

    .phantrang .back,
    .phantrang .next {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .phantrang .back i,
    .phantrang .next i {
        font-size: 12px;
        margin: 0 2px;
    }

    .phantrang .back:hover,
    .phantrang .next:hover {
        background-color: #0056b3;
        color: #fff;
        cursor: pointer;
    }

    @media (max-width: 991px) {
        .pinBox {
            display: none !important;
        }
    }
</style>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>xưởng in đà nẵng</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>in bao thư đà nẵng</a></h2>
<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a>in túi giấy đà nẵng </a></h1>
<?php
include('phantrang/phantrang_dichvu.php');
?>


<div class="breadcrumb-wrapper section-padding bg-cover" style="background:#f6f6f6; padding-bottom: 26px; margin-top: 92px;">
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title text-center titleweb">
                <div style="font-size: 30px; font-weight: bold;" class="wow fadeInUp" data-wow-delay=".3s"> CÔNG TY IN ẤN ATV</div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="trangchu">
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        IN ẤN
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-9 main-content" style="padding-top: 45px;">


            <div class="container">
                <div class="row g-4">
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
                    $limit = 16;
                    $start = $p->findStart($limit);

                    // Count total items and calculate total pages
                    $countResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM ma_sanpham");
                    $countRow = mysqli_fetch_assoc($countResult);
                    $count = $countRow['total'];
                    $pages = $p->findPages($count, $limit);

                    // Fetch paginated data
                    $sql = mysqli_query($link, "SELECT * FROM ma_sanpham where noibat = 1 ORDER BY id DESC LIMIT $start, $limit");
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($sql)): ?>
                        <?php
                        $id = $row['id'];
                        $ten = escape($row['ten']);
                        $link_hinh = "HinhCTSP/HinhSanPham/" . $row['hinhanh'];
                        $tieude = escape($row['tieude']);
                        $tieude_en = escape($row['tieude_en']);
                        $mota = escape($row['mota']);
                        $ngay = escape($row['ngay']);
                        $giaban = $row['giaban'];
                        $url = escape($row['linkurl']);
                        $link = str_replace(",", "", strtolower("san-pham/$url-$id"));

                        ?>
                        <div class="col-6 col-md-3" style="padding-left: 10px !important; padding-right: 10px !important;">
                            <div
                                class="product-default inner-quickview inner-icon border p-3 rounded shadow-sm bg-white h-100">
                                <figure class="position-relative">
                                    <a href="<?php echo $link ?>">
                                        <img src="<?php echo $link_hinh; ?>" class="img-fluid d-block mx-auto rounded"
                                            style="width: 100%; object-fit: contain;" alt="<?php echo $tieude; ?>">
                                    </a>
                                </figure>

                                <div class="product-details text-center mt-3">
                                    <p class="product-title fw-bold">
                                        <a href="<?php echo $link; ?>" class="text-dark text-decoration-none">
                                            <h3 style="font-size: 16px;"><?php echo $tieude; ?></h3>
                                        </a>
                                    </p>
                                    <div class="price-box">
                                        <span class="product-price text-danger fw-bold">LIÊN HỆ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    ?>
                    <div class="bgphantranga">
                        <?php
                        function pagelist($current_page, $total_pages, $url, $id)
                        {
                            $output = '';

                            // Generate "Back" button
                            if ($current_page > 1) {
                                $previous_page = $current_page - 1;
                                $output .= "<a href='inan-danang/$previous_page' class='back'><i class='fa fa-arrow-left'></i></a>";
                            }

                            // Generate page numbers
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $current_page) {
                                    $output .= "<span class='current'>$i</span>";
                                } else {
                                    $output .= "<a href='inan-danang/$i'>$i</a>";
                                }
                            }

                            // Generate "Next" button
                            if ($current_page < $total_pages) {
                                $next_page = $current_page + 1;
                                $output .= "<a href='inan-danang/$next_page' class='next'><i class='fa fa-arrow-right'></i></a>";
                            }

                            return $output;
                        }

                        $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
                        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                        $total_pages = ceil($count / $limit);
                        $pagelist = pagelist($current_page, $total_pages, $url, $id);
                        echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: center;'> ";
                        echo $pagelist;
                        echo "</div>";
                        ?>
                    </div>




                </div>
            </div>
        </div>
        <!-- End .col-lg-9 -->
        <div class="sidebar-overlay"></div>
        <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar font2" style='margin-top: 40px;'>
            <div class="pinBox ">
                <?php
                include('menu_trai/leftsanpham.php');
                ?>
            </div>
        </aside>
    </div>
</div>
