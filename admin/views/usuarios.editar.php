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
            <h1>Meu Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Alterar Dados</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php if(isset($url[3])){ echo "Modificar";}else{ echo "Alterar";}?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post" name="formCadastrarUsuarios" id="formCadastrarUsuarios" enctype="multipart/form-data">    
              	<input type="hidden" name="opcForm" value="alterarPerfil">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $_SESSION['id_admin'];?>">
                  <div class="form-group">
                    <label for="nomeUsuario">Username:</label>
                    <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe o Username do Usuario" value="<?php echo $_SESSION["usuario"]; ?>">
                  </div>
                  <div class="form-group">
                    <label for="emailUsuario">Email:</label>
                    <input type="text" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Informe o Email do Usuario" value="<?php echo $_SESSION["email"]; ?>">
                  </div>
                  <div class="form-group">
                    <label for="passwordUsuario">Senha:</label>
                    <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario" placeholder="Alterar a senha do usuario" value="">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                	<input class="btn btn-primary" type="submit" name="Cadastrar">
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include ('__footer.php'); ?>