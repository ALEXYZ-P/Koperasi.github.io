<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Tabungan_model extends CI_Model
{
	
	private $_table= "tabungan";
	public $id_user;
	public $id_tabungan;
	public $jumlah_tabungan;
	public $tanggal_tabung;
	public $id_jenis_tabungan;
	
	public function getALL(){
		
		return $this->db->get($this->_table)->result();
	}
    
	/**public function get_users() {
		$this->db->where('level', 'member');
        $query = $this->db->get('user');
        return $query->result_array();
    }*/

    public function get_jenis_tabungan() { 
        $query = $this->db->get('jenis_tabungan');
        return $query->result_array(); 
    }

    public function insert_tabungan($data) {
        // Attempt to insert data into the "tabungan" table
        $inserted = $this->db->insert('tabungan', $data);

        return $inserted; // Return true if successful, false otherwise
    }

	public function getTabunganByIdMember($id_user){
		$this->db->where('id_user', $id_user);
        $query = $this->db->get('tabungan');
        return $query->result();
    }

    // public function getTotalSavings($id_user) {
    //     $this->db->select_sum('jumlah_tabungan');
    //     $this->db->where('id_user', $id_user);
    //     return $this->db->get($this->_table)->row()->jumlah_tabungan;
    // }

    public function getListJenis(){
		$this->db->select('*');
		$this->db->from('jenis_tabungan');
		$this->db->join('tabugan', 'jenis_tabungan.id_jenis_tabungan = tabungan.id_jenis_tabungan');
		$query = $this->db->get();
		return $query->result();
	}

	/**public function insertTabungan($data) {
        return $this->db->insert('tabungan', $data);
    }

    public function getJenisTabunganNameById($id_jenis_tabungan) {
        $this->db->select('nama_jenis_tabungan');
        $this->db->where('id_jenis_tabungan', $id_jenis_tabungan);
        $query = $this->db->get('jenis_tabungan');
        if ($query->num_rows() > 0) {
            return $query->row()->nama_jenis_tabungan;
        }
        return false;
    }
	*/
}

?>
