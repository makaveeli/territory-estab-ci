<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
<body>

  <div class="container-fluid mt-2">
    <form action="" id="formSubmit">
      <h2>Pembentukan Kecamatan</h2>
      <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi" list="exampleList" id="provinsi" autocomplete="off" class="form-control">
        <input type="hidden" name="flag" id="flag" autocomplete="off">
          <datalist id="exampleList">
            <!-- OPTION WITH AJAX -->
          </datalist>
      </div>
      <!-- <label for="">Kecamatan Induk :</label> -->
      <div class="form-group">
        <label for="">Kab/Kota</label>
        <input type="text" name="kota" list="kota" id="kotax" autocomplete="off" class="form-control">
          <datalist id="kota">
            <!-- OPTION WITH AJAX -->
          </datalist>
      </div>
     <div class="form-group">
      <label for="">Kecamatan</label>
        <input type="text" name="kecamatan" list="kecamatan" id="kecamatanx" autocomplete="off" class="form-control">
          <datalist id="kecamatan">
            <!-- OPTION WITH AJAX -->
          </datalist>
     </div>
     <div class="form-group">
        <label for="">Tahun Terbentuk</label>
        <input type="text" id="years" name="years" class="form-control" autocomplete="off">
     </div>
     <div class="form-group">
        <label for="">Tahun Terbentuk</label>
        <input type="text" id="years" name="years" class="form-control" autocomplete="off"> 
     </div>
     <div class="form-group">
        <label for="">Nama Calon Kecamatan</label>
        <input type="text" id="calon" name="calon" class="form-control" autocomplete="off">
     </div>
     <div class="row">
      <div class="col-md-9">
        <div class="form-group input_fields_wrap">
          <label for="">tambahkan desa</label>
            <div style="{display: inline}">
              <input type="text" name="mytext[]" id="lal" class="form-control" autocomplete="off">&nbsp;<button class="add_field_button">+</button><br>
            </div>
        </div>
      </div>
     </div>
     <div class="form-group">
        <label for="">Luas Wilayah</label>
          <select name="" id="" class="form-control">
            <option value="">a</option>
            <option value="">b</option>
            <option value="">c</option>
          </select>
     </div>
     <div class="form-group">
        <label for="">Luas Wilayah</label>
        <input type="text" id="luas" class="form-control" autocomplete="off"> Km2
     </div>
        <input type="submit" value="simpan" id="simpan" class="btn btn-primary">
    </form>
  </div>
    
  <script src="<?php echo base_url(); ?>asset/js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
</body>
</html>