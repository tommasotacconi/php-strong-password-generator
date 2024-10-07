<?php 
// FILE CON FUNZIONI
// Funzione generatrice di password casuali con caratteri di lunghezza desiderata (data come argomento). Caratteri usati sono
// nella stringa 'aBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789@$#*&{},[]-=.();+\'/'
function strongRandomPwGenerator($pw_length) {
  $characters_str = 'aBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789@$#*&{},[]-=.();+\'/';
  $pw = '';
  for ($i = 0; $i < $pw_length; $i++) {
    $random_characters_pos = random_int(0, strlen($characters_str) - 1);
    $pw .= $characters_str[$random_characters_pos];
  }
  return $pw;
}

?>
