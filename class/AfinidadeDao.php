<?php 

class AfinidadeDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaAfinidades() {

		$afinidades = array();
		$query = "select * from afinidades";
		$resultado = mysqli_query($this->conexao, $query);

		while($afinidade_array = mysqli_fetch_assoc($resultado)) {

			$afinidade = new Afinidade('', '');
			$afinidade->setId($afinidade_array['id']);
			$afinidade->setNome($afinidade_array['nome']);

			array_push($afinidades, $afinidade);
		}

		return $afinidades;
	}

	function insereAfinidade(Afinidade $afinidade) {

		$query = "insert into afinidades (id, nome) 
					values (NULL, '{$afinidade->getNome()}')";

		return mysqli_query($this->conexao, $query);
	}

	function removeAfinidade($id) {

		$query = "delete from afinidades where id = {$id}";

		return mysqli_query($this->conexao, $query);
	}
}

?>