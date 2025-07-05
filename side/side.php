<link rel="stylesheet" href="site_tuvan/css/plugins.css">
<link rel="stylesheet" href="site_tuvan/css/style.css">
<style>
    /* General background video layout */
    #ourhome {
        position: relative;
        overflow: hidden;
        height: 100vh;
        width: 100%;
    }

    #ourhome video.my-background-video {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
        object-fit: cover;
        background-size: cover;
    }

    /* Responsive height on mobile */
    @media screen and (max-width: 768px) {
        #ourhome {
            height: 80vh !important;
        }

        #ourhome video.my-background-video {
            height: 60vh !important;
        }
        .top50{
            padding-top:75px;
        }
    }


    /* Ensure content is above video */
    #ourhome .container {
        position: relative;
        z-index: 2;
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
</style>

<section class="full-screen parallax-video parallaxie center-block bg-video-container" id="ourhome">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <div class="center-item text-center video-content">
                    <h2 class="top50 bottom35 whitecolor" style="font-size: 23.5px;">
                        <span style="line-height: 30px; margin-bottom:20px" class="fontbold block wow fadeIn"
                            data-wow-delay="400ms">
                            Ely Archi – Kiến tạo không gian sống đậm dấu ấn cá nhân
                        </span>
                        <span style="line-height: 30px;" class="block font-xlight wow fadeIn" data-wow-delay="500ms">
                            Chúng tôi thiết kế và thi công trọn gói những công trình nhà ở độc bản tối ưu công năng –
                            bền vững theo thời gian.
                        </span>
                    </h2>

                    <a class="playbtn pagescroll wow fadeInUp" href="#ely-intro">
                        <span></span><span></span><span></span><span></span>
                        Giới thiệu
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-sm-1"></div>
        </div>
    </div>

    <video autoplay muted loop playsinline class="my-background-video">
        <source src="site_tuvan/video/video_landing.mp4" type="video/mp4">
    </video>

</section>