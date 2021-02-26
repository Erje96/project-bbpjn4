
<div class="row" id="extend">
	<div class="col-lg-12">
    	<table class="table table-bordered table-condensed table-striped table-hover table-sm" id="table-<?php echo $name; ?>">
        	<thead>     
				<!-- GANTI 1 field column -->
            	<th>No Pendaftaran</th>
                <th>No RM</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Unit Kerja</th>
                <th>Sub Unit Kerja</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            <?php foreach($rows as $r): ?>
            	<tr id="list_<?php echo $r->{$primaryKey}; ?>">
                    
                    <td><?php echo $r->kd_trx_pendaftaran; ?></td>
                	<td><?php echo $r->no_rm; ?></td>
                    <td><?php echo $r->nm_mst_pasien; ?></td>
                    <td><?php echo $r->tgl_lahir; ?></td>
                    <td><?php echo $r->kelamin; ?></td>
                    <td><?php echo $r->nm_mst_unit_kerja; ?></td>
                    <td><?php echo $r->nm_mst_unit_kerja_sub; ?></td>
                    <td><?php echo $r->flag_active; ?></td>
                    <td>
						<?php if(is_auth($name, 'update')): ?>
							<button class="btn btn-xs btn-primary edit_ajax" id_data="<?php echo $r->{$primaryKey}; ?>" onClick="return do_edit_<?php echo $name; ?>(this);" data-toggle="modal" data-target="#myModal">Ubah</button> 
						<?php endif;?> 
						
						<?php if(is_auth($name, 'delete')): ?>
							<button class="btn btn-xs btn-danger" id_data="<?php echo $r->{$primaryKey}; ?>" onClick="return do_delete_<?php echo $name; ?>(this);" >Hapus</button>
						<?php endif;?>
					</td>
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
