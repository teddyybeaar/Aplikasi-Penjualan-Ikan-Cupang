

        

    <!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    
    
        
    
    

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
        
        
        <!-- Custom Theme JavaScript -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/startmin.js"></script>
        
        <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

<style>
#imagePreview {
    width: 150px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>
<script type="text/javascript">
$(function() {
    $("#file").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
<script type="text/javascript">
    Morris.Bar({
          element: 'graph',
          data: <?php echo $chart;?>,
          xkey: 'thn',
          ykeys: ['total',],
          labels: ['Penjualan'],
          parseTime: false,
          resize: true,
          redraw: true,
        });
    
    </script>

<script type="text/javascript">
    Morris.Line({
          element: 'graph2',
          data: <?php echo $chart2;?>,
          xkey: 'thn',
          ykeys: ['total',],
          labels: ['Penjualan'],
          parseTime: false,
          resize: true,
          redraw: true,
        });
    </script>

<script type="text/javascript">
    Morris.Line({
          element: 'graph3',
          data: <?php echo $chart3;?>,
          xkey: 'thn',
          ykeys: ['total',],
          labels: ['Penjualan'],
          parseTime: false,
          resize: true,
          redraw: true,
        });
    </script>

</body>
</html>