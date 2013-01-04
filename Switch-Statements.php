<?php

  $iterations = 10000;
  $options = array('apple', 'banana', 'carrot' ,'date', 'endive');
  $color = NULL;

  // Fill an array with random keys. This ensures
  // that (a) we use the same keys, and (b)
  // slowness in the randomizer doesn't impact the
  // loops (which can happen if entropy collection kicks in)
  $samples = array();
  for ($i = 0; $i < $iterations; ++$i) {
    $samples[] = $options[rand(0, 4)];
  }

  // Test a switch statement.
  $start_switch = microtime(TRUE);

  for ($i = 0; $i < $iterations; ++$i) {
    $option = $samples[$i];
    switch ($option) {
      case 'apple':
        $color = 'red';
        break;
      case 'banana':
        $color = 'yellow';
        break;
      case 'carrot':
        $color = 'orange';
        break;
      case 'date':
        $color = 'brown';
        break;
      case 'endive':
        $color = 'green';
        break;
    }
  }
  $end_switch = microtime(TRUE);

  $total_switch = $end_switch - $start_switch;
  printf("Switch:\t%0.6f sec to process %d" . PHP_EOL, $total_switch, $iterations);

  // Test an array lookup.
  $start_map = microtime(TRUE);
  $map = array(
    'apple' => 'red', 
    'banana' => 'yellow', 
    'carrot' => 'orange',
    'date' => 'brown', 
    'endive' => 'green'
  );
  for ($i = 0; $i < $iterations; ++$i) {
    $option = $samples[$i];
    $color = $map[$option];
  }
  $end_map = microtime(TRUE);

  $total_map = $end_map - $start_map;
  printf("Map:\t%0.6f sec to process %d" . PHP_EOL, $total_map, $iterations);
  ?>
