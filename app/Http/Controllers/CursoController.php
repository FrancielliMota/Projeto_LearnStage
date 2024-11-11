<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|integer',
            'custo' => 'required|numeric',
        ]);

        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('message', 'Curso criado com sucesso!');
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|integer',
            'custo' => 'required|numeric',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return redirect()->route('cursos.index')->with('message', 'Curso atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('cursos.index')->with('message', 'Curso excluído com sucesso!');
    }
}
