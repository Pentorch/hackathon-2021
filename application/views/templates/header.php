<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul ;?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ;?>assets/libraries/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url() ;?>assets/styles/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ;?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?= base_url() ;?>provinsi">Data Provinsi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Data Peta Sebaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Laporan Sigap Covid 19</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="col-md-12 pt-4">
	<div class="row">
	<div class="col-md-8 mx-auto">
<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h4 class="display-5">SELAMAT DATANG!,</h4>
    <p class="lead">Situs resmis Data Digital Covid 19 ,
		<br>
			Jangan lupa selalu <b>#ingatpesanibu</b> dan menerapkan <b>3M</b> untuk menekan, mencegah, sekaligus memutus rantai penularan <b>COVID-19</b>.</p>
  </div>
</div>
	</div>
	</div>
</div>
