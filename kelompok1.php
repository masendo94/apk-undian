<?php include 'header.php';
?>
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-primary bg-primary topbar mb-4 static-top shadow" >

        <h4 style="color: white; font-weight: bold;">UNDIAN SI JAKA USP MINATANI</h4>

        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-2">
                  <input type="text" class="form-control" value="0" style="text-align:center; font-size:200px;">
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" value="0" style="text-align:center; font-size:200px;">
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom1" id="kolom1" class="form-control" value="-" style="text-align:center; font-size:200px;">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol1">acak</button>
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom2" id="kolom2" class="form-control" value="-" style="text-align:center; font-size:200px;">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol2">acak</button>
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom3" id="kolom3" class="form-control" value="-" style="text-align:center; font-size:200px;">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol3">acak</button>
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom4" id="kolom4" class="form-control" value="-" style="text-align:center; font-size:200px;">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol4">acak</button>
                </div>
                
                <div class="col-md-12 mt-2">
                    <button class="btn btn-success btn-block" id="validasi">CEK PEMENANG</button>
                </div>
              </div><!--ahir row-->
                
              <div class="row">
                <div class="col-md-6" id="pemenang">
                    
                </div>
              </div>
            </div><!--ahir col md 8-->
            
            <div class="col-md-4 text-dark">
              <h5>List Pemenang</h5>
              <table class="table table-striped small" style="font-weight:bold;">
                <tr>
                  <td>No</td>
                  <td>No Undian</td>
                  <td>Nama</td>
                  <td>Alamat</td>
                </tr>
                <!-- php -->
                <?php
                $n = 1;
                $sql = mysqli_query($conn,"SELECT nama, no_undian, alamat FROM tbl_anggota, history WHERE `tbl_anggota`.`id` = `history`.`anggota_id` ORDER BY `history`.`id` ASC");
                while($row = mysqli_fetch_array($sql)) : 
                ?>
                <tr>
                  <td><?= $n++; ?></td>
                  <td><?= $row['no_undian']; ?></td>
                  <td><?=$row['nama'];?></td>
                  <td><?=$row['alamat'];?></td>
                </tr>
              <?php endwhile ;?>
              </table>
            </div><!--ahir col md 4-->
          </div><!--ahir row utama-->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- End of Footer -->

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
  <script>
    $(function(){
      $('#tombol1').on('click', function(){

        const acak = setInterval(() => {
          let arr = [1,2,3,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom1').val(angka);
        },1);
        $(this).keyup(function(event){
			    if(event.keyCode === 13){
				// alert('oke');
            
            clearInterval(acak); 
            let arr = [1,0];
            const angka = arr[Math.floor(Math.random() * arr.length)];
            $('#kolom1').val(angka);
          
			  }
		});

      });

      // tombol kedua
      $('#tombol2').on('click', function(){
        
        const acak = setInterval(() => {
          let arr = [1,2,3,4,5,0,6,7,8,9];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom2').val(angka);
        },1);

        $(this).keyup(function(event){
              if(event.keyCode === 13){
                clearInterval(acak);
            // alert('oke');
            let arr = [];
              const kolom1 = $('#kolom1').val();
              if(kolom1 == 0){
                arr = [0,1,2,3,4,5,6,7,8,9];
              }else{
                arr = [0,1,2];
              }
              const angka = arr[Math.floor(Math.random() * arr.length)];
              $('#kolom2').val(angka); 

            }
        });

      });

      // tombol 3
      $('#tombol3').on('click', function(){
        const acak = setInterval(() => {
          let arr = [1,2,3,4,5,6,7,8,9,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom3').val(angka);  
        },1);

        $(this).keyup(function(event){
          clearInterval(acak);
          let arr = [];
          const kolom2 = $('#kolom2').val();
          const kolom1 = $('#kolom1').val();
          if(kolom1 == 0 ){
            arr = [1,2,3,4,5,6,7,8,9,0];
          }else{
            if(kolom2 < 2 ){
              arr = [1,2,3,4,5,6,7,8,9,0];
            }else{
              arr = [1,2,3,4,5,6,7,8,0];
            }
          }
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom3').val(angka);
        });
      });

      // tombol 4
      $('#tombol4').on('click', function(){
        const acak = setInterval(() => {
            let arr = [1,2,3,4,5,6,7,8,9,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom4').val(angka);
        },1);

        $(this).keyup(function(event){
          clearInterval(acak);
            arr = [1,2,3,4,5,6,7,8,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom4').val(angka);
        })

      });

      // tombol validasi
      $('#validasi').on('click', function(){
        const a1 = $('#kolom1').val();
        const a2 = $('#kolom2').val();
        const a3 = $('#kolom3').val();
        const a4 = $('#kolom4').val();
        const no_undian = `00${a1}${a2}${a3}${a4}`;
        // ajax untuk mengambil data berdasarkan no undian
        $.ajax({
          url : "get_pemenang.php",
          data : {no_undian : no_undian},
          type : 'post',
          dataType : 'json',
          success : (hasil) => {
            $('#pemenang').html(`
              <form action="input1.php" method="post">
              <table>
                <tr>
                    <td><label>No Undian</label></td>
                    <td><input type="text" name="no_undian" class="form-control" value="${hasil.no_undian}" readonly ></td>
                <tr>
                <tr>
                    <td><label>Nama</label></td>
                    <td><input type="text" name="nama" class="form-control" value="${hasil.nama}" readonly ></td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td><input type="text" name="alamat" class="form-control" value="${hasil.alamat}" readonly ></td>
                </tr>
              </table>
              <input type="text" name="kelompok_id" class="form-control" value="${hasil.kelompok}">
              <button type="submit" class="btn btn-warning btn-block mt-2">Simpan</button>
              </form>
            `)
          }
        })
      })
    });
  </script>

</body>

</html>
