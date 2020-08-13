<?php
class Data_halte_m extends CI_Model{
	//deklarasi property
	private $nama_halte;
	private $id_halte;
	private $harga_halte;
	

public function set_nama_halte($value){
	$this->nama_halte=$value;
}
public function get_nama_halte(){
		return $this->nama_halte;
}
public function set_id_halte($value){
	$this->id_halte=$value;
}
	public function get_id_halte(){
		return $this->id_halte;
}
public function set_harga_halte($value){
	$this->harga_halte=$value;
}
	public function get_harga_halte(){
		return $this->harga_halte;
}
	public function view(){
		$sql="SELECT * FROM halte";
		return $this->db->query($sql);
	}
		public function view_detail_halte($id){
		$sql="SELECT * FROM halte WHERE id_halte='".$id."'";
		return $this->db->query($sql);
	}
	public function view_by_id_halte(){
		$sql="SELECT * FROM halte WHERE id_halte='".$this->get_id_halte()."'";
		return $this->db->query($sql);
	 }
	 
// 	public function insert(){
// 		$sql="INSERT INTO penumpang (nama_penumpang, id_penumpang, no_hp, email, saldo) VALUE (
// 		'".$this->get_nama_penumpang()."',
// 		'".$this->get_id_penumpang()."',
// 		'".$this->get_no_hp()."',
// 		'".$this->get_email()."',
// 		'".$this->get_saldo()."')";
		
// 		$this->db->query($sql);
// 	}
// 	public function update(){
// 		$sql = "UPDATE penumpang SET 
// 		nama_penumpang='".$this->get_nama_penumpang()."',
// 		id_penumpang='".$this->get_id_penumpang()."',
// 		no_hp='".$this->get_no_hp()."',
// 		email='".$this->get_email()."',
// 		saldo='".$this->get_saldo()."'
// 		WHERE id_penumpang'".$this->get_id_penumpang()."'";
		
// 		$this->db->query($sql);
// 	}
// 	public function delete(){
// 		$sql = "DELETE FROM penumpang WHERE
// 		id_penumpang='".$this->get_id_penumpang()."'";
		
// 		$this->db->query($sql);
// 	}
// 	public function delete_all(){
// 		$sql = "TRUNCATE TABLE penumpang";
				
// 		$this->db->query($sql);
// 	}
}
?>