<?php
require 'cw-2.php';
$test->describe(NULL, function () {
  global $test;
  $test->it(NULL, function () {
    global $test;
    $test->expect(true);
    $test->expect(false);
    $test->expect(true);
    $test->expect(false);
    $test->expect(true);
    $test->expect(false);
    $test->expect(true);
    $test->expect(false);
    $test->expect(true);
    $test->expect(false);
  });
});
?>
