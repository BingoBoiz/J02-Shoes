<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$tieu_de = $_POST['txtTieuDe'];
	$mo_ta = $_POST['txtMoTa'];
	$ngay_dang = $_POST['txtNgayDang'];
	$noi_dung = $_POST['txtNoiDung'];
	$anh_minh_hoa = $_POST['txtAnhMinhHoa'];

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		INSERT INTO `tbl_tin_tuc` (`tin_tuc_id`, `tieu_de`, `mo_ta`, `ngay_dang`, `noi_dung`,  `anh_minh_hoa`) 
		VALUES (NULL, '".$tieu_de."', '".$mo_ta."', '".$ngay_dang."', '".$noi_dung."', '".$anh_minh_hoa."')";

	// echo $sql; exit();
	// 4. Thực hiện thực thi câu lệnh SQL
	$tin_tuc = mysqli_query($ket_noi, $sql);

	// 5. Thông báo đã THÊM MỚI TIN TỨC thành công
	$url="../admin/list_blog.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã THÊM MỚI TIN TỨC THÀNH CÔNG');
			window.location.href = '".$url."';
		</script>
	";
;?>