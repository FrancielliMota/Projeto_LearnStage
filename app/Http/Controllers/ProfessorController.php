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
        Professor::create($request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:professores',
            // Adicione outros campos necessários
        ]));
        return redirect()->route('professores.index')->with('success', 'Professor criado com sucesso.');
    }

    public function show(Professor $professor)
    {
        return view('professores.show', compact('professor'));
    }

    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $professor->update($request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:professores,email,' . $professor->id,
            // Adicione outros campos necessários
        ]));
        return redirect()->route('professores.index')->with('success', 'Professor atualizado com sucesso.');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professores.index')->with('success', 'Professor deletado com sucesso.');
    }
}
