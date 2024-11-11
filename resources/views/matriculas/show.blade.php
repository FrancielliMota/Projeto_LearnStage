<x-app-layout>

<h1 class="dashboard-title text-center">Detalhes da matrícula</h1>


    <div class="content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>Professor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $matricula->aluno->nome }}</td>
                    <td>{{ $matricula->curso->nome }}</td>
                    <td>{{ $matricula->professor->nome }}</td>
                    <td>
                        <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-outline-warning">Alterar</a>
                        <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST" style="display:inline-block;">
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