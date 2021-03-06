<?php
	include '../class/class.php';
    define('PAGE_TITLE','sign_up');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" />
<script src="../js/jquery-2.0.3.js"></script>
<script src="../js/main.js"></script>
<title>Sign Up</title>
<link rel="SHORTCUT ICON" href="http://www.ffg-cambo.com/oss-mekong/images/commons/icons.png"/>
</head>
<body>
<div id="s_content_all">
	<div id="s_header">
    	<?php include('../includes/header.php');?>            
    </div>
    <div id="s_body">
    	<div id="s_description">
        	<div id="s_title_b">
            	<div id="s_proverb" style="width:80%; float:left; text-align:right;color:#5d5d5d; ">Think about chat, Think about&nbsp;</div>
            	<div style="width:20%; float:left; padding-top:8px; text-align:left;"><img src="../images/commons/gochat.png" /></div>
            </div>
            <div id="s_title_sign"><img src="../images/commons/start_sging.png"></div>
            <div id="s_detial_description">
				<div id="s_detial_description_line1">" What you will learn and benefit from <label style="font-family:'Courier New', Courier, monospace">gochat </label>is your smart choice</div>
                <div id="s_detial_description_line1"><strong>for real time</strong> interactivity ! "</div>
            </div>
        </div>
        
        <div id="s_form_sign_up">
        	<form name="frmsignup" method="post" action="../includes/main_all.php" id="frmsignup">
            	<input type="hidden" value="<?php echo $_GET['pakage']; ?>" id="txt_package" name="txt_package" />
            	<label style="padding-bottom:10px; float:left;"><input type="text" id="txtfullname" name="txtfullname" class="txtname" placeholder="fullname" /></label>
                <label style="padding-bottom:10px; float:left;"><input type="text" id="txtemail" name="txtemail_sig" class="txtname" placeholder="e-mail" /></label>
                <label style="padding-bottom:10px; float:left;"><input type="password" id="txtpassword" name="txtpassword_sig" class="txtname" placeholder="password" /></label>
                <label style="padding-bottom:10px; float:left;"><input type="submit" class="btn_signup" value="SIGN UP" /></label>
                <label style="font-size:16px;">By signing up, I agree the <a href="../term_condition" style="text-decoration:none; color:#00F;">term & conditions</a> and <a href="" style="text-decoration:none;">privacy policy</a>.</label>
                <div id="AlertMessage" style="font-size:14px; color:#F00;"></div>
            </form>
            
        </div>
        
    </div>
    <br class="clear" />
    <div id="s_footer">
    	<?php include('../includes/s_footer.php');?>
    </div>
    
</div>
</body>
</html>
