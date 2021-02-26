<?php
class Admin_berita extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'admin/berita';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
		$this->load->helper('text');
        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

        //all the posts sent by the view
        $search_string = $this->input->post('search_string');        
        $order = $this->input->post('order'); 
        $order_type = $this->input->post('order_type'); 

        //pagination settings
        $config['per_page'] = 5;

        $config['base_url'] = base_url().'admin/berita';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 

        //if order type was changed
        if($order_type){
            $filter_session_data['order_type'] = $order_type;
        }
        else{
            //we have something stored in the session? 
            if($this->session->userdata('order_type')){
                $order_type = $this->session->userdata('order_type');    
            }else{
                //if we have nothing inside session, so it's the default "Asc"
                $order_type = 'Desc';    
            }
        }
        //make the data type var avaible to our view
        $data['order_type_selected'] = $order_type;        


        //we must avoid a page reload with the previous session data
        //if any filter post was sent, then it's the first time we load the content
        //in this case we clean the session filter data
        //if any filter post was sent but we are in some page, we must load the session data

        //filtered && || paginated
        if($search_string !== false && $order !== false || $this->uri->segment(3) == true){ 
           
            /*
            The comments here are the same for line 79 until 99

            if post is not null, we store it in session data array
            if is null, we use the session data already stored
            we save order into the the var to load the view with the param already selected       
            */
            if($search_string){
                $filter_session_data['search_string_selected'] = $search_string;
            }else{
                $search_string = $this->session->userdata('search_string_selected');
            }
            $data['search_string_selected'] = $search_string;

            if($order){
                $filter_session_data['order'] = $order;
            }
            else{
                $order = $this->session->userdata('order');
            }
            $data['order'] = $order;

            //save session data into the session
            if(isset($filter_session_data)){
              $this->session->set_userdata($filter_session_data);    
            }
            
            //fetch sql data into arrays
            $data['count_products']= $this->berita_model->count_berita($search_string, $order);
            $config['total_rows'] = $data['count_products'];

            //fetch sql data into arrays
            if($search_string){
                if($order){
                    $data['berita'] = $this->berita_model->get_berita($search_string, $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['berita'] = $this->berita_model->get_berita($search_string, '', $order_type, $config['per_page'],$limit_end);           
                }
            }else{
                if($order){
                    $data['berita'] = $this->berita_model->get_berita('', $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['berita'] = $this->berita_model->get_berita('', '', $order_type, $config['per_page'],$limit_end);        
                }
            }

        }else{

            //clean filter data inside section
            $filter_session_data['berita_selected'] = null;
            $filter_session_data['search_string_selected'] = null;
            $filter_session_data['order'] = null;
            $filter_session_data['order_type'] = null;
            $this->session->set_userdata($filter_session_data);

            //pre selected options
            $data['search_string_selected'] = '';
            $data['order'] = 'id';

            //fetch sql data into arrays
            $data['count_products']= $this->berita_model->count_berita();
            $data['berita'] = $this->berita_model->get_berita('', '', $order_type, $config['per_page'],$limit_end);        
            $config['total_rows'] = $data['count_products'];

        }//!isset($search_string) && !isset($order)
         
        //initializate the panination helper 
        $this->pagination->initialize($config);   

        //load the view
        $data['main_content'] = 'admin/berita/list';
        $this->load->view('includes/template', $data);  

    }//index
	
  
	public function editor($path,$width) {
    //Loading Library For Ckeditor
 		   $this->load->library('ckeditor');
 		   $this->load->library('ckFinder');
 		   //configure base path of ckeditor folder 
 		   $this->ckeditor->basePath = base_url().'assets/js/ckeditor/';
 		   $this->ckeditor-> config['toolbar'] = 'Full';
 		   $this->ckeditor->config['language'] = 'en';
 		   $this->ckeditor-> config['width'] = $width;
 		   //configure ckfinder with ckeditor config 
  		   $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
  }
	
    public function add()
    {	
		$path = base_url().'assets/js/ckfinder';
		$width = '800px';
		$this->editor($path, $width);
		
		
        
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		 $config['upload_path']   = './assets/upload/gambar'; 
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
				$data['nama'] = "berita ".date('Y-m-d');
				$data['filename'] = $file['upload_data']['file_name'];
				$data['keterangan'] = $this->input->post('judul');
				$data['tanggal_foto'] = date('Y-m-d');
				$data['tipe'] = 'Berita';
				$idgambar = $this->berita_model->saveInsert('gambar', $fieldsAdd, $data);
				$_POST['filename'] = $file['upload_data']['file_name'];
				
				$upload_data = $this->upload->data();
				$filename=$upload_data['file_name'];
				$image_config["image_library"] = "gd2";
				$image_config["source_image"] = $upload_data["full_path"];
				$image_config['create_thumb'] = FALSE;
				$image_config['maintain_ratio'] = TRUE;
				$image_config['new_image'] = realpath(APPPATH.'../assets/upload/gambar/clip') . $filename;
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
					$image_config['source_image'] = realpath(APPPATH.'../assets/upload/gambar/clip') . $filename;
					$image_config['new_image'] = realpath(APPPATH.'../assets/upload/gambar/clip') . $filename;
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
			
			
			
            $this->form_validation->set_rules('judul', 'Judul berita', 'required');
            $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
			$this->form_validation->set_rules('filename', 'Gambar', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {		
                $data_to_store = array(
                    'judul' => $this->input->post('judul'),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'tanggal' => date('Y-m-d'),
                    'gambar' => $idgambar,
                    'author' => $this->session->userdata('user_name'),
                );
                //if the insert has returned true then we show the flash message
                if($this->berita_model->store_berita($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        //load the view
        $data['main_content'] = 'admin/berita/add';
        $this->load->view('includes/template', $data);  
    }       

    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {
		$path = base_url().'assets/js/ckfinder';
		$width = '800px';
		$this->editor($path, $width);
		
        //product id 
        $id = $this->uri->segment(4);
  		$idf = $this->berita_model->get_gambar_id($id);
  	
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {$config['upload_path']   = './assets/upload/gambar'; 
         $config['allowed_types'] = 'gif|jpg|png'; 	 
         $this->load->library('upload', $config);			
			// Upload Picture
			if ( ! $this->upload->do_upload("filename")) {
				
				$tanggal =  $this->input->post('tanggal');
				$fieldsAdd = array(
					'nama' => "Berita ".$tanggal,
                    'keterangan' => $this->input->post('judul'),
                    'tanggal_foto' => $this->input->post('tanggal'),
                );
				
			    $this->berita_model->update_gambar($idf, $fieldsAdd);
			    
				$error = array('error' => $this->upload->display_errors());
				 $data['flash_message'] = FALSE; 
                
			} else {
				$file = array('upload_data' => $this->upload->data());
				$tanggal =  $this->input->post('tanggal');
				$fieldsAdd = array(
					'nama' => "Berita".$tanggal,
                    'filename' => $file['upload_data']['file_name'],
                    'keterangan' => $this->input->post('judul'),
                    'tanggal_foto' => $this->input->post('tanggal'),
                );
				
			    $this->berita_model->update_gambar($idf, $fieldsAdd);
				$_POST['filename'] = $file['upload_data']['file_name'];
				
				$upload_data = $this->upload->data();
				$filename=$upload_data['file_name'];
				$image_config["image_library"] = "gd2";
				$image_config["source_image"] = $upload_data["full_path"];
				$image_config['create_thumb'] = FALSE;
				$image_config['maintain_ratio'] = TRUE;
				$image_config['new_image'] = realpath(APPPATH.'../assets/upload/gambar/clip') . $filename;
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
					$image_config['source_image'] = realpath(APPPATH.'../assets/upload/gambar/clip') . $filename;
					$image_config['new_image'] = realpath(APPPATH.'../assets/upload/gambar/clip') . $filename;
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
            $this->form_validation->set_rules('judul', 'Judul berita', 'required');
            $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
	
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            //if the form has passed through the validation 
			if ($this->form_validation->run()&& $this->input->post('filename') )
            {
    
                $data_to_store = array(
                    'judul' => $this->input->post('judul'),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'tanggal' => $this->input->post('tanggal'),
                );
                //if the insert has returned true then we show the flash message
                if($this->berita_model->update_berita($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/berita/update/'.$id.'');

            }//validation run
			elseif($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'judul' => $this->input->post('judul'),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'tanggal' => $this->input->post('tanggal'),
                );
                //if the insert has returned true then we show the flash message
                if($this->berita_model->update_berita($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/berita/update/'.$id.'');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //product data 
        $data['berita'] = $this->berita_model->get_berita_by_id($id);
        //load the view
        $data['main_content'] = 'admin/berita/edit';
        $this->load->view('includes/template', $data);            

    }//update

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
        //product id 
        $id = $this->uri->segment(4);
        $this->berita_model->delete_berita($id);
        redirect('admin/berita');
    }//edit

}