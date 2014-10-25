<?php
require_once 'autoload.php';

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

use Classes\Form\Formulario;
use Classes\Form\FormularioInput;

$formulario = new Formulario();
$input = new FormularioInput();
$input2 = new FormularioInput();
$input3 = new FormularioInput();

$formulario->setAction('testeAction')
           ->setMethod('post');
$input->setTipo('text')
      ->setName('input1');

$input2->setTipo('text')
      ->setName('input2');

$input3->setTipo('submit')
       ->setName('enviar')
       ->setValue('Enviar');


$formulario->addInput($input);
$formulario->addInput($input2);
$formulario->addInput($input3);


$form = $formulario->render();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Formulário Dinâmico Designer Patterns
        </title>
    </head>
    <body>
    <?php echo $form; ?>
    </body>
</html>