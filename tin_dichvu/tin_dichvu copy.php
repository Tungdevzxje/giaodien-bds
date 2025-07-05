<style>
    .ely-service-card {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 8px;
    }

    .ely-service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .ely-card-media {
        width: 100%;
        height: 200px;
        overflow: hidden;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .ely-card-media img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease;
        /* Smooth zoom effect */
    }

    .ely-service-card:hover .ely-card-media img {
        transform: scale(1.05);
    }

    /* Info Content Area */
    .ely-card-info {
        padding: 15px;
        color: #333;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    /* Title Styling */
    .ely-card-title {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 10px;
        min-height: 2.6em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }

    .ely-card-title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .ely-card-title a:hover {
        color: #007bff;
    }

    .ely-card-description {
        font-size: 0.9375rem;
        line-height: 1.6;
        color: #555;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        margin-bottom: 15px;
    }

    .ely-readmore-link {
        display: inline-flex;
        align-items: center;
        color: #007bff;
        font-size: 0.9375rem;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease, transform 0.3s ease;
        padding: 5px 0;
    }

    .ely-readmore-link:hover {
        color: #0056b3;
        transform: translateX(5px);
    }

    .ely-readmore-link span {
        margin-right: 5px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        font-size: 13px;
    }

    .ely-arrow-icon {
        font-size: 13px;
        transition: transform 0.3s ease;
    }


    .ely-arrow-icon {
        opacity: 0;
        transform: translateX(-5px);
    }

    .ely-readmore-link:hover .ely-arrow-icon {
        opacity: 1;
        transform: translateX(0);
    }


    @media (max-width: 767.98px) {
        .ely-card-media {
            height: 180px;
        }

        .ely-card-title {
            font-size: 20px;
        }

        .ely-card-description {
            -webkit-line-clamp: 4;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
        style="background-image:url(hinhmenu/banner-tintuc.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">THI CÔNG ELY
                            ARCHI.</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Trang chủ</a></li>
                            <li>Thi công</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-tb90 container">
        <div class="row g-4 justify-content-center mt-5"> <?php
        $tv = "SELECT * FROM tin_dichvu ORDER BY id DESC LIMIT 0,40";
        $tv_1 = mysqli_query($link, $tv);
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $id = $tv_2['id'];
            $tieude = $tv_2['tieude'];
            $tieude_en = $tv_2['tieude_en']; // Nếu bạn có multi-language, có thể dùng $tieude_en tùy ngữ cảnh
            $mota = $tv_2['mota'];
            $hinhanh = $tv_2['hinhanh'];
            $url = $tv_2['linkurl'];
            $link_url = "thong-tin/$url";
            ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                    <div class="ely-service-card w-100 d-flex flex-column rounded overflow-hidden shadow-sm">
                        <div class="ely-card-media">
                            <a href="<?= $link_url; ?>">
                                <img src="HinhCTSP/Hinhdichvu/<?= $hinhanh; ?>" alt="<?= $tieude; ?>"
                                    class="img-fluid w-100 h-100 object-fit-cover">
                            </a>
                        </div>
                        <div class="ely-card-info p-3 d-flex flex-column">
                            <h3 class="ely-card-title mb-2">
                                <a href="<?= $link_url; ?>"
                                    class="text-black font-weight-bold text-decoration-none"><?= $tieude; ?></a>
                            </h3>
                            <div class="mt-auto">
                                <a href="<?= $link_url; ?>" class="ely-readmore-link text-decoration-none">
                                    <span class="font-12 letter-spacing-5">Xem thêm</span>
                                    <i class="fas fa-arrow-right ely-arrow-icon"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->