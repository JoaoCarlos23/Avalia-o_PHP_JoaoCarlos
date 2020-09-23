
<?php


abstract class Contrato1
{
    protected $registro;
    protected $nomePartes;
    protected $nomeTestemunhas;
    protected $contratoFirmado;
    protected $dataEmissao;
    protected $dataRegistro;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    public static $contador2;


    public function __construct($contratoFirmado,$dataEmissao,$dataRegistro,$nomeTabeliao,$nomeCartorio)
    {
        self::$contador2++;

        $this->registro = self::$contador2; //aqui mostra a quantidade de contratos gerados
        $this->contratoFirmado = $contratoFirmado;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }

  

    public function getNomePartes()
    {  //aqui puxa os nomes das partes envolvidas
        
        foreach($this->nomePartes as $partes)
        {
            echo $partes.',';
        }

	}

    public function setNomePartes($nomePartes)
    { //adiciona partes envolvidas
		$this->nomePartes[] = $nomePartes;
	}

    public function getNomeTestemunhas()
    {
        foreach($this->nomeTestemunhas as $testemunha)
        {
            echo $testemunha.',';
        }
	}

    public function setNomeTestemunhas($nomeTestemunhas)
    {
		$this->nomeTestemunhas[] = $nomeTestemunhas;
	}

    public function getContratoFirmado()
    {
		return $this->contratoFirmado;
	}

    public function setContratoFirmado($contratoFirmado)
    {
		$this->contratoFirmado = $contratoFirmado;
	}

    public function getDataEmissao()
    {
		return $this->dataEmissao;
	}

    public function setDataEmissao($dataEmissao)
    {
		$this->dataEmissao = $dataEmissao;
	}

    public function getDataRegistro()
    {
		return $this->dataRegistro;
	}

    public function setDataRegistro($dataRegistro)
    {
		$this->dataRegistro = $dataRegistro;
	}

    public function getNomeTabeliao()
    {
		return $this->nomeTabeliao;
	}

    public function setNomeTabeliao($nomeTabeliao)
    {
		$this->nomeTabeliao = $nomeTabeliao;
	}

    public function getNomeCartorio()
    {
		return $this->nomeCartorio;
	}

    public function setNomeCartorio($nomeCartorio)
    {
		$this->nomeCartorio = $nomeCartorio;
	}



}













