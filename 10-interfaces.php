<?php

// defini o medelo a ser usado por outras class (é um "contrato" que obriga as class a implementar os mesmos metodos) 
//(metodos da interface tem q ser publicos)
//(so passar parametros quando nessesario)

interface Crud {
	public function create($data);
	public function read();
	public function update();
	public function delete();
}

class Noticias implements Crud {

	public function create($data) {
		//Logica para criar
	}

	public function read() {
		//Logica para ler
	}

	public function update() {
		//Logica para atulizar
	}

	public function delete() {
		//Logica para deletar
	}
}