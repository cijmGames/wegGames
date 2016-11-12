<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $email;
	private $senha;
	private $rsenha;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}


	public function setRsenha($rsenha){
		$this->rsenha = $rsenha;
	}

	public function getRsenha(){
		return $this->rsenha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}



	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email, senha, rsenha) VALUES (:nome, :email, :senha, :rsenha)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':rsenha', $this->rsenha);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, email = :email, senha = :senha, :rsenha = rsenha WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':rsenha', $this->rsenha);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}