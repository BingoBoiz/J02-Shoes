<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$id = $_POST['txtID'];
	$ten_loai_san_pham = $_POST['txtTenLoaiSanPham'];
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
	UPDATE `tbl_loai_san_pham` 
	SET `ten_loai_san_pham` = '".$ten_loai_san_pham."'
	WHERE `tbl_loai_san_pham`.`loai_san_pham_id` = '".$id."'
	";
	
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$san_pham = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã CẬP NHẬT TIN TỨC thành công
	$url="../admin/list_type.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã cập nhật loại sản phẩm thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>