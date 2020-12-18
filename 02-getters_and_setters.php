<?php

class Login {
	private $email;
	private $senha;

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

$logar = new Login();
$logar->setEmail("teste@gmail.com");
$logar->setSenha("12345");
$logar->Logar();
echo "<br>";

echo $logar->getEmail();