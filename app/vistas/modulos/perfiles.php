<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administración de Perfiles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administración de perfiles</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="register-box" style="margin: auto">
    <div class="register-logo">
      <a href="#"><b>ADSO</b>SENA</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Registrar una perfil</p>

        <form action="#" method="post">
          <div class="input-group mb-3">
            <select class="form-control" name="tipo_documento">
              <option value="" disabled selected>Tipo de documento</option>
              <option value="CC">Cédula</option>
              <option value="TI">Tarjeta de Identidad</option>
              <option value="PPT">PPT</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-id-card"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Numero de documento">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-id-card"></span>
              </div>
            </div>
          </div>

          
          <div class="input-group mb-3">
            <select class="form-control" name="Categoria">
              <option value="" disabled selected>Tipo de categoria</option>
              <option value="administracion">Administración</option>
              <option value="ventas">Ventas</option>
              <option value="atencion-al-cliente">Atención al cliente</option>
              <option value="publicidad">Publicidad</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-th-list"></span>
              </div>
            </div>
          </div>


          <div class="row">
            
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-block btn-personalizado">Register</button>
            </div>
            <!-- /.col -->
          </div>

        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
        </div>
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>