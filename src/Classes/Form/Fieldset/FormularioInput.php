<?php

namespace Classes\Form\Fieldset;
use Classes\Form\Interfaces\FieldsetInterface;

class FormularioInput implements FieldsetInterface{

    public $type;
    public $name;
    public $value;
    public $values = array();

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValues()
    {
        $this->values[] = array('type' => $this->getType(),
                                'value' => $this->getValue(),
                                'name' => $this->getName());

        return $this->values;
    }


    public function getValue()
    {
        return $this->value;
    }

    public function create(){

           foreach($this->getValues() as $valores)
           {
               $input = "<input type=".$valores['type']." name=".$valores['name']. " value=".$valores['value']. " >";
           }

           return $input;

    }

} 