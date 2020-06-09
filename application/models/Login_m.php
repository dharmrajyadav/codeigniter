

<?php



	class Login_m extends CI_model
	{


		
			public function __construct()
					{
						  parent::__construct();
        				$this->load->database();
					}



			public function getData($username)
			{

				$name=$username;
				$query=$this->db->query("select * from registration");
						 $data['regisData']=$query->result_array();
						return $data['regisData'];
							//$country_name=$data[0]['country_name'];



			}





	}





?>