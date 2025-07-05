<!-- start of page header -->
<header class="page-header bg-full overlay overlay-light" style="background-image: url(hinhmenu/img06.jpg);">

<div class="container">

    <div class="row">

        <div class="col-xs-12 text-center">

            <h1 class="heading text-uppercase">XÂY DỰNG <span>SXT</span></h1>

            <!-- start of breadcrumbs -->

            <ul class="breadcrumbs list-inline">

                <li><a href="#">Trang chủ</a></li>

                <li>Giới thiệu</li>

            </ul><!-- end of breadcrumbs -->

        </div>

    </div>

</div>

</header><!-- end of page header -->
<div class="top-banner bg-grey2">

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-6">

            <div class="main-heading no-border style2">

                <h2 class="heading text-uppercase" style='    font-size: 28px;'>CÔNG TY XÂY DỰNG <span class="clr">SƠN THỦY XANH</span></h2>

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 text-right">

            <!-- start of social -->

            <ul class="list-inline social text-center">

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                <li class="print"><a href="#"><span class="icon-printer"></span></a></li>

            </ul><!-- end of social -->

        </div>

    </div>

</div>

</div><!-- end of top-banner -->
<!-- Moved meta and head content to the correct place -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="all" href="css/autoptimize_cfbdbf2a62c32fa97d63e179137464d4.css" rel="stylesheet" />
    <script type="text/javascript">document.documentElement.className = document.documentElement.className.replace( /\bno-js\b/,'js' );</script>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml"  href="https://vietnamarch.com.vn/feed/" />
    <link rel="alternate" type="application/rss+xml"  href="https://vietnamarch.com.vn/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" href="https://vietnamarch.com.vn/thuoc-lo-ban/feed/" />
    <!-- ... (all other <link>, <meta>, <script> tags from your selection) ... -->
    <link rel="icon" href="https://vietnamarch.com.vn/wp-content/uploads/2019/04/cropped-vietnamarch.com_.vn_-150x150.jpg" sizes="32x32" />
    <link rel="icon" href="https://vietnamarch.com.vn/wp-content/uploads/2019/04/cropped-vietnamarch.com_.vn_.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://vietnamarch.com.vn/wp-content/uploads/2019/04/cropped-vietnamarch.com_.vn_.jpg" />
    <meta name="msapplication-TileImage" content="https://vietnamarch.com.vn/wp-content/uploads/2019/04/cropped-vietnamarch.com_.vn_.jpg" />
</head>
<body data-rsssl=1 id="blog" class="archive category category-thuoc-lo-ban category-445 main wp-schema-pro-2.1.1" itemscope itemtype="http://schema.org/WebPage">
<!-- The rest of your content (header, banners, etc.) goes here -->
<script>
//Moi doan thuuc dai 1000mm
var rulerLength = 1000; //So do 1 doan thuoc (mm)
var trimStart = 0;  //So do dau cua thuoc (mm)
var trimEnd = 1000; //So do cuoi cua thuoc (mm)

var myScroll;

function pullRightAction() {
if (trimStart > 0) {
jQuery('#loban-scroller').width(function (i, width) {
    return width + 10000;
});
trimStart -= rulerLength;
var qStr = '?trimStart=' + trimStart + '&rulerLength=' + rulerLength;

var newLi = jQuery('<li>').append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc522.php' + qStr}))
        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc429.php' + qStr}))
        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc388.php' + qStr}));

jQuery('#loban-thelist').prepend(newLi);
myScroll.refresh();
}
}

function pullLeftAction() {
if (trimEnd < 50000) {
jQuery('#loban-scroller').width(function (i, width) {
    return width + 10000;
});
var qStr = '?trimStart=' + trimEnd + '&rulerLength=' + rulerLength;
var newLi = jQuery('<li>').append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc522.php' + qStr}))
        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc429.php' + qStr}))
        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc388.php' + qStr}));
trimEnd += rulerLength;
jQuery('#loban-thelist').append(newLi);
myScroll.refresh();
}
}

function loaded() {
Math.nativeRound = Math.round;
Math.round = function (i, iDecimals) {
if (!iDecimals)
    return Math.nativeRound(i);
else
    return Math.nativeRound(i * Math.pow(10, Math.abs(iDecimals))) / Math.pow(10, Math.abs(iDecimals));

};

myScroll = new iScroll('loban-wrapper', {
useTransition: true,
leftOffset: jQuery('#pullRight').outerWidth(true),
onRefresh: function () {
    jQuery('#thanhdo').css({'left': jQuery('#lobanOuter').width() / 2 + 'px'});
    jQuery('#container-sodo').css({'left': (jQuery('#lobanOuter').width() / 2 - 28) + 'px'});
    if (jQuery('#pullRight').hasClass('loading')) {
        jQuery('#pullRight').removeClass('loading');
        jQuery('#pullRight .pullRightLabel').html('Ké qua phải...');
    } else if (jQuery('#pullLeft').hasClass('loading')) {
        jQuery('#pullLeft').removeClass('loading');
        jQuery('#pullLeft .pullLeftLabel').html('Ké qua trái..');
    }
    jQuery('#sodoLoban').html(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 100, 1) + ' cm');
    jQuery('#sodo').val(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 10, 0));
},
onScrollMove: function () {
    jQuery('#sodoLoban').html(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 100, 1) + ' cm');
    jQuery('#sodo').val(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 10, 0));
},
onScrollEnd: function () {
    if (this.x == 0 && !jQuery('#pullRight').hasClass('flip')) {
        jQuery('#pullRight').addClass('flip');
        jQuery('#pullRight .pullRightLabel').html('Thả ra để làm mới...');
    } else if (-this.x > (jQuery('#loban-scroller').width() - 2000) && !jQuery('#pullLeft').hasClass('flip')) {
        jQuery('#pullLeft').addClass('flip');
        jQuery('#pullLeft .pullLeftLabel').html('Thả ra để làm mới...');
    }
    if (jQuery('#pullRight').hasClass('flip')) {
        jQuery('#pullRight').removeClass('flip');
        jQuery('#pullRight').addClass('loading');
        jQuery('#pullRight .pullRightLabel').html('...');
        pullRightAction();	// Execute custom function (ajax call?)
    } else if (jQuery('#pullLeft').hasClass('flip')) {
        jQuery('#pullLeft').removeClass('flip');
        jQuery('#pullLeft').addClass('loading');
        jQuery('#pullLeft .pullLeftLabel').html('...');
        pullLeftAction();	// Execute custom function (ajax call?)
    }
    jQuery('#sodoLoban').html(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 100, 1) + ' cm');
    jQuery('#sodo').val(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 10, 0));
}
});

setTimeout(function () {
document.getElementById('loban-wrapper').style.left = '0';
}, 800);

jQuery('#sodo').blur(function () {
var px = parseFloat(jQuery(this).val()) * 10
px += jQuery('#lobanOuter').width() / 2;
var st = Math.ceil((px - trimEnd * 10) / 10000)
if (st > 0) {
    for (var i = 1; i <= st; i++) {
        pullLeftAction();
    }
    myScroll.refresh();
}
myScroll.scrollTo(-(px - Math.round(jQuery('#lobanOuter').width(), 0)), 0, Math.max((st + 1) * 500, 1500))
})

jQuery('#sodo').bind('keypress', function (e) {
var code = e.keyCode || e.which;
if (code == 13) {
    jQuery(this).blur()
} else {
    if (!((code == 46) || (code >= 48 && code <= 57))) {
        return false;
    }
}
});

jQuery(document).ready(function () {
var px = 2020 + jQuery('#lobanOuter').width() / 2;
myScroll.scrollTo(-(px - Math.round(jQuery('#lobanOuter').width(), 0)), 0, 500)
});

}

document.addEventListener('DOMContentLoaded', function () {
setTimeout(loaded, 200);
}, false);
</script>
<div id="lobanOuter" style="height:400px; margin: 30px 0;">
    <div class="loban-touch-left"></div>
    <div class="loban-touch-right"></div>
    <div id="sodoLoban"></div>
    <div id="container-sodo"><input type="text" value="450" name="sodo" id="sodo" /> mm (Nhập số)</div>
    <div id="thanhdo"></div>
    <p class="loban-note">Hãy kéo thước</p>
    <p class="loban-t loban-522"><strong>Thước Lỗ Ban 52.2cm:</strong> Khoảng thông thủy ( cửa, cửa số ...)</p>
    <p class="loban-t loban-429"><strong>Thước Lỗ Ban 42.9cm (Dương trạch):</strong> Khoảng xây dựng, đồ nội thất ( bậc, bệ, tủ bếp, tủ đồ ...)</p>
    <p class="loban-t loban-388"><strong>Thước Lỗ Ban 38.8cm (Âm phần):</strong> Mồ mã, bàn thờ ...</p>
    <div id="loban-wrapper">
        <div id="loban-scroller">
            <div id="pullRight" style="display:none;">
                <span class="pullRightIcon"></span><span class="pullRightLabel">Ké qua phải...</span>
            </div>
            <ul id="loban-thelist">
                <li>
                    <img src="https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc522.php" />
                    <img src="https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc429.php" />
                    <img src="https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc388.php" />
                </li>
            </ul>
            <div id="pullLeft" style="display:none;">
                <span class="pullLeftIcon"></span><span class="pullLeftLabel">Ké qua trái..</span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div id="su-footer-links" style="text-align: center;"></div>
<!-- Keep the rest of your scripts and content as needed -->
<script defer src="js/autoptimize_74c9d1185b5a8d5272764551d0ff7867.js"></script>


<section class="what-sec">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
<?php
$tv="select * from du_lieu_1_tin where id like '20'  order by id DESC limit 0,1";
$tv_1=mysqli_query($link,$tv);
$tv_2=mysqli_fetch_array($tv_1);


echo $tv_2['noidung']; ?>
<div style="clear:both; height:5px;"></div>
</div>
    </div>
</div>
</section>

    <!-- start of subscribe holder -->
<section class="what-sec">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
<?php
include ('lien_he/lien_hetc.php');
?>
</div>
    </div>
</div>
</section>


</main>
</div>
<!-- start footer of the page -->
