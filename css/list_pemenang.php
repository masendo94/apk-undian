<?php include 'header.php'; ?>
 
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <div class="card shadow mb-4">
            <a href="coba.php" class="btn btn-success btn-block">Mulai Undian</a>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Anggota SI JAKA</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                      $data = mysqli_query($conn,"SELECT * FROM tbl_anggota");
                      $no = 1;
                      while($row = mysqli_fetch_array($data)) :
                      ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['no_undian']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['alamat']; ?></td>
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
