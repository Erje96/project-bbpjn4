<?php
class galeri_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_galeri_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('tipe','galeri');
		$this->db->where('id_foto', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    

    /**
    * Fetch galeri data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_galeri($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('tipe','galeri');

		if($search_string){
			$this->db->like('name', $search_string);
		}
		$this->db->group_by('id_foto');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id_foto', $order_type);
		}

        if($limit_start && $limit_end){
          $this->db->limit($limit_start, $limit_end);	
        }

        if($limit_start != null){
          $this->db->limit($limit_start, $limit_end);    
        }
        
		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_galeri($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('gambar');
		if($search_string){
			$this->db->like('nama', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id_foto', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_galeri($data)
    {
		$insert = $this->db->insert('gambar', $data);
	    return $insert;
	}

    /**
    * Update galeri
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_galeri($id, $data)
    {
		$this->db->where('id_foto', $id);
		$this->db->update('gambar', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete galeri
    * @param int $id - galeri id
    * @return boolean
    */
	function delete_galeri($id){
		$this->db->where('id_foto', $id);
		$this->db->delete('gambar'); 
	}
 
}
?>	
