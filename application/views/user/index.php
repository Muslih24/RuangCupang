<div class="container">
<?php if($this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data User<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
		<a href="<?= base_url(); ?>user/add" class = "btn btn-primary">Tambah Data User</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search Data User" name="keyword">
				  <div class="input-group-append">
    				<button class="btn btn-primary" type="submit" >Search</button>
				  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
		<h1>List User</h1>
		<?php if (empty($user) ) : ?>
			<div class="alert alert-light" role="alert">
  				 User Data is Not Found!!
			</div>
		<?php endif ?>
		<table class="table">
			<thead>
	  		<tr>
	  			<th>#</th>
	  			<th>Name</th>
	  			<th>Username</th>
	  			<th>Action</th>
	  		</tr>
			</thead>
			<tbody>
			<?php foreach ($user as $use) : ?>
	  		<tr>
	  			<th><?= ++$start; ?></th>
	  			<td><?= $use['nama']; ?></td>
	  			<td><?= $use['username']; ?></td>
	  			<td>
	  			<a href="<?= base_url(); ?>user/detail/<?= $use['id'] ?>" class="badge badge-primary">Detail</a>
	  			<a href="<?= base_url(); ?>user/edit/<?= $use['id'] ?>" class="badge badge-success">Edit</a>
	  			<a href="<?= base_url(); ?>user/del/<?= $use['id'] ?>" class="badge badge-danger" onclick="return confirm('sure??');">Delete</a>
	  			</td>
	  		</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>