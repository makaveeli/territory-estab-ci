
  <!-- <form action="" method="post" id="theform"> -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-danger mt-4">
          <div class="card-header bg-info">
            <h3 class="card-title no-title">Form Pembentukan Kecamatan</h3>
          </div>
          <div class="card-body">
            <div id="mail-status"></div>
            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Provinsi</label><span id="userName-info" class="info"></span>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-globe-asia"></i></span>
                    </div>
                    <input type="text" name="provinsi" list="exampleList" id="provinsi" autocomplete="off" class="form-control demoInputBox">
                    <input type="hidden" name="flag" id="flag" autocomplete="off">
                      <datalist id="exampleList">
                        <!-- OPTION WITH AJAX -->
                      </datalist>
                  </div>
                </div>
              </div>
  
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kab/Kota</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-city"></i></span>
                    </div>
                    <input type="text" name="kota" list="kota" id="kotax" autocomplete="off" class="form-control">
                      <datalist id="kota">
                        <!-- OPTION WITH AJAX -->
                      </datalist>
                  </div>
                </div>
              </div>
            </div>
                    
            <div class="row">

              <div class="col-md-4">
                <div class="form-group">
                  <label>Kecamatan</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-house-damage"></i></span>
                    </div>
                    <input type="text" name="kecamatan" list="kecamatan" id="kecamatanx" autocomplete="off" class="form-control">
                      <datalist id="kecamatan">
                        <!-- OPTION WITH AJAX -->
                      </datalist>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Tahun Terbentuk</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                    </div>
                    <input type="text" id="years" name="years" class="form-control" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama Calon Kecamatan</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-width"></i></span>
                    </div>
                    <input type="text" id="calon" name="calon" class="form-control" autocomplete="off">
                  </div>
                </div>
              </div>

            </div>
  
            <div class="row">

              <div class="col-md-6">
                <div class="card crdless">
                  <div class="card-body">
                    <div class="input_fields_wrap">
                      <div>
                        <input type="text" name="mytext[]" id="lal" class="kol" placeholder="Cakupan Wilayah" autocomplete="off"><button class="add_field_button btn btn-sm btn-success mb-1" title="add">+</button><br>
                      </div>
                    </div>
                  </div>
                </div>
                <small class="text-danger pl-1"><i> * ) Minimal 5 Untuk Cakupan Wilayah Kota  </i></small>
                <br>
                <small class="text-danger pl-1"><i> * ) Minimal 10 Untuk Cakupan Wilayah Kabupaten  </i></small>
              </div>
  
              <div class="col-md-3">
                <div class="form-group">
                  <label>Batasan Wilayah </label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-sync-alt"></i></span>
                    </div>
                    <select name="batasan" id="batasan" class="form-control" autocomplete="off">
                      <!-- <option value=""></option> -->
                      <option value="">7,5 Km&sup2; - 10 Km&sup2;</option>
                      <option value="">10 Km&sup2; - 12,5 Km&sup2;</option>
                      <option value=""> > 12,5 Km&sup2;</option>
                    </select>
                  </div>
                  <small class="text-danger pl-1"><i> a) 7,5 Km&sup2; - 10 Km&sup2; Untuk Semua Provinsi Jawa & Bali  </i></small>
                <br>
                <small class="text-danger pl-1"><i> b) 10 Km&sup2; - 12,5 Km&sup2; Untuk Semua Provinsi Sumatera & Sulawesi  </i></small>
                <br>
                <small class="text-danger pl-1"><i> c) > 12,5 Km&sup2; Di luar dari opsi A & B  </i></small>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Luas Wilayah</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-grip-horizontal"></i></span>
                    </div>
                    <input type="text" class="form-control" name="luas" id="luas" autocomplete="off">
                  </div>
                </div>
              </div>
  
            </div>
                    
          <div class="oke-jo">
            <a href="<?php echo base_url('/dashboard'); ?>" class="btn btn-sm btn-danger noob">Back</a>
            <input type="reset" class="btn btn-sm btn-secondary noob" value="Reset" onClick="kuvk()">
            <input type="submit" value="Save" class="btn btn-sm btn-success noob" id="simpan">
          </div>        
        </div>
                <!-- /.card-body -->
      </div>
    </div>
          <!-- /.row -->
  <!-- </form> -->
