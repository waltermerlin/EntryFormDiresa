<?php
	/**
	* HomeController.
	*/

	class HomeController extends AppController
	{
		public $name= "Home";
		public $uses = array("Phase", "Modality","Specialty", "SpecialtyMembership");

		public function index()
		{
			$this->set("current_phase", $this->Phase->find("all", array("conditions" => array("state" => 1), "recursive" => 0 )));
			
			$m = $this->Specialty->find("all", array("recursive" => 1 ));

			$this->set("modalities", $m);
			
			$countStudent = array();

			foreach ($m as $m2) {
				$IdSpecialty = $m2['Specialty']['id'];
				$countStudent[$IdSpecialty] = $this->SpecialtyMembership->find(
					'count',
					array(
						'conditions' => array('SpecialtyMembership.specialty_id' => $IdSpecialty)
					)
				);
			}	
			$this->set( "count", $countStudent );
			
			$this->set( "modalitiess", $this->Modality->find( "all", array( "recursive" => 1 ) ) );

			//$this->set("demo", array_demo);

		}
	}
?>