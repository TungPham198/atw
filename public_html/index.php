<?php 

// test
	session_start();
	if(isset($_GET['ht'])){
		require_once 'controller/adcontroller.php';
		$controller = new Adcontroller;
		$task="";
		if(isset($_GET['ac'])){
			$task = $_GET['ac'];
		}
		if($task == "lgi"){
			$controller->login_post();
		}
		if (isset($_SESSION['ad']['name'])) {
			switch ($task) {
				//dm = danh muc id= index gad= getadd...
				case "dmid":
					$controller->danhmuc_index();
					break;
				case "dmgad":
					$controller->danhmuc_getadd();
					break;
				case "dmpad":
					$controller->danhmuc_postadd();
					break;
				case "dmgs":
					$controller->danhmuc_getedit();
					break;
				case "dmps":
					$controller->danhmuc_postedit();
					break;
				case "dmd":
					$controller->danhmuc_del();
					break;
				//sp = san pham
				case "spid":
					$controller->sanpham_index();
					break;
				case "spgad":
					$controller->sanpham_getadd();
					break;
				case "sppad":
					$controller->sanpham_postadd();
					break;
				case "spgs":
					$controller->sanpham_getedit();
					break;
				case "spps":
					$controller->sanpham_postedit();
					break;
				case "spd":
					$controller->sanpham_del();
					break;
				case "lgo":
					$controller->logout();
					break;
				default:
					$controller->dashboard();
					var_dump($_SESSION['ad']);
					break;
			}
		}else{
			$controller->login_get();
		}
	}
	else{
		require_once 'controller/frcontroller.php';
		$controller = new Frcontroller;
		$task="";
		if(isset($_GET['ac'])){
			$task = $_GET['ac'];
		}
		switch ($task) {
			case "xdm":
				if(isset($_GET['id'])){
					$controller->front_danhmuc();
				}
				break;

			case "se":
				$controller->front_search();
				break;
			case "xct":
				if(isset($_GET['id'])){
					$controller->front_chitietsp();
				}
				break;
			
			default:
				$controller->front_index();
				break;
		}
	}

?>