<x-app-layout>
    <h1 class="dashboard-title text-center">Gerenciar Alunos</h1>

    @if(session('message'))
    <div id="session-alert" class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var alert = document.getElementById('session-alert');
                if (alert) {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        if (alert && alert.parentNode) {
                            alert.parentNode.removeChild(alert);
                        }
                    }, 500);
                }
            }, 1000);
        });
    </script>



    <div class="form-container regular fixed-size-container"> 

        <a class="btn btn-success btn-large-rounded" href="/alunos/create">
            Inserir novo Aluno
        </a>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th class="highlight-header">Nome</th>
                    <th class="highlight-header">Email</th>
                    <th class="highlight-header">Data de Nascimento</th>
                    <th class="highlight-header">Senha</th>
                    <th class="highlight-header">CPF</th>
                    <th class="highlight-header">Telefone</th>
                    <th class="highlight-header">Sexo</th>
                    <th class="highlight-header">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ $aluno->data_nascimento }}</td>
                        <td>{{ $aluno->senha }}</td>
                        <td>{{ $aluno->cpf }}</td>
                        <td>{{ $aluno->telefone }}</td>
                        <td>{{ $aluno->sexo }}</td>
                    
                        <td>
                            <a href='/alunos/{{ $aluno->id }}/edit' class="btn btn-warning">Alterar</a>
                            <form action="/alunos/{{ $aluno->id }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class='btn btn-danger'>Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
