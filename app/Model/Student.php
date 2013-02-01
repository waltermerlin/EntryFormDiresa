<?php
/**
* Person
*/
class Student extends AppModel
{
	public $name = 'Student';
	public $hasMany = array(
		'ProfessionalTitle' => array(
			'className' => 'ProfessionalTitle', 
			'dependent' => true
			),			
		'SpecialtyMembership' => array(
			'className' => 'SpecialtyMembership', 
			'dependent' => true
			),
		);
	public $hasOne = array(
		'LaborState' => array(
			'className' => 'LaborState', 
			'dependent' => true
			)
		);

	public $validate = array(
			'email' => 'email',
			'birtday' => array(
				'rule'       => 'date',
				'message'    => 'Enter a valid date',
				'allowEmpty' => true
			)
		);
}
