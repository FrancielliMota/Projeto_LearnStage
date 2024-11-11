<x-app-layout>


<h1 class="dashboard-title text-center">Cadastrar Aluno</h1>

<div class="form-container regular">
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga Horária:</label>
            <input type="number" name="carga_horaria" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="custo" class="form-label">Custo:</label>
            <input type="text" name="custo" class="form-control" required>
        </div>
        <div class="text-center mt-2">
            <button type="submit" class="btn btn-success btn-large-rounded">Cadastrar Curso</button>
        </div>


    </form>
</div>


    
</x-app-layout>
