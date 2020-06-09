


<?php

	
		class State_m extends CI_model
		{


				public function __construct()
					{
						  parent::__construct();
        				$this->load->database();
					}


				public function getState()
				{

					$query['statedata']=$this->db->get('state');	
					$query['statedata']=$query['statedata']->result_array();				
					return $query['statedata'];
				}	



		}





?>