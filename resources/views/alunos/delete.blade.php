<x-app-layout>

    <h1 class="dashboard-title text-center">Excluir Aluno</h1>

    <!-- Alerta de sucesso, caso o aluno seja deletado -->
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Exibir informações do aluno que será excluído -->
    <div class="card m-2">
        <div class="card-body">
            <h4 class="card-title">Tem certeza que deseja excluir o aluno?</h4>
            <p>Nome: {{ $aluno->nome }}</p>
            <p>Email: {{ $aluno->email }}</p>
            <p>CPF: {{ $aluno->cpf }}</p>
        </div>
        <div class="card-footer">
            <!-- Formulário para deletar o aluno -->
            <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir Aluno</button>
                <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>

</x-app-layout>
