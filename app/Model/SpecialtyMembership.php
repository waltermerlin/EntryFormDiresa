<?php
	/**
	* SpecialtyMembership
	*/
	class SpecialtyMembership extends AppModel
	{
		public $name = 'SpecialtyMembership';

		public $belongsTo = array('Student', 'Specialty', 'Phase');
	}
?>