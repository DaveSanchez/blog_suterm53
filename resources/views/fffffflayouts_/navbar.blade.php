    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">Blog de actividades</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                  </li>
                  @guest
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="modal" data-target="#loginmodal">Accesso</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Administrar </a>
                      </li>
                  @endguest
                </ul>
              </div>
            </div>
          </nav>

@guest 
          <!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Iniciar sesion</h4>
        </div>
        <div class="modal-body">
            <form id="frmlogin" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Usuario</label>
                      <input type="text" name="username" class="form-control" placeholder="Usuario">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Contraseña</label>
                      <input type="password" name="password" class="form-control" placeholder="Contraseña">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnlogin" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
@endguest
  