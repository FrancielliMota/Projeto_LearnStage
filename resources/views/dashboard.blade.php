<x-app-layout>

    <h1 class="dashboard-title text-center">Dashboard</h1>

    <!-- Container dos cards -->
    <div class="container">
        
    <!-- Formulário para alunos -->
        <form method="post" action="/alunos">
            @csrf <!-- Para proteção contra CSRF -->

                <!-- Card Alunos -->
                <div class="card">
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Aluno</h3>
                <p> Gerencie informações</p>
                <a href="alunos">
                    <button type="button" class="btn btn-primary">Acessar</button>
                </a>
                </div>
        </form>

        <!-- Card Cursos -->
        <form method="post" action="/cursos">
            @csrf
            <div class="card m-2">
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Cursos</h3>
                <p>Gerencie os cursos.</p>
                <a href="cursos">
                    <button type="button" class="btn btn-primary">Gerenciar</button>
                </a>
            </div>
        </form>

        <!-- Card Professores -->
        <form method="post" action="/professores">
            @csrf
            <div class="card m-2">
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Professores</h3>
                <p>Gerencie os professores.</p>
                <a href="professores">
                    <button type="button" class="btn btn-primary">Gerenciar</button>
                </a>
            </div>
        </form>
        
        <!-- Card Matrículas -->
        <form method="post" action="/matriculas">
            @csrf
            <div class="card m-2">
                <div class="icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Matrículas</h3>
                <p>Gerencie as matrículas.</p>
                <a href="matriculas">
                    <button type="button" class="btn btn-primary">Gerenciar</button>
                </a>
            </div>
        </form>
    </div>

<script src="{{ asset('js/app.js') }}"></script> 

</x-app-layout>
