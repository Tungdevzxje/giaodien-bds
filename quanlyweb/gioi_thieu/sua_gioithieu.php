<div class="ec-page-wrapper">
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>GIỚI THIỆU</h1>
                    <p class="breadcrumbs"><span><a href="">Quản lý</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Giới thiệu
                    </p>
                </div>
                <div>
                    <a href="quan_tri.php?p=danhsach_gioithieu" class="btn btn-primary"> Danh sách giới thiệu
                    </a>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST['luu'])) {
                    $today = date("d/m/Y");
                    include_once('db.php');
                    $id = $_REQUEST["id"];
                    $thuocloai = $_REQUEST["thuocloai"];
                    $tentaptin = $_FILES['txt_hinhanh']['name'];
                    $fileup = '';

                    if ($tentaptin != "") {
                        $fileup = "`hinhanh` = '$tentaptin',";
                    }
                    $noidung = mysqli_real_escape_string($link, $_POST['txt_noidung']);
                    $noidung_en = mysqli_real_escape_string($link, $_POST['txt_noidung_en']);
                    $tieude = mysqli_real_escape_string($link, $_POST['tieude']);
                    $tieude_en = mysqli_real_escape_string($link, $_POST['tieude_en']);
                    $trangchu = $_POST['trangchu'];
                    $mota = mysqli_real_escape_string($link, $_POST['mota']);
                    $tukhoa1 = mysqli_real_escape_string($link, $_POST['tukhoa1']);
                    $tukhoa2 = mysqli_real_escape_string($link, $_POST['tukhoa2']);
                    $linkurl = strtolower(khongdau(str_replace("'", "", $_POST['tieude'])));
                    $linkurl2 = strtolower(khongdau(str_replace("'", "", $_POST['tieude_en'])));
                    $mota_en = mysqli_real_escape_string($link, $_POST['mota_en']);

                    $truyvan = "UPDATE `gioi_thieu` SET $fileup
                    `noidung` = '$noidung',
                    `noidung_en` = '$noidung_en',
                    `trangchu` = '$trangchu',
                    `mota` = '$mota',
                    `mota_en` = '$mota_en',
                    `linkurl` = '$linkurl',
                    `linkurl2` = '$linkurl2',
                    `tukhoa1` = '$tukhoa1',
                    `tukhoa2` = '$tukhoa2',
                    `tieude_en` = '$tieude_en',
                    `tieude` = '$tieude' WHERE `id` = $id;";

                    $result = mysqli_query($link, $truyvan);
                    if ($result) {
                        if ($fileup != '') {
                            dichuyen_taptin_vaothumuc($tentaptin);
                        }
                        echo "Chúc mừng bạn Upload thành công thông tin";
                    } else {
                        echo "Upload không thành công. Bạn thử lại xem ";
                    }
                    echo "<script>window.location='quan_tri.php?p=danhsach_gioithieu&page=" . $_GET["page"] . "'</script>";

                }

                function dichuyen_taptin_vaothumuc($tentaptin)
                {
                    $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
                    if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/$tentaptin")) {
                        echo "Chúc mừng bạn Upload thành công thông tin ";
                    } else {
                        xoataptin($tentaptin);
                        echo "Chúc mừng bạn Upload thành công thông tin";
                    }
                }

                function xoataptin($tentaptin)
                {
                    include_once('db.php');
                    $truyvan = "DELETE FROM maykhoanda WHERE id = $masotaptin";
                    mysqli_query($link, $truyvan);
                }
                ?>
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Sửa giới thiệu</h2>
                        </div>
                        <div class="card-body">
                            <div class="row ec-vendor-uploads">
                                <?php
                                include('db.php');
                                $id = $_REQUEST["id"];
                                $result = mysqli_query($link, "SELECT * FROM gioi_thieu WHERE id = '$id'");
                                $row_dulieu_sua = mysqli_fetch_array($result);

                                $tieude = $row_dulieu_sua['tieude'];
                                $tieude_en = $row_dulieu_sua['tieude_en'];
                                $tukhoa1 = $row_dulieu_sua['tukhoa1'];
                                $tukhoa2 = $row_dulieu_sua['tukhoa2'];
                                $mota = $row_dulieu_sua['mota'];
                                $mota_en = $row_dulieu_sua['mota_en'];
                                $hinhanh = $row_dulieu_sua['hinhanh'];
                                $trangchu = $row_dulieu_sua['trangchu'];
                                $noidung = $row_dulieu_sua['noidung'];
                                $noidung_en = $row_dulieu_sua['noidung_en'];
                                $linkurl = $row_dulieu_sua['linkurl'];
                                $linkurl2 = $row_dulieu_sua['linkurl2'];
                                ?>
                                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-4">
                                        <div class="ec-vendor-img-upload">
                                            <div class="ec-vendor-main-img">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input name="txt_hinhanh" type='file' id="txt_hinhanh"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <input name="txt_hinhanh_hide" type="hidden" id="txt_hinhanh"
                                                            value="<?php echo "$hinhanh"; ?>" size="40" />

                                                        <label for="txt_hinhanh"><img src="assets/img/icons/edit.svg"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="avatar-preview ec-preview">
                                                        <div class="imagePreview ec-div-preview">
                                                            <img id="imagePreview"
                                                                src="<?php echo !empty($hinhanh) ? '../HinhCTSP/' . $hinhanh : 'assets/img/products/vender-upload-preview.jpg'; ?>"
                                                                alt="preview" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        document.getElementById("txt_hinhanh").addEventListener("change", function (event) {
                                            const reader = new FileReader();
                                            reader.onload = function () {
                                                document.getElementById("imagePreview").src = reader.result;
                                            };
                                            reader.readAsDataURL(event.target.files[0]);
                                        });
                                    </script>
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <label for="inputEmail4" class="form-label fw-bold">Tiêu
                                                        đề</label>
                                                    <input name="tieude" type="text" id="tieude" class="form-control"
                                                        size="90" maxlength="150" value="<?php echo "$tieude"; ?>" />
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="inputEmail4" class="form-label fw-bold">Tiêu
                                                        đề English</label>
                                                    <input name="tieude_en" type="text" id="tieude_en" class="form-control"
                                                        size="90" maxlength="150" value="<?php echo "$tieude_en"; ?>" />
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="inputEmail4" class="form-label fw-bold">Mô
                                                        tả</label>
                                                    <textarea name="mota" id="textarea" cols="70" class="form-control"
                                                        rows="5" maxlength="250"><?php echo "$mota"; ?></textarea>
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="inputEmail4" class="form-label fw-bold">Mô
                                                        tả English</label>
                                                    <textarea name="mota_en" id="textarea" cols="70" class="form-control"
                                                        rows="5" maxlength="250"><?php echo "$mota_en"; ?></textarea>
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="inputEmail4" class="form-label fw-bold">Từ khoá
                                                        1</label>
                                                    <input name="tukhoa1" type="text" id="tukhoa1" class="form-control"
                                                        size="90" maxlength="150" value="<?php echo "$tukhoa1"; ?>" />
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="inputEmail4" class="form-label fw-bold">Từ khoá
                                                        2</label>
                                                    <input name="tukhoa2" type="text" id="tukhoa2" class="form-control"
                                                        size="90" maxlength="150" value="<?php echo "$tukhoa2"; ?>" />
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <label class="form-label fw-bold">Nội dung</label>
                                                    <textarea name="txt_noidung" id="content_vi"
                                                        class="form-control"><?php echo "$noidung"; ?></textarea>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <label class="form-label fw-bold">Nội dung</label>
                                                    <textarea name="txt_noidung_en" id="content_en"
                                                        class="form-control"><?php echo "$noidung_en"; ?></textarea>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <!-- Nút lưu -->
                                                <div class="col-md-12 text-center mt-3">
                                                    <input name="luu" class="btn btn-primary px-4 py-2 fw-bold"
                                                        type="submit" id="luu" value="Lưu Lại" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var editor = CKEDITOR.replace('content_vi', {
        uiColor: '#e7e7e7',
        language: 'en',
        skin: 'moono',
        width: 'auto',
        height: 350,
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
</script>
<script type="text/javascript">
    var editor = CKEDITOR.replace('content_en', {
        uiColor: '#e7e7e7',
        language: 'en',
        skin: 'moono',
        width: 'auto',
        height: 350,
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
</script>