<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4A90E2;
        }
        
        .vertical-menu {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            background-color: #fff;
            width: 7rem;
            border-radius: 0 10px 10px 0;
            z-index: 1000;
            transition: width 0.3s;
        }

        .menu-trigger {
            display: block;
            padding: 20px;
            text-align: center;
            color: #000044 !important;
            text-decoration: none;
        }

        .dropdown-content {
            display: none; /* Escondido por padrão */
            flex-direction: column;
            padding: 0;
        }

        .vertical-menu:hover .dropdown-content {
            display: flex; /* Exibe as opções ao passar o mouse */
        }

        .vertical-menu a {
            padding: 1rem;
            text-decoration: none;
            font-size: 12px;
            color: #000044 !important;
            text-align: center;
            transition: background-color 0.3s;
        }

        .vertical-menu a:hover {
            background-color: #dabfbc;
        }

        @media (max-width: 768px) {
            .vertical-menu {
                width: 5rem;
            }
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <img src="{{ asset('images/logo.webp') }}" class="card-img-top" alt="Logo Learn Stage" style="border-radius: 15rem;">
    </div>
</div>

<!-- Vertical menu -->
<div class="vertical-menu">
    <a href="#" class="menu-trigger">
        <img src="{{ asset('images/login.png') }}" alt="Login Icon" style="width: 50px; height: 50px;">
    </a>
    <div class="dropdown-content">
        @auth
            <!-- Exibe se o usuário estiver autenticado -->
            <a href="/dashboard">Acessar área restrita</a>

        @else
            <!-- Exibe se o usuário não estiver autenticado -->
            <a href="/login">Acesse o sistema</a>
            <a href="/register">Crie sua conta</a>

        @endauth
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
