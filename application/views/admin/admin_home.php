<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?=$title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/layout.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/monitoring-base.css" type="text/css" />
</head>
<body>
<?php $this->load->view('layouts/header');?>
<div class="wrapper col3">
   <div id="container">
   		<?php foreach ($result as $row):?>
   		<h2><?=$row->username?></h2>
   		<h2><?=$row->password?></h2>
   		<?php endforeach;?>
   </div>
</div>
<?php $this->load->view('layouts/footer');?>
</body>
</html>
