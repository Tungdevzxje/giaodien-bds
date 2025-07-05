<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Các công cụ phong thủy</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-size: cover;
            margin: 0;
            padding: 0;
            padding-top: 60px;
        }

        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
        }


        h2 {
            text-align: center;
            font-size: 36px;
            margin: 40px 0 20px;
            font-weight: bold;
        }

        .tool-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            padding-bottom: 120px;
        }

        .tool-card {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 25px 20px;
            transition: transform 0.3s ease;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* đẩy nút xuống dưới */
            height: 100%;
        }

        .tool-card:hover {
            transform: translateY(-5px);
        }

        .tool-card img {
            height: 60px;
            margin-bottom: 15px;
        }

        .tool-card h3 {
            font-size: 18px;
            margin: 10px 0;
            font-weight: bold;
        }

        .tool-card p {
            font-size: 14px;
            color: #555;
            min-height: 60px;
            /* đảm bảo đoạn mô tả không bị co */
        }


        .tool-card a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #a34f00;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .tool-card a:hover {
            background-color: #8c0000;
        }
    </style>
</head>

<body>
    <video autoplay muted loop playsinline id="bg-video">
        <source src="hinhmenu/nenphongthuy.mp4" type="video/mp4">
    </video>


    <h2>Tất cả các công cụ</h2>

    <div class="tool-grid">
        <div class="tool-card">
            <img src="hinhmenu/icon-set-1.svg" alt="Thước lỗ ban">
            <h3>Thước lỗ ban</h3>
            <p>Công cụ đo đạc chuẩn phong thủy ứng dụng trong xây dựng và nội thất.</p>
            <a href="phong-thuy">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-2.svg" alt="Xem hướng nhà">
            <h3>Xem hướng nhà</h3>
            <p>Chọn hướng nhà hợp mệnh để đón tài lộc và sức khỏe.</p>
            <a href="xem-phong-thuy">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-9.svg" alt="Xem tuổi làm nhà">
            <h3>Xem tuổi làm nhà</h3>
            <p>Chọn năm làm nhà hợp tuổi, tránh hạn Tam Tai, Kim Lâu, Hoang Ốc.</p>
            <a href="xem-tuoi-lam-nha">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-10.svg" alt="Xem hướng bếp">
            <h3>Xem hướng bếp</h3>
            <p>Chọn hướng đặt bếp tốt để mang lại phúc khí và gia đạo an vui.</p>
            <a href="huong-bep-phong-thuy">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-5.svg" alt="Xem hướng bàn thờ">
            <h3>Xem hướng bàn thờ</h3>
            <p>Hướng đặt bàn thờ chuẩn phong thủy, hợp mệnh và cung.</p>
            <a href="xem-huong-ban-tho">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-7.svg" alt="Xem hướng bàn làm việc">
            <h3>Xem hướng bàn làm việc</h3>
            <p>Đặt bàn làm việc đúng hướng giúp tăng năng suất và thành công.</p>
            <a href="xem-huong-ban-lam-viec">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-8.svg" alt="Xem hướng giường ngủ">
            <h3>Xem hướng giường ngủ</h3>
            <p>Đặt giường đúng hướng để ngủ ngon và tăng cường sức khỏe.</p>
            <a href="xem-huong-giuong-ngu">XEM CHI TIẾT</a>
        </div>

        <div class="tool-card">
            <img src="hinhmenu/icon-set-6.svg" alt="Xem ngày động thổ">
            <h3>Xem ngày động thổ</h3>
            <p>Chọn ngày tốt để khởi công xây nhà, tránh ngày xấu, phạm tuổi.</p>
            <a href="#" class="developing" onclick="showDevelopingModal(); return false;">ĐANG PHÁT TRIỂN</a>
        </div>
    </div>
    <div style="
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.1);
    z-index: -1;">
    </div>
    <section id="fengshui-knowledge-corner"
        style="padding: 80px 0; background: rgba(0, 0, 0, 0.65); backdrop-filter: blur(7px); color: #f1f1f1; border-top: 1px solid rgba(255, 255, 255, 0.1);">
        <div class="container" style="margin: 0 auto; padding: 0 20px;">
            <h3 style="font-size: 30px; text-align: center; color: #ffe4b5; font-weight: bold; margin-bottom: 50px;">Góc
                Kiến Thức Phong Thủy</h3>

            <div class="knowledge-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px;">

                <div class="knowledge-item"
                    style="background: rgba(255, 255, 255, 0.08); border-radius: 12px; padding: 30px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <i class="fas fa-yin-yang" style="font-size: 40px; color: #ffd700; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 20px; color: #ffe4b5; margin-bottom: 15px;">Âm Dương Ngũ Hành</h4>
                    <p style="font-size: 15px; line-height: 1.6; color: #e0e0e0;">Hiểu rõ nguyên lý Âm Dương Ngũ Hành là
                        nền tảng để áp dụng phong thủy vào cuộc sống.</p>
                    <a href="[Link đến bài viết chi tiết về Âm Dương Ngũ Hành]"
                        style="color: #ffd700; text-decoration: none; font-weight: bold; margin-top: 15px; display: inline-block;">Tìm
                        hiểu thêm &gt;</a>
                </div>

                <div class="knowledge-item"
                    style="background: rgba(255, 255, 255, 0.08); border-radius: 12px; padding: 30px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <i class="fas fa-compass" style="font-size: 40px; color: #ffd700; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 20px; color: #ffe4b5; margin-bottom: 15px;">Hướng Khí & Vận Khí</h4>
                    <p style="font-size: 15px; line-height: 1.6; color: #e0e0e0;">Mỗi hướng đều mang một nguồn năng
                        lượng (khí) riêng. Chọn đúng hướng thu hút vận khí tốt.</p>
                    <a href="[Link đến bài viết chi tiết về Hướng Khí]"
                        style="color: #ffd700; text-decoration: none; font-weight: bold; margin-top: 15px; display: inline-block;">Tìm
                        hiểu thêm &gt;</a>
                </div>

                <div class="knowledge-item"
                    style="background: rgba(255, 255, 255, 0.08); border-radius: 12px; padding: 30px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <i class="fas fa-home" style="font-size: 40px; color: #ffd700; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 20px; color: #ffe4b5; margin-bottom: 15px;">Bố Trí Không Gian</h4>
                    <p style="font-size: 15px; line-height: 1.6; color: #e0e0e0;">Sắp xếp nội thất, vật phẩm phong thủy
                        đúng cách sẽ kích hoạt năng lượng tích cực, mang lại bình an.</p>
                    <a href="[Link đến bài viết chi tiết về Bố Trí]"
                        style="color: #ffd700; text-decoration: none; font-weight: bold; margin-top: 15px; display: inline-block;">Tìm
                        hiểu thêm &gt;</a>
                </div>

                <div class="knowledge-item"
                    style="background: rgba(255, 255, 255, 0.08); border-radius: 12px; padding: 30px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <i class="fas fa-mountain" style="font-size: 40px; color: #ffd700; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 20px; color: #ffe4b5; margin-bottom: 15px;">Sơn Thủy & Minh Đường</h4>
                    <p style="font-size: 15px; line-height: 1.6; color: #e0e0e0;">Sơn Thủy và Minh Đường là yếu tố quan
                        trọng trong việc đánh giá thế đất, ảnh hưởng đến vận khí gia trạch.</p>
                    <a href="[Link đến bài viết chi tiết về Sơn Thủy Minh Đường]"
                        style="color: #ffd700; text-decoration: none; font-weight: bold; margin-top: 15px; display: inline-block;">Tìm
                        hiểu thêm &gt;</a>
                </div>

            </div>

            <div style="text-align: center; margin-top: 60px;">
                <a href="[Link đến trang Blog/Kiến thức tổng hợp của bạn]" class="view-all-button"
                    style="display: inline-block; padding: 15px 35px; background: linear-gradient(to right, #4CAF50, #8BC34A); color: white; text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 18px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4); transition: background 0.3s ease, transform 0.3s ease;">
                    Xem tất cả kiến thức <i class="fas fa-book-open" style="margin-left: 10px;"></i>
                </a>
            </div>

        </div>
    </section>

    <style>
        #fengshui-knowledge-corner {
            padding: 80px 0;
            background: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(7px);
            color: #f1f1f1;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        #fengshui-knowledge-corner h3 {
            font-size: 30px;
            text-align: center;
            color: #ffe4b5;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .knowledge-grid {
            display: grid;
            gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .knowledge-item {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .knowledge-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
        }

        .knowledge-item i {
            color: #ffd700;
            margin-bottom: 20px;
        }

        .knowledge-item h4 {
            color: #fce8a8;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .knowledge-item p {
            color: #ddd;
            font-size: 15px;
            line-height: 1.6;
            min-height: 70px;
            display: flex;
            align-items: center;
            /* Căn giữa dọc */
            justify-content: center;
        }

        .knowledge-item a {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .knowledge-item a:hover {
            color: #ffeb3b;
        }

        .view-all-button {
            display: inline-block;
            padding: 15px 35px;
            background: linear-gradient(to right, #4CAF50, #8BC34A);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 18px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .view-all-button:hover {
            background: linear-gradient(to right, #218838, #1e7e34);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
        }


        @media (min-width: 1400px) {
            .knowledge-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
            }
        }

        @media (min-width: 993px) and (max-width: 1399px) {
            .knowledge-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .knowledge-item p {
                font-size: 14px;
                min-height: 80px;
            }

            .knowledge-item h4 {
                font-size: 18px;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .knowledge-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .knowledge-item p {
                min-height: 70px;
            }
        }

        @media (max-width: 768px) {
            .knowledge-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .knowledge-item {
                margin: 0 15px;
            }

            .knowledge-item p {
                min-height: unset;
                font-size: 15px;
            }

            .knowledge-item h4 {
                font-size: 20px;
            }

            .view-all-button {
                padding: 12px 25px;
                font-size: 16px;
            }
        }

        .knowledge-item p {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</body>
<div id="developingModal" class="modal-overlay">
    <div class="modal-box">
        <h3>Tính năng đang phát triển</h3>
        <p>Chức năng này hiện đang trong quá trình phát triển. Vui lòng quay lại sau!</p>
        <button onclick="closeDevelopingModal()">Đóng</button>
    </div>
</div>
<style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .modal-box {
        background: #fff;
        padding: 30px 20px;
        max-width: 400px;
        border-radius: 10px;
        text-align: center;
        font-family: 'Quicksand', sans-serif;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        animation: fadeInScale 0.3s ease;
    }

    .modal-box h3 {
        margin-top: 0;
        font-size: 20px;
        color: #ff6600;
    }

    .modal-box p {
        font-size: 15px;
        color: #444;
        margin-bottom: 20px;
    }

    .modal-box button {
        padding: 8px 18px;
        background-color: #ff6600;
        border: none;
        color: white;
        font-weight: bold;
        border-radius: 6px;
        cursor: pointer;
    }

    .modal-box button:hover {
        background-color: #e85c00;
    }

    @keyframes fadeInScale {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
<script>
    function showDevelopingModal() {
        document.getElementById("developingModal").style.display = "flex";
    }

    function closeDevelopingModal() {
        document.getElementById("developingModal").style.display = "none";
    }
</script>

</html>