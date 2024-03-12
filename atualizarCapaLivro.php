<meta http-equiv="refresh" content="5">
<?php

include("ligacao.php"); 
$CodLivros=$_REQUEST['CodLivros'];

//$s=$primeiro*1+100;
//$salto=$primeiro.",".$s;
//echo $salto;

//$sql = "SELECT `CodLivros`,`ISBN` FROM `Livros` WHERE `ISBN`!='' and `Capa`!='../imagens/SemCapa.jpg' AND CodLivros='ESM47055'";
$sql = "SELECT `CodLivros`,`ISBN` , `Titulo` FROM `Livros` WHERE CodLivros=$CodLivros "; //. $salto;
echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br>ISBN: ". $row['ISBN'];
                echo "<br>CodLivros: ". $row['CodLivros'];
                //if(!file_exists('imagens/livros/'.$row['ISBN'].'.jpg')){
                    echo "<br>Não  existe";
                    $website = file_get_contents('https://www.bookfinder.com/isbn/'.$row['ISBN'].'/');



                    $src=explode("bf-content-header-img",$website);
    
                    //echo $src[1];
    
                    //echo $website;
                    //print_r($src);
                    $img='imagens/SemCapa3.jpg';
                    echo "<br>num imag: ". count($src). "<br>"; 
                    if (count($src)>1){
                       $src=explode('src="',$src[1]);
                       //echo $src[1];
                       $src=explode('"',$src[1]);
                       echo "src: " . $src;
                        //$url = 'http://example.com/image.php';
                        $img = 'imagens/livros/'.$row['ISBN'].'.jpg';
                        echo "<br>Imagem: " . $img;
                        file_put_contents($img, file_get_contents($src[0]));
                        //echo $src[0]; 
                        
                    }
                        $conn1 = new mysqli($servername, $username, $password, $db);
                        $sql = "UPDATE Livros SET Capa='/" . $img."' WHERE CodLivros='" . $row['CodLivros']."'";
        
                        echo "<br>". $sql . "<br>";

                        if ($conn1->query($sql) === TRUE) {
                            
                            echo "O novo registo foi atualizado ";
                          } else {
                            echo "Erro: " . $sql . "<br>" . $conn->error;
                          }
                          $conn1->close();

                //}

                
            }
        }




?>

<!--img src="<?=$src[0];?>" alt="Italian Trulli"-->
<!--img class="h1hFNe" alt="isbn:972-1-02850-9 de books.google.com" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="width:64px;height:90px" id="dimg_1" data-deferred="1"-->

<?php
//echo ("Location: http://sisrec.alunos.esmonserrate.org/text.php?p=".$s);
//header("Location: http://sisrec.alunos.esmonserrate.org/text.php?p=".$s);
?>