<x-app-layout>

<form action="/alunos/edit" method="PUT" class="form-container">
@csrf

<div class="container">
    <h1>Editar Aluno</h1>
      
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $aluno->nome }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
   
</div>
</form>

</x-app-layout>