<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <?php
    $lorem = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique laboriosam accusantium sint voluptate sed, totam, animi sit praesentium temporibus alias dolore impedit aliquid velit autem reiciendis nihil, ea repellat aut?";
    $lorem_length = strlen($lorem);
  ?>
  <h2>Paragrafo da visualizzare:</h2>
  <p>
    <?php echo $lorem; ?>
  </p>
  <h3> 
    Numero di lettere del paragrafo: 
    <?php echo $lorem_length; ?>
  </h3>

  <?php
    $badword = $_GET['badword'];
    $censored = str_replace($badword, "***", $lorem);
    // ad esewmpio http://localhost/php-badwords/?badword=sit
    $cens_length = strlen($censored);
  ?>

  <h2>Paragrafo censurato:</h2>
  <p>
    <?php echo $censored; ?>
  </p>
  <h3> 
    Numero di lettere del paragrafo: 
    <?php echo $cens_length; ?>
  </h3>
</body>
</html>