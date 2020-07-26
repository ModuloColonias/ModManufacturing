@extends("app")

@section("contenido")
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
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
          <img src="/dist/img/inicioprueba.jpg" width="1050" height="700" />

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
