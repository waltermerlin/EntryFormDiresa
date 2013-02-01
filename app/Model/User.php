<?php
	/**
	* User
	*/
	class User extends AppModel
	{
		public $name = 'User';

		public $validate= array(
			'name' => array(
				'Usuario entre 5 a 10 caracteres.'=>array(
                    'rule'=>array('between',5,15),
                    'message'=>'El Nombre debe tener entre 5 y 10 caracteres'
                )
			),
			'username' => array(
				'between' => array(
						'rule' => array('between', 4, 18),
						'message' => 'El Nombre debe tener entre 4 y 14 caracteres',
				),
				'The useer has ready taken' => array(
					'rule' => 'isUnique',
					'message' => 'The user name has already taken'
					)
			),
			'password' => array(
				'Escriba una contraseña'=>array(
                    'rule'=>'notEmpty',
                    'message'=>'Por favor Ingrese su contraseña.'
                ),
				'between' => array(
						'rule' => array('between', 6, 13),
						'message' => '6-13characters',
				),
				'Match Password' => array(
						'rule' => 'matchPassword',
						'message' => 'Your password do not match'
					)
			),
			'password_confirmation' => array(
				'Confirmacion de Contraseña'=>array(
                    'rule'=>'notEmpty',
                    'message'=>'Por favor Confirme su contraseña.'
                )
			)
		);
		
		public function matchPassword($data)
		{
			if($data['password'] == $this->data['User']['password_confirmation']){
				return true;
			}
			$this->invalidate('password_confirmation', 'Your password do not match');
			return false;
		}

		public function beforeSave($options = array())
		{
			if(isset($this->data['User']['password'])){
				$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
			}
			return true;
		}
	}
