<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 24/10/14
 * Time: 20:31
 */

namespace Classes\Form\Interfaces;


interface FormularioInputInterface {
    /*
     * tipo
     * name
     * value
     * */

    public function setTipo($tipo);
    public function getTipo();
    public function setName($name);
    public function getName();
    public function setValue($value);
    public function getValue();
    public function conteudoInput();

} 