<?php

namespace Classes\Form\Fieldset;


class FormularioFieldset {

    public $fields;

    public function __construct($field){
        $this->fields = $field;
    }

    public function createFieldset(){
        $fieldset = "\t \t <fieldset> \n";

        foreach($this->fields as $fields){
            $fieldset .= " \t \t \t".$fields." \n <br>";
        }

        $fieldset .= " \t \t </fieldset> \n";

        return $fieldset;
    }

} 