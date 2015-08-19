<?php

class Sandbox extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/sandbox/billing/serviceactivities';
        header( "Location: $url" );
    }

    public function serviceactivities($area="sandbox", $page="billing/serviceactivities", $subpage="", $partial="", $pagename = "Service Activities", $layout = "_ThreeColumnLeftAsideLayout"){
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

    public function serviceclaims($area="sandbox", $page="billing/serviceclaims", $subpage="", $partial="", $pagename = "Service Claims"){
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

    public function servicebudget($area="sandbox", $page="billing/servicebudget", $subpage="", $partial="", $pagename = "Service Budget"){
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
