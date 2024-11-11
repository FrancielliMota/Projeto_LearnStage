<x-app-layout>

<h1 class="dashboard-title text-center">Detalhes do Professor</h1>


<div class="content">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Data de Nascimento:</th>
                <th>Senha:</th>
                <th>CPF:</th>
                <th>Telefone:</th>
                <th>Sexo:</th>
                <th>Ações:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->email }}</td>
                <td>{{ $professor->data_nascimento }}</td>
                <td>{{ $professor->senha }}</td>
                <td>{{ $professor->cpf }}</td>
                <td>{{ $professor->telefone }}</td>
                <td>{{ $professor->sexo }}</td>
                <td>
                    <a href="/professores/{{ $professor->id }}/edit" class="btn btn-outline-warning">Alterar</a>
                    <form action="/professores/{{ $professor->id }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>


</x-app-layout>