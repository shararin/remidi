<!DOCTYPE html>
<html lang="en">
<head>
  <title>Proyek Pengembangan Aplikasi Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>PENDAFTARAN PMB</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="no pendaftaran">No Pendaftaran:</label>
      <input type="no pendaftaran" class="form-control" id="no pendaftaran" placeholder="Enter no pendaftaran" name="no pendaftaran">
    </div>
    <div class="form-group">
      <label for="name">Nama:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Enter nama" name="nama">
    </div>
    <div class="form-group">
      <label for="asal sekolah">Asal Sekolah:</label>
      <input type="asal sekolah" class="form-control" id="asal sekolah" placeholder="Enter asal sekolah" name="asal sekolah">
	  </div>
    <div class="radio">
      <label><input type="radio" name="optradio">laki-laki</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">perempuan</label>
    </div>
	<div class="form-group">
    <label for="nama ortu">Nama Ortu:</label>
    <input type="nama ortu" class="form-control" id="nama ortu">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="alamat" class="form-control" id="alamat">
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
