<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="table-responsive">
			<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
				<thead>
					<tr>
						<th class="atas">NO</th>
						<th class="atas">PROVINSI</th>
						<th class="atas">POSITIF</th>
						<th class="atas">SEMBUH</th>
						<th class="atas">MENINGGAL</th>
					</tr>
				</thead>
<?php 
$no = 1;
foreach ($provinsi as $value) { ?>
	<tbody>
    <tr>
		<td><?= $no ;?></td>
		<td><?= $value['attributes']['Provinsi'] ;?></td>
		<td><?= $value['attributes']['Kasus_Posi'] ;?></td>
		<td><?= $value['attributes']['Kasus_Semb'] ;?></td>
		<td><?= $value['attributes']['Kasus_Meni'];?></td>
    </tr>	
	</tbody>
	<?php $no++; }?>
</table>
</div>
</div>
</div>
</div>
