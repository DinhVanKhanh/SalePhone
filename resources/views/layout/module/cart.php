
<?php
		if(isset($_SESSION['cart'])){
			if($_SESSION['cart'] == NULL){
				echo 'Không có sản phẩm!!!';
			}
			else{
			

		// if(isset($_SESSION['cart'])){
		// 	if($_SESSION['cart'] == NULL){
		// 		echo 'khong co sp!!';
		// 	}else{
			
			
			
		// 	foreach ($_SESSION['cart'] as $key => $value) {
		// 		$idd = $key;
				
		// 		$sql = "select * from chitietsp where id = '$idd'";
		// 		$run = mysqli_query($conn,$sql);
		// 		while($dong = mysqli_fetch_assoc($run)){
		// 		}
  //    		}
		// }
?>
@extends()
<form action="?view=watch&on=form&in=checkout" method="post">
<section id="cart-page"> <!-- cart-->
    <div class="container">
        <!-- ========================================= CONTENT ========================================-->
        	<?php 
            var_dump($_SESSION['cart']);
        	foreach ($_SESSION['cart'] as $key => $value) {
				$idd = $key;
				$sql = "select * from chitietsp where id = '$idd'";
		 		$run = $query->query($sql); // $query dc tạo trong index
		 		
		 		while ($dong = mysqli_fetch_assoc($run)) {

		 		    $tongtien = $dong['gia'];
        	?>
        <div class="col-xs-12 col-md-9 items-holder no-margin">
			
            <div class="row no-margin cart-item">

                <div class="col-xs-12 col-sm-2 no-margins">
                   <!--  <a href="#" class="thumb-holder"> -->
                	<img class="lazy" width="100px" height="100px" alt="" src="uploads/<?= $dong['hinhanh']?>"/>
                    <!-- </a> -->
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="title">
                        <a href="#"><?= $dong['mota']?> </a>
                    </div>
                    <!-- <div class="brand">sony</div> -->
                </div> 
 
                <div class="col-xs-12 col-sm-3 no-margin">
                    <div class="quantity">
                        <div class="le-quantity">
                            <a class="minus" href="#reduce" onclick="get_data($(this))" data-type="tru"></a>
                            <input type="text" class="num quant" id="num"  name="num[<?= $dong['id']?>]" value="<?= $value?>" data-id="<?= $dong['id']?>" onchange="get_data($(this))" readonly="readonly">
                            <a class="plus" href="#add" onclick="get_data($(this))" data-type='cong'></a>
                            <!--  $(this) dùng để lấy giá trị động của value              -->            
                        </div>
                    </div>
                </div>
                
               <!-- class="quant" name="quantity" readonly="readonly" type="text" value="1" -->
                <div class="col-xs-4 col-sm-2 no-margin">
                    <div class="price">
                        <input type="text" style="border: 0" class="gia"
                        name="gia[<?= $dong['id']?>]" data-price="<?= $dong['gia']?>" data-gia="<?= $dong['gia']*$value?>" value='<?= number_format($dong['gia']*$value) . " VNĐ"?>' readonly>
                    </div>
                   
                </div>
                <div class="col-xs-5 col-sm-2 no-margin" style="margin-top: -10px">
                 	<a class="close-btn" href="?view=watch&on=form&in=cart&xoa_id=<?php echo $idd?>"></a>
             	</div>

            </div><!-- /.cart-item -->

        </div>

        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->
<?php 
}}
?>
       
        <div class="col-xs-12 col-md-3 no-margin sidebar">
            <div class="widget cart-summary">
                <h1 class="border">Giỏ hàng của bạn</h1>
                <div class="body">
                    <!-- <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div class="value pull-right">$8434.00</div>
                        </li>
                        <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul> -->
                    <ul id="total-price" class="tabled-data inverse-bold no-border" style="">
                        <li>
                            <span>Tổng cộng:</span>
                            <input class="total" name="total" style="border: 0; font-weight: bold;" readonly>
                        </li>
                    </ul>
                    <div class="buttons-holder" style="display: inline-block;">
                        <button class="le-button big">Thanh toán</button>
                        <a class="simple-link block" href="?view=views&on=telephone&in=dienthoai" >Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div><!-- /.widget -->
            
            <!-- <div id="cupon-widget" class="widget">
                <h1 class="border">use coupon</h1>
                <div class="body">
                    <form>
                        <div class="inline-input">
                            <input data-placeholder="enter coupon code" type="text" />
                            <button class="le-button" tyspe="submit">Apply</button>
                        </div>
                    </form>
                </div>
            </div> --><!-- /.widget -->
        </div><!-- /.sidebar -->        
<?php }}
?>
        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>
</form>

<script>
    // $('.cart-item .click-the-a').click(function(){

    //     a= $(this).find('#num').val();
    //     b = $(this).find('.price input').val();

    //     c = parseInt(a)*parseInt(b);
    //     $(this).find('.price input').val(c);
    // });
    // qty = $('.num').val();
    // console.log(qty);
    // sessionStorage.ten = qty;
    // qty_session = sessionStorage.ten;
    // document.getElementById('aa').innerHTML = qty_session;
     sum();
   function get_data(obj){ //obj giống như $(this)
    setTimeout(function(){
        total = 0;
        parent  = obj.parents('.cart-item'); // thằng cha có clas cart-item
        console.log('parent',parent);
        qty = obj.siblings('input.num').val(); //Tìm thằng class num gán giá trị của từng value
        //qty = document.getElementById('num').value;
        //console.log(qty);
        tt =obj.siblings('input.num');
        //tt = document.getElementById('num');
        // if(obj.hasClass('plus'))
        //     tt.value = parseInt(tt.value) + 1;
        //get_id = tt.getAttribute('data-id');
        get_id =  tt.data('id');
        //console.log(get_id);
        gia = parent.find('input.gia'); //tìm thằng con có input và có class gia
        one_price = gia.data('price'); // giá của 1 sản phẩm
        all_price = qty * one_price; // giá trị của 1 sản phẩm có nhiều số lượng
        gia.val(new Intl.NumberFormat().format(all_price)+ " VNĐ");
        gia.data('gia',all_price);// cập nhật giá hiện tại
        sum();
        //sessionStorage.ten = qty;
        //$qty_session = sessionStorage.ten;
        //console.log(document.getElementById('num').value);

        $.ajax({
            url: 'module/data.php',
            type: 'POST',
            dataType: 'json',
            data: {num: qty,
                   id: get_id},
            })
            .done(function(data) {
               //tt.val(data);
               console.log(data);
            }); 

        
    },100);

       // parent = $('.plus').parents('.cart-item');
        //qty = parent.find('input.num');
        //alert(qty);
        //qty.change(function() {
            //alert('11');
           
        //});


        // ------------------   
        // $(".num").each(function() { 
        //      $(this).bind('mouseup keyup', function () {
        //         $(".gia").each(function() {   
        //             var price = $(this).data('price');
        //             var num = $(".num").val();  
        //             var sum = parseInt(num) * parseInt(price);
        //             $(this).val(new Intl.NumberFormat().format(sum)+ " VNĐ");
                     
        //         });
        //     });
        //  });
   }
   function sum(){
         total = 0;
        $('.gia').each(function() {
            total += $(this).data('gia'); //data('gia') hay data('price') là giá lúc đầu
            console.log(total);
        });
         $('.total').val(new Intl.NumberFormat().format(total)+ " VNĐ");
        // $('num').each(function() {
        //     tol = $(this).val();
        //     console.log(tol); 
        // });

        // $(".num").each(function() {
        //     //console.log(num = $(this).val())    ; 
        //     //"$_SESSION['tt']['$_GET[id]']" = num;
        // });
        //console.log($('.num').val());

   }

   //giam so luong
   // $('.minus').click(function() {
   //          // parent = $(this).parents('.');
   //          $num = $(this).siblings('.num').val();
   //          console.log($num);
   //          if($num > 1){
   //              $num = parseInt($num) - 1;
   //              $(this).siblings('.num').val($num);
   //          }
           
   //          // $num.val($num); 
   //      });
</script>
