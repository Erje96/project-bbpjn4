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
          <a href="#">New</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Tambah <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

      <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> pengaduan baru berhasil di tambah.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>GAGAL!</strong> pastikan format gambar jpg/gif/png.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();
      
      echo form_open_multipart('admin/pengaduan/add', $attributes);
      ?>
        <fieldset>
           <div class="control-group">
            <label for="inputError" class="control-label">Nama</label>
            <div class="controls">
              <input type="text" id="" name="nama" value="<?php echo set_value('nama'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
           <div class="control-group">
            <label for="inputError" class="control-label">Perihal</label>
            <div class="controls">
              <input type="text" id="" name="perihal" value="<?php echo set_value('perihal'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
           <div class="control-group">
            <label for="inputError" class="control-label">Email</label>
            <div class="controls">
              <input type="text" id="" name="email" value="<?php echo set_value('email'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
           <div class="control-group">
            <label for="inputError" class="control-label">Jalan / Alamat</label>
            <div class="controls">
              <input type="text" id="" name="jalan" value="<?php echo set_value('jalan'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
           <div class="control-group">
            <label for="inputError" class="control-label">Provinsi</label>
            <div class="controls">
              <input type="text" id="" name="provinsi" value="<?php echo set_value('provinsi'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Isi Pengaduan</label>
            <div class="controls">
              <textarea id="" name="pengaduan"><?php echo set_value('pengaduan'); ?></textarea>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Foto</label>
            <div class="controls">
              <input type="file" name="filename" value="<?php echo set_value('filename'); ?>" >
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
            <button class="btn btn-primary" type="submit">Upload</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     