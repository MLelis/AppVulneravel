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
              <li class="breadcrumb-item active">Cadastrar Usuarios</li>
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
                <h3 class="card-title"><?php if(isset($url[3])){ echo "Modificar";}else{ echo "Cadastrar";}?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post" name="formCadastrarUsuarios" id="formCadastrarUsuarios" enctype="multipart/form-data">
                <?php if(isset($url[3])){ ?>      
              	<input type="hidden" name="opcForm" value="modificar">
                <?php }else{ ?>
                <input type="hidden" name="opcForm" value="cadastrar">
                <?php } ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nomeUsuario">Username:</label>
                    <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe o Username do Usuario" value="<?php if($retornaUsuario['username']){ echo $retornaUsuario['username']; }?>">
                  </div>
                  <div class="form-group">
                    <label for="emailUsuario">Email:</label>
                    <input type="text" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Informe o Email do Usuario" value="<?php if($retornaUsuario['email']){ echo $retornaUsuario['email']; }?>">
                  </div>
                  <div class="form-group">
                    <label for="passwordUsuario">Senha:</label>
                    <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario" placeholder="Informe a Senha do Usuario" value="<?php if($retornaUsuario['password']){ echo '**********'; }?>">
                  </div>
                  <div class="form-group">
                        <label>Categoria</label>
                        <select name="categoriaUsuario" id="categoriaUsuario" class="form-control">
                          <option value="">Selecione a categoria</option>
                         
                            <option value="0" <?php if($retornaUsuario['is_admin'] == 0){ echo "selected";} ?>>Gerenciador</option>
                            <option value="1" <?php if($retornaUsuario['is_admin'] == 1){ echo "selected";} ?>>Administrador</option>
                          <
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="fotoNoticia">Foto
                        <?php if($retornaNoticia['foto']){  ?>
                          <label for="fotoAtual"><a href="<?php echo $urlArquivos.$retornaUsuario['foto'];?>"> Ver Foto Atual.</a></label>
                        <?php } ?>
                     </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotoUsuario" name="fotoUsuario">
                        <label class="custom-file-label" for="escolhaFoto">Escolha a foto</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
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