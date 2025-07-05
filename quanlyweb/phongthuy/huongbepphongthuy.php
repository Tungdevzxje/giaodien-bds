<!-- PAGE WRAPPER -->
<div class="ec-page-wrapper">

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>DANH SÁCH HƯỚNG BẾP PHONG THUỶ</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Trang chủ</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Phong thuỷ
                        <span><i class="mdi mdi-chevron-right"></i></span>Danh sách hướng bếp phong thuỷ
                    </p>
                </div>
                <div>
                    <a href="quan_tri.php?p=them_huongbepphongthuy" class="btn btn-primary"> Thêm hướng bếp phong
                        thuỷ</a>
                </div>
            </div>
            <div class="row">
                <?php
                require('db.php');

                // Count total rows in huongbepphongthuy
                $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM huong_bep_phong_thuy"));
                $all = $count;

                if (isset($_REQUEST['list_id']) && $_REQUEST['list_id'] != '') {
                    $list_id = $_REQUEST['list_id'];
                    $list_id = substr($list_id, 0, strlen($list_id) - 1);
                    $del_pic_id = explode(',', $list_id);
                    for ($i = 0; $i < count($del_pic_id); $i++) {
                        $sql = "SELECT * FROM banmenh WHERE id = '" . mysqli_real_escape_string($link, $del_pic_id[$i]) . "'";
                        $result = mysqli_query($link, $sql);
                    }
                    $delete_query = 'DELETE FROM banmenh WHERE id IN(' . mysqli_real_escape_string($link, $list_id) . ')';
                    mysqli_query($link, $delete_query);
                    ?>
                    <script>
                        window.location = "quan_tri.php?p=huongbepphongthuy&page=<?php echo $_GET['page']; ?>"
                    </script>
                    <?php
                }
                ?>
                <!--<script type="text/JavaScript" src="../js/jquery.min.js"></script> -->
                <script language="javascript">
                    function delete_all_chosen() {

                        var list_id = '';
                        for (var i = 1; i <= <?php echo $all; ?>; i++) {
                            var a_checkbox = $('.a-checkbox_' + i);
                            if (a_checkbox.attr('checked') == 'checked') {
                                list_id += a_checkbox.val() + ',';
                            }
                        }
                        window.location = "quan_tri.php?p=huongbepphongthuy&list_id=" + list_id;
                        return true;
                    }
                </script>


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
                        $range = 3; // Số lượng trang hiển thị trước và sau trang hiện tại
                
                        if (($curpage != 1) && ($curpage)) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=1\" title=\"Trang đầu\" style='margin:4px;'> << </a>";
                        }

                        if ($curpage - 1 > 0) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=" . ($curpage - 1) . "\" title=\"Về trang trước\" style='margin:4px;'><font color='#00ccff'> < </font></a>";
                        }

                        if ($curpage > $range + 1) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=1\" title=\"Trang 1\" style='margin:4px;'><font color='red'>[1]</font></a>";
                            if ($curpage > $range + 2) { // Thêm dấu chấm lửng nếu có khoảng cách đáng kể
                                $page_list .= " ... ";
                            }
                        }

                        for ($i = 1; $i <= $pages; $i++) {
                            if ($i == $curpage) {
                                $page_list .= "<b>" . $i . "</b>";
                            } elseif ($i >= $curpage - $range && $i <= $curpage + $range) {
                                $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=" . $i . "\" title=\"Trang " . $i . "\" style='margin:4px;'><font color='red'>[" . $i . "]</font></a>";
                            }
                        }

                        if ($curpage < $pages - $range) {
                            if ($curpage < $pages - $range - 1) { // Thêm dấu chấm lửng nếu có khoảng cách đáng kể
                                $page_list .= " ... ";
                            }
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=" . $pages . "\" title=\"Trang " . $pages . "\" style='margin:4px;'><font color='red'>[" . $pages . "]</font></a>";
                        }

                        if (($curpage + 1) <= $pages) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=" . ($curpage + 1) . "\" title=\"Đến trang sau\" style='margin:4px;' ><font color='#00ccff'> > </font></a>";
                        }

                        if (($curpage != $pages) && ($pages != 0)) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=huongbepphongthuy&page=" . $pages . "\" title=\"Trang cuối\" > >> </a>";
                        }

                        $page_list .= "";
                        return $page_list;
                    }

                    function nextprev($curpage, $page)
                    {
                        $next_prev = "";
                        if (($curpage - 1) < 1) {
                            $next_prev .= "Back";
                        } else {
                            $next_prev = "<a href=\"?p=huongbepphongthuy&page=" . ($curpage - 1) . "\">Back</a>";
                        }
                        $next_prev .= "|";
                        if (($curpage + 1) > $page) {
                            $next_prev .= "Next";
                        } else {
                            $next_prev = "<a href=\"?p=huongbepphongthuy&page=" . ($curpage + 1) . "\">Next</a>";
                        }
                        return $next_prev;
                    }
                }
                ?>

                <?php
                // kết nối CSDL
                require('db.php');
                $p = new pager;
                $limit = 100;
                $start = $p->findStart($limit);
                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM huong_bep_phong_thuy"));
                $pages = $p->findPages($count, $limit);
                $result = mysqli_query($link, "SELECT * FROM huong_bep_phong_thuy ORDER BY id DESC limit $start,$limit");
                $stt = 1;
                ?>

                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th>STT</th>
                                            <th>Ngày sinh</th>
                                            <th>Tháng sinh</th>
                                            <th>Năm sinh</th>
                                            <th>Giới tính</th>
                                            <th>Hướng nhà</th>
                                            <th>Xóa</th>
                                            <th>Sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        while ($row = mysqli_fetch_object($result)) {
                                            $stt++; // Sử dụng $stt thay vì $i để tăng số thứ tự dòng
                                            $id = $row->id;
                                            $ngaysinh = $row->ngaysinh;
                                            $thangsinh = $row->thangsinh;
                                            $namsinh = $row->namsinh;
                                            $gioitinh = $row->gioitinh;
                                            if ($gioitinh == 1) {
                                                $gioitinh = "Nam";
                                            } else {
                                                $gioitinh = "Nữ";
                                            }
                                            $huongnha = $row->huongnha;
                                            $noidung = $row->noidung;
                                            $sort = $row->sort;
                                            $noibat = $row->noibat;
                                            $hinhanh = "../Hinh CTSP/" . $row->hinhanh;
                                            $hinhanh = "<img src='$hinhanh' width='40' height='20' '>";
                                            ?>
                                            <tr>
                                                <td><?php echo "$id"; ?></td>
                                                <td><?php echo "$ngaysinh"; ?></td>
                                                <td><?php echo "$thangsinh"; ?></td>
                                                <td><?php echo "$namsinh"; ?></td>
                                                <td><?php echo "$gioitinh"; ?></td>
                                                <td><?php echo "$huongnha"; ?></td>
                                                <td>
                                                    <a href="quan_tri.php?p=xoa_huongbepphongthuy&id=<?= $id ?>"
                                                        onclick="return confirm('Bạn có muốn xóa thông tin này ?')">
                                                        <button class="btn btn-danger">Xóa</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="quan_tri.php?p=sua_huongbepphongthuy&id=<?= $id ?>&thuocloai=1&page=<?= $_GET['page'] ?>">
                                                        <button class="btn btn-warning">Sửa</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php
                                $pagelist = $p->pageList($_GET['page'], $pages);
                                ?>
                                <p align="center">Trang: <?php echo $pagelist; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</div>