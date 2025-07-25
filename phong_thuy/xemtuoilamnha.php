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
        <h4><i class="fas fa-star-and-crescent" style="margin-right: 8px;"></i>Nhập thông tin để xem tuổi làm nhà</h4>
        <form action="" method="post">
            <input type="text" name="namsinh" placeholder="Năm sinh (VD: 1985)" required>
            <select name="gioitinh" required>
                <option value="">-- Giới tính --</option>
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select>

            <input type="text" name="namdukien" placeholder="Năm dự kiến làm nhà" required>

            <button type="submit" id="submit"><i class="fas fa-search"></i> Xem tư vấn</button>
        </form>


        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $namsinh = (int) $_POST['namsinh'];
            $gioitinh = (int) $_POST['gioitinh'];
            $namdukien = (int) $_POST['namdukien'];

            $query = "SELECT * FROM xemtuoilamnha
              WHERE namsinh = $namsinh
              AND gioitinh = $gioitinh
              AND namdukienlamnha = $namdukien
              LIMIT 1";

            $result = mysqli_query($link, $query);
            $data = mysqli_fetch_assoc($result);

            if ($data) {
                echo "<div class='result-block'>";
                echo "<h4 style='margin-top:20px'>Phong thuỷ xây nhà năm <span style='color: #ffc107;'>{$namdukien} cho gia chủ tuổi {$namsinh}</span>:</h4>";
                echo "<div>{$data['noidung']}</div>";
                echo "<p style='font-size: 13px; text-align: center; margin-top: 20px; color: #f8f8f8;'>
                <em><b style='color: red;'>Lưu ý:</b> Thông tin trên chỉ mang tính chất tham khảo. Quý khách có nhu
                cầu tư vấn chuyên sâu, vui lòng liên hệ các chuyên gia phong thủy. Trân trọng!</em>
              </p>";
                echo "</div>";
            } else {
                echo "<p style='color:#ccc;'>Không tìm thấy kết quả phù hợp với thông tin bạn nhập.</p>";
            }
        }
        ?>

    </div>
</main>