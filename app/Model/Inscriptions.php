<?php
/**
* 
*/
class Inscriptions extends AppModel
{
	public $belongsTo = array('Phase', 'Establishment', 'Profession', 'Person');
}
?>