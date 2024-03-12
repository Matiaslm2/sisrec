<?php
$livro=$_REQUEST['l'];
if(isset($_REQUEST['t'])){
    $t=time() - 3600;
}else{
    $t=time() + (86400 * 30);
}
setcookie("cl".$livro, $livro, $t, "/"); // 86400 = 1 day

?>