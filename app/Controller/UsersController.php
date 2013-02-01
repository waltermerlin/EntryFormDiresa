<?php
	/**
	* UsersController
	*/
	class UsersController extends AppController
	{
		public $name = 'Users';

		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('add');
		}

		public function isAuthorized($user)
		{
			if($user['role'] == 'admin'){
				return true;
			}
			if (in_array($this->action, array('edit','delete'))) {
				if ($user['id'] != $this->request->params['pass'][0]) {
					return false;
				}
			}
			return true;
		}

		public function login()
		{
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->redirect($this->Auth->redirect());
				} else {
					$this->Session->setFlash('Su usuario y/o password son incorrectos');
				}	
			}

            $this->layout = 'dandelion/login';
			
		}

		public function logout()
		{
			$this->redirect($this->Auth->logout());
		}
		

		public function index(){
			$this->set('users', $this->User->find('all'));
		}

		public function view($id = null){
			
			$this->User->id = $id;

			if (!$this->User->exists()) {
				throw new NotFoundException("Invalid User");
			}

			$this->set('user', $this->User->read());
		}

		public function add(){
			if($this->request->is('post')){
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash('Your user has been saved.');
					$this->redirect(array('action' => 'index')); 
				}else{
					$this->Session->setFlash('error');
				}
			}
		}

		public function edit($id=null)
		{
			$this->User->id = $id;
			if($this->request->is('get')){
				$this->request->data = $this->User->read();
			}else{
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash('Your post has been updated.');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		public function delete($id)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowException();				
			}
			if ($this->User->delete($id)) {
				$this->Session->setFlash('El usuario con id: '.$id.' ha sido borrado.');
				$this->redirect(array('action'=>'index'));
			}
		}
	}