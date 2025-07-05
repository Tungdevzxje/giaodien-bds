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
        font-size: 15px !important;
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
        <h4><i class="fas fa-gopuram" style="margin-right: 8px;"></i>Nhập thông tin để xem hướng bàn thờ phong thủy</h4>
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

            <select name="huongbantho">
                <option value="">-- Hướng bàn thờ (hướng nhìn của bàn thờ) --</option>
                <option value="1" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 1)
                    echo "selected"; ?>>Nam
                </option>
                <option value="2" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 2)
                    echo "selected"; ?>>Tây
                    Nam</option>
                <option value="3" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 3)
                    echo "selected"; ?>>Tây
                </option>
                <option value="4" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 4)
                    echo "selected"; ?>>Tây
                    Bắc</option>
                <option value="5" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 5)
                    echo "selected"; ?>>Bắc
                </option>
                <option value="6" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 6)
                    echo "selected"; ?>>Đông
                    Bắc</option>
                <option value="7" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 7)
                    echo "selected"; ?>>Đông
                </option>
                <option value="8" <?php if (isset($_POST['huongbantho']) && $_POST['huongbantho'] == 8)
                    echo "selected"; ?>>Đông
                    Nam</option>
            </select>

            <button type="submit" id="submit"><i class="fas fa-search"></i> Xem tư vấn hướng bàn thờ</button>
        </form>

        <?php


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $namsinh = (int) $_POST['namsinh'];
            $ngaysinh = (int) $_POST['ngaysinh'];
            $thangsinh = (int) $_POST['thangsinh'];

            $gioitinh_num = (int) $_POST['gioitinh'];
            $gioitinh_str = ($gioitinh_num == 1) ? "Nam" : "Nữ";

            $huongbantho_num = (int) $_POST['huongbantho'];
            $huongbantho_str = "";
            switch ($huongbantho_num) {
                case 1:
                    $huongbantho_str = "Nam";
                    break;
                case 2:
                    $huongbantho_str = "Tây Nam";
                    break;
                case 3:
                    $huongbantho_str = "Tây";
                    break;
                case 4:
                    $huongbantho_str = "Tây Bắc";
                    break;
                case 5:
                    $huongbantho_str = "Bắc";
                    break;
                case 6:
                    $huongbantho_str = "Đông Bắc";
                    break;
                case 7:
                    $huongbantho_str = "Đông";
                    break;
                case 8:
                    $huongbantho_str = "Đông Nam";
                    break;
                default:
                    $huongbantho_str = "Không xác định";
                    break;
            }

            if (isset($link) && $link) {
                $huongbantho_str_escaped = mysqli_real_escape_string($link, $huongbantho_str);

                $query = "SELECT * FROM huong_ban_tho
                          WHERE namsinh = $namsinh
                          AND ngaysinh = $ngaysinh
                          AND thangsinh = $thangsinh
                          AND gioitinh = '$gioitinh_str'
                          AND huongnha = '$huongbantho_str_escaped'
                          LIMIT 1";

                $result = mysqli_query($link, $query);

                if (!$result) {
                    echo "<p style='color:red;'>Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($link) . "</p>";
                }

                $data = mysqli_fetch_assoc($result);

                if ($data) {
                    echo "<div class='result-block' style='padding: 30px; border-radius: 12px; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(8px); margin-bottom: 40px;'>";

                    echo "<h4 style='margin-top:30px; font-size: 24px; text-align: center; color: #fff; line-height: 1.4;'>Tư vấn hướng bàn thờ phong thủy cho người sinh ngày <span style='color: #ffc107;'>{$ngaysinh}/{$thangsinh}/{$namsinh} ({$gioitinh_str}),</span> với hướng bàn thờ <span style='color: #ffc107;'>{$huongbantho_str}</span>:</h4>";

                    echo "<div class='advice-content' style='padding: 25px 35px; background: rgba(255, 255, 255, 0.08); border-radius: 10px; margin-top: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);'>";

                    echo "<h5 style='font-size: 20px; color: #fff; margin-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;'>Thông tin gia chủ:</h5>";
                    echo "<p style='margin-bottom: 10px; font-size: 16px; color: #e0e0e0;'><strong>Ngày sinh:</strong> {$ngaysinh}/{$thangsinh}/{$namsinh}</p>";
                    echo "<p style='margin-bottom: 10px; font-size: 16px; color: #e0e0e0;'><strong>Giới tính:</strong> {$gioitinh_str}</p>";
                    echo "<p style='margin-bottom: 25px; font-size: 16px; color: #e0e0e0;'><strong>Hướng bàn thờ hiện tại:</strong> {$huongbantho_str}</p>";

                    echo "<h5 style='font-size: 20px; color: #fff; margin-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;'>Đánh giá các hướng phong thủy:</h5>";
                    echo "<ul style='list-style: none; padding: 0; margin: 0;'>";

                    $directions = explode(';', $data['noidung']);
                    foreach ($directions as $direction_pair) {
                        $direction_pair = trim($direction_pair);
                        if (!empty($direction_pair)) {
                            list($direction, $status) = explode(':', $direction_pair, 2);
                            $direction = trim($direction);
                            $status = trim($status);

                            $class = '';
                            if (strcasecmp($status, 'Tốt') == 0) {
                                $class = 'huong-tot';
                            } else {
                                $class = 'huong-xau';
                            }
                            // Thêm màu cho Tốt/Xấu trực tiếp trong HTML
                            $formatted_status = (strcasecmp($status, 'Tốt') == 0) ? "<strong style='color: #4CAF50;'>Tốt</strong>" : "<span style='color: #FF6347;'>{$status}</span>";

                            $current_altar_note = '';
                            if (strcasecmp($direction, $huongbantho_str) == 0) {
                                $current_altar_note = ' <span style="font-style: italic; color: #aaa;">(hướng bàn thờ hiện tại của bạn)</span>';
                            }

                            echo "<li class='{$class}' style='padding: 8px 0; border-bottom: 1px dashed rgba(255,255,255,0.05); font-size: 16px; color: #e0e0e0;'><strong>{$direction}:</strong> {$formatted_status}{$current_altar_note}</li>";
                        }
                    }
                    echo "</ul>";
                    echo "</div>";

                    echo "<p style='font-size: 13px; text-align: center; margin-top: 40px; color: #cccccc;'>
                        <em><b style='color: red;'>Lưu ý:</b> Thông tin trên chỉ mang tính chất tham khảo. Quý khách có nhu
                        cầu tư vấn chuyên sâu, vui lòng liên hệ các chuyên gia phong thủy. Trân trọng!</em>
                    </p>";
                    echo "</div>";
                } else {
                    echo "<p style='color:#ccc; padding: 20px; background: rgba(0,0,0,0.5); border-radius: 8px; text-align: center;'>Không tìm thấy kết quả phù hợp với thông tin bạn nhập. Vui lòng kiểm tra lại ngày sinh, tháng sinh, năm sinh, giới tính và hướng bàn thờ.</p>";
                }
            } else {
                echo "<p style='color:red;'>Lỗi: Không thể kết nối đến cơ sở dữ liệu. Vui lòng kiểm tra cấu hình kết nối.</p>";
            }
        }
        ?>
    </div>
</main>