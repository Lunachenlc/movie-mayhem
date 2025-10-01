<?php

$dsn = 'sqlite:movie_mayhem.sqlite';

try {
  $db = new PDO($dsn);

} catch (PDOException $e) {
  echo $e->getMessage();
  exit();

}


$sql = "SELECT * FROM genres";
$result = $db->query($sql);
$genres = $result->fetchAll(PDO::FETCH_COLUMN,1);


$genres = [
  'Fantasy',
  'Sci-Fi',
  'Action',
  'Comedy',
  'Drama',
  'Horror',
  'Romance',
  'Family',
];
