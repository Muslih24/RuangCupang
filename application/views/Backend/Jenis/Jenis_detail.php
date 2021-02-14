<div class="container">
	<div class="row mt-3">
		<div class="coll-md-6">
			
			<div class="card">
			  <div class="card-header">
			    Detail Data User
			  </div>
			  <div class="card-body">
			  	<table><tr>
			  	<th>Name</th>
			    <td><?= $user['nama'];  ?></td>			  	
			  	</tr>
			  	<tr>
			    <th>Username</th>
			    <td><?= $user['username'] ?></td>
			    </tr>
			 	<th>Level</th>
			    <td><?= $user['level'] ?></td>
			    </tr>
			    <th>Phone Number</th>
			    <td><?= $user['no_hp'] ?></td>
			    </tr>
			    <th>Email</th>
			    <td><?= $user['email'] ?></td>
			    </tr>
			    <th>Address</th>
			    <td><?= $user['alamat'] ?></td>
			    </tr>
			    <th>Birthday</th>
			    <td><?= $user['tgl_lahir'] ?></td>
			    </tr>
			    <th>Sex Gender</th>
			    <td><?= $user['jk'] ?></td>
			    </tr>
			    </table>
			    <a href="<?= base_url(); ?>user" class="btn btn-primary">Back</a>
			  </div>
			</div>

		</div>
	</div>
</div>