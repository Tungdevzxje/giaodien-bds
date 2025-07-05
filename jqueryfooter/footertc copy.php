<style>
    .title-footer {
        color: #ff5e14;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .title-footer-tduy {
        color: #ff5e14;
        font-size: 20px;
        font-weight: 600;
    }

    ul {
        margin: 0px;
        padding: 0px;
    }

    .footer-section {
        background-attachment: fixed;
        background-image: url(assets/img/cta-bg-2.jpg);
        position: relative;
    }

    .footer-cta {
        border-bottom: 1px solid #fff;
    }

    .footer-cta .cta-text span {
        display: block;
        white-space: pre-line;
        word-break: break-word;
        text-align: center;
    }

    @media (max-width: 768px) {
        .footer-cta .cta-text span {
            font-size: 14px;
            text-align: left;
        }
    }

    @media screen and (max-width: 576px) {
        .footer-img {
            border-radius: 0 !important;
            width: 100% !important;
            height: 360px !important;
        }
    }


    .single-cta {
        padding: 25px 20px;
        text-align: center;
        height: 100%;
    }



    .cta-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    .cta-text img {
        width: 75px;
        height: 75px;
        object-fit: contain;
    }

    .title-footer {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 4px;
        text-transform: uppercase;
    }

    .cta-text span {
        font-size: 18px;
        color: #fff;
        font-weight: 500;
    }


    .footer-content {
        position: relative;
        z-index: 2;
    }

    .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
    }

    .footer-logo {
        margin-bottom: 30px;
    }

    .footer-logo img {
        max-width: 200px;
    }

    .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
        color: #ffffff;
        line-height: 28px;
    }

    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }

    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }

    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        margin-bottom: 30px;
    }

    .facebook-bg {
        background: #3B5998;
    }

    .twitter-bg {
        background: #55ACEE;
    }

    .google-bg {
        background: #DD4B39;
    }

    .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }

    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
    }

    .footer-widget ul li {
        display: inline-block;
        width: 50%;
        margin-bottom: 12px;

    }

    .footer-widget ul li a:hover {
        color: #ff5e14;
    }

    .footer-widget ul li a {
        color: #ffffff;
        text-transform: capitalize;
    }

    .subscribe-form {
        position: relative;
        overflow: hidden;
    }

    .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
    }

    .subscribe-form button {
        position: absolute;
        right: 0;
        background: #ff5e14;
        padding: 13px 20px;
        border: 1px solid #ff5e14;
        top: 0;
    }

    .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
    }

    .copyright-area {
        background: #2a2e39;
        padding: 25px 0;
    }

    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #fff;
    }

    .copyright-text p a {
        color: #ff5e14;
    }

    .footer-menu li {
        display: inline-block;
        margin-left: 20px;
    }

    .footer-menu li:hover a {
        color: #ff5e14;
    }

    .footer-menu li a {
        font-size: 14px;
        color: #fff;
    }

    .footer-img {
        border-radius: 50%;
        width: 70%;
        height: 280px;
        object-fit: none;
    }


    .footer-contact {
        position: relative;
        color: #fff;
    }

    .footer-title {
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 10px;
    }

    .footer-line {
        width: 50px;
        height: 3px;
        background: #fff;
        margin-bottom: 20px;
    }

    .company-name {
        font-size: 20px;
        margin: 20px 0 18px;
        color: #fff;
        font-weight: 600;
    }

    .title-footer-abm-end {
        display: block;
        font-size: 15px;
        font-weight: 400;
        line-height: 2.5;
        color: #fff;
        margin-top: 10px;
        margin-bottom: 0px !important;
        text-align: center;
    }

    .title-footer-abm {
        display: block;
        font-size: 15px;
        font-weight: 400;
        line-height: 1.7;
        color: #fff;
        margin-bottom: 8px;
    }

    .footer-contact {
        color: #fff;
    }

    .footer-title {
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .footer-line {
        width: 50px;
        height: 3px;
        background: #fff;
        margin-bottom: 20px;
    }

    .footer-link {
        display: block;
        font-size: 15px;
        color: #ddd;
        margin-bottom: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-link:hover {
        color: #ffc107;
        /* hoặc #AD0002 nếu bạn dùng theme đỏ */
        padding-left: 6px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5">
            <!-- <div class="footer-logo">
                <div class="title-footer-tduy">THÀNH LẬP DOANH NGHIỆP ĐÀ NẴNG</div>
            </div> -->
            <div class="row">
                <div class="col-xl-3 col-md-3 mb-30">
                    <div class="single-cta">
                        <div class="cta-text">
                            <img src="hinhmenu/ic-maps.png" alt="">
                            <div class="title-footer">Địa chỉ</div>
                            <p class="title-footer-abm"><b>26, Nguyễn Duy, P. Khuê Trung, Q. Cẩm Lệ, Tp. Đà Nẵng</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-30">
                    <div class="single-cta">
                        <div class="cta-text">
                            <img src="hinhmenu/ic-maps.png" alt="">
                            <div class="title-footer">Điện thoại</div>
                            <span><b>0799 454 348</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3 mb-30">
                    <div class="single-cta">
                        <div class="cta-text">
                            <img src="hinhmenu/ic-email.png" alt="">
                            <div class="title-footer">Email</div>
                            <span> kinhdoanhatv@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-30">
                    <div class="single-cta">
                        <div class="cta-text">
                            <img src="hinhmenu/ic-website.png" alt="">
                            <div class="title-footer">Website</div>
                            <span> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <img src="hinhmenu/chu-ky-so-danang.gif" alt="" class="footer-img">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-4 col-md-6 mb-10">
                    <div class="footer-contact">
                        <div class="footer-title">LIÊN HỆ VỚI CHÚNG TÔI</div>
                        <div class="footer-line"></div>

                        <h3 class="company-name">CÔNG TY TNHH IN ẤN ATV</h3>

                        <p class="title-footer-abm">Địa chỉ: 26, Nguyễn Duy, P. Khuê Trung, Q. Cẩm Lệ, Tp. Đà Nẵng
                        </p>
                        <p class="title-footer-abm">Điện thoại: 0799 454 348</p>
                        <p class="title-footer-abm">Email: kinhdoanhatv@gmail.com</p>
                        <p class="title-footer-abm">Website: </p>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-6 mb-10">
                    <div class="footer-contact">
                        <div class="footer-title">CHÍNH SÁCH</div>
                        <div class="footer-line"></div>

                        <a href="trangchu" class="footer-link"><b>Trang chủ</b></a>
                        <a href="thicong-xaydung-lamdong" class="footer-link"><b>Giới thiệu</b></a>
                        <a href="dichvu-thicong-xaydung" class="footer-link"><b>Dịch vụ</b></a>
                        <a href="congtrinh-noibat" class="footer-link"><b>Công trình nổi bật</b></a>
                        <a href="" class="footer-link"><b>Hồ sơ năng lực</b></a>
                        <a href="donvithietke-xaydung-lamdong" class="footer-link"><b>Tin tức</b></a>
                        <a href="lien-he" class="footer-link"><b>Liên hệ</b></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <p class="title-footer-abm-end">Copyright &copy; 2025, All Right Reserved CÔNG TY TNHH
        XÂY DỰNG THƯƠNG
        MẠI DỊCH VỤ ABM</p>
</footer>