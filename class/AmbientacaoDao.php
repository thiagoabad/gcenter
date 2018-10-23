<?php 

class AmbientacaoDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaAmbientacoes() {

		$ambientacoes = array();
		$query = "select * from ambientacao";
		$resultado = mysqli_query($this->conexao, $query);

		while($ambientacao_array = mysqli_fetch_assoc($resultado)) {

			$ambientacao = new Ambientacao();
			$ambientacao->setId($ambientacao_array['id']);
			$ambientacao->setDescricao($ambientacao_array['descricao']);
			$ambientacao->setValor($ambientacao_array['valor']);

			array_push($ambientacoes, $ambientacao);
		}

		return $ambientacoes;
	}

	function insereAmbientacao(Ambientacao $ambientacao) {

		$query = "insert into ambientacao (id, descricao, valor) 
					values (NULL, '{$ambientacao->getDescricao()}', '{$ambientacao->getValor()}')";

		return mysqli_query($this->conexao, $query);
	}

	function removeAmbientacao($id) {

		$query = "delete from ambientacao where id = {$id}";

		return mysqli_query($this->conexao, $query);
	}

}

?>