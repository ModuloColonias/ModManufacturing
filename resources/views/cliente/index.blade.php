@extends("app")

@section("contenido")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clientes</h1>
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
                <h3 class="card-title">Cliente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/cliente/guardar" method="post">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="clie_nombre" name="clie_nombre" placeholder="Ingresa el nombre">
                  </div>
                  <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" id="clie_apellido" name="clie_apellido" placeholder="Ingresa el apellido">
                  </div>
                  <div class="form-group">
                    <label for="">Documento o Ruc</label>
                    <input type="text" class="form-control" id="clie_documento" name="clie_documento" placeholder="Ingresa num de documento">
                  </div>
                  <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="number" class="form-control" id="clie_telefono" name="clie_telefono" placeholder="Ingresa el precio">
                  </div>
                  <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control" id="clie_direccion" name="clie_direccion" placeholder="Ingresa el precio">
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
