<x-app-layout>

    <h1 class="dashboard-title text-center">Gerenciar Alunos</h1>

    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    <!-- Container dos Cards -->

     <!-- Card Adicionar -->
    
            <div class="card m-2">
                <div class="icon mb-3">
                    <i class="fas fa-user-plus fa-2x"></i>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                     <h4 class="card-title">Adicionar Aluno</h4>
                    <a href="{{ route('alunos.create') }}" class="btn btn-success mt-auto">Adicionar</a>
                </div>
            </div>
        
            <div class="card m-2">
                <div class="icon mb-3">
                        <i class="fas fa-users fa-2x"></i>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                        <h4 class="card-title">Listar Alunos</h4>
                    <a href="{{ route('alunos.show', 1) }}" class="btn btn-primary mt-auto">Listar</a>
                </div>
            </div>
        
            <div class="card m-2">
                <div class="icon mb-3">
                        <i class="fas fa-user-edit fa-2x"></i>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                        <h4 class="card-title">Editar Aluno</h4>
                        <a href="{{ route('alunos.edit', 1) }}" class="btn btn-primary mt-auto">Editar</a>
                </div>
            </div>

            <div class="card m-2">
                <div class="icon mb-3">
                    <i class="fas fa-user-times fa-2x"></i>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <h4 class="card-title">Excluir Aluno</h4>
                    <a href="{{ route('alunos.destroy', 1) }}" class="btn btn-primary mt-auto">Editar</a>  
                </div>
            </div>
                
    </x-app-layout>

               

