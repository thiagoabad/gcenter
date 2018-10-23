<?php

class Cliente {

	private $id;
	private $nome;
	private $classe;
	private $bairo;
	private $cidade;
	private $logradouro;
	private $tel1;
	private $tel2;
	private $ramal1;
	private $ramal2;
	private $cel1;
	private $cel2;
	private $obs;
	private $idVendedor;
	private $cpf;
	private $uf;
	private $cep;
	private $nuref;
	private $cnpj;
	private $ie;
	private $bairroCom;
	private $cidadeCom;
	private $logradouroCom;
	private $cepCom;
	private $tel3;


	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getClasse() {
		return $this->classe;
	}

	public function setClasse($classe) {
		$this->classe = $classe;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function getLogradouro() {
		return $this->logradouro;
	}

	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}

	public function getTel1() {
		return $this->tel1;
	}

	public function setTel1($tel1) {
		$this->tel1 = $tel1;
	}

	public function getTel2() {
		return $this->nome;
	}

	public function setTel2($tel2) {
		$this->tel2 = $tel2;
	}

	public function getRamal1() {
		return $this->ramal1;
	}

	public function setRamal1($ramal1) {
		$this->ramal1 = $ramal1;
	}

	public function getRamal2() {
		return $this->ramal2;
	}

	public function setRamal2($ramal2) {
		$this->ramal2 = $ramal2;
	}

	public function getCel1() {
		return $this->cel1;
	}

	public function setCel1($cel1) {
		$this->cel1 = $cel1;
	}

	public function getCel2() {
		return $this->cel2;
	}

	public function setCel2($cel2) {
		$this->cel2 = $cel2;
	}

	public function getObs() {
		return $this->obs;
	}

	public function setObs($obs) {
		$this->obs = $obs;
	}

	public function getIdVendedor() {
		return $this->idVendedor;
	}

	public function setIdVendedor($idVendedor) {
		$this->idVendedor = $idVendedor;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function getUf() {
		return $this->uf;
	}

	public function setUf($uf) {
		$this->uf = $uf;
	}

	public function getCep() {
		return $this->cep;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function getNuref() {
		return $this->nuref;
	}

	public function setNuref($nuref) {
		$this->nuref = $nuref;
	}

	public function getCnpj() {
		return $this->cnpj;
	}

	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
	}

	public function getIe() {
		return $this->ie;
	}

	public function setIe($ie) {
		$this->ie = $ie;
	}

	public function getBairroCom() {
		return $this->bairroCom;
	}

	public function setBairroCom($bairroCom) {
		$this->bairroCom = $bairroCom;
	}

	public function getCidadeCom() {
		return $this->cidadeCom;
	}

	public function setCidadeCom($cidadeCom) {
		$this->cidadeCom = $cidadeCom;
	}

	public function getLogradouroCom() {
		return $this->logradouroCom;
	}

	public function setLogradouroCom($logradouroCom) {
		$this->logradouroCom = $logradouroCom;
	}

	public function getUfCom() {
		return $this->ufCom;
	}

	public function setUfCom($ufCom) {
		$this->ufCom = $ufCom;
	}

	public function getCepCom() {
		return $this->cepCom;
	}

	public function setCepCom($cepCom) {
		$this->cepCom = $cepCom;
	}

	public function getTel3() {
		return $this->tel3;
	}

	public function setTel3($tel3) {
		$this->tel3 = $tel3;
	}

}

?>