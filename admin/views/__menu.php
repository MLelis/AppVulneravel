  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $urlSite;?>" class="brand-link">
      <img src="<?php echo $assets;?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $tituloSite;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if($_SESSION["fotoUsuario"]){ ?>
          <img src="<?php echo $urlArquivos.'/'.$_SESSION['fotoUsuario'];?>" class="img-circle elevation-2" alt="User Image">
          <?php }else{  ?>
            <img src="<?php echo $assets;?>/images/semfoto.jpg" class="img-circle elevation-2" alt="User Image">
          <?php } ?>
        </div>
        <div class="info">
          <a href="#" class="d-block">Olá <?php echo $_SESSION['usuario'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">NEWS</li>
          
            <li class="nav-item">
              <a href="<?php echo $urlSite;?>/categorias-cadastrar" class="nav-link">
                <i class="nav-icon fas fa-plus-circle"></i>
                <p>
                  CATEGORIAS CAD.
                </p>
              </a>
            </li>
          
            <li class="nav-item">
              <a href="<?php echo $urlSite;?>/categorias-pesquisar" class="nav-link">
                <i class="nav-icon fab fa-product-hunt"></i>
                <p>
                  CATEGORIAS
                </p>
              </a>
            </li>
          
          <li class="nav-item">
            <a href="<?php echo $urlSite;?>/noticias-cadastrar" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                NOTICÍAS CAD.
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $urlSite;?>/noticias-pesquisar" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                NOTICÍAS
              </p>
            </a>
          </li>
          
          
            <li class="nav-header">USUÁRIOS</li>
            <!-- <li class="nav-item">
              <a href="<?php //echo $urlSite;?>/usuarios-cadastrar" class="nav-link">
                <i class="nav-icon fas fa-plus-circle"></i>
                <p>
                  CADASTRAR
                </p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?php echo $urlSite;?>/usuarios-pesquisar" class="nav-link">
                <i class="nav-icon fab fas fa-users"></i>
                <p>
                  PESQUISAR
                </p>
              </a>
            </li>
          
         
          <li class="nav-header">DESLOGAR</li>
          <li class="nav-item">
            <a href="<?php echo $urlSite;?>/login/sair" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                SAIR
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>











  