<x-app-layout>


    <h1 class="dashboard-title text-center">Dashboard</h1>

    <!-- Container dos cards -->
    <div class="container gambiarra">
        

                <!-- Card Alunos -->
                <div class="card">
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Aluno</h3>
                <p> Gerencie informações</p>
                <a href="/alunos"  class="btn btn-primary">Acessar</a>
                </div>
  

        <!-- Card Cursos -->

            <div class="card m-2">
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Cursos</h3>
                <p>Gerencie os cursos.</p>
                <a href="/cursos" class="btn btn-primary">Gerenciar</a>
            </div>


        <!-- Card Professores -->
    
     
            <div class="card m-2">
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Professores</h3>
                <p>Gerencie os professores.</p>
                <a href="/professores" class="btn btn-primary">Gerenciar</button>
                </a>
            </div>
   
        
      
            <div class="card m-2">
                <div class="icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Matrículas</h3>
                <p>Gerencie as matrículas.</p>
                <a href="\matriculas">
                    <button type="button" class="btn btn-primary">Gerenciar</button>
                </a>
            </div>
        </form>
    </div>

<script src="{{ asset('js/app.js') }}"></script> 

</x-app-layout>
