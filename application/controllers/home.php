<?php 

	class Home extends CI_Controller {
		
	public function index() {
        $this->load->helper('url');
        $url = base_url().'index.php/home/dashboard';
        header( "Location: $url" );
	}

    public function dashboard($area="home", $page="dashboard", $subpage="", $partial="", $tabnav = "home"){
        if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['area'] = $area;
        $data['page'] = $page;
        $data['subpage'] = $subpage;
        $data['partial'] = $partial;
        $data['tabnav'] = $tabnav;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);
        }

        public function myprofile($area="home", $page="myprofile", $subpage="", $partial="", $tabnav = "home"){
            if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['area'] = $area;
            $data['page'] = $page;
            $data['subpage'] = $subpage;
            $data['partial'] = $partial;
            $data['tabnav'] = $tabnav;
            $this->load->helper('url');
            $this->load->view("templates/master-layout.php", $data);
        }

        public function events($area="home", $page="events", $subpage="", $partial="", $tabnav = "home"){
            if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['area'] = $area;
            $data['page'] = $page;
            $data['subpage'] = $subpage;
            $data['partial'] = $partial;
            $data['tabnav'] = $tabnav;
            $this->load->helper('url');
            $this->load->view("templates/master-layout.php", $data);
        }

        public function messages($area="home", $page="messages", $subpage="", $partial="", $tabnav = "home"){
            if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['area'] = $area;
            $data['page'] = $page;
            $data['subpage'] = $subpage;
            $data['partial'] = $partial;
            $data['tabnav'] = $tabnav;
            $this->load->helper('url');
            $this->load->view("templates/master-layout.php", $data);
        }


        public function notesanddocuments($area="home", $page="notesanddocuments", $subpage="", $partial="", $tabnav = "home"){
            if ( ! file_exists('application/views/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['area'] = $area;
            $data['page'] = $page;
            $data['subpage'] = $subpage;
            $data['partial'] = $partial;
            $data['tabnav'] = $tabnav;
            $this->load->helper('url');
            $this->load->view("templates/master-layout.php", $data);
        }



        public function login(){
		
		if(isset($_POST['submit']))	{
			
			$username = $_POST['username'];
			
			if ($username == 'rosiered') {		
				setcookie('user', 'publicmember', time()+3600, '/');
				setcookie('username', 'Rosie Red', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98416818', time()+3600, '/');
			}
			else if ($username == 'gabrielgreen') {							
				setcookie('user', 'publicmember', time()+3600, '/');
				setcookie('username', 'Gabriel Green', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Male', time()+3600, '/');
				setcookie('suffix', 'Jr.', time()+3600, '/');
				setcookie('userid', '84918569', time()+3600, '/');
			} 
			else if ($username == 'burtonbrown') {		
				setcookie('user', 'domstaff', time()+3600, '/');
				setcookie('username', 'Burton Brown', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Male', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98547156', time()+3600, '/');
			}
			else if ($username == 'penelopepurple') {		
				setcookie('user', 'unauthorizedprovider', time()+3600, '/');
				setcookie('username', 'Penelope Purple', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '25847523', time()+3600, '/');
			}
			else if ($username == 'susanasilver') {		
				setcookie('user', 'authorizedprovider', time()+3600, '/');
				setcookie('username', 'Susana Silver', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98547152', time()+3600, '/');
			}
			else if ($username == 'victoriaviolet') {		
				setcookie('user', 'authorizedprovider', time()+3600, '/');
				setcookie('username', 'Victoria Violet', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '36587415', time()+3600, '/');
			}
			else if ($username == 'tinateal') {		
				setcookie('user', 'msadmin', time()+3600, '/');
				setcookie('username', 'Tina Teal', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '99871547', time()+3600, '/');
			}
			else if ($username == 'benburgundy') {		
				setcookie('user', 'macadmin', time()+3600, '/');
				setcookie('username', 'Ben Burgundy', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '58471589', time()+3600, '/');
			}
		} else {
				setcookie('user', 'publicvisitor', time()+36000000, '/');
				setcookie('username', 'unknown', time()+36000000, '/');
				setcookie('loginname', ' ', time()+3600, '/');
				setcookie('gender', ' ', time()+36000000, '/');
				setcookie('suffix', ' ', time()+36000000, '/');
				setcookie('userid', ' ', time()+36000000, '/');
		}
		
		$this->load->helper('url');
		$url = base_url().'index.php';
		header( "Location: $url" );
	}
	
	public function logout(){
		setcookie('user', 'publicvisitor', time()+36000000, '/');
		setcookie('username', 'unknown', time()+36000000, '/');
		setcookie('loginname', ' ', time()+3600, '/');
		setcookie('gender', ' ', time()+36000000, '/');
		setcookie('suffix', ' ', time()+36000000, '/');
		setcookie('userid', ' ', time()+36000000, '/');
						
		$this->load->helper('url');
		$url = base_url().'index.php';
		header( "Location: $url" );
	}

}
