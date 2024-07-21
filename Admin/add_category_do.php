<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$ten_danh_muc = $_POST['txtTenDanhMuc'];

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		INSERT INTO `tbl_danh_muc` (`danh_muc_id`, `ten_danh_muc`) 
		VALUES (NULL, '".$ten_danh_muc."')";

	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$danh_muc = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã THÊM MỚI TIN TỨC thành công
	$url="../admin/list_category.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã THÊM MỚI DANH MỤC THÀNH CÔNG');
			window.location.href = '".$url."';
		</script>
	";
;?>