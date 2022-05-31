<?php include ('__head.php'); ?>
<?php include ('__header.php'); ?>
<?php include ('__menu.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pesquisar Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de Usuarios</h3>

                 <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <form class="form-inline ml-6" method="post" action="" name="pesquisarUsuario">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="nomeUsuario" type="search" placeholder="Pesquisar Usuario" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Tipo</th>
                      <th>Situação</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if($_SESSION['listar_admin'] == 1){
                    ?>
                      <?php foreach ($todosUsuarios as $key => $usuario) { ?>
	                    <tr>
	                      <td><?php echo $usuario['id']; ?></td>
	                      <td><?php echo utf8_encode($usuario['username']); ?></td>
	                      <td><?php echo utf8_encode($usuario['email']); ?></td>
	                      <td><?php echo $tipoUsuario[$usuario['is_admin']]; ?></td>
                          <td><?php echo $situacao[$usuario['ativo']]; ?></td>
	                      <td><a href="<?php echo $urlSite.'/usuarios-cadastrar/'.$usuario['id'];?>/editar">EXPORTAR PDF</a></td>
	                    </tr>
                    <?php } ?>
                    <?php
                      }else{
                    ?>
                    <tr>
                    <form action="" method="POST">
                      <input class="form-control" type="text" name="adminkey" placeholder="Admin Key" maxlength=9>
                      <center><button type="submit" class="btn btn-primary">Acessar</button></center>
                    </form>
                    </tr>
                    <?php
                      }
                    ?>
                  	
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include ('__footer.php'); ?>