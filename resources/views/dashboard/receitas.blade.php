@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Receitas</h1>

    <div class="row">

    <div class="col-md-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-6">
            <div class="card-header bg-info text-white d-flex justify-content-between">
                <span>Receitas</span>
                <a class="btn btn-light btn-circle btn-sm text-success" data-toggle="modal" data-target=".modal-receita">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Vencimento</th>
                            <th>Valor (R$)</th>
                            <th>Situação</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Aluguel JF</td>
                            <td>Aluguel</td>
                            <td>13/02/2019</td>
                            <td>1000,00</td>
                            <td>Pago</td>
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

    <!--Modal receita-->
    <div class="modal fade modal-receita" tabindex="-1" role="dialog" aria-labelledby="modal-receita" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h3 class="text-white font-weight-bold">Receita</h3>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nome</label>
                                <input type="text" class="form-control shadow-sm" name="nome">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Valor (R$)</label>
                                <input type="text" class="form-control shadow-sm money" name="nome">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Vencimento</label>
                                <input type="text" class="form-control shadow-sm date" name="nome">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="">Descrição</label>
                                <input type="text" class="form-control shadow-sm">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Categoria</label>
                                <select name="" id="" class="form-control shadow-sm">
                                    <option value="0">
                                        Salário
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Forma pagamento</label>
                                <select name="" id="" class="form-control shadow-sm">
                                    <option value="0">
                                        Cartão de Crédito
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label">
                                        Está disponível?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label">
                                        Receita fixa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check d-flex flex-row align-items-lg-center">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label">
                                        Receita recorrente (meses)
                                    </label>
                                    <input type="text" class="form-control w-25 ml-3 shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">
                            Cancelar
                        </button>
                        <button class="btn btn-success">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
