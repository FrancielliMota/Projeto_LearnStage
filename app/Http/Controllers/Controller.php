<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

abstract class Controller
{
    // Método para enviar uma resposta JSON
    protected function jsonResponse($data, $status = 200)
    {
        return response()->json($data, $status);
    }

    // Método para validar dados da requisição
    protected function validateRequest(Request $request, array $rules)
    {
        return Validator::make($request->all(), $rules)->validate();
    }

    // Método para retornar uma visualização com dados
    protected function viewResponse($view, $data = [])
    {
        return view($view, $data);
    }

    // Método para redirecionar com mensagem
    protected function redirectWithMessage($route, $message, $type = 'success')
    {
        return redirect()->route($route)->with($type, $message);
    }
}
