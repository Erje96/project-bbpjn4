<?php
class home_model extends CI_Model {
 
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
    public function get_berita_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('gambar','berita.gambar=gambar.id_foto','left');
		$this->db->where('berita.id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    
	
    function get_berita() {
        $this->db->select('*');
        $this->db->from('berita');
		$this->db->join('gambar','berita.gambar=gambar.id_foto','left');
		$this->db->order_by('berita.id', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }
	
	 function get_berita_all() {
        $this->db->select('*');
        $this->db->from('berita');
		$this->db->join('gambar','berita.gambar=gambar.id_foto','left');
		$this->db->order_by('berita.id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
	
	public function get_gambar_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_foto', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    
	
    function get_gambar() {
        $this->db->select('*');
        $this->db->from('gambar');
		$this->db->order_by('tanggal_foto', 'desc');
        //$this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }
	function get_agenda() {
        $this->db->select('*');
        $this->db->from('agenda');
		$this->db->order_by('agenda.tanggal', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_uk_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('unit_kerja');
		$this->db->join('gambar','uk.gambar=gambar.id_foto','left');
		$this->db->where('unit_kerja.id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    function get_uk() {
        $this->db->select('*');
        $this->db->from('unit_kerja');
		$this->db->join('gambar','uk.gambar=gambar.id_foto','left');
		$this->db->order_by('unit_kerja.id', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function get_uk_all() {
        $this->db->select('*');
        $this->db->from('unit_kerja');
		$this->db->join('gambar','gambar=gambar.id_foto','left');
		$this->db->order_by('unit_kerja.id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_uk_dki(){
        $this->db->select('*');
		$this->db->from('unit_kerja');
		$this->db->where('wilayah','1');
		$query = $this->db->get();
		return $query->result_array(); 
    }


    function get_uk_jabar(){
        $this->db->get_where('unit_kerja',array('wilayah'=>'2'));
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_uk_banten(){
        $this->db->get_where('unit_kerja',array('wilayah'=>'3'));
        $query = $this->db->get();
        return $query->result_array();
        
    }
	
	public function get_gambar_uk_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('unit_kerja');
		$this->db->where('id_foto', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    } 
	    
	
   /* public function get_berita($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->from('berita');

		if($search_string){
			$this->db->like('name', $search_string);
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
    }*/
 
}
?>	
