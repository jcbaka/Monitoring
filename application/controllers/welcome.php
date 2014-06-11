<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user_home');
	}
	
	public function view()
	{
		$cluster = $_GET['cluster'];
		$title = '';
		$content = '';
		$path = '';
		
		if($cluster == 'infrastructure'){
      	   $title = "Infrastructure";
      	   $content = 'infrastructure/infra_summary';
      	   $path = '<li class="current"><a href="#">Infrastructure</a></li>';
      	   
        }else if($cluster == 'social'){
      	 	$title = "Social Services";
      	 	$content = 'social/social_summary';
      	 	$path = '<li class="current"><a href="#">Social Services</a></li>';
      	 	
      	}else if($cluster == 'resettlement'){
     		$title = "Resettlement";
     		$content = 'resettlement/resettle_summary';
     		$path = '<li class="current"><a href="#">Resettlement</a></li>';
     		
      	}else if($cluster == 'livelihood'){
      	 	$title = "Livelihood";
      	 	$content = 'livelihood/live_summary';
      	 	$path = '<li class="current"><a href="#">Livelihood</a></li>';
      	 	
      	}else if($cluster == 'agriculture'){
     		$title = "Agriculture &amp; Fishery";
     		$content = 'agriculture/agri_summary';
     		$path = '<li class="current"><a href="#">Agriculture &amp; Fishery</a></li>';
     		
     	}else if($cluster == 'environment'){
     		$title = "Environment";
     		$content = 'environment/envi_summary';
     		$path = '<li class="current"><a href="#">Environment</a></li>';
     		
     	}else if($cluster == 'support'){
     		$title = "Program Support";
     		$content = 'infrastructure/summary';
     		$path = '<li class="current"><a href="#">Program Support</a></li>';
     		
     	}else{
      		$title = "Summary of Reports";
      		$content = 'infrastructure/summary';
      		$path = '<li class="current"><a href="#">Summary of Reports</a></li>';
    	}
    	
		$data = array(
				'title' => $title,
				'content' => $content,
				'path' => $path
		);
		$this->load->view('view-home',$data);
	}
	public function about()
	{
		$this->load->view('about');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */