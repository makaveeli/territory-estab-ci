<?php

class Dashboard extends MX_Controller
{
  public function index()
  {
    $this->load->view('index');
  }

  public function view_options()
  {
    $this->load->view('options');
    $this->load->view('formulir_js');
  }

  public function form_pembentukan()
  {
    $this->load->view('formulir');
    $this->load->view('formulir_js');
  }

  function provinsi()
  {
    $provinsi = $this->input->post('provid');

    $this->db->like('nama_provinsi',$provinsi);
    $data = $this->db->get('provinsi')->result_array();

    foreach ($data as $row)
    {
      echo '<option value="'.$row['nama_provinsi'].'">';
    }
  }

  function kota()
  {
    $provinsi = $this->input->post('provinsi');

    $this->db->select('*');
    $this->db->from('kota');
    $this->db->join('provinsi', 'kota.id_provinsi = provinsi.id_provinsi');
    $this->db->where('provinsi.nama_provinsi',$provinsi);
    $data = $this->db->get()->result_array();

    // $ret='';
    foreach ($data as $row)
    {
      echo '<option value="'.$row['nama_kota'].'">';
    }
  }

  function flag()
  {

    $provinsi = $this->input->post('flag');

    $this->db->select('flag');
    $this->db->from('provinsi');
    $this->db->where('nama_provinsi',$provinsi);
    $data = $this->db->get()->result_array();

    echo json_encode($data);
  }

  function kecamatan()
  {
    $kecamatan = $this->input->post('kecamatan');

    $this->db->select('*');
    $this->db->from('kecamatan');
    $this->db->join('kota', 'kecamatan.id_kota = kota.id_kota');
    $this->db->where('kota.nama_kota',$kecamatan);
    $data = $this->db->get()->result_array();

    foreach ($data as $row)
    {
      echo '<option value="'.$row['nama_kecamatan'].'">';
    }
  }

  function insert()
  {
    
    $provinsi = $this->input->post('provinsi');
    $kota = $this->input->post('kota');
    $kecamatan = $this->input->post('kecamatan');
    $year = $this->input->post('year');
    $luas = $this->input->post('luas');
    $calon = $this->input->post('calon');
    $daerah = $this->input->post('daerah');
    $freg = count(array($daerah));
    echo $daerah;
    for($i=0; $i<$freg; $i++)  {
      if(trim($daerah[$i] != ''))  
      {
        $hsl = array( 'STATUS'=> array(
          'NAMA_WILAYAH' => $daerah[$i]
        ));
        echo json_encode($hsl);
      }
      echo $daerah[$i];
    }
    // if(empty(($provinsi) && ($kota) && ($kecamatan) && ($year) && ($luas) && ($calon))){
    //   $data = ['Data Null'];
    //   echo json_encode($data);
    // }else{
      $data = [
        "provinsi" => $provinsi,
        "kota" => $kota,
        "kecamatan" => $kecamatan,
        "tahun_pembentukan" => $year,
        "calon_kecmatan"=>$calon,
        "luas_nya" => $luas,
        "daerah" => $daerah
      ];

      echo json_encode($data);
    // }


    
    // echo json_encode($preg);
           


  }

}