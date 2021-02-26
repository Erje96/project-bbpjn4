      <!-- About Section -->
	  <?php 
?>
    <section id="beritabaru">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Berita Terbaru</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
        </div>
					<?php $i=0;
					foreach($berita  as $r): 
						$string = strip_tags($r['isi_berita']);
						$isiberita=word_limiter($string,37); 
						
						if($i % 2 == 0){
							
						
					?>
			  
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
				<h2 class="section-heading"><?php echo $r['judul']; ?></h2>
				<p>By : <?php echo $r['author']; ?>, <?php echo Web::namahari($r['tanggal']) ; ?> <?php echo Web::tanggal($r['tanggal']) ; ?></p>
				
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <p align="justify" class="lead"><?php echo $isiberita; ?> <a style="font-style: red" href="<?php echo base_url()?>web/isiberita/<?php echo $r['id']; ?>/#isiberita">Selengkapnya</a></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo "clip".$r['filename']; ?>" alt="none">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
		<?php $i++; }else{ ?>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
				<h2 class="section-heading"><?php echo $r['judul']; ?></h2>
				<p>By : <?php echo $r['author']; ?>, <?php echo Web::namahari($r['tanggal']) ; ?> <?php echo Web::tanggal($r['tanggal']) ; ?></p>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <p align="justify" class="lead"><?php echo $isiberita; ?> <a style="font-style: red" href="<?php echo base_url()?>web/isiberita/<?php echo $r['id']; ?>#isiberita">Selengkapnya</a></p>
					
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="<?php echo base_url();?>back/assets/upload/gambar/<?php echo "clip".$r['filename']; ?>" alt="none">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
	<?php $i++; } endforeach; ?>
                       
						
             
           
    </section>
 <section id="agenda">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Agenda Kegiatan</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
					<?php $i=0;
					foreach($agenda  as $r): 
						$bulan = array(
							'01'=>'Januari',
							'02'=>'Februari',
							'03'=>'Maret',
							'04'=>'April',
							'05'=>'Mei',
							'06'=>'Juni',
							'07'=>'Juli',
							'08'=>'Agustus',
							'09'=>'September',
							'10'=>'Oktober',
							'11'=>'November',
							'12'=>'Desember'
							);
						$tgl=substr($r['tanggal'],8,2);
    					$bl=substr($r['tanggal'],5,2);
						$bln=$bulan[$bl];
   						 $thn=substr($r['tanggal'],0,4);
						
						if($i % 2 == 0){
							
						
					?>

				
                        <li>
                            <div class="timeline-image">
							<h4><?php echo $tgl;?>
                                    <br><?php echo $bln?>
                                    <br><?php echo $thn;?></h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $r['judul']; ?></h4>
                                    <h5 class="subheading"><?php echo Web::namahari($r['tanggal']) ; ?></h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $r['tempat']; ?></p>
                                </div>
                            </div>
                        </li>
						<?php $i++; }else{ ?>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4><?php echo $tgl;?>
                                    <br><?php echo $bln?>
                                    <br><?php echo $thn;?></h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $r['judul']; ?></h4>
                                    <h5 class="subheading"><?php echo Web::namahari($r['tanggal']) ; ?></h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $r['tempat']; ?></p>
                                </div>
                            </div>
                        </li>
                     	<?php $i++; } endforeach; ?>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Lihat
                                    <br>Semua
                                    <br>Agenda</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
