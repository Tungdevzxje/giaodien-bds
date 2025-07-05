<link rel="stylesheet" href="site_tuvan/css/plugins.css">
<link rel="stylesheet" href="site_tuvan/css/style.css">
<style>
    @media screen and (max-width: 768px) {
        #ourhome {
            height: 80vh !important;
        }

        .top50 {
            padding-top: 75px;
        }
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

    /*.button.btnsecondary.pagescroll {*/
    /*    animation: pulse 2s infinite;*/
    /*    font-weight: 500;*/
    /*    color: #F8F8F8;*/
    /*}*/

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
                            <span style="line-height: 30px; margin-bottom: 20px;" class="fontbold block wow fadeIn"
                                data-wow-delay="400ms">Ely Archi – Creating living spaces that reflect your unique
                                identity
                            </span>
                            <span style="line-height: 30px;" class="block font-xlight wow fadeIn"
                                data-wow-delay="500ms"> We provide full-package design and construction services for
                                unique residential projects, optimized for functionality and built to stand the test of
                                time.
                            </span>
                        </h2>
                        <a class="playbtn pagescroll wow fadeInUp" href="#ely-intro">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Ely archi
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
        <video class="my-background-video jquery-background-video" loop autoplay muted playsinline>
            <source src="site_tuvan/video/video-slide.mp4" type="video/mp4">
        </video>
    </section>
    <!--Main Slider ends -->


    <!-- Divider Section -->
    <section class="section-divider text-center"
        style="background: linear-gradient(90deg, #f8fafc 0%, #e0e7ef 100%); padding: 60px 0;">
        <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="300ms" style="font-weight:700; color:#222; margin-bottom:30px;">
                Discover Ely Archi
            </h2>
            <p class="lead mb-4 wow fadeInUp" data-wow-delay="400ms" style="color:#555;">
                We accompany you in creating unique, optimized, and sustainable living spaces.
            </p>
            <a href="#elyarchi" class="button btnsecondary pagescroll wow fadeInUp" data-wow-delay="500ms">
                Discover
            </a>

        </div>
    </section>
    <!-- End Divider Section -->
    <section id="ely-intro" class="padding_top fact-iconic gradient_bg">
        <div class="container">
            <div class="row">
                <!-- Text introduction -->
                <div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-start text-center wow fadeInLeft"
                    data-wow-delay="300ms">
                    <h3 style="color: #fff; line-height: 37px;" class="bottom25">Ely Archi – Creating Living Spaces with
                        Personal Touch</h3>
                    <p class="title">
                        Ely Archi is an architectural company specializing in residential design and construction,<br>
                        delivering modern, sustainable, and highly personalized living space solutions.
                    </p>
                </div>

                <!-- Number highlights -->
                <div class="col-md-7 col-sm-12 text-center">
                    <div class="row">
                        <!-- Experience -->
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
                            data-wow-delay="400ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="10" data-speed="2000"></span><i
                                    class="fa fa-plus"></i>
                            </div>
                            <p class="title">Years of Experience<br></p>
                        </div>

                        <!-- Completed projects -->
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
                            data-wow-delay="350ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="150" data-speed="2000"></span><i
                                    class="fa fa-plus"></i>
                            </div>
                            <p class="title">Completed Projects<br></p>
                        </div>

                        <!-- Core values -->
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
                            data-wow-delay="300ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="3" data-speed="1500"></span>
                            </div>
                            <p class="title">Core Principles<br>
                                <small>Aesthetics – Functionality – Cost Optimization</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Half Image Section -->
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
                        <div class="split-box text-center center-block container-padding equalheight">
                            <div class="heading-title padding">
                                <span style="font-size:2rem" class="wow fadeInUp" data-wow-delay="300ms">
                                    Ely Archi</span>
                                <h2 class="darkcolor bottom20 wow fadeInUp" data-wow-delay="400ms"
                                    style="font-size: 1.8rem; line-height: 37px;">
                                    WE STRIVE TO CREATE HEALTHY AND HAPPY LIVING SPACES
                                </h2>
                                <p class="heading_space wow fadeInUp" data-wow-delay="500ms">
                                    “Ely Archi puts people at the heart of every creative endeavor.” With a spirit of
                                    cooperation and shared success, we will work with you to create perfect living
                                    spaces that reflect your perspectives, lifestyle, and personal touch.
                                </p>
                                <a href="#our-process" class="button btnsecondary pagescroll wow fadeInUp mt-4"
                                    data-wow-delay="700ms">
                                    Our Work Process
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Half Image Section Ends -->

    <!-- Bộ sưu tập -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet" />

    <section class="section-gallery py-5">
        <div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-01-01-01.png" data-lightbox="ely-gallery"
                            data-title="The staff at Ely Archi">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-01-01-01.png"
                                alt="The staff at Ely Archi"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-09-01.png" data-lightbox="ely-gallery"
                            data-title="The staff at Ely Archi">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-09-09-01.png"
                                alt="The staff at Ely Archi"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-01.png" data-lightbox="ely-gallery"
                            data-title="Architectural practice certificates">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-01.png"
                                alt="Architectural practice certificates"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-img-wrap">
                        <a href="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-08-01.png" data-lightbox="ely-gallery"
                            data-title="Architectural practice certificates">
                            <img src="hinhmenu/Profile-ELYARCHI-A4-Ngang-V3-08-08-08-01.png"
                                alt="Architectural practice certificates"
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
            background: #f8fafc;
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
    <!-- WOrk Process-->
    <section id="our-process" class="padding gradient_bg_default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="whitecolor">Our <span class="fontregular">Working Process</span></h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <ul class="process-wrapp">
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                        <span class="pro-step bottom20">01</span>
                        <p class="fontbold bottom25">Requirement Consultation</p>
                        <p>We listen to your expectations to define the right direction and tailored solution.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                        <span class="pro-step bottom20">02</span>
                        <p class="fontbold bottom25">Site Inspection</p>
                        <p>We conduct on-site measurements and assess actual conditions for accurate planning.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                        <span class="pro-step bottom20">03</span>
                        <p class="fontbold bottom25">Concept Design Proposal</p>
                        <p>We propose a preliminary design based on your needs, style, and budget.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                        <span class="pro-step bottom20">04</span>
                        <p class="fontbold bottom25">Technical Documentation</p>
                        <p>We finalize detailed drawings and technical files for construction execution.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                        <span class="pro-step bottom20">05</span>
                        <p class="fontbold bottom25">Full Package Quotation</p>
                        <p>We prepare a detailed quotation optimized for materials and budget control.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="800ms">
                        <span class="pro-step bottom20">06</span>
                        <p class="fontbold bottom25">Construction & Handover</p>
                        <p>We carry out construction on time with guaranteed quality, aesthetics, and safety.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="900ms">
                        <span class="pro-step bottom20">07</span>
                        <p class="fontbold bottom25">Project Warranty</p>
                        <p class="can-trai">Provide support for any arising issues to ensure stable operation after
                            project handover.</p>
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="1000ms">
                        <span class="pro-step bottom20">08</span>
                        <p class="fontbold bottom25">Inspection & Maintenance</p>
                        <p class="can-trai">Perform regular inspections and maintenance to preserve the durability and
                            aesthetics of the project.</p>
                    </li>

                </ul>
            </div>
            <div class="row" style="padding-top:50px">
                <div class="col-12 text-center">
                    <a href="#contactus" class="button btnprimary pagescroll wow fadeInUp" data-wow-delay="500ms">
                        Get a free consultation with our architect
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--WOrk Process ends-->

    <!--Some Feature -->
    <section id="our-feature" class="padding single-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 text-md-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title heading_space">
                        <span style="font-size: 2rem;">ARCHITECTURAL & INTERIOR DESIGN</span>
                        <h3 style="line-height: 40px;" class="darkcolor bottom30">INTERIOR & CONSTRUCTION EXECUTION</h3>
                    </div>
                    <p class="bottom35">
                        “With credibility as our foundation,” we build trust into every detail of your living space.
                        Embracing a meticulous spirit from design to final execution, Ely Archi ensures that each
                        product we create is the result of tireless creative effort from our team of Architects,
                        Engineers, and dedicated staff. We aim to deliver true value in functionality, space, form,
                        proportion, and color—with a lasting impression.
                    </p>
                    <a href="#duan_noibat" class="button btnsecondary pagescroll">Featured Projects</a>
                </div>

                <div class="col-md-6 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
                    <div class="image top50"><img alt="SEO" src="hinhmenu/bgely01.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Some Feature ends-->

    <!--Gallery-->
    <section id="duan_noibat" class="bglight">
        <div class="container">
            <div id="portfolio-measonry" class="cbp border-portfolio simple_overlay">
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=135 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude_en = $row['tieude_en'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px;" class="top30"><?php echo "$tieude_en"; ?></h3>
                            <p>Location</p>
                            <p>Area</p>
                            <p>Design Style</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">View Details</a></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="cbp-item">
                    <div class="text_wrap wow fadeIn" data-wow-delay="350ms">
                        <div class="heading-title text-center padding_top">
                            <span style="font-size: 2rem;">Ely Archi</span>
                            <h2 style="margin-bottom:25px" class="darkcolor bottom10">Featured Projects</h2>
                            <p>From the initial sketches to the completed project, Ely Archi is your trusted partner in
                                turning ideas into vibrant realities—each space uniquely reflecting your personal style.
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=143 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude_en = $row['tieude_en'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude_en"; ?>
                            </h3>
                            <p>Location</p>
                            <p>Area</p>
                            <p>Design Style</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">View Details</a></p>
                        </div>
                    </div>
                <?php } ?>
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=141 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude_en = $row['tieude_en'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude_en"; ?>
                            </h3>
                            <p>Location</p>
                            <p>Area</p>
                            <p>Design Style</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">View Details</a></p>
                        </div>
                    </div>
                <?php } ?>
                <?php
                require('db.php');
                $tv = "select * from tin_dichvuabc where id=142 order by id ASC limit 0,1 ";
                $tv = mysqli_query($link, $tv);
                while ($row = mysqli_fetch_array($tv)) {
                    $id = $row['id'];
                    $tieude_en = $row['tieude_en'];
                    $mota_en = $row['mota_en'];
                    $link_hinh = $row['hinhanh'];
                    $url = $row['linkurl'];
                    $link = "chi-tiet/$url";
                    ?>
                    <div class="cbp-item itemshadow">
                        <img src="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>">
                        <div class="overlay center-block whitecolor">
                            <a class="plus" data-fancybox="gallery"
                                href="HinhCTSP/Hinhdichvu/<?php echo "$link_hinh"; ?>"></a>
                            <h3 style="margin-bottom: 20px; text-align: center; line-height: 35px;" class="top30">
                                <?php echo "$tieude_en"; ?>
                            </h3>
                            <p>Location</p>
                            <p>Area</p>
                            <p>Design Style</p>
                            <p><a href="<?php echo $link; ?>" class="btn btn-primary">View Details</a></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="cbp-item">
                    <div class="bottom-text">
                        <div class="cells wow fadeIn" data-wow-delay="350ms">
                            <p>Ely Archi has completed over</p>
                            <h2 class="port_head gradient_text">150</h2>
                            <p class="bottom15">projects for amazing clients</p>
                        </div>
                        <div class="cells wow fadeIn" data-wow-delay="350ms">
                            <a href="#contactus" class="button btnsecondary btn-gradient-hvr pagescroll">Contact for
                                consultation now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery ends -->

    <!-- Mobile Apps -->
    <section id="why-elyarchi" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <span>Why choose us</span>
                        <h2 class="darkcolor heading_space">Why <span class="fontregular">Ely Archi?</span></h2>
                    </div>
                </div>
            </div>
            <div class="row" id="app-feature">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="content-left clearfix">
                        <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="300ms">
                            <span class="icon"><i class="fa fa-lightbulb-o"></i></span>
                            <div class="text">
                                <h4>Unique Design</h4>
                                <p>We never copy – each project is a one-of-a-kind creation that reflects your
                                    personality.</p>
                            </div>
                        </div>
                        <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="350ms">
                            <span class="icon"><i class="fa fa-handshake-o"></i></span>
                            <div class="text">
                                <h4>Commitment Throughout</h4>
                                <p>We accompany you from concept to final handover, delivering on all initial
                                    commitments.</p>
                            </div>
                        </div>
                        <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="400ms">
                            <span class="icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="text">
                                <h4>Functionality First</h4>
                                <p>Beyond beauty, your space must be practical and optimized for daily living.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="image feature-item text-center wow fadeIn" data-wow-delay="500ms">
                        <img src="hinhmenu/why.jpg" alt="Why choose Ely Archi" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="content-right clearfix">
                        <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="300ms">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <div class="text">
                                <h4>Residential Expertise</h4>
                                <p>We specialize in housing, allowing us to fine-tune every detail for optimal results.
                                </p>
                            </div>
                        </div>
                        <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="350ms">
                            <span class="icon"><i class="fa fa-calculator"></i></span>
                            <div class="text">
                                <h4>Cost Optimization</h4>
                                <p>Reasonable pricing, transparent materials, clear timelines, and no hidden fees.</p>
                            </div>
                        </div>
                        <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="400ms">
                            <span class="icon"><i class="fa fa-clock-o"></i></span>
                            <div class="text">
                                <h4>On-Time – High-Quality</h4>
                                <p>A tightly managed process ensures fast progress and consistently high construction
                                    quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Mobile Apps ends-->

    <!-- Testimonials -->
    <section id="our-testimonial" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                        <span>What Customers Say </span>
                        <h2 style="line-height: 41px;" class="darkcolor">Customers talk about Ely Archi</h2>
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
                                    <p class="bottom40">I'm extremely satisfied with the design and construction service
                                        from Ely Archi. The team is professional, creative, and pays attention to even
                                        the smallest details. My house feels cozy and modern, just the way I envisioned
                                        it.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="site_tuvan/images/testimonial-1.jpg">
                                </div>
                                <h4 class="darkcolor">Minh Hoang Nguyen</h4>
                                <small class="defaultcolor">Business Owner</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Ely Archi not only delivers beautiful designs but also truly
                                        listens to their clients. They offer detailed consultation and stick to the
                                        schedule. I felt completely confident choosing Ely for our office interior
                                        project.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="site_tuvan/images/testimonial-2.jpg">
                                </div>
                                <h4 class="darkcolor">Ha Thu Tran</h4>
                                <small class="defaultcolor">CEO</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Working with Ely Archi was a great experience. Their design
                                        brought life to our apartment. The blend of aesthetics and functionality is
                                        exceptional. I highly appreciate their attention to detail and flexibility.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="site_tuvan/images/testimonial-3.jpg">
                                </div>
                                <h4 class="darkcolor">Quoc Bao Le</h4>
                                <small class="defaultcolor">Interior Consultant</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Ends-->

    <!-- Contact US -->
    <section id="contactus" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title heading_space wow fadeIn" data-wow-delay="300ms">
                        <span>Feel Free to Reach Out to Us</span>
                        <h2 class="darkcolor">Contact Ely</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                    <p>“Ely Archi puts people at the center of every creative process.” With a spirit of cooperation
                        toward success, we will work with you to create perfect living spaces that reflect your
                        perspective, style, and unique identity.</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Address</h5>
                            <p class="bottom15">T323A Le Quang Dinh, Ward 5, Binh Thanh District, Ho Chi Minh City</p>
                            <a class="pickus" href="https://maps.app.goo.gl/1BTyy6Ae8Sdk9zZ9A" data-text="View Map">View
                                Map</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Phone</h5>
                            <p class="bottom15" style="font-weight:800">Architect Phan Van Nhut <span class="block">
                                    HCMC Association of Architects <br>
                                    0931 78 06 16
                                </span> </p>
                            <a class="button btnprimary pagescroll " style="font-weight:800" href="tel:0931780616">Call Now</a>
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
                                        class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" name="txt_diachi" id="txt_diachi" type="text"
                                        class="form-control" required placeholder="Address">
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
                                        class="form-control" required placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <textarea class="form-control" name="txt_nd" id="txt_nd" rows="3"
                                        class="form-control " required placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button name="luu" type="submit" value="luu" class="button btnprimary"
                                    id="submit_btn">Send</button>
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

    <!--Contact US Ends-->


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
    <script src="site_tuvan/js/owl.carousel.min.js"></script>

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