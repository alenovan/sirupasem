<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct() {
		$this->load->model('M_login');
		$this->load->library('recaptcha');
	}

		
 public function ajax_action_login(){
		$this->form_validation->set_rules('username', 'username',  'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$form_error = $this->form_validation->error_array();
			$response =  array(
				'result' => FALSE,
				"message" => array('head'=> 'Failed', 'body'=> 'Pastikan data terisi semua.'),
				'form_error' => $form_error,
			);
			echo json_encode($response, JSON_PRETTY_PRINT);
			die();
		}else{
			$username = post('username');
			$password = post('password');

			$dataarr = array(
				'username' => $username,
				'password' => $password
			);

			$login = $this->db->get_where('user', $dataarr);
			if($login->num_rows() > 0){
				$sess = $login->row_array();
				$data = array(
                    "result" => TRUE,
                    "message" => array('head'=> 'Success', 'body'=> 'Berhasil'),
                    "form_error" => '',
                    'id' => $sess['id_member']
                );
                echo json_encode($data);
				die();
			}else{
				$data = array(
                    "result" => FALSE,
                    "message" => array('head'=> 'failed', 'body'=> 'Pastikan email dan passwird anda benar'),
                    "form_error" => '',
                    "redirect" => ''
                );
                echo json_encode($data);
                die();
			}
		}
	}

	// function ajax_action_add_register(){
	// 	$this->form_validation->set_rules('username', 'username', 'required');
	// 	$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
	// 	$this->form_validation->set_rules('password', 'password', 'required');
	// 		$error = $this->form_validation->error_array();
	// 		$json_data =  array(
	// 			"result" => FALSE ,
	// 			"message" => array('head'=> 'Failed', 'body'=> 'Pastikan Data terisi Semua'),
	// 			"form_error" => $error,
	// 			"redirect" => ''
	// 		);
	// 		print json_encode($json_data);
	// 		die();
	// 	}else{
	// 		$data = array(
	// 			"username" =>post("username"),
	// 			"nama_lengkap" => post("nama_lengkap"),
	// 			"password" => post("password"),
	// 			"id_session" => "1"
	// 		);
	// 		$add = $this->M_login->insert_table("user",$data);
	// 		if($add==FALSE){

	// 			$json_data =  array(
	// 				"result" => FALSE ,
	// 				"message" => "Gagal Menambah Data",
	// 				"form_error" => $error,
	// 				"redirect" => ''
	// 			);
	// 			print json_encode($json_data);
	// 			die();
	// 		}else{
	// 			 $json_data =  array(
	// 						"result" => TRUE,
	// 						"message" => "Pendaftaran berhasil",
	// 						"form_error" => '',
	// 						"redirect" => ''
	// 					);
	// 					print json_encode($json_data);
				

					
	// 		}

	// 	}
	// }	

}
?>