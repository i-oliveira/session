<?php  
// CONSTANTES DE CONEXÃO
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'bd_session');

// conectar: neste servidor, com este usuario, esta senha, neste banco de dados
$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);

?>