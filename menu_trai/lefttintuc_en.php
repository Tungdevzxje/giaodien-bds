<div class="recent-post pt-5" style="margin-top: 85px; margin-bottom: 60px;">
    <div style="font-size: 15px; color: #FF385C; margin-bottom: 10px; font-weight: bold;">
        RELATED ARTICLES
    </div>
    <div style="height: 3px; background-color: #FF385C; width: 111px; margin-top: .5rem; margin-bottom: 1rem;"></div>


    <?php
    require('db.php');
    $tv = "SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 0,6";
    $tv_1 = mysqli_query($link, $tv);
    while ($row = mysqli_fetch_array($tv_1)) {
        $link_hinh = "HinhCTSP/Hinhtintuc/" . $row['hinhanh'];
        $tieude_en = $row['tieude_en'];
        $tieude_en = mb_convert_case($tieude_en, MB_CASE_TITLE, "UTF-8");

        $url = $row['linkurl'];
        $link = "tin-tuc/" . str_replace("?", "", strtolower($url));
        ?>
        <div class="col-12 mb-3">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <div style="flex-shrink: 0;">
                    <a href="<?= $link ?>">
                        <img src="<?= $link_hinh ?>" alt="<?= $tieude_en ?>"
                            style="width: 90px; height: 60px; object-fit: cover; border-radius: 4px; margin-right: 10px;">
                    </a>
                </div>
                <div style="flex: 1;">
                    <a href="<?= $link ?>" class="text-dark"
                        style="font-size: 14px; font-weight: bold; line-height: 1.4; text-decoration: none;">
                        <?= $tieude_en ?>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>