<x-app-layout>


    <h1 class="dashboard-title text-center">Excluir Matrícula</h1>

    
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="card m-2">
            <div class="card-body">
                <h4 class="card-title">Tem certeza que deseja excluir a matrícula?</h4>
                <p>Aluno: {{ $matricula->aluno->nome }}</p>
                <p>Curso: {{ $matricula->curso->nome }}</p>
                <p>Professor: {{ $matricula->professor->nome }}</p>
            </div>
            <div class="card-footer">
                <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir Matrícula</button>
                    <a href="{{ route('matriculas.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>

</x-app-layout>
