<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Data_film <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Idunik <?php echo form_error('idunik') ?></label>
            <input type="text" class="form-control" name="idunik" id="idunik" placeholder="Idunik" value="<?php echo $idunik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Judulfilm <?php echo form_error('judulfilm') ?></label>
            <input type="text" class="form-control" name="judulfilm" id="judulfilm" placeholder="Judulfilm" value="<?php echo $judulfilm; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Idkatagori <?php echo form_error('idkatagori') ?></label>
            <input type="text" class="form-control" name="idkatagori" id="idkatagori" placeholder="Idkatagori" value="<?php echo $idkatagori; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tahunfilm <?php echo form_error('tahunfilm') ?></label>
            <input type="text" class="form-control" name="tahunfilm" id="tahunfilm" placeholder="Tahunfilm" value="<?php echo $tahunfilm; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gambar Besar <?php echo form_error('gambar_besar') ?></label>
            <input type="text" class="form-control" name="gambar_besar" id="gambar_besar" placeholder="Gambar Besar" value="<?php echo $gambar_besar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gambar Thumbel <?php echo form_error('gambar_thumbel') ?></label>
            <input type="text" class="form-control" name="gambar_thumbel" id="gambar_thumbel" placeholder="Gambar Thumbel" value="<?php echo $gambar_thumbel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Trailer Link <?php echo form_error('trailer_link') ?></label>
            <input type="text" class="form-control" name="trailer_link" id="trailer_link" placeholder="Trailer Link" value="<?php echo $trailer_link; ?>" />
        </div>
	    <div class="form-group">
            <label for="diskripsi">Diskripsi <?php echo form_error('diskripsi') ?></label>
            <textarea class="form-control" rows="3" name="diskripsi" id="diskripsi" placeholder="Diskripsi"><?php echo $diskripsi; ?></textarea>
        </div>
	    <input type="hidden" name="idfilm" value="<?php echo $idfilm; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_film') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>