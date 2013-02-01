<?php
	/**
	* SpecialtyMembershipsController 
	*/
	class SpecialtyMembershipsController extends AppController
	{
		public $name = 'SpecialtyMemberships';

		public $uses = array('SpecialtyMembership', 'Phase', 'Student', 'Modality');

	
		public function add() {
		}

		public function create(){

			//$this->set('phase_id', $this->request->params['pass'][0]);

			if ($this->request->is('post')) {
				
				//$this->request->data['Student']['phase_id'] = $this->request->params['pass'][0];

				//if ($this->SpecialtyMembership->saveAssociated($this->request->data)) {
					//$this->SpecialtyMembership->User->()

				//	$this->request->data['LaborState']['student_id'] = $this->SpecialtyMembership->User->id;
				//	$this->request->data['ProfessionalTitle'][0]['student_id'] = $this->SpecialtyMembership->User->id;

				//	$this->SpecialtyMembership->Student->saveAssociated($this->request->data);

				//	$this->Session->setFlash('Student has been saved');
					//$this->redirect(array('action' => 'show'));
				//} else {
				//	$this->Session->setFlash('Error');
				//}
			}

			$this->set('data', $this->request->data);
		}

		public function showList(){
			
			$specialty_id = $this->request->params['pass'][0];			
			$students = $this->SpecialtyMembership->query(" select Student.id, CONCAT_WS( ' ', Student.names, Student.last_fn, Student.last_mn ) as 'names', Student.document FROM students Student, specialty_memberships SE WHERE Student.id = SE.student_id and SE.specialty_id =  '$specialty_id' " );

			$this->set('students', $students);			
			$this->set('specialty', $this->SpecialtyMembership->query("select Specialty.id , Specialty.name, Modality.name  FROM specialties Specialty, modalities Modality WHERE Specialty.id = '$specialty_id' and Specialty.modality_id = Modality.id "  ));
		}

		function viewPdf($id = null) 
		{ 
			if (!$id) 
			{ 
				$this->Session->setFlash('Sorry, there was no property ID submitted.'); 
				$this->redirect(array('action'=>'index'), null, true); 
			} 
			
			Configure::write('debug',0); // Otherwise we cannot use this method while developing 

			
			$specialty_id = $this->request->params['pass'][0];			
			$students = $this->SpecialtyMembership->query("select Student.id, CONCAT_WS( ' ', Student.names, Student.last_fn, Student.last_mn ) as 'names', Student.document FROM students Student, specialty_memberships SE WHERE Student.id = SE.student_id and SE.specialty_id =  '$specialty_id' " );

			$this->set('students', $students);			
			$this->set('specialty', $this->SpecialtyMembership->query("select Specialty.id , Specialty.name, Modality.name  FROM specialties Specialty, modalities Modality WHERE Specialty.id = '$specialty_id' and Specialty.modality_id = Modality.id "  ));

			/*$id = intval($id); 

			$property = $this->__view($id); // here the data is pulled from the database and set for the view 

			if (empty($property)) 
			{ 
				$this->Session->setFlash('Sorry, there is no property with the submitted ID.'); 
				$this->redirect(array('action'=>'index'), null, true); 
			} */

			$this->layout = 'bootstrap/pdf'; //this will use the pdf.ctp layout 
			$this->response->type('pdf');
			//	$this->render(); 
		} 
	}
?>