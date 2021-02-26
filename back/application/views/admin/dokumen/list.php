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
          <a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Tambah Peraturan</a>
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_dokumen = array();    
            foreach ($dokumen as $array) {
              foreach ($array as $key => $value) {
                $options_dokumen[$key] = $key;
              }
              break;
            }

            echo form_open('admin/dokumen', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected);

              echo form_label('Order by:', 'order');
              echo form_dropdown('order', $options_dokumen, $order, 'class="span2"');

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
                <th class="yellow header headerSortDown">Peraturan</th>
				<th class="yellow header headerSortDown">Tanggal Unggah</th>
				
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
              foreach($dokumen as $row)
              {
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$row['judul'].'</td>';
				echo '<td>'.$row['tanggal'].'</td>';
				$i++;
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/dokumen/update/'.$row['id'].'" class="btn btn-info">view & edit</a>  
                 ';
				?>
				 <?php echo anchor ('admin/dokumen/delete/'.$row['id'],'<button class="btn btn-danger">Delete</button>',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin?')")); ?> 
				<?php
				
                echo '</td></tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>