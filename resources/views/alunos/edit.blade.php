<x-app-layout>

<h1 class="dashboard-title text-center">Editar Aluno</h1>

<div class="form-container">
    <form action="{{ route('alunos.edit') }}" method="PUT">
        @csrf

    <h1>Editar Aluno</h1>
      
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $aluno->nome }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
   
</div>
</form>

</x-app-layout>