<?php 
include 'header.php';
$page= 'kepegawaian';
$subpage= 'penilaian';
include 'adminsidebar.php';
?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Penilaian Pegawai
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data penilaian pegawai</h3>
        </div>
        
        <div class="box-body" >
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Divisi</th>
                  <th>Nama Pegawai</th>
                  <th>Email</th>
                  <th>No.hp</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                require '../db/mdl_penilaian.php';
                $conn = new penilaian();
                $read = $conn->readpenilaian1();
				        while($fetch = $read->fetch_array()){ 
				        ?>
            
                <tr>
                    <td><?php echo $fetch['namadivisi'];?></td>
                    <td><?php echo $fetch['namapegawai'];?></td>
                    <td><?php echo $fetch['email']?></td>
					          <td><?php echo $fetch['nohp']?></td>
                  <td>
                    <a class="btn btn-primary" href="../admin/formpenilaianpegawai.php?idpegawai=<?php echo $fetch['idpegawai'];?>"><i style="width:12px;" class="fa fa-copy"></i>&nbsp&nbspBeri penilaian</a>
                 </td>
					      </tr>
                <?php
					      }
				        ?>
                </tbody>
              </table>
            
            </div>
        <!-- /.box-body -->
       

        <div class="box-footer">
        
        <a class="btn btn-warning bg-orange" href="#"><i style="width:12px;" class="fa fa-file-o"></i>  Laporan Penilaian</a>
        
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include 'footer.php';
 ?>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'scrollX'     : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
