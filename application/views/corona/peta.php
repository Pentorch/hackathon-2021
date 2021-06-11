<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
				<div id="mapid" style="width: 870px; height: 500px;"></div>
				</div>
			</div>
		</div>
<script>

	var mymap = L.map('mapid').setView([2, 115.0], 5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
	}).addTo(mymap);

	<?php foreach ($lokasi['features'] as $key => $peta) {?>
	L.marker([<?= $peta['geometry']['y'];?>,<?= $peta['geometry']['x'];?>]).addTo(mymap)
		.bindPopup("<b>Provinsi : <?= $peta['attributes']['Provinsi'];?></b><br />" +
		"<b><b>Positif : <?= $peta['attributes']['Kasus_Posi'];?></b><br /></b>" +
		"<b>Sembuh : <?= $peta['attributes']['Kasus_Semb'];?></b><br />" +
		"<b>Meninggal : <?= $peta['attributes']['Kasus_Meni'];?></b><br />").openPopup();

<?php } ?>
</script>
