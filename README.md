<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments</title>

</head>

<body style="background: gray;">
  <?php
  function arrayChunk(array $array, int $len, bool $pre_key = false) {
    $i = 0;
    $i_d = 0;
    $new_arr = [];
    foreach ($array as $key => $value) {
      $new_arr[$i][($pre_key == 0) ? $i_d : $key] = $value;
    
      if (is_int(($i_d + 1) / $len)) {
        $i++;
        $i_d = 0;
      } else {
        $i_d++;
      }
    
    }
    return $new_arr;
  }

  $arr = ["ME" => "Mohammed", "YOU" => "Sami", "WE" => "Fridrek", "THEY" => "Distophasky", "Sadeke Al-Ensan", "Ahmed abo 5ra"];
  $arr1 = ["Mohammed", "Sami", "Fridrek", "Distophasky", "Sadeke Al-Ensan"];
  echo "<pre>";
  print_r (arrayChunk($arr, 3, true));
  echo "<br>";
  print_r (array_chunk($arr, 3, True));
  echo "<br>";
  print_r (arrayChunk($arr1, 3));
  echo "<br>";
  print_r (array_chunk($arr1, 3));
  echo "</pre>";
  // echo is_int(0);
  ?>
</body>

</html>
