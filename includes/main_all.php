<?php
include '../class/class.php';
if(isset($_POST['txtemail'])){
		  if($_SESSION['atemp_log']>=3){
		  require_once('../includes/recaptchalib.php');
		  $privatekey = "6Lc-q-4SAAAAAOvOOnOaCwm7W3cUbFZJFSAZvX30";
		  $resp = recaptcha_check_answer ($privatekey,
										$_SERVER["REMOTE_ADDR"],
										$_POST["recaptcha_challenge_field"],
										$_POST["recaptcha_response_field"]);
		  if (!$resp->is_valid){
			// What happens when the CAPTCHA was entered incorrectly
			echo "verify";
		  }else {
			//Your code here to handle a successful verification
			$text_email=$_POST['txtemail'];
			$txtpass=$_POST['txtpassword'];
			$position=$_POST['RadioGroup1'];
			$obj->login($text_email,$txtpass,$position);
		  }
    }else{
		$text_email=$_POST['txtemail'];
		$txtpass=$_POST['txtpassword'];
		$position=$_POST['RadioGroup1'];
		$obj->login($text_email,$txtpass,$position);
	}
}
if(isset($_POST['txtfullname'])){
	$text_fulname=mysql_real_escape_string($_POST['txtfullname']);
	$txtemail=mysql_real_escape_string($_POST['txtemail_sig']);
	$password=mysql_real_escape_string($_POST['txtpassword_sig']);
	$package=mysql_real_escape_string($_POST['txt_package']);
	//echo $txtemail;
	$check_exist=$obj->check_email($txtemail);// check email exist
	
	if($check_exist==0){
		 $obj->Buy_now($text_fulname,$txtemail,$password,$package);
	}else{
		echo 'alredy';
	}
}
?>