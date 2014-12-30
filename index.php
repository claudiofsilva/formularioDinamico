<?php
require_once 'autoload.php';

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

use Classes\Form\Fieldset\FormularioInput;
use Classes\Form\Formulario;
use Classes\Form\Fieldset\FormularioOption;
use Classes\Form\Fieldset\FormularioSelect;
use Classes\Form\Fieldset\FormularioTextarea;
use Classes\Form\Fieldset\FormularioLegend;
use Classes\Form\Fieldset\FormularioFieldset;

$formulario = new Formulario();

$formulario->setAction('teste')->setMethod('post');

$legend = new FormularioLegend();
$legend->setValue('Formulário Dinâmico');

$formulario->createField($legend);

$input = new FormularioInput();
$input->setValue('valor1')->setName('name1')->setType('input');

$input2 = new FormularioInput();
$input2->setValue('valor2')->setName('name2')->setType('input');

$formulario->createField($input);
$formulario->createField($input2);

$select = new FormularioSelect();
$select->setName('time');

$option = new FormularioOption();
$option->setValue(1)->setInnerText("Escolha:");

$option2 = new FormularioOption();
$option2->setValue(2)->setInnerText('Palmeiras');

$select->addOption($option)->addOption($option2);
$formulario->createField($select);

$textarea = new FormularioTextarea();
$textarea->setName('textarea')->setRow(4)->setCols(40);

$formulario->createField($textarea);

$input3 = new FormularioInput();
$input3->setName('enviar')->setType('submit')->setValue('enviar');
$formulario->createField($input3);

$fieldset = new FormularioFieldset($formulario->getField());

$formulario->addFieldset($fieldset);

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