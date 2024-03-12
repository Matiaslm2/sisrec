    <?php include("mostralogin.php");?>
<?php include("../ligacao.php");?>

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
        width: 250%; /* Define a largura desejada */
    }
</style>

<style>
        .table {
            width: 100%;
            margin-bottom: 0.5rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.5rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 1px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 1px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.25rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 1px;
        }

        .grelha {
            text-align: center;
            font-size: 0.8rem; /* Reduz o tamanho da fonte */
        }

        /* Estilos para os checkboxes */
        input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }
    </style>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
        
</div>

            <div class="col-md-1">
                <a class="navbar-brand" href="#!"><img class="navbar-brand-item light-mode-item" src="https://www.esmonserrate.org/images/esm_174.png" width="100%" alt="logo"> </a>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="requisicoes.php">Requisitar</a></li>
                        <div class="col-md-1"> 

                        </div>
                        
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-1">

                        </div>
                        <li class="nav-item"><a class="nav-link" href="consultar.php">Consultar</a></li>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        <li class="nav-item"><a class="nav-link" href="requisicoes.php">Biblioteca</a></li>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-1"> 

                        </div>
                        <div class="col-md-1">

                </div>
                <div class="col-md-1"> 

                        </div>
                        <div class="col-md-1"> 

                        </div>
                        <div class="col-md-1"> 

                        </div>
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


                    </ul>
    </nav>
                         
    <div class="container">
       
        <div class="row">
            <h4>Requisições</h4>
            <div class="col-md-3">
                <table id="tblCategorias">
            <?php
            $sql = "SELECT idCategoria, nome FROM Categorias ORDER BY nome";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                ?>
                    <tr data-categoria="<?=$row["idCategoria"]?>">
                    <td><?=$row["nome"]?></td>
                    
                </tr>
            <?php }  ?>
            </table>



                <label for="txtCat"><h6>Auditorios:</h6></label>
                <select id="cmbCategoria1" name="cmbCategoria" class="form-control">
                    <option value="16">---------</option>
                    <option value="15">Carolino Ramos</option>
                    <option value="16">Sala Magna</option>
                </select>
            </div>

            <div class="col-md-3">
                <br>
                <br>
                <label for="txtCat"><h6>Recursos</h6></label>
                <table id="tblRecursos">
            <?php
            $sql = "SELECT idRecurso, nome, idCategoria FROM Recursos ORDER BY nome";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                ?>
                    <tr class="hidden" data-categoria="<?=$row["idCategoria"]?>" data-recurso="<?=$row["idRecurso"]?>">
                    <td><?=$row["nome"]?></td>
                    
                </tr>
            <?php }  ?>
            </table>
            </div>

           

            <!-- Aqui agora ambos os campos estão dentro da mesma row -->
           
        </div>

        
        <!-- Computadores e Equipamentos Audiovisuais -->
        <div class="row" id="computadoresOptions" style="display: none;">
            
        </div>
        <div class="row" id="equipamentosOptions" style="display: none;">
           
        </div>
    </div>
    
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

<style>
  .scrollable-table-container {
    overflow-x: auto;
    width: 80%; /* Defina a largura desejada para a tabela */
    margin: 0 auto; /* Centraliza a tabela na página */
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
  }
  
  th {
    background-color: #f2f2f2;
  }
</style>




</head>
<div class="scrollable-table-container">
    <div class="col-md-5"> 


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<h2>Horário Escolar</h2>

<table>
  <tr>
    <th>Hora</th>
    <th>Segunda-feira</th>
    <th>Terça-feira</th>
    <th>Quarta-feira</th>
    <th>Quinta-feira</th>
    <th>Sexta-feira</th>
  </tr>
  <?php
  $sql = "SELECT tempo, hora FROM horario ORDER BY tempo";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    ?>
        <tr data-tempo="<?=$row["tempo"]?>">
        <td><?=$row["hora"]?></td>
        <td><input type="checkbox" value="5" id="chkTempo" name="chkTempo"></td>
        <td><input type="checkbox" value="5" id="chkTempo" name="chkTempo"></td>
        <td><input type="checkbox" value="5" id="chkTempo" name="chkTempo"></td>
        <td><input type="checkbox" value="5" id="chkTempo" name="chkTempo"></td>
        <td><input type="checkbox" value="5" id="chkTempo" name="chkTempo"></td>
      </tr>
<?php }  ?>
 
  
</table>

    </div>
    </div>
    


    <script>
        document.getElementById('cmbCategoria2').addEventListener('change', function() {
            var selectedOption = this.value;
            var computadoresOptions = document.getElementById('computadoresOptions');
            var equipamentosOptions = document.getElementById('equipamentosOptions');
            
            if (selectedOption === 'computadores') {
                computadoresOptions.style.display = 'block';
                equipamentosOptions.style.display = 'none';
            } else if (selectedOption === 'audiovisuais') {
                computadoresOptions.style.display = 'none';
                equipamentosOptions.style.display = 'block';
            } else {
                computadoresOptions.style.display = 'none';
                equipamentosOptions.style.display = 'none';
            }
        });
    </script>



    <script src="assets/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
<script>
$(document).ready(function(){
    $("#tblCategorias tr").click(function(){
        $("#tblCategorias tr").removeClass("selecionado")
        $(this).addClass("selecionado")
        console.log($(this).closest("tr").data("categoria"))
        $("#tblRecursos tr").addClass("hidden")
        $("#tblRecursos tr[data-categoria="+$(this).closest("tr").data("categoria")+"]").removeClass("hidden");

        
    })


    $("#tblRecursos tr").click(function(){
        $("#tblRecursos tr").removeClass("selecionado")
        $(this).addClass("selecionado")
        

        
    })

})
    </script> 
</body>
</html>
