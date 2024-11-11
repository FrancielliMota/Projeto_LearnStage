<x-app-layout>


    <h1 class="dashboard-title text-center">Dashboard</h1>

    <!-- Container dos cards -->
    <div class="container">
        

                <!-- Card Alunos -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Aluno</h3>
                    <p> Gerencie informações do aluno</p>
                    <a href="/alunos">
                        <button type="button" class="btn btn-primary">Acessar</button>
                    </a>
                </div>
  

        <!-- Card Cursos -->

            <div class="card">
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Cursos</h3>
                <p>Gerencie informações dos cursos.</p>
                <a href="/cursos">
                    <button type="button" class="btn btn-primary">Acessar</button>
                </a>
            </div>


        <!-- Card Professores -->
     
            <div class="card">
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Professores</h3>
                <p>Gerencie informações dos professores.</p>
                <a href="/professores">
                    <button type="button" class="btn btn-primary">Acessar</button>
                </a>
            </div>

        <!-- Card Matrículas -->
      
            <div class="card">
                <div class="icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Matrículas</h3>
                <p>Gerencie as matrículas.</p>
                <a href="\matriculas">
                    <button type="button" class="btn btn-primary">Acessar</button>
                </a>
            </div>
        
        <!-- Card Métricas -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Monitoramento</h3>
                <p>Gráficos de desempenho</p>
                <a href="\metricas">
                    <button type="button" class="btn btn-primary">Visualizar</button>
                </a>
            </div>
        </form>
    </div>

<script src="{{ asset('js/app.js') }}"></script> 

</x-app-layout>
