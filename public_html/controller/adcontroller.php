<?php 
	
	
	class Adcontroller
	{
		public $model;
	    public function Adcontroller(){
			require_once('autoload/autoload.php');
			$this->model = $db;
	    }

	    public function dashboard(){
	    	$dm = $this->model->getData("tb_danhmuc");
	    	include('admin/modules/dashboard/index.php');
	    }

	    //danhmuc
	    public function danhmuc_index(){
	    	$dm = $this->model->getData("tb_danhmuc");
	    	include('admin/modules/danhmuc/index.php');
	    }
	    public function danhmuc_getadd(){
	    	include('admin/modules/danhmuc/add.php');
	    }
	    public function danhmuc_postadd(){
		    if ($_SERVER['REQUEST_METHOD']=='POST') {
		        $name = $_POST['name'];
		        $active = $_POST['active'];
		        $sql = "INSERT INTO tb_danhmuc (name, active) VALUES ('$name','$active')";
		        $sql1 = "SELECT * FROM tb_danhmuc WHERE name = '$name'";
		        // var_dump($db->queryData($sql1)->num_rows);
		        // die();
		        if($this->model->queryData($sql1)->num_rows != 0){
		            $_SESSION['error']="Tên danh mục đã tồn tại!!";
		            header('location:index.php?ht&ac=dmid');
		        }else{
		            if($this->model->queryData($sql) > 0 ){
		                $_SESSION['success']="Thêm thành công!!";
		            }else{
		                $_SESSION['error']="Lỗi thêm danh mục!!";
		            }
		            header('location:index.php?ht&ac=dmid');
		        }
		        
		    }
	    }

	    public function danhmuc_getedit(){
	    	if (isset($_GET['id'])) {
		        $id = $_GET['id'];
		        if(empty( $id)){
		            header('location:http://localhost/ATW/Admin/modules/404.php');
		        }
	        	$dm = $this->model->getDataById("tb_danhmuc",$id);
	    	}
	    	include('admin/modules/danhmuc/edit.php');
	    }
	    public function danhmuc_postedit(){
	    	if ($_SERVER['REQUEST_METHOD']=='POST') {
		        $name = $_POST['name'];
		        $active = $_POST['active'];
		        $id = $_GET['id'];
		        $sql = "UPDATE tb_danhmuc SET name='$name',active='$active' WHERE id = '$id'";
		        if($this->model->queryData($sql) > 0 ){
		            $_SESSION['success']="Sửa thành công!!";
		            header('location:index.php?ht&ac=dmid');
		        }else{
		        	$_SESSION['error']="Sửa không thành công!!";
		            header('location:index.php?ht&ac=dmid');
		        }
		    }
	    }

	    public function danhmuc_del(){
	    	if (isset($_GET['id'])) {
		        $id = $_GET['id'];
		        $sql = "SELECT * FROM tb_sanpham WHERE danhmuc_id = '$id'";
		        // var_dump($db->queryData($sql)->num_rows);
		        // die();
		        if($this->model->queryData($sql)->num_rows >0){
		            $_SESSION["error"] = "Xoas không thành công, bạn cần xoá các sản phẩm thuộc danh mục này!!";
		            header('location:index.php?ht&ac=dmid');
		        }else{
		            $sql = "DELETE FROM tb_danhmuc WHERE id = '$id'";
		            if($this->model->queryData($sql) > 0 ){
		                $_SESSION["success"] = "Xoá thành công!!";
		                header('location:index.php?ht&ac=dmid');
		            }
		        }
		    }
	    }

	    //sanpham
	    public function sanpham_index(){
	    	$dm = $this->model->getData("tb_sanpham");
	    	include('admin/modules/sanpham/index.php');
	    }

	    public function sanpham_getadd(){
	    	$dm = $this->model->getData("tb_danhmuc");
	    	include('admin/modules/sanpham/add.php');
	    }

	    public function sanpham_postadd(){
		    if ($_SERVER['REQUEST_METHOD']=='POST') {
		        if (isset($_FILES['image']) && $_FILES['image']["name"]!=null) {

		            $file_name=strtotime(date('Y-m-d H:i:s')).$_FILES['image']["name"];// láy tên file
		            $path ="public/upload/".$file_name;//đường dẫn lưu file
		            $file_tmp =$_FILES['image']['tmp_name'];// đường dẫn tạm
		            move_uploaded_file($file_tmp,$path);//lưu file

		            $name = $_POST['name'];
		            $price = $_POST['price'];
		            $soluong = $_POST['soluong'];
		            $danhmuc_id = $_POST['danhmuc_id'];
		            $image = $file_name;
		            $mota = $_POST['mota'];
		            $noibat = $_POST['noibat'];
		            $sql = "INSERT INTO tb_sanpham ( name, image, price, soluong, noibat, mota, danhmuc_id) VALUES ('$name', '$image', '$price', '$soluong', '$noibat', '$mota', '$danhmuc_id')";
		            if($this->model->queryData($sql) > 0 ){
		                $_SESSION['success']="Thêm thành công!!";
		                header('location:index.php?ht&ac=spid');
		            }else{
		            	$_SESSION['error']="Thêm không thành công!!";
		                header('location:index.php?ht&ac=spid');
		            }
		        }else{
		            echo "<script>alert('Chưa chọn ảnh');</script>";
		        }
		    }
	    }

	    public function sanpham_getedit(){
	    	if (isset($_GET['id'])) {
		        $id = $_GET['id'];
		        if(empty( $id)){
		            header('location:http://localhost/ATW/Admin/modules/404.php');
		        }
		        $sp = $this->model->getDataById("tb_sanpham",$id);
		        $dm1 = $this->model->getData("tb_danhmuc");
		        $dm = $this->model->getDataById("tb_danhmuc",$sp['danhmuc_id']);
		    }
	    	include('admin/modules/sanpham/edit.php');
	    }

	    public function sanpham_postedit(){
	    	if ($_SERVER['REQUEST_METHOD']=='POST') {
		        $id = $_GET['id'];
		        $sp = $this->model->getDataById("tb_sanpham",$id);

		        if (isset($_FILES['image']) && $_FILES['image']["name"]!=null){
		            $file_name=strtotime(date('Y-m-d H:i:s')).$_FILES['image']["name"];
		            $path ="public/upload/".$file_name;//đường dẫn lưu file
		            $file_tmp =$_FILES['image']['tmp_name'];
		            move_uploaded_file($file_tmp,$path);//lưu file
		            unlink("public/upload/".$sp['image']);//xoa file cu
		        }else{
		            $file_name = $sp['image'];
		        }

		        $name = $_POST['name'];
		        $image = $file_name;
		        $price = $_POST['price'];
		        $soluong = $_POST['soluong'];
		        $noibat = $_POST['noibat'];
		        $mota = $_POST['mota'];
		        $danhmuc_id = $_POST['danhmuc_id'];
		        // var_dump($danhmuc_id);
		        // die();
		        $sql = "UPDATE tb_sanpham SET name='$name',price='$price',image='$image',soluong='$soluong',noibat='$noibat',mota='$mota',danhmuc_id='$danhmuc_id' WHERE id = '$id'";
		        if($this->model->queryData($sql) > 0 ){
		            $_SESSION['success']="Sửa thành công!!";
		            header('location:index.php?ht&ac=spid');
		        }else{
		            $_SESSION['error']="Sửa không thành công!!";
		            header('location:index.php?ht&ac=spid');
		        }
		    }
	    }

	    public function sanpham_del(){
	    	if (isset($_GET['id'])) {
		        $id = $_GET['id'];
		        $sql = "DELETE FROM tb_sanpham WHERE id = '$id'";
		        $sp = $this->model->getDataById("tb_sanpham",$id);
		        unlink("public/upload/".$sp['image']);
		        if($this->model->queryData($sql) > 0 ){
		        	$_SESSION["success"] = "Xoá thành công!!";
		            header('location:index.php?ht&ac=spid');
		        }
		    }
	    }

	    public function login_get(){
	    	include('admin/modules/login.php');
	    }
	    public function login_post(){
	    	$name = $_POST['name'];
	    	$pass = $_POST['pass'];
	    	$sql = "SELECT * FROM tb_nguoidung WHERE ten = '$name' and ma = '$pass'";
	    	$result = $this->model->querySql($sql);
	    	// var_dump(count($result)); die();
	    	if(count($result)===1){
	    		$_SESSION['success']="Đăng nhập thành công!!";
	            $_SESSION['ad']=['name'=>$name,'pass'=>$pass];
	            header('location:index.php?ht');
	    	}else{
	    		$_SESSION['error']="Đăng nhập không thành công!!";
	            header('location:index.php?ht');
	    	}
	    }
	    public function logout(){
	    	unset($_SESSION['ad']);
	    	unset($_SESSION['success']);
	    	header('location:index.php?ht');
	    }
	}
	

?>