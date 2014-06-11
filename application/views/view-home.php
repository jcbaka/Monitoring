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
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="../index.php">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">View</a></li>
      <li>&#187;</li>
      <?php echo $path;?>
      
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
          <li class="main active"><a>Infrastructure &emsp; &emsp;&emsp; &raquo;</a>
          	<ul class="dropdown-subgroup">
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>view/infra?subgroup=infra_1">Roads,Bridges and Other Infrastructure</a></li>
		    	<li><a tabindex="-1" href="/Monitoring/user/view-home.php?cluster=infrastructure&subgroup=flood">Flood Mitigation and Drainage System</a></li>
		    	<li><a tabindex="-1" href="/Monitoring/user/view-home.php?cluster=infrastructure&subgroup=water">Water Management System</a></li>
		    	<li><a tabindex="-1" href="/Monitoring/user/view-home.php?cluster=infrastructure&subgroup=multipurpose">Multi-Purpose Buildings and Other Infrastructures</a></li>
		    	<li><a tabindex="-1" href="/Monitoring/user/view-home.php?cluster=infrastructure&subgroup=other">Other Public Buildings Provincial Offices and Other</a></li>
		    	<li><a tabindex="-1" href="/Monitoring/user/view-home.php?cluster=infrastructure&subgroup=structures">Structures</a></li>
		    	<li><a tabindex="-1" href="/Monitoring/user/view-home.php?cluster=infrastructure&subgroup=tourism">Tourism Infrastructure</a></li>
	   		</ul>
          </li>
          <li class="main"><a href="#">Social Services  &emsp;&emsp;&emsp;&raquo;</a>
          	<ul class="dropdown-subgroup" >
		    	<li><a tabindex="-1" href="#">School Buildings</a></li>
		    	<li><a tabindex="-1" href="#">PARR Format School JICA</a></li>
		    	<li><a tabindex="-1" href="#">Education (Day Care Center)</a></li>
		    	<li><a tabindex="-1" href="#">Repair Rehabilitation of Other Public Buildings</a></li>
		    	<li><a tabindex="-1" href="#">Hospital Equipment</a></li>
	   		</ul>
          </li>
          <li class="main"><a href="#">Resettlement  &emsp; &emsp; &emsp;&nbsp; &raquo;</a>
          	<ul class="dropdown-subgroup" >
		    	<li><a tabindex="-1" href="#">NHA Computation</a></li>
		    	<li><a tabindex="-1" href="#">Private Donors</a></li>
		    	<li><a tabindex="-1" href="#">Shelter Kits</a></li>
	   		</ul>
          </li>
          <li class="main"><a href="#">Livelihood &emsp; &emsp; &emsp; &emsp;&emsp;&raquo;</a>
          	<ul class="dropdown-subgroup" >
		    	<li><a tabindex="-1" href="#">Tourism</a></li>
		    	<li><a tabindex="-1" href="#">Industry Trade &amp; Services Dev't. </a></li>
		    	<li><a tabindex="-1" href="#">TESDA-Implemented Ray Program as of 05-13-2014</a></li>
		    	<li><a tabindex="-1" href="#">Livelihood Programs Education 2Ps</a></li>
	   		</ul>
          </li>
          <li class="main"><a href="#">Agriculture &amp; Fishery &raquo;</a>
          	<ul class="dropdown-subgroup" >
		    	<li><a tabindex="-1" href="#">A&amp;F </a></li>
		    	<li><a tabindex="-1" href="#">A&amp;F Priority 1</a></li>
		    	<li><a tabindex="-1" href="#">Fisheries</a></li>
		    	<li><a tabindex="-1" href="#">Livelihood</a></li>
	   		</ul>
          </li>
          <li class="main"><a href="#">Environment </a></li>
          <li class="main"><a href="#">Support Program </a></li>
          <li class="main"><a href="#">Summary of Reports</a></li>
           <li class="disable" style="padding:20px 0px;"></li> 
        </ul>
      </div>
    </div>
    <div id="content">
      <h2><?php echo $title;?></h2>
      <?php $this->load->view($content);?>
    </div>
<!--     <div id="column">
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
    </div> -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<?php $this->load->view('layouts/footer');?>
<script type="text/javascript" src="<?php echo $this->config->item('base_asset')?>js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_asset')?>/js/monitoring.js"></script>
</body>
</html>
