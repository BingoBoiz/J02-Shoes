<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../db/config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$ten_loai_san_pham = $_POST['txtTenLoaiSanPham'];

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
	$sql = "INSERT INTO `tbl_loai_san_pham` (`loai_san_pham_id`, `ten_loai_san_pham`) VALUES (NULL, '".$ten_loai_san_pham."')";

	

	// 4. Thực hiện thực thi câu lệnh SQL
	$san_pham = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã THÊM MỚI TIN TỨC thành công
	$url="../admin/list_type.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã THÊM MỚI SẢN PHẨM THÀNH CÔNG');
			window.location.href = '".$url."';
		</script>
	";
;?>