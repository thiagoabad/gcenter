<?php 

class UsuarioDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaUsuarios() {

		$usuarios = array();
		$query = "select * from usuario";
		$resultado = mysqli_query($this->conexao, $query);

		while($usuario_array = mysqli_fetch_assoc($resultado)) {

			$usuario = new Usuario();
			$usuario->setId($usuario_array['id']);
			$usuario->setNome($usuario_array['nome']);
			$usuario->setLogin($usuario_array['login']);

			array_push($usuarios, $usuario);
		}

		return $usuarios;
	}
}

?>