<?php


require_once('classes/Certidao.php');
require_once('classes/Contrato1.php');
require_once('classes/Contavel.php');
require_once('classes/Documento.php');
require_once('classes/CompraVenda.php');
require_once('classes/Casamento.php');
require_once('classes/Nascimento.php');
require_once('classes/Obito.php');
require_once('classes/Propriedade.php');
require_once('classes/Servico.php');
require_once('classes/Trabalho.php');


$casamento1 = new Casamento('Casamento','20/04/2020','ANderson','CArtorio Nacional');

$casamento1->setNomePessoa('JoaoCArlos');
$casamento1->setNomePessoa('Ana');
$casamento1->setNomeDeclarante('Sergiao');


echo $casamento1->getNomePessoa().'<br>';
echo $casamento1->getNomeDeclarante().'<br>';
echo $casamento1->getTipo().'<br>';
echo $casamento1->getData().'<br>';
echo $casamento1->getNomeTabeliao().'<br>';
echo $casamento1->getNomeCartorio().'<br>';


$Compra1 = new CompraVenda('CompraVenda','23/09/2020','24/09/2020','jonas','jaraguas cartorio');

$Compra1->setNomePartes('Jorel');
$Compra1->setNomeTestemunhas('Sergiao');

echo $Compra1->getNomePartes().'<br>';
echo $Compra1->getNomeTestemunhas().'<br>';
echo $Compra1->getContratoFirmado().'<br>';
echo $Compra1->getDataEmissao().'<br>';
echo $Compra1->getDataRegistro().'<br>';
echo $Compra1->getNomeTabeliao().'<br>';
echo $Compra1->getNomeCartorio().'<br>';

$documento1 = new Documento();

$documento1->adicionarRegistravel($Compra1);


$documento1->registrarTodos();


