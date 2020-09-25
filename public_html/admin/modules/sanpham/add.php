<?php 
    
    // require_once('autoload/autoload.php');
    
    // $dm = $db->getData("tb_danhmuc");

    // if ($_SERVER['REQUEST_METHOD']=='POST') {
    //     if (isset($_FILES['image']) && $_FILES['image']["name"]!=null) {

    //         $file_name=$_FILES['image']["name"];// láy tên file
    //         $path ="../../../public/upload/".$file_name;//đường dẫn lưu file
    //         $file_tmp =$_FILES['image']['tmp_name'];// đường dẫn tạm
    //         move_uploaded_file($file_tmp,$path);//lưu file

    //         $name = $_POST['name'];
    //         $price = $_POST['price'];
    //         $soluong = $_POST['soluong'];
    //         $danhmuc_id = $_POST['danhmuc_id'];
    //         $image = $file_name;
    //         $mota = $_POST['mota'];
    //         $noibat = $_POST['noibat'];
    //         $sql = "INSERT INTO tb_sanpham ( name, image, price, soluong, noibat, mota, danhmuc_id) VALUES ('$name', '$image', '$price', '$soluong', '$noibat', '$mota', '$danhmuc_id')";
    //         if($db->queryData($sql) > 0 ){
    //             $_SESSION['success']="Thêm thành công!!";
    //             header('location:index.php');
    //         }
    //     }else{
    //         echo "<script>alert('Chưa chọn ảnh');</script>";
    //     }
    // }
?>

<?php require_once('admin/layout/header.php') ?>
        
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Thêm Sản Phẩm</h1>
        <div class="row justify-content-center">
            <div class="col-8 ">
                <form class="border border-light p-5" action="index.php?ht&ac=sppad" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label for="" class="font-weight-bold control-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="" class="font-weight-bold control-label">Giá</label>
                            <input type="number" class="form-control" name="price" placeholder="Giá sản phẩm">
                        </div>
                        <div class="form-group col-4">
                            <label for="" class="font-weight-bold control-label">Số lượng</label>
                            <input type="number" class="form-control" name="soluong" placeholder="Số lượng sản phẩm">
                        </div>
                        <div class="form-group col-4">
                            <label class="font-weight-bold control-label" for="">Danh mục</label>
                            <select class="custom-select" name="danhmuc_id">
                                <option selected>Chọn...</option>
                                <?php foreach ($dm as $item): ?>
                                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Ảnh</label>
                        <input type="file" class="form-control-file" name="image" id="">
                    </div>

                    

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Mô tả</label>
                        <textarea class="form-control" name="mota" rows="3"></textarea>
                    </div>

                    <div class="form-group ">
                        <label for="" class="font-weight-bold">Nổi bật</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="noibat" checked>
                            <label class="form-check-label" for="">
                            Có
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="noibat" >
                            <label class="form-check-label" for="">
                            Không
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
        
<!--         <div style="height: 100vh;"></div> -->
    </div>
</main>

<?php require_once('admin/layout/footer.php') ?>
        