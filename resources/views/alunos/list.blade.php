<x-app-layout>


<h1 class="dashboard-title text-center">Listar Alunos</h1>

<div class="container mt-5">
    <h3>Alunos Cadastrados</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->email }}</td>
                <td>{{ \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') }}</td>
                <td>
                    <!-- Adicione botões para editar ou excluir, se necessário -->
                    <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>
