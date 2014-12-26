<?php

namespace Classes\Form\Fieldset;


use Classes\Form\Interfaces\FieldsetInterface;

class FormularioFieldset implements FieldsetInterface{

    public $name;
    public $type;
    public $value;
    public $legend;

    /**
     * @param mixed $legend
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLegend()
    {
       if($this->legend){
           return '<legend>'.$this->legend.'</legend>';
       }

       return false;

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return false;
    }

    /**
     * @return false
     */
    public function getValue()
    {
        return false;
    }

    public function create(){
        foreach($this->getType() as $type){
            return $type.' '.($this->getLegend() ? $this->getLegend() : '');
        }

    }
} 