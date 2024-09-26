<x-app-layout>
    <div class="container mt-5">
        <h1>Detalhes do Aluno</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $aluno->nome }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $aluno->email }}</p>
                <p><strong>Data de Nascimento:</strong> {{ \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este aluno?');">Deletar</button>
                </form>
                <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> 
    </x-app-layout>
