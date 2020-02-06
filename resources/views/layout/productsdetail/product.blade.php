@extends('layout/index')
@section('body')
<div id="single-product">
    <div class="container">
         <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">
        @foreach($query as $key)
        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-rel="prettyphoto">
                    <img class="img-responsive" alt="" src="uploads/{{$key->hinhanh}}" data-echo="uploads/{{$key->hinhanh}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <!-- <div class="single-product-gallery-item" id="slide2">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                    <img class="img-responsive" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/product-gallery-01.jpg" />
                </a>
            </div> --><!-- /.single-product-gallery-item -->

            <!-- <div class="single-product-gallery-item" id="slide3">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                    <img class="img-responsive" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/product-gallery-01.jpg" />
                </a>
            </div> --><!-- /.single-product-gallery-item -->
        </div><!-- /.single-product-slider -->


        <!-- <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                
                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="HTML/assets/images/blank.gif" data-echo="HTML/assets/images/products/gallery-thumb-01.jpg" />
                </a>
            </div>/#owl-single-product-thumbnails

            <div class="nav-holder left hidden-xs">
                <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
            </div>/.nav-holder
            
            <div class="nav-holder right hidden-xs">
                <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
            </div>/.nav-holder

        </div> --> <!--/.gallery-thumbs -->
        
    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        
    <div class="no-margin col-xs-12 col-sm-5 body-holder">
        <div class="body">
        <!-- <div class="star-holder inline"><div class="star" data-score="4"></div></div>
        <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div> -->
        <div class="title" style="font-size: 30px; font-weight: bold;">{{$key->mota}}</div>
        <!-- <div class="brand">sony</div> -->
		<hr/>
        <div class="social-row">
            <span class="st_facebook_hcount"></span>
            <span class="st_twitter_hcount"></span>
            <span class="st_pinterest_hcount"></span>
        </div>

       <!--  <div class="buttons-holder">
            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
            <a class="btn-add-to-compare" href="#">add to compare list</a>
        </div>
 -->
        <!-- <div class="excerpt">
            
        </div> -->
        
        <div class="prices">
            <div class="price-current">{{number_format($key->gia)}} VNĐ</div>
            <!-- <div class="price-prev">$2199.00</div> -->
        </div>

        <div class="qnt-holder">
           <!--  <div class="le-quantity">
                <form>
                    <a class="minus" href="#reduce"></a>
                    <input class="quant" name="quantity" readonly="readonly" type="text" value="1" />
                    <a class="plus" href="#add"></a>
                </form>
            </div> -->
            <a id="addto-cart" href="layout/module/giohang/{{$key->id}}" class="le-button huge">Thêm vào giỏ hàng</a>
        </div><!-- /.qnt-holder -->
        </div><!-- /.body -->
    </div><!-- /.body-holder -->

    <div class="no-margin col-xs-12 col-sm-2 body-holder text-center">
        <span style="font-weight: bold;">Sản phẩm liên quan </span><br><br>
            @foreach($all as $key2 =>$value2)
                @if($key->tenloai == "Iphone" && $value2->tenloai=='Iphone')
                    <a href="layout/productsdetail/{{$value2->id}}">
                        <div>{{$value2->mota}}</div>
                        <div><img class="img-responsive" width="100px" height="100px" style="display: inline-block;" alt="" src="uploads/{{$value2->hinhanh}}" data-echo="uploads/{{$value2->hinhanh}}" /></div>
                        <div>{{number_format($value2->gia)}} VNĐ <br/><br/></div>
                    </a>
                @elseif($key->tenloai == "Samsung" && $value2->tenloai=='Samsung')
                    <a href="layout/productsdetail/{{$value2->id}}">
                        <div>{{$value2->mota}}</div>
                        <div><img class="img-responsive" width="100px" height="100px" style="display: inline-block;" alt="" src="uploads/{{$value2->hinhanh}}" data-echo="uploads/{{$value2->hinhanh}}" /></div>
                        <div>{{number_format($value2->gia)}} VNĐ <br/><br/></div>
                    </a>
                @elseif($key->tenloai == "Huawei" && $value2->tenloai=='Huawei')
                    <a href="layout/productsdetail/{{$value2->id}}">
                        <div>{{$value2->mota}}</div>
                        <div><img class="img-responsive" width="100px" height="100px" style="display: inline-block;" alt="" src="uploads/{{$value2->hinhanh}}" data-echo="uploads/{{$value2->hinhanh}}" /></div>
                        <div>{{number_format($value2->gia)}} VNĐ <br/><br/></div>
                    </a>
                @elseif($key->tenloai == "Nokia" && $value2->tenloai=='Nokia')
                    <a href="layout/productsdetail/{{$value2->id}}">
                        <div>{{$value2->mota}}</div>
                        <div><img class="img-responsive" width="100px" height="100px" style="display: inline-block;" alt="" src="uploads/{{$value2->hinhanh}}" data-echo="uploads/{{$value2->hinhanh}}" /></div>
                        <div>{{number_format($value2->gia)}} VNĐ <br/><br/></div>
                    </a>
                @elseif($key->tenloai == "Xiaomi" && $value2->tenloai=='Xiaomi')
                    <a href="layout/productsdetail/{{$value2->id}}">
                        <div>{{$value2->mota}}</div>
                        <div><img class="img-responsive" width="100px" height="100px" style="display: inline-block;" alt="" src="uploads/{{$value2->hinhanh}}" data-echo="uploads/{{$value2->hinhanh}}" /></div>
                        <div>{{number_format($value2->gia)}} VNĐ <br/><br/></div>
                    </a>
                @endif
            @endforeach
            {{-- {{$key->gia}} --}}
    @endforeach   
    </div><!-- body-holder --> 
    </div><!-- /.container -->
</div><!-- /.single-product -->

<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">
            
            <ul class="nav nav-tabs simple" >
               <!--  <div class="col-xs-12 col-sm-6"> -->
                <li class="des active">
                    <a href="#description" data-toggle="tab">Mô tả</a>

                </li>
                <!-- </div> -->
                <li class="add-inf">
                    <a href="#additional-info" data-toggle="tab">Cấu hình</a>
                </li>
               	
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <!-- <div class="tab-pane active" id="description"> -->
                    @include('layout/productsdetail/descript')
                   

                    <div class="meta-row">
                        <!-- <div class="inline">
                            <label>SKU:</label>
                            <span>54687621</span>
                        </div> --><!-- /.inline -->
<!-- 
                        <span class="seperator">/</span>

                        <div class="inline">
                            <label>categories:</label>
                            <span><a href="#">-50% sale</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">desktop PC</a></span>
                        </div> --><!-- /.inline -->

                       <!--  <span class="seperator">/</span>

                        <div class="inline">
                            <label>tag:</label>
                            <span><a href="#">fast</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">strong</a></span>
                        </div> --><!-- /.inline -->
                    </div><!-- /.meta-row -->
                <!-- </div> --><!-- /.tab-pane #description -->

                <!-- <div class="tab-pane" id="additional-info"> -->
                     @include('layout/productsdetail/param')
                    <div class="meta-row">
                        <!-- <div class="inline">
                            <label>SKU:</label>
                            <span>54687621</span>
                        </div> --><!-- /.inline -->

                     <!--    <span class="seperator">/</span>

                        <div class="inline">
                            <label>categories:</label>
                            <span><a href="#">-50% sale</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">desktop PC</a></span>
                        </div> --><!-- /.inline -->

                        <!-- <span class="seperator">/</span>

                        <div class="inline">
                            <label>tag:</label>
                            <span><a href="#">fast</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">strong</a></span>
                        </div> --><!-- /.inline -->
                    </div><!-- /.meta-row -->
                <!-- </div> --><!-- /.tab-pane #additional-info -->

                <!-- /.tab-pane #reviews -->
             </div><!-- /.tab-content -->

        </div><!-- /.tab-holder -->
    </div><!-- /.container -->
</section><!-- /#single-product-tab -->

<script type="text/javascript">
     $('.tabled-data').hide();
    $('.des').click(function(event) {
        //$('.tab-content').parents.find('#description').hide();
          $('.script').show();
          $('.tabled-data').hide();
         
    });

    $('.add-inf').click(function(event) {
        // $('.tab-content').parents.find('#additional-info');
          $('.tabled-data').show();
          $('.script').hide();
         

    });
</script>

@endsection