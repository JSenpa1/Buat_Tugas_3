<?php
    include("company.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Week 2 - Solution 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
</head>
<body>
    <div class="container my-3">
        <h4>Web Programming - Week 2 | Solution No. 2</h4>
        <hr />  
    </div>

    <div class="container my-5">
        <h1>Daftar Lowongan Pekerjaan</h1>
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Position</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include("company.php");
                foreach($company as $index => $val)
                {
                    echo "<tr>";
                    echo "<td>$val[namaPerusahaan]</td>";
                    echo "<td>$val[kota]</td>";
                    echo "<td>$val[posisi]</td>";
                    echo "<td>$val[gaji]</td>";
                    echo "</tr>";
                }
            ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>