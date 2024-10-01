<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Stage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Estilização geral da página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 200px; /* Ajuste conforme a altura da navbar */
            margin-bottom: 50px; 
    }
        

        /* Container que centraliza os cards */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 20px;
         
        }

        /* Estilização dos cards */
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px; /* Largura do card */
            height: 300px; /* Altura do card */
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
            position: relative;
        }

        /* Estilização do ícone no card */
        .card .icon {
            font-size: 50px; /* Tamanho do ícone */
            color: #4caf50; /* Cor do ícone */
            margin-bottom: 20px;
        }

        /* Conteúdo do card */
        .card h3 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .card p {
            font-size: 16px;
            color: #777;
            margin-top: 10px;
        }
        footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #f8f9fa;
        padding: 10px 0;
        box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Centralizar o conteúdo dentro do footer */
        footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .dashboard-title {
            
            top: 100px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 50px;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 30px;
            position:absolute;
   
            }

        .icon {
            color: #4A90E2 !important;
            font-size: 60px;
            margin-bottom: 20px;
        }

        .form-container {
           
            width: 300rem;
            margin-top:  100px;
            margin-bottom: 100px !important;
            padding: 2rem;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;}
    
        </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo Learn Stage" style="height: 40px; border-radius: 15rem;">
            Learn Stage
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @CSRF
                                <button type="submit" class="dropdown-item">Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container content my-5">
    {{$slot}}
</div>

<!-- <footer>
    <div class="container">
        <p>&copy; 2024 Sistema de Gerenciamento de Cursos. Todos os direitos reservados.</p>
    </div>
</footer> -->
<footer class="fixed-bottom">
    <div class="container text-center">
        <p>&copy; 2024 Sistema de Gerenciamento de Cursos. Todos os direitos reservados.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>