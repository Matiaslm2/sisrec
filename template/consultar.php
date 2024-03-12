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

 <style>
        /* Your existing styles */
        .custom-header {
            background-image: url(imgs/fundo.jpg);
            background-size: cover;
            background-position: center;
            color: white;
            padding: 50px 0;
        }

        /* Additional styles for the calendar */
        #calendar {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>


<header class="custom-header">
    <div class="container px-4 px-lg-5">
        <div class="text-center">
            <h1 class="display-4 fw-bolder">Consultar</h1>
        </div>
    </div>      
</header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <div class="col-md-1">
                    <a class="navbar-brand" href="#!"><img class="navbar-brand-item light-mode-item" src="https://www.esmonserrate.org/images/esm_174.png" width="100%" alt="logo"> </a>
                </div>
                <div class="col-md-1">
                    
                    </div>
                <div class="col-md-1">
                    <a class="navbar-brand" href="#!">Requisições Monserrate</a>
                </div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-9">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link active
                            
                            
                            
                            " href="consultar.php">Consultar</a></li>
                            <div class="col-md-1">

                        </div>

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-1"> 

                        </div>
                            <li class="nav-item"><a class="nav-link" href="index.php">Voltar</a></li>
                        </ul>
</nav>
    
<div class="container mt-5">
        <div id="calendar" class="calendar-container"></div>
    </div>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize FullCalendar
            $('#calendar').fullCalendar({
                themeSystem: 'bootstrap4',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [
                    // You can add events dynamically here if needed
                ]
            });
        });
    </script>

</html>

