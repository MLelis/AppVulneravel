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
            <h1>Revendedor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pesquisar Noticias</li>
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
                <h3 class="card-title">Lista de Noticias</h3>

                 <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <form class="form-inline ml-6" method="post" action="" name="pesquisarNoticia">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="tituloNoticia" type="search" placeholder="Pesquisar Noticia" aria-label="Search">
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
                      <th>Titulo</th>
                      <!-- <th>Descrição</th> -->
                      <th>Categoria</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach ($todasNoticias as $key => $noticia) { ?>
	                    <tr>
	                      <td><?php echo $noticia['id_noticia']; ?></td>
	                      <td><?php echo strip_tags(substr(utf8_encode($noticia['titulo']),0,40))."..."; ?></td>
	                      <!-- <td><?php //echo strip_tags(substr(utf8_encode($noticia['descricao']),0,20))."...";?></td> -->
                        <td><?php echo $todosCategorias[$noticia['id_categoria']]['nome']; ?></td>
	                      <td><a href="<?php echo $urlSite.'/noticias-cadastrar/'.$noticia['id_noticia'];?>/editar">Editar</a> | <a href="<?php echo $urlSite.'/noticias-cadastrar/'.$noticia['id_noticia'];?>/excluir" onclick="return confirm('Deseja excluir a noticia: <?php echo $noticia['titulo']; ?> ?')">Excluir</a></td>
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