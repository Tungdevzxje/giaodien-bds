<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>
<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="trangchu">
                            <img src="hinhmenu/chu-ky-so-danang.gif" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao
                    bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo
                    cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <!-- <h4>Thông tin liên hệ</h4> -->
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">26, Nguyễn Duy, P. Khuê
                                    Trung, Q. Cẩm Lệ, Tp. Đà Nẵng</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:kinhdoanhatv@gmail.com">kinhdoanhatv@gmail.com</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Thứ 2 - Thứ 7, 8:00 - 17:00</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:0799454348">0799 454 348</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Area Start -->
<header class="header-section-3">
    <div id="banner-top" class="banner-container">
        <!-- Bên trái -->
        <div class="banner-column">
            <img src="hinhmenu/inan-logo.png" alt="Logo ATV">
        </div>

        <!-- Giữa -->
        <div class="banner-column center">
            <div class="search-wrapper">
                <div class="search-bar">
                    <input type="text" id="searchBox" placeholder="Tìm kiếm sản phẩm..." autocomplete="off" />
                    <button class="btn-search"><b>TÌM ẤN PHẨM</b></button>
                </div>
                <div id="suggestionBox" class="suggestion-box"></div>
            </div>
        </div>

        <!-- Bên phải -->
        <div class="banner-column">
            <img src="hinhmenu/1.png" alt="Banner 1">
            <img src="hinhmenu/2.png" alt="Banner 2">
        </div>
    </div>

    <style>
        .banner-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 10px 0;
            flex-wrap: nowrap;
        }

        .banner-column {
            flex: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-column.center {
            flex: 2;
        }

        .banner-column img {
            max-height: 70px;
            height: auto;
            width: auto;
            object-fit: contain;
            margin: 0 5px;
        }

        .search-wrapper {
            width: 100%;
            max-width: 600px;
        }

        .search-bar {
            display: flex;
            width: 100%;
        }

        #searchBox {
            flex: 1;
            padding: 15px 15px;
            font-size: 16px;
            color: #1f7f5c;
            border: 1px solid #ccc;
            border-right: none;
            border-radius: 6px 0 0 6px;
            outline: none;
            box-sizing: border-box;
        }

        .btn-search {
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            background-color: #1f7f5c;
            color: white;
            border-radius: 0 6px 6px 0;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-search:hover {
            background-color: #155f47;
        }

        #suggestionBox {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #fff;
            border: 1px solid #ccc;
            border-top: none;
            max-height: 300px;
            overflow-y: auto;
            z-index: 1000;
            border-radius: 0 0 6px 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>



    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="trangchu">
                                <img src="hinhmenu/chu-ky-so-danang.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và
                        bao
                        bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn
                        hảo
                        cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Thông tin liên hệ</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">26, Nguyễn Duy, P. Khuê
                                        Trung, Q. Cẩm Lệ, Tp. Đà Nẵng</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:kinhdoanhatv@gmail.com">kinhdoanhatv@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Thứ 2 - Thứ 7, 8:00 - 17:00</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:0799454348">0799 454 348</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Area Start -->
    <header class="header-section-3">
        <div id="banner-top" class="container slideDown hide-on-mobile" role="alert"
            style="display: flex; align-items: center; justify-content: space-between; height: auto; margin-top: 10px; margin-bottom: 10px; ">
            <img style=" width:10%; height: auto;" src="hinhmenu/chu-ky-so-danang.png" alt="thành lập công ty đà nẵng">
            <div class="wave-wrapper" id="waveText">
                CÔNG TY TNHH IN ẤN ATV
            </div>

            <div style="text-align: right; display: flex; gap: 10px;">
                <a href="tel:0799454348">
                    <button class="btn btn-primary" style="margin: 0; padding: 10px 20px; border-radius: 25px; background: linear-gradient(90deg, #0051ff, #0072ff)
; border: none; font-size: 16px;color:#fff;">
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i> <b>0799 454 348</b>
                    </button>
                </a>
            </div>
            <button class="open-popup btn btn-primary"
                style="margin: 0; padding: 10px 20px; border-radius: 25px; background: linear-gradient(90deg, #0051ff, #0072ff); border: none; font-size: 16px;color:#fff;"
                onclick="openPopup()"><b><i class="fa fa-mobile" aria-hidden="true"></i> Nhận Tư Vấn / Báo Giá
                </b></button>
            <div class="popup-overlay" id="popup">
                <div class="popup-content">
                    <span class="close-popup" onclick="closePopup()">&times;</span>
                    <div class="popup-body">
                        <div class="popup-form">
                            <div style="color: #fff; font-size: 2rem; font-weight: bold;">NHẬP THÔNG TIN LIÊN HỆ</div>
                            <form id="tt_mh" name="tt_mh" method="post" action="xulylienhe/xuly_lienhe.php"
                                onsubmit="return checkInput();">
                                <div class="row">
                                    <!-- Honeypot: Người dùng không thấy nhưng bot sẽ điền -->
                                    <input type="text" name="email_fake" id="email_fake" style="display: none;"
                                        autocomplete="off">
                                    <input type="text" name="phone_fake" id="phone_fake" style="display: none;"
                                        autocomplete="off">
                                    <input type="text" name="name_fake" id="name_fake" style="display: none;"
                                        autocomplete="off">
                                    <input class="form-control mt-2" type="text" name="txt_hoten" id="txt_hoten"
                                        required placeholder="Họ và Tên...">
                                    <input class="form-control mt-2" type="text" name="txt_dt" id="txt_dt" required
                                        placeholder="Số Điện Thoại...">
                                    <textarea class="form-control mt-2 form-control-message" type="text" name="txt_nd"
                                        id="txt_nd" placeholder="Nội Dung..." rows="10"></textarea>
                                    <button class="mt-2" name="luu" type="submit" id="luu">ĐĂNG KÝ DỊCH VỤ</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-4">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="">IN ẤN ATV</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="an-pham-van-phong" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    ẤN PHẨM VĂN PHÒNG
                                </a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item" href="danh-muc/danh-thiep">Danh Thiếp -
                                                Namecards</a>
                                        </li>
                                        <?php
                                        $tv1 = "SELECT * FROM ma_sanpham WHERE thuocloai = 6 ORDER BY id ASC limit 5";
                                        $tv_11 = mysqli_query($link, $tv1);
                                        while ($row = mysqli_fetch_array($tv_11)) {
                                            $id = $row['id'];
                                            $tieude = $row['tieude'];
                                            $url = $row['linkurl'];
                                            $product_link = str_replace("?", "", strtolower("chi-tiet/$url-$id"));
                                            ?>
                                            <li><a class="dropdown-item"
                                                    href="<?php echo "$product_link"; ?>"><?php echo "$tieude"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bao Thư - Thiệp Mời</a></li>
                                        <?php
                                        $tv1 = "SELECT * FROM ma_sanpham WHERE thuocloai = 7 ORDER BY id ASC limit 5";
                                        $tv_11 = mysqli_query($link, $tv1);
                                        while ($row = mysqli_fetch_array($tv_11)) {
                                            $id = $row['id'];
                                            $tieude = $row['tieude'];
                                            $url = $row['linkurl'];
                                            $product_link = str_replace("?", "", strtolower("chi-tiet/$url-$id"));
                                            ?>
                                            <li><a class="dropdown-item"
                                                    href="<?php echo "$product_link"; ?>"><?php echo "$tieude"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bìa Đựng Hồ Sơ - Folders</a></li>
                                        <?php
                                        $tv1 = "SELECT * FROM ma_sanpham WHERE thuocloai = 8 ORDER BY id ASC limit 5";
                                        $tv_11 = mysqli_query($link, $tv1);
                                        while ($row = mysqli_fetch_array($tv_11)) {
                                            $id = $row['id'];
                                            $tieude = $row['tieude'];
                                            $url = $row['linkurl'];
                                            $product_link = str_replace("?", "", strtolower("chi-tiet/$url-$id"));
                                            ?>
                                            <li><a class="dropdown-item"
                                                    href="<?php echo "$product_link"; ?>"><?php echo "$tieude"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="an-pham-van-phong" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    ẤN PHẨM QUÀ TẶNG
                                </a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item" href="danh-muc/danh-thiep">Kỷ Niệm Chương</a>
                                        </li>
                                        <?php
                                        $tv1 = "SELECT * FROM tin_dichvu WHERE thuocloai = 2 ORDER BY id ASC limit 5";
                                        $tv_11 = mysqli_query($link, $tv1);
                                        while ($row = mysqli_fetch_array($tv_11)) {
                                            $id = $row['id'];
                                            $tieude = $row['tieude'];
                                            $url = $row['linkurl'];
                                            $product_link = str_replace("?", "", strtolower("qua-tang/$url-$id"));
                                            ?>
                                            <li><a class="dropdown-item"
                                                    href="<?php echo "$product_link"; ?>"><?php echo "$tieude"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bảng Tên Nhôm - Inox - Đồng</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bìa Đựng Hồ Sơ</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="an-pham-van-phong" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    ẤN PHẨM BAO BÌ
                                </a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item" href="danh-muc/danh-thiep">Danh Thiếp -
                                                Namecards</a>
                                        </li>
                                        <?php
                                        $tv1 = "SELECT * FROM ma_sanpham WHERE thuocloai = 6 ORDER BY id ASC limit 5";
                                        $tv_11 = mysqli_query($link, $tv1);
                                        while ($row = mysqli_fetch_array($tv_11)) {
                                            $id = $row['id'];
                                            $tieude = $row['tieude'];
                                            $url = $row['linkurl'];
                                            $product_link = str_replace("?", "", strtolower("chi-tiet/$url-$id"));
                                            ?>
                                            <li><a class="dropdown-item"
                                                    href="<?php echo "$product_link"; ?>"><?php echo "$tieude"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bao Thư - Thiệp Mời</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bìa Đựng Hồ Sơ</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="an-pham-van-phong" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    ẤN PHẨM KHÁC
                                </a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item" href="danh-muc/danh-thiep">Danh Thiếp -
                                                Namecards</a>
                                        </li>
                                        <?php
                                        $tv1 = "SELECT * FROM ma_sanpham WHERE thuocloai = 6 ORDER BY id ASC limit 5";
                                        $tv_11 = mysqli_query($link, $tv1);
                                        while ($row = mysqli_fetch_array($tv_11)) {
                                            $id = $row['id'];
                                            $tieude = $row['tieude'];
                                            $url = $row['linkurl'];
                                            $product_link = str_replace("?", "", strtolower("chi-tiet/$url-$id"));
                                            ?>
                                            <li><a class="dropdown-item"
                                                    href="<?php echo "$product_link"; ?>"><?php echo "$tieude"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bao Thư - Thiệp Mời</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                    </ul>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Bìa Đựng Hồ Sơ</a></li>
                                        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dichvu-inan-danang">
                                    TIN TỨC
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lien-he">
                                    LIÊN HỆ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <script>
        const waveContainer = document.getElementById("waveText");
        const text = waveContainer.textContent;
        waveContainer.textContent = "";

        text.split("").forEach((char, i) => {
            const span = document.createElement("span");
            span.textContent = char;
            span.style.animationDelay = `${i * 0.1}s`;
            waveContainer.appendChild(span);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popup = document.getElementById("popup");

            const popupDelay = 5000;
            const popupCooldown = 10 * 60 * 1000;

            const lastShown = localStorage.getItem("popupLastShown");

            if (!lastShown || Date.now() - lastShown > popupCooldown) {
                setTimeout(() => {
                    popup.classList.add("show");
                    const now = Date.now();
                    localStorage.setItem("popupLastShown", now);

                    const nextTime = new Date(now + popupCooldown);
                    console.log("Lần tiếp theo popup sẽ hiện sau:", nextTime.toLocaleString());
                }, popupDelay);
            } else {
                const nextTime = new Date(parseInt(lastShown) + popupCooldown);
                console.log(nextTime.toLocaleString());
            }


            if (!lastShown || Date.now() - lastShown > popupCooldown) {
                setTimeout(() => {
                    popup.classList.add("show");
                    localStorage.setItem("popupLastShown", Date.now());
                }, popupDelay);
            }


            document.querySelector(".open-popup").addEventListener("click", function () {
                popup.classList.add("show");
            });

            document.querySelector(".close-popup").addEventListener("click", function () {
                popup.classList.remove("show");
            });

            popup.addEventListener("click", function (event) {
                if (event.target === popup) {
                    popup.classList.remove("show");
                }
            });
        });


    </script>

    <script>
        function checkInput() {
            const hoten = document.getElementById('txt_hoten').value.trim();
            const sdt = document.getElementById('txt_dt').value.trim();
            const nd = document.getElementById('txt_nd').value.trim();

            // Honeypot checks
            if (
                document.getElementById('email_fake').value !== '' ||
                document.getElementById('phone_fake').value !== '' ||
                document.getElementById('name_fake').value !== ''
            ) {
                console.warn("Bot detected.");
                return false;
            }

            const nameRegex = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểẾỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỳỵỷỹýỲỴỶỸ\s]{2,100}$/;
            const sdtRegex = /^[0-9\-\+\s]{10,11}$/;

            if (hoten === '' || sdt === '') {
                alert("Vui lòng điền đầy đủ Họ Tên và Số Điện Thoại.");
                return false;
            }

            if (!sdtRegex.test(sdt)) {
                alert("Số điện thoại không hợp lệ.");
                return false;
            }
            if (!nameRegex.test(hoten)) {
                alert("Vui lòng nhập họ tên hợp lệ.");
                return false;
            }

            return true;
        }
    </script>