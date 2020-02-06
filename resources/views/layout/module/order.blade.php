<?php
if(isset($_POST['order'])){
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$sl = $_POST['sl']; //số lượng của sp
	$tongtien; //trong sql nó đã tính  là số lượng * giá nên ko cần làm
	foreach ($_SESSION['cart'] as $key => $value) {
			 $idd = $key;
			 $sql = "select * from chitietsp where id = '$idd'";
			 $run = $query->query($sql); // $query dc tạo trong index
			 while ($dong1 = mysqli_fetch_assoc($run)) {
			 	 $tensp=  $dong1['mota']; //tên sp	
			 	 $gia=$dong1['gia'];
			 	 $num = $sl[$key];
			 	 $sql1 = "insert into quanlykhachhang(tensp,soluong,gia,ten,diachi,email,sdt,tinhtrang) 
			values ('$tensp','$num','$gia','$fullname','$address','$email','$phone','Chưa xử lý')";
				  $query->query($sql1); // $query dc tạo trong index
			 }
	}
	unset($_SESSION['cart']);
}
?>
<meta http-equiv="refresh" content="0;URL='?view=views'" >
