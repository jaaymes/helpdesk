<?php 

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
//usuarios do sistema
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

$usuarios_app = array(
    array('id' => 1, 'email' => 'jaaymes@gmail.com', 'senha' => '123', 'perfil_id' => 1),
    array('id' => 2, 'email' => '1@1.com', 'senha' => '1', 'perfil_id' => 2),
    array('id' => 3, 'email' => '2@2.com', 'senha' => '2', 'perfil_id' => 2),
);



foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    } 
    if($usuario_autenticado){
       header("Location: home.php?login=success");
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        $_SESSION['id'] = $usuario_id;
    } else {
       header("Location: index.php?login=error");
        $_SESSION['autenticado'] = 'NAO';
    }
}