hinhdi<div class="ec-page-wrapper">
  <div class="ec-content-wrapper">
    <div class="content">
      <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
          <h1>QUẢN LÝ dịch vụ</h1>
          <p class="breadcrumbs"><span><a href="">Quản lý</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Sửa dịch vụ
          </p>
        </div>
        <div>
          <a href="quan_tri.php?p=ds_tin_dichvuabc" class="btn btn-primary"> Xem tất cả
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
          include_once('db.php');
          $id = $_REQUEST["id"];
          $thuocloai = $_REQUEST["thuocloai"];
          $tentaptin = $_FILES["txt_hinhanh"]["name"];
          if ($tentaptin == "") {
            $tentaptin = $_POST["txt_hinhanh_hide"];
          }
          $tenhinhanh1 = $_FILES["txt_hinhanh1"]["name"];
          if ($tenhinhanh1 == "") {
            $tenhinhanh1 = $_POST["txt_hinhanh1_hide"];
          }
          $tenhinhanh2 = $_FILES["txt_hinhanh2"]["name"];
          if ($tenhinhanh2 == "") {
            $tenhinhanh2 = $_POST["txt_hinhanh2_hide"];
          }
          $tenhinhanh3 = $_FILES["txt_hinhanh3"]["name"];
          if ($tenhinhanh3 == "") {
            $tenhinhanh3 = $_POST["txt_hinhanh3_hide"];
          }
          $tenhinhanh4 = $_FILES["txt_hinhanh4"]["name"];
          if ($tenhinhanh4 == "") {
            $tenhinhanh4 = $_POST["txt_hinhanh4_hide"];
          }
          $tenhinhanh5 = $_FILES["txt_hinhanh5"]["name"];
          if ($tenhinhanh5 == "") {
            $tenhinhanh5 = $_POST["txt_hinhanh5_hide"];
          }
          $tenhinhanh6 = $_FILES["txt_hinhanh6"]["name"];
          if ($tenhinhanh6 == "") {
            $tenhinhanh6 = $_POST["txt_hinhanh6_hide"];
          }
          $tenhinhanh7 = $_FILES["txt_hinhanh7"]["name"];
          if ($tenhinhanh7 == "") {
            $tenhinhanh7 = $_POST["txt_hinhanh7_hide"];
          }
          $tenhinhanh8 = $_FILES["txt_hinhanh8"]["name"];
          if ($tenhinhanh8 == "") {
            $tenhinhanh8 = $_POST["txt_hinhanh8_hide"];
          }
          $tenhinhanh9 = $_FILES["txt_hinhanh9"]["name"];
          if ($tenhinhanh9 == "") {
            $tenhinhanh9 = $_POST["txt_hinhanh9_hide"];
          }
          $tenhinhanh10 = $_FILES["txt_hinhanh10"]["name"];
          if ($tenhinhanh10 == "") {
            $tenhinhanh10 = $_POST["txt_hinhanh10_hide"];
          }
          $noidung = mysqli_real_escape_string($link, $_POST['txt_noidung']);
          $noidung_en = mysqli_real_escape_string($link, $_POST['txt_noidung_en']);
          $tieude = mysqli_real_escape_string($link, $_POST['tieude']);
          $tieude_en = mysqli_real_escape_string($link, $_POST['tieude_en']);
          $mota = mysqli_real_escape_string($link, $_POST['mota']);
          $mota_en = mysqli_real_escape_string($link, $_POST['mota_en']);
          $tukhoa = mysqli_real_escape_string($link, $_POST['tukhoa']);
          $tukhoa2 = mysqli_real_escape_string($link, $_POST['tukhoa2']);
          $linkurl = strtolower(str_replace(",", "", khongdau(str_replace("'", "", $_POST['tieude']))));
          $linkurl2 = strtolower(str_replace(",", "", khongdau(str_replace("'", "", $_POST['tieude_en']))));
          $thuocloai = $_POST['thuocloai'];

          $truyvan = "UPDATE `tin_dichvuabc` SET $fileup
                    `thuocloai` = '$thuocloai',
                    `hinhanh`   ='$tentaptin',
                    `hinhanh1` ='$tenhinhanh1',
                    `hinhanh2` ='$tenhinhanh2',
                    `hinhanh3` ='$tenhinhanh3',
                    `hinhanh4` ='$tenhinhanh4',
                    `hinhanh5`   ='$tenhinhanh5',
                    `hinhanh6` ='$tenhinhanh6',
                    `hinhanh7` ='$tenhinhanh7',
                    `hinhanh8` ='$tenhinhanh8',
                    `hinhanh9`   ='$tenhinhanh9',
                    `hinhanh10` ='$tenhinhanh10',
                    `noidung` = '$noidung',
                    `noidung_en` = '$noidung_en',
                    `trangchu` = '',
                    `mota` = '$mota',
                    `mota_en` = '$mota_en',
                    `tieude` = '$tieude',
                    `tukhoa` = '$tukhoa',
                    `tukhoa2` = '$tukhoa2',
                    `linkurl` = '$linkurl',
                    `linkurl2` = '$linkurl2',
                    `ngay` = '$ngay',
                    `tieude_en` = '$tieude_en'
                     WHERE `id` = $id;";

          $result = mysqli_query($link, $truyvan);
          if ($result) {
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
            if ($_FILES["txt_hinhanh4"]["name"] != "") {
              dichuyen_hinhanh4_vaothumuc($tenhinhanh4);
            }
            if ($_FILES["txt_hinhanh5"]["name"] != "") {
              dichuyen_hinhanh5_vaothumuc($tenhinhanh5);
            }
            if ($_FILES["txt_hinhanh6"]["name"] != "") {
              dichuyen_hinhanh6_vaothumuc($tenhinhanh6);
            }
            if ($_FILES["txt_hinhanh7"]["name"] != "") {
              dichuyen_hinhanh7_vaothumuc($tenhinhanh7);
            }
            if ($_FILES["txt_hinhanh8"]["name"] != "") {
              dichuyen_hinhanh8_vaothumuc($tenhinhanh8);
            }
            if ($_FILES["txt_hinhanh9"]["name"] != "") {
              dichuyen_hinhanh9_vaothumuc($tenhinhanh9);
            }
            if ($_FILES["txt_hinhanh10"]["name"] != "") {
              dichuyen_hinhanh10_vaothumuc($tenhinhanh10);
            }

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
                window.location = 'quan_tri.php?p=ds_tin_dichvuabc&page=" . $_GET["page"] . "';
              }, 2000);
            </script>";

          }
        }
        function dichuyen_taptin_vaothumuc($tentaptin)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tentaptin")) {
            echo "Chúc mừng bạn Upload thành công thông tin ";

          } else {
            xoataptin($tentaptin);
            echo "Chúc mừng bạn Upload thành công thông tin";
          }
        }
        function dichuyen_hinhanh1_vaothumuc($tenhinhanh1)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh1"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh1")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh2_vaothumuc($tenhinhanh2)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh2"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh2")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh3_vaothumuc($tenhinhanh3)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh3"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh3")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh4_vaothumuc($tenhinhanh4)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh4"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh4")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh5_vaothumuc($tenhinhanh5)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh5"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh5")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh6_vaothumuc($tenhinhanh6)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh6"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh6")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh7_vaothumuc($tenhinhanh7)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh7"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh7")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh8_vaothumuc($tenhinhanh8)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh8"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh8")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh9_vaothumuc($tenhinhanh9)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh9"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh9")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function dichuyen_hinhanh10_vaothumuc($tenhinhanh10)
        {
          $thumuctam_chuataptin = $_FILES["txt_hinhanh10"]["tmp_name"];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/Hinhdichvu/$tenhinhanh10")) {
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công";
          }
        }
        function xoataptin($tentaptin)
        {
          include_once('db.php');
          $truyvan = "DELETE FROM maykhoanda WHERE id = $masotaptin";
          mysqli_query($link, $truyvan);
        }
        ?>
        <?php
        include('db.php');
        $id = $_REQUEST["id"];
        $result = mysqli_query($link, "SELECT * FROM tin_dichvuabc where id like '$id' ");
        $row_dulieu_sua = mysqli_fetch_array($result);
        $hinhanh = $row_dulieu_sua["hinhanh"];
        $hinhanh1 = $row_dulieu_sua["hinhanh1"];
        $hinhanh2 = $row_dulieu_sua["hinhanh2"];
        $hinhanh3 = $row_dulieu_sua["hinhanh3"];
        $hinhanh4 = $row_dulieu_sua["hinhanh4"];
        $hinhanh5 = $row_dulieu_sua["hinhanh5"];
        $hinhanh6 = $row_dulieu_sua["hinhanh6"];
        $hinhanh7 = $row_dulieu_sua["hinhanh7"];
        $hinhanh8 = $row_dulieu_sua["hinhanh8"];
        $hinhanh9 = $row_dulieu_sua["hinhanh9"];
        $hinhanh10 = $row_dulieu_sua["hinhanh10"];
        $tieude = $row_dulieu_sua['tieude'];
        $mota = $row_dulieu_sua['mota'];
        $mota_en = $row_dulieu_sua['mota_en'];
        $hinhanh = $row_dulieu_sua['hinhanh'];
        $tieude_en = $row_dulieu_sua['tieude_en'];
        $title = $row_dulieu_sua['title'];
        $tukhoa = $row_dulieu_sua['tukhoa'];
        $tukhoa2 = $row_dulieu_sua['tukhoa2'];
        $ngay = $row_dulieu_sua['ngay'];
        $linkurl = $row_dulieu_sua['linkurl'];
        $trangchu = $row_dulieu_sua['trangchu'];
        $noidung = $row_dulieu_sua['noidung'];
        $noidung_en = $row_dulieu_sua['noidung_en'];
        ?>
        <div class="col-12">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>Sửa dịch vụ</h2>
            </div>
            <div class="card-body">
              <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="row ec-vendor-uploads">
                  <div class="col-lg-4">
                    <div class="ec-vendor-img-upload">
                      <div class="ec-vendor-main-img">
                        <div class="avatar-upload">
                          <div class="avatar-edit">
                            <input name="txt_hinhanh" type='file' id="txt_hinhanh" class="ec-image-upload"
                              accept=".png, .jpg, .jpeg" />
                            <input name="txt_hinhanh_hide" type="hidden" id="txt_hinhanh_hide"
                              value="<?php echo $hinhanh; ?>" />
                            <label for="txt_hinhanh">
                              <img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                            </label>
                          </div>
                          <div class="avatar-preview ec-preview">
                            <div class="imagePreview ec-div-preview">
                              <img id="imagePreview"
                                src="<?php echo !empty($hinhanh) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh : 'assets/img/products/hinhtintuc-hinhdichvu.jpg'; ?>"
                                alt="preview" />
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
                        </div>
                        <div class="thumb-upload-set colo-md-12">
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh1" type='file' id="txt_hinhanh1" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh1_hide" type="hidden" id="txt_hinhanh1_hide"
                                value="<?php echo $hinhanh1; ?>" />
                              <label for="txt_hinhanh1"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image1Preview"
                                  src="<?php echo !empty($hinhanh1) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh1 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh1").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image1Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh2" type='file' id="txt_hinhanh2" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh2_hide" type="hidden" id="txt_hinhanh2_hide"
                                value="<?php echo $hinhanh2; ?>" />
                              <label for="txt_hinhanh2"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image2Preview"
                                  src="<?php echo !empty($hinhanh2) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh2 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh2").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image2Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh3" type='file' id="txt_hinhanh3" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh3_hide" type="hidden" id="txt_hinhanh3_hide"
                                value="<?php echo $hinhanh3; ?>" />
                              <label for="txt_hinhanh3"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image3Preview"
                                  src="<?php echo !empty($hinhanh3) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh3 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh3").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image3Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                        </div>
                        <div class="thumb-upload-set colo-md-12">
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh4" type='file' id="txt_hinhanh4" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh4_hide" type="hidden" id="txt_hinhanh4_hide"
                                value="<?php echo $hinhanh4; ?>" />
                              <label for="txt_hinhanh4"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image4Preview"
                                  src="<?php echo !empty($hinhanh4) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh4 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh4").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image4Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh5" type='file' id="txt_hinhanh5" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh5_hide" type="hidden" id="txt_hinhanh5_hide"
                                value="<?php echo $hinhanh5; ?>" />
                              <label for="txt_hinhanh5"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image5Preview"
                                  src="<?php echo !empty($hinhanh5) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh5 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh5").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image5Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh6" type='file' id="txt_hinhanh6" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh6_hide" type="hidden" id="txt_hinhanh6_hide"
                                value="<?php echo $hinhanh6; ?>" />
                              <label for="txt_hinhanh6"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image6Preview"
                                  src="<?php echo !empty($hinhanh6) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh6 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh6").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image6Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                        </div>
                        <div class="thumb-upload-set colo-md-12">
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh7" type='file' id="txt_hinhanh7" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh7_hide" type="hidden" id="txt_hinhanh7_hide"
                                value="<?php echo $hinhanh7; ?>" />
                              <label for="txt_hinhanh7"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image7Preview"
                                  src="<?php echo !empty($hinhanh7) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh7 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh7").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image7Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh8" type='file' id="txt_hinhanh8" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh8_hide" type="hidden" id="txt_hinhanh8_hide"
                                value="<?php echo $hinhanh8; ?>" />
                              <label for="txt_hinhanh8"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image8Preview"
                                  src="<?php echo !empty($hinhanh8) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh8 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh8").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image8Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh9" type='file' id="txt_hinhanh9" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh9_hide" type="hidden" id="txt_hinhanh9_hide"
                                value="<?php echo $hinhanh9; ?>" />
                              <label for="txt_hinhanh9"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image9Preview"
                                  src="<?php echo !empty($hinhanh9) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh9 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh9").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image9Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                        </div>
                        <div class="thumb-upload-set colo-md-12">
                          <div class="thumb-upload">
                            <div class="thumb-edit">
                              <input name="txt_hinhanh10" type='file' id="txt_hinhanh10" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg" />
                              <input name="txt_hinhanh10_hide" type="hidden" id="txt_hinhanh10_hide"
                                value="<?php echo $hinhanh10; ?>" />
                              <label for="txt_hinhanh10"><img src="assets/img/icons/edit.svg" class="svg_img header_svg"
                                  alt="edit" /></label>
                            </div>
                            <div class="thumb-preview ec-preview">
                              <div class="image-thumb-preview">
                                <img id="image10Preview"
                                  src="<?php echo !empty($hinhanh10) ? '../HinhCTSP/Hinhdichvu/' . $hinhanh10 : 'assets/img/products/hinhsanpham.jpg'; ?>"
                                  alt="preview" />
                              </div>
                            </div>
                            <script>
                              document.getElementById("txt_hinhanh10").addEventListener("change", function (event) {
                                const reader = new FileReader();
                                reader.onload = function () {
                                  document.getElementById("image10Preview").src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                       <p class="text-danger mt-2" style="font-size: 14px;">
                            <em> * Vui lòng upload ảnh cùng kích thước để tránh bị lệch bố cục hiển thị.</em>
                          </p>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="ec-vendor-upload-detail">
                      <div class="row gy-3">
                        <div class="col-md-5">
                          <label class="form-label fw-bold">Chọn loại</label>
                          <?php
                          $id = $_REQUEST["id"];
                          $sq = mysqli_query($link, "SELECT * FROM tin_dichvuabc where id=" . $id . "");
                          $loai = mysqli_fetch_array($sq);
                          ?>
                          <select name="thuocloai" class="form-control">
                            <?php
                            $selected = "";
                            $sql = mysqli_query($link, "SELECT * FROM loai_tin_dichvuabc ORDER BY id DESC");
                            while ($row = mysqli_fetch_array($sql)) {
                              if ($row['id'] == $loai['thuocloai']) {
                                $selected = "selected='selected'";
                              } else {
                                $selected = '';
                              }
                              ?>
                              <option value="<?= $row['id'] ?>" <?php echo $selected; ?>><?php echo $row['thuocloai'] ?>
                              </option>
                            <?php } ?>
                          </select>
                        </div>
                        <!-- Tiêu đề dịch vụ -->
                        <div class="col-md-7">
                          <label for="inputEmail4" class="form-label fw-bold">Tiêu đề dịch vụ</label>
                          <input name="tieude" type="text" id="tieude" class="form-control"
                            value="<?php echo "$tieude"; ?>" maxlength="70" />
                        </div>
                        <div class="col-md-7">
                          <label for="inputEmail4" class="form-label fw-bold">Tiêu đề dịch vụ English</label>
                          <input name="tieude_en" type="text" id="tieude_en" class="form-control"
                            value="<?php echo "$tieude_en"; ?>" maxlength="70" />
                        </div>

                        <!-- Mô tả ngắn -->
                        <div class="col-md-12 mt-3">
                          <label class="form-label fw-bold">Mô tả ngắn ( 160 - 300 ký tự)</label>
                          <textarea name="mota" class="form-control" maxlength="300"><?php echo $mota; ?></textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label class="form-label fw-bold">Mô tả ngắn English ( 160 - 300 ký tự)</label>
                          <textarea name="mota_en" class="form-control"
                            maxlength="300"><?php echo $mota_en; ?></textarea>
                        </div>

                        <!-- Từ khoá 1 -->
                        <div class="col-md-12 mt-3">
                          <label for="tukhoa" class="form-label fw-bold">Từ khoá 1</label>
                          <input name="tukhoa" type="text" id="tukhoa" value="<?php echo "$tukhoa"; ?>"
                            class="form-control" maxlength="160" />
                        </div>

                        <!-- Từ khoá 2 -->
                        <div class="col-md-12 mt-3">
                          <label for="tukhoa2" class="form-label fw-bold">Từ khoá 2</label>
                          <input name="tukhoa2" type="text" id="tukhoa2" class="form-control"
                            value="<?php echo "$tukhoa2"; ?>" maxlength="160" />
                        </div>

                        <!-- Nội dung chi tiết -->
                        <div class="col-md-12 mt-3">
                          <label class="form-label fw-bold">Nội dung chi tiết</label>
                          <textarea name="txt_noidung" id="txt_noidung" rows="10"
                            cols="50"><?php echo htmlspecialchars($noidung); ?></textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label class="form-label fw-bold">Nội dung chi tiết English</label>
                          <textarea name="txt_noidung_en" id="txt_noidung_en" rows="10"
                            cols="50"><?php echo htmlspecialchars($noidung_en); ?></textarea>
                        </div>

                        <!-- Nút lưu -->
                        <div class="col-md-12 text-center mt-3">
                          <input name="luu" class="btn btn-success" type="submit" id="luu" value="Lưu Lại" />
                        </div>
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


<script type="text/javascript">
  var editor = CKEDITOR.replace('txt_noidung', {
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
  var editor = CKEDITOR.replace('txt_noidung_en', {
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