<footer id="main-footer"  class="navbar-inverse" >
	<div class="container">
     <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <h2>Lorem Ipsum</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
       </div>
        <div class="col-md-3">
          <h2>Ipsum Lorem</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
       </div>
        <div class="col-md-3">
            <p class="h2">Related Sites</p>
            <p>Department of human service:<br><a href="http://www.mdhs.state.ms.us/">www.mdhs.state.ms.us</a></p>
            <p>Department of mental health:<br><a href="http://www.dmh.ms.gov/">www.dmh.ms.gov</a></p>
            <p>Department of rehabilitation service:<br><a href="http://www.mdrs.state.ms.us/">www.mdrs.state.ms.us</a></p>
            <p>Division of Medicaid:<br><a href="http://www.medicaid.ms.gov/">www.medicaid.ms.gov</a></p>
        </div>
        <div class="col-md-3">
          <h2>Agency Access</h2>
          <!--<p>To access your agency or provider account, <a href="#" data-toggle="modal" data-target="#login">login here</a>.</p>-->
          <p>To learn more about provider accounts and how you can request one, <a href="<?php echo base_url().'index.php/agencyaccess/aboutprovideraccess'?>">click here</a>.</p>
        </div>
      </div>
		<hr/>
        <div class="navbar-header">
            <p class="text-muted credit">Example courtesy of <a href="http://www.feisystems.com">FEi Systems</a>.</p>
        </div>
    </div>
</footer>


<!-- Modals -->

<!-- Modal - Create Provider Account -->
<?php require 'application/views/pages/shared/_create_provideraccount_modal.php'; ?>
