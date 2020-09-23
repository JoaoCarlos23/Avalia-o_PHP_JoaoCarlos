

<?php


final class CompraVenda extends Contrato1 implements Contavel
{

    public function __construct($contratoFirmado,$dataEmissao,$dataRegistro,$nomeTabeliao,$nomeCartorio)
    {
        parent::__construct($contratoFirmado,$dataEmissao,$dataRegistro,$nomeTabeliao,$nomeCartorio);

    }

    public function registrar()
    {
        echo 'Documento Compra registrado';
        echo $this->registro;
        echo $this->nomeCartorio;
        echo $this->nomeTabeliao;
    }


}




