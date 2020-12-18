<?php

class Login {
	private $email;
	private $senha;
	private $nome;

	// construct 
	public function __construct($email, $senha, $nome) {
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function getNome() {
		return $this->nome;
	}

	// getters and setters (para atributos privados)
	public function getEmail() {
		return $this->email;
	}

	public function setEmail($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL); //filtrar email
		$this->email = $email;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($s) {
		$this->senha = $s;
	}

	public function Logar() {
		if ($this->email == "teste@gmail.com" and $this->senha == "12345"):
			echo "Logado";
		else:
			echo "Erro";
		endif; 
	}
}

$logar = new Login("teste@gmail.com", "12345", "Felipe");
$logar->Logar();
echo "<br>";

echo $logar->getNome();