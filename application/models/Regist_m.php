


<?php
		

		class Regist_m extends CI_model
		{







					public function __construct()
					{
						  parent::__construct();
        				$this->load->database();
					}


				public function getRegisData($data)
				{
						$name=$data["name"];
						$age=$data["age"];
						$gender=$data["gender"];
						$country=$data["country"];
						$state=$data["state"];
						$phone=$data["phone"];
						$discription=$data["discription"];

						$query=$this->db->query("select * from country where country_id='$country'");
						 $data=$query->result_array();
							$country_name=$data[0]['country_name'];
							
						$query=$this->db->query("select * from state where state_id='$state'");
						 $data=$query->result_array();
						$state_name=$data[0]['state_name'];		

							$query="insert into registration values('','$name','$age','$gender','$country_name','$state_name','$phone','$discription')";
							$dataInsert=$this->db->query($query);
							$msg="registration Successfull";

							return $msg;





					
				}



		}




?>