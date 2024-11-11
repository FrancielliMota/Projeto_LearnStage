<x-app-layout>
    <h1 class="dashboard-title text-center">Matrículas</h1>

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


        <a class="btn btn-success btn-large-rounded" href="{{ route('matriculas.create') }}">Registrar Nova Matrícula</a>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>Professor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->aluno->nome }}</td>
                    <td>{{ $matricula->curso->nome }}</td>
                    <td>{{ $matricula->professor->nome }}</td>

                    <td>
                        <div style="display: flex; flex-direction: column;">
                            <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-warning">Alterar</a>
                            <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
