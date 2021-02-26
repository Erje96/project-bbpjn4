<?php
class Web extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
	const VIEW_FOLDER = 'web/main';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');;
		$this->load->helper('form');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
		$data   = array();
        $data['berita'] = $this->home_model->get_berita();
        $data['agenda'] = $this->home_model->get_agenda();
    	$this->load->helper('text');
        //load the view
        $this->load->view('portal', $data);  

    }//index

   	  public function buletin()
    {
		$data   = array();
        $data['berita'] = $this->home_model->get_berita();
        $data['agenda'] = $this->home_model->get_agenda();
    	$this->load->helper('text');
        //load the view
        $this->load->view('buletin', $data);  

    }//index

   	 public function pengaduan()
     {	$this->load->model('pengaduan_model');	
        
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		 $config['upload_path']   = '.back/assets/upload/gambar'; 
         $config['allowed_types'] = 'gif|jpg|png'; 	 
		 $idgambar=0;
         $this->load->library('upload', $config);			
			// Upload Picture
			if ( ! $this->upload->do_upload("filename")) {
				$error = array('error' => $this->upload->display_errors());
				 $data['flash_message'] = FALSE; 
                
			} else {
				$file = array('upload_data' => $this->upload->data());
				
				$fieldsAdd = array(
					'nama',
					'filename',
					'keterangan',
					'tanggal_foto',
					'tipe',
				);
				$data['nama'] = "pengaduan ".date('Y-m-d');
				$data['filename'] = $file['upload_data']['file_name'];
				$data['keterangan'] = $this->input->post('perihal');
				$data['tanggal_foto'] = date('Y-m-d');
				$data['tipe'] = 'pengaduan';
				$idgambar = $this->pengaduan_model->saveInsert('gambar', $fieldsAdd, $data);
				$_POST['filename'] = $file['upload_data']['file_name'];
				
				$upload_data = $this->upload->data();
				$filename=$upload_data['file_name'];
				$image_config["image_library"] = "gd2";
				$image_config["source_image"] = $upload_data["full_path"];
				$image_config['create_thumb'] = FALSE;
				$image_config['maintain_ratio'] = TRUE;
				$image_config['new_image'] = realpath(APPPATH.'../back/assets/upload/gambar/clip') . $filename;
				$image_config['quality'] = "100%";
				$image_config['width'] = 458;
				$image_config['height'] = 305;
				$dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($image_config['width'] / $image_config['height']);
				$image_config['master_dim'] = ($dim > 0)? "height" : "width";
				 
				$this->load->library('image_lib');
				$this->image_lib->initialize($image_config);
				 
				if(!$this->image_lib->resize()){ //Resize image
				    $data['flash_message'] = FALSE;  //If error, redirect to an error page
				}else{
					$info = pathinfo($filename);
					$name = $info['filename'];
					$format = $info['extension'];
					$fix_thumb = $name."_thumb".$format;
					$image_config['image_library'] = 'gd2';
					$image_config['source_image'] = realpath(APPPATH.'../back/assets/upload/gambar/clip') . $filename;
					$image_config['new_image'] = realpath(APPPATH.'../back/assets/upload/gambar/clip') . $filename;
					$image_config['maintain_ratio'] = FALSE;
					$image_config['width'] = 458;
					$image_config['height'] = 305;	
					$image_config['x_axis'] = '0';
					$image_config['y_axis'] = '0';
					 
					$this->image_lib->clear();
					$this->image_lib->initialize($image_config); 
					 
					if (!$this->image_lib->crop()){
					       $data['flash_message'] = FALSE;  //If error, redirect to an error page
					}
			 }
			} 
			

            //form validation
			
			
			
            $this->form_validation->set_rules('nama', 'Judul pengaduan', 'required');
            $this->form_validation->set_rules('perihal', 'Judul pengaduan', 'required');
            $this->form_validation->set_rules('email', 'Judul pengaduan', 'required');
            $this->form_validation->set_rules('jalan', 'Judul pengaduan', 'required');
            $this->form_validation->set_rules('provinsi', 'Judul pengaduan', 'required');
            $this->form_validation->set_rules('pengaduan', 'Isi pengaduan', 'required');
			$this->form_validation->set_rules('filename', 'Foto', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {		
                $data_to_store = array(
                    'nama' => $this->input->post('nama'),
                    'perihal' => $this->input->post('perihal'),
                    'email' => $this->input->post('email'),
                    'jalan' => $this->input->post('jalan'),
                    'provinsi' => $this->input->post('provinsi'),
                    'pengaduan' => $this->input->post('pengaduan'),
                    'tanggal' => date('Y-m-d H:i:s'),
                    'foto' => $this->input->post('filename'),
                );
                //if the insert has returned true then we show the flash message
                if($this->pengaduan_model->store_pengaduan($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        //load the view
        $data['main_content'] = 'web/pengaduan';
        $this->load->view('pengaduan', $data);  
    }



   	public function web()
    {
		$data   = array();
        $data['berita'] = $this->home_model->get_berita();
        $data['agenda'] = $this->home_model->get_agenda();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/home';
        $this->load->view('includes/template', $data);  

    }//index

   	public function tk()
    {
		$data   = array();
        $data['berita'] = $this->home_model->get_berita();
        $data['agenda'] = $this->home_model->get_agenda();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/tentangkami';
        $this->load->view('includes/template_tk', $data);  

    }//index

   	public function Berita()
    {
		$data   = array();
        $data['berita'] = $this->home_model->get_berita_all();
        $data['agenda'] = $this->home_model->get_agenda();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/berita';
        $this->load->view('includes/template_net', $data);  

    }//index

    public function uk()
    {
		$data   = array();
        $data['unit_kerja'] = $this->home_model->get_uk_all();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/uk_dki';
        $this->load->view('includes/template_uk', $data);  

    }//index
    
    public function uk_dki(){
        $data = array();
        $data['unit_kerja'] = $this->home_model->get_uk_dki();
        $this->load->helper('text');
        // load the view
        $data['main_content'] = 'web/main/uk_dki';
        $this->load->view('includes/template_uk', $data);
    }

    public function uk_banten(){
        $data = array();
        $data['unit_kerja'] = $this->home_model->get_uk_banten();
        $this->load->helper('text');
        // load the view
        $data['main_content'] = 'web/main/uk/banten';
        $this->load->view('includes/template_uk', $data);
    }
    

   	public function isiberita()
    {
		$id = $this->uri->segment(3);
		$data   = array();
        $data['beritaisi'] = $this->home_model->get_berita_by_id($id);
        $data['berita'] = $this->home_model->get_berita();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/isiberita';
        $this->load->view('includes/template_net', $data);  

    }//index

   public function galeri()
    {
		$data   = array();
        $data['galeri'] = $this->home_model->get_gambar();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/galeri';
        $this->load->view('includes/template_net', $data);  

    }//index

    public function isiuk()
    {
		$id = $this->uri->segment(3);
		$data   = array();
        $data['isiuk'] = $this->home_model->get_uk_by_id($id);
        $data['unit_kerja'] = $this->home_model->get_uk();
    	$this->load->helper('text');
        //load the view
        $data['main_content'] = 'web/main/isiuk';
        $this->load->view('includes/template_net', $data);  

    }//index
   	public static function namahari($tanggal){
    
    //fungsi mencari namahari
    //format $tgl YYYY-MM-DD
    //harviacode.com
    
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
 
    $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
    
    switch($info){
        case '0': return "Minggu"; break;
        case '1': return "Senin"; break;
        case '2': return "Selasa"; break;
        case '3': return "Rabu"; break;
        case '4': return "Kamis"; break;
        case '5': return "Jum'at"; break;
        case '6': return "Sabtu"; break;
    }

}

	public static function tanggal($tanggal)
	{
		$str=explode('-',$tanggal);
		$bulan = array(
		'01'=>'Januari',
		'02'=>'Februari',
		'03'=>'Maret',
		'04'=>'April',
		'05'=>'Mei',
		'06'=>'Juni',
		'07'=>'Juli',
		'08'=>'Agustus',
		'09'=>'September',
		'10'=>'Oktober',
		'11'=>'November',
		'12'=>'Desember'
		);
		
		return $str['2']." ".$bulan[$str['1']]." ".$str['0'];
	}

}