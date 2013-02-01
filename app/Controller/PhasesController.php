<?php

/**
* PhasesController
*/

class PhasesController extends AppController
{
	public $name = 'Phases';

	public function home()
	{
		$this->set('phases', $this->Phase->findAllByState('1'));
	}

	public function index()
	{
		$this->set('phases', $this->Phase->find('all'));
	}

	public function add()
	{
		if ($this->request->is('post')) {
			$this->request->data['Phases']['state'] = 0;

			if ($this->Phase->save($this->request->data)) {
				$this->Session->setFlash('Your user has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {				
				$this->Session->setFlash('Error.');
			}
		}
	}

	public function edit($id=null)
	{
		$this->Phase->id = $id;

		if($this->request->is('get')){
			$this->request->data = $this->Phase->read();
		}else{
			if ($this->Phase->save($this->request->data)) {
				$this->Session->setFlash('Your Phase has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function delete($id)
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowException();
		}
		if ($this->Phase->delete($id)) {
			$this->Session->setFlash('El usuario con id: '.$id.' ha sido borrado.');
			$this->redirect(array('action'=>'index'));
		}
	}
}