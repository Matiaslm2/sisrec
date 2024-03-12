<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
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
    <style>
    .custom-header {
        background-image: url(imgs/fundo.jpg);
        background-size: cover;
        background-position: center;
        color: white; /* Define a cor do texto para branco para garantir a legibilidade */
        padding: 50px 0; /* Adiciona algum espaço interno ao header para o conteúdo */
    }
    .center-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        display: none;
    }
    </style>

    <header class="custom-header">
        <div class="container px-4 px-lg-5">
            <div class="text-center">
                <h1 class="display-4 fw-bolder">Carrinho</h1>
            </div>
        </div>      
    </header> 

    <?php include("navcarrinho.php");?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Artigos</h4>
            </div>
    
            <div class="col-md-2">
                <h4>Disponibilidade</h4>
            </div>

            <div class="col-md-2">
                <h4>ID</h4>
            </div>

            <div class="col-md-2">
                <h4>Ação</h4>
                <!--button type="button" aria-label="Close"><i class="bi bi-trash"></i></button-->
            </div>
        </div>
        <div class="row" id="linhasL">
            <?php
            foreach($_COOKIE as $livro){
                $sql = "SELECT `CodLivros`,`Titulo`,`Capa`,`ISBN`,`Disponibilidade` FROM `Livros` where CodLivros='". $livro . "'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-6">
                <h4><?=$row["Titulo"];?></h4>
            </div>
            <div class="col-md-2">
                <h4><?=$row["Disponibilidade"];?></h4>
            </div>
            <div class="col-md-2">
                <h4><?=$livro;?></h4>
            </div>
            <div class="col-md-2">
                <h4></h4>
                <button type="button" aria-label="Close" onclick="ApagaLivro('<?=$livro?>')"><i class="bi bi-trash"></i></button>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <center>
                <button type="submit" id="bgravar" class="btn btn-primary" class="center" onclick="GuardarCabecalho(<?=$_SESSION['Processo'];?>)">Requisitar</button>
                <div class="center-box" id="requisitado">Requisitado</div> <!-- Elemento para exibir "requisitado" -->
            </center>
        </div>
    </div>
</body>

<script>
    function ApagaLivro(CodLivro){
        url="guardaCookie.php?l=" + CodLivro + "&t=1";
        fetch(url)
        setTimeout(function(){
            alert("Livro retirado do Carrinho");
        }, 1000);
        location.reload();
    }

    function GuardarCabecalho(Processo){
        <?php
        foreach($_COOKIE as $nome => $livro){
            if (($nome!="g_state") && ($nome!="PHPSESSID")){
        ?>
        url="../admin/requisicaoCabNovo.php?Processo=" + Processo + "&CodLivro=<?=$livro?>";
        fetch(url)
        url="guardaCookie.php?l=<?=$livro?>&t=1";
        fetch(url)
        <?php
            }
        }?>
        document.getElementById("bgravar").hidden=true;
        document.getElementById("requisitado").style.display = "block"; // Exibir "requisitado"
        setTimeout(function(){
            document.getElementById("linhasL").innerHTML="";
            document.getElementById("requisitado").style.display = "none"; // Esconder "requisitado" após 3 segundos
        }, 3000);
    }
</script>

</html>
