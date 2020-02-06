 <?php if(isset($_GET['view'])){
	  		$tem = 	$_GET['view'];
			if($tem == 'views')
				include('telephone/trangchu.php');
		 	if(isset($_GET['on'])){
				$temp = $_GET['on'];
				if($temp == 'telephone')
					$dem = 'telephone/';
				else if($temp == 'form')
					$dem = 'module/';
				else if($temp == 'product')
					$dem = 'productsdetail/';
			}

			if(isset($_GET['in'])){
				$temp2 = $_GET['in'];
				if($temp2 == 'search')
					include($dem. 'search.php');
				else if($temp2 == 'cart')
					include($dem. 'cart.php');
				else if($temp2 == 'checkout')
					include($dem. 'checkout.php');
				else if($temp2 == 'detail')
					include($dem. 'product.php');
				else if($temp2 == 'order')
					include($dem. 'order.php');
			}

			if(isset($_GET['id'])){
				$temp1 = $_GET['id'];
				if($temp1 == 'Iphone')
					include($dem. 'Iphone.php');
				else if($temp1 == 'Samsung')
					include($dem. 'Samsung.php');
				else if($temp1 == 'Nokia')
					include($dem. 'Nokia.php');
				else if($temp1 == 'Huawei')
					include($dem. 'Huawei.php');
				else if($temp1 == 'Xiaomi')
					include($dem. 'Xiaomi.php');
			}			
	 	 }

	 	 else if(isset($_GET['test'])){
				if($_GET['test']== 'demo')
					include('test.php');
			}


	 	 else{
	 	 	include('telephone/trangchu.php');

	 	 }	 
  ?>