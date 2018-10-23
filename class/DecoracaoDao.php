<?php 

class DecoracaoDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaDecoracoes() {

		$decoracoes = array();
		$query = "select * from itens_decor";
		$resultado = mysqli_query($this->conexao, $query);

		while($decoracao_array = mysqli_fetch_assoc($resultado)) {

			$decoracao = new Decoracao();
			$decoracao->setId($decoracao_array['id']);
			$decoracao->setNomItemDecor($decoracao_array['nom_item_decor']);
			$decoracao->setValor($decoracao_array['valor']);
			$decoracao->setQuant($decoracao_array['quant']);
			$decoracao->setTipo($decoracao_array['tipo']);

			array_push($decoracoes, $decoracao);
		}

		return $decoracoes;
	}

	function insereDecoracao(Decoracao $decoracao) {

		$query = "insert into itens_decor (id, nom_item_decor, valor, quant, tipo) 
					values (NULL, '{$decoracao->getNomItemDecor()}', '{$decoracao->getValor()}', '{$decoracao->getQuant()}', '{$decoracao->getTipo()}')";

		return mysqli_query($this->conexao, $query);
	}

	function removeDecoracao($id) {

		$query = "delete from itens_decor where id = {$id}";

		return mysqli_query($this->conexao, $query);
	}
}

?>