<div class="container">
	<div class="row mt-3">
		<div class="coll-md-6">
			
			<div class="card">
			  <div class="card-header">
			    Detail Data Info
			  </div>
			  <div class="card-body">
			  	<table>
			  	<tr>
			  	<th>Name</th>
			    <td><?= $info->judul ?></td>			  	
			  	</tr>
			  	<tr>
			    <th>Username</th>
			    <td><?= $info->isi ?></td>
			    </tr>
			    <tr>
			 	<th>Gambar</th>
			    <td><?= $info->gambar ?></td>
			    </tr>
			    </table>
			    <a href="<?= base_url(); ?>backend/info" class="btn btn-primary">Back</a>
			  </div>
			</div>

		</div>
	</div>
</div>