<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-row select,
    .form-row input[type="text"] {
        flex: 1;
        padding: 8px;
        font-size: 14px;
    }

    .gender-group {
        display: flex;
        gap: 30px;
        margin-bottom: 15px;
        font-size: 16px;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .gender-group label {
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        font-weight: 500;
    }

    .gender-group input[type="radio"] {
        accent-color: #ffd700;
        width: 16px;
        height: 16px;
    }

    .gender-group label:hover {
        color: #ffd700;
    }

    .tren-duoi {
        padding-top: 150px;
        padding-bottom: 100px;
    }

    #content {
        max-width: 700px;
        margin: 0 auto;
        background: rgba(0, 0, 0, 0.4);
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

    form input::placeholder {
        color: #dddddd;
    }

    form input[type="text"]:focus,
    form select:focus {
        outline: none;
        border-color: #ffc107;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
    }

    form select option {
        background-color: #1e1e1e;
        color: #ffffff;
    }

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

    #content p {
        font-size: 13px !important;
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
        <h4><i class="fas fa-utensils" style="margin-right: 8px;"></i>Nhập thông tin để xem hướng bếp phong thủy</h4>
        <form action="" method="post">
            <div class="gender-group">
                <label>
                    <input type="radio" name="gioitinh" value="1" <?php echo (isset($_POST['gioitinh']) && $_POST['gioitinh'] == 1) ? 'checked' : ''; ?>>
                    Nam
                </label>
                <label>
                    <input type="radio" name="gioitinh" value="0" <?php echo (isset($_POST['gioitinh']) && $_POST['gioitinh'] == 0) ? 'checked' : ''; ?>>
                    Nữ
                </label>
            </div>

            <div class="form-row">
                <select name="ngaysinh" required>
                    <option value="">-- Ngày sinh --</option>
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php echo (isset($_POST['ngaysinh']) && $_POST['ngaysinh'] == $i) ? 'selected' : ''; ?>>
                            <?php echo $i; ?>
                        </option>
                    <?php endfor; ?>
                </select>

                <select name="thangsinh" required>
                    <option value="">-- Tháng sinh --</option>
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php echo (isset($_POST['thangsinh']) && $_POST['thangsinh'] == $i) ? 'selected' : ''; ?>>
                            <?php echo $i; ?>
                        </option>
                    <?php endfor; ?>
                </select>

                <input type="text" name="namsinh" placeholder="Năm sinh (VD: 1985)" required
                    value="<?php echo isset($_POST['namsinh']) ? htmlspecialchars($_POST['namsinh']) : ''; ?>">
            </div>

            <select name="huongnha">
                <option value="">-- Hướng bếp (hướng mặt người đứng nấu) --</option>
                <option value="1" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 1)
                    echo "selected"; ?>>Nam
                </option>
                <option value="2" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 2)
                    echo "selected"; ?>>Tây
                    Nam</option>
                <option value="3" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 3)
                    echo "selected"; ?>>Tây
                </option>
                <option value="4" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 4)
                    echo "selected"; ?>>Tây
                    Bắc</option>
                <option value="5" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 5)
                    echo "selected"; ?>>Bắc
                </option>
                <option value="6" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 6)
                    echo "selected"; ?>>Đông
                    Bắc</option>
                <option value="7" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 7)
                    echo "selected"; ?>>Đông
                </option>
                <option value="8" <?php if (isset($_POST['huongnha']) && $_POST['huongnha'] == 8)
                    echo "selected"; ?>>Đông
                    Nam</option>
            </select>

            <button type="submit" id="submit"><i class="fas fa-search"></i> Xem tư vấn hướng bếp</button>
        </form>

        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $namsinh = (int) $_POST['namsinh'];
            $ngaysinh = (int) $_POST['ngaysinh'];
            $thangsinh = (int) $_POST['thangsinh'];

            $gioitinh_num = (int) $_POST['gioitinh'];
            $gioitinh_str = ($gioitinh_num == 1) ? "Nam" : "Nữ";

            $huongbep_num = (int) $_POST['huongnha'];
            $huongbep_str = "";
            switch ($huongbep_num) {
                case 1:
                    $huongbep_str = "Nam";
                    break;
                case 2:
                    $huongbep_str = "Tây Nam";
                    break;
                case 3:
                    $huongbep_str = "Tây";
                    break;
                case 4:
                    $huongbep_str = "Tây Bắc";
                    break;
                case 5:
                    $huongbep_str = "Bắc";
                    break;
                case 6:
                    $huongbep_str = "Đông Bắc";
                    break;
                case 7:
                    $huongbep_str = "Đông";
                    break;
                case 8:
                    $huongbep_str = "Đông Nam";
                    break;
                default:
                    $huongbep_str = "Không xác định";
                    break;
            }
            $huongbep_str_escaped = mysqli_real_escape_string($link, $huongbep_str);

            $query = "SELECT * FROM huong_bep_phong_thuy
                      WHERE namsinh = $namsinh
                      AND ngaysinh = $ngaysinh
                      AND thangsinh = $thangsinh
                      AND gioitinh = '$gioitinh_str'
                      AND huongnha = '$huongbep_str_escaped'
                      LIMIT 1";

            $result = mysqli_query($link, $query);

            if (!$result) {
                echo "<p style='color:red;'>Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($link) . "</p>";
            }

            $data = mysqli_fetch_assoc($result);

            if ($data) {
                echo "<div class='result-block'>";
                echo "<h4 style='margin-top:20px'>Tư vấn hướng bếp phong thủy cho người sinh ngày <span style='color: #ffc107;'>{$ngaysinh}/{$thangsinh}/{$namsinh} ({$gioitinh_str}),</span> với hướng bếp <span style='color: #ffc107;'>{$huongbep_str}</span>:</h4>";
                echo "<div>{$data['noidung']}</div>";
                echo "<p style='font-size: 13px; text-align: center; margin-top: 20px; color: #f8f8f8;'>
                <em><b style='color: red;'>Lưu ý:</b> Thông tin trên chỉ mang tính chất tham khảo. Quý khách có nhu
                cầu tư vấn chuyên sâu, vui lòng liên hệ các chuyên gia phong thủy. Trân trọng!</em>
              </p>";
                echo "</div>";
            } else {
                echo "<p style='color:#ccc;'>Không tìm thấy kết quả phù hợp với thông tin bạn nhập. Vui lòng kiểm tra lại ngày sinh, tháng sinh, năm sinh, giới tính và hướng bếp.</p>";
            }
        }
        ?>
    </div>
</main>