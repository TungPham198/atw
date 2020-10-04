<?php 
	
	class Database
	{
		public $link;

		function Database(){
			$this->link = mysqli_connect("18.188.145.180","root","tung","id14885923_atw") or die("không kết nối tới csdl");
			mysqli_set_charset($this->link,"utf8");
		}

		function getData($table){
			$sql = "select * from {$table} order by id desc";
			$result = mysqli_query($this->link,$sql) or die("tớ đang bảo trì hệ thống nha");
// $sql = "select * from $table";
// $result = mysqli_query($this->link,$sql);
			$data = array();
			while($row = $result->fetch_assoc()){
				array_push($data, $row);
			}
			return $data;
		}

		function getDataById($table,$id){
			$sql = "select * from {$table} where id = {$id} ";
			$result = mysqli_query($this->link,$sql) or die("tớ đang bảo trì hệ thống nha");
// $result = mysqli_query($this->link,$sql);
			return $result->fetch_assoc();
		}

		function queryData($sql){
			return mysqli_query($this->link,$sql);
		}

		function getDataSpById($id){
			$sql = "select * from tb_sanpham where danhmuc_id = {$id}";
			$result = mysqli_query($this->link,$sql) or die("tớ đang bảo trì hệ thống nha");
// $result = mysqli_query($this->link,$sql);
			$data = array();
			while($row = $result->fetch_assoc()){
				array_push($data, $row);
			}
			return $data;
		}

		function querySql($sql){
			$result = mysqli_query($this->link,$sql) or die("tớ đang bảo trì hệ thống nha");
// $result = mysqli_query($this->link,$sql);
			$data = array();
			while($row = $result->fetch_assoc()){
				array_push($data, $row);
			}
			return $data;
		}
	}
	

?>