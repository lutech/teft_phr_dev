<?php 

	class Emergency extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/emergency/emergencyinformation';
        header( "Location: $url" );
	}

    public function emergencyinformation($area="emergency", $page="emergencyinformation", $subpage="", $partial=""){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }

    public function reportableevents($area="emergency", $page="reportableevents", $subpage="", $partial=""){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }

}
