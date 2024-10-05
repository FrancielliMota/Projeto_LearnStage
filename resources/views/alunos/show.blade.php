<x-app-layout>

<form action="/alunos/" method="POST" class="form-container">

    @CSRF
    <div class="container mt-5">
        <h1>Detalhes do Aluno</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $aluno->nome }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $aluno->email }}</p>
                <p><strong>Data de Nascimento:</strong> {{ \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') }}</p>
                <p><strong>Telefone:</strong> {{ $aluno->telefone }}</p>
                <p><strong>Sexo:</strong> {{ $aluno->sexo }}</p>
                <!-- Adicione mais informações conforme necessário -->
            </div>
            <div class="card-footer">
                <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</form>
</x-app-layout>