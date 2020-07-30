<?php
class Data_penumpang_m extends CI_Model{
	//deklarasi property
	private $nama_penumpang;
	private $id_penumpang;
	private $no_hp;
	private $email;
	private $saldo;

public function set_nama_penumpang($value){
	$this->nama_penumpang=$value;
}
public function get_nama_penumpang(){
		return $this->nama_penumpang;
}
public function set_id_penumpang($value){
	$this->id_penumpang=$value;
}
	public function get_id_penumpang(){
		return $this->id_penumpang;
}
public function set_no_hp($value){
	$this->no_hp=$value;
}
	public function get_no_hp(){
		return $this->no_hp;
}
	public function get_email(){
		return $this->email;
}
public function set_saldo($value){
	$this->saldo=$value;
}
	public function get_saldo(){
		return $this->saldo;
}
	public function view(){
		$sql="SELECT * FROM penumpang";
		return $this->db->query($sql);
	}
		public function view_detail_penumpang($id){
		$sql="SELECT * FROM penumpang WHERE id_penumpang='".$id."'";
		return $this->db->query($sql);
	}
	public function view_by_id_penumpang(){
		$sql="SELECT * FROM penumpang WHERE id_penumpang='".$this->get_id_penumpang()."'";
		return $this->db->query($sql);
	 }
	 
	public function insert(){
		$sql="INSERT INTO penumpang (nama_penumpang, id_penumpang, no_hp, email, saldo) VALUE (
		'".$this->get_nama_penumpang()."',
		'".$this->get_id_penumpang()."',
		'".$this->get_no_hp()."',
		'".$this->get_saldo()."')";
		
		$this->db->query($sql);
	}
	public function update(){
		$sql = "UPDATE penumpang SET 
		nama_penumpang='".$this->get_nama_penumpang()."',
		id_penumpang='".$this->get_id_penumpang()."',
		no_hp='".$this->get_no_hp()."',
		saldo='".$this->get_saldo()."'
		WHERE id_penumpang'".$this->get_id_penumpang()."'";
		
		$this->db->query($sql);
	}
	public function delete(){
		$sql = "DELETE FROM penumpang WHERE
		id_penumpang='".$this->get_id_penumpang()."'";
		
		$this->db->query($sql);
	}
	public function delete_all(){
		$sql = "TRUNCATE TABLE penumpang";
				
		$this->db->query($sql);
	}
}
?>