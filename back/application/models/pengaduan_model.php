<?php
class pengaduan_model extends CI_Model {
 
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
    public function get_pengaduan_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    
    
	public function get_gambar_id($id)
    {
		$this->db->select('gambar');
		$this->db->from('pengaduan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		foreach ($query->result_array() as $row)
			{
			  $idf = $row['gambar'];
			}
		return   $idf; 
	}
    /**
    * Fetch pengaduan data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_pengaduan($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->from('pengaduan');

		if($search_string){
			$this->db->like('judul', $search_string);
		}
		$this->db->group_by('id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
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
    function count_pengaduan($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('pengaduan');
		if($search_string){
			$this->db->like('judul', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_pengaduan($data)
    {
		$insert = $this->db->insert('pengaduan', $data);
	    return $insert;
	}
	
	function saveInsert($tableName, $fieldList, $data) {
		foreach($fieldList as $val) 
			$this->db->set($val, $data[$val]);
		
		$this->db->trans_start();
		$this->db->insert($tableName);
		$id = $this->db->insert_id();
		$this->db->trans_complete();
		return $id;		
	}
	

	
    /**
    * Update pengaduan
    * @param array $data - associative array with data to store
    * @return boolean
    */

	
function update_gambar($idf, $data)
    {
		$this->db->where('id_foto', $idf);
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

    function update_pengaduan($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('pengaduan', $data);
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
    * Delete pengaduan
    * @param int $id - pengaduan id
    * @return boolean
    */
	function delete_pengaduan($id){
		$this->db->where('id', $id);
		$this->db->delete('pengaduan'); 
	}
 
}
?>	
