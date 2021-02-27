<?php

class Dashboard extends MX_Controller
{
  public function index()
  {
    $this->load->view('header');
    $this->load->view('index');
    $this->load->view('footer');
  }

  // public function view_options()
  // {
  //   $this->load->view('header');
  //   $this->load->view('options');
  //   $this->load->view('footer');
  // }

  public function form_pembentukan()
  {
    $this->load->view('header');
    $this->load->view('formulir');
    $this->load->view('formulir_js');
    $this->load->view('footer');
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

  function insert_induk_kec()
  {
    
    $provinsi = $this->input->post('provinsi');
    $kota = $this->input->post('kota');
    $kecamatan = $this->input->post('kecamatan');
    $year = $this->input->post('year');
    $luas = $this->input->post('luas');
    $calon = $this->input->post('calon');
    
    if(empty(($provinsi) && ($kota) && ($kecamatan) && ($year) && ($luas) && ($calon))){
      $msg['err'] = 'error';
      echo json_encode($msg);
    }else{
      $data = [
        "nama_provinsi" => $provinsi,
        "nama_kota" => $kota,
        "nama_kec_induk" => $kecamatan,
        "nama_calon_kec"=>$calon,
        "tahun_terbentuk" => $year,
        "luas_wilayah" => $luas
      ];
      $this->db->insert('dim_calon_kecamatan', $data);
      $msg['ins'] = $this->db->insert_id();
      // $msg['ins'] = 1;
    
      $msg['oke'] = 'success';
      echo json_encode($msg);
    }
  }

  function insert_wilayah()
  {
    
    $id_induk = $this->input->post('id_wil');
    $daerah = $this->input->post('daerah');
      $data_2 = [
        "id_kec_baru" => $id_induk,
        "nama_wilayah" => $daerah
      ];
      $this->db->insert('dim_cakupan_wilayah', $data_2);
      // $msg = 'success';
      // echo json_encode($data_2);
  }

}