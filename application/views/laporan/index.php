<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
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
