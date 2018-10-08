<?php 
include "config.php";
class user
{

	public $db;
	public function __construct()
	{
		$this->db=mysqli_connect(db_host,db_username_name,db_password,db);

		if(mysqli_connect_errno())
		{
			echo "database not connected";
			exit;
		}
	}
	public function check_login($data)
	{
		$username=$data['user_name'];

		if(!empty($_COOKIE["member_password"]))
		{
			$password=$data['password'];
		}
		else
		{
			$password=md5($data['password']);		
		}
	

		$check_login=mysqli_query($this->db,"select * from users where user_name='$username' and user_pass='$password'") or die('error in query');
		
		$rows=mysqli_fetch_array($check_login);

		if($check_login->num_rows==1)
		{
			$_SESSION['user_name']=$rows['user_name'];
			
			if(!empty($_POST["remember"])) 
			{
				setcookie ("member_login",$data['user_name'],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			} 
			else 
			{
				if(isset($_COOKIE["member_login"])) 
				{
					setcookie ("member_login","");
				}
				if(isset($_COOKIE["member_password"])) 
				{
					setcookie ("member_password","");
				}
			}

			header('location:home.php');
		}
		else
		{
			echo "<span style='color:red;font-weight:bold'>Invalid username and password</span>";
		}
	}
	public function register_user($data)
	{
		$username=trim($data['user_name']);
		$password=md5($data['user_pass']);
		$email_address=trim($data['email']);
		$full_name=trim($data['full_name']);


		$check_dublicate=mysqli_query($this->db,"select email from users where email='$email_address' or user_name='$username'") or die('error in query');

		if($username=='' && $password=='' && $email_address=='' && $full_name=='')
		{
			echo "<span style='color:red;font-weight:bold'>User name must be Required</span>";
			echo "<span style='color:red;font-weight:bold'>Password must be Required</span>";
			echo "<span style='color:red;font-weight:bold'>Email must be Required</span>";
			echo "<span style='color:red;font-weight:bold'>Full name must be Required</span>";
		}
		else if($check_dublicate->num_rows>0)
		{
			echo "<span style='color:red;font-weight:bold'>User already exits kindly enter unique details</span>";
		}
		else
		{
			$res=mysqli_query($this->db,"INSERT INTO users(email,user_name,user_pass,full_name)
			Values('$email_address','$username','$password','$full_name')") or die('error in query');

			if($res)
			{
				$dirname = "includes/uploads/".$username;
				mkdir($dirname);       
				header('location:index.php?msg=User registered succcessfully');
			}
			else
			{
				echo "<span style='color:red;font-weight:bold'>error in register user</span>";
			}
		}	
	}

	function logout()
	{
		$_SESSION['user_name']=FALSE;
		session_destroy();
		header('location:index.php');
	}

}
$user =new user();