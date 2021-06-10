<?php foreach ($indonesia as $value) { ?>
	<h3 class="text-center pt-2">DATA BERDADASARKAN GLOBAL</h3>
	<div class="container">
		<div class="row pt-4">
			<div class="col-sm-4">
<div class="card text-white bg-warning mb-3">
  <div class="card-body">
    <h5 class="card-title">POSITIF</h5>
    <h5 class="card-text"><?= $value['positif'] ;?></h5>
	</div>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="card text-white bg-success mb-3">
	<div class="card-body">
    <h5 class="card-title">SEMBUH</h5>
    <h5 class="card-text"><?= $value['sembuh'] ;?></h5>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card text-white bg-danger mb-3">
  <div class="card-body">
    <h5 class="card-title">MENINGGAL</h5>
    <h5 class="card-text"><?= $value['meninggal'] ;?></h5>
</div>
</div>
</div>
<?php }?>
