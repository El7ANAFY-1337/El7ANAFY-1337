<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments</title>

</head>

<body style="background: gray;">
  <?php
  function arrayReverse(array $array, bool $pre_key = False) {
  //First Stage
    $items = [];
    $keys = [];
    $IsString = 0;
    $i = 0;

    foreach ($array as $key => $item) :
      $items[] = $item;
      $keys[] = $key;
      $IsString += (is_string($key));
      $IsString = ((bool)$IsString);
    endforeach;
###########################################
  //Second Stage
    $count_ = function ($arr) {return count($arr);};
    $backup = $keys;

    foreach ($items as $value) :
      if ($i == (int)($count_($items)/2)) break;
      $swap = $items[$i];
      $items[$i] = $items[$count_($items)-1-$i];
      $items[$count_($items)-1-$i] = $swap;
      $i++;
    endforeach;
    $i = 0;
    foreach ($keys as $value) :
      if ($i == (int)($count_($keys)/2)) break;
      $swap = $keys[$i];
      $keys[$i] = $keys[$count_($keys)-1-$i];
      $keys[$count_($keys)-1-$i] = $swap;
      $i++;
    endforeach;
###########################################
  //Final Stage
    if ($pre_key == true) :
      return array_combine($keys, $items);
    elseif (!$IsString) :
      return $items;
    else :
      $new_arr = [];
      $index = 0;
      foreach ($items as $ind => $value) :
        $new_arr[(is_string($keys[$ind])) ? $keys[$ind] : $index++] = $value;
      endforeach;
      return $new_arr;
    endif;
  // return $keys;
  }

  $test_arr = ["EG"=>'Khaled', "PS"=>"Mohsen", "Obama", ["PS1" => "Abo 3obeda", "PS" => "7AMAS"], "TEST"];
  // $test_arr = ["EG"=>'Khaled', "PS"=>"Mohsen", "5"=>"Obama", "Anon"=>["PS1" => "Abo 3obeda", "PS" => "7AMAS"], "T"=>"TEST"];

  echo "<pre>";
  print_r (arrayReverse($test_arr));
  print_r (array_reverse($test_arr));
  echo "</pre>";

  ?>
</body>

</html>