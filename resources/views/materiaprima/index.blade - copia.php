@extends("app")


@if (session('status'))
					@if (session('status')=='1')
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  Registro guardado con éxito!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					@else
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  {{ session('status') }}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					@endif
				@endif

@section("contenido")
	<div class="row">
		<div class="col">
			<h3 class="text-center">Materias Primas</h3>
			@if (session('status'))
				@if (session('status')=='1')
					<div class="alert alert-success">
						Registro guardado con exito
					</div>
				@else
					<div class="alert alert-danger">
						{{ session('status') }}
					</div>

				@endif
			@endif
		</div>
	</div>
	<form action="/materiaPrima/guardar" method="post">
		@csrf
		<div class="row">
			<div class="col-6">
				<h4 class="text-center">Materia Prima</h4>
				<div class="row">
					<div class="form-group col-6">
						<label for="">Descripcion</label>
						<input type="text" name="mapr_descripcion" class="form-control">
					</div>
					<div class="form-group col-6">
						<label for="">Stock</label>
						<input type="number" name="mapr_stock" class="form-control">
					</div>
					<div class="form-group col-6">
						<label for="">Costo</label>
						<input type="number" name="mapr_costo" class="form-control">
					</div>
					<div class="form-group col-6">
						<label for="">Medida</label>
						<select name="medidas_medi_codigo" class="form-control">
							<option value="">Seleccione</option>
							@foreach($medidas as $value)
							<option value="{{ $value->medi_codigo }}">{{ $value->medi_descripcion }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-12">
						<button type="submit" class="btn btn-success"> Guardar </button>
					</div>
				</div>
			</div>
			<div class="col-6">
				
			</div>
		</div>
	</form>
@endsection