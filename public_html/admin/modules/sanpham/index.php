<?php 
    
    // require_once('../../autoload/autoload.php');
    // $dm = $db->getData("tb_sanpham");
?>


<?php require_once('admin/layout/header.php') ?>
        
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh sách sản phẩm <a href="index.php?ht&ac=spgad"><button type="button" class="btn btn-primary">Thêm</button></a></h1>
        <?php if(isset($_SESSION["success"])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php } ?>
        <div class="card mb-4">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">soluong</th>
                        <th scope="col">noibat</th>
                        <th scope="col">Create_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; foreach ($dm as $item) { ?>
                        <tr>
                            <th scope="row"><?php echo $stt; ?></th>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td><img class="" width="100px" src="public/upload/<?php echo $item['image']; ?>" alt=""></td>
                            <td><?php echo $item['soluong']; ?></td>
                            <td><?php echo $item['noibat']; ?></td>
                            <td><?php echo $item['create_at']; ?></td>
                            <td><a href="index.php?ht&ac=spgs&id=<?php echo $item['id']; ?>"><button type="button" class="btn btn-success">Sửa</button></a>
                                <a href="index.php?ht&ac=spd&id=<?php echo $item['id']; ?>"><button type="button" class="btn btn-danger">Xoá</button></a></td>
                        </tr>
                    <?php $stt++; } ?>
                </tbody>
            </table>
        </div>
        <div style="height: 100vh;"></div>
        <!-- <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
        </div> -->
    </div>
</main>


<?php require_once('admin/layout/footer.php') ?>
        