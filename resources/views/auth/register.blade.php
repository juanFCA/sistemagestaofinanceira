@extends('layouts.appRegister')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto ">
            <div class="card card-transparente">
                <div class="card-header titulo-principal">
                    <h5 class="card-title text-center">IMPEKABLE</h5>
                    <h6 class="card-title text-center"> Por favor, preencha para cria sua conta</h6>
                </div> <!--  {{ __('Register') }} variavel do laravel? -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right"> </label> <!-- {{ __('Name') }} variavel do laravel? -->

                            <div class="col-md-6 ">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nome completo">

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right"></label> <!-- {{ __('E-Mail Address') }} variavel do laravel? -->

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right"></label>
                            <!-- {{ __('Password') }} variavel do laravel?  -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Senha">

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right"></label> <!-- {{ __('Confirm Password') }}  variavel do laravel? -->

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirme sua Senha">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    inscrever-se
                                    <!-- {{ __('Register') }} variavel do laravel?  -->
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0 custom-control custom-checkbox text-center ">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Eu concordo com os termos e
                                condições</label>
                        </div>

                    </form>
                </div>

                <a href="#" class="card-title text-center btn-link "> já tem uma conta? Entre aqui</a>
                <a href="#" class="card-title text-center btn-link">Termos de uso. Política de Privacidade </a>
            </div>
        </div>
    </div>
</div>
@endsection
