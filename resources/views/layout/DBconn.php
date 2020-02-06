<?php
	/*define('tenmaychu','localhost');
	define('tentaikhoan','root');
	define('pass','');
	define('csdl','webbanhangcongnghe');*/
	 class DBconn{
		private $tenmaychu;
		private $tentaikhoan;
		private $pass;
		private $csdl;
		// public $conn;
		
		public function DBconn(){
			 $this->tenmaychu='localhost';
			 $this->tentaikhoan='root';
			 $this->pass='';
			 $this->csdl='webbanhangcongnghe';
			 // $this->conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
			 // mysqli_select_db($conn, $csdl); 
		}

		public function getTenmaychu()
		{
			return $this->tenmaychu;
		}

		public function getTentaikhoan()
		{
			return $this->tentaikhoan;
		}

		public function getpass()
		{
			return $this->pass;
		}

		public function getDB()
		{
			return $this->csdl;
		}
	}

 ?>
