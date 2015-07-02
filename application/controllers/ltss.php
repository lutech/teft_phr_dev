<?php 

	class Ltss extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/ltss/questionnaires';
        header( "Location: $url" );
	}

    public function questionnaires($area="ltss", $page="questionnaires", $subpage="", $partial=""){
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

    public function services($area="ltss", $page="services", $subpage="", $partial=""){
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

    public function applicationforms($area="ltss", $page="applicationforms", $subpage="", $partial=""){
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

    public function qualityassurance($area="ltss", $page="qualityassurance", $subpage="", $partial=""){
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
