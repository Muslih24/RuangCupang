<div class="container">
	
	<div class="row mt-3">
		<div class="coll-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Edit Data User
			  </div>
			  <div class="card-body">
				 <form action="" method="post">
					<form>
	 				 <div class="form-group">
	    				<label for="name">Name</label>
	   					 <input type="text" name="nama" class="form-control" id="nama" placeholder="name" value="<?= $user['nama']; ?>">
	   					 <small class="form-text text-danger"><?= form_error('nama'); ?></small>
	  				</div>
	  				<div class="form-group">
	    				<label for="username">Username</label>
	   					 <input type="varchar" name="username" class="form-control" id="username" placeholder="username" value="<?= $user['username']; ?>">
	   					 <small class="form-text text-danger"><?= form_error('username'); ?></small>
	  				</div>
	  				<div class="form-group">
	    				<label for="password">Password</label>
	   					 <input type="varchar" name="password" class="form-control" id="password" placeholder="Password" value="<?= $user['password']; ?>">
	   					 <small class="form-text text-danger"><?= form_error('password'); ?></small>
	  				</div>
	  				 <div class="form-group">
					    <label for="level">Level Akses</label>
					    <select class="form-control" name="level" id="level"> 
					    <?php foreach( $level as $lvl) : ?>
					     <?php if( $lvl == $user['level'] ) : ?>
					      	<option value="<?= $lvl; ?>" selected><?= $lvl; ?></option>
					    <?php else : ?>
					    	<option value="<?= $lvl; ?>"><?= $lvl; ?></option>
						<?php endif; ?>
						<?php endforeach; ?>  
					    </select>
					 </div>
					 <div class="form-group">
	    				<label for="no_hp">Phone Number</label>
	   					 <input type="int" name="no_hp" class="form-control" id="no_hp" placeholder="Phone Number" value="<?= $user['no_hp']; ?>">
	   					 <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
	  				</div>
					<div class="form-group">
					    <label for="email">Email Address</label>
					    <input type="text" name="email" class="form-control" id="email" placeholder="sambel@kroket.com" value="<?= $user['email']; ?>">
					    <small class="form-text text-danger"><?= form_error('email'); ?></small>
					</div>
					<div class="form-group">
					    <label for="alamat">Address</label>
					    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Jl. Cabai Rawit" value="<?= $user['alamat']; ?>">
					    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
					</div>
					<div class="form-group">
					    <label for="tgl_lahir">Birthday</label>
					    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
					</div>
					<div class="form-group">
					    <label for="jk">Jenis Kelamin</label>
					    <select class="form-control" name="jk" id="jk">
					      <?php foreach( $jk as $jenis) : ?>
					      <?php if($jenis == $user['jk']) : ?>
					      <option value="<?= $jenis; ?>" selected><?= $jenis; ?></option>
					      <?php else : ?>
					      <option value="<?= $jenis; ?>"><?= $jenis; ?></option>
					  	  <?php endif; ?>
					      <?php endforeach; ?>
					    </select>
					</div>
					 <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
					 <a href="<?= base_url(); ?>user" class="btn btn-danger">Cancel</a>
				</form>  
			  </div>
			</div>
		


		</div>
	</div>

</div>