<?php
$front_base_url = $this->config->item('front_base_url');
$base_url 		= $this->config->item('base_url');
$http_host 		= $this->config->item('http_host');
$base_url_views = $this->config->item('base_url_views');
$base_upload = $this->config->item('upload');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stylior</title>
<link rel="stylesheet" href="<?php echo $base_url_views; ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views; ?>css/style.css"/>
<script src="<?php echo $base_url_views; ?>js/jquery.js"></script>
<script src="<?php echo $base_url_views; ?>js/bootstrap.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body class="loginPage">
<div class="loginWrapper">
    <div class="loginLogo"><img src="<?php echo $base_url_views; ?>images/logo.png" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="<?php echo $base_url_views; ?>images/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
		<span style="color:red;float:right;padding-right:65px;"><b><?php echo $L_strErrorMessage; ?></b></span>
		<br />
        <form class="form" id="form" method="post" action="<?php echo $base_url;?>welcome/login">
			<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		    <INPUT TYPE="hidden" NAME="action" VALUE="login">
            <fieldset>
                <div class="formRow">
                    <label for="login">Username:</label>
                    <div class="loginInput"><input type="text" name="txtUserName" class="validate[required]" id="txtUserName" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">Password:</label>
                    <div class="loginInput"><input type="password" name="txtPassword" class="validate[required]" id="txtPassword" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <input type="submit" value="Log me in" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div id="footer">
    <div class="wrapper"><a href="#"><!--Copyright &copy;Triuminfo. All Rights reserved.--></a> </div>
</div>
</body>
</html>