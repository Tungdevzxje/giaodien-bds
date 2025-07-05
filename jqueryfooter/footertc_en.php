<style>
    .newsletter-section {
        background: linear-gradient(to right, #2c3e50, #4ca1af);
        padding: 20px 0;
        color: #ffffff;
    }

    .newsletter-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #ff0;
    }

    .newsletter-desc {
        font-size: 16px;
        opacity: 0.9;
    }

    .newsletter-form input.form-control {
        border: none;
        height: 45px;
        border-radius: 5px;
        padding-left: 15px;
    }

    .newsletter-form .btn {
        height: 45px;
        border-radius: 5px;
        background-color: #0085ff;
        color: #fff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .newsletter-form .btn:hover {
        background-color: #006edc;
    }

    a {
        transition: .3s;
    }

    a:hover,
    a:active,
    a:focus {
        outline: none;
        text-decoration: none;
    }

    .footer {
        position: relative;
        padding-top: 45px;
        background: #444f5a;
    }

    .footer .footer-blog,
    .footer .footer-insta,
    .footer .footer-tags,
    .footer .footer-newsletter {
        position: relative;
        margin-bottom: 25px;
    }

    .footer .footer-newsletter input::placeholder {
        color: #eeeeee;
        opacity: 1;
    }

    .footer .footer-blog h3,
    .footer .footer-insta h3,
    .footer .footer-tags h3,
    .footer .footer-newsletter h3 {
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 10px;
        font-size: 18px;
        font-weight: 400;
        color: #ffffff;
    }

    .footer .footer-blog h3::after,
    .footer .footer-insta h3::after,
    .footer .footer-tags h3::after,
    .footer .footer-newsletter h3::after {
        position: absolute;
        content: "";
        width: 50px;
        height: 2px;
        left: 0;
        bottom: 0;
        background: #ffffff;
    }

    .footer-title {
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 10px;
        font-size: 18px;
        font-weight: 400;
        color: #ffffff;
    }

    .footer-title::after {
        position: absolute;
        content: "";
        width: 50px;
        height: 2px;
        left: 0;
        bottom: 0;
        background: #ffffff;
    }


    .footer .footer-blog div {
        position: relative;
        /* padding-left: 15px; */
    }

    /* .footer .footer-blog div::before {
        position: absolute;
        content: "\f105";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: #cccccc;
        left: 0;
    } */

    .footer .footer-blog div a {
        display: block;
        margin-bottom: 12px;
        font-size: 16px;
        color: #cccccc;
    }

    .footer .footer-blog div a:hover {
        color: #0085ff;
    }

    .footer .footer-blog div p {
        /* padding-left: 20px; */
        color: #c5bfbf;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    /* .footer .footer-blog div p::before {
        position: absolute;
        content: "\f017";
        font-family: "Font Awesome 5 Free";
        font-weight: 400;
        color: #757575;
        left: 15px;
    } */

    .footer .footer-insta {
        float: left;
        font-size: 0;
    }

    .footer .footer-insta a {
        padding: 0 5px 5px 0;
        display: block;
        width: 33.33%;
        float: left;
    }

    .footer .footer-insta a img {
        width: 100%;
    }

    .footer .footer-consultants h3 {
        color: #ffffff;
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: 400;
        padding-bottom: 8px;
        border-bottom: 2px solid #ffffff;
    }

    .footer .consultant img {
        border: 2px solid #ffffff;
    }

    .footer .consultant div {
        color: #dddddd;
        font-size: 15px;
        line-height: 1.2;
        padding: 8px 7px;
    }


    .footer .footer-tags {
        font-size: 0;
    }

    .footer .footer-tags a {
        display: inline-block;
        margin: 0 5px 5px 0;
        padding: 3px 8px;
        font-size: 14px;
        color: #dddddd;
        text-transform: capitalize;
        border: 1px solid #dddddd;
    }

    .footer .footer-tags a:hover {
        color: #ffffff;
        background: #0085ff;
        border-color: #0085ff;
    }

    .footer .footer-newsletter .form {
        position: relative;
        width: 100%;
    }

    .footer .footer-newsletter input {
        height: 45px;
        border: 1px solid #dddddd;
        border-radius: 0;
        color: #fff;
        background: #121518;
        margin-bottom: 15px;
    }

    .footer .footer-newsletter .btn {
        display: block;
        width: 100%;
        height: 45px;
        padding: 8px 20px;
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
        color: #dddddd;
        background: #000000;
        border-radius: 0;
        border: 1px solid #dddddd;
        transition: .3s;
    }

    .footer .footer-newsletter .btn:hover {
        color: #ffffff;
        background: #0085ff;
        border-color: #0085ff;
    }

    .footer .footer-newsletter .btn:focus {
        box-shadow: none;
    }

    .footer .footer-contact {
        position: relative;
        padding: 25px 0;
        text-align: center;
        border-top: 1px solid rgba(256, 256, 256, .1);
    }

    .footer .footer-contact h4 {
        position: relative;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #ffffff;
    }

    .footer .footer-contact p {
        margin: 0;
        font-size: 16px;
        color: #999999;
    }

    .footer .footer-contact a {
        display: inline-block;
    }

    .footer .footer-contact a i {
        margin-right: 10px;
        font-size: 18px;
        color: #999999;
    }

    .footer .footer-contact a:last-child i {
        margin: 0;
    }

    .footer .footer-contact a:hover i {
        color: #0085ff;
    }

    @media (max-width: 767.98px) {
        .footer .footer-contact .col-md-4 {
            margin-bottom: 25px;
        }

        .footer .footer-contact .col-md-4:last-child {
            margin: 0;
        }
    }

    .footer .copyright {
        position: relative;
        padding: 25px 0;
        background: linear-gradient(to right, #2c3e50, #4ca1af);
    }

    .footer .copyright .copy-text p {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
        color: #999999;
    }

    .footer .copyright .copy-text p a {
        color: #dddddd;
    }

    .footer .copyright .copy-text p a:hover {
        color: #0085ff;
    }

    .footer .copyright .copy-menu {
        position: relative;
        font-size: 0;
        text-align: right;
    }

    .footer .copyright .copy-menu a {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        margin-right: 15px;
        padding-right: 15px;
        border-right: 1px solid rgba(255, 255, 255, .3);
    }

    .footer .copyright .copy-menu a:hover {
        color: #0085ff;
    }

    .footer .copyright .copy-menu a:last-child {
        margin-right: 0;
        padding-right: 0;
        border-right: none;
    }

    @media (max-width: 767.98px) {

        .footer .copyright .copy-text,
        .footer .copyright .copy-menu {
            text-align: center;
        }

        .footer .copyright .copy-text p {
            margin-bottom: 5px;
        }

    }
</style>

<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<!-- CLIENT LOGO SECTION START -->
<div class="section-full p-tb40 bg-black square_shape4">
    <div class="container">
        <div class="section-content">

            <!-- TESTIMONIAL 4 START ON BACKGROUND -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <!-- TITLE START -->
                        <div class="text-left">
                            <h2 class="text-uppercase font-36 text-white">Our Clients</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-white"></div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                    </div>

                    <div class="col-md-8 col-sm-12">
                        <div class="section-content bg-white p-tb10">
                            <div class="owl-carousel home-client-carousel owl-btn-center-v">
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM doi_tac WHERE id BETWEEN 34 AND 38 ORDER BY id;";
                                $tv_1 = mysqli_query($link, $tv);
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $id = $row['id'];
                                    $tieude = $row['tieude'];
                                    $mota_en = $row['mota_en'];
                                    $mota = $row['mota'];
                                    $noidung = $row['noidung'];
                                    $tieude_en = $row['tieude_en'];
                                    $link_hinh = "HinhCTSP/$row[hinhanh]";
                                    ?>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                                <a href="javascript:void(0);"><img src="<?php echo "$link_hinh"; ?>"
                                                        alt="<?php echo "$tieude"; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CLIENT LOGO  SECTION End -->


<!-- FOOTER START -->
<footer class="site-footer bg-gray footer-light footer-wide">

    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main bg-black" style="opacity:0;"></div>
        <div class="container p-t30">
            <div class="row">

                <div class="col-md-4 wt-footer-bot-left">
                    <a href="#"><img src="hinhmenu/logo-ely.png" width="140" height="58" alt=""></a>
                </div>

                <div class="col-md-4 text-center copyright-block p-t15">
                    <span class="copyrights-text">Office address: 323A Le Quang Dinh, Ward 5, Binh Thanh District,
                        Ho Chi Minh City</span>
                    <br>
                    <br>
                    <br>
                    <span class="copyrights-text"> Copy © 2015 ely.vn</span>
                </div>

                <div class="col-md-4 wt-footer-bot-right p-t15">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="trang-chu">Home page</a></li>
                        <li><a href="du-an">Project</a></li>
                        <li><a href="lien-he">Contact Us</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->