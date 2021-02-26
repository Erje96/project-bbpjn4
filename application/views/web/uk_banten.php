
        <div id="banten" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">BANTEN</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
        
             <div class="row">
                <?php 
					foreach($unit_kerja  as $r); 
                        $string = strip_tags($r['isi_berita']);
                        $isi_uk=word_limiter($string,13);                         
				?>
                

            <div class="col-md-7">
            <a href="<?php echo base_url()?><?php echo $r['id']; ?>#isi_uk">
                    <img class="img-responsive" src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo "clip".$r['filename']; ?>" alt="">
                </a>
                
            </div>
            <div class="col-md-5">
                <!-- judul -->
                <h3><a href="<?php echo base_url()?><?php echo $r['id']; ?>#isi_uk"><?php echo $r['judul']; ?></a></h3>
                <!-- alamat -->
                <h4><php echo base_url()?><?php echo $r['alamat'];?></h4>
                <!-- isi -->
                <p><?php echo $uk_banten; ?><a href="<?php echo base_url()?><?php echo $r['id']; ?>#isi_uk">Selengkapnya	</a></p>
                <!-- view project -->
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        <?php endforeach; ?>