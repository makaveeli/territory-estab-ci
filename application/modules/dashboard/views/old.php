<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
<body>

  <div class="container-fluid mt-2">
    <div class="border">
      <form class="form-db">
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Provinsi</label>
          <div class="col-sm-5">
            <input type="text" name="provinsi" list="exampleList" id="provinsi" autocomplete="off" class="form-control form-control-sm" placeholder="Provinsi">
            <input type="hidden" name="flag" id="flag" autocomplete="off">
              <datalist id="exampleList">
                <!-- OPTION WITH AJAX -->
              </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kab/Kota</label>
          <div class="col-sm-5">
            <input type="text" name="kota" list="kota" id="kotax" autocomplete="off" class="form-control form-control-sm" placeholder="Kabupate/Kota">
            <datalist id="kota">
              <!-- OPTION WITH AJAX -->
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
          <div class="col-sm-5">
            <input type="text" name="kecamatan" list="kecamatan" id="kecamatanx" autocomplete="off" class="form-control form-control-sm" placeholder="Kecamatan Induk">
            <datalist id="kecamatan">
              <!-- OPTION WITH AJAX -->
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tahun Terbentuk</label>
          <div class="col-sm-5">
            <input type="text" id="years" name="years" class="form-control form-control-sm" placeholder="Tahun Terbentuk" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Calon Kecamatan</label>
          <div class="col-sm-5">
            <input type="text" id="calon" name="calon" class="form-control form-control-sm" placeholder="Nama Calon Kecamatan" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <div class="input_fields_wrap">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cakupan Wilayah</label>
            <div class="col-sm-5 gandia form-inline">
              <div><input type="text" name="mytext[]" id="lal" autocomplete="off"class="form-control form-control-sm" placeholder="Cakupan Wilayah" autocomplete="off">&nbsp;<button class="add_field_button cc">+</button><br></div>
            </div>
          </div>
        </div>
        
      </form>
    </div>
  </div>
    
  <script src="<?php echo base_url(); ?>asset/js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
</body>
</html>