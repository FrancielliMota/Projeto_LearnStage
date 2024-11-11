<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Exibir a lista de alunos.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Exibir o formulário para criar um novo aluno.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Armazenar um novo aluno no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:alunos',
            'data_nascimento' => 'required|date',
            'senha' => 'required|min:8',
            'cpf' => 'required|string|max:14|unique:alunos',
            'telefone' => 'required|string|max:15',
            'sexo' => 'required|string|max:10'
        ]);

        Aluno::create($request->all());
        return redirect()->route('alunos.index')->with('message', 'Aluno criado com sucesso!');
    }

    /**
     * Exibir o aluno especificado.
     */
    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Exibir o formulário para editar o aluno especificado.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Atualizar o aluno no banco de dados.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:alunos,email,' . $id,
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|max:14|unique:alunos,cpf,' . $id,
            'telefone' => 'required|string|max:15',
            'sexo' => 'required|string|max:10'
        ]);

        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('alunos.index')->with('message', 'Aluno atualizado com sucesso!');
    }

    /**
     * Remover o aluno especificado do banco de dados.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos.index')->with('message', 'Aluno excluído com sucesso!');
    }
}
