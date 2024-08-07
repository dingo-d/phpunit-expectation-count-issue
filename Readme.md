# Expect issue with PHPUnit

This is an MVP example of test issue in PHPUnit.

## Setup and inspect

Required PHP version: 8.2 (constructor property promotion and readonly attribute on a class).

Run `composer install` then `./vendor/bin/phpunit`

Output:

```bash
PHPUnit 9.6.20 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.4
Configuration: /Users/dzoljom/Projects/Personal/phpunit-test/phpunit.xml

F                                                                   1 / 1 (100%)

Time: 00:00.009, Memory: 6.00 MB

There was 1 failure:

1) ATest::testCountIsCalled
Expectation failed for method name is "count" when invoked 1 time(s).
Method was expected to be called 1 times, actually called 0 times.

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
```

The expectation is that the count will be invoked once per class.
