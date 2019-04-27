@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Categorias</h1>

    <div class="row">
    <div class="col-md-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-6">
        <div class="card-header bg-info text-white d-flex justify-content-between">
            <span>
            Receitas
            </span>
            <a href="#" class="btn btn-light btn-circle btn-sm text-success">
            <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
            <tbody>
                <tr>
                <td>
                    Salário
                </td>
                <td class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-pen"></i>
                    </a>
                    <a href="#" class="ml-1 btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-6">
        <div class="card-header bg-danger text-white d-flex justify-content-between">
            <span>Despesas</span>
            <a href="#" class="btn btn-light btn-circle btn-sm text-success">
            <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
            <tbody>
                <tr>
                <td>
                    Aluguel
                </td>
                <td class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-pen"></i>
                    </a>
                    <a href="#" class="ml-1 btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection