<?php 

require_once("config.php");

//imprime só um usuario
//$root = new Usuario();
//$root->loadById(10);
//echo $root;

//imprime uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//imprime uma lista de usuarios com base na inicial do nome
//$like = Usuario::search("ro");
//echo json_encode($like);

//imprime o login de um usuario com base o seu login e senha
//$entra = new Usuario();
//$entra->login("root", "budunha");
//echo $entra;

//insert de um usuario novo
//$aluno = new Usuario("aluno5", "12345");
//$aluno->insert();
//echo $aluno;

//Alterando as configurações na base de dados
//$usuario = new Usuario();
//$usuario->loadById(21);
//$usuario->update("Madara", "ah94hfr9");
//echo $usuario;

//Deletando os dados da base de dados
$usuario = new Usuario();
$usuario->loadById(22);
$usuario->delete();
echo $usuario;

 ?>