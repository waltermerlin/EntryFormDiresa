<?php
    /*-----------------------------------------*/
    /*  Bootstrap WhiteForm Module Css  v 1.0  */
    /*-----------------------------------------*/
    
    App::uses('AppHelper', 'View/Helper');

    class WhiteFormHelper extends AppHelper {
        public $helpers = array('Html', 'Form');

        public function input($name, $label = null, $options = array()) {
            // Use the HTML helper to output
            $h_label = '';
            
            // default options:
            $options['label'] = false;
        	$options['div'] = false;
            $options['required'] = 'required';

            if (empty($label)) {
            	$h_label = '';
            }else{
            	$h_label = '<label>' . $label . '</label>';
            }

            $input = $this->Form->input($name, $options);

            $html  = '<div class="form-row">';
       		$html .= $h_label;
            $html .= '<div class="form-item">';
            $html .= $input;
            $html .= '</div>';
            $html .= '</div>';

            return  $html;
        }

        public function date($name, $label = null, $options = array()) {
            // Use the HTML helper to output
            $h_label = '';
            
            // default options:
            $options['label'] = false;
            $options['div'] = false;
            $options['type'] = 'text';

            

            $options['id'] = $id = str_replace('.', '-', strtolower($name));

            if (!isset($options['class'])) {
                $options['class'] = 'input-large';
            }

            if (empty($label)) {
                $h_label = '';
            }else{
                $h_label = '<label>' . $label . '</label>';
            }

            $input = $this->Form->input($name, $options);

            $html  = '<div class="form-row">';
            $html .= $h_label;
            $html .= "<div class='input-append form-item '>";
            $html .= $input;
            $html .= '<span class="add-on"><i class="icon-th"></i></span>';
            $html .= '</div>';
            $html .= "<script> 

                        $('#$id').datepicker().on(
                        'changeDate', 
                        function(ev){

                            $('#$id').datepicker('hide')
                                .closest('.form-row')
                                .next('.form-row')
                                .find('select, input, textarea')
                                .first()
                                .focus();
                            }
                        ); 

                    </script>";        
            $html .= '</div>';

            return  $html;

            /*<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                <input class="span2" size="16" type="text" value="12-02-2012">
                <span class="add-on"><i class="icon-th"></i></span>
            </div>*/
        }

        public function submit($name, $options = array()){

            if (!isset($options['class'])) {
                $options['class'] = 'btn btn-primary';
            }else{
                 $options['class'] = 'btn';
            }

            $button = $this->Form->submit($name, $options);
            $html = '<div class="form-actions">' . $button . '</div>';
            return $html;
        }
    }