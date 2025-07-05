<?php
require('db.php');
$url = mysqli_real_escape_string($link, $_GET['url']);

$query = "SELECT * FROM tin_dichvu WHERE linkurl LIKE ? ORDER BY id DESC LIMIT 1";
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
$ngay = $row['ngay'];
$hinhanh = 'HinhCTSP/Hinhdichvu/' . $row['hinhanh'];
$link_full = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
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
                        <a href="thong-tin">Tin tức</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo $tieude; ?>
                    </li>
                </ol>
            </div>


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
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($current_url); ?>"
                        target="_blank" class="icon in">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://zalo.me/share/url?url=<?php echo urlencode($current_url); ?>" target="_blank"
                        class="icon zalo">
                        <img src="hinhmenu/icon-zalo.png" alt="Zalo" width="16" height="16" />
                    </a>
                    <a href="#" class="icon link" onclick="copyLink('<?php echo $current_url; ?>')">
                        <i class="fas fa-link"></i>
                    </a>
                </div>
            </div>
            <div class="related-products-inline">
                <div class="section-heading">Xem thêm</div>
                <div class="products-inline-grid">
                    <?php
                    require('db.php');
                    $tv = "SELECT * FROM (SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 50) as recent_products ORDER BY RAND() LIMIT 2";
                    $tv_1 = mysqli_query($link, $tv);
                    while ($row = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/Hinhdichvu/{$row['hinhanh']}";
                        $tieude = $row['tieude'];
                        $id = $row['id'];
                        $url = $row['linkurl'];
                        $link = strtolower("thong-tin/$url");
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
            $count_query = mysqli_query($link, "SELECT * FROM tin_dichvu WHERE thuocloai = " . $thuocloai);
            $count = mysqli_num_rows($count_query);
            $pages = $p->findPages($count, $limit);
            $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 9");
            // Error handling
            if (!$sql) {
                echo "Error: " . mysqli_error($link);
            }
            $related_ids = [];
            while ($tv_2 = mysqli_fetch_array($sql)) {
                $link_hinh = "HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
                $id = $tv_2['id'];
                $related_ids[] = $id;
                $thuocloai = $tv_2['tieude'];
                $tieude = $tv_2['tieude'];
                $tieude = $tv_2['tieude'];
                $mota = $tv_2['mota'];
                $ngay = $tv_2['ngay'];
                $url = $tv_2['linkurl'];
                $link = str_replace("?", "", strtolower("thong-tin/$url"));
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

</main>

<style>
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
        display: inline-block;
    }

    .share-label {
        font-size: 14px;
        color: #444;
        margin-bottom: 8px;
    }

    .share-icons {
        display: flex;
        gap: 10px;
    }

    .share-icons .icon {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        border: 1px solid #ccc;
        border-radius: 8px;
        text-decoration: none;
        color: #444;
        background-color: #fff;
        transition: all 0.2s ease;
        font-size: 14px;
    }

    /* Hover theo màu thương hiệu */
    .icon.fb:hover {
        background-color: #3b5998;
        color: #fff;
        border-color: #3b5998;
    }

    .icon.in:hover {
        background-color: #0077b5;
        color: #fff;
        border-color: #0077b5;
    }

    .icon.zalo:hover {
        background-color: #008fe5;
        border-color: #008fe5;
    }

    .icon.link:hover {
        background-color: #555;
        color: #fff;
        border-color: #555;
    }

    .icon img {
        display: block;
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