<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Leyte Rehabilitation Fund Monitoring Project</a></h1>
      <p>Leyte Rehabilitation and Development Status</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="<?php echo $this->config->item('base_url')?>">Home</a></li>
        <!-- <li class="last "><a href="user/view-home.php">View</a></li> -->
        <li class="dropdown-submenu">
	    	<a tabindex="-1" href="#">View </a>
		    <ul class="dropdown-menu">
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=infrastructure">Infrastructure</a></li>
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=social">Social Services</a></li>
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=resettlement">Resettlement</a></li>
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=livelihood">Livelihood </a></li>
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=agriculture">Agriculture &amp; Fishery</a></li>
	    		<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=environment">Environment</a></li>
		    	<li><a tabindex="-1" href="<?php echo $this->config->item('base_url')?>welcome/view?cluster=support">Program Support</a></li>
		    </ul>
	 	</li>
	 	<li class="last"><a href="<?php echo $this->config->item('base_url')?>welcome/about?about=-1">About</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
