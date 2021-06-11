<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="card">
	<div class="card-header">
		Form Tambah Laporan Covid 19
	</div>
	<div class="card-body">
	<form method="POST">
	<div class="form-group">
    <label for="exampleInputNama">NAMA</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="NAMA LENGKAP">
	</div>
	<div class="form-group">
    <label for="exampleInputUmur">UMUR</label>
    <input type="text" name="umur" class="form-control" id="umur" placeholder="UMUR">
	</div>
	<div class="form-group">
    <label for="exampleInputGejala">GEJALA</label>
    <input type="text" name="gejala" class="form-control" id="gejala" placeholder="GEJALA">
	</div>
	<div class="form-group">
    <label for="exampleInputPenanganan">PENANGANAN</label>
    <input type="text" name="penanganan" class="form-control" id="penanganan" placeholder="PENANGANAN">
	</div>
	<div class="form-group">
    <label for="exampleInputNama">ALAMAT</label>
    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="ALAMAT LENGKAP">
	</div>
	<button type="submit" class="btn btn-primary">SIMPAN</button>
	<a href="<?= base_url() ;?>laporan" class="btn btn-secondary">KEMBALI</a>
</form>
	</div>
	</div>
	</div>
</div>
