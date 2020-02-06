@extends('layout/index')
@section('body')
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
            @php
                if(!count($chitietsp))
                    echo 'Không tìm thấy sản phẩm!!!';
                else
                    echo 'Có '.count($chitietsp).' sản phẩm';
            @endphp

            @foreach($chitietsp as $key)
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">   
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="uploads/{{$key->hinhanh}}" data-echo="uploads/{{$key->hinhanh}}" width='220' height='220'" />
                                </div>
                                <div class="body" style="min-height: 0 !important">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="layout/productsdetail/{{$key->id}}">{{$key->mota}}</a>
                                    </div>
                                    <!-- <div class="brand">sony</div> -->
                                </div>
                                <div class="prices">
                                    <div class="price-prev"><!-- Giá giảm --></div>
                                    <div class="price-current pull-right">{{number_format($key->gia)." VNĐ"}}</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="layout/productsdetail/{{$key->id}}" class="le-button">Xem thông tin</a>
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
            @endforeach 
        </div>
    </div>
    <!-- ------------------------------ -->
</div>

@endsection