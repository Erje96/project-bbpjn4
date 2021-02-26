<?php $isiberita = strip_tags($beritaisi[0]['judul']); ?>

    <section id="isiberita">	
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $isiberita;?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $beritaisi[0]['author']; ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on  <?php echo Web::namahari($beritaisi[0]['tanggal']) ; ?>, <?php echo Web::tanggal($beritaisi[0]['tanggal']) ; ?> </p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo $beritaisi[0]['filename']; ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p><?php echo $beritaisi[0]['isi_berita'];?></p>
               
               

                <hr>

                
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
				
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Cari Berita</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
			
                <!-- Blog Categories Well -->
                

                <!-- Side Widget Well -->
                <div class="well">
					<?php 
					foreach($berita  as $r): 
						$judul = strip_tags($r['judul']);
						$string = strip_tags($r['isi_berita']);
						$isiberita=word_limiter($string,15); 
						
						
							
						
					?>
                  <div class="thumbnail">
                    <img src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo "clip".$r['filename']; ?>" alt="">
                    <div class="caption">
                        <h4><?php echo $judul; ?></h4>
                        <p><?php echo $isiberita; ?></p>
                        <p>
                            <a  class="btn btn-primary"><?php echo Web::namahari($beritaisi[0]['tanggal']) ; ?>, <?php echo Web::tanggal($beritaisi[0]['tanggal']) ; ?></a> <a class="btn btn-default" href="<?php echo base_url()?>web/isiberita/<?php echo $r['id']; ?>#isiberita">Baca</a>
                        </p>
                    </div>
                </div>
				<?php  endforeach; ?>
				 
                </div>
				
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
           
    </section>