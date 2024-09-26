
<x-app-layout>

@section('content')
    <h1>Alunos</h1>
    <a href="{{ route('alunos.create') }}">Adicionar Novo Aluno</a>
    <ul>
        @foreach ($alunos as $aluno)
        <div>
            <span>{{ $aluno->nome }}</span>
            <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning">✏️</a>
        </div>
    @endforeach
    </ul>
@endsection
</x-app-layout>




