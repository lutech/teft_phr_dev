<?php 

	class Clinical extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/clinical/myhealthdata';
        header( "Location: $url" );
	}

    public function myhealthdata($area="clinical", $page="myhealthdata", $subpage="", $partial="", $pagename = "My Health Data", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        //Layout
        $data['layout'] = $layout;

        //Contextual Navigation
        $data['contextualnav'] = $contextualnav;


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

    public function vitals($area="clinical", $page="vitals", $subpage="", $partial="", $pagename = "Vitals", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        //Layout
        $data['layout'] = $layout;

        //Contextual Navigation
        $data['contextualnav'] = $contextualnav;

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

    public function labresults($area="clinical", $page="labresults", $subpage="", $partial="", $pagename = "Lab Results", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        //Layout
        $data['layout'] = $layout;

        //Contextual Navigation
        $data['contextualnav'] = $contextualnav;

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

    public function medicalcontacts($area="clinical", $page="medicalcontacts", $subpage="", $partial="", $pagename = "Medical Contacts"){
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
