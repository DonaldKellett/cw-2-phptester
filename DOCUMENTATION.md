# PHP Test Reference

## Test

The `$test` object, which is an instance of the `Test` class, provides the functionality needed to validate a Kata's requirements.  Kindly refer to the Documentation below for more details.

### Pass/Fail Methods

#### $test->expect($passed, $msg)

Core assertion method that all other methods build off of.  `$msg` argument is optional.  If not provided, it defaults to `"Value was not what was expected"`; therefore it is highly recommended that you provide a custom message to aid the debugging process should the test fail.

Pass/Fail status will be written to `stdout`.

#### $test->assert_equals($actual, $expected, $msg)

Checks that the `$actual` value is identical to (`===`) the `$expected` value.  A useful message will be displayed for failed tests specifying both the actual and expected values.  The `$msg` argument is optional but best practice is to provide a useful custom `$msg`.  If specified, your custom message will be displayed along with the default message.

#### $test->assert_not_equals($actual, $expected, $msg)

Checks that the actual value is not identical to (`!==`) the expected value.  A useful message will be displayed for failing tests specifying what value should not have been returned.  The `$msg` argument is optional but best practice is to provide one.  The custom message (if specified) will be displayed along with the default message.

#### $test->assert_similar($actual, $expected, $msg)

Similar to `$test->assert_equals($actual, $expected, $msg)` except it also works when comparing arrays (both ordinary and associative).

#### $test->assert_not_similar($actual, $expected, $msg)

Similar to `$test->assert_not_equals($actual, $expected, $msg)` except it also works for PHP arrays in additional to primitive values.

#### $test->expect_error($msg, $fn)

Expects an `Exception` to be thrown in the function `$fn` being tested.  A pass is written to `stdout` if an `Exception` is thrown, fail otherwise.  The `$msg` argument is *required*.

#### $test->expect_no_error($msg, $fn)

Expects no `Exception` to be thrown in the function `$fn` to be tested.  A pass is written to `stdout` if no `Exception` is thrown; fail otherwise.  The `$msg` argument is *required*.

### Spec Methods

#### $test->describe($msg, $fn)

Top level method for describing/grouping a set of tests.

```php
$test->describe("Foo", function () {
  # PHP code here
});

// or, in older PHP versions

function my_tests() {
  # Test cases here
}
$test->describe("Foo", 'my_tests');
```

#### $test->it($msg, $fn)

Used in conjunction with `$test->describe($msg, $fn)` to group test cases by subcategory.  Must be used within a describe block; otherwise, an error is thrown.

```php
$test->describe("Foo", function () {
  global $test;
  $test->it("Bar", function () {
    # Test cases here
  });
});
```

### Helper Methods

#### $test->random_number()

Returns a random integer from 0 to 100 (both inclusive).

#### $test->random_token()

Returns a random string of length `8-10` consisting of only lowercase letters and/or digits.
