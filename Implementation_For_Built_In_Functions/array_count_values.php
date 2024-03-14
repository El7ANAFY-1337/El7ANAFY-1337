<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments</title>

</head>

<body style="background: gray;">
  <?php
  function arrayCountValues(array $arr) {
    $new_arr = [];
    $repeat = 0;
    foreach ($arr as $number) :
      if ((@$new_arr[$number]) == false) :
        foreach ($arr as $number2) :
          $repeat += ($number == $number2);
        endforeach;
      else :
        continue;
      endif;
      $new_arr[$number] = $repeat;
      $repeat = 0;
    endforeach;
    return $new_arr;
    }

  $array = [1,9,5,1,5,5,7,7,9,9];

  echo "<pre>";
  print_r (arrayCountValues ($array));
  echo "<br>";
  echo "<br>";
  print_r (array_count_values ($array));
  echo "</pre>";
  ?>
</body>

</html>
