<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$id = $_POST['txtID'];
	$tieu_de = $_POST['txtTieuDe'];
	$mo_ta = $_POST['txtMoTa'];

	$noi_dung = $_POST['txtNoiDung'];
	$ngay_dang = $_POST['txtNgayDang'];
	$anh_minh_hoa = $_POST['txtAnhMinhHoa'];


	
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	if($anh_minh_hoa==NULL) 
	{		
		$sql = "
	UPDATE `tbl_tin_tuc` 
	SET `tieu_de` = '".$tieu_de."', `mo_ta` = '".$mo_ta."',`noi_dung` = '".$noi_dung."', `ngay_dang` = '".$ngay_dang."'
	WHERE `tbl_tin_tuc`.`tin_tuc_id` = '".$id."'
	";
	
	} 
	else 
	{
		$sql = "
	UPDATE `tbl_tin_tuc` 
	SET `tieu_de` = '".$tieu_de."', `mo_ta` = '".$mo_ta."',`noi_dung` = '".$noi_dung."', `ngay_dang` = '".$ngay_dang."', `anh_minh_hoa` = '".$anh_minh_hoa."' 
	WHERE `tbl_tin_tuc`.`tin_tuc_id` = '".$id."'
	";
	}





	
	
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$tin_tuc = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã CẬP NHẬT TIN TỨC thành công
	$url="../admin/list_blog.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã cập nhật tin tức thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>                      