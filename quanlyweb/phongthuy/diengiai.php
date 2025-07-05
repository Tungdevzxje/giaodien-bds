<!-- PAGE WRAPPER -->
<div class="ec-page-wrapper">

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>DANH SÁCH DIỄN GIẢI</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Trang chủ</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Phong thuỷ
                        <span><i class="mdi mdi-chevron-right"></i></span>Danh sách diễn giải
                    </p>
                </div>
                <div>
                    <a href="quan_tri.php?p=them_diengiai" class="btn btn-primary"> Thêm diễn giải</a>
                </div>
            </div>
            <div class="row">
                <?php
                require('db.php');

                // Count total rows in diengiai
                $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM banmenh"));
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
                        window.location = "quan_tri.php?p=diengiai&page=<?php echo $_GET['page']; ?>"
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
                        window.location = "quan_tri.php?p=diengiai&list_id=" + list_id;
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

                        if (($curpage != 1) && ($curpage)) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=diengiai&page=1\" title=\"Trang đầu\" style='margin:4px;'> << </a>";
                        }
                        if ($curpage - 1 > 0) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=diengiai&page=" . ($curpage - 1) . "\" title=\"Về trang trước\" style='margin:4px;'><font color='#00ccff'> < </font></a>";
                        }
                        for ($i = 1; $i <= $pages; $i++) {
                            if ($i == $curpage) {
                                $page_list .= "<b>" . $i . "</b>";
                            } else {
                                $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=diengiai&page=" . $i . "\" title=\"Trang " . $i . "\" style='margin:4px;'><font color='red'>[" . $i . "]</font></a>";
                            }
                            $page_list .= "";
                        }
                        if (($curpage + 1) <= $pages) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=diengiai&page=" . ($curpage + 1) . "\" title=\"Đến trang sau\" style='margin:4px;' ><font color='#00ccff'> > </font></a>";
                        }
                        if (($curpage != $pages) && ($pages != 0)) {
                            $page_list .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?p=diengiai&page=" . $pages . "\" title=\"Trang cuối\" > >> </a>";
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

                            $next_prev = "<a href=\"?p=diengiai&page=" . ($curpage - 1) . "\">Back</a>";
                        }
                        $next_prev .= "|";
                        if (($curpage + 1) > $page) {
                            $next_prev .= "Next";
                        } else {
                            $next_prev = "<a href=\"?p=diengiai&page=" . ($curpage + 1) . "\">Next</a>";
                        }
                        return $next_prev;
                    }
                }
                ?>

                <?php
                // kết nối CSDL
                require('db.php');
                $p = new pager;
                $limit = 20;
                $start = $p->findStart($limit);
                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM banmenh"));
                $pages = $p->findPages($count, $limit);
                $result = mysqli_query($link, "SELECT * FROM banmenh ORDER BY id DESC limit $start,$limit");
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
                                            <th>Năm sinh</th>
                                            <th>Giới tính</th>
                                            <th>Mệnh</th>
                                            <th>Quẻ</th>
                                            <th>Thuộc</th>
                                            <th>Hướng</th>
                                            <th>Xóa</th>
                                            <th>Sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        while ($row = mysqli_fetch_object($result)) {
                                            $i++;
                                            $id = $row->id;
                                            $huong = $row->huong;
                                            $namsinh = $row->namsinh;
                                            $gioitinh = $row->gioitinh;
                                            if ($gioitinh == 1) {
                                                $gioitinh = "Nam";
                                            } else {
                                                $gioitinh = "Nữ";
                                            }
                                            $gia = $row->gia;
                                            $menh = $row->menh;
                                            $que = $row->que;
                                            $sql3 = mysqli_query($link, "select * from huong where id='" . $huong . "'");
                                            $loai = mysqli_fetch_array($sql3);
                                            $thuoc = $row->thuoc;
                                            $huong = $loai['huong'];
                                            $mota = $row->mota;
                                            $noidung = $row->noidung;
                                            //$trangthai_han=$row->trangthai_han;
                                            $sort = $row->sort;
                                            $noibat = $row->noibat;
                                            $hinhanh = "../Hinh CTSP/" . $row->hinhanh;
                                            $hinhanh = "<img src='$hinhanh' width='40' height='20' '>";
                                            ?>
                                            <tr>
                                                <td><?php echo "$id"; ?></td>
                                                <td><?php echo "$namsinh"; ?></td>
                                                <td><?php echo "$gioitinh"; ?></td>
                                                <td><?php echo "$menh"; ?></td>
                                                <td><?php echo "$que"; ?></td>
                                                <td><?php echo "$thuoc"; ?></td>
                                                <td><?php echo "$huong"; ?></td>
                                                <td>
                                                    <a href="quan_tri.php?p=xoa_diengiai&id=<?= $id ?>"
                                                        onclick="return confirm('Bạn có muốn xóa thông tin này ?')">
                                                        <button class="btn btn-danger">Xóa</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="quan_tri.php?p=sua_diengiai&id=<?= $id ?>&thuocloai=1&page=<?= $_GET['page'] ?>">
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