<div class="wrapper">
  <div class="ec-page-wrapper">
    <div class="ec-content-wrapper">
      <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
          <div>
            <h1>QUẢN LÝ DỊCH VỤ</h1>
            <p class="breadcrumbs"><span><a href="">Quản lý</a></span>
              <span><i class="mdi mdi-chevron-right"></i></span>Dịch vụ
            </p>
          </div>
          <div>
            <a href="quan_tri.php?p=ds_tin_dichvuu" class="btn btn-primary"> Xem tất cả
            </a>
          </div>
        </div>
        <div class="row">
          <?php
          if (isset($_POST['luu'])) {
            $today2 = date("D");
            $today = date("d");
            $today1 = date("m");
            $today3 = date("Y");
            $ngay = " $today/$today1/$today3 ";
            require('db.php');
            $file_name = $_FILES['txt_hinhanh']['name'];
            $file_hinhanh1 = $_FILES['txt_hinhanh1']['name'];
            $file_hinhanh2 = $_FILES['txt_hinhanh2']['name'];
            $file_hinhanh3 = $_FILES['txt_hinhanh3']['name'];
            $random_digit = rand(0000, 9999);
            $tentaptin = $_FILES['txt_hinhanh']['name'];
            $tenhinhanh1 = $random_digit . $file_hinhanh1;
            $tenhinhanh2 = $random_digit . $file_hinhanh2;
            $tenhinhanh3 = $random_digit . $file_hinhanh3;
            $tieude = mysqli_real_escape_string($link, $_POST['tieude']);
            $tieude_en = mysqli_real_escape_string($link, $_POST['tieude_en']);
            $mota = mysqli_real_escape_string($link, $_POST['mota']);
            $mota_en = mysqli_real_escape_string($link, $_POST['mota_en']);
            $noidung = mysqli_real_escape_string($link, $_POST['txt_noidung']);
            $noidung_en = mysqli_real_escape_string($link, $_POST['txt_noidung_en']);
            $tukhoa = mysqli_real_escape_string($link, $_POST['tukhoa']);
            $tukhoa2 = mysqli_real_escape_string($link, $_POST['tukhoa2']);
            $sale = mysqli_real_escape_string($link, !empty($_POST['sale']) ? $_POST['sale'] : 0);
            $hot = mysqli_real_escape_string($link, !empty($_POST['hot']) ? $_POST['hot'] : 0);
            $new = mysqli_real_escape_string($link, !empty($_POST['new']) ? $_POST['new'] : 0);
            $thuocloai = mysqli_real_escape_string($link, $_POST['cap_do']);
            $thuocloai = $_POST['cap_do'];
            $danhmuc = '1';
            $linkurl = strtolower(khongdau(str_replace("'", "", $_POST['tieude'])));
            upload($noidung, $tentaptin, $tenhinhanh1, $tenhinhanh2, $tenhinhanh3, $tieude, $mota, $trangchu, $thuocloai, $tieude_en,$mota_en,$noidung_en, $title, $tukhoa, $tukhoa2, $ngay, $linkurl);
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
                window.location = 'quan_tri.php?p=ds_tin_dichvuu&page=" . $page . "';
              }, 2000);
            </script>";
            exit;
          }
          function upload($noidung, $tentaptin, $tenhinhanh1, $tenhinhanh2, $tenhinhanh3, $tieude, $mota, $trangchu, $thuocloai, $tieude_en, $mota_en, $noidung_en, $title, $tukhoa, $tukhoa2, $ngay, $linkurl)
          {
            require('db.php');

            // Xử lý đặc biệt với ký tự trong câu truy vấn
            $truyvan = "INSERT INTO tin_dichvuu (`hinhanh`,`hinhanh1`,`hinhanh2`,`hinhanh3`,`noidung`,`trangchu`,`mota`,`tieude`, `tieude_en`,`mota_en`,`noidung_en`, `title`, `tukhoa`,`tukhoa2`,`ngay`,`linkurl`,`thuocloai`,`moi`) VALUES ( '$tentaptin', '$tenhinhanh1','$tenhinhanh2','$tenhinhanh3', '$noidung', '$trangchu', '$mota','$tieude', '$tieude_en','$mota_en','$noidung_en', '$title', '$tukhoa','$tukhoa2','$ngay', '$linkurl','$thuocloai','0')";

            $ketqua_truyvan = mysqli_query($link, $truyvan);
            if ($ketqua_truyvan) {
              if ($_FILES["txt_hinhanh"]["name"] != "") {
                dichuyen_taptin_vaothumuc($tentaptin);
              }
              if ($_FILES["txt_hinhanh1"]["name"] != "") {
                dichuyen_hinhanh1_vaothumuc($tenhinhanh1);
              }
              if ($_FILES["txt_hinhanh2"]["name"] != "") {
                dichuyen_hinhanh2_vaothumuc($tenhinhanh2);
              }
              if ($_FILES["txt_hinhanh3"]["name"] != "") {
                dichuyen_hinhanh3_vaothumuc($tenhinhanh3);
              }
            }
          }
          function dichuyen_taptin_vaothumuc($tentaptin)
          {
            $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
            if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tentaptin"))
              echo "Chúc mừng bạn Upload thành công";
            else {
              xoataptin($tentaptin);
              echo "Không thể copy tập tin  $tentaptin vào thư mục tài liệu";
            }
          }
          function dichuyen_hinhanh1_vaothumuc($tenhinhanh1)
          {
            $thumuctam_chuataptin = $_FILES['txt_hinhanh1']['tmp_name'];
            if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh1"))
              echo "Chúc mừng bạn Upload hình ảnh 1 thành công &nbsp;";
            else {
              xoataptin($tenhinhanh1);
              echo "Không thể copy tập tin  $tenhinhanh1 vào thư mục tài liệu";
            }
          }
          function dichuyen_hinhanh2_vaothumuc($tenhinhanh2)
          {
            $thumuctam_chuataptin = $_FILES['txt_hinhanh2']['tmp_name'];
            if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh2"))
              echo "Chúc mừng bạn Upload hình ảnh 2 thành công  &nbsp;";
            else {
              xoataptin($tenhinhanh2);
              echo "Không thể copy tập tin  $tenhinhanh2 vào thư mục tài liệu";
            }
          }
          function dichuyen_hinhanh3_vaothumuc($tenhinhanh3)
          {
            $thumuctam_chuataptin = $_FILES['txt_hinhanh3']['tmp_name'];
            if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh3"))
              echo "Chúc mừng bạn Upload hình ảnh 3 thành công";
            else {
              xoataptin($tenhinhanh3);
              echo "Không thể copy tập tin  $tenhinhanh3 vào thư mục tài liệu";
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
          <?php
          include('db.php');
          //$noi_dung=str_replace("\d","",$noi_dung);
          //echo $noi_dung;echo"<hr>";
          function hop_option()
          {
            include('db.php');
            $tv = "select * from loai_tin_dichvuu ORDER BY id ASC";
            $tv_1 = mysqli_query($link, $tv);
            echo "<select name=\"cap_do\" class=\"form-control\">";
            echo "<option value=\"\">--- Chọn loại dịch vụ ---</option>";
            while ($tv_2 = mysqli_fetch_array($tv_1)) {
              echo "<option value=" . $tv_2['id'] . ">";
              echo $tv_2['thuocloai'];
              echo "</option>";
            }
            echo "</select>";
          }
          ?>
          <div class="col-12">
            <div class="card card-default">
              <div class="card-header card-header-border-bottom">
                <h2>Thêm dịch vụ mới</h2>
              </div>
              <div class="card-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                  <div class="row ec-vendor-uploads">
                    <!-- Upload Ảnh -->
                    <div class="col-lg-4">
                      <div class="ec-vendor-img-upload">
                        <div class="ec-vendor-main-img">
                          <div class="avatar-upload">
                            <div class="avatar-edit">
                              <input name="txt_hinhanh" type="file" id="txt_hinhanh" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <label for="txt_hinhanh">
                                <img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                              </label>
                            </div>
                            <div class="avatar-preview ec-preview">
                              <div class="imagePreview ec-div-preview">
                                <img class="ec-image-preview" id="imagePreview"
                                  src="assets/img/products/hinhtintuc-hinhdichvu.jpg" alt="edit" />
                              </div>
                            </div>
                          </div>
                          <div class="thumb-upload-set colo-md-12">
                            <div class="thumb-upload">
                              <div class="thumb-edit">
                                <input name="txt_hinhanh1" type="file" id="txt_hinhanh1" class="ec-image-upload"
                                  accept=".png, .jpg, .jpeg" />
                                <label for="txt_hinhanh1"><img src="assets/img/icons/edit.svg"
                                    class="svg_img header_svg" alt="edit" /></label>
                              </div>
                              <div class="thumb-preview ec-preview">
                                <div class="image-thumb-preview">
                                  <img class="image-thumb-preview ec-image-preview"
                                    src="assets/img/products/hinhsanpham.jpg" alt="edit" />
                                </div>
                              </div>
                            </div>
                            <div class="thumb-upload">
                              <div class="thumb-edit">
                                <input name="txt_hinhanh2" type="file" id="txt_hinhanh2" class="ec-image-upload"
                                  accept=".png, .jpg, .jpeg" />
                                <label for="txt_hinhanh2"><img src="assets/img/icons/edit.svg"
                                    class="svg_img header_svg" alt="edit" /></label>
                              </div>
                              <div class="thumb-preview ec-preview">
                                <div class="image-thumb-preview">
                                  <img class="image-thumb-preview ec-image-preview"
                                    src="assets/img/products/hinhsanpham.jpg" alt="edit" />
                                </div>
                              </div>
                            </div>
                            <div class="thumb-upload">
                              <div class="thumb-edit">
                                <input name="txt_hinhanh3" type="file" id="txt_hinhanh3" class="ec-image-upload"
                                  accept=".png, .jpg, .jpeg" />
                                <label for="txt_hinhanh3"><img src="assets/img/icons/edit.svg"
                                    class="svg_img header_svg" alt="edit" /></label>
                              </div>
                              <div class="thumb-preview ec-preview">
                                <div class="image-thumb-preview">
                                  <img class="image-thumb-preview ec-image-preview"
                                    src="assets/img/products/hinhsanpham.jpg" alt="edit" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Thông tin tin tức -->
                    <div class="col-lg-8">
                      <div class="ec-vendor-upload-detail">
                        <div class="row">
                          <!-- Chọn loại -->
                          <div class="col-md-12">
                            <label class="form-label fw-bold">Chọn loại</label>
                            <?php hop_option(); ?>
                          </div>


                          <!-- Tiêu đề tin tức -->
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label fw-bold">Tiêu đề dịch vụ</label>
                            <input name="tieude" type="text" id="tieude" class="form-control" maxlength="70" />
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label fw-bold">Tiêu đề dịch vụ English</label>
                            <input name="tieude_en" type="text" id="tieude_en" class="form-control" maxlength="70" />
                          </div>

                          <!-- Mô tả ngắn -->
                          <div class="col-md-12 mt-3">
                            <label class="form-label fw-bold">Mô tả ngắn (160 - 300 ký tự)</label>
                            <textarea name="mota" id="textarea" class="form-control" rows="5"
                              maxlength="300"></textarea>
                          </div>
                          <div class="col-md-12 mt-3">
                            <label class="form-label fw-bold">Mô tả ngắn English (160 - 300 ký tự)</label>
                            <textarea name="mota_en" id="textarea" class="form-control" rows="5"
                              maxlength="300"></textarea>
                          </div>

                          <!-- Từ khoá 1 -->
                          <div class="col-md-12 mt-3">
                            <label for="tukhoa" class="form-label fw-bold">Từ khoá 1</label>
                            <input name="tukhoa" type="text" id="tukhoa" class="form-control" maxlength="160" />
                          </div>

                          <!-- Từ khoá 2 -->
                          <div class="col-md-12 mt-3">
                            <label for="tukhoa2" class="form-label fw-bold">Từ khoá 2</label>
                            <input name="tukhoa2" type="text" id="tukhoa2" class="form-control" maxlength="160" />
                          </div>

                          <!-- Nội dung chi tiết -->
                          <div class="col-md-12 mt-3">
                            <label class="form-label fw-bold">Nội dung chi tiết</label>
                            <textarea name="txt_noidung" id="content_vi" class="form-control"></textarea>
                          </div>
                          <div class="col-md-12 mt-3">
                            <label class="form-label fw-bold">Nội dung chi tiết English</label>
                            <textarea name="txt_noidung_en" id="content_en" class="form-control"></textarea>
                          </div>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <!-- Nút lưu -->
                          <div class="col-md-12 text-center mt-3">
                            <input name="luu" class="btn btn-success px-4 py-2 fw-bold" type="submit" id="luu"
                              value="Lưu Lại" />
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
