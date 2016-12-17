<?php

require_once 'Crud.php';

class Videos extends Crud
{

    protected $table = 'videos';

    private $titulo;
    private $img;
    private $titulo2;
    private $sinospse;
    private $processadorMin;
    private $RamMin;
    private $pVideoMin;
    private $espacoMin;
    private $processadorMax;
    private $RamMax;
    private $pVideoMax;
    private $espacoMax;
    private $video;

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }


    public function getEspacoMax()
    {
        return $this->espacoMax;
    }

    public function setEspacoMax($espacoMax)
    {
        $this->espacoMax = $espacoMax;
    }

    public function getPVideoMax()
    {
        return $this->pVideoMax;
    }

    public function setPVideoMax($pVideoMax)
    {
        $this->pVideoMax = $pVideoMax;
    }

    public function getRamMax()
    {
        return $this->RamMax;
    }

     public function setRamMax($RamMax)
    {
        $this->RamMax = $RamMax;
    }

    public function getProcessadorMax()
    {
        return $this->processadorMax;
    }

    public function setProcessadorMax($processadorMax)
    {
        $this->processadorMax = $processadorMax;
    }

    public function getEspacoMin()
    {
        return $this->espacoMin;
    }

    public function setEspacoMin($espacoMin)
    {
        $this->espacoMin = $espacoMin;
    }

    public function getRamMin()
    {
        return $this->RamMin;
    }

    public function setRamMin($RamMin)
    {
        $this->RamMin = $RamMin;
    }

    public function getProcessadorMin()
    {
        return $this->processadorMin;
    }

    public function setProcessadorMin($processadorMin)
    {
        $this->processadorMin = $processadorMin;
    }

    public function getSinospse()
    {
        return $this->sinospse;
    }

    public function setSinospse($sinospse)
    {
        $this->sinospse = $sinospse;
    }

    public function getTitulo2()
    {
        return $this->titulo2;
    }

    public function setTitulo2($titulo2)
    {
        $this->titulo2 = $titulo2;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getPVideoMin()
    {
        return $this->pVideoMin;
    }
    public function setPVideoMin($pVideoMin)
    {
        $this->pVideoMin = $pVideoMin;
    }


    public function insert()
    {

        $sql = "INSERT INTO $this->table (nome, email, senha, rsenha, tipo) VALUES (:nome, :email, :senha, :rsenha, :tipo)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':rsenha', $this->rsenha);
        $stmt->bindParam(':tipo', $this->tipo);
        return $stmt->execute();

    }

    public function update($id)
    {

        $sql = "UPDATE $this->table SET nome = :nome, email = :email, senha = :senha, rsenha = :rsenha, tipo = :tipo WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':rsenha', $this->rsenha);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();

    }

}