<?php
session_start();
$pw = $_SESSION['generator_password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your password</title>
</head>
<body>
<main>
  <!-- Risultato del generatore di password -->
    <?php if (isset($pw) && !empty($pw)) { ?>
    <p class="mt-3">La password generata è: <span class="fst-italic fst-ud text-break"><?= $pw; ?></span>.</p>
    <?php }; ?>
    
</main>

</body>
</html>