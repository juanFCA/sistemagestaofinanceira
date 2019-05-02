@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <!-- Se existirem erros a serem mostrados exibe aqui -->
    @if ($errors->any())
        <div class="alert alert-danger" id="divalert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Se existirem sucessos a serem mostrados exibe aqui -->
    @if(session()->get('success'))
        <div class="alert alert-success" id="divalert">
            {{ session()->get('success') }}  
        </div>
    @endif

    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Receitas a receber</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ {{ $totalReceitas }}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-arrow-alt-circle-up text-info fa-2x"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Despesas a pagar</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ {{ $totalDespesas }}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-arrow-alt-circle-down text-danger fa-2x"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-info text-xs text-uppercase text-white font-weight-bold">
                    Receita / Categoria
                </div>
                <div class="card-body">
                    <canvas id="receita-categoria" height="250" width="250"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-danger text-xs text-uppercase text-white font-weight-bold">
                    Despesa / Categoria
            </div>
            <div class="card-body">
                    <canvas id="despesa-categoria" height="250" width="250"></canvas>
            </div>
        </div>
    </div>
@endsection
