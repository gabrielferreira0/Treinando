<?php
if (isset($_POST["rq"])) {
    session_start();
    $request = $_POST["rq"];
    switch ($request) {
        case 'cadastrar':
            require_once 'Cadastrar.php';
            $loadClass = new Cadastrar();
            echo $loadClass->setUser();
            break;
        case 'login':
            require_once 'Login.php';
            $loadClass = new Login();
            echo $loadClass->logar();
            break;
        case 'update':
            require_once 'Atualizar.php';
            $loadClass = new Atualizar();
            echo $loadClass->update();
            break;
        case 'delete':
            require_once 'Deletar.php';
            $loadClass = new Deletar();
            echo $loadClass->delete();
            break;
        case 'deslogar':
            require_once 'Deslogar.php';
            $loadClass = new Deslogar();
            echo $loadClass->deslogar();
            break;
    }
}
?>
