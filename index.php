<?php
require_once(__DIR__ . '/functions.php');

// Richiamo del generatore di password
if (isset($_GET['pw-length']) && !empty($_GET['pw-length'])) {
  $length = $_GET['pw-length'];
  $pw = strongRandomPwGenerator($length);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password generator</title>
  <!-- Link -->
  <!-- bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center p-1">Password generator</h1>
  <div class="container">
    <!-- Form to insert password characteristics -->
    <form action="">
      <div class="col-3">
        <label for="pw-input">Insert your password length</label>
        <input type="number" name="pw-length" min="0" class="form-control">
      </div>
    </form>
    <main>
      <!-- Risultato del generatore di password -->
       <?php if (isset($pw) && !empty($pw)) { ?>
        <p class="mt-3">La password generata è: <span class="fst-italic fst-ud text-break"><?= $pw; ?></span>.</p>
       <?php }; ?>
       
    </main>

  </div>
</body>
</html>

<!-- final commit -->
