<?php
header('Access-Control-Allow-Origin: *');
$url = "http://localhost:8000/api/storage";
$response = file_get_contents($url);
$data =  json_decode($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
</head>
<body>
    <div>
    <table id="example" class="mdl-data-table" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Costumer</th>
                <th>Lokasi Gudang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->data as $result) { ?>
            <tr>
                <th><?= $result->id ?></th>
                <td><?= $result->name_costumer ?></td>
                <td><?= $result->location_storage ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script>
</script>
</html>