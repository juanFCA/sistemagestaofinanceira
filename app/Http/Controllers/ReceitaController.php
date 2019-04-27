<?php

namespace App\Http\Controllers;

use App\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard/receitas');
    }

    public function insert(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'recorrente' => 'required|boolean',
            'categoria' => 'required|integer',
            'data' => 'required|date',
            'valor' => 'required|decimal'
        ]);

        if($errors->fails()){
            return redirect('/receita/add')->withErrors($errors)->withInput();
        } else {
            Receita::create([
                'nome' => $request['nome'],
                'descricao' => $request['descricao'],
                'recorrente' => $request['recorrente'],
                'categoria' => $request['categoria'],
                'data' => $request['data'],
                'valor' => $request['valor']
            ]);
            $message = "Receita(Entrada) adicionada com sucesso!";
            return redirect()->route('receita')->with('message', $message);
        }
    }

    public function listAll() {
        $receita = Receita::all();
        return json_encode($receita);
    }

    public function listOne($id)
    {
        $receita = Receita::findOrFail($id);
        return json_encode($receita);
    }

    public function update(Request $request, $id)
    {   
        $receita = Receita::find($id);
        $receita->nome = $request['nome'];
        $receita->descricao = $request['descricao'];
        $receita->recorrente = $request['recorrente'];
        $receita->categoria = $request['categoria'];
        $receita->data = $request['data'];
        $receita->valor = $request['valor'];
        $receita->save();
        $message = "Receita(Entrada) alterada com sucesso!";
        return redirect()->route('receita')->with('message', $message);
    }

    public function delete($id)
    {
        $receita = Receita::find($id);
        $message = "Receita(Entrada) removida com sucesso!";
        $receita->delete();
        return redirect()->route('receita')->with('message', $message);
    }
}