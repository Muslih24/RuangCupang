<div class="container">
<?php if($this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Cupang<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
		<a href="<?= base_url(); ?>cupang/add" class = "btn btn-primary">Tambah Data Cupang</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search Data Cupang" name="keyword">
				  <div class="input-group-append">
    				<button class="btn btn-primary" type="submit" >Search</button>
				  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
		<h1>List Cupang</h1>
		<?php if (empty($cupang) ) : ?>
			<div class="alert alert-light" role="alert">
  				 Cupang Data is Not Found!!
			</div>
		<?php endif ?>
		<table class="table">
			<thead>
	  		<tr>
	  			<th>#</th>
	  			<th>Model</th>
	  		</tr>
			</thead>
			<tbody>
			<?php foreach ($cupang as $cupa) : ?>
	  		<tr>
	  			<th><?= ++$start; ?></th>
	  			<td><?= $cupa['model']; ?></td>
	  			<td>
	  			<a href="<?= base_url(); ?>cupang/detail/<?= $cupa['id_cupang'] ?>" class="badge badge-primary">Detail</a>
	  			<a href="<?= base_url(); ?>cupang/edit/<?= $cupa['id_cupang'] ?>" class="badge badge-success">Edit</a>
	  			<a href="<?= base_url(); ?>cupang/del/<?= $cupa['id_cupang'] ?>" class="badge badge-danger" onclick="return confirm('sure??');">Delete</a>
	  			</td>
	  		</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>
	</div>
</div>