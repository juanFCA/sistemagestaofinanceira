<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Categoria;

class CategoriasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return "tela de categorias";
    }

    public function insert(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        if($errors->fails()){
            return redirect('/categoria/add')->withErrors($errors)->withInput();
        } else {
            Categoria::create([
                'nome' => $request['nome'],
                'descricao' => $request['descricao']
            ]);
            $message = "Categoria adicionada com sucesso!";
            return redirect()->route('categoria')->with('message', $message);
        }
    }

    public function listAll() {
        $categoria = Categoria::all();
        return json_encode($categoria);
    }

    public function listOne($id)
    {
        $categoria = Categoria::findOrFail($id);
        return json_encode($categoria);
    }

    public function update(Request $request, $id)
    {   
        $categoria = Categoria::find($id);
        $categoria->nome = $request['nome'];
        $categoria->descricao = $request['descricao'];
        $categoria->save();
        $message = "Categoria alterada com sucesso!";
        return redirect()->route('categoria')->with('message', $message);

    }

    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $message = "Categoria removida com sucesso!";
        $categoria->delete();
        return redirect()->route('categoria')->with('message', $message);
    }
}
