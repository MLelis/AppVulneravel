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
              <li class="breadcrumb-item active">Pesquisar Categorias</li>
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
                <h3 class="card-title">Lista de Categorias</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <form class="form-inline ml-6" method="post" action="" name="pesquisarCategoria">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="nomeCategoria" type="search" placeholder="Pesquisar Categoria" aria-label="Search">
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
                      <th>Data Cad</th>
                      <th>Situação</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach ($todosCategorias as $key => $categoria) { ?>
	                    <tr>
	                      <td><?php echo $categoria['id_categoria']; ?></td>
	                      <td><?php echo $categoria['nome']; ?></td>
	                      <td><?php echo $categoria['data_cad']; ?></td>
	                      <td><?php echo $situacao[$categoria['ativo']]; ?></td>
	                      <td><a href="<?php echo $urlSite.'/categorias-cadastrar/'.$categoria['id_categoria'];?>/editar">Editar</a> | <a href="<?php echo $urlSite.'/categorias-cadastrar/'.$categoria['id_categoria'];?>/excluir" onclick="return confirm('Deseja excluir a categoria: <?php echo $categoria['nome']; ?> ?')">Excluir</a></td>
	                    </tr>
                    <?php } ?>
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