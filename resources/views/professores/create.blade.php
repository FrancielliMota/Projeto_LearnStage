<x-app-layout>


<h1 class="dashboard-title text-center">Cadastrar Professor</h1>


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

<div class="form-container regular">
    <form action="{{ route('professores.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" class="form-control">
                <option value="">Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="text-center mt-2">
            <button type="submit" class="btn btn-success btn-large-rounded">Cadastrar Professor</button>
        </div>
    </form>
</div>

</x-app-layout>
