
<?php


abstract class Certidao
{
    protected $registro;
    protected $nomePessoa;
    protected $nomeDeclarante;
    protected $tipo;
    protected $data;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    public static $contador;

    public function __construct($tipo,$data,$nomeTabeliao,$nomeCartorio)
    {
        self::$contador++;

        $this->registro = self::$contador; //aqui mostra a quantidade de certidoes emitidas
        $this->tipo = $tipo;
        $this->data = $data;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }

	public function getRegistro()
	{
		return $this->registro;
	}

	public function setRegistro($registro)
	{
		$this->registro = $registro;
	}

	public function getNomePessoa()
	{ //Pegando os nomes das partes e mostrando
        
        foreach($this->nomePessoa as $pessoa){
            echo $pessoa.',';
        }

	}

	public function setNomePessoa($nomePessoa)
	{ //inserindo o nome das partes no array
		$this->nomePessoa[] = $nomePessoa;
	}

	public function getNomeDeclarante()
	{

		foreach($this->nomeDeclarante as $declarante)
		{
            echo $declarante.',';
        }
		
	}

	public function setNomeDeclarante($nomeDeclarante)
	{
		$this->nomeDeclarante[] = $nomeDeclarante;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData($data)
	{
		$this->data = $data;
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








