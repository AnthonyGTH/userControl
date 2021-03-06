@extends('layouts.app')
@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="card card-signup">
          <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="header header-primary text-center">
              <h4>Inicio de sesion</h4>
            </div>
            <p class="text-divider">Ingresa tus datos</p>
            <div class="content">



              <div class="input-group">
                <span class="input-group-addon">
                  <i class="material-icons">email</i>
                </span>
                <input
                  placeholder="Email..."
                  id="email"
                  type="email"
                  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                  name="email"
                  value="{{ old('email') }}"
                  required
                  autofocus
                />
              </div>

              <div class="input-group">
                <span class="input-group-addon">
                  <i class="material-icons">lock_outline</i>
                </span>
                <input
                  placeholder="Clave..."
                  id="password"
                  type="password"
                  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                  name="password"
                  required
                />
              </div>



              <div class="checkbox">
                <label>
                  <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                    {{ old('remember') ? 'checked' : '' }}
                  >
                  Recordar clave
                </label>
              </div>
            </div>
            <div class="row">

              <div class="col-sm-6">
                <div class="footer text-center">
                  <a href="{{url('/register')}}" class="btn btn-simple btn-info btn-lg">Registro</a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="footer text-center">
                  <button type="submit" class="btn btn-simple btn-primary btn-lg">Ingresar</button>
                </div>
              </div>
            </div>



            <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>-->
          </form>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection
