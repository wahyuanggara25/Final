<script src="<?php echo base_url('') ?>assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('') ?>assets/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url('') ?>js/ruang-admin.min.js"></script>
<script src="<?php echo base_url('') ?>assets/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('') ?>js/demo/chart-area-demo.js"></script> 
<script src="<?php echo base_url('') ?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('') ?>assets/datatables/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
      $('#dataTableIncoming').DataTable(); 
      $('#dataTableOutgoing').DataTable(); 
      $('#dataTableStore').DataTable(); 
    });
  </script>