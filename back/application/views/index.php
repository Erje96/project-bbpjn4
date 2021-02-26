<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-input.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/DataTables-1.10.12/datatables.min.css');?>"/>

<link rel="stylesheet" href="<?php echo base_url('assets/selectize/css/selectize.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/selectize/css/selectize.bootstrap3.css');?>">	

	<!-- form create -->
	<!-- ============================================= -->
	<div class="row" >
		<div class="col-lg-12" >
			<fieldset class="the-fieldset" >
			<legend class="the-legend ">&nbsp;Tambah Data&nbsp;</legend>
				<div id="create_section" >
				
				</div>
			</fieldset>
		</div>
	</div>

	<br /><br />

	<!-- view -->
	<!-- ============================================= -->
	<div id="list_section">
		
	</div>

<script src="<?php echo base_url("assets/plugins/DataTables-1.10.12/datatables.min.js"); ?>"></script>
<script src="<?php echo base_url('assets/js/form-input.js');?>"></script>
<script>
//load list/datatable
var $table<?php echo ucwords($name); ?>;
var trigger_create = 'reload_list';
var trigger_update = 'reload_list';
var trigger_delete = 'reload_list';

var id_mst_propinsi;
var id_mst_propinsi_update;

$( document ).ready(function() {
	waitingDialog.show();
	
	<?php if(is_auth($name, 'create')): ?>
		$("#create_section").load("<?php echo site_url($directory."$name/create") ?>");
	<?php endif;?>
    
    <?php if(is_auth($name, 'index')): ?>
		$("#list_section").load("<?php echo site_url($directory."$name/read/list") ?>");
		waitingDialog.hide();
	<?php endif;?>
    	
});

var myFuncs = {
    reload_list: function(data){
        $("#list_section").load("<?php echo site_url("$directory$name/read/list") ?>");
		waitingDialog.hide();
    },
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


