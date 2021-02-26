<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
<body>

  <div class="container-fluid mt-2">
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">GAMBAR</button> -->
    <br>
    <button>GAMBAR</button> <a href="<?php echo base_url(); ?>dashboard/form_pembentukan"> PENGGABUNGAN KECAMATAN</a>
    <br>
    <button>GAMBAR</button> <a href=""> PENYESUAIAN KECAMATAN</a>
    <p>a. Perubahan batas wilayah kecamatan</p>
    <p>b. Perubahan nama kecamatan</p>
    <p>c. Pemindahan ibu kota kecamatan</p>
    <p>d. Perubahan nama ibu kota kecamatan</p>
    <p>e. Perbaikan redaksional nama kecamatan</p>
  </div>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pembentukan Kecamatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" name="provinsi" list="exampleList" id="provinsi" autocomplete="off" class="form-control form-control-sm" placeholder="Provinsi">
          <input type="hidden" name="flag" id="flag" autocomplete="off">
              <datalist id="exampleList">
                <!-- OPTION WITH AJAX -->
              </datalist>
        </div>
        <div class="form-group">
        <input type="text" name="kota" list="kota" id="kotax" autocomplete="off" class="form-control form-control-sm" placeholder="Kabupate/Kota">
            <datalist id="kota">
              <!-- OPTION WITH AJAX -->
            </datalist>
        </div>
        <div class="form-group">
        <input type="text" name="kecamatan" list="kecamatan" id="kecamatanx" autocomplete="off" class="form-control form-control-sm" placeholder="Kecamatan Induk">
            <datalist id="kecamatan">
              <!-- OPTION WITH AJAX -->
            </datalist>
        </div>
        <div class="form-group">
          <input type="text" id="years" name="years" class="form-control form-control-sm" placeholder="Tahun Terbentuk" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="text" id="calon" name="calon" class="form-control form-control-sm" placeholder="Nama Calon Kecamatan" autocomplete="off">
        </div>
        <div class="form-row align-items-center input_fields_wrap">
          <div class="col-sm-11 my1 mb-3">
            <div>
              <input type="text" name="mytext[]" id="lal" autocomplete="off" class="form-control form-control-sm"  placeholder="Cakupan Wilayah">
            </div>
          </div>
        
          <!-- <div class="col-auto my-1"> -->
            <button type="submit" class="btn btn-sm btn-primary mb-3 add_field_button"> + </button>
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
  <script src="<?php echo base_url(); ?>asset/js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>