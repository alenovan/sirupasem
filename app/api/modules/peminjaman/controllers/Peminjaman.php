<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends MY_Controller {

	public function __construct() {
		$this->load->model('M_peminjaman');
	}

		

      function ajax_action_add_peminjaman(){
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
		$this->form_validation->set_rules('nama_peminjam', 'nama_peminjam', 'required');
		$this->form_validation->set_rules('instansi_peminjam', 'instansi_peminjam', 'required');
		$this->form_validation->set_rules('tgl_peminjam', 'tgl_peminjam', 'required');
		$this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'required');
		$this->form_validation->set_rules('batas_pengembalian', 'batas_pengembalian', 'required');
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

			if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
			/*-------------setting attachment upload -------------*/
			$config['upload_path'] = './uploads/persetujuan/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 1024 * 8;
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')){
				$data['file_name'] = null;
				$json_data =  array(
					"result" => FALSE ,
					"message" => array('head'=> 'Failed', 'body'=> $this->upload->display_errors('', '')),
					"form_error" => 'file proof',
					"redirect" => ''
				);
				print json_encode($json_data);
				die();
			}else{
				$data = $this->upload->data();
			}
		}else{
			$json_data =  array(
					"result" => FALSE ,
					"message" => array('head'=> 'Failed', 'body'=>"Harus Mengupload persetujuan "),
					"form_error" => 'file proof',
					"redirect" => ''
				);
				print json_encode($json_data);
			die();
        }

			$data = array(
				"id_barang" =>post("id_barang"),
				"nama_peminjam" => post("nama_peminjam"),
				"instansi_peminjam" => post("instansi_peminjam"),
				"tgl_peminjaman" => post("tgl_peminjam"),
				"penanggung_jawab" => post("penanggung_jawab"),
				"foto_lbr_persetujuan" => $data['file_name'],
				"batas_pengembalian" => post("batas_pengembalian"),
				"status" => post("status")
			);
			$add = $this->M_peminjaman->insert_table("peminjaman",$data);
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
				$data = array(
					"status" => "2"
				);
					$this->M_peminjaman->update_table('barang', $data, 'id_barang', post("id_barang"));
				 $json_data =  array(
							"result" => TRUE,
							"message" => "Peminjaman Berhasil",
							"form_error" => '',
							"redirect" => ''
						);
						print json_encode($json_data);
				

					
			}

		}

	}

	 function ajax_action_pengembalian_pemijaman(){
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
		$this->form_validation->set_rules('id_peminjaman', 'id_peminjaman', 'required');
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
					"status" => "2"
				);
			$edit = $this->M_peminjaman->update_table('peminjaman', $data, 'id_peminjaman', post("id_peminjaman"));
			if($edit==FALSE){

				$json_data =  array(
					"result" => FALSE ,
					"message" => "Gagal Menambah Data",
					"form_error" => $error,
					"redirect" => ''
				);
				print json_encode($json_data);
				die();
			}else{
				$data = array(
					"status" => "1"
				);
					$this->M_peminjaman->update_table('barang', $data, 'id_barang', post("id_barang"));
				 $json_data =  array(
							"result" => TRUE,
							"message" => "Barang telah di kembalian",
							"form_error" => '',
							"redirect" => ''
						);
						print json_encode($json_data);
				

					
			}

		}

	}
	function ajax_action_get_all_peminjaman(){
		$joins        = array(
            array(
                'table' => 'barang b',
                'condition' => 'a.id_barang = b.id_barang ',
                'jointype' => ''
            )
        );
		$data = $this->M_peminjaman->fetch_joins('peminjaman a', 'a.*,b.nama_barang', $joins,'', '',TRUE);
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

		

		function ajax_action_get_id_peminjaman(){
        $id = $this->input->post('id_peminjaman');
		$joins        = array(
            array(
                'table' => 'barang b',
                'condition' => 'a.id_barang = b.id_barang ',
                'jointype' => ''
            )
        );
		$data = $this->M_peminjaman->fetch_joins('peminjaman a', 'a.*,b.nama_barang', $joins,'id_peminjaman = '. $id,TRUE);
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
}
?>