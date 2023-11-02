<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>     
            </tr>
        </thead>
        <tbody>
            <?php
          
            $conn = mysqli_connect("localhost:3308", "root", "", "wad_project3");
            $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
           // $data = mysqli_fetch_object($result);
        
            while ($data = mysqli_fetch_object($result)) {
                echo "<tr>";
                echo "<td>" . $data->id . "</td>";
                echo "<td>" . $data->nama . "</td>";
                echo "<td>" . $data->umur . "</td>";
                echo "<td>" . $data->alamat . "</td>";
                echo "</tr>";
            }

    
            ?>
        </tbody>
    </table>
</body>
</html>
