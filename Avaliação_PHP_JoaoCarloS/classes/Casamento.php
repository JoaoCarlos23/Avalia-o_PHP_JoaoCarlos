
<?php

final class Casamento extends Certidao implements Contavel
{

    public function __construct($tipo,$data,$nomeTabeliao,$nomeCartorio)
    {
        parent::__construct($tipo,$data,$nomeTabeliao,$nomeCartorio);
    }

    public function registrar()
    {
        echo 'Documento Casamento registrado';
        echo $this->registro;
        echo $this->nomeCartorio;
        echo $this->nomeTabeliao;
    }

}
