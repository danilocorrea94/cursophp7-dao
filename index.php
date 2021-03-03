<?php 

require_once("config.php");

$root = new Usuario();

//carrega um usuário
//$root->loadbyId(3);
// mostra os dados da tabela com um toString na classe do usuario
// echo $root;

// Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("da");
//echo json_encode($search);


// Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("user", "12345");

echo $usuario;
 ?>