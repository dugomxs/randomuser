<?php
$url = "https://randomuser.me/api/";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = json_decode(curl_exec($ch));

foreach ($result->results as $person) {
  
  echo "<br><br>";

  $name = $person->name->first;
  $lastName = $person->name->last;
  $country = $person->location->country;
  $picture = $person->picture->large;
  $cell = $person->cell;
  

  echo "<img src='$picture' alt='Imagem'> <br>";
  echo "<p class='name'>" . "Nome: " . $name ." ".  $lastName . "</p>";
  echo "<p class='cell'>" . "Celular: " . $cell . "</p>";
  echo "<p class='country'>" . "País: " . $country . "</p>";

}
?>

