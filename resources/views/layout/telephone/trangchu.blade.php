<?php
    
    //$sql = "select * from chitietsp limit 1";
    //$run=$query->Query($sql); //Query dc gọi trong index
?>
@extends('layout/index')
@section('body')                    
<style type="text/css">
    .slide-top img{
        width: 100%;
        height: 300px;
    }
    .nut-slide{
        position: absolute;
        top:125px;
        z-index: 99;
        width: 30px;
        height: 30px;
        border: none;
        background: rgba(81,144,255,0.5);
        border-radius: 50%;
    }
    .ketiep{
        right: 25px;
    }
    .quaylai{
        left: 25px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <button class="nut-slide quaylai"> <i class="fas fa-chevron-left"></i></button>
            <button class="nut-slide ketiep"><i class="fas fa-chevron-right"></i></button>  
            <div class="slide-top">
                <img src="uploads/img1.jpg" alt="">
                <img src="uploads/img5.jpg" alt="">
                <img src="uploads/img6.jpg" alt="">       
            </div>
        </div>
        <div class="col-md-4">
             <img src="uploads/img2.jpg" alt="" style="height: 150px">
             <img src="uploads/img4.jpg" alt="" style="height: 150px">
        </div>
    </div>
</div>
    
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
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder" style="min-height: 500px">
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="image">
                                    <img alt="" width="220px" height="220px" src="uploads/" data-echo="uploads/"/>
                                </div>
                                <div class="body" style="min-height: 0 !important">
                                    <div class="label-discount green">-10% sale</div>
                                    <div class="title">
                                        <a href="thongtin/{}"></a>
                                    </div>
                                    <!-- <div class="brand">sony</div> -->
                                </div>
                                <div class="prices">
                                    <div class="price-prev">14,000,000 VNĐ</div>
                                    <div class="price-current pull-right"></div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="thongtin/{}" class="le-button">Xem thông tin</a>
                                    </div>
                                    
                                    <!-- <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item" >
                                <div class="ribbon blue"><span>new!</span></div> 
                                <div class="image">
                                    <img alt="" width="220px" height="220px" src="uploads/" data-echo="uploads/" />
                                </div>
                                <div class="body" style="min-height: 0 !important">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="thongtin/{}"></a>
                                    </div>
                                    <!-- <div class="brand">nokia</div> -->
                                </div>
                                <div class="prices">
                                    <div class="price-prev">35,000,000 VNĐ</div>
                                    <div class="price-current pull-right"></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="thongtin/{}" class="le-button">Xem thông tin</a>
                                    </div>
                                   <!--  <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">

                                <div class="image">
                                    <img alt="" width="220px" height="220px" src="uploads/" data-echo="uploads/" />
                                </div>
                                <div class="body" style="min-height: 0 !important">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="thongtin/{}"></a>
                                    </div>
                                    <!-- <div class="brand">sony</div> -->
                                </div>
                                <div class="prices">
                                    <div class="price-prev">16,000,000 VNĐ</div>
                                    <div class="price-current pull-right"></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="thongtin/{}" class="le-button">Xem thông tin</a>
                                    </div>
                                    <!-- <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="ribbon green"><span>bestseller</span></div> 
                                <div class="image">
                                    <img alt="" width="220px" height="220px" src="uploads/" data-echo="uploads/" />
                                </div>
                                <div class="body" style="min-height: 0 !important">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="thongtin/{}">
                                        </a>
                                    </div>
                                    <!-- <div class="brand">acer</div> -->
                                </div>
                                <div class="prices">
                                    <div class="price-prev">25,000,000 VNĐ</div>
                                    <div class="price-current pull-right"></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="thongtin/{}" class="le-button">Xem thông tin</a>
                                    </div>
                                   <!--  <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div> -->
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
                <div class="tab-pane" id="new-arrivals">
                    <div class="product-grid-holder">
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div> 
                                <div class="image">
                                    <img alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/product-02.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="image">
                                    <img alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/product-01.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount green">-50% sale</div>
                                    <div class="title">
                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="ribbon green"><span>bestseller</span></div> 
                                <div class="image">
                                    <img alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/product-04.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">Netbook Acer TravelMate 
                                            B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">

                                <div class="image">
                                    <img alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/product-03.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                        <a class="btn-add-to-compare" href="#">compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> 

                </div>
            </div>
               <?php 
             ?>
        </div>
    </div>
    <!-- ----------------------------- -->
</div>
<script type="text/javascript">
    
$('.slide-top').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots : true,
  prevArrow: '.quaylai',
  nextArrow: '.ketiep',
});
</script>
@endsection