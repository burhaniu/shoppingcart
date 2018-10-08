<!DOCTYPE HTML>
<html>

<head>
  <title>Inno Tech - We care for you</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/php; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
	  <img src="images/header.png" width="1000px" height="140px">
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="Products.php">Products</a></li>
          <li><a href="branches.php">Branches</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="selected"><a href="faq.php">FAQ</a></li>
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
				<div id="table">
				
					<h3 style="color:#2080bf; line-height: 50px; font-size:27px;">Frequently Asked Questions (FAQ)</h3>
					
					<h2 style="color:#f6132e; font-size:25px; margin-bottom:-7px;">Price</h2>
						<hr>
								<ul style="margin-left:25px;">
									<li style="font-size:20px; margin-top:20px;">Prices are subject to change without prior notice.</li>
								</ul>
					<h2 style="color:#f6132e; font-size:25px; margin-bottom:-7px;">Sales</h2>
						<hr>
								<ul style="margin-left:25px;">
									<li style="font-size:20px; margin-top:20px;">Please fill up info sheet after clicking the button Reserve.</li>
									<li style="font-size:20px;">Transaction will be processed within 48 hours upon receipt of info sheet</li>
									<li style="font-size:20px;">Invoice shall be issued upon confirmed payment.</li>
									<li style="font-size:20px;">For PayPal payments, the e-receipt generated will be recognized as an OR.</li>
								</ul>
					<h2 style="color:#f6132e; font-size:25px; margin-bottom:-7px;">Claim/Delivery</h2>
						<hr>
								<ul style="margin-left:25px;">
									<li style="font-size:20px; margin-top:20px;">Invoice/Receipt will be printed upon payment of the item</li>
									<li style="font-size:20px;">Present Invoice/Receipt upon Claiming the items together with a valid ID</li>
									<li style="font-size:20px;">Redemption/Delivery Period starts 3 days after the payment has been confirmed</li>
									<li style="font-size:20px;">Pick up and Cash Payment at Pos Digital-Main, Ponce, Bldg, Araneta St., Bacolod City.</li>
									<li style="font-size:20px;">Free Delivery within Bacolod City Proper.</li>
									<li style="font-size:20px;">A flat rate of P200 delivery charge within Negros, Panay Area, and areas within the Philippines</li>
								</ul>
					<h2 style="color:#f6132e; font-size:25px; margin-bottom:-7px;">Replacement and Warranty</h2>
						<hr>
								<ul style="margin-left:25px;">
									<li style="font-size:20px; margin-top:20px;">To Replace/Exchange, please present Receipt or the printed PayPal e-receipt.</li>
									<li style="font-size:20px;">All units are covered with a 1 Year Warranty (see approved Manufacturer's Warranty Certificate)</li>
									<li style="font-size:20px;">All transactions are Subject to standard provisions on Consumer Protection and Product Warranty.</li>
									<li style="font-size:20px;">"A change of mind" is not entitled to a refund or exchange. (RA 7394)</li>
									<li style="font-size:20px;">Mishandling, misuse, alteration including removal and tampering of warranty seal of the unit will void the Product Warranty.</li>
									<li style="font-size:20px;">Units with factory defect purchased within 5 days can be replaced with a fresh unit provided:</li>
											<ul style="margin-left:35px;">
												<li style="font-size:20px; margin-top:20px;">Box in good condition</li>
												<li style="font-size:20px;">Complete Accessories</li>
												<li style="font-size:20px;">Free from scratches, dents and markings</li>
												<li style="font-size:20px;">5 working days processing time allotment</li>
											</ul>
									<li style="font-size:20px;">Beyond the 5 day bonus period, unit purchased will be covered by the Approved Manufacturer's Limited Warranty provision.</li>
									<li style="font-size:20px;">Units for replacement be returned to:	Pos Digital-Main	Ponce Bldg., Araneta St., Bacolod City</li>
								</ul>
	
					

	  </div>
    </div>
  </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>
	  <a href="index.php">Home</a> | <a href="about_us.php">About Us</a>
	  | <a href="Products.php">Products</a> | <a href="branches.php">Branches</a> | <a href="contact.php">Contact Us</a>
	  | <a href="faq.php"><label class="footer_menu">FAQ</label></a> | <a href="news_event.php">News and Event</a>
	  </p>
      <p>Copyright &copy; INNO TECH</p>
    </div>
    </div>
</body>
</html>
