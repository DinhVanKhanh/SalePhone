<div class="test">sađấ</div>


<?php
	if(isset($_GET['page'])){
		$page =  $_GET['page'];
	}
	else
		$page = 1;

	// session_start();
	$sql="select * from chitietsp";
    $run=$query->Query($sql); //Query dc gọi trong index
	$i = mysqli_num_rows($run);
	// $_SESSION['num'][$i] +=1;
	
	$num = ($page*4)-4;
	$sql_show= "select * from chitietsp limit $num,4";
	$run1=$query->Query($sql_show);
	// foreach ($a as $key => $value) {
	// 	var_dump($key);
	// }
   	while($dong =  mysqli_fetch_assoc($run1)){
   	echo $dong['mota']. "...";
   }
?>

<nav>	
	<ul class="pagination b">
		<li class="page-item a"><a class="page-link" href="?test=demo&page=1">Previous</a></li>
		<li class="page-item a active"><a class="page-link" href="?test=demo&page=1">1</a></li>
		<?php
		$trang = ceil($i/4);
		for($u = 2; $u <= $trang ;$u++){ ?>
			<li class="page-item a"><a class="page-link" href="#"><?= $u?></a></li>
		<?php }
		?>
		<li class="page-item a"><a class="page-link" href="?test=demo&page=1">Next</a></li>
	</ul>
</nav>

	
		<div class="btn-group">
		<button class="btn btn-outline-success ">55</button>
		<button class="btn btn-outline-success">66</button>
		<button class="btn btn-outline-success">66</button>
		</div>
<div class="container">
<div class="row">

	<div class="col-md-1">
		<img class="" src="uploads/img1.jpg" style="width: 50px; height: 50px" >
	</div>
	<div class="col-md-6">
		<div class="list-group">
			<p class="list-group-item list-group-item-action ">sdadáadaádádasdáddád</p>
			<p class="list-group-item " >ádáddadaaadádd</p>
		</div>
	</div>
</div>
<div class="row">

	<div class="col-md-1 col-md-offset-1">
		<img class="" src="uploads/img1.jpg" style="width: 50px; height: 50px" >
	</div>
	<div class="col-md-6">
		<div class="list-group">
			<p class="list-group-item list-group-item-action ">sdadáadaádádasdáddád</p>
			<p class="list-group-item " >ádáddadaaadádd</p>
		</div>
	</div>
</div>
</div>

<!-- ------- -->
<p><button onclick="clickCounter()" type="button">Click me!</button></p>
<div id="result"></div>
<p>Click the button to see the counter increase.</p>
<p>Close the browser tab (or window), and try again, and the counter is reset.</p>

  <div class="d-flex row border">
      <div class="p-4 mr-auto border">Flex Item</div>
      <div class="p-4 border">Flex Item</div>
      <div class="p-4 border">Flex Item</div>
    </div>
<div class="btn btn-danger" id="ABC">Click</div>
<p id="bord" style="width: 200px; height: 200px; border: 1px solid;display: none;">aaaa</p>
<!-- <?php $a = '123a'; var_dump($a);
	  $b = 123; var_dump($b);
	  $c = (string)$b; var_dump($c);
?> -->
<input type="text" class="tt" onchange="hera($(this))" onfocus="hera($(this))"></br>
<div class='btn btn-success' name= 'abc'>ABC</div>
<!-- -------- -->
<div class="parent">
	<div class="show"></div>
	<div class="btn btn-danger" onclick="abc($(this))">Nhấn</div>	
</div>
<pre>
<?php 
	$a = array(["a"=>"1", "b"=>"2", "c"=>"3", "d"=>"3"],
			["a"=>"dm", "b"=>"loz", "c"=>"cat"]);
			
	 $b = '{"name":"khanh","sdt":"1234"}';
	 $c = json_decode($b,true);
	 var_dump($c);
	// foreach ($c as $t) {
	// 	var_dump($c['a']);
	// }
	//var_dump(json_encode($b));
	// foreach ($c as $a) {
	// 	 var_dump($a);
	// 	// foreach ($a[0] as $key =>$value) {
	// 	// 	echo $value;
	// 	// }
	// 	//var_dump($a[1]);	
	// }
	//echo strlen($a);
	// for($i = 0; $i <= 1; $i++){
	// 	var_dump($a[$i]["b"]);	
	// }
?>
</pre>
<!-- -------------- -->
<p class='count_str'></p>
<div class="position border border-danger d-flex justify-content-end" id="AA"  onclick="mouseMOVE(event)" onmousemove="mouseMOVE(event)" style="width: 200px;height: 200px">
	<div class="div border border-success" style="width: 20px; height: 20px">
		<p id ="A" class="d-none">A</p>
	</div>
</div>
<div id ="get_pos"></div>
<div id="bingo"></div>


<script>
	
	function mouseMOVE(obj){
		//alert('aa');
		x = obj.clientX;
		y = obj.clientY;
		if(x > "180" && x < '199' && y > '291' && y < '310'){
			// document.getElementById("A").style.display="block!important";
			//alert("1111");
			document.getElementById("bingo").innerHTML="bingo";
		}
		document.getElementById("get_pos").innerHTML ="x:"+ x+ "-y:"+ y;
	}

	$('#AA').click(function(event) {
		x = event.clientX;
		y = event.clientY;
		//x = event.position();
		$('#get_pos').html("x:"+x+"--y:"+y);
		if(x > "180" && x < '199'){
			// document.getElementById("A").style.display="block!important";
			//alert("1111");
			alert('aaa');
		}
	});
	// -----------------
	ar  = [1,2,3,4,5,6,7];
	string = " hom nay la thu 6 ngay 13";
	arr = {"a":"a","b":"b","c":"c"};
	split = string.split(" ");
	if(split.length >= 5)
		a = split.length - 5;
		
	//console.log(string);
	str = "";
	for(i = 0; i<= split.length - a; i++){ // có 8 từ lấy 5 từ => 8 - 5 = 3
		 str += split[i]+" ";}
	b = str.trimEnd().trimStart();
	console.log(b+="...");

	//console.log(split);
	//substr = 
	//console.log(substr());
	//console.log(ar.push("abc"));
	//a = "Hello";
	//b = 'Hi';
	// html = `<ul>
	// 			<li> ${a}<li>
	// 			<li> ${b}</li>
	// 	    </ul>`;
	//document.querySelector('.show').innerHTML = html;
	// ------------
	function abc(obj){
		parent = obj.parents('.parent');
		child = obj.siblings('.show');
		//child.html('Some text and markup');
		document.querySelector('.show').innerHTML="AA";
		// console.log(child);
		// console.log(parent);
	}

	// ----------------
	$('.a').click(function() {
		b = $(this).parents('.b');
		//console.log(b);
		c = b.find('.a');
		if(c.hasClass('active'))
			c.removeClass('active');
		$(this).addClass('active');
		//$(this).addClass('active');
		// $(this).removeClass('active');
	});

	// ------------
	$('[name="abc"]').click(function() {
		$(this).addClass('text-dark');
	});

	// let name = prompt("Xin chào!!!");
	// alert(name);

	// --------
	function hera(obj){
		//alert('sd');
		//if(hasClass('tt'))
		// obj.style.color = "red";
		obj.css({'color':'red'});
			console.log(obj.val());
	}


	// -----
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
            sessionStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}


// ---------------
// $('#ABC').click(function() {
// 	$('#bord').css({'color':'red'});
// });

$('#ABC').click(function(event) {
	$('#bord').on(
		$('#bord').css({
			color: 'red',
			background: 'green'
		}),
		$('#bord').animate({
			width: '+=300px'
		}),
		$('#bord').show(),
		$(this).hide()
	);
});
</script>


