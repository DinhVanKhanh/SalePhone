<?php

	if(isset($_POST['search']))
	{
		$search = $_POST['txtSearch'];
		$sql_search = "select * from chitietsp WHERE mota LIKE '%$search%' ";//LIKE là giống tên còn %ten% là giống 1 phần cũng dc
		$run_search = $query->Query($sql_search); //$query dc khai báo trong index
	}
?>			
<!--show product -->
<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
          <!--   <ul class="nav nav-tabs" >
                <li class="active"><a href="#featured" data-toggle="tab">featured</a></li>
                <li><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
                <li><a href="#top-sales" data-toggle="tab">top sales</a></li>
            </ul> -->

            <!-- Tab panes -->
             <?php if($count= mysqli_num_rows($run_search) == 0)
							{
								echo 'Không tìm thấy tên sp!!!';
								}else{
									while($dong_search = mysqli_fetch_array($run_search)){ ?>
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">   
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">

                                <div class="image">
                                    <img alt="" src="assets/images/blank.gif" data-echo="uploads/<?php echo $dong_search['hinhanh']?>" width='220' height='220'" />
                                </div>
                                <div class="body" style="min-height: 0 !important">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html"><?php echo $dong_search['mota']?></a>
                                    </div>
                                    <!-- <div class="brand">sony</div> -->
                                </div>
                                <div class="prices">
                                    <div class="price-prev"></div>
                                    <div class="price-current pull-right"><?= number_format($dong_search['gia'])." VNĐ"?></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="?view=detail&on=product&in=detail&id=<?= $dong_search['id']?>" class="le-button">Xem thông tin</a>
                                    </div>
                                    <!-- <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
                    <!-- <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div>  -->
            </div>     
             <?php }
				}?>
        </div>
    </div>
    <!-- ------------------------------ -->
</div>