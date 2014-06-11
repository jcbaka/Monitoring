<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

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
	public function index(){
		$this->load->view('view-home');
	}
	
	public function infra(){
		$group = $_GET['subgroup'];
		$link = $this->config->item('base_url');
		if($group == 'infra_1'){
			$data['title'] = "Roads, Bridges and Other Infrastructure";
			$data['content'] = "infrastructure/roads_bridges";
			$data['path'] = '<li><a href="'.$link.'welcome/view?cluster=infrastructure">Infrastructure</a></li>'.
				'<li> &#187; </li><li class="current"><a href="#">Roads, Bridges and Other Infrastructure</a></li>';
 			$this->load->view('view-home',$data);
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */