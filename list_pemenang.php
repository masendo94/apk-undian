<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UNDIAN SI JAKA</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>
  #content-wrapper{
    background-image : url('vendor/img/b.gif');
    /* background-size: cover; */
    height : 900px;
    opacity: 1;
  }
</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   
    <!-- End of Sidebar -->
        <!-- End of Topbar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="">
          <div class="row justify-content-center mt-5">
            <div class="col-md-6 " style="background-color:transparant;">
                <table class="table text-danger" style="font-size:20px; font-weight:bold;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Undian</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $data = mysqli_query($conn,"SELECT nama, no_undian, alamat FROM tbl_anggota, history WHERE `tbl_anggota`.`id` = `history`.`anggota_id` ORDER BY `history`.`id` ASC ");
                      $no = 1;
                      while($row = mysqli_fetch_array($data)) :
                      ?>
                    <tr>
                      <th><?= $no++; ?></th>
                      <th><?= $row['no_undian']; ?></th>
                      <th><?=$row['nama'];?></th>
                      <th><?=$row['alamat'];?></th>
                    </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script>
    $(function(){
     $('#dataTable').DataTable();
    });
  </script>

</body>

</html>
