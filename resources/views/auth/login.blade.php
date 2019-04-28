@extends('layouts.appLogin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center mt-5">
                    <h2 class="text-uppercase font-weight-bold">Bem-vindo</h2>
                    <p class="subtitulo">
                        Por favor, faça seu login para continuar.
                    </p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div>
                                <input autocomplete="off" id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} inp-form" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div>
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }} inp-form" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar login') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center mt-5">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn form-btn">
                                    {{ __('ACESSAR') }}
                                </button>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 mt-5">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueci a senha?') }}
                                    </a>
                                    @endif
                                    <a class="btn btn-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
