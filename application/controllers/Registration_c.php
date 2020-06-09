



<?php


		class Registration_c extends CI_controller
		{



			public function index()
			{
					/*$this->load->model('Country_m');
					$data['fetchcountry']=$this->Country_m->getCountry();*/
					$this->load->view('registration_view');		
			}



			public function getCountry()
			{

					$this->load->model('Country_m');
					$data['fetchcountry']=$this->Country_m->getCountry();
					echo json_encode($data);


			}		

			public function getState()
			{

				$this->load->model('State_m');
				$data['fetchstate']=$this->State_m->getState();
				echo json_encode($data);
			}


				public function registData()     //Form Data
				{
					 	
    				 	$data["name"]=$_POST["myName"];
    					$data["age"]=$_POST["age"];
    					$data["id"]=$_POST["country"];
    					$data["gender"]=$_POST["gender"];
    					$data["country"]=$_POST["country"];
    					$data["state"]=$_POST["state"];
    					$data["phone"]=$_POST["phone"];
    					$data["discription"]=$_POST["discription"];


    					$this->load->model('Regist_m');
	    				$data["regist_respon"]=$this->Regist_m->getRegisData($data);
	    				//echo $data["regist_respon"];
	    				echo "<script>
									alert('There are no fields to generate a report');
									window.location.href='http://localhost/codeIgniter/index.php/Login_c/';
								</script>";
    					
						
				}



		}





?>