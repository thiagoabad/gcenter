<?php 

class FormadepgtoDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaFormadepgto() {

		$formadepgtos = array();
		$query = "select * from formadepgto";
		$resultado = mysqli_query($this->conexao, $query);

		while($formadepgto_array = mysqli_fetch_assoc($resultado)) {

			$formadepgto = new Formadepgto();
			$formadepgto->setId($formadepgto_array['id']);
			$formadepgto->setNomForma($formadepgto_array['nom_forma']);

			array_push($formadepgtos, $formadepgto);
		}

		return $formadepgtos;
	}

	function insereFormadepgto(Formadepgto $formadepgto) {

		$query = "insert into formadepgto (id, nom_forma, usrins, usralt, dtins, dtalt) 
					values (NULL, '{$formadepgto->getNomForma()}', '', '', NULL, NULL)";

		return mysqli_query($this->conexao, $query);
	}

	function removeFormadepgto($id) {

		$query = "delete from formadepgto where id = {$id}";

		return mysqli_query($this->conexao, $query);
	}
}

?>