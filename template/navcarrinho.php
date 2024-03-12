<?php include("mostralogin.php");?>

<style>
.round-image {
        border-radius: 50%; /* Define a borda redonda */
        width: 250%; /* Define a largura desejada */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
        
</div>

            <div class="col-md-1">
                <a class="navbar-brand" href="#!"><img class="navbar-brand-item light-mode-item" src="https://www.esmonserrate.org/images/esm_174.png" width="100%" alt="logo"> </a>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="requisicoes.php">Voltar</a></li>
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
                        <div class="col-md-1">

                        </div><div class="col-md-1">

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>