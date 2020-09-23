<?php

class Documento
{
    private $lista1;

    public function adicionarRegistravel(Contavel $contavel ) //adicionar objeto inteiro (contrato ou certidao) na lista pra registro
    {
        $this->lista1[] = $contavel;
    }

    public function registrarTodos()
    {
        foreach($this->lista1 as $listas){      //registrar todos os documentos adiconados
            $listas->registrar();
        }

    }


}



