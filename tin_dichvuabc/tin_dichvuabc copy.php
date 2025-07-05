<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án Kiến Trúc</title>
    <style>
        /* Reset và base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

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
            color: white;
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

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            list-style: none;
            justify-content: center;
            margin-top: 20px;
        }

        .breadcrumb li {
            margin: 0 10px;
        }

        .breadcrumb a {
            color: white;
            text-decoration: none;
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
            color: rgba(0,0,0,0.07);
            font-weight: bold;
            letter-spacing: 10px;
            white-space: nowrap;
            pointer-events: none;
        }

        /* Gallery grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
            padding: 0 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
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
            background: rgba(0,0,0,0.7);
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
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .gallery-item.loaded {
            animation: fadeIn 0.5s ease forwards;
        }
    </style>
</head>
<body>
    <!-- Banner section -->
    <section class="banner">
        <div class="banner-content">
            <h1>DỰ ÁN ELY ARCHI</h1>
            <ul class="breadcrumb">
                <li><a href="trang-chu">Trang chủ</a></li>
                <li>Dự án</li>
            </ul>
        </div>
    </section>

    <!-- Projects section -->
    <section class="projects">
        <div class="section-title">
            <span class="bg-text">WORKS</span>
            <h2>DỰ ÁN KIẾN TRÚC</h2>
        </div>

        <!-- Gallery grid -->
        <div class="gallery-grid" id="galleryGrid">
            <!-- Items will be loaded here via JavaScript -->
        </div>

        <!-- Load more button -->
        <div class="load-more">
            <button class="load-more-btn" id="loadMoreBtn">Xem thêm</button>
        </div>
    </section>

    <script>
        // Sample data - replace with your actual data from database
        const projectsData = [
            { id: 1, title: "Biệt thự Phú Mỹ Hưng", image: "HinhCTSP/Hinhdichvu/project1.jpg", url: "du-an/biet-thu-phu-my-hung" },
            { id: 2, title: "Chung cư Sunrise City", image: "HinhCTSP/Hinhdichvu/project2.jpg", url: "du-an/chung-cu-sunrise-city" },
            { id: 3, title: "Nhà hàng The Log", image: "HinhCTSP/Hinhdichvu/project3.jpg", url: "du-an/nha-hang-the-log" },
            { id: 4, title: "Văn phòng Techcombank", image: "HinhCTSP/Hinhdichvu/project4.jpg", url: "du-an/van-phong-techcombank" },
            { id: 5, title: "Khách sạn Rex", image: "HinhCTSP/Hinhdichvu/project5.jpg", url: "du-an/khach-san-rex" },
            { id: 6, title: "Căn hộ Masteri", image: "HinhCTSP/Hinhdichvu/project6.jpg", url: "du-an/can-ho-masteri" },
            { id: 7, title: "Biệt thự Vinhomes", image: "HinhCTSP/Hinhdichvu/project7.jpg", url: "du-an/biet-thu-vinhomes" },
            { id: 8, title: "Nhà phố Quận 2", image: "HinhCTSP/Hinhdichvu/project8.jpg", url: "du-an/nha-pho-quan-2" },
            { id: 9, title: "Showroom ô tô Mercedes", image: "HinhCTSP/Hinhdichvu/project9.jpg", url: "du-an/showroom-mercedes" },
            { id: 10, title: "Cafe The Note", image: "HinhCTSP/Hinhdichvu/project10.jpg", url: "du-an/cafe-the-note" },
            { id: 11, title: "Penthouse Landmark 81", image: "HinhCTSP/Hinhdichvu/project11.jpg", url: "du-an/penthouse-landmark" },
            { id: 12, title: "Trường mầm non Quốc tế", image: "HinhCTSP/Hinhdichvu/project12.jpg", url: "du-an/truong-mam-non" },
            { id: 13, title: "Biệt thự biển Nha Trang", image: "HinhCTSP/Hinhdichvu/project13.jpg", url: "du-an/biet-thu-bien" },
            { id: 14, title: "Villa Đà Lạt", image: "HinhCTSP/Hinhdichvu/project14.jpg", url: "du-an/villa-da-lat" },
            { id: 15, title: "Nhà hàng hải sản", image: "HinhCTSP/Hinhdichvu/project15.jpg", url: "du-an/nha-hang-hai-san" },
            { id: 16, title: "Căn hộ cao cấp Q1", image: "HinhCTSP/Hinhdichvu/project16.jpg", url: "du-an/can-ho-cao-cap" },
            { id: 17, title: "Văn phòng Vietcombank", image: "HinhCTSP/Hinhdichvu/project17.jpg", url: "du-an/van-phong-vietcombank" },
            { id: 18, title: "Khách sạn Pullman", image: "HinhCTSP/Hinhdichvu/project18.jpg", url: "du-an/khach-san-pullman" },
            { id: 19, title: "Biệt thự cổ điển", image: "HinhCTSP/Hinhdichvu/project19.jpg", url: "du-an/biet-thu-co-dien" },
            { id: 20, title: "Nhà phố hiện đại", image: "HinhCTSP/Hinhdichvu/project20.jpg", url: "du-an/nha-pho-hien-dai" }
        ];

        // DOM elements
        const galleryGrid = document.getElementById('galleryGrid');
        const loadMoreBtn = document.getElementById('loadMoreBtn');

        // Variables
        let currentIndex = 0;
        const itemsPerLoad = 8; // Number of items to load each time

        // Function to create gallery item
        function createGalleryItem(project) {
            const item = document.createElement('div');
            item.className = 'gallery-item';
            item.innerHTML = `
                <img src="${project.image}" alt="${project.title}">
                <div class="gallery-overlay">
                    <h3>${project.title}</h3>
                    <a href="${project.url}">Xem Tiếp</a>
                </div>
            `;
            return item;
        }

        // Function to load projects
        function loadProjects() {
            const fragment = document.createDocumentFragment();
            const endIndex = Math.min(currentIndex + itemsPerLoad, projectsData.length);

            for (let i = currentIndex; i < endIndex; i++) {
                const project = projectsData[i];
                const item = createGalleryItem(project);
                fragment.appendChild(item);
            }

            galleryGrid.appendChild(fragment);
            currentIndex = endIndex;

            // Add loaded class to new items for animation
            const newItems = galleryGrid.children;
            for (let i = newItems.length - (endIndex - currentIndex + itemsPerLoad); i < newItems.length; i++) {
                setTimeout(() => {
                    newItems[i].classList.add('loaded');
                }, 100 * (i % itemsPerLoad));
            }

            // Disable button if all items are loaded
            if (currentIndex >= projectsData.length) {
                loadMoreBtn.disabled = true;
                loadMoreBtn.textContent = 'Đã tải hết dự án';
            }
        }

        // Initial load
        loadProjects();

        // Load more button event
        loadMoreBtn.addEventListener('click', loadProjects);

        // For real implementation, you would fetch data from server like this:
        /*
        async function fetchProjects(offset, limit) {
            try {
                const response = await fetch(`api/projects?offset=${offset}&limit=${limit}`);
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Error fetching projects:', error);
                return [];
            }
        }
        */
    </script>
</body>
</html>
