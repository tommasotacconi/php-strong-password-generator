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
    <!-- Link -->
  <!-- bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="p-3">
  <!-- Risultato del generatore di password -->
    <?php if (isset($pw) && !empty($pw)) { ?>
    <p class="mt-3">La password generata è: <span class="fst-italic fst-ud text-break"><?= $pw; ?></span>.</p>
    <?php }; ?>
    
</main>

</body>
</html>