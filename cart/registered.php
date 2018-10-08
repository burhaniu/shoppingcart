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
          <li><a href="products.php">Products</a></li>
          <li><a href="branches.php">Branches</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="news_event.php">News and Event</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
	<h3 style="text-indent:10px; margin-top:10px;">Customer Information</h3>
      <div id="content" style="width: 974px; border: 3px solid #d0d0d0; border-radius: 4px; padding:5px; margin-top: -5px; margin-right: 5px;">
          <div class="form_settings">
	<form method="post" style="margin-left: 152px;">
            <p><span>Name</span><input class="contact" type="text" name="firstname" placeholder="Your firstname..." /></p>
			<br />
            <p><span></span><input class="contact" type="text" name="lastname" placeholder="Your lastname..." style="margin-left: 200px;" /></p>
			<br />
            <p><span>Email Address</span><input class="contact" type="email" name="email" placeholder="Your email..." /></p>
			<br />
            <p><span>Password</span><input class="contact" type="password" name="password" placeholder="Your password..." /></p>
			<br />
            <p><span>Phone Number</span><input class="contact" type="text" maxlength="11" name="contact_no" placeholder="Your number..." /></p>
			<br />
            <p><span>Address</span><textarea style="height:83px;" class="contact textarea" rows="8" cols="50" name="address" placeholder="Your address..."></textarea></p>
			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="save" value="Register" /></p>
						<a href="check_out.php" style="float:right; margin-top:20px;"><span>&nbsp;</span><input class="submit" type="button" value="Back" /></a>

						 <?php
						 
include ('admin/includes/db.php');
						 
                            if (isset($_POST['save'])) {
                            	
                            	$firstname=$_POST['firstname'];
								$lastname=$_POST['lastname'];
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $contact_number=$_POST['contact_no'];
								$address=$_POST['address'];
								$date = date ("M d, y");
                            	 
								
						
                                mysql_query("insert into `members` (firstname,lastname,email,password,contact_no,address,date)
									values ('$firstname','$lastname', '$email','$password', '$contact_number','$address','$date')") or die(mysql_error());
					
									
                                header('location:check_out.php');
                          
							
						}
      ?>
			
	</form>
          </div>
	  </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about_us.php">About Us</a> | <a href="products.php">Products</a> | <a href="branches.php">Branches</a> | <a href="contact.php">Contact Us</a> | <a href="faq.php">FAQ</a> | <a href="news_event.php">News and Event</a></p>
      <p>Copyright &copy; INNO TECH</p>
    </div>
  </div>
</body>
</html>
