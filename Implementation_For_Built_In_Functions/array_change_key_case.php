<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments</title>

</head>

<body style="background: gray;">
  <?php
  function arrayChangeKeyCase($arr, $case = CASE_LOWER) {
    $array = [];

    foreach ($arr as $key => $value) {
      $array[($case === CASE_UPPER) ? strtoupper($key) : strtolower($key)] = $value;
    }
return $array;
  }

  echo "<pre>";
  print_r (arrayChangeKeyCase(["EG" => "Egypt", "SA" => "Saudi Araiba", "USA" => "United State Of America"]));
  echo "<br>";
  print_r (arrayChangeKeyCase(["eg" => "Egypt", "sa" => "Saudi Araiba", "usa" => "United State Of America"], CASE_UPPER));
  echo "</pre>";


  ?>
</body>

</html>