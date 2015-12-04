<?php 

	class Ltss extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/ltss/overview';
        header( "Location: $url" );
	}


    public function overview($area="ltss", $page="overview", $subpage="", $partial="", $pagename = "Overview", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
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
    public function services($area="ltss", $page="services", $subpage="", $partial="", $pagename = "Services", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
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

    public function programforms($area="ltss", $page="programforms", $subpage="", $partial="", $pagename = "Program Forms", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
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

    public function qualityassurance($area="ltss", $page="qualityassurance", $subpage="", $partial="", $pagename = "Quality Assurance", $layout = "_ThreeColumnRightAsideLayout", $contextualnav=""){
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

    public function cahpssurvey($area="ltss", $page="qualityassurance/cahpssurvey", $subpage="details", $partial="", $pagename = "CAHPS Survey"){
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

    public function cahpssurveydetails($area="ltss", $page="qualityassurance/cahpsSurvey/cahpsSurveyDetails", $subpage="details", $partial="", $pagename = "CAHPS Survey Details"){
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


        public function careassessmentdetails($area="ltss", $page="programforms/careassessment/CareAssessmentDetails", $subpage="details", $partial="", $pagename = "CARE Assessment Details", $backlink = "programforms/careassessment"){
            if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            //Layout
            $data['backlink'] = $backlink;

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


        public function pssdetails($area="ltss", $page="programforms/pss/pssDetails", $subpage="details", $partial="", $pagename = "PSS Details"){
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
