<style>
    .hot-post-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
    }

    .post-number-box {
        width: 35px;
        height: 35px;
        min-width: 35px;
        border: 2px solid #ff6600;
        border-radius: 50%;
        text-align: center;
        line-height: 32px;
        font-weight: bold;
        color: #ff6600;
        margin-right: 15px;
        font-size: 18px;
    }

    .hot-post-content .post-title {
        margin: 0;
        font-size: 16px;
    }

    .hot-post-content .post-title a {
        color: #333;
        text-decoration: none;
    }

    .hot-post-content .post-title a:hover {
        text-decoration: underline;
        color: #ff6600;
    }

    .post-tag-inline {
        display: inline-block;
        background-color: #ff6600;
        color: #fff;
        font-size: 11px;
        padding: 2px 6px;
        border-radius: 4px;
        margin-left: 8px;
        vertical-align: middle;
    }
</style>

<div class="sidebar-wrap">
    <div class="sidebar-widget sidebar-widget-two">
        <div class="widget-title mb-30">
            <p class="title p-text-change-h">Tin Nổi Bật Hàng Ngày</p>
            <div class="section-title-line"></div>
        </div>
        <div class="hot-post-wrap">
            <?php
            require('db.php');
            $tv = "SELECT * FROM tin_tintuc WHERE moi = 1 ORDER BY id DESC LIMIT 0,5";
            $tv_1 = mysqli_query($link, $tv);
            $stt = 1;

            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                $tieude = $tv_2['tieude'];
                $url = $tv_2['linkurl'];
                $thuocloai_id = $tv_2['thuocloai'];

                $link_url = str_replace("?", "", "tin-tuc/$url");

                $ten_loai = '';
                $query_loai = mysqli_query($link, "SELECT * FROM loai_tin_tintuc WHERE id = $thuocloai_id LIMIT 1");
                if ($row_loai = mysqli_fetch_array($query_loai)) {
                    $ten_loai = $row_loai['thuocloai'];
                }
                ?>
                <div class="hot-post-item">
                    <div class="post-number-box"><?php echo $stt; ?></div>
                    <div class="hot-post-content">

                        <p class="post-title p-text-change-h">

                            <a href="<?php echo $link_url; ?>"><?php echo $tieude; ?></a>
                            <?php if (!empty($ten_loai)) { ?>
                                <span class="post-tag-inline"><?php echo $ten_loai; ?></span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <?php
                $stt++;
            }

            ?>
        </div>
    </div>
    <div class="sidebar-widget sidebar-widget-two">
        <div class="widget-title mb-30">
            <p class="title p-text-change-h">Tin Bất Động Sản</p>
            <div class="section-title-line"></div>
        </div>
        <div class="hot-post-wrap">
            <?php
            $tv = "SELECT * FROM tin_tintuc WHERE thuocloai = 38 ORDER BY id DESC LIMIT 2";
            $tv_1 = mysqli_query($link, $tv);
            $stt = 1;

            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                $tieude = $tv_2['tieude'];
                $url = str_replace("?", "", $tv_2['linkurl']);
                ?>
                <div class="hot-post-item">
                    <div class="post-number-box"><?php echo $stt; ?></div>
                    <div class="hot-post-content">
                        <p class="post-title p-text-change-h">
                            <a href="tin-tuc/<?php echo $url; ?>"><?php echo $tieude; ?></a>
                            <span class="post-tag-inline">Tin BĐS</span>
                        </p>
                    </div>
                </div>
                <?php $stt++;
            } ?>
        </div>
    </div>
    <div class="sidebar-widget sidebar-widget-two">
        <div class="widget-title mb-30">
            <p class="title p-text-change-h">Tin Phong Thuỷ</p>
            <div class="section-title-line"></div>
        </div>
        <div class="hot-post-wrap">
            <?php
            $tv = "SELECT * FROM tin_tintuc WHERE thuocloai = 37 ORDER BY id DESC LIMIT 2";
            $tv_1 = mysqli_query($link, $tv);
            $stt = 1;

            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                $tieude = $tv_2['tieude'];
                $url = str_replace("?", "", $tv_2['linkurl']);
                ?>
                <div class="hot-post-item">
                    <div class="post-number-box"><?php echo $stt; ?></div>
                    <div class="hot-post-content">
                        <p class="post-title p-text-change-h">
                            <a href="tin-tuc/<?php echo $url; ?>"><?php echo $tieude; ?></a>
                            <span class="post-tag-inline">Phong thủy</span>
                        </p>
                    </div>
                </div>
                <?php $stt++;
            } ?>
        </div>
    </div>


</div>