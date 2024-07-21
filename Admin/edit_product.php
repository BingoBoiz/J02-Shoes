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
<?php 
           // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
    require("../db/config.php");

    // 2. Lấy dữ liệu bản ghi cần SỬA
    $id = $_GET['id'];
    // echo $id; exit();

    // 3. Câu lệnh truy vấn đến bảng dữ liệu
    $sql = "
        SELECT *
        FROM tbl_san_pham
        WHERE san_pham_id=".$id;
    // echo $sql; exit();

    // 4. Thực hiện thực thi câu lệnh truy vấn
    $san_pham = mysqli_query($ket_noi, $sql);
    $row=mysqli_fetch_array($san_pham);
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
                    <h1 style="text-align: center;">SỬA SẢN PHẨM</h1>
                    <hr>
                    <form action="../admin/edit_product_do.php" method="post">
        <p>Tên sản phẩm</p>
        <p><input type="text" name="txtTenSanPham" style="width: 100%;" value="<?php echo $row["ten_san_pham"];?>"></p>
        <p>Ảnh minh họa</p>
        <p><input type="file" name="txtAnhMinhHoa" style="width: 100%;"><?php echo $row["anh_minh_hoa"];?></textarea></p>
        <p>Giá gốc</p>
        <p><textarea name="txtGiaGoc" style="width: 100%;"><?php echo $row["gia_goc"];?></textarea></p>
        <p>Giá bán</p>
        <p><textarea name="txtGiaBan" style="width: 100%;"><?php echo $row["gia_ban"];?></textarea></p>
        
        <p>Số lượng</p>
        <p><textarea name="txtSoLuong" style="width: 100%;"><?php echo $row["so_luong"];?></textarea></p>

        <p>Loại sản phầm</p>
            <p>
                <select name="txtLoaiSanPham">
                        
                        <?php
                        // Bước 1: Kết nối đến CSDL
                         require("../db/config.php");


                     // Bước 2: Lấy dữ liệu từ trên đường đẫn
                        $id = $_GET["id"];

                        $sql = "
                          SELECT * 
                          FROM tbl_loai_san_pham";
                         
                             $dulieu = mysqli_query($ket_noi, $sql);
                        while ($row1 = mysqli_fetch_array($dulieu)) {
                            if($row["loai_san_pham_id"]==$row1["loai_san_pham_id"]) {
                        ;?>
                            <option value="<?php echo $row1["loai_san_pham_id"];?>" selected><?php echo $row1["ten_loai_san_pham"];?></option>
                        <?php
                            } else {
                        ;?>
                            <option value="<?php echo $row1["loai_san_pham_id"];?>"><?php echo $row1["ten_loai_san_pham"];?></option>
                        <?php
                            }
                        }
                        ;?>
                        
                </select>
            </p>           
        <p>Loại danh mục</p>
            <p>
                <select name="txtDanhMuc">
                        <?php
                        // Bước 1: Kết nối đến CSDL
                         require("../db/config.php");


                     // Bước 2: Lấy dữ liệu từ trên đường đẫn
                        $id = $_GET["id"];

                        $sql = "
                          SELECT * 
                          FROM tbl_danh_muc";
                         
                             $dulieu = mysqli_query($ket_noi, $sql);
                        while ($row1 = mysqli_fetch_array($dulieu)) {
                            if($row["danh_muc_id"]==$row1["danh_muc_id"]) {
                        ;?>
                            <option value="<?php echo $row1["danh_muc_id"];?>" selected><?php echo $row1["ten_danh_muc"];?></option>
                        <?php
                            } else {
                        ;?>
                            <option value="<?php echo $row1["danh_muc_id"];?>"><?php echo $row1["ten_danh_muc"];?></option>
                        <?php
                            }
                        }
                        ;?>
                </select>
            </p> 
        <p>Hướng dẫn bảo quản</p>
        <p><textarea name="txthdsd" style="width: 100%;"><?php echo $row["hdbq"];?></textarea></p>
        
    
              
        <p>Mô tả</p>
        <p><textarea name="txtMoTa" style="width: 100%;"><?php echo $row["mo_ta"];?></textarea></p>
        <input type="hidden" name="txtID" value="<?php echo $row["san_pham_id"];?>">
        <p><button>Cập nhật</button></p>
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
