

<?php



	class User_c extends CI_controller
	{



			public function index()
			{

					 $this->load->library('session');

				$this->load->view('user_view');
			}

			


	}



?>