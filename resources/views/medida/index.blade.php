@extends("app")

@section("contenido")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Unidades de medida</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Unidad de medida</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/medida/guardar" method="post">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" id="medi_descripcion" name="medi_descripcion" placeholder="Ingresa una descripcion">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
