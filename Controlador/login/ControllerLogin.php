<?php 
    if (isset($_POST["usu"]) && isset($_POST["pass"])) {
        require("../../Modelo/login/ModelLogin.php");
        $validar = new Login();
        $validar->validarDatos($_POST["usu"], $_POST["pass"]);
    } else {
        header("location:../Index.php");
    }
?>