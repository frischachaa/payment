<?php
class Data_penumpang extends CI_Controller{

	public function __construct()
	{
		parent :: __construct();
		$this->load->model("data_penumpang_m");
		$this->load->helper(array ('form','url'));
	}

	public function index(){
		$this->load->view("v_data_penumpang");
	}
	public function get_data($id = null){
		$this->db->select('*')->from('penumpang');
		$id != null ? $this->db->where('id_penumpang', $id) : ``;
		$data = $this->db->get()->result();
		echo json_encode($data);
	}
	public function save(){

		if($this->upload->do_upload("userfile")){
		$data=$this->upload->data();
			$this->data_penumpang_m->set_nama_penumpang($this->input->post("nama_penumpang"));
			$this->data_penumpang_m->set_id_penumpang($this->input->post("id_penumpang"));
			$this->data_penumpang_m->set_no_hp($this->input->post("no_hp"));
			$this->data_penumpang_m->set_saldo($this->input->post("saldo"));

		$query=$this->data_penumpang_m->view_by_id_penumpang();

		if($query->num_rows()){
			$data["status"] = "error";
		}

		else{
			$this->data_penumpang_m->insert();

			$data["status"] = "save_success";
			}

		$data["query"]=$this->data_penumpang_m->view();
		$this->load->view("v_data_penumpang", $data);
		}
	else{
		echo $this->upload->display_errors();
		}
	}


	public function update(){


			$this->data_penumpang_m->set_nama_penumpang($this->input->post("nama_penumpang"));
			$this->data_penumpang_m->set_id_penumpang($this->input->post("id_penumpang"));
			$this->data_penumpang_m->set_no_hp($this->input->post("no_hp"));
			$this->data_penumpang_m->set_saldo($this->input->post("saldo"));
			$this->load->library("upload", $config);


		$this->data_penumpang_m->update();
		$data["status"]="update_success";
		$data["query"]=$this->data_penumpang_m->view();
		$this->load->view("v_data_penumpang", $data);
	}

		public function delete(){
		$this->berita_bogor_m->set_id_berita($this->input->post("id_berita"));
		$query = $this->berita_bogor_m->view_by_id_berita();
		if($query->num_rows()){
			foreach($query->result() as $row)
		{
			if(unlink("./assets/foto/berita/".$row->foto))
			$this->berita_bogor_m->delete();
		}
	}
	$this->berita_bogor_m->delete();
	$data["query"]=$this->berita_bogor_m->view();
	$this->load->view("berita_bogor_v", $data);
	}
	public function delete_all(){
		$query = $this->berita_bogor_m->view();
		if($query->num_rows()){
			foreach($query->result() as $row)
		{
			if(unlink("./assets/foto/berita/".$row->foto))
			$this->berita_bogor_m->delete();
		}
	}
	$this->berita_bogor_m->delete_all();
	$data["query"]=$this->berita_bogor_m->view();
	$this->load->view("berita_bogor_v", $data);
	}
// 	// public function report_excel(){
// 	// 			$this->load->view("berita_excel_v");
// 	// 		}
// 	// public function report_pdf(){
// 	// 			$this->load->library('Pdf');
// 	// 			$this->load->view('convert2pdf_v');
// 	// 	}
	 }
?>
