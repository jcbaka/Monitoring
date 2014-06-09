<!DOCTYPE html>
<html lang="EN" dir="ltr">
<title>Monitoring | Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="shortcut icon" href="<?php echo $this->config->item('base_asset')?>images/icon.png" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/layout.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/monitoring-base.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/admin.css" type="text/css" />
</head>
<body>
<!-- ########################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Leyte Rehabilitation Fund Monitoring Project </a></h1>
      <p>Leyte Rehabilitation and Development Status</p>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2"> <div id="breadcrumb"></div></div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
	<div id="container">
		<div class="login-container">
		<div class="login-form">
			<form method="post" action="index.html" class="login">
			    <p>
			      <label for="login">Username:</label>
			      <input type="text" name="login" id="login">
			    </p>
			
			    <p>
			      <label for="password">Password:</label>
			      <input type="password" name="password" id="password">
			    </p>
			
			    <p class="login-submit">
			      <button type="submit" class="login-button">Login</button>
			    </p>
			
			    <p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
			 </form>
			</div>
  		</div>
	</div>
</div>
<!-- ####################################################################################################### -->
<?php $this->load->view('layouts/footer');?>
</body>
</html>
