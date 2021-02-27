<script src="<?php echo base_url(); ?>asset/js/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function(){
        // menampilkan list provinsi
        var prov = $('#exampleList').val();
        
        
            $.ajax({
              type : 'post',
              url : '<?php echo base_url(); ?>dashboard/provinsi',
              data : {provid : prov},
              success : function(data){
                $('#exampleList').html(data);
                $('#provinsi').val('');
              }
            })

        // menampilkan list kota
        $('#provinsi').change(function(){
          // alert('ya')
          var gp = $('#provinsi').val();
            $.ajax({
              type : 'post',
              url : '<?php echo base_url(); ?>dashboard/kota',
              data : {provinsi : gp},
              success : function(data){
                $('#kota').html(data);
                // console.log(data)
                $.ajax({
                  type : 'post',
                  url : '<?php echo base_url(); ?>dashboard/flag',
                  data : {flag : gp},
                  success : function(fre){
                    var fg = JSON.parse(fre); 
                    gy = fg[0]['flag'].toString()
                    $('#flag').val(gy);
                    // console.log(gy)
                  }
                })
              }
            })
        });

         // menampilkan list kecamatan
         $('#kotax').change(function(){
          // alert('ya')
          // var pr = $('#provinsi').val();
          var kt = $('#kotax').val();
            $.ajax({
              type : 'post',
              url : '<?php echo base_url(); ?>dashboard/kecamatan',
              data : {kecamatan : kt},
              success : function(data){
                $('#kecamatan').html(data);
                // console.log(data)
              }
            })
        });
        
        $('.add_field_button').val();
        var max_fields      = 100; 
        var wrapper   		= $(".input_fields_wrap"); 
        var add_button      = $(".add_field_button"); 
        
        var x = 1;
        $(add_button).click(function(e){ 
          e.preventDefault();
          if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input type="text" class="kol" name="mytext[]" placeholder="Cakupan Wilayah" autocomplete="off"><button type="submit" class="remove_field btn btn-sm btn-warning mb-1" title="remove">X</button></div>'); 
          } 
        });
        
        $(wrapper).on("click",".remove_field", function(e){
          e.preventDefault(); $(this).parent('div').remove(); x--;
    })

  }) 
$('#simpan').on('click', function(e){
  e.preventDefault();
        
  var provinsi = $('#provinsi').val();
  var kota = $('#kotax').val();
  var luas = $('#luas').val();
  var kecamatan = $('#kecamatanx').val();
  var flag = $('#flag').val();
  var years = $('#years').val();
  var calon = $('#calon').val();
  var h = document.getElementsByName('mytext[]');

              
  var k = h.length
  console.log(k)
  var str = kota.match(/KAB/gi);
  var res = luas.replace(",", ".");
  var po = ''

  // variabel init to db
  var pro=''
  var kot=''
  var kec=''
  var yr=''
  var cln=''
  var ls=''

  if(provinsi == '' || kota == '' || luas == '' || kecamatan == '' || years == '' || calon == ''){
    alert('Data Ada Yang Kosong')
  }else{
    if(str == 'KAB'){
      if(k < 10){
                    // console.log('')
        alert('untuk kabupaten minimal desa 10')
      }else{
        if(flag == 1){
          if(res < 7.5){
                      // console.log('ini jawa bali kurang luasnya')
            alert('untuk jawa dan bali luasnya tidak kurang dari 7,5 Km')
          }else{
                        // console.log('jawa antap luasnya')
            pro = provinsi
            kot = kota
            kec = kecamatan
            yr = years
            cln = calon
            ls = luas
            daerah = h

          }
        }else if(flag == 2){
          if(res < 10){
                        // console.log('ini sum & sul kurang luasnya')
          alert('Untuk Sumatera dan Sulawesi Luas daerahnya tidak kurang dari 10 Km')
          }else{
                          // console.log('sum & sul antap luasnya')
            pro = provinsi
            kot = kota
            kec = kecamatan
            yr = years
            cln = calon
            ls = luas
            daerah = h
          }
        }else{
          if(res < 12.5){
                        // console.log('ini sisanya kurang luasnya')
            alert('Diluar Sumatera,jawa,bali dan sulawesi luas daerahnya tidak boleh kuurang dari 12,5 km')
          }else{
                          // console.log('mantapp luasnya')
            pro = provinsi
            kot = kota
            kec = kecamatan
            yr = years
            cln = calon
            ls = luas
            daerah = h
          }
        }
                    
      }
    }else{
      if(k < 5){
        alert('untuk kota minimal desa 5')
      }else{
        if(flag == 1){
          if(res < 7.5){
            alert('untuk jawa dan bali luasnya tidak kurang dari 7,5 Km')
          }else{
            pro = provinsi
            kot = kota
            kec = kecamatan
            yr = years
            cln = calon
            ls = luas
            daerah = h
          }
        }else if(flag == 2){
          if(res < 10){
            alert('Untuk Sumatera dan Sulawesi Luas daerahnya tidak kurang dari 10 Km')
          }else{
            pro = provinsi
            kot = kota
            kec = kecamatan
            yr = years
            cln = calon
            ls = luas
            daerah = h
          }
        }else{
          if(res < 12.5){
            alert('Diluar Sumatera,jawa,bali dan sulawesi luas daerahnya tidak boleh kuurang dari 12,5 km')
          }else{
            pro = provinsi
            kot = kota
            kec = kecamatan
            yr = years
            cln = calon
            ls = luas
            daerah = h
          }
        }
                    
      }
    }

    var datac = {'provinsi' : pro, 'kota': kot, 'kecamatan': kec, 'years': yr, 'calon_kecamatan': cln, 'luas':ls}

  
                    
      
        $.ajax({
          type : 'post',
          url : '<?php echo base_url(); ?>dashboard/insert_induk_kec',
          dataType: 'json',
          data : {provinsi: pro, kota: kot, kecamatan : kec, year: yr, calon: cln, luas: ls},
          cache: false,
            success: function(msg){
              for (var i = 0, iLen = h.length; i < iLen; i++) {
                f = h[i].value;
                $.ajax({
                type : 'post',
                url : '<?php echo base_url(); ?>dashboard/insert_wilayah',
                dataType: 'text',
                data : {daerah: f, id_wil : msg.ins},
                cache: false,
                  success: function(data){
                    // console.log(data)
                  },
                  error:function (){
                    // alert('failure')
                  }
                })
              }
              if(msg.oke === 'success'){
                alert('insert berhasil')
                window.location.reload()
              }else if(msg.err ==='error'){
                alert('ada error')
              }
              console.log(msg)
            },
            error:function (){
              // alert('failure')
            }
          })
  }
})

function kuvk()
{
  window.location.reload()
}
</script>