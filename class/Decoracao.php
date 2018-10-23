<?php

class Decoracao {

	private $id;
	private $nomItemDecor;
	private $valor;
	private $quant;
	private $tipo;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNomItemDecor() {
		return $this->nomItemDecor;
	}

	public function setNomItemDecor($nomItemDecor) {
		$this->nomItemDecor = $nomItemDecor;
	}

	public function getValor() {
		return $this->valor;
	}

	public function setValor($valor) {
		$this->valor = $valor;
	}

	public function getQuant() {
		return $this->quant;
	}

	public function setQuant($quant) {
		$this->quant = $quant;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

}

?>