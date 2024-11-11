<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Professor;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::with(['aluno', 'curso', 'professor'])->get();
        return view('matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('matriculas.create', compact('alunos', 'cursos', 'professores'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'curso_id' => 'required|exists:cursos,id',
            'professor_id' => 'required|exists:professores,id'
        ]);

        Matricula::create($request->all());
        return redirect()->route('matriculas.index')->with('message', 'Matrícula criada com sucesso!');
    }

    public function show($id)
    {
        $matricula = Matricula::with(['aluno', 'curso', 'professor'])->findOrFail($id);
        return view('matriculas.show', compact('matricula'));
    }

    public function edit($id)
    {
        $matricula = Matricula::findOrFail($id);
        $alunos = Aluno::all();
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('matriculas.edit', compact('matricula', 'alunos', 'cursos', 'professores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'curso_id' => 'required|exists:cursos,id',
            'professor_id' => 'required|exists:professores,id'
        ]);

        $matricula = Matricula::findOrFail($id);
        $matricula->update($request->all());

        return redirect()->route('matriculas.index')->with('message', 'Matrícula atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $matricula = Matricula::findOrFail($id);
        $matricula->delete();

        return redirect()->route('matriculas.index')->with('message', 'Matrícula excluída com sucesso!');
    }


    public function metricas()
    {
        $matriculas = Matricula::with('curso')->get();
        $quantidadePorCurso = $matriculas->groupBy('curso.nome')->map->count();

        $cursos = $quantidadePorCurso->keys();
        $quantidades = $quantidadePorCurso->values();

        return view('metricas.index', compact('cursos', 'quantidades'));
    }
}


