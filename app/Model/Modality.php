<?php
	/**
	* Modality
	*/
	class Modality extends AppModel
	{
		public $name = 'Modality';
		public $hasMany = 'Specialty';
	}
?>