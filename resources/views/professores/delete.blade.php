<x-app-layout>

<h1 class="dashboard-title text-center">Excluir Professor</h1>

<!-- Alerta de sucesso, caso o professor seja deletado -->
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<!-- Exibir informações do professor que será excluído -->
<div class="card m-2">
    <div class="card-body">
        <h4 class="card-title">Tem certeza que deseja excluir o professor?</h4>
        <p>Nome: {{ $professor->nome }}</p>
        <p>Email: {{ $professor->email }}</p>
        <p>CPF: {{ $professor->cpf }}</p>
    </div>
    <div class="card-footer">
        <!-- Formulário para deletar o professor -->
        <form action="{{ route('professores.destroy', $professor->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir Professor</button>
            <a href="{{ route('professores.index') }}" class="btn btn-secondary">Cancelar</button>
        </form>
    </div>
</div>

</x-app-layout>
