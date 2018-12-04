@extends('layouts.app')

@section('title','Listado de productos')

@section('body-class','signup-page')

@section('content')

<div class="main main-raised">
	<div class="container">


		<div class="section text-center">
			<h2 class="title">Usuarios en el sistema.</h2>

			<div class="team">
				<div class="row">
          <a href="{{url('/admin/usuarios/create')}}" class="btn btn-primary btn-round">Nuevo usuario</a>
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Email</th>
								<th class="text-right">Acciones</th>
							</tr>
						</thead>
						<tbody>
              @foreach ($user as $users)
							<tr>
								<td>{{ $users->id }}</td>
								<td>{{ $users->name }}</td>
								<td>{{ $users->email }}</td>
								<td class="td-actions text-right">
									<button type="button" rel="tooltip" title="Ver usuario" class="btn btn-info btn-simple btn-xs">
										<i class="fa fa-user"></i>
									</button>
									<button type="button" rel="tooltip" title="Editar usuario" class="btn btn-success btn-simple btn-xs">
										<i class="fa fa-edit"></i>
									</button>
									<button type="button" rel="tooltip" title="Eliminar usuario" class="btn btn-danger btn-simple btn-xs">
										<i class="fa fa-times"></i>
									</button>
								</td>
							</tr>
              @endforeach
						</tbody>
					</table>

				</div>
			</div>

		</div>



	</div>

</div>




@endsection
