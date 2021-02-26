    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">galeri</h2>
                    <h3 class="section-subheading text-muted">Kumpulan Galery Foto</h3>
                </div>
            </div>
            <div class="row">
            
             <?php 
             $i=1;
             
					foreach($galeri  as $r): 
						$keterangan = strip_tags($r['keterangan']);
						$link= "#".$i;
					?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo $link;?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x">Preview</i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo "clip".$r['filename']; ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $r['nama']; ?></h4>
                        <p class="text-muted"><?php echo $keterangan; ?></p>
                    </div>
                </div>
                	
                	<?php $i++; endforeach; ?>
            
            </div>
        </div>
    </section>
    
    
    <?php 
             $i=1;
            
					foreach($galeri  as $r): 
						$keterangan = strip_tags($r['keterangan']);
						
					?>
     <div class="portfolio-modal modal fade" id="<?php echo $i;?>" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php echo $r['nama']; ?></h2>
                            <img class="img-responsive img-centered" src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo $r['filename']; ?>" alt="">					
                            <p><?php echo $keterangan; ?></p>
                            <ul class="list-inline">
                                <li>Tangal Posting: <?php echo $r['tanggal_foto']; ?></li>
                                <li>Category: <?php echo $r['tipe']; ?></li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; endforeach; ?>
            