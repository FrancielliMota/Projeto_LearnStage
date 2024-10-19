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
        Aluno::create($request->all());
        $this->show(1);
    }
    
 /*    public function list(string $id)
    {
        $alunos = Aluno::findOrFail($id);
        return view('alunos.list', compact('alunos'));
    } */


    public function show(string $id)
    {
        $alunos = Aluno::all();
        return view('alunos.show', compact('alunos')); // Passa a variável para a view de detalhes
    }


    public function edit(Aluno $alunos)
    {
        return $this->viewResponse('alunos.edit', compact('alunos')); 
    }

    public function update(Request $request, Aluno $alunos)
    {
        $this->validateRequest($request, [ ]);

        $alunos->update($request->all());
        return $this->redirectWithMessage('alunos.index', 'Aluno atualizado com sucesso!'); // Redireciona com mensagem
    }

    public function destroy(Aluno $alunos)
    {
        $alunos->delete();
        return $this->redirectWithMessage('alunos.destroy', 'Aluno deletado com sucesso!'); // Redireciona com mensagem
    }
}
