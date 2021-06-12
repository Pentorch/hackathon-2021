
<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pasien Covid 19
			<strong>Berhasil! </strong><?= $this->session->flashdata('flash');?>.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<?php endif ;?>
		<a href="<?= base_url() ;?>laporan/tambah" class="btn btn-primary mb-3">Click Laporan</a>
		<h3 class="text-center">Daftar Pasien Covid 19</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
				<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>UMUR</th>
				<th>GEJALA</th>
				<th>PENAGANAN</th>
				<th>ALAMAT</th>
				<th class="text-center">AKSI</th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		foreach ($user as $usr) { ?>
			<tr>
				<td><?= $no ;?></td>
				<td><?= $usr['nama'] ;?></td>
				<td><?= $usr['umur'] ;?></td>
				<td><?= $usr['gejala'] ;?></td>
				<td><?= $usr['penanganan'] ;?></td>
				<td><?= $usr['alamat'] ;?></td>
				<td>
					<a href="<?= $usr['id'] ;?>" class="btn btn-success mr-1"><i class="fas fa-eye"></i></a>
					<a href="<?= $usr['id'] ;?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
					<a href="<?= $usr['id'] ;?>" class="btn btn-danger ml-1"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++; } ?>

	</table>
</div>
	</div>
</div>
