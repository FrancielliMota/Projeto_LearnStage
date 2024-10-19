<x-app-layout>

<h1 class="dashboard-title text-center">Detalhes do Aluno</h1>

 <div class="content">


        <table class="table table-hover">
            <thead>
                <tr>
                
                    <th>Nome:</th>
                    <th>Email: </th>
                    <th>Data de Nascimento: </th>
                    <th>Senha: </th>
                    <th>CPF: </th>
                    <th>Telefone: </th>
                    <th>Sexo: </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $c)
                    <tr>
                        <td>{{ $c->nome }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->data_nascimento }}</td>
                        <td>{{ $c->senha }}</td>
                        <td>{{ $c->cpf}}</td>
                        <td>{{ $c->telefone }}</td>
                        <td>{{ $c->sexo }}</td>
                        <td>
                            <a href="/alunos/{{ $c->id }}/edit" class="btn btn-outline-warning">Alterar</a>
                            <a href="/alunos/{{ $c->id }}" class="btn btn-outline-danger">Excluir</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>