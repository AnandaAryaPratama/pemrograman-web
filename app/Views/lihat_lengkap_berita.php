<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $berita['judulberita']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>My First Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="<?= base_url()?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('home/bacaberita')?>">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('home/bacahalaman')?>">Halaman</a>
        </li>
      </ul>
    </div>  
  </nav>

  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col">
          <h2><?= $berita['judulberita']; ?></h2>
          <h5><?= $berita['author']; ?>, <?= $berita['tglposting']; ?></h5>
          <img src="<?= base_url('images/'.$berita['foto'])?>" class="rounded"> 
          <p>Some text..</p>
          <p> <?= $berita['isiberita']; ?>
          </p>
          <br>
      </div>
    </div>
  </div>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
  </div>

</body>
</html>