    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> berita updated with success.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();

      echo form_open_multipart('admin/unit_kerja/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Judul berita</label>
            <div class="controls">
			  <?php echo $this->ckeditor->editor('judul',$unit_kerja[0]['judul']);?>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Alamat</label>
            <div class="controls">
			  <?php echo $this->ckeditor->editor('alamat',$unit_kerja[0]['alamat']);?>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Isi berita</label>
            <div class="controls">
			  <?php echo $this->ckeditor->editor('isi_berita',$unit_kerja[0]['isi_berita']);?>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
                <div class="control-group">
                  <label for="inputError" class="control-label">Gambar</label>
                <div class="controls">
                        <input type="file" name="filename" value="<?php echo $unit_kerja[0]['gambar']; ?>" >
                        <!--<span class="help-inline">Woohoo!</span>-->
                </div>
			<?php if (isset($files) && count($files) > 0) {
							echo '<div class="form-group"> ';
							foreach($files as $r) { ?>
									<label style="padding-left:15px"><?php echo $r->filename;?></label><br>								
							<?php }
							echo '</div>';
						} ?>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     