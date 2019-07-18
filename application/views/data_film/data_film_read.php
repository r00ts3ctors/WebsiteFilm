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
        <h2 style="margin-top:0px">Data_film Read</h2>
        <table class="table">
	    <tr><td>Idunik</td><td><?php echo $idunik; ?></td></tr>
	    <tr><td>Judulfilm</td><td><?php echo $judulfilm; ?></td></tr>
	    <tr><td>Idkatagori</td><td><?php echo $idkatagori; ?></td></tr>
	    <tr><td>Tahunfilm</td><td><?php echo $tahunfilm; ?></td></tr>
	    <tr><td>Gambar Besar</td><td><?php echo $gambar_besar; ?></td></tr>
	    <tr><td>Gambar Thumbel</td><td><?php echo $gambar_thumbel; ?></td></tr>
	    <tr><td>Trailer Link</td><td><?php echo $trailer_link; ?></td></tr>
	    <tr><td>Diskripsi</td><td><?php echo $diskripsi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_film') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>