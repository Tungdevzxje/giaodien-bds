<?php
include("db.php");

$id = $_GET['id'];

$result = mysqli_query($link, "SELECT * FROM banmenh WHERE id = '$id'");
$row_dulieu_sua = mysqli_fetch_array($result);

$hinhanh = $row_dulieu_sua['hinhanh'];
$taptin = "../HinhCTSP/$hinhanh";

if (!empty($hinhanh) && file_exists($taptin)) {
    unlink($taptin);
}

$chuoi = "DELETE FROM banmenh WHERE id = '$id'";
mysqli_query($link, $chuoi);

echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Đã xóa thành công!',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
        });

        setTimeout(() => {
            window.location = 'quan_tri.php?p=diengiai';
        }, 2500);
    </script>
";
?>