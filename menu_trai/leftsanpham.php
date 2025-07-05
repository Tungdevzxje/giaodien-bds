
<style>
    .fa-chevron-right:before
    {
content: "\f054";
    font-size: 12px;
    padding-right: 6px;

    }
</style>
<!-- MENU LEFT -->
<div class="sidebar-menu bg-light pt-1 px-3 rounded shadow-sm">
    <div class="sidebar-title font-weight-bold text-uppercase text-primary mb-3" style='background: #1f7f5c;
    padding: 8px;'>
       <b style='color: #ff0;'>DANH MỤC IN ẤN ATV </b>
    </div>

    <ul class="list-unstyled sidebar-list">
        <!-- Danh mục cấp 1 -->
        <li class="sidebar-item" >
            <div class="sidebar-link d-flex justify-content-between align-items-center" onclick="toggleSubmenu(this)" >
                <a href="an-pham-in-an" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><b>ẤN
                            PHẨM VĂN PHÒNG</b></span></a>
                <i class="fas fa-angle-down toggle-icon active"></i>
            </div>
            <ul class="list-unstyled sidebar-submenu mt-2 pl-3" style="display: block;">
                <li>
                    <a href="in-an/danh-thiep" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Danh
                        Thiếp -
                        Namecards</a>
                    <a href="in-an/bao-thu" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Bao Thư
                        - Thiệp Mời</a>
                    <a href="in-an/bia-dung-ho-so" class="sidebar-sublink"><i
                            class="fas fa-chevron-right mr-2"></i>Bìa Đựng Hồ Sơ
                        -
                        Folders</a>
                    <a href="in-an/tui-giay" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Túi
                        giấy</a>
                    <a href="in-an/hop-giay" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Hộp
                        giấy</a>
                    <a href="in-an/poster" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Poster -
                        Băng Rôn -
                        Standee</a>
                    <a href="in-an/to-roi" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Tờ Rơi -
                        Flyers</a>
                    <a href="in-an/to-gap" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Tờ Gấp -
                        Leaflets,
                        Brochures</a>
                    <a href="in-an/catalogue" class="sidebar-sublink"><i
                            class="fas fa-chevron-right mr-2"></i>Catalogue</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <div class="sidebar-link d-flex justify-content-between align-items-center" onclick="toggleSubmenu(this)">
                <a href="kyniemchuong-danang" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><b>ẤN
                            PHẨM QUÀ TẶNG</b></span></a>
                <i class="fas fa-angle-down toggle-icon"></i>
            </div>
            <ul class="list-unstyled sidebar-submenu mt-2 pl-3" style="display: none;">
                <li>
                    <a href="xuong-in/ky-niem-chuong" class="sidebar-sublink"><i
                            class="fas fa-chevron-right mr-2"></i>Kỷ
                        Niệm Chương</a>
                    <a href="xuong-in/bang-ten" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Bảng
                        Tên</a>
                    <a href="xuong-in/the-nhua" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Thẻ
                        Nhựa</a>
                    <a href="xuong-in/phieu-qua-tang" class="sidebar-sublink"><i
                            class="fas fa-chevron-right mr-2"></i>Phiếu Quà Tặng</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <div class="sidebar-link d-flex justify-content-between align-items-center" onclick="toggleSubmenu(this)">
                <a href="thenhua-danang"><span><b>ẤN PHẨM KHÁC</b></span></a>
                <i class="fas fa-angle-down toggle-icon"></i>
            </div>
            <ul class="list-unstyled sidebar-submenu mt-2 pl-3" style="display: none;">

                <li>
                    <a href="thong-tin/hoa-don" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Hoá
                        Đơn</a>
                    <a href="thong-tin/menu" class="sidebar-sublink"><i class="fas fa-chevron-right mr-2"></i>Menu</a>
                </li>

            </ul>
        </li>

    </ul>
</div>
<style>
    .sidebar-menu {
        width: 100%;
    }

    .sidebar-title {
        font-size: 18px;
        margin-bottom: 1rem;
    }

    .sidebar-item {
        margin-bottom: 10px;
    }

    .sidebar-link {
        cursor: pointer;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .sidebar-link:hover {
        background: #e9ecef;
    }

    .sidebar-link i {
        color: #FF385C;
    }

    .sidebar-submenu {
        padding-left: 15px;
        margin-top: 5px;
    }

    .sidebar-sublink {
        display: block;
        padding: 8px 0;
        text-decoration: none;
        color: #000;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .sidebar-sublink:hover {
        color: #FF385C;
        font-weight: bold;
    }
</style>

<script>
    function toggleSubmenu(element) {
        var submenu = element.nextElementSibling;
        var icon = element.querySelector('.toggle-icon');

        if (submenu.style.display === 'none' || submenu.style.display === '') {
            submenu.style.display = 'block';
            icon.classList.remove('fa-angle-down');
            icon.classList.add('fa-angle-up');
        } else {
            submenu.style.display = 'none';
            icon.classList.remove('fa-angle-up');
            icon.classList.add('fa-angle-down');
        }
    }
</script>