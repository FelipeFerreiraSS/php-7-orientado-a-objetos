<?php

class Login {
	public static $user;

	public static function verificaLogin() {
		echo "O usúario ".self::$user." está logado!";
	}

	public function sairSistema(){
		echo "O usuario deslogou!";
	}
}

// Com metodos estaticos não é nessesario istanciar a class
// O $this não funciona com atributos estaticos use self::

Login::$user = "admin";
Login::verificaLogin();

$login = new Login();
$login->sairSistema();