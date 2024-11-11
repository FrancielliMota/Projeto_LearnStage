<x-app-layout>

<h1 class="dashboard-title text-center">Detalhes do Curso</h1>

 <div class="content">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Carga Horária:</th>
                <th>Custo:</th>
                <th>Ações:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->carga_horaria }}</td>
                    <td>{{ $curso->custo }}</td>
                    <td>
                        <a href="/cursos/{{ $curso->id }}/edit" class="btn btn-outline-warning">Alterar</a>
                        <form action="/cursos/{{ $curso->id }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

        
</x-app-layout>