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
            echo '<strong>Well done!</strong> agenda baru berhasil di tambah.';
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
      
      echo form_open('admin/agenda/add', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Agenda</label>
            <div class="controls">
              <input type="text" id="" name="judul" value="<?php echo set_value('judul'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		 <div class="control-group">
                <label class="control-label">Jadwal</label>
                <div class="input-append date form_datetime" data-date="2015-01-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="tanggal">
                    <input size="16" type="text" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
				<input type="hidden" id="tanggal" name="tanggal" value="<?php echo set_value('tanggal'); ?>" /><br/>
            </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Tempat</label>
            <div class="controls">
              <input type="text" id="" name="tempat" value="<?php echo set_value('tempat'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     