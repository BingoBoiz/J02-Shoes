<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần XOÁ
	$id = $_GET['id'];
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		DELETE
		FROM tbl_lien_he
		WHERE lien_he_id=".$id;
	// echo $sql; exit();

	// 4. Thực hiện truy vấn đến bảng dữ liệu
	$lh = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã xoá thành công
	$url="../admin/list_contact.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã xóa thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>