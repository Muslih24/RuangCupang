<div class="container">
	
	<div class="row mt-3">
		<div class="coll-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Edit Data Cupang
			  </div>
			  <div class="card-body">
				 <form action="" method="post">
					<form>
	 				 <div class="form-group">
	    				<label for="model">Model</label>
	   					 <input type="varchar" name="model" class="form-control" id="model" placeholder="model" value="<?= $cupang['model']; ?>">
	   					 <small class="form-text text-danger"><?= form_error('model'); ?></small>
	  				</div>
					 <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
					 <a href="<?= base_url(); ?>cupang" class="btn btn-danger">Cancel</a>
				</form>  
			  </div>
			</div>
		


		</div>
	</div>

</div>