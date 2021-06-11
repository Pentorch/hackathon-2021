<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
	<h1 class="pt-2">Daftar pasien Covid 19</h1>	
	<table class="table-bordered table-hover mb-0 text-nowrap css-serial mt-2">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>UMUR</th>
				<th>GEJALA</th>
				<th>PENAGANAN</th>
				<th>ALAMAT</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<?php 
		$no = 1;
		foreach ($user as $usr) { ?>
			<tr>
				<td><?= $no ;?></td>
				<td><?= $usr['nama'] ;?></td>
				<td><?= $usr['nama'] ;?></td>
				<td><?= $usr['nama'] ;?></td>
				<td><?= $usr['nama'] ;?></td>
				<td><?= $usr['nama'] ;?></td>
				<td><a href="" class="btn btn-success"><i class="fas fa-eye"></i></a><?= $usr['id'] ;?></td>
				<td><a href="" class="btn btn-primary"><i class="fa fa-pencil"></i></a><?= $usr['id'] ;?></td>
				<td><a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a><?= $usr['id'] ;?></td>
			</tr>
		<?php $no++; } ?>

	</table>
</div>
	</div>
</div>
