<?php include 'header.php';
?>
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-primary bg-primary topbar mb-4 static-top shadow" >

        <a href="kelompok2.php"><h4 style="color: white; font-weight: bold;">UNDIAN SI JAKA USP MINATANI</h4></a>
          <a href="index.php" class="btn btn-success" style="margin-left:70%;">Home</a>
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
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom2" id="kolom2" class="form-control" value="-" style="text-align:center; font-size:200px;">
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom3" id="kolom3" class="form-control" value="-" style="text-align:center; font-size:200px;">
                </div>
                <div class="col-md-2">
                  <input type="text" name="kolom4" id="kolom4" class="form-control" value="-" style="text-align:center; font-size:200px;">
                 </div>
              </div><!--ahir row-->
                <div class="row">
                <div class="col-md-4 mt-2">
                    <a href="" class="btn btn-success btn-block" id="validasi">Ulangi</a>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol1">Mulai</button>
                  <button class="btn btn-danger mt-2 btn-block" id="tombol1-stop">Berhenti</button>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol2">Mulai</button>
                  <button class="btn btn-danger mt-2 btn-block" id="tombol2-stop">Berhenti</button>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol3">Mulai</button>
                  <button class="btn btn-danger mt-2 btn-block" id="tombol3-stop">Berhenti</button>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-primary mt-2 btn-block" id="tombol4">Mulai</button>
                  <button class="btn btn-danger mt-2 btn-block" id="tombol4-stop">Berhenti</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-dark mt-2 btn-block" id="cek">Cek Pemenang</button>
                </div>
              </div><!--ahir row-->
                
              <div class="row">
                <div class="col-md-6" id="pemenang">
                    
                </div>
              </div>
            </div><!--ahir col md 8-->
            
            <div class="col-md-4 text-dark">
              <h5>List Pemenang</h5>
              <a href="reset.php" class="btn btn-warning" ><span class="fas fa-history">Reset</span></a>
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
                    $no = $row['no_undian']; 
                ?>
                <tr>
                  <td><?= $n++; ?></td>
                  <td><?= sprintf('%06d',$no); ?></td>
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
      $('#tombol1-stop').hide();
      $('#tombol2-stop').hide();
      $('#tombol3-stop').hide();
      $('#tombol4-stop').hide();
      $('#tombol2').hide();
      $('#tombol3').hide();
      $('#tombol4').hide();
      $('#tombol1').on('click', function(){
        $(this).hide();
        $('#tombol1-stop').show();

        const acak = setInterval(() => {
          let arr = [1,2,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom1').val(angka);
        },1);
        $('#tombol1-stop').on('click',function(){
            clearInterval(acak); 
          $('#tombol2').show();
          $(this).attr('disabled','disabled');
            let arr = [1,0,2];
            const angka = arr[Math.floor(Math.random() * arr.length)];
            $('#kolom1').val(angka);
		});

      });

      // tombol kedua
      $('#tombol2').on('click', function(){
        $(this).hide();
        $('#tombol2-stop').show();
        const acak = setInterval(() => {
          let arr = [1,2,3,4,5,0,6,7,8,9];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom2').val(angka);
        },1);

        $('#tombol2-stop').on('click', function(){
            $('#tombol3').show();
            clearInterval(acak);
            $(this).attr('disabled','disabled');
            // alert('oke');
            let arr = [];
              const kolom1 = $('#kolom1').val();
              if(kolom1 < 2){
                arr = [0,1,2,3,4,5,6,7,8,9];
              }else{
                arr = [0,1,2,3,4,5,6,7,8];
              }
              const angka = arr[Math.floor(Math.random() * arr.length)];
              $('#kolom2').val(angka); 
        });

      });

      // tombol 3
      $('#tombol3').on('click', function(){
        $(this).hide();
        $('#tombol3-stop').show();
        const acak = setInterval(() => {
          let arr = [1,2,3,4,5,6,7,8,9,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom3').val(angka);  
        },1);

        $('#tombol3-stop').on('click', function(){
          $('#tombol4').show();
          clearInterval(acak);
          $(this).attr('disabled','disabled');
          let arr = [];
          const kolom2 = $('#kolom2').val();
          if(kolom2 < 8 ){
            arr = [1,2,3,4,5,6,7,8,9,0];
          }else{
            arr = [0,1];
          }
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom3').val(angka);
        });
      });

      // tombol 4
      $('#tombol4').on('click', function(){
        $(this).hide();
        $('#tombol4-stop').show();
        const acak = setInterval(() => {
            let arr = [1,2,3,4,5,6,7,8,9,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom4').val(angka);
        },1);

        $('#tombol4-stop').on('click', function(){
          clearInterval(acak);
          $(this).attr('disabled','disabled');
          // let arr = [];
          const kolom3 = $('#kolom3').val();
          // if(kolom3 < 5 ){
          // }else{
          //   arr = [0];
          // }
            let arr = [1,2,3,4,5,6,7,8,9,0];
          const angka = arr[Math.floor(Math.random() * arr.length)];
          $('#kolom4').val(angka);
        })

      });

      // tombol validasi
      $('#cek').on('click', function(){
        // alert('oke');
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
            const url = "input.php";
            $('#pemenang').html(`<form action="input.php" method="POST">
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
              <input type="hidden" name="kelompok_id" class="form-control" value="${hasil.kelompok}">
              <button type="submit" class="btn btn-warning btn-block mt-2">Simpan</button>
            </form>`)
          }
        });
      });
    });
  </script>

</body>

</html>
