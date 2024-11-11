<x-app-layout>
    <h5 class="dashboard-title text-center">Editar Professor</h5>

    <div class="form-container regular">
    <form action="/professores/{{ $professor->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ $professor->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $professor->email }}" required>
        </div>

        <div class="mb-3">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" value="{{ $professor->data_nascimento }}" required>
        </div>

        <div class="mb-3">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-control" value="{{ $professor->senha }}" required>
        </div>
        
        <div class="mb-3">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control" value="{{ $professor->cpf }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" value="{{ $professor->telefone }}">
        </div>

        <div class="mb-3">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" class="form-control">
                <option value="">Selecione</option>
                <option value="masculino" {{ $professor->sexo == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="feminino" {{ $professor->sexo == 'feminino' ? 'selected' : '' }}>Feminino</option>
                <option value="outro" {{ $professor->sexo == 'outro' ? 'selected' : '' }}>Outro</option>
            </select>
        </div>

        <div class="text-center mt-2">
            <button type="submit" class="btn btn-success btn-large-rounded">Salvar</button>
        </div>
    </form>
</div>

</x-app-layout>