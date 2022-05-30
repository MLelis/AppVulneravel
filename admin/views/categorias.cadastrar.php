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
            <h1>Categorias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cadastrar Categorias</li>
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
              <form role="form" action="" method="post" name="formCadastrarCategoria" id="formCadastrarCategoria" enctype="multipart/form-data">

                <?php if(isset($url[3])){ ?>      
              	<input type="hidden" name="opcForm" value="modificar">
                <?php }else{ ?>
                <input type="hidden" name="opcForm" value="cadastrar">
                <?php } ?>

                <div class="card-body">
                  <div class="form-group">
                    <label for="nomeCategoria">Nome:</label>
                    <input type="text" class="form-control" id="nomeProduto" name="nomeCategoria" placeholder="Informe o nome da Categoria" value="<?php if($retornaCategoria['nome']){ echo $retornaCategoria['nome']; }?>">
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