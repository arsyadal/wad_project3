<?php
$conn = mysqli_connect("localhost:3308", "root", "", "wad_project3");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
while ($data = mysqli_fetch_object($result)) {
    var_dump($data);
}

?>
