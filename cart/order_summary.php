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
      <div id="content" style="width: 974px; border: 3px solid #d0d0d0; border-radius: 4px; padding:5px; margin-top: 70px; margin-right: 5px;">
<form method="post">
<?php
session_start();

include ('admin/includes/db.php');

if (isset($_SESSION['cart']))
	{	
	echo "<table cellpadding='5' cellspacing='5' style='width:100%;'>";
	
		echo "<tr style='color:#ff0000;'>";
		echo "<td align='center'>Image</td>";
		echo "<td align='center'>Product Name</td>";
		echo "<td align='center'>Brand</td>";
		echo "<td align='center'>Quantity</td>";
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
	$brand=$myrow['product_brand'];
	$line_cost=$price*$x;
	$total=$total+$line_cost;
	
	
		echo "<tr style='color:black'>";
		echo "<td align='center'><br /><img style ='border-radius:500px ;'height='75px' width='75px' src='".'admin/'.$myrow['location']."'></td>";
		echo "<td align='center'>$name</td>";
		echo "<td align='center'>$brand</td>";
		echo "<td align='center'>$x</td>";
		echo "<td align='center'>= Php $line_cost.00";
		echo "</tr>";
		}
		echo "<tr style='color:#ff0000;'>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td align='center'>Total</td>";
		echo "<td align='center'><b>= Php $total.00</b></td>";
		echo "</tr>";
		
		echo "<tr style='color:#ff0000;'>";
		echo "<td style='text-align:center;'>Shipment Agency:</td>";
		echo "<td>
		<select name='shippers' style='width: 120px; color: #000; background-color: #fff; height: 30px; font-weight: bolder; font-size: 18px; border: 2px solid #000; border-radius: 5px;'>
			<option>LBC</option>
			<option>JRS</option>
			<option>AP Cargo</option>
			<option>2GO</option>
		</select>
		</td>";
		echo "<td></td>";
		echo "<td align='center'></td>";
		echo "<td align='center'><br /><input type='submit' name='save' value='Check Out' style='width:100px; font-size:18px; border-radius:8px; color:#fff; background-color:#000; border:1px solid #000;' /></td>";
		echo "</tr>";
		echo "</table>";
	}
 	else
		echo "<font color='#000000'><h3><b>Cart is empty</b></h3><br /><a href='index.php'><input type='button' class='link1' value='Back' style='width:70px; height:35px; font-size:15px;'></a></font>";

?>

<?php
	if (isset($_POST['save']))
	{
	$shippers=$_POST['shippers'];
	$member_id=$_SESSION['is']['member_id'];
	$result=mysql_query("Select * from members where member_id=$member_id");
	$myrow=mysql_fetch_array($result);	
	foreach($_SESSION['cart'] as $product_id => $x)
	{
	$result=mysql_query("Select * from products where product_id=$product_id");
	$myrow=mysql_fetch_array($result);
	$product_id=$myrow['product_id'];
	$name=$myrow['product_name'];
	$name=substr($name,0,40);
	$price=$myrow['product_price'];
	$image=$myrow['location'];
	$brand=$myrow['product_brand'];
	$line_cost=$price*$x;
	$date = date ("M d, y");

	
		mysql_query("insert into cart (member_id,product_id,shippers,quantity,date,total) values('$member_id','$product_id','$shippers','$x','$date','$line_cost') ")or die(mysql_error());
		echo "<script>alert('Your order has been processed. Shall be delivered within 1 week!'); window.location='index.php'</script>";	
		unset($_SESSION['cart'][$product_id]);
		unset($_SESSION['is'][$member_id]);
	}
		
	}
?>

</form>
	  
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
