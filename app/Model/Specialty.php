<?php
	/**
	* Specialty
	*/
	class Specialty extends AppModel
	{
		public $name = 'Specialty';
		public $hasMany = 'SpecialtyMembership';
		public $belongsTo = 'Modality';

	}
