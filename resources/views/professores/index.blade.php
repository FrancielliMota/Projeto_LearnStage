<x-app-layout>

    <h1 class="dashboard-title text-center">Gerenciar Professores</h1>

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

        <a class="btn btn-success btn-large-rounded" href="{{ route('professores.create') }}">
            Inserir Novo Professor
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
                @foreach ($professores as $professor)
                    <tr>
                        <td>{{ $professor->nome }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>{{ $professor->data_nascimento }}</td>
                        <td>{{ $professor->senha }}</td>
                        <td>{{ $professor->cpf }}</td>
                        <td>{{ $professor->telefone }}</td>
                        <td>{{ $professor->sexo }}</td>
                    
                        <td>
                            <div style="display: flex; flex-direction: column;">
                                <a href='{{ route('professores.edit', $professor->id) }}' class="btn btn-warning mb-2">Alterar</a>
                                <form action="{{ route('professores.destroy', $professor->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='btn btn-danger'>Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</x-app-layout>
