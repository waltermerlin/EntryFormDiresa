<?php
/**
* 
*/
class InscriptionsController extends AppController
{
	public $layout = 'bootstrap/public';

	public function add()
	{
		if ($this->request-is('post')) {
			if ($this->Inscription->saveAssociated($this->request->data)) {
				$this->Session->setFlash(
					array('message' => 'Su inscripcion ha sido realizada exitosamente.','type' => 'alert-success'),
					'bootstrap_message'
				);
			} else {
				$this->Session->setFlash(
					array('message' => 'Ha ocurrido un error, vuelve a intentarlo.','type' => 'alert-error'),
					'bootstrap_message'
				);
			}
		}
	}

	public function show_result($value='')
	{
			
	}

	public function printForm($value='')
	{
		
	}
}
?>