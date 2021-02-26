
<div class="row" id="extend">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>medis/pendaftaran/list_pendaftaran">
            <div class="col-sm-6">
                <div class="form-group form-group-sm">
                    <label class="col-sm-4 control-label">No RM</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control searchfield" id="no-rm-searchfield" name="no_rm" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-4 control-label">No Pendaftaran</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control searchfield" id="no-pendaftaran-searchfield" name="kd_trx_pendaftaran" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control searchfield" id="nama-searchfield" name="nm_mst_pasien" autocomplete="off" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label"></label>
                    <div class="col-sm-8">
                        <button class="btn btn-default btn-success" id="btn-cari-pasien">Cari</button>
                        <button class="btn btn-default btn-warning" id="btn-bersihkan-filter">Bersihkan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
	<div class="col-lg-12">
    	<table class="table table-bordered table-condensed table-striped table-hover table-sm" id="table-<?php echo $name; ?>">
        	<thead>     
				<!-- GANTI 1 field column -->
            	<th>No Pendaftaran</th>
                <th>No RM</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Instalasi</th>
                <th>Poliklinik</th>
                <th>Dokter Pelaksana</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            <?php foreach($rows as $r): ?>
            	<tr id="list_<?php echo $r->{$primaryKey}; ?>">
                    
                    <td><?php echo $r->kd_trx_pendaftaran; ?></td>
                	<td><?php echo $r->no_rm; ?></td>
                    <td><?php echo $r->nm_mst_pasien; ?></td>
                    <td><?php echo $r->tgl_lahir; ?></td>
                    <td><?php if ($r->kelamin == 1) { echo "Perempuan";}else{echo "Laki - Laki";};  ?></td>
                    <td><?php echo $r->nm_mst_unit_kerja; ?></td>
                    <td><?php echo $r->nm_mst_unit_kerja_sub; ?></td>
                    <td><?php echo $r->nm_mst_pegawai_lengkap; ?></td>
                    <td><a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>medis/pendaftaran/detail/<?php echo $r->{$primaryKey}; ?>" target="_blank" title="Isi Kajian Dokter" data-container="body" data-toggle="tooltip" data-trigger="hover">Detail</a></td>
                </tr>
             <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>
<!--script src="<?php echo base_url("assets/js/jquery.datatables.min.js"); ?>"></script-->
<script src="<?php echo base_url("assets/plugins/DataTables-1.10.12/datatables.min.js"); ?>"></script>
<script>
$(document).ready(function() {
    $table<?php echo ucwords($name); ?> = $('#table-<?php echo $name; ?>').DataTable();
		 
    $('#btn-modal-action').on('click', function(e) {	
		waitingDialog.show();
		fInput.submit_data($('.modal-dialog').find('form').attr('id'), trigger_delete);
    });   
    
});

</script>
