    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
          <a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Tambah unit kerja</a>
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_unit_kerja = array();    
            foreach ($unit_kerja as $array) {
              foreach ($array as $key => $value) {
                $options_unit_kerja[$key] = $key;
              }
              break;
            }

            echo form_open('admin/unit_kerja', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected);

              echo form_label('Order by:', 'order');
              echo form_dropdown('order', $options_unit_kerja, $order, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');

              $options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
              echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">No</th>
                <th class="yellow header headerSortDown">Judul</th>
                <th class="yellow header headerSortDown">Alamat</th>
                <th class="yellow header headerSortDown">Isi</th>
                <th class="yellow header headerSortDown">Opt</th>
				
              </tr>
            </thead>
            <tbody>
              <?php
			  $i=0;
			  $page = $this->uri->segment(3);
			  if($page){
			  	$i=($page*5)-4;
			  }else{
			  	$i=1;	
			  }
              foreach($unit_kerja as $row)
                {$string = strip_tags($row['judul']);
                $judul=word_limiter($string,5);
         
                $isi = strip_tags($row['isi_berita']);
                $isiunit_kerja=word_limiter($isi,10); 
                
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$judul.'</td>';
                echo '<td>'.$row['alamat'].'</td>';
                echo '<td>'.$isiunit_kerja.'</td>';
				$i++;
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/unit_kerja/update/'.$row['id'].'" class="btn btn-info">view & edit</a>  
                 ';
				?>
				 <?php echo anchor ('admin/unit_kerja/delete/'.$row['id'],'<button class="btn btn-danger">Delete</button>',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin?')")); ?> 
				<?php
				
                echo '</td></tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>