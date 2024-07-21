<?php 
    // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
    require("../db/config.php");

    // 2. Lấy dữ liệu bản ghi cần SỬA
    $id = $_GET['id'];
    // echo $id; exit();

    // 3. Câu lệnh truy vấn đến bảng dữ liệu
    $sql = "
        SELECT *
        FROM tbl_tin_tuc
        WHERE tin_tuc_id=".$id;
    // echo $sql; exit();

    // 4. Thực hiện thực thi câu lệnh truy vấn
    $tin_tuc = mysqli_query($ket_noi, $sql);
    $row=mysqli_fetch_array($tin_tuc);
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
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Shoes-Store</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">AD_Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="list_product.php">Products</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">SỬA TIN TỨC</h1>
                    <hr>
                    <form action="../admin/edit_blog_do.php" method="post">
        <p>TIÊU ĐỀ</p>
        <p><input type="text" name="txtTieuDe" style="width: 100%;" value="<?php echo $row["tieu_de"];?>"></p>
        <p>MÔ TẢ</p>
        <p><textarea name="txtMoTa" style="width: 100%;"><?php echo $row["mo_ta"];?></textarea></p>
        <p>NGÀY ĐĂNG</p>
        <p><textarea name="txtNgayDang" style="width: 100%;"><?php echo $row["ngay_dang"];?></textarea></p>
        <p>ẢNH MINH HỌA</p>
        <p><input type="file" name="txtAnhMinhHoa" style="width: 100%;"><?php echo $row["anh_minh_hoa"];?></textarea></p>               
        <p>NỘI DUNG</p>
        <p><textarea name="txtNoiDung" style="width: 100%;"><?php echo $row["noi_dung"];?></textarea></p>
        <input type="hidden" name="txtID" value="<?php echo $row["tin_tuc_id"];?>">
        <p><button>Cập nhật</button></p>
    </form>
    <script>
        CKEDITOR.replace('txtNoiDung', {
            height: 400,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
    </script>
    </body>
</html>