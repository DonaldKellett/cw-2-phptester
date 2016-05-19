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
  $test->it("should work properly and display the correct output for assert_similar and assert_not_similar", function () {
    global $test;

    /* assert_similar - passing tests */
    $test->assert_similar(1, 1);
    $test->assert_similar("bacon", "bacon");
    $test->assert_similar(false, false);
    $test->assert_similar("Hello World", "Hello World");
    $test->assert_similar(0, 0);
    $test->assert_similar([], []);
    $test->assert_similar([3, 4, 5, 1, 2], [3, 4, 5, 1, 2]);
    $test->assert_similar(["hello" => "world", "eat" => "food", "drink" => "water"], ["hello" => "world", "eat" => "food", "drink" => "water"]);
    $test->assert_similar([[1], [2, 3], [4, [5, [6], 7], 8], 9, ["final" => 10]], [[1], [2, 3], [4, [5, [6], 7], 8], 9, ["final" => 10]]);

    /* assert_similar - failing tests */
    $test->assert_similar(1, 0);
    $test->assert_similar("bacon", "Hello World");
    $test->assert_similar(false, true);
    $test->assert_similar("Hello World", "bacon");
    $test->assert_similar(0, 1);
    $test->assert_similar([], [[[]]]);
    $test->assert_similar([3, 4, 5, 1, 2], [3, 4, 1, 5, 2]);
    $test->assert_similar(["hello" => "world"], ["hello" => "world", "eat" => "food", "drink" => "water"]);
    $test->assert_similar([[1], [2, 3], [4, [5, 6, 7], 8], 9, ["final" => 10]], [[1], [2, 3], [4, [5, [6], 7], 8], 9, ["final" => 10]]);

    /* assert_not_similar - passing tests */
    $test->assert_not_similar(1, 0);
    $test->assert_not_similar("bacon", "Hello World");
    $test->assert_not_similar(false, true);
    $test->assert_not_similar("Hello World", "bacon");
    $test->assert_not_similar(0, 1);
    $test->assert_not_similar([], [[[]]]);
    $test->assert_not_similar([3, 4, 5, 1, 2], [3, 4, 1, 5, 2]);
    $test->assert_not_similar(["hello" => "world"], ["hello" => "world", "eat" => "food", "drink" => "water"]);
    $test->assert_not_similar([[1], [2, 3], [4, [5, 6, 7], 8], 9, ["final" => 10]], [[1], [2, 3], [4, [5, [6], 7], 8], 9, ["final" => 10]]);

    /* assert_not_similar - failing tests */
    $test->assert_not_similar(1, 1);
    $test->assert_not_similar("bacon", "bacon");
    $test->assert_not_similar(false, false);
    $test->assert_not_similar("Hello World", "Hello World");
    $test->assert_not_similar(0, 0);
    $test->assert_not_similar([], []);
    $test->assert_not_similar([3, 4, 5, 1, 2], [3, 4, 5, 1, 2]);
    $test->assert_not_similar(["hello" => "world", "eat" => "food", "drink" => "water"], ["hello" => "world", "eat" => "food", "drink" => "water"]);
    $test->assert_not_similar([[1], [2, 3], [4, [5, [6], 7], 8], 9, ["final" => 10]], [[1], [2, 3], [4, [5, [6], 7], 8], 9, ["final" => 10]]);
  });
});
?>
