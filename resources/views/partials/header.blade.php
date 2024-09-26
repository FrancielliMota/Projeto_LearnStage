
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       

        .navbar {
            background-color: #000044;
        }

        .navbar .nav-link,
        .navbar .navbar-brand {
            color: #6c849c;
            margin-left: 1.25rem;
        }

    </style>
</head>
<body>
       
       <!-- Navbar inicial -->
    
       <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Learn Stage" style="height: 40px;"/>
                BurguerBliss
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
                <!-- Alinhar o conteúdo à direita -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                                 
                </ul>
            </div>
        </div>
    </nav>
