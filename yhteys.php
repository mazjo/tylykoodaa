<?php


$yhteys = mysqli_connect('mysql2.shellit.org', 'u60224', 'atsjm2020', 'u60224B1');

mysqli_set_charset($yhteys, "utf8");


if ($yhteys->connect_error) {

die("Yhteyden muodostaminen epäonnistui, koska : " . $conn->connect_error);

}


?>