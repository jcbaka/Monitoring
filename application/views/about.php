<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Monitoring</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/layout.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->config->item('base_asset')?>css/monitoring-base.css" type="text/css" />
</head>
<body>
<?php $this->load->view('layouts/header');?>
<?php $cluster = $_GET['about'];?>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
       <li>&#187;</li>
      <li><a href="../index.php">Leyte Rehabilitation</a></li>
      <li>&#187;</li>
      <li class="current"><a href="<?php echo $this->config->item('base_url')?>welcome/about?about=<?php echo $cluster?>">About</a></li>
    </ul>
  </div>
</div>
<!-- #################################################################################### -->
<div class="wrapper col3">
   <div id="container" class="about">
		<div id="about">
  			<h1><b>About</b></h1>
  			<p>Orcimagna rhoncus et a nec antesque sed temportor pellus nibh conseque. Accumstsemper wisi pretium feugiat non ut eleifendrerisque at et condisse sce. Iaculumorci congue nam mollis odio id cras orci vestique euisquet at. Donecconsectetus lacilis ac pellus nam nibh curabitur sed anterdum nectetus adipis. Pretiummagnisse antes nunc pretium convallis tincidunt non at rutrumt.</p>
  		</div>
  		<!-- ################################################################################ -->
  		<?php if($cluster == -1){?>
  		<div id="about-infrastructure">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=infrastructure">Infrastructure</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/infrastructure.png" alt="" /></div>
  			<p>The infrastructure programs comprises  the rehabilitation and reconstruction of the provincially-funded and operated structures/establishments in the Province, roads and bridges, public buildings, flood mitigation structures and drainage system and water management system. </p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-social">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=social">Social Services</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/social.png" alt="" /></div>
  			<p>The social services program includes the repair/reconstruction of school buildings in the municipalities of the Province of Leyte, the district and community hospitals, Rural Health Units, Brgy. Health Centers/Stations, other health facilities. the provincial jail and sub-jails, and the procurement of hospital equipment.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-resettlement">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=resettlement">Resettlement</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/resettlement.png" alt="" /></div>
  			<p>The total housing requirement is 16,351 units for site relocation and implementation in CY 2014 as reflected in Table 6.  The total project cost including land acquisition at P10,000.00/unit; land development at P55,000.00/unit; community facilities at P10,0000.00; construction at P220,000.00/unit; and housing needs at P5,000.00/unit reach reached P4.9 billion.</p>
	      	<p>Private sector and donor agencies such as the San Miguel Corporation (SMC), GMA Kapuso, Don Bosco, and other funding agencies  will be providing 2,126 housing units in some of the municipalities like Palo, Javier and  Kananga with the  Province of Leyte providing the cost on land acquisition and site development amounting to  P138.19 million. </p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-livelihood">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=livelihood">Livelihood, Industry Trade &amp; Services Development </a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/livelihood.png" alt="" /></div>
  			<p>The livelihood component of the Plan includes capacity building activities, product enhancement and market development to be conducted by the Department of Tourism (DOT), Department of Trade and Industry (DTI) and Technical  Education Skills Development Authority (TESDA) in coordination with the Province of Leyte.  Funding of agriculture and non-agriculture related livelihood projects to include tourism initiatives livelihood projects in agriculture, fishery and tourism also fall under the livelihood component</p>
  			<p>This sub-group- Industry Trade &amp; Services Development is also included in coordination with the DTI, TESDA and the DOT in terms of rehabilitation activities that include skills and entrepreneurial trainings, market development and promotion and market consolidation.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-agriculture">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Agriculture &amp; Fishery </a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/agriculture.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-environment">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Environment</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/environment.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-support">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Program Support</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/program support.png" alt="" /></div>
  			<p>Under the Program support component is the Integrated Tax Management System (iTax) Regional Support Center, a proposed expansion project of the Province of Leyte in terms of an effective system for real property tax collection covering at least 129 municipalities in 11 provinces. All the 41 municipalities and city in the Province are iTax beneficiaries.    The system will focus on real property tax assessment and collection, with integrated specific modules on business permits and licensing, water reading and billing, economic enterprise and geographic information system (GIS). </p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<hr width="750px;"/>
  		<div id="about-summary">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Summary of Reports</a></h2>
  			 <div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/summary.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<!-- <p class="readmore"><a href="#">View Projects &raquo;</a></p> -->
  		</div>
  		<hr width="750px;"/>
  		<div id="about-addendum">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Addendum</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/addendum.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<!-- <p class="readmore"><a href="#">View Projects &raquo;</a></p> -->
  		</div>
  		<!-- ################################################################################ -->
  		<?php }else if($cluster == 0){?>
  		<div id="about-infrastructure">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=infrastructure">Infrastructure</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/infrastructure.png" alt="" /></div>
  			<p>The infrastructure programs comprises  the rehabilitation and reconstruction of the provincially-funded and operated structures/establishments in the Province, roads and bridges, public buildings, flood mitigation structures and drainage system and water management system. </p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 1){?>
  		<div id="about-social">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=social">Social Services</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/social.png" alt="" /></div>
  			<p>The social services program includes the repair/reconstruction of school buildings in the municipalities of the Province of Leyte, the district and community hospitals, Rural Health Units, Brgy. Health Centers/Stations, other health facilities. the provincial jail and sub-jails, and the procurement of hospital equipment.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 2){?>
  		<div id="about-resettlement">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=resettlement">Resettlement</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/resettlement.png" alt="" /></div>
  			<p>The total housing requirement is 16,351 units for site relocation and implementation in CY 2014 as reflected in Table 6.  The total project cost including land acquisition at P10,000.00/unit; land development at P55,000.00/unit; community facilities at P10,0000.00; construction at P220,000.00/unit; and housing needs at P5,000.00/unit reach reached P4.9 billion.</p>
	      	<p>Private sector and donor agencies such as the San Miguel Corporation (SMC), GMA Kapuso, Don Bosco, and other funding agencies  will be providing 2,126 housing units in some of the municipalities like Palo, Javier and  Kananga with the  Province of Leyte providing the cost on land acquisition and site development amounting to  P138.19 million. </p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 3){?>
  		<div id="about-livelihood">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=livelihood">Livelihood, Industry Trade &amp; Services Development </a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/livelihood.png" alt="" /></div>
  			<p>The livelihood component of the Plan includes capacity building activities, product enhancement and market development to be conducted by the Department of Tourism (DOT), Department of Trade and Industry (DTI) and Technical  Education Skills Development Authority (TESDA) in coordination with the Province of Leyte.  Funding of agriculture and non-agriculture related livelihood projects to include tourism initiatives livelihood projects in agriculture, fishery and tourism also fall under the livelihood component</p>
  			<p>This sub-group- Industry Trade &amp; Services Development is also included in coordination with the DTI, TESDA and the DOT in terms of rehabilitation activities that include skills and entrepreneurial trainings, market development and promotion and market consolidation.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 4){?>
  		<div id="about-agriculture">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Agriculture &amp; Fishery </a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/agriculture.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 5){?>
  		<div id="about-environment">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Environment</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/environment.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 6){?>
  		<div id="about-support">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Program Support</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/program support.png" alt="" /></div>
  			<p>Under the Program support component is the Integrated Tax Management System (iTax) Regional Support Center, a proposed expansion project of the Province of Leyte in terms of an effective system for real property tax collection covering at least 129 municipalities in 11 provinces. All the 41 municipalities and city in the Province are iTax beneficiaries.    The system will focus on real property tax assessment and collection, with integrated specific modules on business permits and licensing, water reading and billing, economic enterprise and geographic information system (GIS). </p>
  			<p class="readmore"><a href="#">View Projects &raquo;</a></p>
  		</div>
  		<?php }else if($cluster == 7){?>
  		<div id="about-summary">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Summary of Reports</a></h2>
  			 <div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/summary.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<!-- <p class="readmore"><a href="#">View Projects &raquo;</a></p> -->
  		</div>
  		<?php }else{?>
  		<div id="about-addendum">
  			<h2 class="about-link" ><a href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Addendum</a></h2>
  			<div class="imgholder"><img src="<?php echo $this->config->item('base_asset')?>images/addendum.png" alt="" /></div>
  			<p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
  			<!-- <p class="readmore"><a href="#">View Projects &raquo;</a></p> -->
  		</div>
  		<?php }?>
  </div>
</div>
<!-- #################################################################################### -->
<?php $this->load->view('layouts/footer');?>
<script type="text/javascript" src="<?php echo $this->config->item('base_asset')?>js/jquery-1.8.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	/* main menu */
	$("#topnav li").removeClass('active');
	$("#topnav li.last").addClass('active');
});
</script>
</body>
</html>