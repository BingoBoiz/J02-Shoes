<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("./db/config.php");

	// Lấy các dữ liệu bên trang Contact 
	$tenkh = $_POST['txtTen'];
	$sdt = $_POST['txtSodt'];
	$email = $_POST['txtEmail'];
	$noidung = $_POST['txtNoidung'];

	// Chèn dữ liệu vào bảng tbl_lien_he
	$sql = "
	INSERT INTO `tbl_lien_he` (
		`lien_he_id`, 
		`ho_va_ten`,
		`sdt`,
		`email`,
		`noi_dung_lien_he`)
	VALUES (
		NULL, 
		'".$tenkh."',
		'".$sdt."',
		'".$email."',
		'".$noidung."')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// 3.Cho thực thi câu lệnh SQL trên
	$lh = mysqli_query($ket_noi, $sql);
    
	// 4. Thông báo đã THÊM MỚI LIÊN HỆ thành công

	$url="contact.php";
	echo "
		<script type='text/javascript'>
			window.alert('PHẢN HỒI đã được gửi đến chúng tôi!!!');
			window.location.href = '".$url."';
		</script>
	";
;?>