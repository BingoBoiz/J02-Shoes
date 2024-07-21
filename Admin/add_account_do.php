<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$ID = $_POST['txtID'];
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $user_type = $_POST['txtUserType'];

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		INSERT INTO `tbl_account` (`ID`, `name`, `email`, `password`, `user_type`) 
		VALUES (NULL, '".$name."', '".$email."', '".$password."', '".$user_type."')";

	// echo $sql; exit();
	// 4. Thực hiện thực thi câu lệnh SQL
	$tin_tuc = mysqli_query($ket_noi, $sql);

	// 5. Thông báo đã THÊM MỚI TIN TỨC thành công
	$url="../admin/list_account.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã THÊM MỚI TÀI KHOẢN THÀNH CÔNG');
			window.location.href = '".$url."';
		</script>
	";
;?>