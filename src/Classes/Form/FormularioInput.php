<?php

namespace Classes\Form;
use Classes\Form\Interfaces\FormularioInputInterface;


class FormularioInput implements FormularioInputInterface{
    public $tipo;
    public $name;
    public $value;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }


    public function getValue()
    {
        return $this->value;
    }

    public function conteudoInput(){
        $input = '<input type="'.$this->getTipo().'" value="'.$this->getValue().'" name="'.$this->getName().'" />';
        return $input;
    }

} 