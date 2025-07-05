<?php
chong_pha_hoai();
?>
<?php
$title = "trang-chu";
switch ($_GET['thamso']) {
	case "lien_he":
		$title = "lien-he";
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = "ARCHITECTURAL - INTERIOR CONSTRUCTION ELY ARCHI";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;

			default:
				$title_meta = "THI CÔNG KIẾN TRÚC - NỘI THẤT ELY ARCHI";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;
		}
		break;
	case "gioi_thieu":
		$title = "gioi-thieu";
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = "ELY ARCHI INTERIOR DESIGN AND CONSTRUCTION";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;

			default:
				$title_meta = "NỘI THẤT ELY ARCHI THIẾT KẾ VÀ XÂY DỰNG";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;
		}
		break;
	case "ma_sanpham":
		$title = "ma-sanpham";
		$title_meta = "In offset số lượng lớn Đà Nẵng";
		$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
		$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
		break;

	case "ma_sanphamct":
		$title = "ma-sanpham";
		$title_meta = "Xưởng in offset uy tín Đà Nẵng";
		$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
		$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
		break;
	case "tin_tintuc":
		$title = "tin-tintuc";
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = "ELY ARCHI DESIGN AND BUILD";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;

			default:
				$title_meta = "ELY ARCHI THIẾT KẾ VÀ XÂY DỰNG";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;
		}
		break;

	case "tin_tintucct":
		$title = "tin-tintuc";
		$title_meta = "Xưởng In Ấn Phẩm Quà Tặng Đà Nẵng";
		$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
		$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
		break;
	case "tin_dichvu":
		$title = "tin-dichvu";
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = "ELY ARCHI INTERIOR DESIGN";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;

			default:
				$title_meta = "THIẾT KẾ NỘI THẤT ELY ARCHI";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;
		}
		break;
	case "tin_dichvuu":
		$title = "tin-dichvuu";
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = "ELY ARCHI HOUSING DESIGN";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;

			default:
				$title_meta = "THIẾT KẾ NHÀ Ở ELY ARCHI";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;
		}
		break;
	case "tin_dichvuabc":
		$title = "tin-dichvuabc";
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = "ELY ARCHI INTERIOR DESIGN";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;

			default:
				$title_meta = "THIẾT KẾ NỘI THẤT ELY ARCHI";
				$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
				$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
				break;
		}
		break;

	case "tin_dichvuct":
		$title = "tin-dichvu";
		$title_meta = "In hoá đơn bán lẻ Đà Nẵng";
		$dis = "Tại In Ấn ATV , chúng tôi cung cấp dịch vụ in ấn chất lượng cao, từ danh thiếp đến brochure và bao bì sản phẩm. Đội ngũ thiết kế trẻ trung, sáng tạo của chúng tôi cam kết mang đến sản phẩm hoàn hảo cho mọi nhu cầu. LH ngay qua hotline 0799 45 43 48 để được tư vấn!";
		$key = "xưởng in ấn đà nẵng, in bì thư đà nẵng, in catalogue đà nẵng, in danh thiếp đà nẵng, in card visit đà nẵng, in ấn phẩm văn phòng đà nẵng, in ấn phẩm quà tặng đà nẵng, in cúp vinh danh đà nẵng, in huy hiệu đà nẵng, in kỷ niệm chương đà nẵng, in ấn namecard đà nẵng, in namecard chất lượng cao đà nẵng, in hoá đơn bán lẻ đà nẵng, in hoá đơn vat đà nẵng, in huân chương đà nẵng, xưởng sản xuất huy hiệu đẹp đà nẵng, xưởng in voucher đà nẵng, xưởng in mã qr đà nẵng, xưởng in bảng tên nhân viên đà nẵng, xưởng thiết kế danh thiếp đà nẵng, xưởng in bao thư đà nẵng, thiết kế và sản xuất bảng tên nhân viên đà nẵng, in menu đà nẵng, in tờ rơi đà nẵng.";
		break;

	case "tim_kiem":
		$title_meta = $_GET['tu_khoa'];
		break;
	// GIOI THIEU
	case "chitiet_gioithieu":
		$id = $_REQUEST['id'];
		$tv = "select * from gioi_thieu where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$title = "gioi-thieu";
		$hinhanh = "/HinhCTSP/" . $tv_2['hinhanh'];
		break;
	//tin tức
	case "chitiet_tintintuc":
		$title = "tin-tintuc";
		$id = $_GET['url'];
		$tv = "SELECT * FROM tin_tintuc WHERE linkurl LIKE '%" . $id . "%' ORDER BY id";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);

		// Kiểm tra biến ngôn ngữ
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = $tv_2['tieude_en'];
				$dis = $tv_2['mota_en'];
				$key = $tv_2['tukhoa'];
				break;

			default:
				$title_meta = $tv_2['tieude'];
				$dis = $tv_2['mota'];
				$key = $tv_2['tukhoa'];
				break;
		}

		$hinhanh = "/HinhCTSP/Hinhtintuc/" . $tv_2['hinhanh'];
		break;
	//dichvu
	case "chitiet_tindichvu":
		$title = "tin-dichvu";
		$id = $_GET['url'];
		$tv = "SELECT * FROM tin_dichvu WHERE linkurl LIKE '%" . $id . "%' ORDER BY id";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);

		// Kiểm tra biến ngôn ngữ
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = $tv_2['tieude_en'];
				$dis = $tv_2['mota_en'];
				$key = $tv_2['tukhoa'];
				break;

			default:
				$title_meta = $tv_2['tieude'];
				$dis = $tv_2['mota'];
				$key = $tv_2['tukhoa'];
				break;
		}

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;
	//dichvuu
	case "chitiet_tindichvuu":
		$title = "tin-dichvuu";
		$id = $_GET['url'];
		$tv = "SELECT * FROM tin_dichvuu WHERE linkurl LIKE '%" . $id . "%' ORDER BY id";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);

		// Kiểm tra biến ngôn ngữ
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = $tv_2['tieude_en'];
				$dis = $tv_2['mota_en'];
				$key = $tv_2['tukhoa'];
				break;

			default:
				$title_meta = $tv_2['tieude'];
				$dis = $tv_2['mota'];
				$key = $tv_2['tukhoa'];
				break;
		}

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;
	//dichvuabc
	case "chitiet_tindichvuabc":
		$title = "tin-dichvuabc";
		$id = $_GET['url'];
		$tv = "SELECT * FROM tin_dichvuabc WHERE linkurl LIKE '%" . $id . "%' ORDER BY id";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);

		// Kiểm tra biến ngôn ngữ
		switch ($ngon_ngu_abc) {
			case "tieng_anh":
				$title_meta = $tv_2['tieude_en'];
				$dis = $tv_2['mota_en'];
				$key = $tv_2['tukhoa'];
				break;

			default:
				$title_meta = $tv_2['tieude'];
				$dis = $tv_2['mota'];
				$key = $tv_2['tukhoa'];
				break;
		}

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;

	// dich vu
	case "chitiet_tinthicong":
		$title = "tin-thicong";
		$id = $_REQUEST['id'];
		$tv = "select * from tin_thicong where id like '$id'";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude_en'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;

	// dich vu
	case "chitiet_masanpham":
		$title = "ma-sanpham";
		$id = $_REQUEST['id'];
		$tv = "select * from ma_sanpham where id like '$id'";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$hinhanh = "/HinhCTSP/" . $tv_2['hinhanh'];
		break;

	case "xuat_mot_tin":
		$tv = "select * from du_lieu_mot_tin where id='$_GET[id]'";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['ten'];
		break;
	default:
		$tv = "select * from he_thong  order by id  limit 0,1";
		$tv_1 = mysqli_query($link, $tv);
		$a_tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$tieude = "$tv_2[tieude]";
		$dis = "$tv_2[dis]";
		$key = "$tv_2[key]";
		$title_meta = "$tieude";
		$dis = "$dis";
		$key = "$key";
}
$config_url = $_SERVER["SERVER_NAME"];
?>