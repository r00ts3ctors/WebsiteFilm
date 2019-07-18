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
            <footer class="sticky-footer">
               <div class="container">
                  <div class="row no-gutters">
                     <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>.
                           <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="t/">Templates Point</a>
                           </small>
                        </p>
                     </div>
                     <div class="col-lg-6 col-sm-6 text-right">
                        <div class="app">
                           <a href="#"><img alt="" src="<?php echo base_url('assets/') ?>img/google.png"></a>
                           <a href="#"><img alt="" src="<?php echo base_url('assets/') ?>img/apple.png"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
         <!-- /.content-wrapper -->
      </div>

      <!-- Bootstrap core JavaScript-->
    <?php
	
		$this->load->view('template/footer'); ?>
