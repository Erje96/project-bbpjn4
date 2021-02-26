<link rel="stylesheet" href="<?php echo base_url('assets/plugins/DataTables-1.10.12/datatables.min.css'); ?>"/>

<link rel="stylesheet" href="<?php echo base_url('assets/selectize/css/selectize.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/selectize/css/selectize.bootstrap3.css'); ?>"/>

<script src="<?php echo base_url('assets/selectize/js/selectize.min.js'); ?>"></script>

<form>
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#administrasi" aria-controls="home" role="tab" data-toggle="tab">Administrasi</a></li>
            <li role="presentation"><a href="#kedokteran" aria-controls="kedokteran" role="tab" data-toggle="tab">Dokter</a></li>
            <li role="presentation"><a href="#keperawatan" aria-controls="keperawatan" role="tab" data-toggle="tab">Perawat</a></li>
            <li role="presentation"><a href="#laboratorium" aria-controls="laboratorium" role="tab" data-toggle="tab">Laboratorium</a></li>
            <li role="presentation"><a href="#radiologi" aria-controls="radiologi" role="tab" data-toggle="tab">Radiologi</a></li>
            <li role="presentation"><a href="#penunjang" aria-controls="penunjang" role="tab" data-toggle="tab">Penunjang</a></li>
            <li role="presentation"><a href="#tempat-tidur" aria-controls="tempat-tidur" role="tab" data-toggle="tab">Tempat Tidur</a></li>
            <li role="presentation"><a href="#obat" aria-controls="obat" role="tab" data-toggle="tab">Obat &amp; Alkes</a></li>
            <li role="presentation"><a href="#umum" aria-controls="umum" role="tab" data-toggle="tab">Umum</a></li>
            <li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="tab" data-toggle="tab">Lainnya</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane tab-pane-rincian active" id="administrasi">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="administrasi"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-administrasi"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="kedokteran">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="kedokteran"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-kedokteran"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="keperawatan">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="keperawatan"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-keperawatan"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="laboratorium">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="laboratorium"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-laboratorium"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="radiologi">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="radiologi"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-radiologi"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="penunjang">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="penunjang"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-penunjang"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="tempat-tidur">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="tempat-tidur"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-tempat-tidur"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="obat">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="obat"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-obat"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="umum">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="rincian-umum"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-umum"></div>
            </div>
            <div role="tabpanel" class="tab-pane tab-pane-rincian" id="lainnya">
                <div class="col-xs-12" style="margin: 20px 0px;">
                    <button class="btn btn-primary btn-refresh" jenis-rincian="lainnya"><span class="fa fa-refresh"></span> Muat Ulang</button>
                </div>
                <div class="col-xs-12" id="rincian-lainnya"></div>
            </div>
        </div>
        
    </div>		
</form>

<div class="modal modal-rincian" jenis-rincian="" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Rincian Administrasi</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<div class="modal modal-hapus" id-delete="" url="" jenis-rincian="" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-konfirmasi-hapus">Ya, Hapus</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/selectize/js/selectize.min.js');?>"></script>

<script>
var id_pendaftaran = '<?php echo $row->$primaryKey; ?>';
var id_rincian = '<?php echo ${'trx' . $trx_detail_1}->id_trx_rincian; ?>';
var progressBar = '<div style="height: 20px;"></div><div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"><span class="sr-only"></span></div></div>';

$(function(){
    var $modalRincian = $('.modal-rincian');
    var $modalHapus = $('.modal-hapus');
    
    function loadRincian(jenisRincian) {
        var $element = $('#rincian-' + jenisRincian);
        $element.html(progressBar).load('<?php echo site_url('billing/rincian_'); ?>' + jenisRincian.replace('-', '_') + '/detail_pendaftaran/' + id_pendaftaran, function (responseText, textStatus, req) {
            if (textStatus == "error") {
              $element.html('<div class="col-lg-12" style="margin-top: 20px;"><p>Gagal mengambil data dari server</p></div>');
            }
        });
    }
    
    $('.tab-pane-rincian').each(function(){
        var jenisRincian = $(this).attr('id');
        loadRincian(jenisRincian);
    });
    
    $modalRincian.on('hide.bs.modal', function(e){
        var jenisRincian = $(this).attr('jenis-rincian');
        loadRincian(jenisRincian);
    });

    $modalHapus.on('hide.bs.modal', function(e){
        var jenisRincian = $(this).attr('jenis-rincian');
        loadRincian(jenisRincian);
    });
    
    $(document).on('click', '.btn-refresh', function(e){
        e.preventDefault();
        var jenisRincian = $(this).attr('jenis-rincian');
        
        loadRincian(jenisRincian);
    });
    
    $(document).on('click', '.btn-tambah-rincian', function(e){
        e.preventDefault();
        
        var jenisRincian = $(this).attr('jenis-rincian');
        var url = $(this).attr('url');
        
        $('.modal-rincian').attr('jenis-rincian', jenisRincian);
        $('.modal-rincian .modal-title').html('Tambah Rincian');
        $('.modal-rincian .modal-body').html(progressBar).load(url);
        $('.modal-rincian').modal('show');
    });
    
    $(document).on('click', '.btn-ubah-rincian', function(e){
        e.preventDefault();
        
        var $row = $(this).parentsUntil('tr').parent();
        var $table = $row.parentsUntil('table').parent();
        
        var id = $row.find('.pk').val();
        var url = $table.find('.url-edit').val();
        var jenisRincian = $table.find('.jenis-rincian').val();
        
        $('.modal-rincian').attr('jenis-rincian', jenisRincian);
        $('.modal-rincian .modal-title').html('Ubah Rincian');
        $('.modal-rincian .modal-body').html(progressBar).load(url + '/' + id);
        $('.modal-rincian').modal('show');
    });

    $(document).on('click', '.btn-hapus-rincian', function(e){
        e.preventDefault();
        
        var $row = $(this).parentsUntil('tr').parent();
        var $table = $row.parentsUntil('table').parent();
        
        var id = $row.find('.pk').val();
        var url = $table.find('.url-delete').val();
        var jenisRincian = $table.find('.jenis-rincian').val();
        
        $('.modal-hapus').attr('url', url).attr('id-delete', id).attr('jenis-rincian', jenisRincian);
        $('.modal-hapus').modal('show');
    });

    $(document).on('click', '.btn-konfirmasi-hapus', function(e){
        e.preventDefault();
        
        var $modal = $(this).parentsUntil('.modal').parent();
        
        var url = $modal.attr('url');
        var id = $modal.attr('id-delete');
        var jenisRincian = $modal.attr('jenis-rincian');
        
        $.ajax({
            url: url + '/' + id + '/1',
            data: {},
            type: 'POST',
            dataType: 'json',
            success: function(response){
                $('.modal-hapus').modal('hide');
                loadRincian(jenisRincian);
            },
            error: function(){
                loadRincian(jenisRincian);
            }
        });
    });
});
</script>

