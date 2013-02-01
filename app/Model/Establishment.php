<?php

class Establishment extends AppModel
{
	public $hasMany = array('Vacancy');
	public $belongsTo = array('Network');
}

?>