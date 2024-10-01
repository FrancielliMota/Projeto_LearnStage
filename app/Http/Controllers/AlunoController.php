<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all(); // Obtém todos os alunos
        return $this->viewResponse('alunos.index', compact('alunos')); // Passa a variável para a view
    }

    public function create()
    {
        return $this->viewResponse('alunos.create'); // Retorna a view para criar um novo aluno
    }

    public function store(Request $request)
{
    $this->validateRequest($request, [
        'nome' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:alunos',
        'senha' => 'required|string|min:8',
        'cpf' => 'required|string|max:11',
        'telefone' => 'nullable|string|min:11',
        'sexo' => 'nullable|string|max:10',
        'data_nascimento' => 'required|date',
       
      
    ]);

    Aluno::create($request->all());
    return $this->redirectWithMessage('alunos.index', 'Aluno criado com sucesso!');
}


    public function show(Aluno $aluno)
    {
        return $this->viewResponse('alunos.show', compact('aluno')); // Passa a variável para a view de detalhes
    }

    public function edit(Aluno $aluno)
    {
        return $this->viewResponse('alunos.edit', compact('aluno')); // Passa a variável para a view de edição
    }

    public function update(Request $request, Aluno $aluno)
    {
        $this->validateRequest($request, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:alunos,email,' . $aluno->id,
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|max:14|unique:alunos,cpf,' . $aluno->id, // Validando o CPF para a atualização
        ]);

        $aluno->update($request->all());
        return $this->redirectWithMessage('alunos.index', 'Aluno atualizado com sucesso!'); // Redireciona com mensagem
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return $this->redirectWithMessage('alunos.index', 'Aluno deletado com sucesso!'); // Redireciona com mensagem
    }
}
