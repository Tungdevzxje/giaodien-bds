    function changeMainImage(src, el) {
        const main = document.getElementById('main-image');
        main.src = `HinhCTSP/Hinhdichvu/${src}`;

        // Highlight ảnh đang active
        document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
        el.classList.add('active');
    }