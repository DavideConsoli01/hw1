<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "root", "", "utenti") or die(mysqli_connect_error());
$username = $_SESSION['username'];

$file = "./Final_fantasy_completo.json";
$end_point =file_get_contents($file);
$json=json_decode($end_point,true);


$nuovoJson = array();

for ($i = 0; $i < count($json["personaggi"]); $i++) {
  $pref = false;
  $nome = $json['personaggi'][$i]['nome'];

  // Correggi la variabile $titolo in $nome nella query SQL
  $query = "SELECT * FROM preferiti WHERE binary userID = '" . $username . "' AND titolo ='" . $nome . "' ";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $pref = true;
  } else {
    $pref = false;
  }

  $nuovoJson[] = array(
    "nome" => $nome,
    "gioco" => $json['personaggi'][$i]["gioco"],
    "classe" => $json['personaggi'][$i]["classe"],
    "arma" => $json['personaggi'][$i]["arma"],
    "abilità" => $json['personaggi'][$i]["abilità"],
    "descrizione" => $json['personaggi'][$i]["descrizione"],
    "immagine" => $json['personaggi'][$i]["immagine"],
    "preferiti" => $pref
  );
}



echo json_encode($nuovoJson);
?>
