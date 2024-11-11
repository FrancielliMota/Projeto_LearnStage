<x-app-layout>
    <h5 class="dashboard-title text-center">Editar Matrícula</h5>

    <div class="form-container regular">
        <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="aluno_id">Aluno:</label>
                <select id="aluno_id" name="aluno_id" class="form-control" required>
                    @foreach($alunos as $aluno)
                        <option value="{{ $aluno->id }}" {{ $matricula->aluno_id == $aluno->id ? 'selected' : '' }}>{{ $aluno->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="curso_id">Curso:</label>
                <select id="curso_id" name="curso_id" class="form-control" required>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->id }}" {{ $matricula->curso_id == $curso->id ? 'selected' : '' }}>{{ $curso->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="professor_id">Professor:</label>
                <select id="professor_id" name="professor_id" class="form-control" required>
                    @foreach($professores as $professor)
                        <option value="{{ $professor->id }}" {{ $matricula->professor_id == $professor->id ? 'selected' : '' }}>{{ $professor->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center mt-2">
                <button type="submit" class="btn btn-success btn-large-rounded">Salvar</button>
            </div>
        </form>
    </div>

</x-app-layout>