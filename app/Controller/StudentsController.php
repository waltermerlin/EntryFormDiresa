<?php 
	/**
	* StudentsController
	*/
	class StudentsController extends AppController
	{
		public $name = 'Students';
		public $uses = array('Student', 'Phase',  'Modality');
		
		public $layout = 'bootstrap/public';


		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow(array('create', 'add', 'show'));
		}

		public function add()
		{
			$this->set('modalities', $this->Modality->find('list', array('order' => array('name' => 'asc'), 'recursive' => 0)));
                        

			$this->set('phases', $this->Phase->find(
					'list', 
					array(
						'conditions' => array('Phase.state' => 1),
						'order' => array('created' => 'asc'), 
						'recursive' => 0
					)
				)
			);

		}
		
		public function create()
		{
			if ($this->request->is('post')) {
				if (!empty($this->request->data)) {
					
					// Use the following to avoid validation errors:
					unset($this->Student->ProfessionalTitle->validate['student_id']);
					unset($this->Student->LaborState->validate['student_id']);
					unset($this->Student->SpecialtyMembership->validate['student_id']);
					
					if ($this->Student->saveAssociated($this->request->data)) {					
						$this->Session->setFlash("Estudiante Registrado");
						$this->redirect(array('action' => 'show', $this->Student->id));
					} else {
						$this->Session->setFlash("Error al Registrar Estudiante ");
					}
				}
			}
		}

		public function show($id=null){
			if($id != null){
				$this->set('student', $this->Student->findById($id));
			}
		}

		public function details($id=null) {
			if($id != null){
				$this->set('student', $this->Student->findById($id));
			}
			$this->layout = null;
		}
	}

