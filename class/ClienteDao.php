<?php 

class ClienteDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaClientes() {

		$clientes = array();
		$query = "select * from cliente";
		$resultado = mysqli_query($this->conexao, $query);

		while($cliente_array = mysqli_fetch_assoc($resultado)) {

			$cliente = new Cliente();
			$cliente->setId($cliente_array['id']);
			$cliente->setNome($cliente_array['nome']);
			$cliente->setClasse($cliente_array['classe']);
			$cliente->setBairro($cliente_array['bairro']);
			$cliente->setCidade($cliente_array['cidade']);
			$cliente->setLogradouro($cliente_array['logradouro']);
			$cliente->setTel1($cliente_array['tel1']);
			$cliente->setTel2($cliente_array['tel2']);
			$cliente->setRamal1($cliente_array['ramal1']);
			$cliente->setRamal2($cliente_array['ramal2']);
			$cliente->setCel1($cliente_array['cel1']);
			$cliente->setCel2($cliente_array['cel2']);
			$cliente->setObs($cliente_array['obx']);
			$cliente->setIdVendedor($cliente_array['id_vendedor']);
			$cliente->setCpf($cliente_array['cpf']);
			$cliente->setUf($cliente_array['uf']);
			$cliente->setCep($cliente_array['cep']);
			$cliente->setNuref($cliente_array['nuref']);
			$cliente->setCnpj($cliente_array['cnpj']);
			$cliente->setIe($cliente_array['ie']);
			$cliente->setBairroCom($cliente_array['bairro_com']);
			$cliente->setCidadeCom($cliente_array['cidade_com']);
			$cliente->setLogradouroCom($cliente_array['logradouro_com']);
			$cliente->setUfCom($cliente_array['uf_com']);
			$cliente->setCepCom($cliente_array['cep_com']);
			$cliente->setTel3($cliente_array['tel3']);

			array_push($clientes, $cliente);
		}

		return $clientes;
	}

	function insereCliente(Cliente $cliente) {

		$query = "INSERT INTO `cliente` (`id`, `nome`, `classe`, `bairro`, `cidade`, `logradouro`, `tel1`, `tel2`, `ramal1`, `ramal2`, `cel1`, `cel2`, `obs`, `id_vendedor`, `cpf`, `uf`, `cep`, `nuref`, `cnpj`, `ie`, `bairro_com`, `cidade_com`, `logradouro_com`, `uf_com`, `cep_com`, `tel3`) VALUES (NULL, '{$cliente->getNome()}', '{$cliente->getClasse()}', '{$cliente->getBairro()}', '{$cliente->getCidade()}', '{$cliente->getLogradouro()}', '{$cliente->getTel1()}', '{$cliente->getTel2()}', '{$cliente->getRamal1()}', '{$cliente->getRamal2()}', '{$cliente->getCel1()}', '{$cliente->getCel2()}', '{$cliente->getObs()}', {$cliente->getIdVendedor()}, '{$cliente->getCpf()}', '{$cliente->getUf()}', '{$cliente->getCep()}', '{$cliente->getNuref()}', '{$cliente->getCnpj()}', {$cliente->getIe()}'', '{$cliente->getBairroCom()}', '{$cliente->getCidadeCom()}', '{$cliente->getLogradouroCom()}', '{$cliente->getUfCom()}', '{$cliente->getCepCom()}', '{$cliente->getTel3()}')";

		error_log($query);
		return mysqli_query($this->conexao, $query);
	}

	function removeCliente($id) {

		$query = "delete from cliente where id = {$id}";

		return mysqli_query($this->conexao, $query);
	}
}

?>