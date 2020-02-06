<?php
	foreach($query as $key){
		
		$i = $key->hinhanh;
		$u = substr($key->hinhanh,0,6);
		$t = $key->tenloai; // ten của thương hiệu vd: Iphone,Samsung,...
		$name = $key->mota;
	}
	//echo substr($dong['hinhanh'],0,6);
?>


 <p class="script">
 	<?php if($t == 'Iphone'){
 			 echo 'Apple  là một tập đoàn công nghệ máy tính của Mỹ có trụ sở chính đặt tại Cupertino, California. Apple được thành lập ngày 1 tháng 4 năm 1976 dưới tên Apple Computer, Inc., và đổi tên thành Apple Inc. vào đầu năm 2007. Với lượng sản phẩm bán ra toàn cầu hàng năm là 13,9 tỷ đô la Mỹ (2005), 74 triệu thiết bị iPhone được bán ra chỉ trong một quý 4 năm 2014 và có hơn 98.000 nhân viên ở nhiều quốc gia, sản phẩm là máy tính cá nhân, phần mềm, phần cứng, thiết bị nghe nhạc và nhiều thiết bị đa phương tiện khác. Sản phẩm nổi tiếng nhất là máy tính Apple Macintosh, máy nghe nhạc iPod (2001), chương trình nghe nhạc iTunes, điện thoại iPhone (2007), máy tính bảng iPad (2010) và đồng hồ thông minh Apple Watch (2014-2015) hoạt động trên nhiều quốc gia trên thế giới.';
 		  }
 		  else if($t == 'Samsung'){
 		  	 echo 'Samsung được sáng lập bởi Lee Byung-chul năm 1938, được khởi đầu là một công ty buôn bán nhỏ. 3 thập kỉ sau, tập đoàn Samsung đa dạng hóa các ngành nghề bao gồm chế biến thực phẩm, dệt may, bảo hiểm, chứng khoán và bán lẻ. Samsung tham gia vào lĩnh vực công nghiệp điện tử vào cuối thập kỉ 60, xây dựng và công nghiệp đóng tàu vào giữa thập kỉ 70';
 		  }
 		  else if($t =='Nokia'){
 		  	echo'Nokia là một tập đoàn đa quốc gia có trụ sở tại Keilaniemi, Espoo, một thành phố láng giềng của thủ đô Helsinki, Phần Lan. Nokia tập trung vào các sản phẩm viễn thông không dây và cố định, với 129.746 nhân viên làm việc ở 120 quốc gia, bán sản phẩm ở hơn 150 quốc gia trên toàn cầu và đạt doanh số 41 tỷ euro với lợi tức 1,2 tỷ năm 2009';
 		  }
 		  else if($t == 'Huawei'){
 		  	echo 'Huawei là một tập đoàn đa quốc gia về thiết bị mạng và viễn thông, có trụ sở chính tại Thâm Quyến, Quảng Đông, Trung Quốc. Huawei là nhà cung cấp thiết bị viễn thông lớn nhất thế giới.Năm 2018, Huawei trở thành 1 trong 72 tập đoàn Fortune Global 500 trên tạp chí Fortune. Từ năm 2018, Huawei là nhà sản xuất điện thoại thông minh lớn thứ hai trên thế giới.';
 		  }
 		  else if($t == 'Xiaomi'){
 		  	echo 'Xiaomi là một công ty tư nhân sản xuất hàng điện tử Trung Quốc có trụ sở tại Bắc Kinh. Xiaomi là nhà sản xuất điện thoại thông minh lớn thứ 4 thế giới; trong năm 2015 Xiaomi đã bán 70,8 triệu đơn vị và chiếm gần 5% thị trường điện thoại thông minh thế giới. Xiaomi thiết kế, phát triển, và bán điện thoại thông minh, ứng dụng di động';
 		  }
 	?>
</p>
