<?php 

	class Helpandinfo extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/helpandinfo/faq';
        header( "Location: $url" );
	}

        public function faq($area="helpandinfo", $page="faq", $subpage="", $partial="", $pagename = "FAQ"){
            if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['area'] = $area;
            $data['page'] = $page;
            $data['subpage'] = $subpage;
            $data['partial'] = $partial;
            $data['tabnav'] = $area;
            $data['pagename'] = $pagename;
            $this->load->helper('url');
            $this->load->view("templates/master-layout.php", $data);
        }


        public function programsandservices($area="helpandinfo", $page="programsandservices", $subpage="", $partial="", $pagename = "Programs & Services"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }


    public function trainingresources($area="helpandinfo", $page="trainingresources", $subpage="", $partial="", $pagename = "Training Resources"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }

    public function contactus($area="helpandinfo", $page="contactus", $subpage="", $partial="", $pagename = "Contact Us"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $area;
        $data['pagename'] = $pagename;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
    }

}
