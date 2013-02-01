<?php
	/**
	* Phase
	*/
	class Phase extends AppModel
	{
		public $name = 'Phase';
		public $hasMany = 'SpecialtyMembership';
	}
