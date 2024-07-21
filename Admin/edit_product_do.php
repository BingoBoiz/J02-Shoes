<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$id = $_POST['txtID'];
	$ten_san_pham = $_POST['txtTenSanPham'];
	$mo_ta = $_POST['txtMoTa'];
	$anh_minh_hoa = $_POST['txtAnhMinhHoa'];
	$gia_goc = $_POST['txtGiaGoc'];
	$gia_ban = $_POST['txtGiaBan'];
	$hdsd = $_POST['txtHDSD'];
	$loai_san_pham = $_POST['txtLoaiSanPham'];
	$danh_muc = $_POST['txtDanhMuc'];
	$so_luong = $_POST['txtSoLuong'];


	
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	if($anh_minh_hoa==NULL) 
	{		
		$sql = "

		UPDATE `tbl_san_pham` SET 
			`ten_san_pham` = '".$ten_san_pham."', `mo_ta` = '".$mo_ta."',`gia_goc` = '".$gia_goc."', `gia_ban` = '".$gia_ban."',  `so_luong` = '".$so_luong."' , `hdbq` = '".$hdsd."',`loai_san_pham_id` = '".$loai_san_pham."' , `danh_muc_id` = '".$danh_muc."'
	WHERE `tbl_san_pham`.`san_pham_id` = '".$id."'
	";
	} 
	else 
	{
		$sql = "
		UPDATE `tbl_san_pham` SET 
			`ten_san_pham` = '".$ten_san_pham."', `mo_ta` = '".$mo_ta."',`anh_minh_hoa` = '".$anh_minh_hoa."', `gia_goc` = '".$gia_goc."', `gia_ban` = '".$gia_ban."',  `so_luong` = '".$so_luong."' , `hdbq` = '".$hdsd."',`loai_san_pham_id` = '".$loai_san_pham."' , `danh_muc_id` = '".$danh_muc."'
	WHERE `tbl_san_pham`.`san_pham_id` = '".$id."'
	";
	}
	
	
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$san_pham = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã CẬP NHẬT TIN TỨC thành công
	$url="../admin/list_product.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã cập nhật sản phẩm thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>