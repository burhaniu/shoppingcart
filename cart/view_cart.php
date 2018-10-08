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
<h3>Customer Order</h3>
      <div id="content" style="width: 974px; border: 3px solid #d0d0d0; border-radius: 4px; padding:5px; margin-top: 10px; margin-right: 5px;">
<?php
session_start();
include ('admin/includes/db.php');

	if (isset($_GET['product_id']))
	$product_id=$_GET['product_id'];
	else
	$product_id=1;
	if (isset($_GET['action']))
	$action=$_GET['action'];
	else
	$action="empty";

	switch($action)
	{
		case "add":
			if (isset($_SESSION['cart'][$product_id]))
			$_SESSION['cart'][$product_id]++;
			else
			$_SESSION['cart'][$product_id]=1;
		break;
		case "remove":
			if (isset($_SESSION['cart'][$product_id]))
			{
				$_SESSION['cart'][$product_id]--;
				if ($_SESSION['cart'][$product_id]==0)
				unset($_SESSION['cart'][$product_id]);
			}
		break; 
		case "empty":
			unset($_SESSION['cart']);
		break;
	}
if (isset($_SESSION['cart']))
	{	
	echo "<table cellpadding='5' cellspacing='5' style='width:100%;'>";
	
		echo "<tr style='color:#ff0000;'>";
		echo "<td align='center'>Image</td>";
		echo "<td align='center' style='width: 150px; word-break: break-all;'>Product Name</td>";
		echo "<td align='center'>Brand</td>";
		echo "<td align='center'>Price</td>";
		echo "<td align='center'>Quantity</td>";
		echo "<td align='center'>Add</td>";
		echo "<td align='center'>Subtotal</td>";
		echo "</tr>";
	$total=0;
	foreach($_SESSION['cart'] as $product_id => $x)
	{
	$result=mysql_query("Select * from products where product_id=$product_id");
	$myrow=mysql_fetch_array($result);
	$name=$myrow['product_name'];
	$name=substr($name,0,40);
	$price=$myrow['product_price'];
	$image=$myrow['location'];
	$price=$myrow['product_price'];
	$brand=$myrow['product_brand'];
	$line_cost=$price*$x;
	$total=$total+$line_cost;
	
	
		echo "<tr style='color:black'>";
		echo "<td align='center'><br /><img style ='border-radius:500px ;'height='75px' width='75px' src='".'admin/'.$myrow['location']."'></td>";
		echo "<td align='center' style=' word-wrap:break-word; word-break: break-all; width:100px;'>$name</td>";
		echo "<td align='center'>$brand</td>";
		echo "<td align='center'>Php $price.00</td>";
		echo "<td align='center'>x$x | <a href='view_cart.php?product_id=".$product_id."&action=add' style='text-decoration:none;'>Add</a></td>";
		echo "<td align='center' style='width:100px;'><a href='view_cart.php?product_id=".$product_id."&action=remove' style='text-decoration:none;'>Remove</a></td>";
		echo "<td align='center'>= Php $line_cost.00";
		echo "</tr>";
		}
		echo "<tr style='color:#ff0000;'>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td align='center'>Total</td>";
		echo "<td align='center' colspan='2'>Action</td>";
		echo "</tr>";
		echo "<tr style='color:#000000;'>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td align='center'><br /><b>= Php $total.00</b></td>";
		echo "<td align='center'><br /><a href='view_cart.php?product_id=".$product_id."&action=empty'><img src = 'images/cart_11.png'></a></td>";
		echo "<td align='center'><br /><a href='check_out.php'><img src = 'images/checkout.png' width='120px' height='40px'></a></td>";
		echo "</tr>";
		echo "</table>";
	}
 	else
		echo "<font color='#000000'><h3><b>Cart is empty</b></h3><br /><a href='products.php'><input type='button' class='link1' value='Back' style='width:70px; height:35px; font-size:15px;'></a></font>";

?>
	  
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
