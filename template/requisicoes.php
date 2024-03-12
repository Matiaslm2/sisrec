<?php include("mostralogin.php");?>


<?php include("../ligacao.php");?>

<?php 
//print_r($_COOKIE);
if(isset($_COOKIE)){
    $lnc=count($_COOKIE)-2;
}  else{
   
    $lnc=0;
}        
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Requisições</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/template/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Header-->
        <style>
    .custom-header {
        background-image: url(imgs/fundo.jpg);
        background-size: cover;
        background-position: center;
        color: white; /* Define a cor do texto para branco para garantir a legibilidade */
        padding: 50px 0; /* Adiciona algum espaço interno ao header para o conteúdo */
    }
</style>

<header class="custom-header">
    <div class="container px-4 px-lg-5">
        <div class="text-center">
            <h1 class="display-4 fw-bolder">Requisições Monserrate</h1>
        </div>
    </div>      
</header>
<style>
    .round-image {
        border-radius: 50%; /* Define a borda redonda */
        width: 35%; /* Define a largura desejada */
    }
</style>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
             
            </div></div>
              <div class="col-md-1">
                    <a class="navbar-brand" href="index.php"><img class="navbar-brand-item light-mode-item" src="https://www.esmonserrate.org/images/esm_174.png" width="100%" alt="logo"> </a>
                </div>
                
                <div class="col-md-10">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <div class="col-md-1">

                            </div>

                            <div class="col-md-1">

                            </div>

                            <div class="col-md-1">

                            </div>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                            <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        
                            <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                            <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        
                            <li class="nav-item"><a class="nav-link" href="index.php">Requisições</a></li>
                            <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>
                        </ul>
                
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                    <form class="d-flex">
                    <input name="procurar" class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search"></i>
                    </button>
                        </form>
                        </div>
                        </nav>
                        <form class="d-flex" action="carrinho.php">
                            <button class="btn btn-outline-dark" type="button" onclick="window.location='carrinho.php'">
                                <i class="bi-cart-fill me-1"></i>
                                Carrinho
                                <span class="badge bg-dark text-white ms-1 rounded-pill"><?=$lnc?></span>
                            </button>
                        </form>


                <div class="dropdown">
                <!-- Botão de dropdown -->
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- Ícone de imagem -->
                    <img class="navbar-brand-item light-mode-item round-image" src="<?=$imagem?>" width="30%">
                </button>
                <!-- Menu dropdown -->
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Links do menu dropdown -->
                    <?=$nome;?>
                    <br>
                    <?=$menu?>

                </div>
            </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5 t-3">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                <?php
                if (isset($_REQUEST['procurar'])) {
                    $pesquisa=$_REQUEST['procurar']; 
                } else {
                    $pesquisa="vazio";
                }
 
                $sql = "SELECT `CodLivros`,`Titulo`,`Capa`,`ISBN`,`Disponibilidade` FROM `Livros` where Titulo like '%".$pesquisa."%' ORDER BY DataPublicacao DESC LIMIT 16 ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                ?>
                <div class="col-md-3 mt-4">
                    <div class="card text-dark" style="width:100%">
                    <?php

                    if (($row["ISBN"]!="") && (file_exists("../imagens/livros/".$row['ISBN'].".jpg"))){
                        ?>
                        <img class="card-img-top" src="../imagens/livros/<?=$row['ISBN']?>.jpg" alt="<?=$row['Titulo']?>">
                        <div class="card-img-overlay">
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <?php 
                    }else {
                        ?>
                        <img class="card-img-top" src="../imagens/SemCapa2.jpg" alt="Card image">
                        <div class="card-img-overlay">
                        
                        <p><?=$row['Titulo']?></p>
                        <!--br><br><br><br><br-->
                        <?php
                    }
                        ?>  
                        
                        
                        
                       
                        </div>
                        <div class="card-footer ">
                        <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" onclick='carregaModal("<?=$row["Titulo"];?>","<?=$row["ISBN"];?>","../imagens/livros/<?=$row["ISBN"]?>.jpg", "<?=$row["Disponibilidade"];?>")'>Ver +</button>
                        <button type="button"  class="btn btn-primary" onclick="GuardaLivro('<?=$row['CodLivros']?>')">Adicionar</button>
                        </div>
                    </div>          
                </div>


            <?php

            }
        }

        ?>

                </div>
            </div>
        </section>
        <!-- Modal -->
        <!-- The Modal -->
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="mISBN">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p id="mTitulo"></p>

        <p id="mdisp"></p>
        <img src="" id="mImagem">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!--button type="button"  class="btn btn-success" onclick="GuardaLivro('<?=$row['CodLivros']?>')">Adicionar</button-->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script>

function carregaModal(titulo,ISBN,imagem,disp){
    document.getElementById("mTitulo").innerHTML=titulo;
    document.getElementById("mISBN").innerHTML="ISBN: "+ ISBN;
    document.getElementById("mdisp").innerHTML=disp;
    document.getElementById("mImagem").src=imagem;

    
    //alert(titulo)
}    


        </script>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/templates/adminBSB/js/script.js"></script>

        <script>
        function GuardaLivro(CodLivro){

            //const livro = document.getElementById("livro").value;

                url="guardaCookie.php?l=" + CodLivro
                //alert(url)
                fetch(url)
        
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </body>

</html>
