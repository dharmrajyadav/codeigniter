

<?php



	class Login_c extends CI_controller
	{



			public function index()
			{

					 $this->load->library('session');

				$this->load->view('user_login');
			}

			public function authenticate() 
			{

				  $username=$_POST["username"];
				  
					$this->load->model('Login_m');
					$data['loginData']=$this->Login_m->getData($username);
				  		$this->load->view('user_view',$data);


    		}



	}



?>