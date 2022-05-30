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
            <h1>Noticias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cadastrar Noticias</li>
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
              <form role="form" action="" method="post" name="formCadastrarNoticias" id="formCadastrarNoticias" enctype="multipart/form-data">
                <?php if(isset($url[3])){ ?>      
              	<input type="hidden" name="opcForm" value="modificar">
                <?php }else{ ?>
                <input type="hidden" name="opcForm" value="cadastrar">
                <?php } ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="tituloNoticia">Título:</label>
                    <input type="text" class="form-control" id="tituloNoticia" name="tituloNoticia" placeholder="Informe o titulo da Noticia" value="<?php if($retornaNoticia['titulo']){ echo $retornaNoticia['titulo']; }?>">
                  </div>
                  <div class="form-group">
                    <label for="descricaoNoticia">Descrição:</label>
                    <div class="card-body pad">
                    <div class="mb-3">
                      <textarea class="textarea" name="descricaoNoticia" placeholder="Informe o conteudo aqui."
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if($retornaNoticia['descricao']){ echo $retornaNoticia['descricao']; } ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Categoria</label>
                        <select name="categoriaNoticia" id="categoriaNoticia" class="form-control">
                          <option value="">Selecione a categoria</option>
                          <?php foreach ($todosCategorias as $key => $categoria) { ?>
                            <option value="<?php echo $categoria['id_categoria'];?>" <?php if($categoria['id_categoria'] == $retornaNoticia['id_categoria']){ echo "selected";} ?>><?php echo $categoria['nome'];?></option>
                          <?php } ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="fotoNoticia">Foto
                        <?php if($retornaNoticia['foto']){  ?>
                          <label for="fotoAtual"><a href="<?php echo $urlArquivos.$retornaNoticia['foto'];?>"> Ver Foto Atual.</a></label>
                        <?php } ?>
                     </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotoNoticia" name="fotoNoticia">
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