<?php 
    
    // require_once('../../autoload/autoload.php');
    
    // if ($_SERVER['REQUEST_METHOD']=='POST') {
    //     $name = $_POST['name'];
    //     $active = $_POST['active'];
    //     $id = $_GET['id'];
    //     $sql = "UPDATE tb_danhmuc SET name='$name',active='$active' WHERE id = '$id'";
    //     if($db->queryData($sql) > 0 ){
    //         $_SESSION['success']="Sửa thành công!!";
    //         header('location:index.php');
    //     }
    // }

    // if (isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     if(empty( $id)){
    //         header('location:http://localhost/ATW/Admin/modules/404.php');
    //     }
    //     $dm = $db->getDataById("tb_danhmuc",$id);
    // }
?>

<?php require_once('admin/layout/header.php') ?>
        
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Sửa Danh Mục</h1>
        <div class="row justify-content-center">
            <div class="col-8 ">
                <form class="border border-light p-5" action="index.php?ht&ac=dmps&id=32" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="font-weight-bold control-label">Tên danh mục</label>
                        <input type="text" class="form-control col-sm-8" name="name" value="<?php echo $dm['name']?>">
                        
                    </div>
                    <div class="form-group ">
                        <label for="" class="font-weight-bold">Active</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="active" 
                                <?php if($dm['active']==1) echo "checked" ?>
                            >
                            <label class="form-check-label" for="">
                            Hiện
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="active"
                                 <?php if($dm['active']==0) echo "checked" ?>
                            >
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
        