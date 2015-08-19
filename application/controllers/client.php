<?php

class Client extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/sandbox/billing/serviceactivities';
        header( "Location: $url" );
    }

    public function serviceactivitiesdetails($area="client", $page="serviceactivities/details", $subpage="", $partial="", $pagename = "Billing", $layout = "_ThreeColumnLeftAsideLayout"){
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
        $data['layout'] = $layout;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }


}