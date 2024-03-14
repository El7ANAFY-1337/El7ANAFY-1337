<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments</title>

</head>

<body style="background: gray;">
  <?php
  function arrayCombine(array $arr_keys, array $arr_values) {
    $new_array = [];
    foreach ($arr_keys as $key => $value) :
      $new_array[$value] = $arr_values[$key];
    endforeach;
  
    return $new_array;
  }

  echo "<pre>";
  print_r (arrayCombine(["EG", "SA", "USA"], ["Egypt", "Saudi Araiba", "United State Of America"]));
  echo "</pre>";

  ?>
</body>

</html>