<div class="col-md-12">
	<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="card">
	<div class="card-header">
		Form Update Laporan Covid 19
	</div>
	<div class="card-body">
	<form method="POST">
	<div class="form-group">
    <label for="exampleInputNama">NAMA</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="NAMA LENGKAP">
	<small class="form-text text-danger"><?=  form_error('nama');?></small>
	</div>
	<div class="form-group">
    <label for="exampleInputUmur">UMUR</label>
    <input type="text" name="umur" class="form-control" id="umur" placeholder="UMUR">
	<small class="form-text text-danger"><?=  form_error('umur');?></small>
	</div>
	<div class="form-group">
    <label for="exampleInputGejala">GEJALA</label>
    <input type="text" name="gejala" class="form-control" id="gejala" placeholder="GEJALA">
	<small class="form-text text-danger"><?=  form_error('gejala');?></small>
	</div>
	<div class="form-group">
    <label for="exampleInputPenanganan">PENANGANAN</label>
    <input type="text" name="penanganan" class="form-control" id="penanganan" placeholder="PENANGANAN">
	<small class="form-text text-danger"><?=  form_error('penanganan');?></small>
	</div>
	<div class="form-group">
    <label for="exampleInputNama">ALAMAT</label>
    <textarea type="text" name="alamat" class="form-control" id="alamat" rows="3" placeholder="ALAMAT LENGKAP"></textarea>
	<small class="form-text text-danger"><?=  form_error('alamat');?></small>
	</div>
	<button type="submit" class="btn btn-primary">SIMPAN</button>
	<a href="<?= base_url() ;?>laporan" class="btn btn-secondary">KEMBALI</a>
</form>
	</div>
	</div>
	</div>
</div>
