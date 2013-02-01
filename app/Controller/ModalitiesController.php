<?php
	/**
	* ModalitiesController
	*/
	class ModalitiesController extends AppController
	{
		//public $viewClass = 'Json';
		
		public $components = array('RequestHandler');

		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('getById');
		}

		public function ask()
		{
			$this->viewClass = 'Json';
			$this->RequestHandler->setContent('json', 'application/json' );

			$modalities =  $this->Modality->find('all');
			$this->set('modalities', $modalities);
			$this->set('__serialize', 'modalities');
		}

		public function getById($id = '1')
		{
			$this->viewClass = 'Json';
			$this->RequestHandler->setContent('json', 'application/json' );
			
			$modality = $this->Modality->Specialty->find(
				'all', 
				array(
					'conditions' => array('Specialty.modality_id' => $id),
					'fields' => array('Specialty.id','Specialty.name'),
					'recursive' => 0
				)
			);
			$this->set('modality', $modality);
			$this->set('__serialize', 'modality');
		}

		public function allList($id=null)
		{
			if ($id != null) {
				$modalities =  $this->Modality->findById($id);
				$this->set('modalities', $modalities);
			} else {
				
			}
		}
	}
?>