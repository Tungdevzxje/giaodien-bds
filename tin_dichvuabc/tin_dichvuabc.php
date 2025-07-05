<style>
    /* Banner styles */
    .banner {
        position: relative;
        height: 300px;
        background-image: url('hinhmenu/banner-duan.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        /* color: white; */
    }

    .banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .banner-content {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        width: 100%;
        padding: 0 20px;
    }


    /* Section title */
    .section-title {
        text-align: center;
        margin: 50px 0;
        position: relative;
    }

    .section-title h2 {
        font-size: 38px;
        position: relative;
        z-index: 2;
    }

    .section-title .bg-text {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 90px;
        color: rgba(0, 0, 0, 0.07);
        font-weight: bold;
        letter-spacing: 10px;
        white-space: nowrap;
        pointer-events: none;
    }

    /* Gallery grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 5px;
        padding: 0 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 5px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .gallery-item.hidden {
        display: none;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .gallery-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 20px;
        text-align: center;
        color: white;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay h3 {
        margin-bottom: 10px;
        font-size: 20px;
    }

    .gallery-overlay a {
        color: white;
        text-decoration: none;
        border: 1px solid white;
        padding: 8px 20px;
        margin-top: 15px;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .gallery-overlay a:hover {
        background: white;
        color: #333;
    }

    /* Load more button */
    .load-more {
        text-align: center;
        margin: 40px 0;
    }

    .load-more-btn {
        padding: 12px 30px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .load-more-btn:hover {
        background-color: #555;
        transform: translateY(-2px);
    }

    .load-more-btn:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }

        .section-title h2 {
            font-size: 28px;
        }

        .section-title .bg-text {
            font-size: 60px;
        }
    }

    /* Animation for new items */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .gallery-item.loaded {
        animation: fadeIn 0.5s ease forwards;
    }
</style>
<div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
    style="background-image:url(hinhmenu/banner-duan.jpg);">
    <div class="overlay-main bg-black opacity-07" style="background-color:#000;"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">DỰ ÁN ELY ARCHI
                    </h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->
            <div class="p-tb20">
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="trang-chu">Trang chủ</a></li>
                        <li>Dự án</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>

<!-- Projects section -->
<section class="projects">
    <div class="section-title">
        <span class="bg-text">WORKS</span>
        <h2>DỰ ÁN KIẾN TRÚC</h2>
    </div>

    <!-- Gallery grid -->
    <div class="gallery-grid" id="galleryGrid">
        <?php
        $tv = "SELECT * FROM tin_dichvuabc ORDER BY id ASC LIMIT 0, 40";
        $tv_1 = mysqli_query($link, $tv);
        $index = 0;
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $index++;
            $tieude = $tv_2['tieude'];
            $url = $tv_2['linkurl'];
            $image = $tv_2["hinhanh"];
            $link_url = "du-an/$url";

            // Ẩn các item từ thứ 9 trở đi ban đầu
            $hiddenClass = $index > 9 ? 'hidden' : '';
            ?>
            <div class="gallery-item <?php echo $hiddenClass; ?>" data-index="<?php echo $index; ?>">
                <img src="HinhCTSP/Hinhdichvu/<?php echo $image; ?>" alt="<?php echo $tieude; ?>">
                <div class="gallery-overlay">
                    <h3 style="color:#fff;"><?php echo $tieude; ?></h3>
                    <a href="<?php echo $link_url; ?>">Xem Tiếp</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Load more button -->
    <?php if ($index > 8): ?>
        <div class="load-more">
            <button class="load-more-btn" id="loadMoreBtn">Xem thêm</button>
        </div>
    <?php endif; ?>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (loadMoreBtn) {
            const galleryItems = document.querySelectorAll('.gallery-item');
            let itemsToShow = 3; // Số lượng item hiển thị ban đầu
            const itemsPerLoad = 3; // Số lượng item tải thêm mỗi lần

            // Ẩn nút "Xem thêm" nếu không đủ item
            if (galleryItems.length <= itemsToShow) {
                loadMoreBtn.style.display = 'none';
            }

            loadMoreBtn.addEventListener('click', function () {
                // Hiển thị thêm items
                itemsToShow += itemsPerLoad;
                let itemsShown = 0;

                galleryItems.forEach(item => {
                    if (itemsShown < itemsToShow && item.classList.contains('hidden')) {
                        item.classList.remove('hidden');
                        item.classList.add('loaded');
                        itemsShown++;
                    }
                });

                // Ẩn nút nếu đã hiển thị hết
                if (itemsToShow >= galleryItems.length) {
                    loadMoreBtn.disabled = true;
                    loadMoreBtn.textContent = 'Đã tải hết dự án';
                }
            });
        }
    });

    // Nếu muốn load thêm bằng AJAX thay vì load tất cả từ đầu:
    /*
    function loadMoreProjects(offset, limit) {
        fetch(`load-more.php?offset=${offset}&limit=${limit}`)
            .then(response => response.json())
            .then(data => {
                const galleryGrid = document.getElementById('galleryGrid');
                data.forEach(project => {
                    const item = document.createElement('div');
                    item.className = 'gallery-item loaded';
                    item.innerHTML = `
                        <img src="HinhCTSP/Hinhdichvu/${project.hinhanh}" alt="${project.tieude}">
                        <div class="gallery-overlay">
                            <h3>${project.tieude}</h3>
                            <a href="du-an/${project.linkurl}">Xem Tiếp</a>
                        </div>
                    `;
                    galleryGrid.appendChild(item);
                });
            })
            .catch(error => console.error('Error:', error));
    }
    */
</script>