<?php 
	
	
	class Frcontroller
	{
		public $model;
		public $dm;
		public $title = "Tất cả sản phẩm";
		public function Frcontroller(){
			require_once('autoload/autoload.php');
			$this->model = $db;
			$this->dm = $this->model->getData('tb_danhmuc');
			$sql = "select * from tb_sanpham order by create_at desc limit 6";
			$this->nsp = $this->model->querySql($sql);
			$sql = "select * from tb_sanpham where noibat=1 order by create_at desc limit 6";
			$this->nbsp = $this->model->querySql($sql);
		}

		public function front_index(){
			// $dm = $this->model->getData('tb_danhmuc');
			$sps = $this->model->getData('tb_sanpham');
			include('front/index.php');
		}

		public function front_danhmuc(){
			$id = $_GET['id'];
			$sps = $this->model->getDataSpById($id);
			$dmTitleSql = "select * from tb_danhmuc where id = '$id'";
			$temp = $this->model->querySql($dmTitleSql);
			//var_dump($temp);
			$this->title ="Danh mục: ".$temp[0]['name'];
			// var_dump($this->title);die();
			include('front/index.php');
		}

		public function front_search()
		{
			if (isset($_POST['keywork'])) {
				$key = $_POST['keywork'];
				$sql = "SELECT * FROM `tb_sanpham` WHERE name LIKE '%$key%'";
				$sps = $this->model->querySql($sql);
				if(count($sps)>0){
					$this->title = "Từ khoá: ".$key;
				}else{
					$this->title = "Không tìm thấy kết quả phù hợp từ khoá: ".$key;
				}
				include('front/index.php');
			}else{
				include('front/404.php');
			}
		}
	    public function front_chitietsp(){
	    	if (isset($_GET['id'])) {
	    		$id = $_GET['id'];
				// $key = $_POST['keywork'];
				$sql = "SELECT * FROM `tb_sanpham` WHERE id = '$id' limit 1";
				$sps = $this->model->querySql($sql);
				// var_dump($sps);
				if(count($sps)>0){
					$this->title = "Sản phẩm: ".$sps[0]['name'];
				}else{
					$this->title = "Không tìm thấy kết quả phù hợp từ khoá: ";
				}
				include('front/pages/chitiet.php');
			}else{
				include('front/404.php');
			}
	    }
	}
	

?>