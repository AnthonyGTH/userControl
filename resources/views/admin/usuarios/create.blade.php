@extends('layouts.all')

@section('title','Listado de productos')

@section('body-class','signup-page')

@section('content')

	<div class="container">


		<div class="section ">
			<h2 class="title text-center">Registrar nuevo usuario.</h2>

      <form method="POST" action="{{ route('register') }}">
          @csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group label-floating">
								<label class="control-label">Nombre de usuario</label>
								<input type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group label-floating">
								<label class="control-label">Correo electronico</label>
								<input type="email" class="form-control" name="email">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group label-floating">
								<label class="control-label">Clave</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>
					</div>

					<button class="btn btn-primary btn-round text-center">Round</button>
      </form>

		</div>



	</div>





@endsection
