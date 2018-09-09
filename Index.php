<?php 

require_once ("config.php");

/*Carrega apenas 1 usuario

$user = new Usuario();
$user->loadById(3);
echo $user;

*/

/*

Carrega uma lista de usuarios

$lista = Usuario::getList();

echo json_encode($lista);

*/

/*

Lista usuario pelo login

$search = Usuario::search('jo');

echo json_encode($search);


*/

$login = new Usuario();

$login->login("JJ Token","senhordosaneis");

echo $login;

?>