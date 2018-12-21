<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="action.php">
  <div class="form-group">
    <label for="exampleInputName">Nama Kostumer</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name Costumer" name="name_costumer">
  </div>
  <div class="form-group">
    <label for="exampleInputGudang">Lokasi Gudang</label>
    <input type="text" class="form-control" id="location" placeholder="Location Storage" name="location_storage">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>