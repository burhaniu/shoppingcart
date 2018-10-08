<?php include ('admin/includes/db.php');
$ID=$_GET['product_id'];
 ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Inno Tech - We care for you</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/php; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" >
 <!-- For Modal -->  
        <link href="modal/css/modal.css" rel="stylesheet" type="text/css" media="screen">
<!-- End For Modal -->
</head>

<script src="modal/js/jquery.js" type="text/javascript"></script>
<script src="modal/js/modal.js" type="text/javascript"></script>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"><img src="images/logo/logo.jpg"></a></h1>
          <h2>We care for you.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li class="selected"><a href="products.php">Products</a></li>
          <li><a href="branches.php">Branches</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="news_event.php">News and Event</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner">
<!--slider-->
			<div id="slidy-container">
				<figure id="slidy">
					<img src="images/slider/posdigital1.jpg" alt="">
					<img src="images/slider/posdigital2.jpg" alt="">
					<img src="images/slider/posdigital3.jpg" alt="">
					<img src="images/slider/posdigital4.jpg" alt="">
					<img src="images/slider/posdigital5.jpg" alt="">
				</figure>
			</div>
<!--script-->
			<script>
			var timeOnSlide = 3,
			timeBetweenSlides = 1,
			animationstring = 'animation',
			animation = false,
			keyframeprefix = '',
			domPrefixes = 'Webkit Moz O Khtml'.split(' '),
			pfx = '',
			slidy = document.getElementById("slidy");
			if (slidy.style.animationName !== undefined) { animation = true; }
			if ( animation === false ) {
			for ( var i = 0; i < domPrefixes.length; i++ ) {
			if ( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
			pfx = domPrefixes[ i ];
			animationstring = pfx + 'Animation';
			keyframeprefix = '-' + pfx.toLowerCase() + '-';
			animation = true;
			break;
			} } }
			if ( animation === false ) {
			// animate using a JavaScript fallback, if you wish
			} else {
			var images = slidy.getElementsByTagName("img"),
			firstImg = images[0],
			imgWrap = firstImg.cloneNode(false);
			slidy.appendChild(imgWrap);
			var imgCount = images.length,
			totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1),
			slideRatio = (timeOnSlide / totalTime)*100,
			moveRatio = (timeBetweenSlides / totalTime)*100,
			basePercentage = 100/imgCount,
			position = 0,
			css = document.createElement("style");
			css.type = "text/css";
			css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%; }";
			css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }";
			css.innerHTML += "@"+keyframeprefix+"keyframes slidy {";
			for (i=0;i<(imgCount-1); i++) {
			position+= slideRatio;
			css.innerHTML += position+"% { left: -"+(i * 100)+"%; }";
			position += moveRatio;
			css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }";
			}
			css.innerHTML += "}";
			css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }";
			document.body.appendChild(css);
			}
			</script>
	  </div>
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
		<div class="side_bar">	
			<a href="phones.php" class="sidebar_menu"><img src="images/icon/phonesicon.png" width="33" alt="Phones">&nbsp;&nbsp;Phones</a>
		</div>
		<div class="side_bar">	
			<a href="smartphones.php" class="sidebar_menu"><img src="images/icon/smartphone.png" width="33" alt="Phones">&nbsp;&nbsp;Smartphones</a>
		</div>
		<div class="side_bar">	
			<a href="tablets.php" class="sidebar_menu"><img src="images/icon/tableticon.png" width="33" alt="Phones">&nbsp;&nbsp;Tablets</a>
		</div>
		<div class="side_bar">	
			<a href="accessories.php" class="sidebar_menu"><img src="images/icon/accessoriesicon2.png" width="33" alt="Phones">&nbsp;&nbsp;Accessories</a>
		</div>
		<div class="side_bar">	
			<a href="smart_products.php" class="sidebar_menu"><img src="images/icon/smarticon.png" width="33" alt="Phones">&nbsp;&nbsp;Smart Products</a>
		</div>
		<div class="side_bar">	
			<a href="cignal.php" class="sidebar_menu"><img src="images/icon/cgnal.png" width="33" alt="Phones">&nbsp;&nbsp;Cignal HD TV</a>
		</div>
          </div>
        </div>
        <div class="sidebar"></div>
      </div>
      <div id="content">
<?php
			function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}

  $query=mysql_query("select * from products where product_id='$ID'")or die(mysql_error());
  while($row=mysql_fetch_array($query)){
$product_id=$row['product_id'];
  ?>
			<h1 style="color:#0000ff; margin-top:10px; font-size:30px;"><b><?php echo $row['product_name']; ?></b></h1>
<div style="float:left;">
			<a href="#myModal" data-toggle="modal"><img src="<?php echo "admin/". $row['location']; ?>" style="width:180px; padding:4px; border-radius:8px; float:left; background-color:#d0d0d0; height:180px; margin: -1px 45px 7px 0; "></a>
<b style="float:left; margin-left:-196px; margin-top:190px;">[Click: Bigger Image]</b>
			</div>
					<table border="0" cellpadding="1" cellspacing="1" style="width:50%;">
						<tr>
							<td><span class="prices" style="font-size:23px;">Price</span></td>
							<td><b style="margin-left: 10px;">Php. <?php $oprice=$row['product_price']; echo formatMoney($oprice, true);?></b></td>
						</tr>
						<tr>
							<td><span class="prices" style="font-size:23px;">Brand</span></td>
							<td><b style="margin-left:10px;"><?php echo $row['product_brand']; ?></b></td>
						</tr>
						<tr>
							<td><span class="prices" style="font-size:23px;">Type</span></td>
							<td><b style="margin-left:10px;"><?php echo $row['product_type']; ?></b></td>
						</tr>
					</table>
<i style="margin-top:50px; float: right;">Note: The specification of the device is not available yet.</i>
<?php echo "<a href='view_cart.php?product_id=".$product_id."&action=add' class='btnCart'><input class='submit' type='submit' name='submit' value='BUY' style='float: left; margin-left: -214px; margin-top: 150px; width: 150px; border-radius: 50px;' /></a>";?>


 <!-- Modal Bigger Image -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel"><b><?php echo $row['product_name']; ?></b></h3>
    </div>
    <div class="modal-body">
	<img src="<?php echo "admin/". $row['location']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
	
                        	<?php }?> 
	  </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about_us.php">About Us</a> | <a href="products.php"><label class="footer_menu">Products</label></a> | <a href="branches.php">Branches</a> | <a href="contact.php">Contact Us</a> | <a href="faq.php">FAQ</a> | <a href="news_event.php">News and Event</a></p>
      <p>Copyright &copy; INNO TECH</p>
    </div>
  </div>
</body>
</html>
