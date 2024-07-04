<?php

// function task_one(string $input = "aaabbcccddeddbzaa")
// {
//   // convert to array

//   // $container = [];

//   // print_r($input);
// }

function task_two(array $par =  [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3])
{
  $container = [];
  $temp = 0;
  $selected = [
    'index' => 0,
    'value' => 0
  ];

  foreach ($par as $n => $v) {
    if ($n == 0) {
      $temp = $v;
      $container[$n] = $v;
      return;
    }

    if ($n > 0) {
      foreach ($container as $y => $x) {
        if ($v > $x) {
          $selected['index'] = $y;
          $selected['value'] = $v;
        }

        $explited = array_slice($container, $selected['index'] - 1);

        $container[$selected['index']] = $selected['value'];

        $container = array_merge($container, $explited[1]);
      }
    }
  }

  var_export($container);
}

// task_one();
task_two();
