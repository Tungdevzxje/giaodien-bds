<!-- Header Container
  ================================================== -->
<div id="banner-top" class="container slideDown hide-on-mobile" role="alert"
    style="display: flex; align-items: center; justify-content: space-evenly; height: auto; margin-top: 10px; margin-bottom: 10px;">
    <img style=" width:10%; height: auto;" src="hinhmenu/chu-ky-so-danang.gif" alt="thành lập công ty đà nẵng">
    <div class="wave-wrapper" id="waveText">
        CÔNG TY TNHH IN ẤN ATV
    </div>


    <style>
        .wave-wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            font-size: 2rem;
            font-weight: bold;
            color: #7000FE;
            gap: 5px;
        }

        .wave-wrapper span {
            display: inline-block;
            animation: bounce 1.5s infinite ease-in-out;
        }

        @keyframes bounce {

            0%,
            10% {
                transform: translateY(0);
            }

            30% {
                transform: translateY(-1px);
            }

            60% {
                transform: translateY(2px);
            }
        }
    </style>
    <script>
        const waveContainer = document.getElementById("waveText");
        const text = waveContainer.textContent;
        waveContainer.textContent = ""; // Clear nội dung cũ

        text.split("").forEach((char, i) => {
            const span = document.createElement("span");
            span.textContent = char;
            span.style.animationDelay = `${i * 0.1}s`; // Rãi delay theo từng chữ
            waveContainer.appendChild(span);
        });
    </script>


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
        onclick="openPopup()"><b><i class="fa fa-mobile" aria-hidden="true"></i> Nhận Tư Vấn / Báo Giá </b></button>
    <div class="popup-overlay" id="popup">
        <div class="popup-content">
            <span class="close-popup" onclick="closePopup()">&times;</span>
            <div class="popup-body">
                <div class="popup-form">
                    <div style="color: #fff; font-size: 2rem; font-weight: bold;">NHẬP THÔNG TIN LIÊN HỆ</div>
                    <form id="tt_mh" name="tt_mh" method="post" action="xulylienhe/xuly_lienhe.php"
                        onsubmit="return checkInput();">
                        <div class="row">
                            <input class="form-control mt-2" type="text" name="txt_hoten" id="txt_hoten" required
                                placeholder="Họ và Tên...">
                            <input class="form-control mt-2" type="text" name="txt_dt" id="txt_dt" required
                                placeholder="Số Điện Thoại...">
                            <textarea class="form-control mt-2 form-control-message" type="text" name="txt_nd"
                                id="txt_nd" placeholder="Nội Dung..." rows="10" required></textarea>
                            <button class="mt-2" name="luu" type="submit" id="luu">ĐĂNG KÝ DỊCH VỤ</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Navigation -->
<div class="mobile-menu-container">
    <button class="mobile-menu-btn">
        <i class="fa fa-bars"></i>
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="trangchu"><img style="width:70%; " src=" hinhmenu/chu-ky-so-danang.gif"
            alt="THÀNH LẬP DOANH NGHIỆP ĐÀ NẴNG"></a>
</div>

<nav class="mobile-menu">
    <button class="close-menu">&times;</button>
    <ul>
        <li><a href="trangchu">TRANG CHỦ</a></li>
        <li><a href="congtrinh-noibat">ẤN PHẨM VĂN PHÒNG</a></li>
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">ẤN PHẨM QUÀ TẶNG <span class="arrow">▼</span></a>
            <ul class="submenu">
                <?php
                $tv1 = "SELECT * FROM ma_sanpham where thuocloai = 3 ORDER BY id ASC";
                $tv_11 = mysqli_query($link, $tv1);
                while ($row = mysqli_fetch_array($tv_11)) {
                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude = "$row[tieude]";
                    $thuocloai = "$row[thuocloai]";
                    $mota = "$row[mota]";
                    $url = $row['linkurl'];
                    ?>
                        <li>
                            <a style="color:#9f5050" href="chi-tiet-<?php echo $url; ?>">
                                <i class='fas fa-tag'></i> <?php echo htmlspecialchars($tieude); ?>
                            </a>
                        </li>
                <?php } ?>
            </ul>
        </li>
        <li><a href="ho-so-nang-luc-ABM.pdf">ẤN PHẨM KHÁC</a></li>
        <li><a href="donvithietke-xaydung-lamdong">TIN TỨC</a></li>
        <li><a href="lien-he">LIÊN HỆ</a></li>
    </ul>
</nav>

<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="trangchu"><img src="hinhmenu/logo.png" data-sticky-logo="hinhmenu/logo.png"
                            alt="THÀNH LẬP CÔNG TY ĐÀ NẴNG"></a>
                </div>


                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="trangchu" class="<?php if ($title == 'trang-chu')
                            echo 'on'; ?>">TRANG
                                CHỦ</a></li>
                        <li class="mega-menu">
                            <a href="in-an-sanxuat">
                                ẤN PHẨM VĂN PHÒNG
                            </a>
                            <div class="mega-menu-content">
                                <?php
                                $tv1 = "SELECT * FROM ma_sanpham where thuocloai = 1 ORDER BY id ASC";
                                $tv_11 = mysqli_query($link, $tv1);

                                // Kiểm tra có dữ liệu hay không
                                if (mysqli_num_rows($tv_11) == 0) {
                                    echo '<p style="color:red;">Chưa có sản phẩm cho mục này</p>';
                                }

                                $count = 0;
                                echo '<div class="mega-menu-column">';
                                while ($row = mysqli_fetch_array($tv_11)) {
                                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude = "$row[tieude]";
                                    $thuocloai = "$row[thuocloai]";
                                    $mota = "$row[mota]";
                                    $url = $row['linkurl'];

                                    echo "<a href='chi-tiet-$url'><i class='fas fa-tag'></i> $tieude</a>";

                                    $count++;
                                    if ($count % 8 == 0) {
                                        echo '</div><div class="mega-menu-column">';
                                    }
                                }
                                echo '</div>';
                                ?>

                            </div>
                        </li>
                        <li class="mega-menu">
                            <a href="in-an-sanxuat">
                                ẤN PHẨM QUÀ TẶNG
                            </a>
                            <div class="mega-menu-content">
                                <?php
                                $tv1 = "SELECT * FROM ma_sanpham where thuocloai = 3 ORDER BY id ASC";
                                $tv_11 = mysqli_query($link, $tv1);

                                // Kiểm tra có dữ liệu hay không
                                if (mysqli_num_rows($tv_11) == 0) {
                                    echo '<p style="color:red;">Không có dữ liệu danh mục</p>';
                                }

                                $count = 0;
                                echo '<div class="mega-menu-column">';
                                while ($row = mysqli_fetch_array($tv_11)) {
                                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude = "$row[tieude]";
                                    $thuocloai = "$row[thuocloai]";
                                    $mota = "$row[mota]";
                                    $url = $row['linkurl'];

                                    echo "<a href='chi-tiet-$url'><i class='fas fa-tag'></i> $tieude</a>";

                                    $count++;
                                    if ($count % 8 == 0) {
                                        echo '</div><div class="mega-menu-column">';
                                    }
                                }
                                echo '</div>';
                                ?>

                            </div>
                        </li>
                        <li class="mega-menu">
                            <a href="in-an-sanxuat">
                                ẤN PHẨM KHÁC
                            </a>
                            <div class="mega-menu-content">
                                <?php
                                $tv1 = "SELECT * FROM ma_sanpham where thuocloai = 5 ORDER BY id ASC";
                                $tv_11 = mysqli_query($link, $tv1);

                                // Kiểm tra có dữ liệu hay không
                                if (mysqli_num_rows($tv_11) == 0) {
                                    echo '<p style="color:red;">Chưa có sản phẩm cho mục này</p>';
                                }

                                $count = 0;
                                echo '<div class="mega-menu-column">';
                                while ($row = mysqli_fetch_array($tv_11)) {
                                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude = "$row[tieude]";
                                    $thuocloai = "$row[thuocloai]";
                                    $mota = "$row[mota]";
                                    $url = $row['linkurl'];

                                    echo "<a href='chi-tiet-$url'><i class='fas fa-tag'></i> $tieude</a>";

                                    $count++;
                                    if ($count % 8 == 0) {
                                        echo '</div><div class="mega-menu-column">';
                                    }
                                }
                                echo '</div>';
                                ?>

                            </div>
                        </li>
                        <li><a href="donvithietke-xaydung-lamdong" class=" <?php if ($title == 'tin-tintuc')
                            echo 'on'; ?>">TIN
                                TỨC</a></li>
                        <li><a href="lien-he" class=" <?php if ($title == 'lien-he')
                            echo 'on'; ?>">LIÊN HỆ</a></li>
                    </ul>

                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- <div class="header-user-menu user-menu add">
                <a href="tel:0914454348">
                    <div class="btn"
                        style="border-radius: 20px; font-weight: bold; padding: 5px 10px; background-color: #FF385C; color: #fff;">
                        Hotline: 0914 454 348
                    </div>
                </a>
            </div> -->
            <!-- Left Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->

</header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuBtn = document.querySelector(".mobile-menu-btn");
        const mobileMenu = document.querySelector(".mobile-menu");
        const closeBtn = document.querySelector(".close-menu");

        if (menuBtn && mobileMenu && closeBtn) {
            menuBtn.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                mobileMenu.classList.toggle("open");
                console.log("Menu toggled:", mobileMenu.classList.contains("open"));
            });

            closeBtn.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                mobileMenu.classList.remove("open");
                console.log("Menu closed");
            });

            //             document.addEventListener("click", function (event) {
            //             if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
            //                 mobileMenu.classList.add("open"); // Mở menu thay vì đóng
            //                 console.log("Clicked outside, menu opened");
            //     }
            // });
            document.addEventListener("click", function (event) {
                if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
                    mobileMenu.classList.remove("open");
                    console.log("Clicked outside, menu closed");
                }
            });
            menuBtn.style.position = "relative";
            menuBtn.style.zIndex = "3000";
        } else {
            console.error("Lỗi: Không tìm thấy phần tử menu.");
        }
    });

</script>

<script>
    document.querySelectorAll('.menu-item-has-children > a').forEach(function (menuItem) {
        menuItem.addEventListener('click', function (event) {
            event.preventDefault();
            var parentLi = this.parentElement;
            parentLi.classList.toggle('open');

            // Thêm hoặc xoá lớp mở cho mũi tên
            var arrow = parentLi.querySelector('.arrow');
            arrow.classList.toggle('rotated');
        });
    });
</script>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        let input = document.querySelector(".search-input");
        let placeholderText = "Tìm kiếm...";
        let index = 0;
        let isDeleting = false;

        function animatePlaceholder() {
            if (!isDeleting) {
                input.setAttribute("placeholder", placeholderText.substring(0, index));
                index++;
                if (index > placeholderText.length) {
                    isDeleting = true;
                    setTimeout(animatePlaceholder, 300);
                    return;
                }
            } else {
                index--;
                input.setAttribute("placeholder", placeholderText.substring(0, index));
                if (index === 0) {
                    isDeleting = false;
                }
            }
            setTimeout(animatePlaceholder, 70);
        }

        animatePlaceholder();
    });


</script> -->

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
<div class="clearfix"></div>
<!-- Header Container / End -->