<?php 
    
    
    // if ($_SERVER['REQUEST_METHOD']=='POST') {
    //     $id = $_GET['id'];
    //     $sp = $db->getDataById("tb_sanpham",$id);

    //     if (isset($_FILES['image']) && $_FILES['image']["name"]!=null){
    //         $file_name=$_FILES['image']["name"];
    //         $path ="../../../public/upload/".$file_name;//đường dẫn lưu file
    //         $file_tmp =$_FILES['image']['tmp_name'];
    //         move_uploaded_file($file_tmp,$path);//lưu file
    //         unlink("../../../public/upload/".$sp['image']);//xoa file cu
    //     }else{
    //         $file_name = $sp['image'];
    //     }

    //     $name = $_POST['name'];
    //     $image = $file_name;
    //     $price = $_POST['price'];
    //     $soluong = $_POST['soluong'];
    //     $noibat = $_POST['noibat'];
    //     $mota = $_POST['mota'];
    //     $danhmuc_id = $_POST['danhmuc_id'];
    //     // var_dump($danhmuc_id);
    //     // die();
    //     $sql = "UPDATE tb_sanpham SET name='$name',price='$price',image='$image',soluong='$soluong',noibat='$noibat',mota='$mota',danhmuc_id='$danhmuc_id' WHERE id = '$id'";
    //     if($db->queryData($sql) > 0 ){
    //         $_SESSION['success']="Sửa thành công!!";
    //         header('location:index.php');
    //     }else{
    //         $_SESSION['error']="Sửa không thành công!!";
    //         header('location:index.php');
    //     }
    // }

    // if (isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     if(empty( $id)){
    //         header('location:http://localhost/ATW/Admin/modules/404.php');
    //     }
    //     $sp = $db->getDataById("tb_sanpham",$id);
    //     $dm1 = $db->getData("tb_danhmuc");
    //     $dm = $db->getDataById("tb_danhmuc",$sp['danhmuc_id']);
    // }
?>



<?php require_once('admin/layout/header.php') ?>
        
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Sửa Sản Phẩm</h1>
        <div class="row justify-content-center">
            <div class="col-8 ">
                <form class="border border-light p-5" action="index.php?ht&ac=spps&id=<?php echo $sp['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label for="" class="font-weight-bold control-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $sp['name']?>">
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="" class="font-weight-bold control-label">Giá</label>
                            <input type="number" class="form-control" name="price" value="<?php echo $sp['price']?>">
                        </div>
                        <div class="form-group col-4">
                            <label for="" class="font-weight-bold control-label">Số lượng</label>
                            <input type="number" class="form-control" name="soluong" value="<?php echo $sp['soluong']?>">
                        </div>
                        <div class="form-group col-4">
                            <label class="font-weight-bold control-label" for="">Danh mục</label>
                            <select class="custom-select" name="danhmuc_id">
                                <option selected value="<?php echo $dm['id'] ?>"><?php echo $dm['name']?></option>
                                <?php foreach ($dm1 as $item): ?>
                                    <?php if($dm['name'] != $item['name']): ?>
                                        <option value="<?php echo $item['id'] ?>"><?php echo $item['name']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Ảnh</label>
                        <input type="file" class="form-control-file" name="image" id="">
                        <br>
                        <img width="200px" src="public/upload/<?php echo $sp['image']?>" alt="">
                    </div>

                    

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Mô tả</label>
                        <textarea class="form-control" name="mota" rows="3"><?php echo $sp['mota']?></textarea>
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
        