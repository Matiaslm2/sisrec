<?php
@session_start();

if(isset($_SESSION["Nome"])){
    //um utilizador ligado no sistema
    $nome=$_SESSION["Nome"];
    $imagem=$_SESSION["Imagem"];
    $menu='<a class="dropdown-item" href="/logout.php">Logout</a>';
}else{
    //um utilizador desligado no sistema
    $nome="";
    $imagem="/imagens/user.png";
    $menu='<a class="dropdown-item" href="/login.html">Login</a>';

}
?>