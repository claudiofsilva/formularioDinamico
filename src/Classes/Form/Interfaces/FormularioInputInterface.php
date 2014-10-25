<?php

namespace Classes\Form\Interfaces;


interface FormularioInputInterface {

    public function setTipo($tipo);
    public function getTipo();
    public function setName($name);
    public function getName();
    public function setValue($value);
    public function getValue();
    public function conteudoInput();

} 