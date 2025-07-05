<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css">

<?php
require('db.php');
$url = mysqli_real_escape_string($link, $_GET['url']);

$query = "SELECT * FROM tin_tintuc WHERE linkurl LIKE ? ORDER BY id DESC LIMIT 1";
$stmt = $link->prepare($query);
$search = "%{$url}%";
$stmt->bind_param("s", $search);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    echo "<p>Bài viết không tồn tại.</p>";
    exit;
}

$tieude = htmlspecialchars($row['tieude']);
$mota = htmlspecialchars($row['mota']);
$noidung = $row['noidung'];
$tukhoa = htmlspecialchars($row['tukhoa']);
$tukhoa2 = htmlspecialchars($row['tukhoa2']);
$ngay = $row['ngay'];
$hinhanh = 'HinhCTSP/Hinhtintuc/' . $row['hinhanh'];
$link_full = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$current_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<main class="news-detail container pt-5 pb-5">
    <div class="row g-4" id="pinBoxContainer">
        <div class="col-xl-8 col-lg-7">
            <div class="custom-breadcrumb py-2 px-3 mb-4 bg-light border rounded">

                <ol class="breadcrumb mb-0" style="background: none;">
                    <li class="breadcrumb-item">
                        <a href="trang-chu"><i class="fas fa-home"></i> Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="tin-tuc">Tin tức</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo $tieude; ?>
                    </li>
                </ol>
            </div>
            <h2 style="padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;">
                <a href="$link"><?php echo "$tukhoa"; ?></a>
            </h2>

            <h2 style="padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;">
                <a href="$link"><?php echo "$tukhoa2"; ?></a>
            </h2>


            <h1 class="news-title"><?php echo $tieude; ?></h1>
            <p class="news-date">Cập nhật lần cuối vào: <?php echo $ngay; ?></p>
            <div class="news-thumbnail mb-3">
                <img src="<?php echo $hinhanh; ?>" alt="<?php echo $tieude; ?>" class="img-fluid rounded">
            </div>
            <div class="news-description mb-3"><em><?php echo $mota; ?></em></div>
            <div class="news-body mb-4">
                <?php echo $noidung; ?>
            </div>

            <div class="share-post mt-4">
                <p class="share-label">Chia sẻ bài viết này:</p>
                <div class="share-icons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($current_url); ?>"
                        target="_blank" class="icon fb">
                        <img src="hinhmenu/Facebook_icon.svg.png" alt="Facebook" width="16" height="16" />
                    </a>

                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($current_url); ?>"
                        target="_blank" class="icon in">
                        <img src="hinhmenu/linkedin.svg" alt="LinkedIn" width="16" height="16" />
                    </a>

                    <a href="https://zalo.me/share/url?url=<?php echo urlencode($current_url); ?>" target="_blank"
                        class="icon zalo">
                        <img src="hinhmenu/icon-zalo.png" alt="Zalo" width="16" height="16" />
                    </a>
                    <a href="#" class="icon link" onclick="copyLink('<?php echo $current_url; ?>'); return false;">
                        <img src="hinhmenu/link_icon_152591.webp" alt="Sao chép link" width="16" height="16" />
                    </a>
                </div>
            </div>
            <div class="related-products-inline">
                <div class="section-heading">Xem thêm</div>
                <div class="products-inline-grid">
                    <?php
                    require('db.php');
                    $tv = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 50) as recent_products ORDER BY RAND() LIMIT 2";
                    $tv_1 = mysqli_query($link, $tv);
                    while ($row = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/Hinhtintuc/{$row['hinhanh']}";
                        $tieude = $row['tieude'];
                        $id = $row['id'];
                        $url = $row['linkurl'];
                        $link = strtolower("tin-tuc/$url");
                        ?>
                        <a href="<?= $link ?>" class="product-inline-card">
                            <img src="<?= $link_hinh ?>" alt="<?= $tieude ?>">
                            <div class="product-inline-info">
                                <h3 style="font-size: 18px;"><?= $tieude ?></h3>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <div class="tien-ich-intro" style="text-align: center; margin: 40px 0 20px;">
                <h4 style="font-size: 22px; color: #333; margin-bottom: 10px;">Tiện ích hữu ích dành cho bạn</h4>
                <p style="max-width: 700px; margin: 0 auto; font-size: 16px; color: #555;">
                    Ngoài việc cung cấp thông tin chi tiết, chúng tôi còn mang đến các công cụ hỗ trợ tiện lợi để giúp
                    bạn tra cứu nhanh chóng như xem tuổi làm nhà, xác định hướng phong thủy, hay sử dụng thước Lỗ Ban
                    chính xác. Hãy khám phá ngay!
                </p>
            </div>


            <div class="tien-ich-section" data-aos="fade-up">
                <div class="tien-ich-grid" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                    <a href="xem-tuoi-lam-nha" class="tien-ich-box" data-aos="zoom-in" data-aos-delay="100"
                        style="flex: 1 1 220px; display: flex; align-items: center; padding: 16px; background: #fff; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.05); text-decoration: none; color: #000;">
                        <img src="hinhmenu/icon-set-9.svg" alt="Xem tuổi" style="width: 40px; margin-right: 12px;">
                        <strong>Xem tuổi làm nhà</strong>
                    </a>
                    <a href="xem-phong-thuy" class="tien-ich-box" data-aos="zoom-in" data-aos-delay="200"
                        style="flex: 1 1 220px; display: flex; align-items: center; padding: 16px; background: #fff; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.05); text-decoration: none; color: #000;">
                        <img src="hinhmenu/icon-set-2.svg" alt="Chi phí" style="width: 40px; margin-right: 12px;">
                        <strong>Xem hướng nhà</strong>
                    </a>
                    <a href="phong-thuy" class="tien-ich-box" data-aos="zoom-in" data-aos-delay="300"
                        style="flex: 1 1 220px; display: flex; align-items: center; padding: 16px; background: #fff; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.05); text-decoration: none; color: #000;">
                        <img src="hinhmenu/icon-set-1.svg" alt="Tư vấn phong thủy"
                            style="width: 40px; margin-right: 12px;">
                        <strong>Thước lỗ ban</strong>
                    </a>
                </div>
            </div>

        </div>


        <!-- MENU TRÁI -->
        <div class="col-xl-4 col-lg-5">
            <div class="pinBox">
                <?php include('menu_trai/leftdichvutrangchu.php'); ?>
            </div>
        </div>
    </div>

    <div class="col-mob-12 col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 20px;margin-top: 40px;">
        <div style="border-bottom: 2px solid #000;
    padding: 7px;
    color: #c00;
        margin-bottom: 30px;
    font-weight: bold;font-size: 16px;
    padding-left: 5px;"><i class="fa fa-bars" style="padding-right:10px;"></i> TIN LIÊN QUAN </div>

        <div class="row">

            <?php
            include_once("phan_trang.php");
            require('db.php');
            $thuocloai = isset($thuocloai) ? $thuocloai : 0;
            $p = new pager;
            $limit = 6;
            $start = $p->findStart($limit);
            $count_query = mysqli_query($link, "SELECT * FROM tin_tintuc WHERE thuocloai = " . $thuocloai);
            $count = mysqli_num_rows($count_query);
            $pages = $p->findPages($count, $limit);
            $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 9");
            // Error handling
            if (!$sql) {
                echo "Error: " . mysqli_error($link);
            }
            $related_ids = [];
            while ($tv_2 = mysqli_fetch_array($sql)) {
                $link_hinh = "HinhCTSP/Hinhtintuc/" . $tv_2['hinhanh'];
                $id = $tv_2['id'];
                $related_ids[] = $id;
                $thuocloai = $tv_2['tieude'];
                $tieude = $tv_2['tieude'];
                $tieude = $tv_2['tieude'];
                $mota = $tv_2['mota'];
                $ngay = $tv_2['ngay'];
                $url = $tv_2['linkurl'];
                $link = str_replace("?", "", strtolower("tin-tuc/$url"));
                ?>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="eblog-featured-news style-two small">
                        <div class="image-area">
                            <a href="<?php echo $link; ?>"><img src="<?php echo $link_hinh; ?>"
                                    alt="<?php echo $tieude; ?>" /></a>
                        </div>
                        <div class="blog-content text-left">

                            <h3 style="
    color: #222;
    font-size: 15px;
    font-weight: 800;
      text-transform: none;
    padding: 10px;"><a href="<?php echo $link; ?>" style="line-height:22px;"><?php echo $tieude; ?> </a></h3>

                        </div>
                    </div>
                </div>
                <?php
            }
            ?>



        </div>
    </div>
    <div id="toast" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; display: none;"></div>
</main>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- toast css-->
<style>
    .toast-message {
        background-color: #323232;
        color: #fff;
        padding: 12px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        margin-top: 10px;
        animation: fadeInOut 3s ease forwards;
        font-family: 'Quicksand', sans-serif;
    }

    @keyframes fadeInOut {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        10% {
            opacity: 1;
            transform: translateY(0);
        }

        90% {
            opacity: 1;
            transform: translateY(0);
        }

        100% {
            opacity: 0;
            transform: translateY(20px);
        }
    }
</style>
<!-- toast css-->
<style>
    body {
        font-family: 'Quicksand', sans-serif;
    }

    .tien-ich-section,
    .related-products-inline,
    .news-detail {
        font-family: 'Quicksand', sans-serif;
    }

    .news-detail,
    .news-detail * {
        font-family: 'Quicksand', sans-serif !important;
    }

    /* tiện ích */
    .tien-ich-section {
        padding: 20px 20px;
        background: linear-gradient(to bottom, #f9f9f9, #ffffff);
        border-radius: 20px;
    }

    .tien-ich-box {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .tien-ich-box:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .tien-ich-box img {
        transition: transform 0.3s ease;
    }

    .tien-ich-box:hover img {
        transform: rotate(10deg) scale(1.1);
    }

    @media screen and (max-width: 768px) {
        .tien-ich-section h4 {
            text-align: center;
        }

    }

    /* tiện ích */
    /* xem thêm */
    .related-products-inline {
        margin: 40px 0;
        padding: 20px;
        background: #fafafa;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
    }

    .section-heading {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 16px;
        border-bottom: 2px solid #d4af37;
        display: inline-block;
        padding-bottom: 6px;
    }

    .products-inline-grid {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .product-inline-card {
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        text-decoration: none;
        transition: transform 0.2s ease;
        flex: 1 1 48%;
        min-width: 280px;
        padding: 10px;
    }

    .product-inline-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .product-inline-card img {
        width: 64px;
        height: 64px;
        object-fit: cover;
        border-radius: 6px;
        margin-right: 12px;
    }

    .product-inline-info h4 {
        font-size: 15px;
        color: #111;
        font-weight: 500;
        line-height: 1.4;
        margin: 0;
    }

    .titleweb {
        margin-top: 90px;
    }

    @media (max-width: 768px) {
        .products-inline-grid {
            flex-direction: column;
        }

        .product-inline-card {
            flex: 1 1 100%;
        }

        .product-inline-card img {
            width: 60px;
            height: 60px;
        }

        .product-inline-info h4 {
            font-size: 14px;
        }
    }

    .custom-breadcrumb .breadcrumb {
        font-size: 15px;
        padding: 0;
        margin: 0;
        background: none;
    }

    .custom-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: "›";
        padding: 0 6px;
        color: #888;
    }

    .custom-breadcrumb a {
        text-decoration: none;
        color: #007bff;
    }

    .custom-breadcrumb a:hover {
        text-decoration: underline;
    }

    .pt-5 {
        padding-top: 7rem !important;
    }

    .news-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .news-date {
        font-size: 14px;
        color: #999;
        margin-bottom: 20px;
    }

    .news-description {
        font-size: 16px;
        font-style: italic;
    }

    .news-body {
        font-size: 17px;
        line-height: 1.6;
    }

    .share-post {
        font-family: 'Quicksand', sans-serif;
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .share-label {
        font-weight: 600;
        margin-right: 10px;
    }

    .share-icons {
        display: flex;
        gap: 10px;
    }

    .share-icons .icon {
        width: 36px;
        height: 36px;
        background: #f3f3f3;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #333;
        transition: 0.3s;
        font-size: 14px;
    }

    .share-icons .icon:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .share-icons .icon.fb {
        color: #3b5998;
    }

    .share-icons .icon.in {
        color: #0e76a8;
    }

    .share-icons .icon.link {
        color: #888;
    }

    .share-icons .icon i {
        font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands", sans-serif;
        font-weight: 900;
        font-size: 15px;
    }
</style>
<script src="js/jquery.pinBox.js"></script>
<script>
    $(document).ready(function () {
        $(".pinBox").pinBox({
            Top: '100px',
            Container: '#pinBoxContainer',
            ZIndex: 20,
            MinWidth: '1170px'
        });
    });
</script>
<!-- toast js-->
<script>
    function copyLink(link) {
        const tempInput = document.createElement("input");
        tempInput.value = link;
        document.body.appendChild(tempInput);
        tempInput.select();
        tempInput.setSelectionRange(0, 99999);
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        showToast("✔️ Đã sao chép liên kết!");
    }

    function showToast(message) {
        const toast = document.getElementById("toast");
        const toastMsg = document.createElement("div");
        toastMsg.className = "toast-message";
        toastMsg.textContent = message;
        toast.appendChild(toastMsg);
        toast.style.display = "block";

        setTimeout(() => {
            toastMsg.remove();
            if (toast.childElementCount === 0) {
                toast.style.display = "none";
            }
        }, 3000);
    }
</script>
<!-- toast js-->