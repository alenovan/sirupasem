<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends MY_Controller {

	public function __construct() {
		$this->load->model('M_barang');
	}

	

	
	  function ajax_action_get_product(){
		$id = $this->input->post('id_barang');
		$data = $this->M_barang->fetch_joins('barang', '*', $joins,'id_barang = '. $id,TRUE);
		if(count($data) == 0){
			$json_data =  array(
				"result" => FALSE ,
				"message" => array('head'=> 'Failed', 'body'=> 'Gagal mengambil Data'),
				"form_error" => '',
				"redirect" => ''
			);
			print json_encode($json_data);
			die();
			}else{
				$json_data =  array(
					"result" => TRUE,
					"message" => array('head'=> 'Success', 'body'=> 'Sukses mengambil Data'),
					"form_error" => '',
					"redirect" => '',
					"count" => count($data),
					"data" => $data
				);
				print json_encode($json_data);
			}
	}

	 function ajax_action_get_all_barang(){
		$data = $this->M_barang->fetch_joins('barang', '*', '','', '',TRUE);
			if(count($data) == 0){
			$json_data =  array(
				"result" => FALSE ,
				"message" => array('head'=> 'Failed', 'body'=> 'Gagal mengambil Data'),
				"form_error" => '',
				"redirect" => ''
			);
			print json_encode($json_data);
			die();
			}else{
				print json_encode($data);
			}
		}


     function ajax_action_add_barang(){
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('nomor_simbada', 'nomor_simbada', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'required');
		$this->form_validation->set_rules('jadwal_maintenance', 'jadwal_maintenance', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		if($this->form_validation->run()==FALSE){
			$error = $this->form_validation->error_array();
			$json_data =  array(
				"result" => FALSE ,
				"message" => array('head'=> 'Failed', 'body'=> 'Pastikan Data terisi Semua'),
				"form_error" => $error,
				"redirect" => ''
			);
			print json_encode($json_data);
			die();
		}else{
			// status 1 = order_ke_server
			// $count_data_product   = $this->M_pemesanan->get_count_data('m__pemesanan');
   //          $id_barang = "BR" . date('his') . $count_data_product;
			$data = array(
				"nama_barang" =>post("nama_barang"),
				"nomor_simbadda" => post("nomor_simbada"),
				"lokasi" => post("lokasi"),
				"spesifikasi" => post("spesifikasi"),
				"tgl_masuk" => post("tgl_masuk"),
				"jadwal_maintenance" => post("jadwal_maintenance"),
				"status" => 1
			);
			$add = $this->M_barang->insert_table("barang",$data);
			if($add==FALSE){

				$json_data =  array(
					"result" => FALSE ,
					"message" => "Gagal Menambah Data",
					"form_error" => $error,
					"redirect" => ''
				);
				print json_encode($json_data);
				die();
			}else{
				 $json_data =  array(
							"result" => TRUE,
							"message" => "Barang di tambahkan",
							"form_error" => '',
							"redirect" => ''
						);
						print json_encode($json_data);
				

					
			}

		}
	}


     function ajax_action_edit_barang(){
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('nomor_simbada', 'nomor_simbada', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'required');
		$this->form_validation->set_rules('jadwal_maintenance', 'jadwal_maintenance', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
		if($this->form_validation->run()==FALSE){
			$error = $this->form_validation->error_array();
			$json_data =  array(
				"result" => FALSE ,
				"message" => array('head'=> 'Failed', 'body'=> 'Pastikan Data terisi Semua'),
				"form_error" => $error,
				"redirect" => ''
			);
			print json_encode($json_data);
			die();
		}else{
			$data = array(
				"nama_barang" =>post("nama_barang"),
				"nomor_simbadda" => post("nomor_simbada"),
				"lokasi" => post("lokasi"),
				"spesifikasi" => post("spesifikasi"),
				"tgl_masuk" => post("tgl_masuk"),
				"jadwal_maintenance" => post("jadwal_maintenance"),
				"status" => 1
			);
			$add = $this->M_barang->update_table('barang', $data, 'id_barang', post("id_barang"));
			if($add==FALSE){

				$json_data =  array(
					"result" => FALSE ,
					"message" => "Gagal Menambah Data",
					"form_error" => $error,
					"redirect" => ''
				);
				print json_encode($json_data);
				die();
			}else{
				 $json_data =  array(
							"result" => TRUE,
							"message" => "Barang di tambahkan",
							"form_error" => '',
							"redirect" => ''
						);
						print json_encode($json_data);
				

					
			}

		}
	}

	public function ajax_action_delete_barang(){
		$id = $this->input->post('id_barang');
		$delete = $this->M_barang->delete_table("barang","id_barang",$id);
		if($delete==FALSE){
			$json_data =  array(
				"result" => FALSE ,
				"message" => array('head'=> 'Failed', 'body'=> 'Gagal Menghapus Data'),
				"form_error" => $error,
				"redirect" => ''
			);
			print json_encode($json_data);
			die();
		}else{
			$json_data =  array(
				"result" => TRUE,
				"message" => array('head'=> 'Success', 'body'=> 'Sukses Menghapus data'),
				"form_error" => '',
				"redirect" => ''.base_url().$this->config->item('index_page').'/admin'
			);
			print json_encode($json_data);
		}
	}

	
}
?>