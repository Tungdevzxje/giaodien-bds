<?php
$namsinh = trim($_POST['born']);
$gioitinh = trim($_POST['male']);
$huongnha = trim($_POST['huongnha']);
$huongxoay = "nguhanh.png";
if ($namsinh != '' && $gioitinh != '' && $huongnha != '') {
    $sql = mysqli_query($link, "select * from huong where id=" . $huongnha . "");
    $huong = mysqli_fetch_array($sql);
    $huongxoay = $huong['img'];

    $sQl = mysqli_query($link, "select * from banmenh where namsinh='" . $namsinh . "' and huong=" . $huongnha . " and gioitinh=" . $gioitinh . " limit 1");
    $ketluan = mysqli_fetch_array($sQl);
    $mySQL = mysqli_query($link, "select * from tuoi where namsinh='" . $namsinh . "' limit 1");
    $tuoi = mysqli_fetch_array($mySQL);

}
?>
<!-- start of page header -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    .tren-duoi {
        padding-top: 150px;
        padding-bottom: 100px;
    }

    #content {
        max-width: 700px;
        margin: 0 auto;
        background: rgba(0, 0, 0, 0.4);
        /* nền tối hơn để chữ trắng nổi bật */
        border: 1px solid rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(8px);
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.6);
        color: #f1f1f1;
    }

    h4 {
        font-size: 22px;
        text-align: center;
        color: #ffe4b5;
        font-weight: bold;
        margin-bottom: 30px;
    }

    /* Input và select chung */
    form input[type="text"],
    form select {
        width: 100%;
        height: 44px;
        margin-bottom: 20px;
        padding: 0 15px;
        font-size: 16px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.3);
    }

    /* Fix màu chữ gợi ý input */
    form input::placeholder {
        color: #dddddd;
    }

    /* Focus input/select */
    form input[type="text"]:focus,
    form select:focus {
        outline: none;
        border-color: #ffc107;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
    }

    /* Style cho OPTION dropdown */
    form select option {
        background-color: #1e1e1e;
        color: #ffffff;
    }

    /* Submit button */
    #submit {
        width: 100%;
        height: 45px;
        background: linear-gradient(to right, #b8860b, #8b4513);
        color: white;
        font-weight: bold;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        transition: background 0.3s ease;
    }

    #submit:hover {
        background: linear-gradient(to right, #d2b48c, #a0522d);
    }

    /* Kết quả */
    .result-block img {
        max-width: 100%;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }

    #content a {
        color: inherit;
        text-decoration: none;
        font-weight: bold;
        border: none;
        background: none;
        padding: 0;
    }

    #content,
    #content p,
    #content li,
    #content span {
        color: #f8f8f8 !important;
    }

    #content strong,
    #content b {
        color: #ffe4b5;
        /* vàng sáng dễ đọc */
    }

    #content .huong-tot {
        color: #ff5c5c;
        /* đỏ tươi nổi bật cho hướng tốt */
    }

    #content .huong-xau {
        color: #ccc;
        /* trắng xám đậm hơn chút cho đoạn phụ */
    }

    h3 {
        color: #ffe4b5 !important;
    }
</style>
<style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .video-bg {
        position: fixed;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
        object-fit: contain;
        filter: brightness(0.6);
    }

    #main {
        position: relative;
        z-index: 1;
    }

    .video-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* làm nền tối vừa phải */
        z-index: -1;
    }
</style>

<div class="video-overlay">
    <video autoplay muted loop class="video-bg">
        <source src="hinhmenu/199293-909903179.mp4" type="video/mp4">
    </video>
</div>

<main id="main" class="tren-duoi">
    <div id="content">
        <h4><i class="fas fa-star-and-crescent" style="margin-right: 8px;"></i>Nhập thông tin để xem Phong Thủy</h4>
        <form action="" id="pt-frmpt" method="post">
            <input type="text" name="born" placeholder="Năm sinh (VD: 1985)" id="input" value="<?php echo $namsinh; ?>"
                onblur="if (this.value == '') {this.value = 'Năm sinh chủ nhà';}"
                onfocus="if (this.value == 'Năm sinh chủ nhà') {this.value = '';}" />

            <select name="male">
                <option value="">-- Giới tính --</option>
                <option value="1" <?php if ($gioitinh == 1)
                    echo "selected"; ?>>Nam giới</option>
                <option value="0" <?php if ($gioitinh == 0)
                    echo "selected"; ?>>Nữ giới</option>
            </select>

            <select name="huongnha">
                <option value="">-- Hướng nhà --</option>
                <option value="1" <?php if ($huongnha == 1)
                    echo "selected"; ?>>Nam</option>
                <option value="2" <?php if ($huongnha == 2)
                    echo "selected"; ?>>Tây Nam</option>
                <option value="3" <?php if ($huongnha == 3)
                    echo "selected"; ?>>Tây</option>
                <option value="4" <?php if ($huongnha == 4)
                    echo "selected"; ?>>Tây Bắc</option>
                <option value="5" <?php if ($huongnha == 5)
                    echo "selected"; ?>>Bắc</option>
                <option value="6" <?php if ($huongnha == 6)
                    echo "selected"; ?>>Đông Bắc</option>
                <option value="7" <?php if ($huongnha == 7)
                    echo "selected"; ?>>Đông</option>
                <option value="8" <?php if ($huongnha == 8)
                    echo "selected"; ?>>Đông Nam</option>
            </select>

            <button type="submit" name="submitpt" id="submit">
                <i class="fas fa-search" style="margin-right: 6px;"></i> Xem kết quả
            </button>

        </form>

        <?php if (!empty($ketluan)): ?>
            <div class="result-block" style="text-align: center;">
                <img src="HinhCTSP/<?php echo $huongxoay; ?>" alt="nguhanh" />

                <h3><b>Năm Sinh:</b> <?php echo $namsinh; ?> (<?php echo $tuoi['tuoi']; ?>) - <b>Giới tính:</b>
                    <?php echo $ketluan['gioitinh'] == 0 ? 'Nữ' : 'Nam'; ?>
                </h3>

                <h3>Mệnh: <span><?php echo $ketluan['menh']; ?></span> - Quẻ: <span><?php echo $ketluan['que']; ?></span> -
                    Thuộc: <span><?php echo $ketluan['thuoc']; ?></span></h3>

                <div><?php echo $ketluan['mota']; ?></div>

                <div class="clear"></div>
                <div class="clear"></div>

                <div>
                    <?php
                    if ($ketluan['noidung'] == '') {
                        echo $tv_2['noidung'];
                    } else {
                        echo $ketluan['noidung'];
                    }
                    ?>
                </div>
                <p style='font-size: 13px; text-align: center; margin-top: 20px; color: #f8f8f8;'>
                    <em><b style='color: red;'>Lưu ý:</b> Thông tin trên chỉ mang tính chất tham khảo. Quý khách có nhu
                        cầu tư vấn chuyên sâu, vui lòng liên hệ các chuyên gia phong thủy. Trân trọng!</em>
                </p>
            </div>
        <?php endif; ?>
    </div>
</main>