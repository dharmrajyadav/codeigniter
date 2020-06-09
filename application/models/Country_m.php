

<?php


			class Country_m extends CI_model
			{







			




					public function __construct()
					{
						  parent::__construct();
        				$this->load->database();
					}


				public function getCountry()
				{


					$query['countryData']=$this->db->get('country');
					$query['countryData']=$query['countryData']->result_array();
					return $query['countryData'];

					
				}



			}



?>