<x-app-layout>


<h1 class="dashboard-title text-center">Cadastrar Aluno</h1>

<div class="form-container regular">
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf


        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="sexo">Sexo:</label>
            <select name="sexo" class="form-control">
                <option value="">Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="text-center mt-2">
            <button type="submit" class="btn btn-success btn-large-rounded">Cadastrar Aluno</button>
        </div>
    </form>

    
</x-app-layout>
