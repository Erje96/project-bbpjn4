

    <section id="berita">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Berita Terbaru</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
   
					
   <div class="row">

   	   <?php 
					foreach($berita  as $r): 
						$string = strip_tags($r['isi_berita']);
						$isiberita=word_limiter($string,13); 
						
						
							
						
					?>
			  
						<div class="col-md-4 berita">
                <a href="<?php echo base_url()?>web/isiberita/<?php echo $r['id']; ?>#isiberita">
                    <img class="img-responsive" src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo "clip".$r['filename']; ?>" alt="">
                </a>
                <h3>
                    <a href="<?php echo base_url()?>web/isiberita/<?php echo $r['id']; ?>#isiberita"><?php echo $r['judul']; ?></a>
                </h3>
                <p align="justify"><?php echo $isiberita; ?><a href="<?php echo base_url()?>web/isiberita/<?php echo $r['id']; ?>#isiberita">Selengkapnya	</a></p>
            </div>
			
            
         	<?php endforeach; ?>
                          
   </div>

        </div>


						
 
           
    </section>