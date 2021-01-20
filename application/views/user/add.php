<div class="container">
	
	<div class="row mt-3">
		<div class="coll-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Add Data User
			  </div>
			  <div class="card-body">
				 <form action="" method="post">
					<form>
	 				 <div class="form-group">
	    				<label for="name">Name</label>
	   					 <input type="text" name="nama" class="form-control" id="nama" placeholder="name">
	   					 <small class="form-text text-danger"><?= form_error('nama'); ?></small>
	  				</div>
	  				<div class="form-group">
	    				<label for="username">Username</label>
	   					 <input type="varchar" name="username" class="form-control" id="username" placeholder="username">
	   					 <small class="form-text text-danger"><?= form_error('username'); ?></small>
	  				</div>
	  				<div class="form-group">
	    				<label for="password">Password</label>
	   					 <input type="varchar" name="password" class="form-control" id="password" placeholder="Password">
	   					 <small class="form-text text-danger"><?= form_error('password'); ?></small>
	  				</div>
	  				 <div class="form-group">
					    <label for="level">Level Akses</label>
					    <select class="form-control" name="level" id="level">
					      <option select="Super Admin">Super Admin</option>
					      <option select="Admin">Admin</option>
					      <option select="User">User</option>
					    </select>
					 </div>
					 <div class="form-group">
	    				<label for="no_hp">Phone Number</label>
	   					 <input type="int" name="no_hp" class="form-control" id="no_hp" placeholder="Phone Number">
	   					 <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
	  				</div>
					<div class="form-group">
					    <label for="email">Email Address</label>
					    <input type="text" name="email" class="form-control" id="email" placeholder="sambel@kroket.com">
					    <small class="form-text text-danger"><?= form_error('email'); ?></small>
					</div>
					<div class="form-group">
					    <label for="alamat">Address</label>
					    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Jl. Cabai Rawit">
					    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
					</div>
					<div class="form-group">
					    <label for="tgl_lahir">Birthday</label>
					    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
					</div>
					<div class="form-group">
					    <label for="jk">Jenis Kelamin</label>
					    <select class="form-control" name="jk" id="jk">
					      <option select="Perempuan">Perempuan</option>
					      <option select="Laki-laki">Laki-laki</option>
					    </select>
					 </div>
					 <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
				</form>  
			  </div>
			</div>
		


		</div>
	</div>

</div>