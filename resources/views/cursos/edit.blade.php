<x-app-layout>
    <h5 class="dashboard-title text-center">Editar Curso</h5>

    <div class="edit-container"> 

        <form action="/cursos/{{$curso->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $curso->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="carga_horaria">Carga Horária:</label>
                <input type="text" id="carga_horaria" name="carga_horaria" class="form-control" value="{{ $curso->carga_horaria }}" required>
            </div>

            <div class="mb-3">
                <label for="custo">Custo:</label>
                <input type="text" id="custo" name="custo" class="form-control" value="{{ $curso->custo }}" required>
            </div>

            <div class="text-center mt-2">
                <button type="submit" class="btn btn-success btn-large-rounded">Salvar</button>
            </div>
        </form>
</div>


</x-app-layout>