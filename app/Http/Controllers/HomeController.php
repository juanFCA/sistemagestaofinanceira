<?php

namespace App\Http\Controllers;
use App\Despesa;
use App\Receita;
use Illuminate\Support\Facades\Auth;
use App\Charts\ReceitaCategoria;
use App\Charts\DespesaCategoria;
use App\Categoria;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalReceitas = $this->totalReceitas();
        $totalDespesas = $this->totalDespesas();

        //$receitaCategoriaChart = $this->receitaCategoriaChart();
        //$despesaCategoriaChart = $this->despesaCategoriaChart();

        return view('home', compact('totalReceitas','totalDespesas'));
    }

    private function totalReceitas() {
        $receitasColecao = Receita::where('user_id', Auth::user()->id)->get();
        $soma = 0;
        foreach ($receitasColecao as $key => $value) {
            $soma += $value->valor;
        }
        return $soma;
    }

    private function totalDespesas() {
        $despesasColecao = Despesa::where('user_id', Auth::user()->id)->get();
        $soma = 0;
        foreach ($despesasColecao as $key => $value) {
            $soma += $value->valor;
        }
        return $soma;
    }

    private function receitaCategoriaChart() {
        $categoriasReceitaNome = Categoria::where('user_id', Auth::user()->id)->where('receita', 1)->pluck('nome');
        $categoriasReceitaValor = Receita::where('user_id', Auth::user()->id)->pluck('valor');

        $chart = new ReceitaCategoria;
        $chart->labels($categoriasReceitaNome);
        $chart->dataset('Valores', 'doughnut', $categoriasReceitaValor);
        $chart->displayAxes(false, false);
        $chart->minimalist(true);

        return $chart;
    }

    private function despesaCategoriaChart() {
        $categoriasDespesaNome = Categoria::where('user_id', Auth::user()->id)->where('receita', 0)->pluck('nome');
        $categoriasDespesaValor = Despesa::where('user_id', Auth::user()->id)->pluck('valor');

        $chart = new DespesaCategoria;
        $chart->labels($categoriasDespesaNome);
        $chart->dataset('Valores', 'doughnut', $categoriasDespesaValor);
        $chart->displayAxes(false, false);
        $chart->minimalist(true);

        return $chart;
    }
}
