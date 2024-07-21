<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$ten_san_pham = $_POST['txtTenSanPham'];
	$mo_ta = $_POST['txtMoTa'];
	$anh_minh_hoa = $_POST['txtAnhMinhHoa'];
	$gia_goc = $_POST['txtGiaGoc'];
	$gia_ban = $_POST['txtGiaBan'];
	$hdsd = $_POST['txtHDSD'];
	$loai_san_pham = $_POST['txtLoaiSanPham'];
	$danh_muc = $_POST['txtDanhMuc'];
	$so_luong = $_POST['txtSoLuong'];

    /*$anhminhhoa = '../image/' . basename($_FILES["txtAnhMinhHoa"]["name"]);
	$fileanhtam = $_FILES["txtAnhMinhHoa"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam, $anhminhhoa);
	if(!$result) {
		$anhminhhoa=NULL;
	}*/

	/*$anhminhhoa = "../image/" . basename($_FILES["txtAnhMinhHoa"]["name"]);
	$fileanhtam = $_FILES["txtAnhMinhHoa"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'immage/'.$anhminhhoa);
	if(!$result) {
		$anhminhhoa=NULL;
	}*/
	
	// echo $loai_tin_tuc_id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		INSERT INTO `tbl_san_pham` (`san_pham_id`, `ten_san_pham`, `mo_ta`, `anh_minh_hoa`, `gia_goc`, `gia_ban`, `so_luong`,`hdbq`, `loai_san_pham_id`, `danh_muc_id`,`created_at`) 
		VALUES (NULL, '".$ten_san_pham."', '".$mo_ta."', '".$anh_minh_hoa."', '".$gia_goc."', '".$gia_ban."', '".$so_luong."','".$hdsd."', '".$loai_san_pham."', '".$danh_muc."',current_timestamp())";

	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$san_pham = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã THÊM MỚI TIN TỨC thành công
	$url="../admin/list_product.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã THÊM MỚI SẢN PHẨM THÀNH CÔNG');
			window.location.href = '".$url."';
		</script>
	";
;?>