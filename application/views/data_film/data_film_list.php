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
        <h2 style="margin-top:0px">Data_film List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('data_film/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('data_film/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('data_film'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Idunik</th>
		<th>Judulfilm</th>
		<th>Idkatagori</th>
		<th>Tahunfilm</th>
		<th>Gambar Besar</th>
		<th>Gambar Thumbel</th>
		<th>Trailer Link</th>
		<th>Diskripsi</th>
		<th>Action</th>
            </tr><?php
            foreach ($data_film_data as $data_film)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $data_film->idunik ?></td>
			<td><?php echo $data_film->judulfilm ?></td>
			<td><?php echo $data_film->idkatagori ?></td>
			<td><?php echo $data_film->tahunfilm ?></td>
			<td><?php echo $data_film->gambar_besar ?></td>
			<td><?php echo $data_film->gambar_thumbel ?></td>
			<td><?php echo $data_film->trailer_link ?></td>
			<td><?php echo $data_film->diskripsi ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('data_film/read/'.$data_film->idfilm),'Read'); 
				echo ' | '; 
				echo anchor(site_url('data_film/update/'.$data_film->idfilm),'Update'); 
				echo ' | '; 
				echo anchor(site_url('data_film/delete/'.$data_film->idfilm),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>