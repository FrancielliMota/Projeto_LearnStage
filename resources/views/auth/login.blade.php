<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: white;
        }

        .navbar .nav-link,
        .navbar .navbar-brand {
            color: #4A90E2;
        }

        .navbar .nav-link:hover {
            color: #a8bbd0; /* Cor de hover para links */
        }

        body {
            background-color: #4A90E2; /* Cor do fundo da página */
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            padding: 3rem;
         
        }

        .card {
            width: 450px;
            height: 300px;
            background-color: white !important;
            justify-content: center;
            

        }

    </style>
</head>
<body>

    <!-- Navbar inicial -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo Learn Stage" style="height: 40px; border-radius: 15rem;">
                Learn Stage
            </a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNavDropdown" 
                aria-controls="navbarNavDropdown" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">
                        <img src="{{ asset('images/back.png') }}" alt="Login Icon" style="width: 2rem; height: 2rem;">
                    </a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Faça seu login</h5>
                    <form method="post" action="/login">
                        @CSRF
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Digite sua senha">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
