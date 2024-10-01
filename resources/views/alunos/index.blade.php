
<x-app-layout>

    <h1 class="dashboard-title text-center">Gerenciar Alunos</h1>

    <!-- Container dos Cards -->
   
    <div class="container mt-4">
        <div class="row">
            <!-- Card Adicionar Aluno -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="icon mb-3">
                        <i class="fas fa-user-plus fa-1x"></i>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                        <h4 class="card-title">Adicionar Aluno</h4>
                        <a href="{{ route('alunos.create') }}" class="btn btn-success mt-auto">Adicionar</a>
                    </div>
                </div>
            </div>

            <!-- Card Listar Alunos -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="icon mb-3">
                        <i class="fas fa-users fa-1x"></i>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                        <h4 class="card-title">Listar Alunos</h4>
                        <a href="{{ route('alunos.index') }}" class="btn btn-primary mt-auto">Listar</a>
                    </div>
                </div>
            </div>

            <!-- Card Editar Aluno -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="icon mb-3">
                        <i class="fas fa-user-edit fa-1x"></i>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                        <h4 class="card-title">Editar Aluno</h4>
                        <a href="{{ route('alunos.edit', 1) }}" class="btn btn-primary mt-auto">Editar</a>
                    </div>
                </div>
            </div>
            
            <!-- Card Excluir Aluno -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="icon mb-3">
                        <i class="fas fa-user-times fa-1x"></i>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                        <h4 class="card-title">Excluir Aluno</h4>
                        <a href="#" class="btn btn-danger mt-auto" data-toggle="modal" data-target="#excluirAlunoModal">Excluir</a>
                    </div>
                </div>
            </div>

            <!-- Modal para Confirmação de Exclusão -->
            <div class="modal fade" id="excluirAlunoModal" tabindex="-1" role="dialog" aria-labelledby="excluirAlunoModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="excluirAlunoModalLabel">Confirmar Exclusão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza de que deseja excluir este aluno? Esta ação não pode ser desfeita.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('alunos.destroy', 1) }}" method="POST" id="formExcluirAluno">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>




