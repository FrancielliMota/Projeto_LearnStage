<x-app-layout>


<h1 class="dashboard-title text-center">Registrar Matrícula</h1>

<pre>{{ print_r($alunos) }}</pre>


<div class="form-container regular">
    <form action="{{ route('matriculas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="aluno_id">Aluno:</label>
            <select id="aluno_id" name="aluno_id" class="form-control" required>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="curso_id">Curso:</label>
            <select id="curso_id" name="curso_id" class="form-control" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="professor_id">Professor:</label>
            <select id="professor_id" name="professor_id" class="form-control" required>
                @foreach($professores as $professor)
                    <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="text-center mt-2">
            <button type="submit" class="btn btn-success btn-large-rounded">Registrar Matrícula</button>
        </div>
    </form>
</div>

</x-app-layout>




