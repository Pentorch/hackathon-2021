<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
	
	<div class="card">
	<div class="card-header">
		Detail Data Pasien
	</div>
	<div class="card-body">
		<h5 class="card-title"><?= $user['nama']  ;?></h5>
		<p class="card-text"><?= $user['umur'] ;?></p>
		<p class="card-text"><?= $user['gejala'] ;?></p>
		<p class="card-text"><?= $user['penanganan'] ;?></p>
		<p class="card-text"><?= $user['alamat'] ;?></p>
		<a href="<?= base_url() ;?>/laporan" class="btn btn-primary">Kembali</a>
	</div>
	</div>
	
	</div>
	</div>
</div>
<br>
