<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Belajar PHP</title>
</head>
<body>
<form class="w-50 m-auto" method = "get"name = "form">
  <div class="mb-3 w-100" >
    <label for="exampleInputEmail1" class="form-label text-center" >INPUT</label>
    <input type="text" class="form-control" id="nama" value = "1" name = "nama" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" id="kirim">Kirim</button>
  <!-- <?php include_once ("ShowResult.php") ;?> --> 
</form>
<?php echo $GET['nama'] ;?>
<?php echo "HALO" ;?>
</body>
</html>