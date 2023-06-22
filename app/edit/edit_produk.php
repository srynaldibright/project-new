<?php
$id    =  $_GET['id'];  
$query =  mysqli_query($koneksi,"SELECT * FROM tb_produk WHERE id='$id'");
$view  =  mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"> Edit Data Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <form method='GET' action="update/update_produk.php">
                  <div class="row">
                    <div class="col-sm-6">

                      <!-- text input -->
                      <div class="form-group">
                        <label>Kode</label>
            <input type="text" class="form-control" placeholder="kode" name='kode' value='<?php echo $view['kode']; ?>'>

                      </div>
                    </div>
                    
              </div>
              <div class="row">
              <div class="col-sm-6">
                    <!-- textarea -->
                <div class="form-group">
                  <label>Nama Produk</label>
  <input type="text" class="form-control" placeholder=" Nama Produk" name='nama_produk' value='<?php echo $view['nama_produk']; ?>'>
  <input type="text" class="form-control" placeholder=" Nama Produk" name='id' value='<?php echo $view['id']; ?>' hidden>

                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jenis Sediaan</label>
                  <select id="inputState" class="form-control" name="jenis_sediaan">
                  <option value="<?php echo $view['jenis_sediaan']; ?>" selected><?php echo $view['jenis_sediaan'];?></option>
                  <option value="phm_jamu"> Phm jamu </option>
                  <option value="phm_obat">Phm Obat </option>
                  <option value="phm_suplemen"> Phm Suplemen</option>
                  <option  value="phm_lainnya"> Phm lainnya </option>
                </select>                      
              </div>
                    </div>
                    
                  </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>lokator</label>
                         <input type="text" class="form-control" placeholder="Lokator" name='lokator' value='<?php echo $view['lokator']; ?>'>
                      </div>
                    </div>
                    
                  </div>
             <button type="submit" class="btn btn-sm btn-info"> SIMPAN </button>
                  </div>
                </form>
              </div>
  </div>
</section>