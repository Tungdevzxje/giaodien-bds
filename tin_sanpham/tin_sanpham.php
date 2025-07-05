<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href=''>Xu hướng nội thất 2024</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href=''>Xu hướng trang trí nhà cửa</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href=''>Cách bố trí nhà cửa theo phong thủy</a></h2>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href=''>Trang trí nội thất hiện đại</a></h3>
<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href=''>Kiến thức cơ bản về nội thất</a></h3>
<main class="fix">
    <?php

    class pager
    {

        function findStart($limit)
        {
            if (!isset($_GET['page']) || ($_GET['page'] == "1")) {
                $start = 0;
                $_GET['page'] = 1;
            } else {
                $start = ($_GET['page'] - 1) * $limit;
            }
            return $start;
        }
        function findPages($count, $limit)
        {
            $page = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
            return $page;
        }
        function pageList($curpage, $pages)
        {
            $page_list = "";

            if (($curpage != 1) && ($curpage)) {
                $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?thamso=tin_sanpham&page=1\" title=\"Trang d?u\" style='margin:4px;'> << </a>";
            }
            if ($curpage - 1 > 0) {
                $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?thamso=tin_sanpham&page=" . ($curpage - 1) . "\" title=\"V? trang tru?c\" style='margin:4px;'><font color='#00ccff'> < </font></a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == $curpage) {
                    $page_list .= "<b>" . $i . "</b>";
                } else {
                    $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?thamso=tin_sanpham&page=" . $i . "\" title=\"Trang " . $i . "\" style='margin:4px;'><font color='red'>[" . $i . "]</font></a>";
                }
                $page_list .= "";
            }
            if (($curpage + 1) <= $pages) {
                $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?thamso=tin_sanpham&page=" . ($curpage + 1) . "\" title=\"Ð?n trang sau\" style='margin:4px;' ><font color='#00ccff'> > </font></a>";
            }
            if (($curpage != $pages) && ($pages != 0)) {
                $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?thamso=tin_sanpham&page=" . $pages . "\" title=\"Trang cu?i\" > >> </a>";
            }
            $page_list .= "</td>\n";
            return $page_list;
        }
        function nextprev($curpage, $page)
        {
            $next_prev = "";
            if (($curpage - 1) < 0 || ($curpage - 1) != 1) {
                $next_prev .= "Back";
            } else {

                $next_prev = "<a href=\"tin_sanpham.php?p=1&page=" . ($curpage - 1) . "\">Back</a>";
            }
            $next_prev .= "|";
            if (($curpage + 1) > $page) {
                $next_prev .= "Next";
            } else {
                $next_prev = "<a href=\"tin_sanpham.php?p=1&page=" . ($curpage + 1) . "\">Next</a>";
            }
            return $next_prev;
        }
    }
    ?>
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="trang-chu">Trang Chủ</a></li>
                        <li>Kiến Thức</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- blog-area -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="block category-listing">
                        <p class="utf_block_title"><span>Kiến Thức</span></p>
                        <div class="row">
                            <?php

                            //include_once("phan_trang.php");
                            require('db.php');
                            // $ketnoi_maychu = ketnoi_MC();
                            //chon_CSDL($ketnoi_maychu);
                            $p = new pager;
                            $limit = 10;
                            $start = $p->findStart($limit);
                            $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_sanpham"));
                            $pages = $p->findPages($count, $limit);
                            $sql = mysqli_query($link, "SELECT * FROM tin_sanpham  ORDER BY  id DESC limit  $start,$limit");
                            // hi?n th? DL

                            while ($row = mysqli_fetch_array($sql)) {
                                $id = $row['id'];
                                $ten = $row['ten'];
                                $hinhanh = $row['hinhanh'];
                                $noidung = $row['noidung'];
                                $tieude = doikyty("$row[tieude]");
                                $tieude_en = doikyty("$row[tieude_en]");
                                $mota = doikyty("$row[mota]");
                                $masanpham = $row['masanpham'];
                                $trangthai = $row['trangthai'];
                                $trangthai_han = $row['trangthai_han'];
                                $trangthai_en = $row['trangthai_en'];
                                $trangthai_china = $row['trangthai_china'];
                                $tieude_china = $row['tieude_china'];
                                $ngay = $row['ngay'];
                                $url = khongdau($tieude);
                                $link = str_replace("?", "", "kien-thuc/$url-$id");
                            ?>
                                <div class="col-md-6">
                                    <div class="utf_post_block_style post-grid clearfix">
                                        <a href="<?php echo "$link"; ?>">
                                            <div class="utf_post_thumb"> <img class="img-fluid" src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>" /> </div>
                                        </a>
                                        <a class="utf_post_cat" href="#">worlddecoranl.com</a>
                                        <div class="utf_post_content">
                                            <div class="utf_post_title title-large"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a> </div>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">ANL</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i><?php echo "$ngay"; ?></span> <span class="post-comment pull-right"><i class="fa fa-comments-o"></i> <a href="#" class="comments-link"><span>03</span></a></span> </div>
                                            <p><?php echo "$mota"; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="bgphantranga">
                        <?php
                        function pagelist($current_page, $total_pages, $id)
                        {
                            $output = '';

                            // Generate "Back" button
                            if ($current_page > 1) {
                                $previous_page = $current_page - 1;
                                $output .= "<a href='chitiet.php?thamso=tin_sanpham&page=$previous_page' class='back'><i class='fa fa-arrow-left'></i></a>";
                            }

                            // Generate page numbers
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $current_page) {
                                    $output .= "<span class='current'>$i</span>";
                                } else {
                                    $output .= "<a href='chitiet.php?thamso=tin_sanpham&page=$i'>$i</a>";
                                }
                            }

                            // Generate "Next" button
                            if ($current_page < $total_pages) {
                                $next_page = $current_page + 1;
                                $output .= "<a href='chitiet.php?thamso=tin_sanpham&page=$next_page' class='next'><i class='fa fa-arrow-right'></i></a>";
                            }

                            return $output;
                        }

                        $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
                        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $total_pages = 2;
                        $pagelist = pagelist($current_page, $total_pages, $id);
                        echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Trang: ";
                        echo $pagelist;
                        echo "</div>";
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <?php
                    include('menu_trai/leftdichvu.php');
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
</main>