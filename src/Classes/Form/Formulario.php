<?php

namespace Classes\Form;
use Classes\Form\Interfaces\FieldsetInterface;
use Classes\Form\Interfaces\FormularioInterface;

class Formulario implements FormularioInterface{

    public $action;
    public $method;
    public $input = array();


    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


    public function getAction()
    {
        return $this->action;
    }


    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }


    public function getMethod()
    {
        return $this->method;
    }

    public function createField(FieldsetInterface $input)
    {
        $this->input[] = $input->create();
    }

    public function getInput()
    {
        return $this->input;
    }

    public function render()
    {

        $form = "<form";

        if($this->getAction()){
            $form .= " action =\"{$this->getAction()}\" ";
        }

        if($this->getMethod()){
            $form .= " method =\"{$this->getMethod()}\" ";
        }

        $form .= ">\n";

       if(is_array($this->getInput())){
           foreach($this->getInput() as $input){
               $form .= $input.'</br>';
           }
       }


        $form .= "\t </form>\n";

        return $form;

    }


} 