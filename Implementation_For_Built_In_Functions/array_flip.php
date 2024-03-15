<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments</title>

</head>

<body style="background: gray;">
  <?php
  function arrayFlip(array $array) {
    foreach ($array as $key => $value) {
      $fliped_arr[$value] = $key;
    }

    return $fliped_arr;
  }

  $arr = ["EG"=>"Egypt", "JO"=>"Jordan", "PS"=>"Plastine", "SA"=>"Sudia Arabia"];

  echo "<pre>";
  print_r (arrayFlip($arr));
  print_r (array_flip($arr));
  echo "</pre>";
  ?>
</body>

</html>