<div class="container">
	
	<div class="row">
		<div class="col-md-6">
		<h1>Daftar User</h1>
		<ul class="list-group">
			<?php foreach ($user as $use) : ?>
	  		<li class="list-group-item"><?= $use['nama'] ?></li>
			<?php endforeach; ?>
		</ul>
		</div>
	</div>
</div>