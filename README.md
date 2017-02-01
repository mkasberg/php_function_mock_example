# PHP Function Mocks

[![Build Status](https://img.shields.io/travis/mkasberg/php_function_mock_example.svg?style=flat-square)](https://travis-ci.org/mkasberg/php_function_mock_example)

![Codeship Status](https://codeship.com/projects/YOUR_PROJECT_UUID/status?branch=master)

A simple example of how to mock global functions in PHP.

Notice how HelloPrinter.php uses the print_r function. Then, notice how we 
override that function in our unit test class. This works because we are in a
namespace (that is not root, so we're not actually replacing print_r).

## Running

Run it like this:

```bash
phpunit test/HelloPrinterTest.php
```

