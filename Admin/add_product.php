<?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sql = "
                SELECT * 
                FROM tbl_loai_san_pham";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $loai_san_pham = mysqli_query($ket_noi, $sql);
        ;?>
<?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sqll = "
                SELECT * 
                FROM tbl_danh_muc";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $danh_muc = mysqli_query($ket_noi, $sqll);
        ;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <?php include_once 'layout/header.php';?>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">THÊM MỚI SẢN PHẨM</h1>
                    <hr>
                   <form action="../admin/add_product_do.php" method="post">
        <p>Tên sản phẩm</p>
        <p><input type="text" required name="txtTenSanPham" style="width: 100%;"></p>
        <p>Ảnh minh hoạ</p>
        <p><input type="file" required name="txtAnhMinhHoa"style="width: 100%;"></p>
        <p>Giá gốc</p>
        <p><input type="text" required name="txtGiaGoc"style="width: 100%;"></p>
        <p>Giá bán</p>
        <p><input type="text" required name="txtGiaBan"style="width: 100%;"></p>
        
        <p>Số lượng</p>
        <p><input type="text" required name="txtSoLuong"style="width: 100%;"></p>
        <p>Loại sản phẩm</p>
            <p>
                <select name="txtLoaiSanPham">
                        <?php foreach ($loai_san_pham as $key => $value) {?>
                            <option value="<?php echo $value['loai_san_pham_id']?>"><?php echo $value['ten_loai_san_pham']?></option><?php
                        }?>
                </select>
            </p>            
        <p>Loại danh mục</p>
            <p>
                <select name="txtDanhMuc">
                        <?php foreach ($danh_muc as $key => $value) {?>
                            <option value="<?php echo $value['danh_muc_id']?>"><?php echo $value['ten_danh_muc']?></option><?php
                        }?>
                </select>
            </p>        
        <p>Hướng dẫn bảo quản</p>
        <p><textarea name="txtHDSD" style="width: 100%;"></textarea></p>
        <p>Mô tả</p>
        <p><textarea name="txtMoTa" required  style="width: 100%;"></textarea></p>
        <p><button>Thêm mới</button></p>
    </form>
    <script>
        CKEDITOR.replace('txtMoTa', {
            height: 400,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
    </script> 
    <script>
        CKEDITOR.replace('txtHDSD', {
            height: 400,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
    </script> 
    </body>
</html>
