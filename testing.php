<?php
require 'cw-2.php';
$test->describe("The CW-specific PHP testing framework", function () {
  global $test;
  $test->it("should work properly and display the correct output for assert_equals and assert_not_equals", function () {
    global $test;

    /* assert_equals - passing tests */
    $test->assert_equals(1, 1);
    $test->assert_equals("bacon", "bacon");
    $test->assert_equals(false, false);
    $test->assert_equals("Hello World", "Hello World");
    $test->assert_equals(0, 0);

    /* assert_equals - failing tests */
    $test->assert_equals(1, 0);
    $test->assert_equals("bacon", "Hello World");
    $test->assert_equals(false, true);
    $test->assert_equals("Hello World", "bacon");
    $test->assert_equals(0, 1);

    /* assert_not_equals - passing tests */
    $test->assert_not_equals(1, 0);
    $test->assert_not_equals("bacon", "Hello World");
    $test->assert_not_equals(false, true);
    $test->assert_not_equals("Hello World", "bacon");
    $test->assert_not_equals(0, 1);

    /* assert_not_equals - failing tests */
    $test->assert_not_equals(1, 1);
    $test->assert_not_equals("bacon", "bacon");
    $test->assert_not_equals(false, false);
    $test->assert_not_equals("Hello World", "Hello World");
    $test->assert_not_equals(0, 0);
  });
});
?>
