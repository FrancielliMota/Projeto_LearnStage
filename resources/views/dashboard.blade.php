

<x-app-layout>



@section('content')

<div class="container">
    <h1 class="my-4">Dashboard</h1>
    <div class="row">
        <!-- Card Aluno -->
       <!-- Dentro do bloco de Alunos -->
<div class="col-md-3">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Alunos</h5>
            <p class="card-text">Gerencie os alunos.</p>
            <a href="{{ route('alunos.create') }}" class="btn btn-primary">✚</a>
            <a href="{{ route('alunos.index') }}" class="btn btn-info">Ver Alunos</a>

            <!-- Formulário de adição de aluno -->
            <form action="{{ route('alunos.store') }}" method="POST">
                @csrf <!-- Token CSRF -->
                <input type="text" name="nome" placeholder="Nome do Aluno">
                <input type="email" name="email" placeholder="E-mail">
                <!-- Outros campos aqui (data de nascimento, etc.) -->
                <button type="submit">Adicionar Aluno</button>
            </form>
        </div>
    </div>
</div>


        <!-- Card Curso -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Cursos</h5>
                    <p class="card-text">Gerencie os cursos.</p>
                </div>
            </div>
        </div>

        <!-- Card Professor -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Professores</h5>
                    <p class="card-text">Gerencie os professores.</p>
                </div>
            </div>
        </div>

        <!-- Card Matrícula -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Matrículas</h5>
                    <p class="card-text">Gerencie as matrículas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="{{ asset('js/app.js') }}"></script> 

</x-app-layout>
