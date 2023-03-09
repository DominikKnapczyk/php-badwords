<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $paragraph = $_POST['paragraph'];
  $censored = $_POST['censored'];
  
  // sostituisce tutte le occorrenze della parola da censurare con tre asterischi
  $censored_paragraph = str_replace($censored, '***', $paragraph);
  
  // stampa il paragrafo censurato e la sua lunghezza
  echo '<p>' . $censored_paragraph . '</p>';
  echo '<p>Lunghezza del paragrafo: ' . strlen($censored_paragraph) . '</p>';
}
?>