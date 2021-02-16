<div class="container">
	
	<div class="row mt-3">
		<div class="coll-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Add Data Cupang
			  </div>
			  <div class="card-body">
				 <form action="" method="post">
					<form>
	 				 <div class="form-group">
	    				<label for="model">Model</label>
	   					 <input type="varchar" name="model" class="form-control" id="model" placeholder="model">
	   					 <small class="form-text text-danger"><?= form_error('model'); ?></small>
	  				</div>
					 <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
				</form>  
			  </div>
			</div>
		


		</div>
	</div>

</div>