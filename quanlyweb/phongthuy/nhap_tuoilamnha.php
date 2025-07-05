<div class="wrapper">
    <div class="ec-page-wrapper">
        <div class="ec-content-wrapper">
            <div class="content">
                <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                    <div>
                        <h1>QUẢN LÝ TUỔI LÀM NHÀ</h1>
                        <p class="breadcrumbs"><span><a href="">Quản lý</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>Tuổi làm nhà
                        </p>
                    </div>
                    <div>
                        <a href="quan_tri.php?p=tuoilamnha" class="btn btn-primary"> Xem tất cả
                        </a>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if (isset($_POST['luu'])) {

                        require('database.php');
                        $id = $_POST['id'];
                        $namsinh = $_POST['namsinh'];
                        $gioitinh = $_POST['gioitinh'];
                        $namdukienlamnha = $_POST['namdukienlamnha'];
                        // $noidung = mysqli_real_escape_string($link, $_POST['txt_noidung']);
                        $noidung = $_POST['txt_noidung'];
                        //$thuocloai_en = $_POST['thuocloai_en'];
                        upload($namsinh, $gioitinh, $namdukienlamnha, $noidung);
                        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
                        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
                        echo "<script>
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'Đã lưu thành công!',
                            showConfirmButton: false,
                            timer: 2500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        });
                        setTimeout(() => {
                            window.location = 'quan_tri.php?p=tuoilamnha&page=" . $page . "';
                        }, 2000);
                        </script>";
                    }

                    function upload($namsinh, $gioitinh, $namdukienlamnha, $noidung)
                    {
                        require('db.php');
                        $truyvan = " INSERT INTO xemtuoilamnha(namsinh,gioitinh,namdukienlamnha,noidung) VALUES ('" . $namsinh . "'," . $gioitinh . ",'" . $namdukienlamnha . "','" . $noidung . "')";

                        $ketqua_truyvan = mysqli_query($link, $truyvan);
                        if ($ketqua_truyvan) {
                            if ($_FILES["txt_hinhanh"]["name"] != "") {
                                dichuyen_taptin_vaothumuc($tentaptin);
                            }
                        }
                    }

                    function dichuyen_taptin_vaothumuc($tentaptin)
                    {
                        $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
                        if (move_uploaded_file($thumuctam_chuataptin, "../Hinh CTSP/$tentaptin"))
                            echo "Chúc mừng bạn Upload thành công";
                        else {
                            xoataptin($tentaptin);
                            echo "Không thể copy tập tin  $tentaptin vào thư mục tài liệu";
                        }
                    }

                    function xoataptin($tentaptin)
                    {
                        require('db.php');
                        global $link;
                        $tentaptin = mysqli_real_escape_string($link, $tentaptin);
                        $truyvan = "DELETE FROM maykhoanda WHERE filename = '$tentaptin'";
                        $ketqua_truyvan = mysqli_query($link, $truyvan);
                        if ($ketqua_truyvan) {
                            echo "File deleted successfully.";
                        } else {
                            echo "Error deleting file: " . mysqli_error($link);
                        }
                    }
                    ?>
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-header card-header-border-bottom">
                                <h2>Thêm diễn giải mới</h2>
                            </div>
                            <div class="card-body">
                                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                                    <div class="row ec-vendor-uploads">
                                        <!-- Thông tin diễn giải -->
                                        <div class="col-lg-12">
                                            <div class="ec-vendor-upload-detail">
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <label for="inputEmail4" class="form-label fw-bold">Năm
                                                            sinh</label>
                                                        <input name="namsinh" type="text" id="namsinh"
                                                            class="form-control" maxlength="70" />
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label for="inputEmail4" class="form-label fw-bold">Giới
                                                            tính</label>
                                                        <label class="form-label fw-bold">
                                                            <select class="form-control" name="gioitinh" id="tieude2">
                                                                <option value="1">Nam</option>
                                                                <option value="0">Nữ</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="inputEmail4" class="form-label fw-bold">Năm dự kiến</label>
                                                        <input name="namdukienlamnha" type="text" id="namdukienlamnha" class="form-control"
                                                            maxlength="70" />
                                                    </div>
                                                    <!-- Nội dung chi tiết -->
                                                    <div class="col-md-12 mt-3">
                                                        <label class="form-label fw-bold">Nội dung chi tiết</label>
                                                        <textarea name="txt_noidung" id="content_vi"
                                                            class="form-control"></textarea>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <!-- Nút lưu -->
                                                    <div class="col-md-12 text-center mt-3">
                                                        <input name="luu" class="btn btn-success px-4 py-2 fw-bold"
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