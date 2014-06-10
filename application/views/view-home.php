<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Monitoring | View</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="shortcut icon" href="<?php echo $this->config->item('base_asset')?>images/icon.png" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/layout.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/monitoring-base.css" type="text/css" />
</head>
<body>
<!-- ####################################################################################################### -->
<?php $this->load->view('layouts/header');?>
<?php $cluster = $_GET['cluster'];	?>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="../index.php">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">View</a></li>
      <li>&#187;</li>
      <?php if($cluster == 'infrastructure'){?>
      	 <li class="current"><a href="#">Infrastructure</a></li>
      <?php }else if($cluster == 'social'){?>
      	 <li class="current"><a href="#">Social Services</a></li>
      <?php }else if($cluster == 'resettlement'){?>
     	<li class="current"><a href="#">Resettlement</a></li>
      <?php }else if($cluster == 'livelihood'){?>
      	 <li class="current"><a href="#">Livelihood</a></li>
      <?php }else if($cluster == 'agriculture'){?>
     	<li class="current"><a href="#">Agriculture &amp; Fishery </a></li>
      <?php }else if($cluster == 'environment'){?>
     	<li class="current"><a href="#">Environment</a></li>
      <?php }else if($cluster == 'support'){?>
     	<li class="current"><a href="#">Program Support</a></li>
      <?php }else{?>
      	<li class="current"><a href="#">Summary of Reports</a></li>
      <?php } ?>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
  	  <div id="column1">
      <div class="subnav">
      <!--   <h2>Clusters</h2> -->
        <ul class="nav">
          <li style="padding:20px 0px;" class="disable"><h2>Clusters</h2></li> 
          <li class="active"><a href="#">Infrastructure</a></li>
          <li><a href="#">Social Services </a></li>
          <li><a href="#">Resettlement</a></li>
          <li><a href="#">Livelihood, Industry Trade &amp; Services Dev't </a></li>
          <li><a href="#">Agriculture &amp; Fishery </a></li>
          <li><a href="#">Environment</a></li>
          <li><a href="#">Support Program</a></li>
          <li><a href="#">Summary of Reports</a></li>
           <li class="disable" style="padding:20px 0px;"></li> 
        </ul>
      </div>
    </div>
    <div id="content">
      		<?php if($cluster == 'infrastructure'){?>
      			 <h2>Infrastructure</h2>
      		<?php }else if($cluster == 'social'){?>
      			  <h2>Social Services</h2>
      		<?php }else if($cluster == 'resettlement'){?>
      			 <h2>Resettlement</h2>
      		<?php }else if($cluster == 'livelihood'){?>
      			  <h2>Livelihood, Industry Trade &amp; Services </h2>
      		<?php }else if($cluster == 'agriculture'){?>
      			 <h2>Agriculture &amp; Fishery </h2>
      		<?php }else if($cluster == 'environment'){?>
      			 <h2>Environment</h2>
      		<?php }else if($cluster == 'support'){?>
      			 <h2>Program Support</h2>
      		<?php }else{?>
      			  <h2>Summary of Reports</h2>
      		<?php }
      	?>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td>Value 8</td>
          </tr>
          <tr class="light">
            <td>Value 9</td>
            <td>Value 10</td>
            <td>Value 11</td>
            <td>Value 12</td>
          </tr>
          <tr class="dark">
            <td>Value 13</td>
            <td>Value 14</td>
            <td>Value 15</td>
            <td>Value 16</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Archives</h2>
        <ul>
          <li><a href="#">2015</a></li>
          <li><a href="#">2014</a>
            <ul>
              <li><a href="#">April</a></li>
              <li><a href="#">May</a></li>
              <li><a href="#">June</a>
              	<ul>
              		<li><a href="#">Images</a></li>
              		<li><a href="#">Files</a></li>
              	</ul>
              </li>
              <li><a href="#">July</a></li>
            </ul>
          </li>
          <li><a href="#">2013</a></li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<?php $this->load->view('layouts/footer');?>
<script type="text/javascript" src="<?php echo $this->config->item('base_asset')?>js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_asset')?>/js/monitoring.js"></script>
</body>
</html>
