<?php 

	class Site extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/home/dashboard';
        header( "Location: $url" );
	}

}
