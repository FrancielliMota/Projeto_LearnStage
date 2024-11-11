<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;


class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:professores',
            'data_nascimento' => 'required|date',
            'senha' => 'required|min:8',
            'cpf' => 'required|string|max:14|unique:professores',
            'telefone' => 'required|string|max:15',
            'sexo' => 'required|string|max:10'
        ]);

        Professor::create($request->all());
        return redirect()->route('professores.index')->with('message', 'Professor criado com sucesso!');
    }

    public function show(string $id)
    {
        $professor = Professor::findOrFail($id);
        return view('professores.show', compact('professor'));
    }

    public function edit(string $id)
    {
        $professor = Professor::findOrFail($id);
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:professores,email,' . $id,
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|max:14|unique:professores,cpf,' . $id,
            'telefone' => 'required|string|max:15',
            'sexo' => 'required|string|max:10'
        ]);

        $professor = Professor::findOrFail($id);
        $professor->update($request->all());
        return redirect()->route('professores.index')->with('message', 'Professor atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return redirect()->route('professores.index')->with('message', 'Professor excluído com sucesso!');
    }
}
