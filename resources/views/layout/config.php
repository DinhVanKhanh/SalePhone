<?php
	/*define('tenmaychu','localhost');
	define('tentaikhoan','root');
	define('pass','');
	define('csdl','webbanhangcongnghe');*/
	include('DBconn.php');
	 class config{
		private $tenmaychu;
		private $tentaikhoan;
		private $pass;
		private $csdl;
		public $conn;
		// public $conn;

		public function config(){
			 $data = new DBconn();
			 $this->tenmaychu= $data->getTenmaychu();
			 $this->tentaikhoan=$data->getTentaikhoan();
			 $this->pass=$data->getpass();
			 $this->csdl=$data->getDB();
			 // $this->conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
			 // mysqli_select_db($conn, $csdl); 
		}

		public function Connect()
		{
			if($this->conn == null){
				$this->conn = mysqli_connect($this->tenmaychu,$this->tentaikhoan,$this->pass,$this->csdl);
				mysqli_select_db($this->conn,$this->csdl);
				mysqli_set_charset($this->conn, "utf8");
			}
		}

		public function DisConnect()
		{
			if($this->conn != null){
				mysqli_close($this->conn);
				$this->conn =null;
			}
		}

		public function Query($query)
		{
			if($this->conn == null){
				$this->Connect();
				$query = mysqli_query($this->conn,$query);
				$this->DisConnect();
				return $query;
			}
		}
	}

 ?>
