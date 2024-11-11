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

        <a class="btn btn-success btn-large-rounded" href="/cursos/create">
            Inserir novo Curso
        </a>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th class="highlight-header">Nome</th>
                    <th class="highlight-header">Carga Horária</th>
                    <th class="highlight-header">Custo</th>
                    <th class="highlight-header">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nome }}</td>
                        <td>{{ $curso->carga_horaria }}</td>
                        <td>{{ $curso->custo }}</td>

                        <td>
                            <div style="display: flex; flex-direction: column;">
                                <a href='/cursos/{{ $curso->id }}/edit' class="btn btn-warning mb-2" style="margin-bottom: 2px;">Alterar</a>
                                <form action="/cursos/{{ $curso->id }}" method="POST" style="display:inline-block;">
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
