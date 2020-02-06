 <?php 
 	foreach ($query as $key){
 		$i = $key->hinhanh;
		$t = $key->tenloai;
		$name = $key->mota;
 	}
 ?>

<ul class="tabled-data">
                        <li>
                            <label>Màn hình</label>
                            <div class="value">
                            	<?php //echo substr($dong['hinhanh'],0,8) có thể dùng hàm substr
								if($t == 'Iphone' || $t == 'Samsung' || $t =='Xiaomi'){
									if($i == 'iphonex.jpg' ||  $i == 's9-plus.jpg' || $i == 'iphone-xs.jpg' || $t == 'Samsung'
										|| $i =='Xiaomi-Mi8.jpg' || $i == 'xiaomi-mi8-ee.jpg')
										{echo 'Super Amoled';}		
								
									else 
										echo 'LCD';
								}
								else 
										echo 'LCD';				
								?>
                            </div>
                        </li>
                        <li>
                            <label>Hệ điều hành</label>
                            <div class="value">
                            	<?php if($t == 'Iphone'){echo 'IOS';}
									else echo 'Android'?>
                            </div>
                        </li>
                        <li>
                            <label>Camera sau</label>
                            <div class="value">
                            	<?php if($t == 'Iphone' || $t =='Samsung'){
									if($i == 'iphone-xr.jpg' || $i == 'iphone-7.jpg' || $i == 'iphone8.jpg'
										|| $i == 's8.jpg' || $i =='s9.jpg')
										{echo '1 Camera 12MP';}
									else 
										{echo '2 Camera 12MP';}
								  } 
								  //nokia
								  else if($t == 'Nokia'){
									if($i == 'nokia8.jpg')
										{echo '2 Camera 12MP';}
									else if($i == 'nokia-x6.jpg')
										{echo '12MP + 5MP';}
								  }
								  //huawei
								  else if($t == 'Huawei'){
									if($i == 'huawei-p20-pro.jpg')
										{echo '3 Camera: 40 MP, 20 MP và 8 MP';}
									else if($i == 'mate10-pro.jpg')
										{echo '2 Camera: 20 MP và 12 MP';}
									else if($i == 'mate20-pro.jpg')
										{echo '3 Camera: 40 MP và 20 MP và 8MP';}
								  }
								  //xiaomi
								  else if($t == 'Xiaomi'){	
										{echo '2 Camera 12MP';}
								  }
						?>

                            </div>
                        </li>
                        <li>
                            <label>Camera trước</label>
                            <div class="value">
                            	<?php if($t== 'Samsung'){echo ' 8MP';}
								  else if($t== 'Iphone'){echo '7MP';}
								  else if($t== 'Nokia'){echo '16MP';}
								  else if($t == 'Huawei'){
									if($i == 'huawei-p20-pro.jpg')
										{echo '24 MP';}
									else if($i == 'mate10-pro.jpg')
										{echo '8MP';}
									else if($i == 'mate20-pro.jpg')
										{echo '12MP';}
								  }
								  // xiaomi
								  else if($t == 'Xiaomi'){
									if($i == 'Xiaomi-Mi8.jpg' || $i == 'xiaomi-mi8-ee.jpg')
										{echo '20MP';}
									else if($i == 'mimix-2s.jpg')
										{echo '5MP';}
								  }
								  else{echo "12MP";}
									  
								?>

                            </div>
                        </li>
                        <li>
                            <label>CPU</label>
                            <div class="value">
                            	<?php if($t =='Iphone'){
									if($i == 'iphonex.jpg' || $i == 'iphone8.jpg' ||  $i == 'iphone-8.jpg'){
										echo ' A11 Bionic';}
									else if($i == 'iphone-xs.jpg' || $i =='iphone-xr.jpg')
										echo 'A12 Bionic';
									else if($i == 'iphone-7.jpg' || $i =='iphone-7-plus.jpg')
										echo 'A10 Fusion';
									else
										echo 'A9';
										}
									// samsung
									else if($t =='Samsung'){
										if($i == 'note9.jpg' || $i == 's9.jpg' ||  $i == 's9-plus.jpg'){
											echo ' Snapdragon 845/ Exynos 9810';}
										else if($i == 's8.jpg' || $i =='note8.jpg')
											echo 'Snapdragon 835/ Exynos 8895';
										}
									 // nokia
									else if($t =='Nokia'){
										if($i == 'nokia8.jpg'){
											echo ' Snapdragon 835';}
										else if($i == 'nokia-x6.jpg'){
											echo 'Snapdragon 636';}
										}
								   // huawei
									else if($t == 'Huawei'){
									if($i == 'huawei-p20-pro.jpg')
										{echo 'Kirin 970';}
									else if($i == 'mate10-pro.jpg')
										{echo 'Kirin 960';}
									else if($i == 'mate20-pro.jpg')
										{echo 'Kirin 980';}
								  }
								   // xiaomi
								  else if($t == 'Xiaomi'){
										{echo 'Snapdragon 845';}
								  }
								?>

                            </div>
                        </li>
                        <li>
                            <label>RAM</label>
                            <div class="value">
                            	<?php 
								if($t =='Iphone'){
									if($i == 'iphone-xs.jpg'){echo '4GB';}
									else if ($i == 'iphone-8 Plus.jpg' || ($i == 'iphonex.jpg'))
										echo '3GB';
									else 
										echo '2GB';
										
								}
								// samsung
								else if($t =='Samsung'){
										if($i == 'note9.jpg' || $i == 's9.jpg' ||  $i == 's9-plus.jpg'){
											echo ' 6GB';}
										else if($i == 's8.jpg' || $i =='note8.jpg')
											echo '4GB';
										}
								//nokia
								else if($t =='Nokia'){
											{echo '4GB/6GB';}
										}
								//huawei
								else if($t == 'Huawei'){
									if($i == 'huawei-p20-pro.jpg')
										{echo '6GB';}
									else if($i == 'mate10-pro.jpg')
										{echo '6GB';}
									else if($i == 'mate20-pro.jpg')
										{echo '8GB';}
								  }
								 // xiaomi
								  else if($t == 'Xiaomi'){
										{echo '6GB';}			
								  }
							?>

                            </div>
                        </li>
                        <li>
                            <label>Bộ nhớ trong</label>
                            <div class="value">64GB</div>
                        </li>
                        <li>
                            <label>SIM</label>
                            <div class="value">
                            	<?php if($t == 'Iphone'){
									if($i == 'iphone-xs.jpg' || $i == 'iphone-xr.jpg'){
										echo '1 SIM (Mã Hong Kong hỗ trợ 2SIM)';
										}
									else
										{echo '1 SIM';}
									}
								else{echo '2 SIM/ 1 SIM + 1 SD';}
								?>

                            </div>
                        </li>
                        <li>
                            <label>Pin</label>
                            <div class="value">
                            	<?php 
								if($t == 'Iphone'){
									if($name == 'Iphone Xs')
										{echo ' 2659 mAh';}
									else if($name == 'Iphone Xs Max')
										{echo '2716 mAh';}
									else if($name == 'Iphone X')
										{echo ' 3179 mAh';}	
									else if($name == 'Iphone 8 Plus')
										{echo '	2675 mAh';}
									else if($name == 'Iphone 8')
										{echo ' 1821 mAh';}
									else if($name == 'Iphone 7 Plus')
										{echo '	2900 mAh';}
									else if($name == 'Iphone 7')
										{echo '	1960 mAh';}
									else if($name == 'Iphone 6s Plus')
										{echo '2750 mAh';}			
								}
								// samsung
								else if($t =='Samsung'){
										if($name == 'Samsung Note 9')
											{echo ' 4000 mAh';}
										else if($name == 'Samsung S9 Plus' || $name == 'Samsung S8 Plus')
											{echo '3500 mAh';}
										else if($name == 'Samsung S9' || $name == 'Samsung S8')
											{echo ' 3000 mAh';}	
										else if($name == 'Samsung Note 8')
											{echo '	3300 mAh';}
										}
								// nokia
								else if($t =='Nokia'){
										if($i == 'nokia8.jpg'){
											echo '3090  mAh';}
										else if($i == 'nokia-x6.jpg'){
											echo '3060 mAh';}
										}
								//huawei
								else if($t == 'Huawei'){
									if($i == 'huawei-p20-pro.jpg')
										{echo '4000 mAh';}
									else if($i == 'mate10-pro.jpg')
										{echo '3750mAh';}
									else if($i == 'mate20-pro.jpg')
										{echo '4200mAh';}
								  }
								   // xiaomi
								 else if($t == 'Xiaomi'){
									if($i == 'Xiaomi-Mi8.jpg')
										{echo '3400mAh';}
									else if($i == 'xiaomi-mi8-ee.jpg')
										{echo '3000mAh';}
									else if($i == 'mimix-2s.jpg')
										{echo '3400mAh';}
								  }
								  
							?>

                            </div>
                        </li>
                    </ul><!-- /.tabled-data -->