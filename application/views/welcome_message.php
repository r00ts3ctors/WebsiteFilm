<?php $this->load->view('template/header'); ?>

   <body id="page-top">
    <?php $this->load->view('template/menuatas'); ?>
      <div id="wrapper">
         <!-- Sidebar -->
        <?php $this->load->view('template/menu'); ?>
				 <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <?php $this->load->view($konten); ?>

            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
          
         </div>
         <!-- /.content-wrapper -->
      </div>

    <?php
		$this->load->view('template/footer'); ?>
