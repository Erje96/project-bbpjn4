<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-input.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/DataTables-1.10.12/datatables.min.css');?>"/>

<link rel="stylesheet" href="<?php echo base_url('assets/selectize/css/selectize.css');?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/selectize/css/selectize.bootstrap3.css');?>"/>

<style type="text/css">
a.disabled {
   pointer-events: none;
   cursor: default;
}
</style>

<form method="post" id="form-create-<?php echo $name; ?>" action="<?php echo site_url($directory . $name . "/create"); ?>">
    
    <div>
    	
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li  >
            	<a href="#pasien" class="btn btn-primary btn-lg">Pasien</a>
            </li>
            <li >
            	<a href="#cara-bayar" class="btn btn-primary btn-lg disabled">Cara Bayar</a>
            </li>
            <li >
            	<a href="#cara-masuk" class="btn btn-primary btn-lg disabled">Cara Masuk</a>
            </li>
            <li >
            	<a href="#dokter-pj" class="btn btn-primary btn-lg disabled">Dokter</a>
            </li>
            <li >
            	<a href="#penanggung-jawab" class="btn btn-primary btn-lg disabled">Penanggung Jawab</a>		</li>
            <li >
            	<a href="#tempat-tidur" class="btn btn-primary btn-lg disabled">Tempat Tidur</a>
            </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="pasien">
           
                <div class="col-lg-12" style="margin-bottom: 20px; margin-top: 20px;">
                    <a href="<?php echo site_url('sharing/pasien/create'); ?>" class="btn btn-primary btn-lg"><span class="fa fa-plus"></span> Pasien Baru</a>
                </div>
    <div class="form-group col-lg-6">
        <label>No Pendaftaran</label>
        <input type="text"  class="form-control" disabled="" />
    </div>

     <div class="form-group col-lg-6">
        <label>No RM</label>
        <div class="col-lg-6 input-group">
				
					<div class="data_selectize" >
						<input type="hidden" name="<?php echo $trx_head_1;?>[id_mst_pasien]" value="" />
						<select class="form-control " name="<?php echo $trx_head_1; ?>[no_rm]"  id="id_mst_pasien" placeholder="Masukkan Norm" valueField="no_rm" labelField="no_rm" searchField="no_rm" url="<?php echo "sharing/pasien/read/json"; ?>" req="1" required=""></select> 
					</div>				
				
			</div>
                                          
    </div>
	<div>
		<input type="hidden" name="<?php echo $trx_detail_6; ?>[nm_mst_pasien]"/>
        <input type="hidden" name="<?php echo $trx_detail_6; ?>[id_mst_pasien]"/>
        <input type="hidden" name="<?php echo $trx_detail_6; ?>[no_rm]"/>
	</div>
    <div class="form-group col-lg-6">
        <label>Nama Pasien</label>
        <input type="hidden" name="<?php echo $trx_head_1; ?>[nm_mst_pasien]"/>
        
        <input type="text" class="form-control" name="<?php echo $trx_head_1; ?>[nm_mst_pasien]" disabled="" />
    </div>
    <div class="form-group col-lg-6">
        <label>No KTP</label>
        <input type="text" class="form-control" name="<?php echo $trx_head_1; ?>[no_ktp]" disabled="" />
    </div>
    <div class="form-group col-lg-6">
        <label>No Peserta</label>
        <input type="hidden" name="<?php echo $trx_detail_1; ?>[no_peserta]" />
        <input type="text" class="form-control" name="<?php echo $trx_head_1; ?>[no_peserta]" disabled="" />
    </div>
    <div class="form-group col-lg-3">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control input-large" name="<?php echo $trx_head_1; ?>[tempat_lahir]" disabled="" />
    </div>
     <div class="form-group col-lg-3">
        <label>Tangal Lahir</label>
        <input type="hidden" name="<?php echo $trx_head_1; ?>[tgl_lahir]" />
        <input type="text" class="form-control datepicker tglLahir input-large" name="<?php echo $trx_head_1; ?>[tgl_lahir]" id="tgl_lahir" disabled="" />
    </div>
   
   
    <div class="form-group col-lg-6">
        <label>Alamat</label>
        
			<div class="input-group col-lg-6">
				<input type="text" maxlength="255" class="form-control input-xxlarger" name="<?php echo $trx_head_1; ?>[alamat]" value="<?php //echo $alamat_ktp; ?>" placeholder="Nama Jalan" required="required" disabled=""/></input>
				<input type="text" maxlength="255" class="form-control input-medium" name="<?php echo $trx_head_1; ?>[rt]" value="<?php //echo $alamat_ktp; ?>" placeholder="RT" required="required" disabled=""/></input>
				<input type="text" maxlength="255" class="form-control input-medium" name="<?php echo $trx_head_1; ?>[rw]" value="<?php //echo $alamat_ktp; ?>" placeholder="RW"  required="required" disabled=""/></input>
				
				<select class="form-control input-xxlarge" name="<?php echo $trx_head_1; ?>[id_mst_kelurahan]" id="id_mst_kelurahan" placeholder="Kelurahan" valueField="id_mst_kelurahan" labelField="nm_mst_kelurahan" searchField="nm_mst_kelurahan" url="<?php echo "sdm/kelurahan/read/json";?>" childField="id_mst_kecamatan" disabled=""></select> 
				<select class="form-control input-medium"  id="id_mst_kecamatan" placeholder="Kecamatan" valueField="id_mst_kecamatan" labelField="nm_mst_kecamatan" searchField="nm_mst_kecamatan" url="<?php echo "sdm/kecamatan/read/json";?>" childField="id_mst_kodya" disabled=""></select> 
				<select class="form-control input-medium" id="id_mst_kodya"  placeholder="Kota/Kabupaten" valueField="id_mst_kodya" labelField="nm_mst_kodya" searchField="nm_mst_kodya" url="<?php echo "sdm/kodya/read/json";?>" childField="id_mst_propinsi" disabled=""></select> 
				<select class="form-control input-xmedium" id="id_mst_propinsi"  placeholder="Propinsi" valueField="id_mst_propinsi" labelField="nm_mst_propinsi" searchField="nm_mst_propinsi" url="<?php echo "sdm/propinsi/read/json";?>" disabled=""></select> 
				<input type="number" class="form-control input-small" name="<?php echo $trx_head_1; ?>[kd_pos]" value="<?php //echo $kd_pos_ktp; ?>" placeholder="Kode Pos" disabled="" />
			</div>	
		</div>
	 <div class="form-group col-lg-6">
        <label>Kelamin</label>
        <select name="<?php echo $trx_head_1; ?>[kelamin]" class="form-control" disabled="">
            <option value="1">Laki-Laki</option>
            <option value="0">Perempuan</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>Alamat Kerabat</label>
        <textarea name="<?php echo $trx_head_1; ?>[alamat_kerabat]" rows="3" class="form-control"disabled=""></textarea>
    </div>
    <div class="form-group col-lg-6">
        <label>No Telepon</label>
        <input type="text" class="form-control" name="<?php echo $trx_head_1; ?>[no_telepon]" disabled="" />
    </div>
    <div class="form-group col-lg-6">
        <label>No Handphone</label>
        <input type="text" class="form-control" name="<?php echo $trx_head_1; ?>[no_hp]" disabled=""/>
    </div>
    
    <div class="form-group col-lg-6">
        <label>Catatan</label>
        <textarea name="<?php echo $trx_head_1; ?>[catatan]" rows="3" class="form-control" disabled=""></textarea>
    </div>
    <div class="form-group col-lg-6">
        <label>Alergi</label>
        <input type="text" class="form-control" name="<?php echo $trx_head_1; ?>[alergi]" disabled=""/>
    </div>
    <div class="form-group col-lg-6">
        <label>Golongan Darah</label>
        <?php $dt = get_data_helper('flag_gd');?>
        <select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_gol_darah]" required disabled="">
        	<option hidden="">Pilih Golongan Darah</option>
            <?php foreach($dt as $d) :
                $sel = '';
                if ($flag_gd == $d->kd_mst_data_helper) $sel = 'selected'; ?>
                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
            <?php endforeach; ?>
        </select>
    </div>    
    
    <div class="form-group col-lg-6">
        <label>Perkawinan</label>
        <?php $dt = get_data_helper('flag_perkawinan');?>
        <select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_perkawinan]" required disabled="">
        	<option hidden="">Pilih Status Perkawinan</option>
            <?php foreach($dt as $d) :
                $sel = '';
                if ($flag_perkawinan == $d->kd_mst_data_helper) $sel = 'selected'; ?>
                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group col-lg-6">
        <label>Pendidikan</label>
        <?php $dt = get_data_helper('nm_mst_pendidikan');?>
        <select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_pendidikan]" required disabled="">
        	<option hidden="">Pilih Tingkat Pendidikan</option>
            <?php foreach($dt as $d) :
                $sel = '';
                if ($nm_mst_pendidikan == $d->kd_mst_data_helper) $sel = 'selected'; ?>
                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group col-lg-6">
        <label>Pekerjaan</label>
        <?php $dt = get_data_helper('flag_pekerjaan');?>
        <select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_pekerjaan]" required disabled="">
        	<option hidden="">Pilih Pekerjaan</option>
            <?php foreach($dt as $d) :
                $sel = '';
                if ($flag_pekerjaan == $d->kd_mst_data_helper) $sel = 'selected'; ?>
                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
		
	<div class="form-group col-lg-6">
        <label>Agama</label>
        <?php $dt = get_data_helper('flag_agama');?>
        <select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_agama]" required disabled="">
        	<option hidden="">Pilih Agama</option>
            <?php foreach($dt as $d) :
                $sel = '';
                if ($flag_agama == $d->kd_mst_data_helper) $sel = 'selected'; ?>
                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
            <div role="tabpanel" class="tab-pane" id="cara-bayar">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Cara Bayar</label>
                        <div class="data_selectize">
                            <select class="form-control"  id="id_mst_cara_bayar" placeholder="Cara Bayar" valueField="id_mst_cara_bayar" labelField="nm_mst_cara_bayar" searchField="nm_mst_cara_bayar" url="<?php echo "sharing/cara_bayar/read/json";?>"></select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Sub Cara Bayar</label>
                        <input type="hidden" name="cara_bayar[no_urut]" value="1" />
                        <div class="data_selectize">
                            <select class="form-control" id="id_mst_cara_bayar_sub" name="<?php echo $trx_detail_1; ?>[id_mst_cara_bayar_sub]" placeholder="Sub Cara Bayar" valueField="id_mst_cara_bayar_sub" labelField="nm_mst_cara_bayar_sub" searchField="nm_mst_cara_bayar_sub" url="<?php echo "sharing/cara_bayar_sub/read/json";?>" parentField="id_mst_cara_bayar" required=""></select>
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
             	
                
            </div>
            <div role="tabpanel" class="tab-pane" id="cara-masuk">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Cara Masuk</label>
                        <div class="data_selectize">
                            <select class="form-control"  id="id_mst_cara_masuk" placeholder="Cara Masuk" valueField="id_mst_cara_masuk" labelField="nm_mst_cara_masuk" searchField="nm_mst_cara_masuk" url="<?php echo "sharing/cara_masuk/read/json";?>"></select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Sub Cara Masuk</label>
                        <div class="data_selectize">
                            <select class="form-control" name="<?php echo $trx_detail_2; ?>[id_mst_cara_masuk_sub]" id="id_mst_cara_masuk_sub" name="cara_masuk[id_mst_cara_masuk_sub]" placeholder="Sub Cara Masuk" valueField="id_mst_cara_masuk_sub" labelField="nm_mst_cara_masuk_sub" searchField="nm_mst_cara_masuk_sub" url="<?php echo "sharing/cara_masuk_sub/read/json";?>" parentField="id_mst_cara_masuk" required=""></select>
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                
            </div>
            <div role="tabpanel" class="tab-pane" id="dokter-pj">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Instalasi</label>
                        <input type="hidden" class="id_mst_unit_kerja_dir" name="json_jabatan[id_mst_unit_kerja_dir]"/>
			<input type="hidden" class="kd_mst_unit_kerja" name="json_jabatan[kd_mst_unit_kerja]"/>
			<input type="hidden" class="nm_mst_unit_kerja" name="json_jabatan[nm_mst_unit_kerja]"/>
			<input type="hidden" class="nm_mst_unit_kerja_simka" name="json_jabatan[nm_mst_unit_kerja_simka]"/>
			<div class="data_selectize">
				<select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_unit_kerja]" id="id_mst_unit_kerja" placeholder="UNIT KERJA" valueField="id_mst_unit_kerja" labelField="nm_mst_unit_kerja" searchField="nm_mst_unit_kerja" showFields="kd_mst_unit_kerja,nm_mst_unit_kerja" classFields="col-lg-2,col-lg-10" fillingTo="id_mst_unit_kerja_dir,kd_mst_unit_kerja,nm_mst_unit_kerja,nm_mst_unit_kerja_simka" req="1" required=""></select>
			</div> 
                    </div>
                    <div class="form-group">
                        <label>Poli</label>
                        <input type="hidden" class="kd_mst_unit_kerja_sub" name="json_jabatan[kd_mst_unit_kerja_sub]"/>
			<input type="hidden" class="nm_mst_unit_kerja_sub" name="json_jabatan[nm_mst_unit_kerja_sub]"/>
			<div class="data_selectize">
				<select class="form-control" name="<?php echo $trx_head_1; ?>[id_mst_unit_kerja_sub]" id="id_mst_unit_kerja_sub" placeholder="SUB UNIT KERJA" valueField="id_mst_unit_kerja_sub" labelField="nm_mst_unit_kerja_sub" searchField="nm_mst_unit_kerja_sub" reffField="id_mst_unit_kerja" childField="id_mst_unit_kerja" url="<?php echo "sdm/unit_kerja_sub/read/json";?>" widthFields="500px" showFields="nm_mst_unit_kerja_sub,nm_mst_unit_kerja" classFields="col-lg-6,col-lg-6" fillingTo="kd_mst_unit_kerja_sub,nm_mst_unit_kerja_sub" required=""></select>
			</div>
                    </div>
                    <div class="form-group">
                        <label>Dokter</label>
                        <input type="hidden" name="<?php echo $trx_head_1; ?>[id_mst_dokter_pj]" value="">
                        <select class="form-control " name="<?php echo $trx_detail_3;?>[id_mst_pegawai]" value="" id="id_mst_pegawai" placeholder="Pilih Dokter" valueField="id_mst_pegawai" labelField="nm_mst_pegawai_lengkap" searchField="nm_mst_pegawai_lengkap" url="<?php echo "sdm/pegawai/read/json"; ?>" req="1" required=""></select> 
                        
                    </div>
                    
                    <div class="form-group">
                        <label>Diagnosa Awal</label>
                        <select class="form-control " name="<?php echo $trx_head_1; ?>[id_mst_icd10]" value="" id="id_mst_icd10" placeholder="Pilih Diagnosa Awal" valueField="id_mst_icd10" labelField="nm_icd_icd10" searchField="nm_icd_icd10" url="<?php echo "rekam_medis/icd10/read/json"; ?>" req="1" required=""></select> 
                        
                    </div>
                    
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                
            </div>
            <div role="tabpanel" class="tab-pane" id="penanggung-jawab">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Penanggung Jawab</label>
                        <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[nm_trx_penanggung_jawab]" placeholder="Nama Penanggung Jawab">
                    </div>
                    <div class="form-group">
                        <label>Hubungan Keluarga</label>
					        <?php $dt = get_data_helper('hub_keluarga');?>
					        <select class="form-control" name="<?php echo $trx_detail_4; ?>[id_mst_hubungan_keluarga" >
					        	<option hidden="">Pilih Hubungan Keluarga</option>
					            <?php foreach($dt as $d) :
					                $sel = '';
					                if ($flag_pekerjaan == $d->kd_mst_data_helper) $sel = 'selected'; ?>
					                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
					            <?php endforeach; ?>
					        </select>
                    </div>
                    <div class="form-group">
                        <label>No KTP</label>
                        <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[no_ktp]" placeholder="No KTP">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="<?php echo $trx_detail_4;?>[no_ktp]" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>RT / RW</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[rt]" placeholder="RT">                            
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[rw]" placeholder="RW">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[kode_pos]" placeholder="Kode Pos">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>No Telepon / No. Handphone</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[no_telepon]" placeholder="No Telepon">                            
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="<?php echo $trx_detail_4;?>[no_hp]" placeholder="No. Handphone">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                         <label>Pekerjaan</label>
					        <?php $dt = get_data_helper('flag_pekerjaan');?>
					        <select class="form-control" name="<?php echo $trx_detail_4; ?>[id_mst_pekerjaan]" >
					        	<option hidden="">Pilih Pekerjaan</option>
					            <?php foreach($dt as $d) :
					                $sel = '';
					                if ($flag_pekerjaan == $d->kd_mst_data_helper) $sel = 'selected'; ?>
					                <option value="<?php echo $d->kd_mst_data_helper; ?>" <?php echo $sel; ?> ><?php echo $d->nm_mst_data_helper; ?></option>
					            <?php endforeach; ?>
					        </select>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                
            </div>
            <div role="tabpanel" class="tab-pane" id="tempat-tidur">
            <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Kamar</label>
                        <div class="data_selectize">
                            <select class="form-control" id="id_mst_kamar" placeholder="Pilih Kamar" valueField="id_mst_kamar" labelField="nm_mst_kamar" searchField="nm_mst_kamar" url="<?php echo "rawat_inap/kamar/read/json";?>" req="1" ></select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Tidur</label>
                        <div class="data_selectize">
                            <select class="form-control" name="<?php echo $trx_detail_5;?>[id_mst_tempat_tidur]" id="id_mst_tempat_tidur" placeholder="Pilih Kamar" valueField="id_mst_tempat_tidur" labelField="nm_mst_tempat_tidur" searchField="nm_mst_tempat_tidur" url="<?php echo "rawat_inap/tempat_tidur/read/json";?>" parentField="id_mst_kamar" req="1" required=""></select>
                        </div>
                    </div>
                   
               <div>
            	<button class="btn btn-success pull-right" id="button-submit" name="submit" value="save">Tambah</button>
            </div>
                </div>
            
            </div>
            
        </div>
    </div>
    
		
</form>
<script>
$(function() {
    
});
</script>
<script type="text/javascript">

	

  $(document).ready(function () {
  var navListItems = $('ul.nav li a'),
		  allWells = $('.tab-pane'),
		  tab = $('li a'),
		  allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  
		  $item.addClass('btn-primary');
		 
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
		
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".tab-pane"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('ul.nav li a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],input[type='number'],select,textarea"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid==true)
		  nextStepWizard.removeClass('disabled')[0].click();
  });



  $('ul.nav li a.btn-primary').trigger('click');
});
  </script>
<script src="<?php echo base_url('assets/selectize/js/selectize.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('assets/js/form-input.js');?>"></script>

<script>
//load list/datatable
var $table<?php echo ucwords($name); ?>;
var trigger_create = 'reload_list';
var trigger_update = 'reload_list';
var trigger_delete = 'reload_list';
var id_mst_propinsi_ktp;
var id_mst_kodya_ktp;
var id_mst_kecamatan_ktp;
var id_mst_kelurahan_ktp;
var id_rm_mst_diagnosa;
var id_mst_propinsi_tinggal;
var id_mst_kodya_tinggal;
var id_mst_kecamatan_tinggal;
var id_mst_kelurahan_tinggal;


var myFuncs = {

    set_alamat: function(a, b, c) {	
		var fields = $('#'+b).attr('childField');
		if (fields) {
			var arr_fields = fields.split(",");
			$.each(arr_fields, function(i, id) {
				v_field = id.replace('_ktp', ''); 
				v_field = v_field.replace('_tinggal', ''); 
				
				if (a == 'onItemAdd') {
					$('#'+id)[0].selectize.addOption(c);
					$('#'+id)[0].selectize.setValue(c[v_field]);
				} else if (a == 'onItemRemove') {
					$('#'+id)[0].selectize.clearCache();
					$('#'+id)[0].selectize.clearOptions();
					
					myFuncs.set_alamat('onItemRemove', id, c);
				} else if (a == 'onDelete') {
					$('#'+id)[0].selectize.clearCache();
					$('#'+id)[0].selectize.clearOptions();
					
					myFuncs.set_alamat('onDelete', id, c);
				}
			});
		}
		
	},
	
	set_pegawai: function(a, b, c){
        if (a == 'onItemAdd') {	
			
			
			$('[name="nm_mst_pegawai_lengkap"]').val(c.nm_mst_pegawai_lengkap);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_dokter_pj]"]').val(c.id_mst_pegawai);	
				
			$('[name="id_mst_jabatan"]').val(c.id_mst_jabatan);	
			$('[name="id_mst_jabatan_detail"]').val(c.id_mst_jabatan_detail);	
			$('[name="nm_mst_jabatan"]').val(c.nm_mst_jabatan);	
			$('[name="nm_mst_jabatan_detail"]').val(c.nm_mst_jabatan_detail);	
			$('[name="nm_mst_unit_kerja"]').val(c.nm_mst_unit_kerja);	
			$('[name="nm_mst_unit_kerja_sub"]').val(c.nm_mst_unit_kerja_sub);	
			
		} else if (a == 'onDelete') {
			$('#flag_shift option').attr('disabled', true);
			$('[name="nm_mst_pegawai_lengkap"]').val('');	
			
			$('[name="id_mst_unit_kerja"]').val('');	
			$('[name="id_mst_unit_kerja_sub"]').val('');	
			$('[name="id_mst_jabatan"]').val('');	
			$('[name="id_mst_jabatan_detail"]').val('');	
			$('[name="nm_mst_jabatan"]').val('');	
			$('[name="nm_mst_jabatan_detail"]').val('');	
			$('[name="nm_mst_unit_kerja"]').val('');	
			$('[name="nm_mst_unit_kerja_sub"]').val('');	
			
			// $('#id_mst_unit_kerja').val('');
			// $('#id_mst_jabatan').val('');	
			// $('#nm_mst_jabatan_detail').val('');	
			// $('#nm_mst_unit_kerja').val('');	
			// $('#nm_mst_unit_kerja_sub').val('');
		}
    },
    do_set_alamat : function(dtpost, data){
    	console.log(data);
		id_mst_kelurahan[0].selectize.addOption(data[0]);
		id_mst_kelurahan[0].selectize.setValue(data[0].id_mst_kelurahan);
	},

	set_pasien: function(a, b, c){
        if (a == 'onItemAdd') {			
			$('[name="id_mst_pasien"]').val(c.id_mst_pasien);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_pasien]"]').val(c.id_mst_pasien);	
			$('[name="<?php echo $trx_detail_6; ?>[id_mst_pasien]"]').val(c.id_mst_pasien);	
			$('[name="<?php echo $trx_head_1; ?>[no_rm]"]').val(c.no_rm);	
			$('[name="<?php echo $trx_detail_6; ?>[no_rm]"]').val(c.no_rm);	
			$('[name="<?php echo $trx_head_1; ?>[nm_mst_pasien]"]').val(c.nm_mst_pasien);	
			$('[name="<?php echo $trx_detail_6; ?>[nm_mst_pasien]"]').val(c.nm_mst_pasien);	
			$('[name="<?php echo $trx_head_1; ?>[no_ktp]"]').val(c.no_ktp);	
			$('[name="<?php echo $trx_head_1; ?>[tempat_lahir]"]').val(c.tempat_lahir);	
			$('[name="<?php echo $trx_head_1; ?>[tgl_lahir]"]').val(c.tgl_lahir);	
			$('[name="<?php echo $trx_head_1; ?>[kelamin]"]').val(c.kelamin);	
			$('[name="<?php echo $trx_head_1; ?>[alamat]"]').val(c.alamat);	
			$('[name="<?php echo $trx_head_1; ?>[no_telepon]"]').val(c.no_telepon);	
			$('[name="<?php echo $trx_head_1; ?>[no_peserta]"]').val(c.no_peserta);	
			$('[name="<?php echo $trx_detail_1; ?>[no_peserta]"]').val(c.no_peserta);	
			$('[name="<?php echo $trx_head_1; ?>[no_hp]"]').val(c.no_hp);	
			$('[name="<?php echo $trx_head_1; ?>[alamat_kerabat]"]').val(c.alamat_kerabat);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_pekerjaan]"]').val(c.id_mst_pekerjaan);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_warga_negara]"]').val(c.id_mst_warga_negara);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_pendidikan]"]').val(c.id_mst_pendidikan);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_perkawinan]"]').val(c.id_mst_perkawinan);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_agama]"]').val(c.id_mst_agama);	
			$('[name="<?php echo $trx_head_1; ?>[id_mst_gol_darah]"]').val(c.id_mst_gol_darah);	
			$('[name="<?php echo $trx_head_1; ?>[rt]"]').val(c.rt);	
			$('[name="<?php echo $trx_head_1; ?>[rw]"]').val(c.rw);	
			$('[name="<?php echo $trx_head_1; ?>[alergi]"]').val(c.alergi);	
			$('[name="<?php echo $trx_head_1; ?>[catatan]"]').val(c.catatan);	
			$('[name="<?php echo $trx_head_1; ?>[kelamin]"]').val(c.kelamin);	
			$('[name="<?php echo $trx_head_1; ?>[kd_pos]"]').val(c.kd_pos);	
			$('[id="id_mst_kelurahan"]').val(c.id_mst_kelurahan);	
			if (c.id_mst_kelurahan != '0') {
			url = site_url+'sdm/kelurahan/read/json';
			post_data = {
				id_mst_kelurahan: c.id_mst_kelurahan
			}
			fInput.process_ajax(url, 'do_set_alamat', post_data);
			/*var obj_tinggal = {
				id_mst_kelurahan: obj.id_mst_kelurahan,
				nm_mst_kelurahan: obj.id_mst_kelurahan,
				id_mst_kecamatan: obj.id_mst_kecamatan_tinggal,
				nm_mst_kecamatan: obj.nm_mst_kecamatan_tinggal,
				id_mst_kodya: obj.id_mst_kodya_tinggal,
				nm_mst_kodya: obj.nm_mst_kodya_tinggal,
				id_mst_propinsi: obj.id_mst_propinsi_tinggal,
				nm_mst_propinsi: obj.nm_mst_propinsi_tinggal,
			};
			id_mst_kelurahan[0].selectize.addOption(obj_tinggal);
			id_mst_kelurahan[0].selectize.setValue(obj_tinggal.id_mst_kelurahan);*/
			}	
		

			
		} else if (a == 'onDelete') {
			$('#flag_shift option').attr('disabled', true);
			$('[name="id_mst_pasien"]').val('');	
			$('[name="no_rm"]').val('');	
			$('[name="nm_pasien"]').val('');	
			$('[name="nik"]').val('');	
			$('[name="tempat_lahir"]').val('');	
			$('[name="tgl_lahir"]').val('');	
			$('[name="kelamin"]').val('');	
			$('[name="alamat"]').val('');	
			$('[name="no_tlp"]').val('');	
			$('[name="no_hp"]').val('');	
			$('[name="alamat_krbt"]').val('');
			$('[name="flag_pekerjaan"]').val('');
			$('[name="flag_wn"]').val('');
			$('[name="nm_mst_pendidikan"]').val('');
			$('[name="flag_perkawinan"]').val('');
			$('[name="flag_agama"]').val('');
			$('[name="flag_gd"]').val('');
			$('[name="flag_kelamin"]').val('');
			$('[name="kd_pos"]').val('');
			$('[id="id_mst_kelurahan"]').val('');

			
			
		}
    },
	
	set_instalasi: function(a, b, c){
        if (a == 'onItemAdd') {			
			$('[name="<?php echo $trx_head_1; ?>[id_mst_unit_kerja]"]').val(c.id_mst_unit_kerja);		
				
		} else if (a == 'onDelete') {
			$('#flag_shift option').attr('disabled', true);
			$('[name="<?php echo $trx_head_1; ?>[id_mst_unit_kerja]"]').val('');		
		}
	
    },
    
    set_poli: function(a, b, c){
        if (a == 'onItemAdd') {			
			$('[name="<?php echo $trx_head_1; ?>[id_mst_unit_kerja_sub]"]').val(c.id_mst_unit_kerja_sub);		
					
		} else if (a == 'onDelete') {
			$('#flag_shift option').attr('disabled', true);
			$('[name="<?php echo $trx_head_1; ?>[id_mst_unit_kerja_sub]"]').val('');		
		}
	
    },
    
    after_select: function(a, b, c) {
		
		var fillingTo = $('#'+b).attr('fillingTo');
		if (fillingTo) {
			var arr_fields = fillingTo.split(",");
			$.each(arr_fields, function(i, v_field) {
				
				if (a == 'onItemAdd') {
					$('.'+ v_field).val(c[v_field]);
				} else if (a == 'onItemRemove' || a == 'onDelete')
					$('.'+ v_field).val('');
			});
		}
	}
};



function do_delete_<?php echo $name; ?> ( ele ) {
	var id = $(ele).attr('id_data');
	
	var post_data = {
		<?php echo $primaryKey; ?>: id,
	};
	url = "<?php echo site_url($directory."$name/delete"); ?>";
	title = 'Delete Data <?php echo ucwords($name); ?>';
	message = 'Are you sure to Delete Data '+ $('#table-<?php echo $name; ?> #list_'+id).find('.nama').text()+' ?';
	
	fLayout.reverse_modal();
	fInput.open_modal(url, title, message, post_data, 'danger');
}

function do_edit_<?php echo $name; ?> ( ele ) {
	fLayout.reverse_modal();
	fInput.open_modal_edit($(ele).attr('id_data'), '<?php echo site_url($directory."$name/update/") ?>');
}

</script>

<script type="text/javascript">
// nama vaiabel harus sama dengan id object

$(document).ready(function() {	    	
		id_mst_propinsi = fInput.create_selectize('id_mst_propinsi', 'set_alamat');	
		id_mst_kodya = fInput.create_selectize('id_mst_kodya', 'set_alamat');	
		id_mst_kecamatan = fInput.create_selectize('id_mst_kecamatan', 'set_alamat');	
		id_mst_kelurahan = fInput.create_selectize('id_mst_kelurahan', 'set_alamat');	
			
		
	    
	});

$(document).ready(function() {
	<?php $where = array( 'whereFields' => array('a.flag_active' => 1) ); ?>
	id_mst_unit_kerja = fInput.local_selectize( 'id_mst_unit_kerja',
		<?php echo json_encode(get_data_master('sdm/unit_kerja', 'read_master', null, $where)); ?>, 'body', 'after_select');
	id_mst_unit_kerja_sub = fInput.ajax_selectize( 'id_mst_unit_kerja_sub', 'body', 'after_select' );
   //$( ".datepicker" ).datepicker();
    
   // $( ".datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
    $( ".datepicker" ).datepicker({
	changeMonth: true,
	changeYear:true,
	dateFormat: "yy-mm-dd",
	yearRange: "-100:+10"
	});
	
	$( ".datepicker" ).change(function(){
		//alert("ganti");
		lahir=$(this).val();
		getUsia(lahir);
		
	})
	 $( ".datepicker2" ).datepicker({
	changeMonth: true,
	changeYear:true,
	dateFormat: "yy-mm-dd",
	yearRange: "-100:+10"
	});
	

  });
  function getUsia(lahir){
	  tanggallahir=lahir;
		tanggal=$(".tanggal_sekarang").val();
		bulan=$(".bulan_sekarang").val();
		tahun=$(".tahun_sekarang").val();
		tglsplit=tanggallahir.split("-");
		tanggal++;
		tanggal--;
		bulan++;
		bulan--;
		tahun++;
		tahun--;
		tglsplit[0]++;
		tglsplit[0]--;
		tglsplit[1]++;
		tglsplit[1]--;
		tglsplit[2]++;
		tglsplit[2]--;
		umur=tahun-tglsplit[2];
      
		if((bulan>tglsplit[1]) ||(bulan==tglsplit[1] && tanggal>tglsplit[0]))
		{
			umurbulannya=bulan-tglsplit[1];
			
		}
		else{
			umurbulannya=12-(tglsplit[1]-bulan);
			umur--;
		}
		if(tanggal>=tglsplit[0])
		{
			umurtanggalnya=tanggal-tglsplit[0];
		}
		else{
			umurtanggalnya=30-(tanggal-tglsplit[0]);
		}
       if(umurtanggalnya>=31)
{
    umurtanggalnya=umurtanggalnya-31;
    umurbulannya++;
}
//alert(umurbulannya);
      if(umurbulannya>=12){
          umurbulannya=umurbulannya-12;
          umur++;
      }
   
		umurnya=umur+" tahun "+umurbulannya+" bulan "+umurtanggalnya+" hari";
		$(".usia").val(umurnya);
  }
</script>
  <script>
// nama vaiabel harus sama dengan id object
$(document).ready(function() {	    	
	id_mst_pegawai = fInput.create_selectize('id_mst_pegawai', 'set_pegawai');
	id_mst_pegawaiS = fInput.create_selectize('id_mst_pegawai');
	id_mst_pasien = fInput.create_selectize('id_mst_pasien', 'set_pasien');
	id_mst_cara_bayar = fInput.create_selectize('id_mst_cara_bayar');
	id_mst_cara_bayar_sub = fInput.create_selectize('id_mst_cara_bayar_sub');
	id_mst_cara_masuk = fInput.create_selectize('id_mst_cara_masuk');
	id_mst_cara_masuk_sub = fInput.create_selectize('id_mst_cara_masuk_sub');
	id_mst_unit_kerja = fInput.create_selectize('id_mst_unit_kerja','set_instalasi');
	id_mst_unit_kerja_sub = fInput.create_selectize('id_mst_unit_kerja_sub','set_poli');
	id_mst_kamar = fInput.create_selectize('id_mst_kamar');
	id_mst_tempat_tidur = fInput.create_selectize('id_mst_tempat_tidur');
	id_mst_icd10 = fInput.create_selectize('id_mst_icd10');
	
	$('#btn-process').on('click', function() {
		$('#div-submit').show();
		if ($('#id_mst_jabatan').val() == '' || $('#flag_shift').val() == null) alert('Nama Pegawai, Jabatan, dan Satker tidak boleh kosong');
		else {
			var post_data = {
				id_mst_pegawai: $('[name="id_mst_pegawai"]').val(),
				bln_shift_pegawai: $('[name="bln_shift_pegawai"]').val(),
				thn_shift_pegawai: $('[name="thn_shift_pegawai"]').val(),
				flag_shift: $('#flag_shift').val(),
			};
			$("#shift").load("<?php echo site_url($directory."$name/shift/create_shift") ?>", post_data);
		}
	});
		
    // create
   /* $('#form-create-<?php echo $name; ?>').on('submit', function(e) {
		// waitingDialog.show();
		// waitingDialog.hide();
        fInput.submit_data($(this).attr('id'), trigger_create);
        e.preventDefault(); 
    });*/
	
});
</script>

