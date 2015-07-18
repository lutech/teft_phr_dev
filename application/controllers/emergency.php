<?php 

	class Emergency extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/emergency/emergencyinformation';
        header( "Location: $url" );
	}

    public function emergencyinformation($area="emergency", $page="emergencyinformation", $subpage="", $partial="", $pagename = "Emergency Info"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['bcnav'] = $page;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }


    public function emergencypreparednessplan($area="emergency", $page="emergencypreparednessplan", $subpage="", $partial="", $pagename = "Emergency Plan"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['bcnav'] = $page;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }


    public function reportableevents($area="emergency", $page="reportableevents", $subpage="", $partial="", $pagename = "Reportable Events"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['bcnav'] = $page;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }
    public function reportableeventdetails($area="emergency", $page="reportableevent/reportableEventDetails", $subpage="", $partial="", $pagename = "Reportable Events"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['bcnav'] = $page;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }

}
