<link rel="stylesheet" href="site_tuvan/css/plugins.css">
<link rel="stylesheet" href="site_tuvan/css/style.css">
<style>
    a,
    .btn,
    .pickus {
        font-family: 'Roboto', sans-serif;
    }

    @media screen and (max-width: 768px) {
        #ourhome {
            height: 80vh !important;
        }

        .top50 {
            padding-top: 75px;
        }
    }

    .can-trai {
        text-align: justify;
    }

    .playbtn {
        position: relative;
        display: inline-block;
        padding: 25px 30px;
        margin: 40px 0;
        color: #ffffff;
        text-decoration: none;
        text-transform: uppercase;
        transition: 0.5s;
        font-weight: 600;
        letter-spacing: 4px;
        overflow: hidden;
    }

    .playbtn:hover {
        background: #ffffff;
        color: #000000;
        box-shadow: 0 0 5px #fff, 0 0 25px #fff, 0 0 50px #fff, 0 0 200px #fff;
        -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
    }

    .playbtn span {
        position: absolute;
        display: block;
    }

    .playbtn span:nth-child(1) {
        top: 0;
        left: 0;
        width: 100%;
        height: 10px;
        background: linear-gradient(90deg, transparent, #fff);
        animation: animate1 1s linear infinite;
    }

    @keyframes animate1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .playbtn span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 10px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #fff);
        animation: animate2 1s linear infinite;
        animation-delay: 0.25s;
    }

    @keyframes animate2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .playbtn span:nth-child(3) {
        bottom: 0;
        right: 0;
        width: 100%;
        height: 10px;
        background: linear-gradient(270deg, transparent, #fff);
        animation: animate3 1s linear infinite;
        animation-delay: 0.5s;
    }

    @keyframes animate3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .playbtn span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 10px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #fff);
        animation: animate4 1s linear infinite;
        animation-delay: 0.75s;
    }

    @keyframes animate4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }

    /* nháy */
    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
            /* Starting shadow color, adjust as needed */
        }

        70% {
            transform: scale(1.05);
            box-shadow: 0 0 0 15px rgba(0, 123, 255, 0);
            /* Expanding shadow, fading out */
        }

        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
        }
    }

    .button.btnprimary.pagescroll {
        animation: pulse 0.5s infinite;
        font-weight: 500;
        color: #ffffff;
    }

    /* .button.btnsecondary.pagescroll {
        animation: pulse 2s infinite;
        font-weight: 500;
        color: #F8F8F8;
    } */

    /* nháy */
</style>

<body data-bs-spy="scroll" data-bs-target="#xenav">

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-blocks">
                <span class="block-1"></span>
                <span class="block-2"></span>
                <span class="block-3"></span>
                <span class="block-4"></span>
                <span class="block-5"></span>
                <span class="block-6"></span>
                <span class="block-7"></span>
                <span class="block-8"></span>
                <span class="block-9"></span>
                <span class="block-10"></span>
                <span class="block-11"></span>
                <span class="block-12"></span>
                <span class="block-13"></span>
                <span class="block-14"></span>
                <span class="block-15"></span>
                <span class="block-16"></span>
            </div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!--Main Slider-->
    <section class="full-screen parallax-video parallaxie center-block bg-video-container" id="ourhome">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-8 col-sm-10">
                    <div class="center-item text-center video-content">
                        <h2 class=" top50 bottom35  whitecolor" style="font-size: 23.5px;">
                            <span style="line-height: 30px; margin-bottom:20px" class="fontbold block wow fadeIn"
                                data-wow-delay="400ms">Ely Archi – Kiến tạo không
                                gian sống đậm dấu ấn cá nhân
                            </span>
                            <span style="line-height: 30px;" class="block font-xlight wow fadeIn"
                                data-wow-delay="500ms"> Chúng tôi thiết kế và
                                thi công trọn gói những công trình nhà ở độc bản tối ưu công năng – bền vững theo thời
                                gian.
                            </span>
                        </h2>

                        <a class="playbtn pagescroll wow fadeInUp" href="#contactus">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Liên hệ kiến trúc sư tư vấn miễn phí
                        </a>

                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
        <video class="my-background-video jquery-background-video" loop autoplay muted playsinline
            poster="site_tuvan/video/thumb-slide2.png">
            <source src="site_tuvan/video/video_landing.mp4" type="video/mp4">
            <!-- <source src="site_tuvan/video/video-slide.ogv" type="video/webm">
            <source src="site_tuvan/video/video-slide.webm" type="video/ogg"> -->
        </video>
    </section>
    <!--Main Slider ends -->
    <!-- Divider Section -->
    <section class="section-divider text-center"
        style="background: linear-gradient(90deg, #f8fafc 0%, #e0e7ef 100%); padding: 60px 0;">
        <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms" style="font-weight:700; color:#222; margin-bottom:30px;">
                Kiến Trúc Ely Archi
            </h2>
            <p class="lead mb-4 wow fadeInUp" data-wow-delay="400ms" style="color:#555;">
                Chúng tôi đồng hành cùng bạn kiến tạo không gian sống độc bản, tối ưu và bền vững.
            </p>
            <a href="#elyarchi" class="button btnsecondary pagescroll wow fadeInUp" data-wow-delay="500ms">
                Giới Thiệu
            </a>
        </div>
    </section>

    <!-- End Divider Section -->

    <!-- ely qua con số -->
    <section id="ely-intro" class="padding_top fact-iconic gradient_bg">
        <div class="container">
            <div class="row">
                <!-- Text introduction -->
                <div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-start text-center wow fadeInLeft"
                    data-wow-delay="300ms">
                    <h3 style="color: #fff; line-height: 37px;" class="bottom25">Ely Archi – Kiến tạo không gian sống
                        đậm dấu ấn cá nhân
                    </h3>
                    <p class="title can-trai">
                        Ely Archi là công ty kiến trúc chuyên thiết kế – thi công nhà ở dân dụng, mang đến giải pháp
                        không gian sống <br> đậm dấu ấn cá nhân. <br>
                    </p>
                </div>

                <!-- Number highlights -->
                <div class="col-md-7 col-sm-12 text-center">
                    <div class="row">
                        <!-- Kinh nghiệm -->
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
                            data-wow-delay="400ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="10" data-speed="2000"></span><i
                                    class="fa fa-plus"></i>
                            </div>
                            <p class="title">Năm kinh nghiệm<br></p>
                        </div>

                        <!-- Công trình -->
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
                            data-wow-delay="350ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="150" data-speed="2000"></span><i
                                    class="fa fa-plus"></i>
                            </div>
                            <p class="title">Công trình hoàn thành<br></p>
                        </div>

                        <!-- Tiêu chí -->
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
                            data-wow-delay="300ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="3" data-speed="1500"></span>
                            </div>
                            <p class="title">Tiêu chí cốt lõi<br>
                                <small>Thẩm mỹ – Công năng – Tối ưu chi phí</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--ely qua con số ends-->

    <!-- mô tả -->
    <div id="elyarchi">
        <section class="half-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 nopadding">
                        <div class="image hover-effect img-container">
                            <img alt="Ely Archi Consultation" src="hinhmenu/tuvan-trangchu.jpg" class="equalheight">
                        </div>
                    </div>
                    <div class="col-lg-6 nopadding d-flex align-items-center">
                        <div class="split-box text-center center-block container-padding equalheight"
                            style="position: relative;">
                            <div class="heading-title padding">
                                <span style="font-size:2rem" class="wow fadeInUp" data-wow-delay="300ms">
                                    Ely Archi
                                </span>
                                <h2 class="darkcolor bottom20 wow fadeInUp" data-wow-delay="400ms"
                                    style="font-size: 1.8rem; line-height: 37px;">
                                    CHÚNG TÔI NỖ LỰC VÌ MỘT KHÔNG GIAN SỐNG KHỎE MẠNH VÀ HẠNH PHÚC
                                </h2>
                                <p class="heading_space wow fadeInUp can-trai" data-wow-delay="500ms">
                                    TẠI ELY ARCHI, chúng tôi tin rằng mỗi công trình là một thực thể sống – nơi phản ánh
                                    tâm hồn người ở và khí chất của vùng đất nó thuộc về. Không chỉ là hình khối hay vật
                                    liệu, kiến trúc đối với Ely là cuộc đối thoại giữa con người, thiên nhiên và thời
                                    gian. <br>

                                    Với bề dày kinh nghiệm và một đội ngũ gắn bó bằng tình yêu kiến trúc, Ely Archi theo
                                    đuổi những thiết kế mang tính bản sắc – giản dị nhưng tinh tế, hiện đại mà vẫn thấm
                                    đẫm văn hóa. Chúng tôi xem trọng sự kết nối giữa ánh sáng, gió, cây xanh và đời sống
                                    – để mỗi không gian không chỉ "đẹp", mà còn "sống", "thở" và "cảm được". <br>

                                    Từ bản vẽ đầu tiên đến từng chi tiết hoàn thiện, Ely luôn đặt câu hỏi: Làm sao để
                                    công trình này góp phần làm đời sống trở nên an yên hơn? Chúng tôi không chạy theo
                                    xu hướng, mà tìm kiếm sự đúng đắn – đúng với con người, đúng với khí hậu, đúng với
                                    ngữ cảnh văn hóa địa phương.
                                </p>
                                <a href="#our-process" class="button btnsecondary pagescroll wow fadeInUp mt-4"
                                    data-wow-delay="700ms">
                                    Quy trình làm việc
                                </a>

                                <div class="wow fadeInUp text-end" data-wow-delay="300ms"
                                    style="position: absolute; bottom: 10px; right: 0; width: 100%; padding-right: 30px;">
                                    <span
                                        style="font-size: 2rem; color: #00bcd4; font-weight: bold; font-family: 'Open Sans', sans-serif;">
                                        NĂNG LỰC HOẠT ĐỘNG
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- mô tả Ends -->

    <!-- Bộ sưu tập -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet" />

    <section class="section-gallery py-5">
        <div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-01-01-01.png" data-lightbox="ely-gallery"
                            data-title="Đội ngũ nhân viên tại Ely Archi">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-01-01-01.png"
                                alt="Đội ngũ nhân viên tại Ely Archi"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-09-01.png" data-lightbox="ely-gallery"
                            data-title="Đội ngũ nhân viên tại Ely Archi">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-09-01.png"
                                alt="Đội ngũ nhân viên tại Ely Archi"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-01.png" data-lightbox="ely-gallery"
                            data-title="Các chứng chỉ hành nghề kiến trúc">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-01.png"
                                alt="Các chứng chỉ hành nghề kiến trúc"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-08-01.png" data-lightbox="ely-gallery"
                            data-title="Các chứng chỉ hành nghề kiến trúc">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-08-01.png"
                                alt="Các chứng chỉ hành nghề kiến trúc"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox-plus-jquery.min.js"></script>

    <style>
        .section-gallery .gallery-img-wrap {
            aspect-ratio: 1/1;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-gallery .gallery-img-wrap img {
            transition: transform 0.4s cubic-bezier(.4, 2, .6, 1);
        }

        .section-gallery .gallery-img-wrap:hover img {
            transform: scale(1.08);
        }

        @media (max-width: 767.98px) {
            .section-gallery .gallery-img-wrap {
                aspect-ratio: 4/3;
            }
        }
    </style>
    <!-- Bộ sưu tập -->
    <style>
        .container {
            width: 1525px;
        }
    </style>
    <!-- quy trình -->
    <section id="our-process" class="padding gradient_bg_default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="whitecolor">Quy Trình <span class="fontregular">Làm Việc</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <ul class="process-wrapp">
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                        <span class="pro-step bottom20">01</span>
                        <p class="fontbold bottom25">Tiếp nhận & tư vấn</p>
                        <p class="can-trai">Lắng nghe mong muốn của khách hàng để định hướng giải pháp phù hợp.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                        <span class="pro-step bottom20">02</span>
                        <p class="fontbold bottom25">Khảo sát hiện trạng</p>
                        <p class="can-trai">Đo đạc và đánh giá thực tế khu đất hoặc không gian hiện hữu.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                        <span class="pro-step bottom20">03</span>
                        <p class="fontbold bottom25">Lên phương án thiết kế</p>
                        <p class="can-trai">Đề xuất ý tưởng thiết kế sơ bộ phù hợp với nhu cầu, phong cách và ngân sách.
                        </p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                        <span class="pro-step bottom20">04</span>
                        <p class="fontbold bottom25">Triển khai hồ sơ KT</p>
                        <p class="can-trai">Hoàn thiện bản vẽ chi tiết và hồ sơ kỹ thuật để phục vụ thi công.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                        <span class="pro-step bottom20">05</span>
                        <p class="fontbold bottom25">Báo giá thi công</p>
                        <p class="can-trai">Lập dự toán chi tiết, tối ưu chi phí theo hạng mục và vật liệu.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="800ms">
                        <span class="pro-step bottom20">06</span>
                        <p class="fontbold bottom25">Thi công & bàn giao</p>
                        <p class="can-trai">Thực hiện thi công đúng tiến độ, đảm bảo chất lượng – thẩm mỹ – an toàn.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="800ms">
                        <span class="pro-step bottom20">07</span>
                        <p class="fontbold bottom25">Bảo hành dự án</p>
                        <p class="can-trai">Hỗ trợ xử lý các sự cố phát sinh, đảm bảo công trình vận hành ổn định sau
                            khi bàn giao.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="800ms">
                        <span class="pro-step bottom20">08</span>
                        <p class="fontbold bottom25">Kiểm tra & Bảo trì</p>
                        <p class="can-trai">Thực hiện kiểm tra định kỳ và bảo trì nhằm duy trì độ bền và tính thẩm mỹ
                            cho công trình./p>
                    </li>
                </ul>
            </div>
            <div class="row" style="padding-top:50px">
                <div class="col-12 text-center">
                    <a href="#contactus" class="button btnprimary pagescroll wow fadeInUp" data-wow-delay="500ms">
                        Liên hệ kiến trúc sư tư vấn miễn phí
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- quy trình ends-->

    <!-- mô tả -->
    <section id="our-feature" class="padding single-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 text-md-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title heading_space">
                        <span style="font-size: 2rem;">THIẾT KẾ KIẾN TRÚC, NỘI THẤT</span>
                        <h3 class="darkcolor bottom30"> THI CÔNG NỘI THẤT XÂY DỰNG</h3>
                    </div>
                    <p class="bottom35 can-trai">“Lấy uy tín làm nền tảng”, chúng tôi thực hiện xây dựng uy tín trên
                        từng chi
                        tiết không gian nhà bạn. Quán triệt tinh thần tỉ mẫn từ công đoạn thiết kế tới thi công hoàn
                        thiện, Ely Archi cam kết mỗi sản phẩm mà chúng tôi tạo ra là kết quả của sự lao động sáng tạo
                        không mệt mỏi của đội ngũ Kiến Trúc Sư, Kỹ Sư và nhân viên của chúng tôi nhằm đem lại một giá
                        trị đích thực về công năng, không gian, hình khối, tỉ lệ, màu sắc... ấn tượng nhất. </p>
                    <a href="#duan_noibat" class="button btnsecondary pagescroll">Dự án nổi bật</a>
                </div>
                <div class="col-md-6 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
                    <div class="image top50"><img alt="SEO" src="hinhmenu/bgely01.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- mô tả ends-->

    <!-- dự án -->
    <section id="duan_noibat" class="bglight">
        <div class="container">
            <div id="portfolio-measonry" class="cbp border-portfolio simple_overlay">
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=135 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude = $row['tieude'];
                    $mota = $row['mota'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude"; ?>
                            </h3>
                            <p>Địa điểm</p>
                            <p>Diện tích</p>
                            <p>Phong cách thiết kế</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">Xem chi tiết</a></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="cbp-item">
                    <div class="text_wrap wow fadeIn" data-wow-delay="350ms">
                        <div class="heading-title text-center padding_top">
                            <span style="font-size: 2rem;">Ely Archi</span>
                            <h2 style="margin-bottom:25px" class="darkcolor bottom10">Dự án nổi bật</h2>
                            <p class="can-trai">Từ những bản vẽ đầu tiên đến công trình hoàn thiện, Ely Archi đồng hành
                                để biến ý tưởng
                                của bạn thành hiện thực sống động, mang đậm dấu ấn cá nhân.</p>
                        </div>
                    </div>
                </div>
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=143 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude = $row['tieude'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude"; ?>
                            </h3>
                            <p>Địa điểm</p>
                            <p>Diện tích</p>
                            <p>Phong cách thiết kế</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">Xem chi tiết</a></p>
                        </div>
                    </div>
                <?php } ?>
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=141 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude = $row['tieude'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude"; ?>
                            </h3>
                            <p>Địa điểm</p>
                            <p>Diện tích</p>
                            <p>Phong cách thiết kế</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">Xem chi tiết</a></p>
                        </div>
                    </div>
                <?php } ?>
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=142 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude = $row['tieude'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude"; ?>
                            </h3>
                            <p>Địa điểm</p>
                            <p>Diện tích</p>
                            <p>Phong cách thiết kế</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">Xem chi tiết</a></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="cbp-item">
                    <div class="bottom-text">
                        <div class="cells  wow fadeIn" data-wow-delay="350ms">
                            <p>Ely Archi đã hoàn thành hơn </p>
                            <h2 class="port_head gradient_text">150</h2>
                            <p class="bottom15">dự án cho những khách hàng tuyệt vời</p>
                        </div>
                        <div class="cells wow fadeIn" data-wow-delay="350ms">
                            <a href="#contactus" class="button btnprimary btn-gradient-hvr pagescroll">Liên hệ tư vấn
                                ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dự án ends -->

    <!-- tại sao chọn -->
    <section id="why-elyarchi" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <span>Lý do bạn nên chọn chúng tôi</span>
                        <h2 style="line-height: 41px;" class="darkcolor heading_space">Tại sao chọn <span
                                class="fontregular">Ely Archi?</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row" id="app-feature">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="content-left clearfix">
                        <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="300ms">
                            <span class="icon"><i class="fa fa-lightbulb-o"></i></span>
                            <div class="text">
                                <h4>Thiết kế độc bản</h4>
                                <p class="can-trai">Chúng tôi không sao chép – mỗi công trình là một tác phẩm duy nhất,
                                    thể hiện cá tính
                                    của bạn.</p>
                            </div>
                        </div>
                        <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="350ms">
                            <span class="icon"><i class="fa fa-handshake-o"></i></span>
                            <div class="text">
                                <h4>Cam kết đồng hành</h4>
                                <p class="can-trai">Theo sát từ khâu ý tưởng đến khi bàn giao công trình, đảm bảo đúng
                                    cam kết ban đầu.
                                </p>
                            </div>
                        </div>
                        <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="400ms">
                            <span class="icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="text">
                                <h4>Chú trọng công năng</h4>
                                <p class="can-trai">Không chỉ đẹp – công trình của bạn còn phải tiện nghi, tối ưu không
                                    gian sử dụng.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="image feature-item text-center wow fadeIn" data-wow-delay="500ms">
                        <img src="hinhmenu/taisao.jpg" alt="Vì sao chọn Ely Archi" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="content-right clearfix">
                        <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="300ms">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <div class="text">
                                <h4>Chuyên sâu nhà ở dân dụng</h4>
                                <p class="can-trai">Tập trung chuyên môn vào lĩnh vực nhà ở giúp Ely Archi hiểu rõ và
                                    tối ưu từng chi
                                    tiết.</p>
                            </div>
                        </div>
                        <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="350ms">
                            <span class="icon"><i class="fa fa-calculator"></i></span>
                            <div class="text">
                                <h4>Tối ưu chi phí</h4>
                                <p class="can-trai">Chi phí hợp lý, minh bạch vật tư – tiến độ rõ ràng, không phát sinh
                                    ngoài dự toán.
                                </p>
                            </div>
                        </div>
                        <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="400ms">
                            <span class="icon"><i class="fa fa-clock-o"></i></span>
                            <div class="text">
                                <h4>Đúng tiến độ – đúng chất lượng</h4>
                                <p class="can-trai">Quy trình quản lý chặt chẽ giúp đảm bảo tiến độ nhanh và chất lượng
                                    thi công ổn định.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tại sao chọn ends-->

    <!-- Background Parallax -->
    <!-- <section id="video-parallax" class="video-parallax padding parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="heading-title whitecolor text-md-start text-center wow fadeInUp" data-wow-delay="300ms">
                        <span>We have an excellent story</span>
                        <h2 class="fontregular">Watch Our Video</h2>
                        <a data-fancybox
                            href="https://www.youtube.com/watch?v=GhvD7NtUT-Q&amp;autoplay=1&amp;rel=0&amp;controls=1&amp;showinfo=0"
                            class="button btnprimary fontmedium top20"><i class="fa fa-play"></i> &nbsp;Play Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--Background Parallax-->


    <!-- nhận xét -->
    <section style="padding: 0px;" id="our-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                        <span>Khách hàng nói về Ely Archi</span>
                        <h2 style="line-height: 41px;" class="darkcolor">Cảm nhận của khách hàng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40 can-trai">Tôi rất hài lòng với dịch vụ thiết kế và thi công của
                                        Ely Archi.
                                        Đội ngũ làm việc chuyên nghiệp, sáng tạo và luôn chú trọng đến từng chi tiết nhỏ
                                        nhất. Căn nhà của tôi trở nên rất ấm cúng và hiện đại.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="site_tuvan/images/testimonial-1.jpg">
                                </div>
                                <h4 class="darkcolor">Nguyễn Hoàng Minh</h4>
                                <small class="defaultcolor">Doanh nhân</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40 can-trai">Ely Archi không chỉ thiết kế đẹp mà còn biết lắng nghe
                                        khách
                                        hàng. Họ tư vấn kỹ lưỡng và thi công đúng tiến độ. Tôi cảm thấy yên tâm khi chọn
                                        Ely làm đơn vị thi công nội thất cho văn phòng công ty.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="site_tuvan/images/testimonial-2.jpg">
                                </div>
                                <h4 class="darkcolor">Trần Thu Hà</h4>
                                <small class="defaultcolor">Giám đốc điều hành</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40 can-trai">Không gian được Ely Archi thiết kế khiến tôi thật sự
                                        bất ngờ.
                                        Mọi thứ đều hài hòa, thẩm mỹ cao và rất tiện nghi. Họ luôn làm việc có tâm và
                                        sẵn sàng điều chỉnh theo mong muốn của khách hàng.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="site_tuvan/images/testimonial-3.jpg">
                                </div>
                                <h4 class="darkcolor">Lê Quốc Bảo</h4>
                                <small class="defaultcolor">Kiến trúc sư độc lập</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--nhận xét Ends-->

    <!-- liên hệ -->
    <section id="contactus" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title heading_space wow fadeIn" data-wow-delay="300ms">
                        <span>Hãy Liên Lạc Với Chúng Tôi</span>
                        <h2 class="darkcolor">Liên Hệ Ely Archi</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                    <p>“Ely Archi Lấy con người làm trung tâm của mọi sáng tạo”. Trên tinh thần hợp tác để cùng thành
                        công, chúng tôi và bạn sẽ cùng nhau kiến tạo nên những không gian hoàn hảo cho cuộc sống đầy thú
                        vị, thể hiện được quan điểm, phong cách và mang những dấu ấn riêng của bạn.</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h3 class="bottom25">Địa chỉ</h3>
                            <p class="bottom15">T323A Lê Quang Định, Phường 5, Quận Bình Thạnh, Tp.HCM </p>
                            <a class="pickus" href="https://maps.app.goo.gl/1BTyy6Ae8Sdk9zZ9A"
                                data-text="Xem bản đồ">Xem bản đồ</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h3 class="bottom25">Điện thoại</h3>
                            <p class="bottom15" style="font-weight:800">Kts Phan Văn Nhựt <span class="block">
                                    Hội KTS TP HCM <br>
                                    0931 78 06 16
                                </span> </p>
                            <a class="button btnprimary pagescroll " style="font-weight:800" href="tel:0931780616">Gọi
                                ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" id="tt_mh" name="tt_mh" method="post"
                        action="xulylienhe/xuly_lienhe.php" onsubmit="return checkInput();">
                        <div class="row">

                            <div class="col-sm-12" id="result"></div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" name="txt_hoten" type="text" id="txt_hoten" required
                                        class="form-control" placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" name="txt_diachi" id="txt_diachi" type="text"
                                        class="form-control" required placeholder="Địa chỉ">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" name="txt_email" id="txt_email" type="text"
                                        class="form-control" required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" name="txt_dt" id="txt_dt"
                                        class="form-control" required placeholder="Điện thoại">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <textarea class="form-control" name="txt_nd" id="txt_nd" rows="3"
                                        class="form-control " required placeholder="Nội Dung"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button name="luu" type="submit" value="luu" class="button btnprimary"
                                    id="submit_btn">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container" style="width: 90%; height: 600px; margin: 0 auto; overflow: hidden;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4689.529453618969!2d106.69055449999999!3d10.8115094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f649f8ddfd7%3A0xa7c0700abb9b94d8!2zQ8O0bmcgVHkgS2nhur9uIFRyw7pjIFjDonkgROG7sW5nIEVMWSBBUkNISQ!5e1!3m2!1svi!2s!4v1748487222213!5m2!1svi!2s"
                width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </section>
    <!-- liên hệ Ends-->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="site_tuvan/js/bootstrap.min.js"></script>
    <script src="site_tuvan/js/jquery-3.6.0.min.js"></script>

    <!--Bootstrap Core-->
    <script src="site_tuvan/js/popper.min.js"></script>

    <!--to view items on reach-->
    <script src="site_tuvan/js/jquery.appear.js"></script>

    <!--Equal-Heights-->
    <script src="site_tuvan/js/jquery.matchHeight-min.js"></script>

    <!--Owl Slider-->
    <!--<script src="site_tuvan/js/owl.carousel.min.js"></script>-->

    <!--number counters-->
    <script src="site_tuvan/js/jquery-countTo.js"></script>

    <!--Parallax Background-->
    <script src="site_tuvan/js/parallaxie.js"></script>

    <!--Cubefolio Gallery-->
    <script src="site_tuvan/js/jquery.cubeportfolio.min.js"></script>

    <!--FancyBox popup-->
    <script src="site_tuvan/js/jquery.fancybox.min.js"></script>

    <!-- Video Background-->
    <script src="site_tuvan/js/jquery.background-video.js"></script>

    <!--TypeWriter-->
    <script src="site_tuvan/js/typewriter.js"></script>

    <!--Particles-->
    <script src="site_tuvan/js/particles.min.js"></script>

    <!--WOw animations-->
    <script src="site_tuvan/js/wow.min.js"></script>

    <!--Revolution SLider-->
    <script src="site_tuvan/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="site_tuvan/js/revolution/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="site_tuvan/js/revolution/extensions/revolution.extension.video.min.js"></script>

    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnKEvlwpyjXfS_h-J1Cne2fPMqeb44Mk"></script>
    <script src="site_tuvan/js/functions.js"></script>
</body>