<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>BBPJN4</title>
  <link rel="icon" href="<?php echo base_url();?>assets/img/logo.png" type="image/x-icon">
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/admin/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/admin/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	if($this->session->userdata('status')== 0){
	?>	
		<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
			 <a class="brand">BBPJN4 Administrator</a>
	      <a class="brand"></a>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'pengguna'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/pengguna">Pengguna</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'berita'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/berita">Berita</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'dokumen'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/dokumen">Peraturan</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'agenda'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/agenda">Agenda</a>
	        </li>
	         <li <?php if($this->uri->segment(2) == 'galeri'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/galeri">Galeri</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'pengaduan'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/pengaduan">Pengaduan</a>
			</li>
			<li <?php if($this->uri->segment(2) == 'unit_kerja'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/unit_kerja">Unit Kerja</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>
<?php	
	}else{
		?>
		<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand">BBPJN4 Administrator</a>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'berita'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/berita">Berita</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'dokumen'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/dokumen">Peraturan</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'agenda'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/agenda">Agenda</a>
	        </li>
	         <li <?php if($this->uri->segment(2) == 'galeri'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/galeri">Galeri</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'pengaduan'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/pengaduan">Pengaduan</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>	
<?php
	}
?>
	