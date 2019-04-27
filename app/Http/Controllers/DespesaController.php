<?php

namespace App\Http\Controllers;

use App\Despesa;
use Illuminate\Http\Request;
use App\Receita;

class DespesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard/despesas'); 
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
            return redirect('/despesa/add')->withErrors($errors)->withInput();
        } else {
            Despesa::create([
                'nome' => $request['nome'],
                'descricao' => $request['descricao'],
                'recorrente' => $request['recorrente'],
                'categoria' => $request['categoria'],
                'data' => $request['data'],
                'valor' => $request['valor']
            ]);
            $message = "Despesa(Saída) adicionada com sucesso!";
            return redirect()->route('despesa')->with('message', $message);
        }
    }

    public function listAll() {
        $despesa = Despesa::all();
        return json_encode($despesa);
    }

    public function listOne($id)
    {
        $despesa = Despesa::findOrFail($id);
        return json_encode($despesa);
    }

    public function update(Request $request, $id)
    {   
        $despesa = Despesa::find($id);
        $despesa->nome = $request['nome'];
        $despesa->descricao = $request['descricao'];
        $despesa->recorrente = $request['recorrente'];
        $despesa->categoria = $request['categoria'];
        $despesa->data = $request['data'];
        $despesa->valor = $request['valor'];
        $despesa->save();
        $message = "Despesa(Saída) alterada com sucesso!";
        return redirect()->route('despesa')->with('message', $message);
    }

    public function delete($id)
    {
        $despesa = Despesa::find($id);
        $message = "Despesa(Saída) removida com sucesso!";
        $despesa->delete();
        return redirect()->route('despesa')->with('message', $message);
    }
}
