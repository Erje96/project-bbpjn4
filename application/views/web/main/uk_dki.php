
        <div id="dki" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">JAKARTA</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
        
             <div class="row">
                <?php 
                    
					foreach($unit_kerja  as $r): 
                        $string = strip_tags($r['isi_berita']);
                        $isiuk=word_limiter($string,13);                         
				?>
                

            <div class="col-md-7">
            <a href="<?php echo base_url()?><?php echo $r['id']; ?>#isiuk">
                    <img class="img-responsive" src="<?php echo base_url();?>back/assets/upload/gambar/<?php ; ?>" alt="">
                </a>
                
            </div>
            <div class="col-md-5">
                <!-- judul -->
                <h3><a href="<?php echo base_url()?><?php echo $r['id']; ?>#isiuk"><?php echo $r['judul']; ?></a></h3>
                <!-- alamat -->
                <h4><php echo base_url()?><?php echo $r['alamat'];?></h4>
                <!-- isi -->
                <p><?php echo $isiuk; ?><a href="<?php echo base_url()?><?php echo $r['id']; ?>#isiberita">Selengkapnya	</a></p>
                <!-- view project -->
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        <?php endforeach; ?>