<!-- /.content-wrapper -->
  <footer class="main-footer">
    <center><strong><?php echo $footer;?></center>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $assets;?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $assets;?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $assets;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $assets;?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $assets;?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $assets;?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $assets;?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $assets;?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $assets;?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $assets;?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $assets;?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $assets;?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $assets;?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $assets;?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $assets;?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $assets;?>dist/js/demo.js"></script>


<!-- MASCARA MOEDA -->
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>   

<script type="text/javascript">

$('.telefone').mask('(00) 0 0000-0000');
$('.dinheiro').mask('#.##0,00', {reverse: true});
$('.estado').mask('AA');

</script>
<!-- Exibição do Alerta -->
<?php

if($_SESSION['alerta'] != ''){ ?>
  <script type="text/javascript">
  var menssagem = '<?php echo $_SESSION['alerta'];?>';
  alert(menssagem);
  </script>
<?php
$_SESSION['alerta'] = '';

} ?>
</body>
</html>