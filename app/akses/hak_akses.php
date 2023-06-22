
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
          <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Jenis Sediaan</th>
                    <th>Lokator</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $no =0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_produk");
                      while($prdk = mysqli_fetch_array($query)){
                        $no++
                        
                      ?>
                <tr>
                      <td width='5%'><?php echo $no;?></td>
                      <td><?php echo $prdk['kode'];?></td>
                      <td><?php echo $prdk['nama_produk'];?></td>
                      <td><?php echo $prdk['jenis_sediaan'];?></td>
                      <td><?php echo $prdk['lokator'];?></td>
                      <td>
                        <a onclick="hapus_data(<?php echo $prdk['id'];?>)" class="btn btn-sm btn-danger"> Hapus</a>
                        <a href="index.php?page=edit-produk&& id=<?php echo $prdk['id'];?>" class="btn btn-sm btn-success"> Edit </a>
                      </td>
                </tr>
                <?php } ?>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.modal -->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">tambah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="GET" action="add/tambah_data.php">
            <div class="modal-body">
                    
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Kode Produk" name="kode" required>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" required>
                      </div>
                       <div class="col">
                <select id="inputState" class="form-control" name="jenis_sediaan">
                  <option selected> Pilih </option>
                  <option value="phm_jamu"> Phm jamu </option>
                  <option value="phm_obat">Phm Obat </option>
                  <option value="phm_suplemen"> Phm Suplemen</option>
                  <option  value="phm_lainnya"> Phm lainnya </option>
                </select>
              </div>          
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Lokator" name="lokator" required >
                      </div>
                      </div>
               
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"> Tutup </button>
              <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
            </form>
          </div>
    </div>
    <script>
      function hapus_data(data_id){
         //alert('ok');
        //window.location=("delete/hapus_data.php?id="+data_id);
        Swal.fire({
  title: 'Apakah Anda Yakin Ingin Menghapus Datanya?',
  showDenyButton: false,
  showCancelButton: true,
  confirmButtonText: 'Hapus Data',
  confirmButtonColor: 'red',
  //denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location=("delete/hapus_data.php?id="+data_id);
  }
})
      }
    </script>

                  
