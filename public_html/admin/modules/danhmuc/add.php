<?php 
    
    // require_once('../../autoload/autoload.php');
    
    // if ($_SERVER['REQUEST_METHOD']=='POST') {
    //     $name = $_POST['name'];
    //     $active = $_POST['active'];
    //     $sql = "INSERT INTO tb_danhmuc (name, active) VALUES ('$name','$active')";
    //     $sql1 = "SELECT * FROM tb_danhmuc WHERE name = '$name'";
    //     // var_dump($db->queryData($sql1)->num_rows);
    //     // die();
    //     if($db->queryData($sql1)->num_rows != 0){
    //         $_SESSION['error']="Tên danh mục đã tồn tại!!";
    //         header('location:index.php');
    //     }else{
    //         if($db->queryData($sql) > 0 ){
    //             $_SESSION['success']="Thêm thành công!!";
    //         }else{
    //             $_SESSION['error']="Lỗi thêm danh mục!!";
    //         }
    //         header('location:index.php');
    //     }
        
    // }
?>

<?php require_once('admin/layout/header.php') ?>
        
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Thêm Danh Mục</h1>
        <div class="row justify-content-center">
            <div class="col-8 ">
                <form class="border border-light p-5" action="/index.php?ht&ac=dmpad" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="font-weight-bold control-label">Tên danh mục</label>
                        <input type="text" class="form-control col-sm-8" name="name" placeholder="Tên danh mục">
                        
                    </div>
                    <div class="form-group ">
                        <label for="" class="font-weight-bold">Active</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="active" checked>
                            <label class="form-check-label" for="">
                            Hiện
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="active" >
                            <label class="form-check-label" for="">
                            Ẩn
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
        