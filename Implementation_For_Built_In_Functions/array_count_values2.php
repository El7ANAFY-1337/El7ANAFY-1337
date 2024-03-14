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

    $new_array = [];
    $auth_array = null;
    $auth2 = 0;
    $auth3 = 1;

    foreach ($arr as $key => $value1) {
      if ($auth3 == 1) {
        $auth_array[] = $value1;
      }
    
      
      foreach ($auth_array as $value2) {
        $auth2 += ($arr[$key+(($key + 1 == count($arr)) ? 0 : 1)] === $value2);
      }
      if ($auth2 === 1) {
        $auth3 = 0;
      }
      
    }

    $i =0;

    foreach ($auth_array as $number) {
      foreach ($arr as $number2) {
        if ($number2 == $number) {
          $i++;
          $new_array[$number2] = $i;
        }
      }
    $i = 0;
    }
  return $new_array;
  }

  $array = [1,9,5,5,5,1,9,9,9,9,9,9];

  echo "<pre>";
  print_r (arrayCountValues ($array));
  echo "</pre>";
  ?>
</body>

</html>