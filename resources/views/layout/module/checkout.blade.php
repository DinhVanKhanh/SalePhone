@extends('layout/index')
@section('body')

<form action="Submit_Checkout" method="post" id="form_check" class="form_check" name="form_check" onsubmit="checkerror()">{{ csrf_field() }}
<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            
            <div class="billing-address">
                <h2 class="border h1">Thông tin khách hàng</h2>
                <!-- <form> -->
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-12">
                            <label>Họ tên*</label>
                            <input class="le-input" name="fullname" id="fullname" title="nhập Họ tên" required="true">
                        </div>
                        <!-- <div class="col-xs-12 col-sm-6">
                            <label>last name*</label>
                            <input class="le-input" >
                        </div> -->
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12">
                            <label>Email*</label>
                            <input class="le-input" name="email" id="email" required="true">
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-12">
                            <label>Địa chỉ*</label>
                            <input class="le-input" name="address" id="address" required="true">
                        </div>
                       <!--  <div class="col-xs-12 col-sm-6">
                            <label>&nbsp;</label>
                            <input class="le-input" data-placeholder="town" >
                        </div> -->
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-12">
                            <label>Điện thoại*</label>
                            <input class="le-input" name="phone" id="phone" >
                        </div>
 
                    </div><!-- /.field-row -->

                    <!-- <div class="row field-row">
                        <div id="create-account" class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">Create Account?</a> - you will receive email with temporary generated password after login you need to change it.
                        </div>
                    </div> --><!-- /.field-row -->

                <!-- </form> -->
            </div><!-- /.billing-address -->


           <!--  <section id="shipping-address">
                <h2 class="border h1">shipping address</h2>
                <form>
                    <div class="row field-row">
                        <div class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">ship to different address?</a>
                        </div> -->
                    <!-- </div>  --> <!-- /.field-row -->
                <!-- </form> -->
            <!-- </section>   -->   <!-- /#shipping-address -->

			
            <section id="your-order">
                <h2 class="border h1">Sản phẩm bạn chọn</h2>
                <form>
		        	@foreach (Cart::getContent() as $key =>$value) 
                       {{--  // $a = Cart::get($key)->getPriceSum();
                        // $b = Cart::get('price');
                        // var_dump($b);
                        $price_sum = $value['price'] * $value['quantity'];
                        $id = $value['id'];
                        $qty = $value['quantity'];
                        $name_prod = $value['attributes']['mota'];
                        // var_dump($name_prod); --}}
        
                    
                    <div class="row no-margin order-item">
                        <div class="col-xs-2 col-sm-2 no-margin">
                            <input type="text" name="sl[]" style="width: 40px;border: 0" class="qty" value="{{$value['quantity']}}" readonly>
                       
                        </div>

                        <div class="col-xs-3 col-sm-3 " style="margin-top: 15px">

                            
                            <div class="title"><a>{{$value['attributes']['mota']}} </a></div>
                           <!--  <div class="brand">sony</div> -->
                      
                        </div>
							
						<div class="col-xs-3 col-sm-3" >
                            
			                        <img class="lazy" width="80px" height="80px" alt="" src="uploads/{{$value['attributes']['hinhanh']}}" />	                   
			                
                        </div>

                        <div class="col-xs-4 col-sm-4 no-margin">
                            <div class="price">{{number_format($value['price'] * $value['quantity'])}} VNĐ</div>
                            <input type="text" style="display: none;" value="" name="price1">
                        </div>
                    </div><!-- /.order-item -->

            @endforeach 
                </form>
            <!--  }} --> <!-- đóng php -->
            </section><!-- /#your-order -->

            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <!-- <div id="subtotal-holder">
                        <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>cart subtotal</label>
                                <div class="value ">$8434.00</div>
                            </li>
                            <li>
                                <label>shipping</label>
                                <div class="value">
                                    <div class="radio-group">
                                        <input class="le-radio" type="radio" name="group1" value="free"> <div class="radio-label bold">free shipping</div><br>
                                        <input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">local delivery<br><span class="bold">$15</span></div>
                                    </div>
                                </div>
                            </li>
                        </ul> /.tabled-data -->
                        
                        <ul id="total-field" class="tabled-data inverse-bold" style="float: right;">
                            <li>

                                <label>Tổng tiền</label>
                                <div class="value">{{number_format(Cart::getSubTotal())}} VNĐ</div>
                           
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->

            
            <div class="place-order-button">
                <button class="le-button big" name="order">Đặt hàng</button>
            </div><!-- /.place-order-button -->

        </div><!-- /.col -->
    </div><!-- /.container -->    
</section><!-- /#checkout-page -->
</form>
<!-- Bắt lỗi form -->
  <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>   --> 
    
{{-- <script type="text/javascript">
    $(document).ready(function(e) {  //sự dụng jquery bắt lỗi ko cần reload lại trang
                form_validate = $('#form_check').validate({
                    rules:{
                        fullname: "required",   
                        email: "required",
                        address: "required",
                        phone:{
                            required: true,
                            minlength: 8,
                            digits: true
                        }
                    },
                    messages:{
                        fullname: "<span class='errorvalue' style='color:red;'>*Quý khách hãy nhập họ tên</span>",
                        email: "<span class='errorvalue' style='color:red;'>*Quý khách hãy email</span>",
                        address: "<span class='errorvalue' style='color:red;'>*Quý khách hãy địa chỉ</span>",
                        phone:{
                            required:"<span class='errorvalue' style='color:red;'>*Quý khách hãy Sđt</span>",
                            minlength:"<span class='errorvalue' style='color:red;'>*Số điện thoại không có thực!!!</span>",
                            digits:"<span class='errorvalue' style='color:red;'>*Số điện thoại phải là sô!!!</span>"
                        }
                    }
                });
            });
            
            function checkerror(){
                if(form_validate.form())
                    alert('Bạn đã mua thành công!!! \nThời gian giao hàng trong 7 ngày');
                    window.location('/index.php');
                }

</script> --}}
@endsection