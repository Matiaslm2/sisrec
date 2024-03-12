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

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
</head>
<body>
    <!-- Header-->
    <header class="bg-dark py-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Requisições</h1>
            </div>
        </div>
    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <div class="col-md-1">
                <a class="navbar-brand" href="#!"><img class="navbar-brand-item light-mode-item" src="https://www.esmonserrate.org/images/esm_174.png" width="100%" alt="logo"> </a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <a class="navbar-brand" href="#!">Requisições Monserrate</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="requisicoes.php">Requisitar</a></li>
                        <li class="nav-item"><a class="nav-link" href="consultar.php">Consultar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
                         
    <div class="container">
        <br>
        <div class="row">
            <h4>Requisições</h4>
            <div class="col-md-3">
                <br>
                <br>
                <label for="txtCat"><h6>Auditorios:</h6></label>
                <select id="cmbCategoria1" name="cmbCategoria" class="form-control">
                    <option value="16">---------</option>
                    <option value="15">Carolino Ramos</option>
                    <option value="16">Sala Magna</option>
                </select>
                <p class="text-danger"> Se selecionar esta opção "---------", não requisitará esse parametro!!!</p>
            </div>

            <div class="col-md-3">
                <br>
                <br>
                <label for="txtCat"><h6>Biblioteca ESM:</h6></label>
                <select id="cmbCategoria2" name="cmbCategoria" class="form-control">
                    <option value="16">---------</option>
                    <option value="computadores">Computadores-BE</option>
                    <option value="audiovisuais">Equipamentos Audiovisuais</option>
                </select>
            </div>

            <div class="col-md-3">  
                <br>
                <br>
                <label for="txtCat"><h6>Eventos BE:</h6></label>
                <select id="cmbCategoria3" name="cmbCategoria" class="form-control">
                    <option value="16">---------</option>
                    <option value="16">Clube de matemática (jogos e aplicação Milage)</option>
                    <option value="16">Literacia da Informação/Bibliografias/Direitos de autor</option>
                    <option value="16">Literacia dos Media/Segurança na Internet</option>
                    <option value="16">Literacia financeira</option>
                </select>
            </div>

            <div class="col-md-3">  
                <br>
                <br>
                <label for="txtCat"><h6>Salas:</h6></label>
                <select id="cmbCategoria4" name="cmbCategoria" class="form-control">
                    <option value="16">---------</option>
                    <option value="16">1.01</option>
                    <option value="16">1.02</option>
                    <option value="16">1.03</option>
                    <option value="16">1.04</option>
                    <option value="16">1.05</option>
                    <option value="16">1.06</option>
                </select>
                
            </div>
        </div>

        <!-- FullCalendar Container -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <!-- FullCalendar JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ],
                defaultView: 'dayGridMonth',
                height: 'auto'
            });

            calendar.render();
        });
    </script>
</body>
</html>
