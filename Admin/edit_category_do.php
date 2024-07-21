<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$id = $_POST['txtID'];
	$ten_danh_muc= $_POST['txtTenDanhMuc'];
	
	
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
	UPDATE `tbl_danh_muc` 
	SET `ten_danh_muc` = '".$ten_danh_muc."' 
	WHERE `tbl_danh_muc`.`danh_muc_id` = '".$id."'
	";
	
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$danh_muc = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã CẬP NHẬT TIN TỨC thành công
	$url="../admin/list_category.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã cập nhật danh mục thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>