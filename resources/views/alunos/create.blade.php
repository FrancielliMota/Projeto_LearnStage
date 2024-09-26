<x-app-layout>

@section('content')
    <h1>Cadastrar Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>
        </div>

        <button type="submit">Cadastrar Aluno</button>
    </form>
@endsection
</x-app-layout>