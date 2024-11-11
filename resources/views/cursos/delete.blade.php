<x-app-layout>


    <h1 class="dashboard-title text-center">Excluir curso</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card m-2">
        <div class="card-body">
            <h4 class="card-title">Tem certeza que deseja excluir o curso?</h4>
            <p>Nome: {{ $curso->nome }}</p>
            <p>Carga Horária: {{ $curso->carga_horaria }}</p>
            <p>Custo: {{ $curso->custo }}</p>
        </div>
        <div class="card-footer">
            <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir Curso</button>
                <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>


</x-app-layout>
